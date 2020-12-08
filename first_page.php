<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <style>
            body{animation:change 20s infinite; background-image:url('images/1display.jpeg') }
            @keyframes change{
                50%{backgroud-image:url('images/1display.jpeg');  background-repeat: no-repeat; background-attachment:fixed; background-size:cover}
                25%{background-image:url('images/display6.jpeg');background-repeat: no-repeat; background-attachment:fixed; background-size:cover}
                50%{background-image:url('images/display1.jpeg');background-repeat: no-repeat; background-attachment:fixed; background-size:cover }
                75%{background-image:url('images/display3.jpeg');background-repeat: no-repeat; background-attachment:fixed; background-size:cover}
                100%{background-image:url('images/display5.jpeg'); backgroud-repeat: no-repeat; backgroud-attachment:fixed; background-size:cover}
            }
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
div.transbox {
  margin: 80px;
  background-color: black;
  border: 1px solid black;
  opacity: 0.6;
  filter: alpha(opacity=60); 
}
div.transbox p {
  margin: 15%;
  font-weight: bold;
  color: black;
}
p{font-family: Calibri;}
span{size: 80px; font-size: 50px;  color: #ffccff;}
.footer {
    font-family: Calibri;
    color: white;
  padding: 30px; /* Some padding */
  text-align: left; /* Center text*/
  background: black; /* black background */
  opacity: 0.95;
}
        </style>
    </head>
    <body>
       
<ul class="bar1">
    <li> <a href="first_page.php" style="color:white;background-color: #999999"><img src="images/house.png"> &nbsp; </a></li>
<li> <a href="contactus_page.php" style="color:white;">|&nbsp; CONTACT US  &nbsp; </a></li>
<li> <a href="login_page.php" style="color:white;"> LOGIN &nbsp; &nbsp; </a></li>
<li> <a href="register_page.php" style="color:white;"> REGISTER  &nbsp; | &nbsp; &nbsp; </a></li>
</ul>
        

        <div class="transbox" >
            <p style="color: white"><span>WELCOME TO OUR SHOP-STORE</span>
            <br><br>This a an online shopstore developed by Riham and Nisreen
            <br> that helps users to shop from our store, from makeup to perfumes to body lotions<br>
            Please, if you don't have an account, do register to keep up to our promotions,<br>and our collection!<p></div>
        <div class="footer">
            <a>Sign up to keep up with our new products and our offers! <br> You can reach us vi Facebook <br> and Instagram <br><br> For more infomation, contact us!</a>
</div>
    </body>
</html>
