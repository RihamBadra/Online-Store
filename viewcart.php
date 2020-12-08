<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <style>
h1{
color: purple;
}

.bar1{
list-style-type:none;
margin:0;
padding:0;
overflow:hidden;
background-color:#EC5EBD;

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
table{border-color: #FEF5FB; background-color: #ffccff; width: 1500px; height: 300pxs;   }
        </style>
    </head>
    <body>
        <?php
        session_start();
        ?>
        
         <br><img src="images/BODYSHOP.jpg" style="display: block; margin-left: auto; margin-right: auto; width:20%"><br>
        <ul class="bar1">
            <li> <a href="home_page.php" style="color:white;"> HOME &nbsp; | &nbsp; </a></li>
            <li> <a href="victoria_page.php" style="color:white;"> VICTORIA  &nbsp; | &nbsp; </a></li>
            <li> <a href="first_page.php" style="color:white;" > LOGOUT  </a></li>
        </ul>
         
         <h3 style="font-family: MV Boli; font-size: 40px ">Order Details</h3>
         
         <table class="table" border="0.2">
             <thead>
                 <tr>
                     <th style="font-family: MV Boli; background-color: white">number</th>
                     <th style="font-family: MV Boli;background-color: white">Name</th>
                     <th style="font-family: MV Boli;background-color: white">Price</th>
                     <th  style="font-family: MV Boli;background-color: white">Quantity</th>
                     <th style="font-family: MV Boli;background-color: white">Total Price</th>
                     <th style="font-family: MV Boli;background-color: white">Update</th>
                     <th  style="font-family: MV Boli;background-color: white" >Delete</th>
                 </tr>
             </thead>
             <tbody>
                 <?php
                 $bill=0;
                 $sno=1;
                         foreach ($_SESSION as $product) {
                             $p=0;
                             $q=0;
                             echo"<tr>";
                             echo"<td>".($sno++)."</td>";
                            
                             echo"<form action='editcart.php' method='post'>";
                             foreach($product as $key => $value){
                                 if($key==2){
                                     echo"<td><input type='text' name='name$key' value='".$value."'</td>";
                                     $q=$value;
                                 }else if($key==1){
                                     echo"<input type='hidden' name='name$key' value='".$value."'>";
                                     echo"<td>".$value."</td>";
                                     $p=$value;
                                 }else if($key==0){
                                     echo"<input type='hidden' name='name$key' value='".$value."'>";
                                     echo"<td>".$value."</td>";
                                 }
                             }
                             
                             $bill=intval($q * $p);
                             echo"<td>".($bill)."</td>";
                             echo"<td><input type='submit' name='event' value='Update'></td>";
                             echo"<td><input type='submit' name='event' value='Delete'></td>";
                             echo"</form>";
                             echo"</tr>";
                             
                         }
                 ?>
                  
             </body>
         </table>
         <br><br>
         <a href="victoria_page.php" style="size: 200px; color: black;"><strong> Continue Shopping</strong></a>
    </body>
</html>
