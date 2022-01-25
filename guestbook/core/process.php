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

$created_at = date("Y-m-d H:i:s");

if(empty($error)){
  require_once 'dbconfig.php';
  require_once 'controller.php';
  
  $insert = new Comment($pdo, 'guest');
  $insert->insert(['firstname' => $firstname, 'lastname' => $lastname, 'email' => $email, 'comment' => $comment, 'created_at' => $created_at]);
  header("Location: ../guestapp.php");
}

function validatInput($data){
  $data = trim($data);
  $data = htmlspecialchars($data);
  $data = strtolower($data);
  $data = ucfirst($data);
  
  return $data;
}