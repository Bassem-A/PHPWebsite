<!DOCTYPE html>

<html lang="en">
<head>
    <link rel="stylesheet" href="index.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">
    <script src="index.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
</head>
<body>
    <div class="topBar">
    <nav>
        <ul>
            <li><a href="#">Login</a></li>
            <li><a href="#">Register</a></li>
            <li><a href="#">Contacts</a></li>
            <li><a href="index.html">Home</a></li>
        </ul>
    </nav>
</div>
    <h1 style="font-size:100px; text-align:center;">Your File should start downloading shortly</h1>
<? echo $_POST['URL'];?>
</body>
</html>


<?php

$command = "copyHTML.py ",escapeshellcmd($_POST['URL']),escapeshellcmd($_POST['protocol']);
echo shell_exec($command);

?>

