<?php

$code_username = "ravan";
$code_password = "123";

$correct_username = $_REQUEST["username"];
$correct_password = $_REQUEST["password"];

if($code_username == $correct_username && $code_password == $correct_password)
  {
  echo "successfully logged in!";
  }
else
{
  echo "failed to login. Invalid username or password";
}

?>