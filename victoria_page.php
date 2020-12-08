
<!DOCTYPE html>
<html>
<head>
<title>BodyShop</title>

<script>
filterSelection("all");
function filterSelection(c) {
  var x, i;
  x = document.getElementsByClassName("column");
  if (c === "all") c = "";
  for (i = 0; i < x.length; i++) {
    w3RemoveClass(x[i], "show");
    if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
  }
}

function w3AddClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    if (arr1.indexOf(arr2[i]) === -1) {element.className += " " + arr2[i];}
  }
}

function w3RemoveClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    while (arr1.indexOf(arr2[i]) > -1) {
      arr1.splice(arr1.indexOf(arr2[i]), 1);     
    }
  }
  element.className = arr1.join(" ");
}


// Add active class to the current button (highlight it)
var btnContainer = document.getElementById("myBtnContainer");
var btns = btnContainer.getElementsByClassName("btn");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function(){
    var current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
  });
}
</script><script>
filterSelection("all");
function filterSelection(c) {
  var x, i;
  x = document.getElementsByClassName("column");
  if (c === "all"){
      c = "";}
  for (i = 0; i < x.length; i++) {
    w3RemoveClass(x[i], "show");
    if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
  }
}

function w3AddClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    if (arr1.indexOf(arr2[i]) === -1) {element.className += " " + arr2[i];}
  }
}

function w3RemoveClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    while (arr1.indexOf(arr2[i]) > -1) {
      arr1.splice(arr1.indexOf(arr2[i]), 1);     
    }
  }
  element.className = arr1.join(" ");
}


// Add active class to the current button (highlight it)
var btnContainer = document.getElementById("myBtnContainer");
var btns = btnContainer.getElementsByClassName("btn");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function(){
    var current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
  });
}

</script>

<style >
.bar1{
list-style-type:none;
margin:0;
padding:0;
overflow:hidden;
background-color:#EC5EBD;
float:right;
}
.bar2{
list-style-type:none;
margin:0;
padding:0;
overflow:hidden;
background-color:#EC96CF;
}

