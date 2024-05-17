<?php
session_start();
$correct_username = "ravan";
$correct_password = "123";

$code_username = $_REQUEST["username"];
$code_password = $_REQUEST["password"];

if($code_username == $correct_username && $code_password == $correct_password)
  {
    $_SESSION['authenticated'] = true;
    $_SESSION["username"] = $code_username;
    header("Location: index.php");
    exit;
  }
else
{
      if (!isset($_SESSION['login_attempts'])) {
          $_SESSION['login_attempts'] = 1;
      } else {
          $_SESSION['login_attempts'] += 1;
      }

      echo "This is unsuccessful attempt number " . $_SESSION['login_attempts'];
  }
  ?>