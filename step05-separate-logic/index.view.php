<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
    <title>step05-view-php</title>
    <style>
    header {
        background-color: pink;
        padding: 2em;
        text-align: center;
        }
    </style>
</head>
<body>
<header>
    <h1>
  <?= $greeting; ?> 
    </h1>
</header>
</body>
</html>