<!DOCTYPE html>

<html lang="en" xmlns:o="urn:schemas-microsoft-com:office:office" xmlns:v="urn:schemas-microsoft-com:vml">

<head>
    <title>GITEX Contact Us Form</title>
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
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
        }

        a[x-apple-data-detectors] {
            color: inherit !important;
            text-decoration: inherit !important;
        }

        #MessageViewBody a {
            color: inherit;
            text-decoration: none;
        }

        p {
            line-height: inherit;
        }

        table {
            border-collapse: collapse; /* Remove gaps between borders */
            table-layout: auto; /* Adjust table width based on content */
            width: auto; /* Make the table width adjust to content */
        }

        td {
            border: 1px solid black;
            padding: 0;
            text-align: left;
        }

        /* Padding applied for table content */
        .cell-padding {
            padding: 5px 10px;
            white-space: nowrap; /* Prevents cells from wrapping and keeps them as max-content */
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

<body style="background-color: #FFFFFF; margin: 0; padding: 0; -webkit-text-size-adjust: none; text-size-adjust: none;">
    <table>
        <tbody>
            <tr>
                <td class="cell-padding">Full Name</td>
                <td class="cell-padding">{{ $name }}</td>
            </tr>
            <tr>
                <td class="cell-padding">Email</td>
                <td class="cell-padding">{{ $email }}</td>
            </tr>
            <tr>
                <td class="cell-padding">Number</td>
                <td class="cell-padding">{{ $number }}</td>
            </tr>
            @if ($designation !== "")
            <tr>
                <td class="cell-padding">Designation</td>
                <td class="cell-padding">{{ $designation }}</td>
            </tr>
            @endif
            <tr>
                <td class="cell-padding">Company</td>
                <td class="cell-padding">{{ $company }}</td>
            </tr>
        </tbody>
    </table>
</body>

</html>
