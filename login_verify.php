<?php

require"connection.php";
session_start();
session_destroy();

if($conn){

$username=$_GET["username"];
$password=$_GET["password"];
if($username=="admin"&&$password=="admin123"){
	session_start();
$_SESSION['isloggedin']=1;
$_SESSION['username']=$username;
header('location:home_page_admin.php');
}else{
	$sqlCheckUsername = "SELECT*FROM`users_table`WHERE`username`LIKE'$username'";
$usernameQuery=mysqli_query($conn,$sqlCheckUsername);
if(mysqli_num_rows($usernameQuery)==1){
	
$sqlLogin = "SELECT*FROM`users_table`WHERE`username`LIKE'$username' AND `password`LIKE '$password'";
$loginQuery= mysqli_query($conn,$sqlLogin);

if(mysqli_num_rows($loginQuery)==1){
echo"Login Success";
session_start();
$_SESSION['isloggedin']=1;
$_SESSION['username']=$username;
header('location:home_page.php');

}else{
echo"Wrong Password";  
header('location:login_page.php');

}
}else{
echo"This Username is not registered,Please click on register";
header('location:login_page.php');
}
}
}

else{
echo"Connection Error";
header('location:login_page.php');


}

?>