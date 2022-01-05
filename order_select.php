<?php
$quantity=$_REQUEST['quantity'];
// echo $quantity;
// exit;

//database connection
$servername="localhost";
$username="root";
$password="";
$dbname="leora_cosmetics";
$conn=mysqli_connect($servername,$username,$password,$dbname);

//cinnectiviti checking
if($conn===false)
{
    die("error,couldn't connect".mysqli_connect_error());
}
$sql = "SELECT * FROM `product` WHERE quantity='$quantity'";
$res=mysqli_query($conn,$sql);
$num=mysqli_num_rows($res);
if($num==1)
{
   header("location:quantity_update.php");
}
else{
    echo"error";
}
?> 