<?php

require"connection.php";

$username=$_POST["username"];
$email=$_POST["email"];
$password=$_POST["password"];
$mobile=$_POST["mobile"];
$gender=$_POST["gender"];

/*$username="ho";
$email="k@gmail.com";
$password="12234567";
$mobile="0220033333";
$gender="Male";*/


$isValidEmail = filter_var($email, FILTER_VALIDATE_EMAIL);
if($conn){
if(strlen($password)>40 || strlen($password)<6){
echo"Password must be less than 40 and morethan  6  characters";
}else if($isValidEmail===false){
echo"This Email is not valid";
}
else{
$sqlCheckUsername = "SELECT*FROM`users_table`WHERE`username`LIKE'$username'";
$usernameQuery=mysqli_query($conn,$sqlCheckUsername);

$sqlCheckEmail = "SELECT*FROM`users_table`WHERE`email`LIKE'$email'";
$emailQuery=mysqli_query($conn,$sqlCheckEmail);

if(mysqli_num_rows($usernameQuery)>0){
echo"Username already used, try another one";
}else if(mysqli_num_rows($emailQuery)>0){
echo"This Email is already registered, try another one";
}

else{
$sql_register="INSERT INTO`users_table`(`username`,`email`,`password`,`mobile`,`gender`)VALUES('$username','$email','$password','$mobile','$gender')";

if(mysqli_query($conn,$sql_register)){
echo"Succefully Registered";
session_start();
$_SESSION['isloggedin']=1;
$_SESSION['xyz']=$username;
header('location:login_page.php');
}

else{
echo"Failed to register";
header('location:register_page.php');

}
}
}



}

else{
echo"Connection Error";
header('location:register_page.php');
}
?> 