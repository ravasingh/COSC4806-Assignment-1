<?php
session_start();
if (!isset($_SESSION['authenticated']) || $_SESSION['authenticated'] !== true) {
    header("Location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Ravanpreet Singh</title>
    </head>
    
    <body>
        <header>
            <h1>Assignment-1</h1>
        </header>
        
        <main>
             <?php echo "Welcome, " . $_SESSION['username'] . "!<br>"; ?>
             <?php echo "Today's date is " . date("l, F jS Y") . "."; ?>
        </main>
       
        <footer>
            <p><a href="logout.php">Click here to Logout</a></p>
         </footer>
        
    </body>
</html>