<?php
$pname=$_REQUEST['pname'];
$ptype=$_REQUEST['type'];
$brand=$_REQUEST['brand'];
$quantity=$_REQUEST['quty'];
$price=$_REQUEST['price'];

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

$sql = "INSERT INTO `cart`(`pname`, `ptype`, `brand`, `quantity`, `price`) VALUES ('$pname','$ptype','$brand','$quantity','$price')"; 
// echo $sql;
// exit;
$result=mysqli_query($conn,$sql);
if($result==1)
{
    header("location:cart.html");
}
else{
    echo"error";
}
?>