$(document).ready(function () {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    // $('.upload-user-company-logo').filepond();
    /*
        We need to reg.ister the required plugins to do image manipulation and previewing.
    */
    FilePond.registerPlugin(
        // encodes the file as base64 data
        FilePondPluginFileEncode,

        // validates files based on input type
        FilePondPluginFileValidateType,

        // corrects mobile image orientation
        FilePondPluginImageExifOrientation,

        // previews the image
        FilePondPluginImagePreview,

        // crops the image to a certain aspect ratio
        FilePondPluginImageCrop,

        // resizes the image to fit a certain size
        FilePondPluginImageResize,

        // applies crop and resize information on the client
        FilePondPluginImageTransform
    );

    // Select the file input and use create() to turn it into a pond
    // in this example we pass properties along with the create method
    // we could have also put these on the file input element itself
    FilePond.create(
        document.querySelector('.upload-user-company-logo'),
        {

            labelIdle: '<img src="' + $("input[id=base_url]").val() + 'public/images/Group 19.png" class="img-fluid"> <span class="company-logo-upload-plus-icon"><i class="fas fa-plus"></i></span>',
            // allowImageResize: false,
            // imagePreviewHeight: 200,
            // imageCropAspectRatio: '1:1',
            // imageResizeTargetWidth: 200,
            // imageResizeTargetHeight: 200,
            // // imageValidateSizeMaxWidth: true,
            // // imageValidateSizeMaxHeight: true,
            // stylePanelLayout: 'compact circle',
            // styleLoadIndicatorPosition: 'center bottom',
            // styleButtonRemoveItemPosition: 'center bottom'

            imagePreviewHeight: 140
        }
    );

    $("#registration-submit").click(function (e) {
        e.preventDefault();
        let node = $(this);
        $.ajax({
            type: 'POST',
            url: $("#register_form").attr("action"),
            data: $("#register_form").serialize(),

            beforeSend: function () {
                node.button('loading');
                node.prop("disabled", true)
                $(".text-danger").remove();
                $(".form-group").removeClass("has-error");
                $("#register_form").removeClass("was-validated");
            },
            complete: function () {
                node.button('reset');
                node.prop("disabled", false)
            },
            success: function (data) {
                if (data.responseCode == "01") {
                    // $("#register_form").addClass("was-validated");
                    $.each(data.errors, function (key, value) {
                        if (key == 'logo') {
                            $(".logoimges").after('<div class="text-danger">' + value[0] + '</div>')
                        } else {
                            $("input[name='" + key + "']").after('<div class="text-danger">' + value[0] + '</div>')
                        }
                    });
                    node.after('<div class="text-danger">Validation Error. Please check form carefully.</div>')
                } else {
                    location = data.redirect
                }

            }
        });

    });




        var input = document.querySelector("#phone");
        errorMsg = document.querySelector("#error-msg"),
            validMsg = document.querySelector("#valid-msg");

// here, the index maps to the error code returned from getValidationError - see readme
        var errorMap = ["Invalid number", "Invalid country code", "Too short", "Too long", "Invalid number"];
        var iti = window.intlTelInput(input, {
            formatOnDisplay: true,
            nationalMode: true,
            autoPlaceholder: 'aggressive',
            // placeholderNumberType: "FIXED_LINE",
            separateDialCode: true,
            utlisScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.16/js/utils.js"
        });
        var reset = function () {
            input.classList.remove("error");
            errorMsg.innerHTML = "";
            errorMsg.classList.add("d-none");
            validMsg.classList.add("d-none");
        };

// on blur: validate
        input.addEventListener('blur', function () {
            reset();
            if (input.value.trim()) {
                if (iti.isValidNumber()) {
                    validMsg.classList.remove("d-none");
                } else {
                    input.classList.add("error");
                    var errorCode = iti.getValidationError();
                    if (errorCode == "-99") {
                        errorMsg.innerHTML = "Enter valid format";
                    } else {
                        errorMsg.innerHTML = errorMap[errorCode];
                    }

                    errorMsg.classList.remove("d-none");
                }
            }

        });


// on keyup / change flag: reset
        input.addEventListener('change', reset);
        input.addEventListener('keyup', reset);
        // window.promise.then(function () {
        //     console.log("Initialised!")
        // })

    // $("#register_form").validate({
    //     submitHandler: function(form) {
    //         if(iti.isValidNumber())
    //         {
    //             console.log('23')
    //             form.submit();
    //             return true;
    //         }
    //         else{
    //             console.log('22')
    //             document.getElementsByClassName('display_error')[0].innerHtml('<span>Please check phone number field.</span>');
    //             // $('.display_error').html();
    //             return false;
    //         }
    //
    //     }
    // });

})

function hideshow() {
    // $('.supertext').toggle();
}
