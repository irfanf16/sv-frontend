<style>
    #vizbot .iti__country-list--dropup {
        max-width: 272px;
        width: 272px;
    }

    #vizbot .iti--separate-dial-code .iti__selected-dial-code,
    #vizbot .iti__flag-box,
    #vizbot .iti__country-name,
    #vizbot .iti__dial-code {
        color: black;
    }
</style>

<script>
    var iti2 = null;
    var openMinimzieChat = 0;
    var idleInterval = 0, idleTimer = 0, timerInterval = 0, technicalInquiryFlag = 0;
    var closeTimer = $('#vizbot .chat-close-timer p').text();
    function startIdleTimer() {
        console.log('inside function start idle');

        // Clear existing timers
        if (typeof idleInterval !== 'undefined') clearInterval(idleInterval);
        if (typeof timerInterval !== 'undefined') clearInterval(timerInterval);

        scrollToBottom();

        // Initialize start time
        const startTime = $.now(); // jQuery alternative to performance.now()
        let minute = 1000 * 60; // 1 minute in milliseconds
        let customMinute = .5 * minute; // 30 seconds
        let idleTimer = 0;

        // console.log('Before starting setInterval, idleTimer:', idleTimer);

        setTimeout(() => {
            idleInterval = setInterval(() => {
                // console.log('setInterval is running...');
                const currentTime = $.now();
                idleTimer = Math.floor(currentTime - startTime);
                console.log('Updated Idle Timer:', idleTimer);

                if (idleTimer >= customMinute) {
                    // console.log('Idle time exceeded, stopping interval...');
                    clearInterval(idleInterval);
                    chat_idle_msg();
                    $('#chat-form').hide();
                    $('#vizbot .chat-close-timer, #vizbot .chat-close-btns').show();
                    startCountDownTimer(.5);
                }
            }, 1);
        }, 100);
        // Run every second
    }

    function startCountDownTimer(startMinutes) {
        scrollToBottom();
        let timerValue = startMinutes * 60 * 1000;
        timerInterval = setInterval(() => {
            let totalSeconds = Math.floor(timerValue / 1000);
            let minutes = Math.floor(totalSeconds / 60);
            let seconds = totalSeconds % 60;
            let milliseconds = Math.floor((timerValue % 1000) / 10);

            let formattedTime = `${minutes} : ${seconds < 10 ? '0' : ''}${seconds} : ${milliseconds < 10 ? '0' : ''}${milliseconds}`;

            $('#vizbot .chat-close-timer p').text(formattedTime);

            if (timerValue <= 0) {
                clearInterval(idleInterval);
                clearInterval(timerInterval);
                scrollToBottom();
                // $('#vizbot #chat-body,#vizbot .chat-close-timer,#vizbot .chat-close-btns').hide();
                $('#vizbot #chat-body').hide();
                chat_end_msg();
                $('.date-time').remove();
                sendVizbotHTMLForm();
            }

            timerValue -= 10;
        }, 10);
    }


    function closeChatForm() {
        let clientMsgCount = $('#vizbot .client-msg').length;
        if (clientMsgCount > 0) {
            clearInterval(timerInterval);
            clearInterval(idleInterval);
            let closeChatMsg = $('#chat-close-msg').length;
            if (closeChatMsg < 1) {
                chat_close_msg();
                $('#vizbot .chat-close-timer,#vizbot .chat-close-btns,#vizbot .chat-close-btns-user,#vizbot .options-list-msg,#vizbot #chat-form,#vizbot #client-info-form').hide();
                $('#vizbot .chat-close-btns-user').show();
                $('#chat-close-msg').remove();
                scrollToBottom();
            }
        }
        else {
            $('#vizbot').hide();
        }
    }
    function minimizeForm() {
        document.getElementById("vizbot").style.display = "none";
    }

    // function getSettings() {
    //   document.getElementById("chat-screen").style.display = "none";
    //   document.getElementById("chat-settings").style.display = "block";
    // }

    // function hideSettings() {
    //     document.getElementById("chat-settings").style.display = "none";
    //     document.getElementById("chat-screen").style.display = "block";
    //     document.getElementById("start-chat-text").style.display = "none";
    //     document.getElementById("start-chat-button").innerHTML = "Save Settings";
    //     scrollToBottom();
    // }

    function scrollToBottom() {
        var objDiv = document.getElementById("chat-body");
        objDiv.scrollTop = objDiv.scrollHeight;
    }

    get_meg();

    function get_meg() {
        $(document).on('submit', '#chat-form', function (event) {
            event.preventDefault();
            var data_name = $(this).find('#chat-reply-input').val().trim();
            if (data_name == '') {
                $('#chat-form-server-error').text('Please type something').show();
            } else {
                $('#chat-form-server-error').text('').hide();
                var time_now = getFormattedTime();
                var history = [];
                var user_post = '<div class="client-msg"><div class="text" title="' + time_now + '"><p>' + data_name + '</p></div><p class="date-time">' + time_now + '</p></div>';
                $('.date-time,#vizbot .options-list-msg').remove();
                $('#vizbot .chat-body').append(user_post);
                $(this).find('textarea').val('');
                scrollToBottom();
                $(this).find('#chat-reply-input').val('');
                var loader = '<div class="system-msg loader-row-msg"><div class="d-flex"><div class="img"><img src="{{ asset('public/assets/img/vizbot-icon.png')}}" alt="Vizbot Image"></div> <div class="loader-dots"><div class="loader-dot"></div><div class="loader-dot"></div><div class="loader-dot"></div></div></div></div>';
                $('#vizbot .chat-body').append(loader);
                scrollToBottom();
                clearInterval(timerInterval);
                clearInterval(idleInterval);
                $('#vizbot .other-options-box .box-body .single-option-btn').removeClass('disabled');
                $.ajax({
                    url: app_ajax_chat,  // Your endpoint
                    type: "POST",  // HTTP method
                    contentType: "application/json",  // Ensures the server knows it's JSON
                    data: JSON.stringify({  // Serialize the data into JSON format
                        user_query: data_name,  // Include your user query
                        history: history  // Ensure 'history' is defined and valid
                    }),
                    success: function (response) {
                        var formattedmsg = convertLinksToHTML(response.response);
                        $('.date-time,#vizbot .chat-body .loader-row-msg').remove();
                        var time_reply = getFormattedTime();
                        var user_reply = '<div class="system-msg"><div class="d-flex"><div class="img"><img src="{{ asset('public/assets/img/vizbot-icon.png')}}" alt="Vizbot Image"></div><div class="text-box"><div class="text" title="' + time_reply + '">' + formattedmsg + '</div><p class="date-time">' + time_reply + '</p></div></div></div>';
                        $('#vizbot .chat-body').append(user_reply);
                        scrollToBottom();
                    },
                    error: function (xhr, status, error) {
                        console.log("Request failed:", error);
                    }
                });
                startIdleTimer();
            }
        })
        return false;
    }

    function getFormattedTime() {
        const date = new Date();
        let hours = date.getHours();
        let minutes = date.getMinutes();
        const ampm = hours >= 12 ? 'PM' : 'AM';
        // Convert to 12-hour format
        hours = hours % 12;
        hours = hours ? hours : 12; // 0 becomes 12
        // Format minutes to always have two digits
        minutes = minutes < 10 ? '0' + minutes : minutes;
        return `${hours}:${minutes} ${ampm}`;
    }

    //Let's detect iOS because display issues. Not used yet, but we'll need it to fix some things, I think.
    function iOS() {
        var iDevices = [
            "iPad Simulator",
            "iPhone Simulator",
            "iPod Simulator",
            "iPad",
            "iPhone",
            "iPod"
        ];

        if (!!navigator.platform) {
            while (iDevices.length) {
                if (navigator.platform === iDevices.pop()) {
                    return true;
                }
            }
        }
        return false;
    }

    function sendVizbotHTMLForm() {
        clearInterval(timerInterval);
        clearInterval(idleInterval);

        document.getElementById("vizbot").style.display = "none";
        $('#vizbot #chat-form,#vizbot .chat-body, #vizbot .chat-close-timer, #vizbot .chat-close-btns, #vizbot .chat-close-btns-user').hide();
        // Retrieve the data from localStorage
        let storedData = localStorage.getItem('chat_bot_client_data');
        let clientName = '', clientEmail = '';
        // Parse the JSON string into an object
        if (storedData) {
            let parsedData = JSON.parse(storedData);

            clientName = parsedData.client_name;
            clientEmail = parsedData.client_email;
            clientPhone = parsedData.client_phone;

        }

        // Select the element containing the dynamically generated HTML
        let $chatBody = $('#vizbot #chat-body');

        // Find all .client-msg divs that contain 'technical inquiries' (case-insensitive)
        let matchingMessages = $chatBody.find('.client-msg').filter(function () {
            return /technical inquiry/i.test($(this).text()); // Case-insensitive search
        });

        // Check if any matching messages were found
        if (matchingMessages.length > 0) {
            technicalInquiryFlag = 1;
        }
        // Loop through system messages and convert to table format
        $chatBody.find('.system-msg').each(function () {
            let $this = $(this);
            let messageContent = $this.html();
            let time = $(this).find('.text').attr('title');

            // Replace .system-msg content with a table-based structure
            let tableHTML = `<table width="100%" cellspacing="0" cellpadding="10">
                                <tr>
                                    <td>
                                        <div style="display: flex;">
                                            <div>
                                                <img src="https://staffviz.com/public/assets/img/vizbot-icon.png" style="width:37px;margin-top: 15px; margin-right:10px; display:block!important;" class="chatbot-img" alt="Vizbot Image">
                                            </div>
                                            <div>
                                                <table>
                                                    <tbody>
                                                        <tr>
                                                            <td style="padding:0">
                                                                <p style="margin: 10px 0 5px;font-size: 16px;"><b>Vizbot</b> <span style="color: #919191;font-size: 11px;margin-left: 10px;">`+ time + `</span></p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td style="padding:0" >
                                                            <table cellspacing="0" cellpadding="10" style="background: #f7f7f7;font-family: Arial, sans-serif;border-radius:10px">
                                                                <tr>
                                                                    <td style="font-size: 14px; padding: 10px; text-align: left;">${messageContent}</td>
                                                                </tr>
                                                            <td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            </table>`;
            $this.replaceWith(tableHTML);
        });

        // Loop through client messages and convert to table format
        $chatBody.find('.client-msg').each(function () {
            let $this = $(this);
            let messageContent = $this.html();
            let time = $(this).find('.text').attr('title');

            // Replace .client-msg content with a right-aligned table
            let tableHTML = `<table align="right" style="width: 100%">
                        <tr>
                          <td style="padding:0">
                            <table align="right"  cellspacing="0" cellpadding="10">
                                <tr>
                                    <td style="padding:0">
                                        <p style="width:max-content;margin-left: auto;margin-top: 10px;margin-bottom: 5px; display: block;font-size: 16px;">
                                            <b>`+ clientName + `</b> <span style="color: #919191;font-size: 11px;margin-left: 10px;">` + time + `</span>
                                        </p>
                                    </td>
                                </tr>
                            </table>
                          </td>
                        </tr>
                        <tr>
                            <td style="padding:0">
                            <table align="right" cellspacing="0" cellpadding="10" style="background: #1277fd;font-family: Arial, sans-serif;border-radius: 10px">
                                <tr>
                                    <td style="color: white; font-size: 14px; padding: 10px; text-align: left;">${messageContent}</td>
                                </tr>
                            <td>
                        </tr>
                    </table>`;
            $this.replaceWith(tableHTML);
        });

        // Hide images (Outlook-safe method: visibility:hidden and width/height to 0)
        $chatBody.find('.img,.img img').each(function () {
            let $img = $(this);

            // Replace inline styles with Outlook-safe dimensions
            $img.attr('style', 'width: 0px; height: 0px; mso-hide: all;opacity: 0;');

            // Ensure alt text is empty
            $img.attr('alt', '');

        });

        // Remove .form-back-btn elements
        $chatBody.find('.form-back-btn').remove();
        $chatBody.find('.date-time').remove();
        // Remove <tr><td></td></tr> specifically
        $chatBody.find('tr:has(td:only-child:empty)').remove();
        let gradient = $('#gradient_img').val();
        console.log('gradient:' + gradient);
        // Updated HTML content
        let updatedHTML = $chatBody.html();
        $('#vizbot .other-options-box .box-body .single-option-btn').addClass('disabled');
        // var client
        $.ajax({
            url: app_ajax_url + "vizbot-email-post",
            type: "POST",
            data: {
                vizbot_html: updatedHTML,
                technical_flag: technicalInquiryFlag,
                client_name: clientName,
                client_email: clientEmail,
                client_phone: clientPhone,
                gradient: gradient
            },
            headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content")
            },
            dataType: "JSON",
            success: function (e) {
                $('#vizbot #chat-body').html('').show();
                localStorage.removeItem('chatbotContent');
                clearInterval(timerInterval);
                clearInterval(idleInterval);
                openMinimzieChat = 0;
                technicalInquiryFlag = 0;
                check_chatbot_user_status();
            },
            fail: function (jqXHR, textStatus, errorThrown) {

            }
        });
    }

    // Client side validation
    $(document).on('submit', '#vizbot #client-info-form', function (e) {
        e.preventDefault();
        $('.info-form-error').text('').hide();
        $(this).find('.submit-btn').addClass('disabled');
        let mainForm = $(this);
        let isValid = true;

        // Validate Client Name
        let clientName = mainForm.find('#client_name').val().trim();
        if (clientName == '') {
            mainForm.find('#client-name-error').show().text('This field is required');
            isValid = false;
            $('#client-info-form .submit-btn').removeClass('disabled');
        } else {
            mainForm.find('#client-name-error').hide().text('');
        }

        // Validate Client Email
        let clientEmail = mainForm.find('#client_email').val().trim();
        const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (clientEmail == '') {
            mainForm.find('#client-email-error').show().text('This field is required');
            isValid = false;
            $('#client-info-form .submit-btn').removeClass('disabled');
        } else if (!emailPattern.test(clientEmail)) {
            mainForm.find('#client-email-error').show().text('Please enter a valid email address');
            isValid = false;
            $('#client-info-form .submit-btn').removeClass('disabled');
        } else {
            mainForm.find('#client-email-error').hide().text('');
        }

        const phoneInput = mainForm.find('#client_phone')[0];

        const phoneValue = phoneInput.value.trim();
        console.log('given phone:' + phoneValue);
        if (phoneValue !== '') {
            const formattedPhone = iti2.getNumber(intlTelInputUtils.numberFormat.E164);

            if (!iti2.isValidNumber()) {
                mainForm.find('#client-phone-error').show().text('Please enter a valid phone number.');
                isValid = false;
                $('#client-info-form .submit-btn').removeClass('disabled');
            } else {
                mainForm.find('#client-phone-error').hide().text('');
            }
        } else {
            mainForm.find('#client-phone-error').hide().text('');
        }

        if (isValid) {
            $.ajax({
                url: app_ajax_url + "save_guest_client",
                type: "POST",
                cache: !1,
                data: mainForm.serialize(),
                headers: {
                    "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
                },
                datatype: "JSON",
                success: function (e) {
                    // Save client data to localStorage
                    localStorage.setItem("chat_bot_client_data", JSON.stringify(e.data));
                    $('#client-info-form .submit-btn').removeClass('disabled');
                    $('#chat-form').removeClass('disabled');
                    $('#vizbot #chat-screen #first-msg').remove();
                    $('#vizbot #chat-screen #client-info-form').hide();

                    // Retrieve and parse user data
                    let userData = localStorage.getItem('chat_bot_client_data');
                    userData = JSON.parse(userData);
                    let clientName = userData.client_name;

                    // Handle chatbot initialization after form submission
                    chat_first_msg_after_form();
                    $('#first-msg-after-form .client-name-text').text(clientName);
                    chat_options_list_msg();
                    $('#vizbot #chat-screen #chat-form').show();
                    $('#client-form-server-error').text('').hide();

                    // Save updated chatbot state to localStorage
                    const chatbotContent = $('#vizbot').html();
                    localStorage.setItem("chatbotContent", chatbotContent);
                    localStorage.setItem("chatbotVisibility", "visible");

                    // Set up the chatbot for re-initialization
                    function restartChatbot() {
                        $('#vizbot').html(chatbotContent); // Restore the chat HTML
                        $('#vizbot').show(); // Ensure chatbot is visible
                        chat_first_msg_after_form(); // Re-initialize messages
                        $('#first-msg-after-form .client-name-text').text(clientName);
                        chat_options_list_msg(); // Re-populate options
                    }

                    // Restart the chatbot if re-opened
                    window.addEventListener("storage", function (event) {
                        if (event.key === "chatbotVisibility" && localStorage.getItem("chatbotVisibility") === "visible") {
                            restartChatbot();
                        }
                    });
                },
                error: function (xhr, ajaxOptions, thrownError) {
                    console.log(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
                    const response = JSON.parse(xhr.responseText);
                    $('#client-form-server-error').text(response.message).show();
                    $('#client-info-form .submit-btn').removeClass('disabled');
                }
            });
        }
    });


    /* Chatbot all default msgs */
    function chat_first_msg() {
        $('.date-time').remove();
        var time_now = getFormattedTime();
        let msg = `<div class="system-msg" id="first-msg">
          <div class="d-flex">
            <div class="img"><img src="{{ asset('public/assets/img/vizbot-icon.png')}}" alt="Vizbot Image"></div>
            <div class="text-box">
              <div class="text" title="` + time_now + `">
                <p>Hey! I’m VizBot, your StaffViz Guru. How can I help? 😊</p>
              </div>
            </div>
          </div>
        </div>`;
        $('#vizbot .chat-body').append(msg);
    }

    function chat_first_msg_after_form() {
        $('.date-time').remove();
        var time_now = getFormattedTime();
        let msg = `<div class="system-msg" id="first-msg-after-form">
          <div class="d-flex">
            <div class="img"><img src="{{ asset('public/assets/img/vizbot-icon.png')}}" alt="Vizbot Image"></div>
            <div class="text-box">
              <div class="text" title="` + time_now + `">
                <p>Hey <span class="client-name-text"></span>! I’m VizBot, your StaffViz Guru. How can I help? 😊</p>
              </div>
            </div>
          </div>
        </div>`;
        $('#vizbot .chat-body').append(msg);
    }

    function chat_welcome_back_msg() {
        $('.date-time').remove();
        var time_now = getFormattedTime();
        let msg = `<div class="system-msg" id="welcome-back-msg">
          <div class="d-flex">
            <div class="img"><img src="{{ asset('public/assets/img/vizbot-icon.png')}}" alt="Vizbot Image"></div>
            <div class="text-box">
              <div class="text" title="` + time_now + `">
                <p>Welcome Back <span class="client-name-text"></span>!
                  How can I assist you today?</p>
              </div>
            </div>
          </div>
          <button type="button" class="btn form-back-btn">Not <span class="client-name-text"></span>? </button>
        </div>`;
        $('#vizbot .chat-body').append(msg);
    }

    function chat_idle_msg() {
        $('.date-time').remove();
        var time_now = getFormattedTime();
        let msg = `<div class="system-msg">
          <div class="d-flex">
            <div class="img"><img src="{{ asset('public/assets/img/vizbot-icon.png')}}" alt="Vizbot Image"></div>
            <div class="text-box">
              <div class="text" title="` + time_now + `">
                <p>Looks like you’re away. Just drop a message if you are still with me!</p>
              </div>
              <p class="date-time">` + time_now + `</p>
            </div>
          </div>
        </div>`;
        $('#vizbot .chat-body').append(msg);
    }

    function chat_options_list_msg() {
        $('.date-time').remove();
        var time_now = getFormattedTime();
        let msg = `<div class="options-list-msg" title="` + time_now + `">
          <div class="msg-box">
            <div class="msg-header">
              <p>How can I help you? 👇</p>
            </div>
            <ul>
              <li>
                <button class="btn schedule-demo-btn">Schedule a Demo</button>
              </li>
              <li>
                <button class="btn schedule-demo-btn">Discuss Pricing</button>
              </li>
              <li>
                <button class="btn schedule-demo-btn">Technical Inquiry </button>
              </li>
              <li>
                <button class="btn schedule-demo-btn">Become An Affiliate</button>
              </li>
            </ul>
          </div>
        <p class="date-time">` + time_now + `</p>
        </div>`;
        $('#vizbot .chat-body').append(msg);
    }

    function chat_close_msg() {
        $('.date-time').remove();
        var time_now = getFormattedTime();
        let msg = `<div class="system-msg" id="chat-close-msg">
          <div class="d-flex">
            <div class="img"><img src="{{ asset('public/assets/img/vizbot-icon.png')}}" alt="Vizbot Image"></div>
            <div class="text-box">
              <div class="text" title="` + time_now + `">
                <p>Oops! Looks like you pressed the close chat button.</p>
              </div>
            </div>
          </div>
        </div>`;
        $('#vizbot .chat-body').append(msg);
    }

    function chat_end_msg() {
        $('.date-time').remove();
        var time_now = getFormattedTime();
        let msg = `<div class="system-msg" id="chat-close-msg">
      <div class="d-flex">
        <div class="img"><img src="{{ asset('public/assets/img/vizbot-icon.png')}}" alt="Vizbot Image"></div>
        <div class="text-box">
          <div class="text" title="` + time_now + `">
            <p>This chat has been auto-closed.</p>
          </div>
        </div>
      </div>
    </div>`;
        $('#vizbot .chat-body').append(msg);
    }
    /* End Chatbot all default msgs */

    function initializeIntlTelInput(input) {
        iti2 = window.intlTelInput(input, {
            hiddenInput: input.id,
            separateDialCode: true,
            nationalMode: true,
            formatOnDisplay: true,
            utilsScript: "https://cdn.jsdelivr.net/npm/intl-tel-input@18.2.1/build/js/utils.js",
        });

        input.dataset.intlTelInit = "true";

        input.addEventListener("countrychange", () => {
            const countryData = iti2.getSelectedCountryData();

            const exampleNumber = intlTelInputUtils.getExampleNumber(
                countryData.iso2,
                true,
                intlTelInputUtils.numberType.MOBILE
            );
            input.placeholder = exampleNumber;
        });
    }

    function check_chatbot_user_status() {
        if (localStorage.getItem('chat_bot_client_data') == null) {
            chat_first_msg();
            $('#client-info-form, #chat-form').show();
            $('#chat-form').addClass('disabled');

        } else {
            let userData = JSON.parse(localStorage.getItem('chat_bot_client_data'));
            let clientName = userData.client_name;
            chat_welcome_back_msg();
            $('#welcome-back-msg .client-name-text').text(clientName);
            chat_options_list_msg();
            $('#chat-form').show();
        }
        const phoneInput = document.getElementById("client_phone");
        if (phoneInput) {
            if (phoneInput.isConnected) {
                initializeIntlTelInput(phoneInput);
            } else {
                $("#client_phone").each(function () {
                    initializeIntlTelInput(this);
                });
            }
        }
    }


    $(document).ready(function () {
        //Allow telephone characters only
        $('#client_phone').on('keypress', function (event) {
            const allowedChars = /^[0-9+\-\(\)\s]$/;
            const key = String.fromCharCode(event.which);

            if (!allowedChars.test(key)) {
                event.preventDefault();
            }
        });
    });
    $(document).ready(function () {
        // Return to first chatbot info form if it is not same user
        $(document).on('click', '#vizbot .chat-body .system-msg .form-back-btn', function (e) {
            e.preventDefault();
            $('#vizbot #chat-screen #welcome-back-msg, #vizbot #chat-screen .options-list-msg').remove();
            chat_first_msg();
            $('#vizbot #client-info-form, #vizbot #chat-form').show();
        });
        //Continue chat on clicking 'drop a msg' button in chatbot
        $(document).on('click', '#vizbot .drop-msg-btn', function (e) {
            e.preventDefault();
            clearInterval(timerInterval);
            clearInterval(idleInterval);
            $('#vizbot .chat-close-timer,#vizbot .chat-close-btns,#vizbot .chat-close-btns-user').hide();
            $('#vizbot #chat-form').show();
            $('#vizbot #chat-form #chat-reply-input').focus();
            startIdleTimer();
        });
        //Go to chatbot rating screen on cliking 'end chat button'
        $(document).on('click', '#vizbot .end-chat-btn', function (e) {
            e.preventDefault();
            clearInterval(timerInterval);
            clearInterval(idleInterval);
            sendVizbotHTMLForm();
        });
        // send response against four options
        $(document).on('click', '#vizbot .options-list-msg ul li .btn', function (e) {
            // console.log('before btn click');
            // console.log('after btn click')
            let btnText = $(this).text();
            var time_now = getFormattedTime();
            var history = [];
            var user_post = '<div class="client-msg"><div class="text" title="' + time_now + '"><p>' + btnText + '</p></div><p class="date-time">' + time_now + '</p></div>';
            $('.date-time').remove();
            $('#vizbot .chat-body').append(user_post);
            $(this).find('textarea').val('');
            scrollToBottom();
            $(this).find('#chat-reply-input').val('');
            var loader = '<div class="system-msg loader-row-msg"><div class="d-flex"><div class="img"><img src="{{ asset('public/assets/img/vizbot-icon.png')}}" alt="Vizbot Image"></div> <div class="loader-dots"><div class="loader-dot"></div><div class="loader-dot"></div><div class="loader-dot"></div></div></div></div>';
            $('#vizbot .options-list-msg').remove()
            $('#vizbot .chat-body').append(loader);
            clearInterval(timerInterval);
            clearInterval(idleInterval);
            scrollToBottom();
            $('#vizbot .other-options-box .box-body .single-option-btn').removeClass('disabled');
            $.ajax({
                url: app_ajax_chat,  // Your endpoint
                type: "POST",  // HTTP method
                contentType: "application/json",  // Ensures the server knows it's JSON
                data: JSON.stringify({  // Serialize the data into JSON format
                    user_query: btnText,  // Include your user query
                    history: history  // Ensure 'history' is defined and valid
                }),
                success: function (response) {
                    $('.date-time,#vizbot .chat-body .loader-row-msg').remove();
                    var time_reply = getFormattedTime();
                    var formattedmsg = convertLinksToHTML(response.response);
                    var user_reply = '<div class="system-msg"><div class="d-flex"><div class="img"><img src="{{ asset('public/assets/img/vizbot-icon.png')}}" alt="Vizbot Image"></div><div class="text-box"><div class="text" title="' + time_reply + '">' + formattedmsg + '</div><p class="date-time">' + time_reply + '</p></div></div></div>';
                    $('#vizbot .chat-body').append(user_reply);
                    scrollToBottom();
                },
                error: function (xhr, status, error) {
                    console.log("Request failed:", error);
                }
            });
            startIdleTimer();
        });
    });

    // Track AJAX progress using global AJAX events
    let isAjaxInProgress = false;
    $(document).on('ajaxStart', () => isAjaxInProgress = true);
    $(document).on('ajaxStop', () => isAjaxInProgress = false);


    function resumeStoppedTimer() {
        if (timerInterval) return; // Prevent multiple intervals.

        let timerValueText = $('#vizbot .chat-close-timer p').text().trim();
        let [hours, minutes, seconds] = timerValueText.split(':').map(Number);

        // Convert the timer value into milliseconds
        let timerValue = (hours * 3600 + minutes * 60 + seconds) * 1000;

        // Capture the start time in milliseconds
        let startTime = Date.now();

        timerInterval = setInterval(() => {
            let elapsed = Date.now() - startTime; // Elapsed time in milliseconds
            let remainingTime = Math.max(timerValue - elapsed, 0); // Remaining time in milliseconds

            // Convert remaining time to hours, minutes, and seconds
            let totalSeconds = Math.floor(remainingTime / 1000); // Convert milliseconds to seconds
            let currentHours = Math.floor(totalSeconds / 3600);
            let currentMinutes = Math.floor((totalSeconds % 3600) / 60);
            let currentSeconds = totalSeconds % 60;

            // Format the time string
            let formattedTime = `${currentHours.toString().padStart(2, '0')}:${currentMinutes.toString().padStart(2, '0')}:${currentSeconds.toString().padStart(2, '0')}`;
            $('#vizbot .chat-close-timer p').text(formattedTime);

            // Handle when the timer reaches 0
            if (remainingTime <= 0) {
                clearInterval(timerInterval);
                timerInterval = null; // Reset the interval to allow restarting if needed.
                scrollToBottom();
                // saveChatbotHTML();
                $('#vizbot #chat-body').hide();
                chat_end_msg();
                $('.date-time').remove();
                sendVizbotHTMLForm();
            }
        }, 1000); // Update every second
    }


    document.addEventListener("DOMContentLoaded", function () {
        // Initialize the chatbot
        function initializeChatbot() {
            const chatbotContent = localStorage.getItem("chatbotContent");
            const visibilityState = localStorage.getItem("chatbotVisibility");

            // Ensure the #vizbot element exists
            const vizbotElement = document.getElementById("vizbot");
            if (!vizbotElement) {
                console.error("Element with id 'vizbot' not found.");
                return;
            }

            // Restore chatbot content if available
            if (chatbotContent) {
                $('#vizbot').html(chatbotContent);
            } else {
                console.log("No content found, checking user status...");
                check_chatbot_user_status(); // First-time initialization
            }

            // Set visibility based on saved state
            vizbotElement.style.display =
                visibilityState === "visible" ? "block" : "none";
        }

        // Save chatbot content and visibility to localStorage when changes occur or the tab is closed
        function saveChatbotContent() {
            const chatbotContent = $('#vizbot').html();
            localStorage.setItem("chatbotContent", chatbotContent);
            localStorage.setItem("chatbotLastActive", Date.now()); // Save a timestamp for the last update

            // Save the visibility state of the chatbot
            const isVisible = $('#vizbot').is(":visible");
            localStorage.setItem("chatbotVisibility", isVisible ? "visible" : "hidden");
        }

        // Listen for changes to localStorage and update chatbot in other tabs
        window.addEventListener("storage", function (event) {
            const vizbotElement = document.getElementById("vizbot");
            if (!vizbotElement) return; // Skip if #vizbot doesn't exist

            if (event.key === "chatbotVisibility") {
                const visibilityState = localStorage.getItem("chatbotVisibility");
                vizbotElement.style.display =
                    visibilityState === "visible" ? "block" : "none";
            }

            if (event.key === "chatbotContent") {
                const updatedContent = localStorage.getItem("chatbotContent");
                if (updatedContent) {
                    $('#vizbot').html(updatedContent); // Update the HTML content
                    if ($('#vizbot .chat-close-timer').is(':visible')) {
                        resumeStoppedTimer();
                    }
                }
            }
        });
        // Periodically save the content to ensure changes are synced
        setInterval(saveChatbotContent, 2500);

        // Call initializeChatbot after DOM is ready
        initializeChatbot();
    });



    // Close the chatbot form and save the state
    function closeForm() {
        const vizbotElement = document.getElementById("vizbot");
        if (vizbotElement) {
            vizbotElement.style.display = "none"; // Hide the chat window
            localStorage.setItem("chatbotVisibility", "hidden");
        }
    }

    // Open the chatbot form and initialize the state
    function openForm() {
        const vizbotElement = document.getElementById("vizbot");
        if (vizbotElement) {
            vizbotElement.style.display = "block"; // Show the chat window
            localStorage.setItem("chatbotVisibility", "visible");
        }
    }

    function convertLinksToHTML(text) {
        // Convert markdown and other text to HTML
        let processedText = text
            .replace(/^# (.+)$/gm, '<p>$1</p>')
            .replace(/^## (.+)$/gm, '<p>$1</p>')
            .replace(/^### (.+)$/gm, '<p>$1</p>')
            .replace(/^> (.+)$/gm, '<blockquote>$1</blockquote>')
            .replace(/(?:^|\n)(\d+\..+(?:\n\d+\..+)*)/g, (match) => {
                const items = match.trim().split('\n').map(item =>
                    item.replace(/\d+\.\s(.+)/, '<li>$1</li>')).join('');
                return `<ul>${items}</ul>`;
            })
            .replace(/(?:^|\n)([-*]\s.+(?:\n[-*]\s.+)*)/g, (match) => {
                const items = match.trim().split('\n').map(item =>
                    item.replace(/[-*]\s(.+)/, '<li>$1</li>')).join('');
                return `<ul>${items}</ul>`;
            })
            .replace(/\*\*(.+?)\*\*/g, '<strong>$1</strong>')
            .replace(/\*(.+?)\*/g, '<em>$1</em>')
            .replace(/`(.+?)`/g, '<code>$1</code>')
            .replace(/\[([^\]]+)\]\(([^)]+)\)/g, '<a href="$2" target="_blank">$1</a>')
            .replace(/^(?!<[^>]+>)(.+)$/gm, '<p>$1</p>')
            .replace(/\n+/g, '');

        // Convert standalone URLs into clickable links
        processedText = processedText.replace(
            /(?:^|[^">])(https?:\/\/[^\s<]+)/g,
            (match, url) => {
                // Check if the URL is already part of an <a> tag
                if (/<a[^>]*?>.*?https?:\/\/[^\s<]+.*?<\/a>/.test(match)) {
                    return match;
                }

                // Ensure space before the clickable URL
                const precedingChar = match[match.length - url.length - 1];
                const needsSpace = precedingChar && !/\s/.test(precedingChar);

                return match.trim().replace(
                    url,
                    `${needsSpace ? ' ' : ''}<a href="${url}" target="_blank">${url}</a>`
                );
            }
        );

        return processedText;
    }
    $(document).on('click', '#vizbot .other-options-btn', function (e) {
        e.preventDefault();
        $('#vizbot .other-options-box').toggle();
    });
    $(document).on('click', '#vizbot .other-options-box #restart-chat-btn', function (e) {
        e.preventDefault();
        var clientmsgLength = $('#vizbot .client-msg').length;
        if ((!($(this).hasClass('disabled'))) && clientmsgLength > 0) {

            clearInterval(timerInterval);
            clearInterval(idleInterval);
            // Retrieve the data from localStorage
            let storedData = localStorage.getItem('chat_bot_client_data');
            let clientName = '', clientEmail = '';
            // Parse the JSON string into an object
            if (storedData) {
                let parsedData = JSON.parse(storedData);

                clientName = parsedData.client_name;
                clientEmail = parsedData.client_email;
                clientPhone = parsedData.client_phone;

            }

            // Select the element containing the dynamically generated HTML
            let $chatBody = $('#vizbot #chat-body');

            // Find all .client-msg divs that contain 'technical inquiries' (case-insensitive)
            let matchingMessages = $chatBody.find('.client-msg').filter(function () {
                return /technical inquiry/i.test($(this).text()); // Case-insensitive search
            });

            // Check if any matching messages were found
            if (matchingMessages.length > 0) {
                technicalInquiryFlag = 1;
            }
            // Loop through system messages and convert to table format
            $chatBody.find('.system-msg').each(function () {
                let $this = $(this);
                let messageContent = $this.html();
                let time = $(this).find('.text').attr('title');

                // Replace .system-msg content with a table-based structure
                let tableHTML = `<table width="100%" cellspacing="0" cellpadding="10">
                                <tr>
                                    <td>
                                        <div style="display: flex;">
                                            <div>
                                                <img src="https://staffviz.com/public/assets/img/vizbot-icon.png" style="width:37px;margin-top: 15px; margin-right:10px; display:block!important;" class="chatbot-img" alt="Vizbot Image">
                                            </div>
                                            <div>
                                                <table>
                                                    <tbody>
                                                        <tr>
                                                            <td style="padding:0">
                                                                <p style="margin: 10px 0 5px;font-size: 16px;"><b>Vizbot</b> <span style="color: #919191;font-size: 11px;margin-left: 10px;">`+ time + `</span></p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td style="padding:0" >
                                                            <table cellspacing="0" cellpadding="10" style="background: #f7f7f7;font-family: Arial, sans-serif;border-radius:10px">
                                                                <tr>
                                                                    <td style="font-size: 14px; padding: 10px; text-align: left;">${messageContent}</td>
                                                                </tr>
                                                            <td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            </table>`;
                $this.replaceWith(tableHTML);
            });

            // Loop through client messages and convert to table format
            $chatBody.find('.client-msg').each(function () {
                let $this = $(this);
                let messageContent = $this.html();
                let time = $(this).find('.text').attr('title');

                // Replace .client-msg content with a right-aligned table
                let tableHTML = `<table align="right" style="width: 100%">
                        <tr>
                          <td style="padding:0">
                            <table align="right"  cellspacing="0" cellpadding="10">
                                <tr>
                                    <td style="padding:0">
                                        <p style="width:max-content;margin-left: auto;margin-top: 10px;margin-bottom: 5px; display: block;font-size: 16px;">
                                            <b>`+ clientName + `</b> <span style="color: #919191;font-size: 11px;margin-left: 10px;">` + time + `</span>
                                        </p>
                                    </td>
                                </tr>
                            </table>
                          </td>
                        </tr>
                        <tr>
                            <td style="padding:0">
                            <table align="right" cellspacing="0" cellpadding="10" style="background: #1277fd;font-family: Arial, sans-serif;border-radius: 10px">
                                <tr>
                                    <td style="color: white; font-size: 14px; padding: 10px; text-align: left;">${messageContent}</td>
                                </tr>
                            <td>
                        </tr>
                    </table>`;
                $this.replaceWith(tableHTML);
            });

            // Hide images (Outlook-safe method: visibility:hidden and width/height to 0)
            $chatBody.find('.img,.img img').each(function () {
                let $img = $(this);

                // Replace inline styles with Outlook-safe dimensions
                $img.attr('style', 'width: 0px; height: 0px; mso-hide: all;opacity: 0;');

                // Ensure alt text is empty
                $img.attr('alt', '');

            });

            // Remove .form-back-btn elements
            $chatBody.find('.form-back-btn').remove();
            $chatBody.find('.date-time').remove();
            // Remove <tr><td></td></tr> specifically
            $chatBody.find('tr:has(td:only-child:empty)').remove();
            let gradient = $('#gradient_img').val();
            console.log('gradient:' + gradient);
            // Updated HTML content
            let updatedHTML = $chatBody.html();
            // var client


            $('#vizbot .chat-close-timer, #vizbot .chat-close-btns, #vizbot .chat-close-btns-user').hide();
            $('#vizbot #chat-body').html('');
            let userData = JSON.parse(localStorage.getItem('chat_bot_client_data'));
            clientName = userData.client_name;
            chat_welcome_back_msg();
            $('#welcome-back-msg .client-name-text').text(clientName);
            chat_options_list_msg();
            $('#vizbot .other-options-box').hide();
            $('#vizbot .other-options-box .box-body .single-option-btn').addClass('disabled');
            $.ajax({
                url: app_ajax_url + "vizbot-email-post",
                type: "POST",
                data: {
                    vizbot_html: updatedHTML,
                    technical_flag: technicalInquiryFlag,
                    client_name: clientName,
                    client_email: clientEmail,
                    client_phone: clientPhone,
                    gradient: gradient
                },
                headers: {
                    "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content")
                },
                dataType: "JSON",
                success: function (e) {
                    $('#vizbot #chat-body').html('').show();
                    localStorage.removeItem('chatbotContent');
                    clearInterval(timerInterval);
                    clearInterval(idleInterval);
                    openMinimzieChat = 0;
                    technicalInquiryFlag = 0;
                    check_chatbot_user_status();
                },
                fail: function (jqXHR, textStatus, errorThrown) {

                }
            });
        }
    });

    $(document).on('click', function (event) {
        if (!$(event.target).closest('#vizbot .other-options-box, #vizbot .chat-header .other-options-btn').length) {
            $('#vizbot .other-options-box').hide();
        }
    });
    $(document).ready(function () {
        $('#client_name').on('input', function () {
            $(this).val($(this).val().replace(/[^A-Za-z ]/g, ''));
        });
    });
</script>

<button class="chat-open-button btn btn-primary" onclick="openForm()">
    <img src="{{asset('/public/assets/img/bot-head.png')}}" alt="Bot head">
</button>

<!-- <div class="welcome-screen text-center d-none">
            <img class="big-logo" src="./img/vizbot-text-img.png" alt="Vizbot Text Image">
            <div class="d-flex align-items-center">
                <button class="btn start-chat-btn">
                    <img src="./img/handshake.png" alt="handshake">
                    I’m here to help you..
                </button>
                <div class="logo">
                    <img src="./img/vizbot-icon.png" alt="Vizbot Image">
                </div>
            </div>
        </div> -->

<div id="vizbot">
    <div class="other-options-box">
        <div class="arrow-pointer"></div>
        <div class="box-body">
            <ul>
                <li>
                    <button id="restart-chat-btn" class="btn single-option-btn disabled">
                        <svg width="16" height="18" viewBox="0 0 16 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M7 17.4307C5.12433 17.187 3.57208 16.3608 2.34325 14.9519C1.11442 13.5429 0.5 11.8923 0.5 9.99994C0.5 8.98328 0.700667 8.00928 1.102 7.07794C1.50333 6.14644 2.0655 5.32811 2.7885 4.62294L3.85775 5.69219C3.24358 6.25253 2.78042 6.90286 2.46825 7.64319C2.15608 8.38352 2 9.16911 2 9.99994C2 11.4666 2.46825 12.7593 3.40475 13.8779C4.34125 14.9964 5.53967 15.6807 7 15.9307V17.4307ZM9 17.4499V15.9499C10.4437 15.6576 11.6379 14.9579 12.5828 13.8509C13.5276 12.7439 14 11.4603 14 9.99994C14 8.33327 13.4167 6.91661 12.25 5.74994C11.0833 4.58328 9.66667 3.99994 8 3.99994H7.64625L8.99625 5.34994L7.94225 6.40369L4.7885 3.24994L7.94225 0.0961914L8.99625 1.14994L7.64625 2.49994H8C10.0923 2.49994 11.8654 3.22686 13.3193 4.68069C14.7731 6.13453 15.5 7.90761 15.5 9.99994C15.5 11.8819 14.884 13.5243 13.652 14.9269C12.4198 16.3294 10.8692 17.1704 9 17.4499Z"
                                fill="#1C1B1F" />
                        </svg>
                        Restart Chat
                    </button>
                </li>
                <!-- <li>
                    <button id="email-transcript-btn" class="btn single-option-btn disabled">
                        <svg width="21" height="18" viewBox="0 0 21 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M13.7193 17.6345L9.8155 13.7308L10.8693 12.677L13.7193 15.527L19.3885 9.85775L20.4423 10.9115L13.7193 17.6345ZM10 7L17.8463 2H2.15375L10 7ZM10 8.55775L2 3.44225V13.6923C2 13.7821 2.02883 13.8558 2.0865 13.9135C2.14417 13.9712 2.21792 14 2.30775 14H7.275L8.775 15.5H2.30775C1.80258 15.5 1.375 15.325 1.025 14.975C0.675 14.625 0.5 14.1974 0.5 13.6923V2.30775C0.5 1.80258 0.675 1.375 1.025 1.025C1.375 0.675 1.80258 0.5 2.30775 0.5H17.6923C18.1974 0.5 18.625 0.675 18.975 1.025C19.325 1.375 19.5 1.80258 19.5 2.30775V6.94625L18 8.44625V3.44225L10 8.55775Z"
                                fill="#1C1B1F" />
                        </svg>
                        Email Transcript
                    </button>
                </li> -->
            </ul>
        </div>
    </div>
    <div class="chat-screen" id="chat-screen">
        <div class="chat-header">
            <div class="d-flex justify-content-between align-items-center">
                <div class="d-flex align-items-center">
                    <button class="btn other-options-btn">
                        <i class="fa-solid fa-ellipsis-vertical"></i>
                    </button>
                    <div class="img">
                        <img src="{{ asset('public/assets/img/vizbot-icon.png')}}" alt="Vizbot Image">
                    </div>
                    <div class="text">
                        <h6>VizBot</h6>
                    </div>
                </div>
                <div class="other-btns d-flex justify-content-between align-items-center">
                    <button class="btn settings-btn" onclick="minimizeForm()">
                        <i class="fa-solid fa-minus"></i>
                    </button>
                    <button class="btn close-btn" onclick="closeChatForm()">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <mask id="mask0_201_150" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0"
                                width="24" height="24">
                                <rect width="24" height="24" fill="#D9D9D9" />
                            </mask>
                            <g mask="url(#mask0_201_150)">
                                <path
                                    d="M8.4 17L12 13.4L15.6 17L17 15.6L13.4 12L17 8.4L15.6 7L12 10.6L8.4 7L7 8.4L10.6 12L7 15.6L8.4 17ZM12 22C10.6167 22 9.31667 21.7375 8.1 21.2125C6.88333 20.6875 5.825 19.975 4.925 19.075C4.025 18.175 3.3125 17.1167 2.7875 15.9C2.2625 14.6833 2 13.3833 2 12C2 10.6167 2.2625 9.31667 2.7875 8.1C3.3125 6.88333 4.025 5.825 4.925 4.925C5.825 4.025 6.88333 3.3125 8.1 2.7875C9.31667 2.2625 10.6167 2 12 2C13.3833 2 14.6833 2.2625 15.9 2.7875C17.1167 3.3125 18.175 4.025 19.075 4.925C19.975 5.825 20.6875 6.88333 21.2125 8.1C21.7375 9.31667 22 10.6167 22 12C22 13.3833 21.7375 14.6833 21.2125 15.9C20.6875 17.1167 19.975 18.175 19.075 19.075C18.175 19.975 17.1167 20.6875 15.9 21.2125C14.6833 21.7375 13.3833 22 12 22ZM12 20C14.2333 20 16.125 19.225 17.675 17.675C19.225 16.125 20 14.2333 20 12C20 9.76667 19.225 7.875 17.675 6.325C16.125 4.775 14.2333 4 12 4C9.76667 4 7.875 4.775 6.325 6.325C4.775 7.875 4 9.76667 4 12C4 14.2333 4.775 16.125 6.325 17.675C7.875 19.225 9.76667 20 12 20Z"
                                    fill="white" />
                            </g>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
        <div class="chat-body-box">
            <div class="chat-body" id="chat-body">
            </div>
            <div class="chat-close-timer" style="display: none;">
                <div class="text-center">
                    <h6>Chat Close in</h6>
                    <p></p>
                </div>
            </div>
            <div class="bottom-part">
                <form id="client-info-form" style="display: none;">
                    <div class="form-group">
                        <label>Enter Your Name <span class="required">*</span></label>
                        <input type="text" class="form-control" name="client_name" id="client_name"
                            placeholder="Enter Your Name">
                        <span id="client-name-error" class="info-form-error" style="display: none"></span>
                    </div>
                    <div class="form-group">
                        <label>Enter Your Email <span class="required">*</span></label>
                        <input type="text" class="form-control" name="client_email" id="client_email"
                            placeholder="Enter Your Name">
                        <span id="client-email-error" class="info-form-error" style="display: none"></span>
                    </div>
                    <div class="form-group">
                        <label>Enter Phone Number</label>
                        <input type="tel" class="form-control" value="" id="client_phone" />
                        <input type="hidden" name="country_code" id="country_code">
                        <span id="client-phone-error" class="info-form-error" style="display: none"></span>
                    </div>
                    <div class="submit-btn-group">
                        <input type="submit" class="btn submit-btn" value="Submit">
                    </div>
                    <div class="info-form-error" id="client-form-server-error"></div>
                </form>
                <form id="chat-form" style="display: none;">
                    <div class="form-group d-flex align-items-center">
                        <input type="text" id="chat-reply-input" class="form-control" placeholder="Type here...">
                        <button type="submit" id="submit-btn">
                            <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 28 28"
                                fill="none">
                                <mask id="mask0_201_176" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0"
                                    width="28" height="28">
                                    <rect y="9.72998" width="20" height="20" transform="rotate(-29.1107 0 9.72998)"
                                        fill="#D9D9D9" />
                                </mask>
                                <g mask="url(#mask0_201_176)">
                                    <path
                                        d="M10.405 22.2493L8.45903 18.7546L12.7281 14.0882L6.51304 15.2599L4.56705 11.7651L20.5913 9.70975L10.405 22.2493Z"
                                        fill="white" />
                                </g>
                            </svg>
                        </button>
                    </div>
                    <div class="info-form-error" id="chat-form-server-error" class="display: none"></div>
                </form>
                <div class="chat-close-btns" style="display: none;">
                    <button class="btn drop-msg-btn">Drop a message to keep it open!</button>
                    <button class="btn end-chat-btn">End Chat</button>
                </div>
                <div class="chat-close-btns-user" style="display: none;">
                    <button class="btn drop-msg-btn">Continue Chat</button>
                    <button class="btn end-chat-btn">End Chat</button>
                </div>
                <p class="chat-by">Powered by <a href="{{url('/')}}">Staffviz</a></p>
            </div>
        </div>
    </div>
</div>
<input type="hidden" name="gradient_img" id="gradient_img" value="{{asset('/public/assets/img/vizbot-gradient.png')}}">