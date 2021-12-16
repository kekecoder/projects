<?php

$errors = [];
require("input-func.php");

if ($_SERVER["REQUEST_METHOD"] === "POST") {
  $email = inputs($_POST["email"]);
  $pass = inputs($_POST["password"]);
  
  // validate users inputs
if(!$email){
    $errors['email'] = 'Email cannot be left blank';
  }elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
    $errors['email'] = 'Enter your email correctly';
  }
  
  if(!$pass) {
    $errors['password'] = 'Password cannot be blank';
  }
  
  if(empty($errors)){
    require_once('dbconfig.php');
    
    $query = ("SELECT id, firstname, lastname, password FROM users WHERE email = :email");
    
    if($stmt = $pdo->prepare($query)){
      $stmt->bindValue(':email', $email);
      if($stmt->execute()){
        if($stmt->rowCount() === 1){
          if($row = $stmt->fetch()){
            $id = $row["id"];
            $firstName = $row["firstname"];
            $lastName = $row['lastname'];
            $email = $row["email"];
            $hashed_pass = $row['password'];
            if(password_verify($pass, $hashed_pass)){
              session_start();
              
              $_SESSION['id'] = $id;
              $_SESSION["firstname"] = $firstName;
              
              echo $_SESSION["firstname"];
            }else {
              echo "invalid password";
            }
          }
        }
      }
    }
  }
}