
<?php
session_start();
session_destroy();
?>
<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <style>
            .bar1{
list-style-type:none;
margin:0;
padding:0;
overflow:hidden;
background-color:#EC5EBD;
}
li{
float:right;

}
li a{
display:block;
padding:10px;
}
li a:hover{background-color: #cb2a98}
a:link{
color:white;
text-decoration:none;}
.login:hover{background-color: #EC5EBD; color:white;}
        </style>
    </head>
    <body>
      
        
        <ul class="bar1">
            <li> <a href="first_page.php" style="color:white; "><img src="images/house.png"> &nbsp; </a></li>
            <li> <a href="contactus_page.php" style="color:white;">|&nbsp; CONTACT US  &nbsp; </a></li>
<li> <a href="login_page.php" style="color:white;background-color: #999999"> LOGIN &nbsp; &nbsp; </a></li>
<li> <a href="register_page.php" style="color:white;"> REGISTER  &nbsp; | &nbsp; &nbsp; </a></li>
</ul>

        <img src="images/BODYSHOP.jpg" style="display: block; margin-left: auto; margin-right: auto; width:30%">
		
<form method="get" action="login_verify.php">

<br><br>
        <h2 style="margin: 10px 0px; font:27.5px Mada;color: dimgray;font-family: Calibri"><center>Login</center></h2><br><br>
<table align="center">
<tr>
    <td> <input type="text" name="username" size="30px" required="" style="border-color: #cb2a98; padding: 10px 100px; " placeholder="Username" > </td> 
</tr>
<tr></tr>
<tr>
    <td> <input type="password" name="password" size="30px" required=""style="border-color: #cb2a98;padding: 10px 100px;" placeholder="Password"> </td> 
</tr>
<tr></tr>
<tr></tr>
<tr></tr>
<tr></tr>
<tr></tr>   
<tr>
    <td><input id="login" type="submit" name="login" value="Login" class="login" style=" display: block;margin-left: auto; margin-right: auto ;font-size: 15px;cursor: pointer ;background-color: #EC96CF; border-radius: 5px ;padding: 6px 50px; border: 2px"> </td> </tr>

</table>
</form>

    </body>
</html>
