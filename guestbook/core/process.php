<?php 
$error = [];
define("ERROR_MSG", "Field cannot be Empty");
$firstname = validatInput($_POST['firstname']);

$lastname = validatInput($_POST['lastname']);

$email = validatInput($_POST['email']);

$comment = validatInput($_POST['comment']);

if(!$firstname){
  $error['firstname'] = ERROR_MSG;
}

if(!$lastname){
  $error['lastname'] = ERROR_MSG;
}

if(!$email){
  $error['email'] = ERROR_MSG;
}elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  $error['email'] = "Email is not valid";
}

if(!$comment){
  $error['comment'] = ERROR_MSG;
}elseif(strlen($comment) < 10){
  $error['comment'] = "The text you entered is too short";
}

function validatInput($data){
  $data = trim($data);
  $data = htmlspecialchars($data);
  $data = strtolower($data);
  $data = ucfirst($data);
  
  return $data;
}