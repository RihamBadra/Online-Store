<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Bodyshop/register</title>
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
a:link{
color:white;
text-decoration:none;
}
.Register:hover{color: white; background-color: gray;}
li a:hover{background-color: #cb2a98}
.Register{ display: block;margin-left: auto; margin-right: auto ;font-size:
       15px;cursor: pointer ;background-color: black;color: #EC96CF; border-radius: 5px ;padding: 6px 50px; border: 2px}

</style>
    </head>
    <body>
        <?php

        ?>
        
        <ul class="bar1">
            <li> <a href="first_page.php" style="color:white; "><img src="images/house.png"> &nbsp; </a></li>
            <li> <a href="contactus_page.php" style="color:white;">|&nbsp; CONTACT US  &nbsp; </a></li>
<li> <a href="login_page.php" style="color:white;"> LOGIN &nbsp; &nbsp; </a></li>
<li> <a href="register_page.php" style="color:white;background-color: #999999"> REGISTER  &nbsp; | &nbsp; &nbsp; </a></li>

</ul>

        <br><img src="images/BODYSHOP.jpg" style="display: block; margin-left: auto; margin-right: auto; width:30%"><br>
        
        <br><br><br>
        <h2 style="margin: 10px 0px; font:27.5px Mada;color: dimgray;font-family: Calibri"><center>Create Account</center></h2>


<form method="post" action="register_verify.php">
<br><br>
<table align="center">
<tr>
    <td> <input type="text" name="username" size="30px" required="" style="border-color: #cb2a98; padding: 10px 100px; " placeholder="Username" > </td> 
    
</tr>
<tr></tr>
<tr>

    <td> <input type="text" name="email" size="30px" required=""style="border-color: #cb2a98;padding: 10px 100px;" placeholder="Email"> </td> 
</tr><tr>
</tr>
<tr>

    <td> <input type="password" name="password" size="30px" required=""style="border-color: #cb2a98;padding: 10px 100px;" placeholder="Password"> </td> 
</tr><tr>
</tr>
<tr>

    <td> <input type="text" name="mobile" size="30px" required=""style="border-color: #cb2a98;padding: 10px 100px;" placeholder="Mobile"> </td> 
</tr>
<tr></tr>
<tr></tr>
<tr></tr>
<tr></tr>
<tr></tr>
<tr>

    <td> <label>Male<input type="radio" name="gender" value="m" required=""></label>
<label>Female<input type="radio" name="gender" value="f" checked="checked" required=""></label><br>
    </td> 
</tr>
<tr></tr>
</table>
<br><br>
<input type="submit" value="Register" class="Register" >
<br>
</form>

    </body>
</html>
