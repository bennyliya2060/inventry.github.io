<?php
$update=$_REQUEST['updateid'];
// echo "$update";
// exit;
$pname=$_REQUEST['pname'];
// echo $fname;
// exit;
$Type=$_REQUEST['type'];
$brand=$_REQUEST['brand'];
$quantity=$_REQUEST['quantity'];
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

$sql = "UPDATE `cart` SET `pname`='$pname',`ptype`='$Type',`brand`='$brand',`quantity`='$quantity',`price`='$price' WHERE id='$update'";
// echo $sql;
// exit;
$result=mysqli_query($conn,$sql);
if($result==1)
{
    header("location:cartview.php");
}
else{
    echo"error";
}
?>