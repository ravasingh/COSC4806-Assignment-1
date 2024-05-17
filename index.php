<?php
    session_start();
    if (!isset($_SESSION['authenticated']) || $_SESSION['authenticated'] !== true) {
        header("Location: login.php");
        exit;
    }
?> 
<!DOCTYPE html>
<html>
    <head>
        <title>Ravanpreet Singh</title>
    </head>
    <body>
        <h1>Assignment.1</h1>
    </body>
</html>