li{
float:left;

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







* {
  box-sizing: border-box;
}

body {
  background-color: #f1f1f1;
  padding: 20px;
  font-family: Arial;
}

/* Center website */
.main {
  max-width: 1000px;
  margin: auto;
}

h1 {
  font-size: 50px;
  word-break: break-all;
}

.row {
  margin: 10px -16px;
}

/* Add padding BETWEEN each column */
.row,
.row > .column {
  padding: 75px;
}

/* Create three equal columns that floats next to each other */
.column {
  float: left;
  width: 33.33%;
  display: none; /* Hide all elements by default */
}

/* Clear floats after rows */ 
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Content */
.content {
  background-color: white;
  padding: 10px;
}

/* The "show" class is added to the filtered elements */
.show {
  display: block;
}


/* Style the buttons */
.btn {
  border: none;
  outline: none;
  padding: 12px 16px;
  background-color: white;
  cursor: pointer;
}

.btn:hover {
  background-color: #ddd;
}

.btn.active {
  background-color: #666;
  color: white;
}
* {
  box-sizing: border-box;
}

body {
  background-color: #FEF5FB;
  padding: 20px;
  font-family: Arial;
}

/* Center website */
.main {
  max-width: 1000px;
  margin: auto;
}

h1 {
  font-size: 50px;
  word-break: break-all;
}

.row {
  margin: 10px -16px;
}

/* Add padding BETWEEN each column */
.row,
.row > .column {
  padding: 60px;
}

/* Create three equal columns that floats next to each other */
.column {
  float: left;
  width: 33.33%;
  display: none; /* Hide all elements by default */
}

/* Clear floats after rows */ 
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Content */
.content {
  background-color: white;
  padding: 10px;
}

/* The "show" class is added to the filtered elements */
.show {
  display: block;
}

/* Style the buttons */
.btn {
  border: none;
  outline: none;
  padding: 12px 16px;
  background-color: white;
  cursor: pointer;
}

.btn:hover {
  background-color: #ddd;
}

.btn.active {
  background-color: #666;
  color: white;
}


h4{color: #cb2a98; font-family: MV Boli; font-size: 20px}
p{font-size: 15px; color: #666666; font-family: Calibri;}
a{font-size: 20px; color: black;font-family: MV Boli;}


</style>


<meta charset="utf-8"/>
</head>
<body onload="filterSelection('all')">
    
    
<ul class="bar1">
    <li> <a href="viewcart.php" style="color:white;"> MY CARD  &nbsp;| </a></li>
<li> <a href="contactus_page.php" style="color:white;"> CONTACT US  &nbsp;| </a></li>
<li> <a href="logout.php" style="color:white;"> LOGOUT &nbsp;   </a></li>
</ul>
     <br><img src="images/BODYSHOP.jpg" alt="logo" style="display: block; margin-left: auto; margin-right: auto; width:30%"><br>

<div class="navbar">
 <a href="home_page.php" style="color:white;">HOME </a>
<div class="dropdown"> 
<button class="dropbtn"  onclick="filterSelection('all')" style="background-color: #cb2a98 " > VICTORIA SECRET &nbsp;&nbsp; &#10148;</button>
 </div> 

<div class="dropdown"> 
<button class="dropbtn"> BATH AND BODY WORKS &nbsp;&nbsp; &#10148; </button>
 <div class="dropdown-content">
 <a href="perfume.html" style="color:black;"> PERFUMES </a>
 <a href="bodylotion.html" style="color:black;"> MISTS</a>
<a href="mists.html" style="color:black;"> BODYLOTIONS </a>
<a href="sets.html" style="color:black;" > SETS</a>
</div> </div> </div>

<h2 style="color:purple;">VICTORIA SECRET</h2>

<div id="myBtnContainer">
  <button class="btn active" onclick="filterSelection('all')"> Show all</button>
  <button class="btn" onclick="filterSelection('perfume')"> Perfumes</button>
  <button class="btn" onclick="filterSelection('mists')"> Mists</button>
  <button class="btn" onclick="filterSelection('bodylotion')"> Bodylotions</button>
  <button class="btn" onclick="filterSelection('sets')"> Sets</button>
</div>

<!-- Portfolio Gallery Grid -->
<form method="post" action="insertcart.php">
<div class="row">
    <?php
	$db_name="users_database";
$username="root";
$password="";
$servername="127.0.0.1";
$conn=mysqli_connect($servername,$username,$password,$db_name);
	$query1 = "SELECT * FROM victoria_perfumes";
	$result1 = mysqli_query($conn, $query1);
	while($row=mysqli_fetch_assoc($result1)) {
 echo '<div class="column perfume">';
    echo'<div class="content">';
   
	echo '<img src="./v_perfume/'.$row['image'].'" style="width:100%"/>';	
	echo '<h4>'.$row['name'].'</h4>';
	echo '<p>'.$row['description'].'</p>';
	echo '<p><a>'.$row['price'].'</a></p>';
	echo'<input type="hidden" name="qty" value="1">
      <input type="hidden" name="name" value="'.$row['name'].'">
    <input type="hidden" name="price" value="'.$row['price'].'">
    <input type="submit" name="addCart" value="Add to Card">';
	echo"</div>";echo"</div>";
   
	}
	
	$query2 = "SELECT * FROM victoria_mists";
	$result2 = mysqli_query($conn, $query2);
	while($row=mysqli_fetch_assoc($result2)) {
 echo '<div class="column mists">';
    echo'<div class="content">';
   
	echo '<img src="./v_mist/'.$row['image'].'" style="width:100%"/>';	
	echo '<h4>'.$row['name'].'</h4>';
	echo '<p>'.$row['description'].'</p>';
	echo '<p><a>'.$row['price'].'</a></p>';
	echo"</div>";echo"</div>";
   
	}
	$query3 = "SELECT * FROM victoria_lotions";
	$result3 = mysqli_query($conn, $query3);
	while($row=mysqli_fetch_assoc($result3)) {
 echo '<div class="column bodylotion">';
    echo'<div class="content">';
   
	echo '<img src="./v_bodylotion/'.$row['image'].'" style="width:100%"/>';	
	echo '<h4>'.$row['name'].'</h4>';
	echo '<p>'.$row['description'].'</p>';
	echo '<p><a>'.$row['price'].'</a></p>';
	echo"</div>";echo"</div>";
   
	}
	$query4 = "SELECT * FROM victoria_sets";
	$result4 = mysqli_query($conn, $query4);
	while($row=mysqli_fetch_assoc($result4)) {
 echo '<div class="column sets">';
    echo'<div class="content">';
   
	echo '<img src="./v_set/'.$row['image'].'" style="width:100%"/>';	
	echo '<h4>'.$row['name'].'</h4>';
	echo '<p>'.$row['description'].'</p>';
	echo '<p><a>'.$row['price'].'</a></p>';
	echo"</div>";echo"</div>";
   
	}
    ?>
	


</div>
    
    </form>
    
<!-- END GRID -->

<!-- END MAIN -->




</body>
</html>