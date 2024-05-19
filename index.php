<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ItemDB</title>
    <link href="assets/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #121212;
            color: #ffffff;
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }

        iframe {
            width: 100%;
            border: none;
        }
    </style>
    <script>
        function resizeIframe(iframe) {
            iframe.style.height = iframe.contentWindow.document.body.scrollHeight + 'px';
        }
    </script>
</head>
<body>
    <iframe src="navbar.php" onload="resizeIframe(this)"></iframe>
    <script src="assets/bootstrap.bundle.min.js"></script>
</body>
</html>
