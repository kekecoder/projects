<?php
date_default_timezone_set('Africa/Lagos');
require_once("input-func.php");
$errors = [];

if($_SERVER["REQUEST_METHOD"] === "POST"){
  $firstName = inputs($_POST['firstName']);
  $lastName = inputs($_POST['lastName']);
  $email = inputs($_POST['email']);
  $pass = inputs($_POST['password']);
  $cpass = inputs($_POST['cpassword']);
  
  // validating users input
  require("validate.php");
  
  if(empty($errors)){
    // if no error is found
    // insert into database
    require_once ("dbconfig.php");
    // hash the password before inserting it into the database
    
    $hashPass = password_hash($pass, PASSWORD_DEFAULT);
    
    $query = $pdo->prepare("INSERT INTO users(firstname, lastname, email, password, created_date)VALUES(:firstname, :lastname, :email, :password, :created_date)");
    $query->bindValue(':firstname', $firstName);
    $query->bindValue(":lastname", $lastName);
    $query->bindValue(":email", $email);
    $query->bindValue(":password", $hashPass);
    $query->bindValue(":created_date", date("Y-m-d H:i:s"));
    
    $query->execute();
    
    echo "You now a registered mmember";
  }
}else{
  echo "Bad Gateway";
}

