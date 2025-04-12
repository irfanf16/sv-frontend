<!DOCTYPE html>
<html lang="en" xmlns:o="urn:schemas-microsoft-com:office:office" xmlns:v="urn:schemas-microsoft-com:vml">

<head>
    <meta charset="utf-8"> <!-- utf-8 works for most cases -->
    <meta name="viewport" content="width=device-width"> <!-- Forcing initial-scale shouldn't be necessary -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> <!-- Use the latest (edge) version of IE rendering engine -->
    <meta name="x-apple-disable-message-reformatting"> <!-- Disable auto-scale in iOS 10 Mail entirely -->
    <title>Vizbot Chat </title>
    <!-- The title tag shows in email notifications, like Android 4.4. -->

    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;1,100&display=swap">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap">
    <!--[if mso]>
    <xml>
    <o:OfficeDocumentSettings>
        <o:PixelsPerInch>96</o:PixelsPerInch>
        <o:AllowPNG/>
    </o:OfficeDocumentSettings>
    </xml><![endif]-->
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            padding: 0;
            background-color: #FFFFFF;
            -webkit-text-size-adjust: none;
            text-size-adjust: none;
        }

        td {
            padding: 0;
        }

        a[x-apple-data-detectors] {
            color: inherit !important;
            text-decoration: inherit !important;
        }

        p {
            line-height: inherit;
        }

        p {
            margin: 0;
        }
        @media (max-width: 520px) {
            .icons-inner {
                text-align: center;
            }

            .icons-inner td {
                margin: 0 auto;
            }

            .row-content {
                width: 100% !important;
            }

            .image_block img.big {
                width: auto !important;
            }

            .column .border {
                display: none;
            }

            .stack .column {
                width: 100%;
                display: block;
            }
        }
    </style>
</head>

<body>
    <table border="0" cellpadding="0" cellspacing="0" class="nl-container" role="presentation" width="100%">
        <tbody>
            <tr>
                <td>
                    <table border="0" cellpadding="0" cellspacing="0" class="row row-1" role="presentation">
                        <tbody>
                            <tr>
                                <td style="padding: 5px 10px 15px 0;">
                                    <b>Name:</b>
                                </td>
                                <td style="padding: 5px 10px 15px 0;">
                                    {{$client_name}}
                                </td>
                            </tr>
                            <tr>
                                <td style="padding: 5px 10px 15px 0;">
                                    <b>Email:</b>
                                </td>
                                <td style="padding: 5px 10px 15px 0;">
                                    {{$client_email}}
                                </td>
                            </tr>
                            <tr>
                                <td style="padding: 5px 10px 25px 0;">
                                    <b>Phone:</b>
                                </td>
                                <td style="padding: 5px 10px 25px 0;">
                                    {{$client_phone}}
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
        </tbody>
        <tbody>
            <tr>
                <td style="width: 100%">
                    <!-- <div
                        style="display:flex;padding:10px 20px;justify-content: space-between;align-items: center; background: url('{{$gradient}}') no-repeat center/cover;"> -->
                        <div style="display:flex;padding:10px 20px;justify-content: space-between;align-items: center;background: url('https://i.ibb.co/X8VmrkK/vizbot-gradient.png') no-repeat center/cover; /* fallback for clients that don't support gradients */">
                        <h1
                            style="font-size:18px;font-weight:700;line-height:104.722%;letter-spacing:0.09px;margin-bottom:0px;color:#fff;margin-top: 0;">
                            Vizbot Conversation</h1>
                        <img src="https://staffviz.com/public/assets/img/vizbot-icon.png" alt="Vizbot">
                    </div>
                </td>
            </tr>
        </tbody>
        <tbody>
            <tr>
                <td style="border: 1px solid #999999;border-top: none;">
                    <table border="0" cellpadding="0" cellspacing="0" class="row row-1" role="presentation">
                        <tbody>
                            <tr>
                                <td style="padding: 5px 10px;">
                                    <h2 style="margin-bottom: 15px">Hi, {{$client_name}}</h2>
                                    <p style="margin-bottom: 15px">Your chat with Vizbot is as follows:</p>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <table align="center" border="0" cellpadding="0" cellspacing="0" class="row row-1"
                        role="presentation" style="width: 100%">
                        <tbody>
                            <tr>
                                <td style="padding:15px 10px 10px;border-bottom: 1px solid lightgray;">
                                    <b>Conversation:</b>
                                </td>
                                <td style="padding: 0px;display: none;">
                                    {!! $vizbot_html !!}
                                </td>
                            </tr>
                            <tr>
                                <td style="padding: 10px;">
                                    <table class="row-content stack" role="presentation"
                                        style="color: #000000; width: 100%;">
                                        <tbody>
                                            <tr>
                                                <td style="padding: 0px;">
                                                    {!! $vizbot_html !!}
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
        </tbody>
    </table>
</body>

</html>