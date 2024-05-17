<?php
session_start();
$code_username = "ravan";
$code_password = "123";

$username = $_REQUEST["username"];
$password = $_REQUEST["password"];

if($code_username == $username && $code_password == $password)
  {
    $_SESSION['authenticated'] = true;
    $_SESSION['username'] = $username;
    header("Location: index.php");
    exit;
  echo "successfully logged in!";
  }
else
{
  if (isset($_SESSION['login_attempts'])) 
  {
      $_SESSION['login_attempts']++;
  } 
  else 
  {
      $_SESSION['login_attempts'] = 1;
  }
  header("Location: login.php");
  exit;
  echo "failed to login. Invalid username or password";
}

?>