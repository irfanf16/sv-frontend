<!DOCTYPE html>
<html lang="en">
 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{ asset('public/favicon.ico') }}" type="image/x-icon">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('public/favicon.ico') }}">
    <title>StaffViz - Step Conference 2024</title>
</head>
 
<body>
    <style>
        body, html {
            margin: 0;
            padding: 0;
            height: 100%;
            overflow: hidden;
        }
 
        iframe {
            width: 100%;
            height: 100vh;
            margin: 0;
            padding: 0;
            border: none;
        }
        @-moz-document url-prefix() {
          iframe {
            transform: scale(1.06);
            margin-top: -34px;
            height: 104vh;
          }
        }
    </style>
 
    <iframe src="{{ asset('public/assets/img/Step-Conferrence.pdf#toolbar=0&navpanes=0&scrollbar=0') }}"></iframe>
+
</body>
 
</html>