<?php
date_default_timezone_set('Africa/Lagos');
$errors = [];

if($_SERVER["REQUEST_METHOD"] === "POST"){
  $firstName = inputs($_POST['firstName']);
  $lastName = inputs($_POST['lastName']);
  $email = inputs($_POST['email']);
  $pass = inputs($_POST['password']);
  $cpass = inputs($_POST['cpassword']);
  
  // validating users input
  if(!$firstName){
    $errors['firstName'] = 'Firstname cannot be left blank';
  }
  
  if(!$lastName){
    $errors['lastName'] = 'Lastname cannot be left blank';
  }
  
  if(!$email){
    $errors['email'] = 'Email cannot be left blank';
  }elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
    $errors['email'] = 'Enter your email correctly';
  }
  
  if(!$pass) {
    $errors['password'] = 'Password cannot be blank';
  }
  
  if(!$cpass){
    $errors['cpassword'] = 'Confirm Password cannot be blank';
  }elseif($cpass !== $pass){
    $errors['cpassword'] = "Your password does not match";
  }
  
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

function inputs($data){
    $data = trim($data);
    $data = strtolower($data);
    
    return htmlspecialchars($data);
  }
