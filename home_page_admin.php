
<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Body Shop</title>
        <style>

.bar1{
list-style-type:none;
margin:0;
padding:0;
overflow:hidden;
background-color:#EC5EBD;

}
.bar2{
list-style-type:none;
margin:0;
padding:0;
overflow:hidden;
background-color:#EC96CF;
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
.navbar {
  overflow: hidden;
  background-color: #EC96CF;
}

.navbar a {
  float: left;
  font-size: 16px;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

.dropdown {
  float: left;
  overflow: hidden;
}

.dropdown .dropbtn {
  font-size: 16px;  
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

.navbar a:hover, .dropdown:hover .dropbtn {
  background-color: purple;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {
  background-color: #ddd;
}

.dropdown:hover .dropdown-content {
  display: block;
}

li a:hover{background-color: #cb2a98}

.hvrbox .hvrbox-layer_slideup {
	-moz-transform: translateY(100%);
	-webkit-transform: translateY(100%);
	-ms-transform: translateY(100%);
	transform: translateY(100%);
}
.hvrbox:hover .hvrbox-layer_slideup,
.hvrbox.active .hvrbox-layer_slideup {
	-moz-transform: translateY(0);
	-webkit-transform: translateY(0);
	-ms-transform: translateY(0);
	transform: translateY(0);
}
        </style>
    </head>
    <body>
     
<ul class="bar1">
    <li> <a href="viewcart.php" style="color:white;"> MY CARD  &nbsp; </a></li>
<li> <a href="contactus_page.php" style="color:white;"> CONTACT US  &nbsp; </a></li>
<li> <a href="logout.php" style="color:white;"> LOGOUT </a></li>
<li> <a href="home_page_admin.php" style="color:white;background-color: #999999"> HOME &nbsp  </a></li>


</ul>
 <br><img src="images/BODYSHOP.jpg" style="display: block; margin-left: auto; margin-right: auto; width:20%"><br>

<div  class="navbar">
<div class="dropdown"> 
<button   class="dropbtn">ADD VICTORIA SECRET PRODUCT &nbsp;&nbsp; ➤</button>
 <div class="dropdown-content">
 <a href="victoria_admin.html" style="color:black;">ADD PERFUMES </a>
 <a href="victoria_admin.html" style="color:black;">ADD BODYLOTION   </a>
<a href="victoria_admin.html" style="color:black;">ADD SPRAY  </a>
<a href="victoria_admin.html" style="color:black;" >ADD SETS</a>  
</div> </div> 
<div class="dropdown"> 
<button class="dropbtn"> VICTORIA SECRET &nbsp;&nbsp; ➤ </button>
 <div class="dropdown-content">
 <a  href="showvictoriaadmin.php" style="color:black;"> PERFUMES </a>
 <a  href="showvictoriaadmin.php" style="color:black;"> BODYLOTIONS</a>
<a  href="showvictoriaadmin.php" style="color:black;"> MISTS </a>
<a  href="showvictoriaadmin.php" style="color:black;"> SETS</a>
</div> </div> </div>
           
           <?php
session_start();
	if (isset($_SESSION["isloggedin"]) && $_SESSION["isloggedin"] == 1) {
			
	} else {
		header('Location: login_page.php');
	}
?>
           <table style="padding: 0px">
               <tr>
                   <td rowspan="2" class="w3-content w3-section" style="max-width:400px; height: 300px">

  <img class="mySlides w3-animate-right" src="homeimages/display1.jpg" style="width:100%">
  <img class="mySlides w3-animate-right" src="homeimages/display6.jpg" style="width:100%">
  <img class="mySlides w3-animate-right" src="homeimages/display2.jpg" style="width:100%">
  <img class="mySlides w3-animate-right" src="homeimages/display3.jpg" style="width:100%">
  <img class="mySlides w3-animate-right" src="homeimages/display4.jpg" style="width:100%">
  <img class="mySlides w3-animate-right" src="homeimages/display5.jpg" style="width:100%"></td>
  <td><img src="homeimages/display8.jpg" style="width: 1100px"></td>
  
          </tr>
          <tr><td><img src="homeimages/display7.jpg"style="width: 1100px"></td></tr>
           </table>
<script>
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1;}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 2750);    
}
</script>
    </body>
    
</html>
