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
    h1 {
        background-color: #000;
        color: #fff;
        padding: 2em;
        text-align: center;
        }
    </style>
<?php
function age($data) {
    if($data >= 21) 
    {
        echo "<h1>Welcome to PHP Night Club!</h1>";
    }
    else {
        echo "<h1>Sorry, you are under 21.</h1>";
    }
}
?>
</head>
</html>