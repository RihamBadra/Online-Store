<?php

require_once"connection.php";

$name=$_POST["name"];
$des=$_POST["description"];
$price=$_POST["price"];
$image=$_POST["image"];


if($conn){

$sql_register="INSERT INTO`victoria_sets`(`name`,`description`,`price`,`image`)VALUES('$name','$des','$price','$image')";

if(mysqli_query($conn,$sql_register)){
echo"Succefully added";

header('location:victoria_admin.html');
}

else{
echo"Failed to add";
header('location:victoria_admin.html');

}

}
else{
echo"Connection Error";
header('location:victoria_admin.html');
}
?> 