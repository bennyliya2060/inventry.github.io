<?php
$update=$_REQUEST['updateid'];
// echo "$update";
// exit;
$quantity=$_REQUEST['quantity'];
// echo $fname;
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

$sql = "UPDATE `product` SET `quantity`='$quantity-1' WHERE id='$update'";
// echo $sql;
// exit;
$result=mysqli_query($conn,$sql);
if($result==1)
{
    header("location:order.html");
}
else{
    echo"error";
}
?>