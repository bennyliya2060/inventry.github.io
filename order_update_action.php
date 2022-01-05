<?php
$update=$_REQUEST['updateid'];
// echo "$update";
// exit;
$name=$_REQUEST['name'];
// echo $name;
// exit;
$address=$_REQUEST['address'];
$phno=$_REQUEST['phno'];
$email=$_REQUEST['email'];
$pname=$_REQUEST['pname'];
$Type=$_REQUEST['type'];
$brand=$_REQUEST['brand'];
$quantity=$_REQUEST['quantity'];
$price=$_REQUEST['price'];
$status=$_REQUEST['status'];

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

$sql = "UPDATE `order_form` SET `cname`='$name',`address`='$address',`phno`='$phno',`email`='$email',`pname`='$pname',`ptype`='$Type',`brand`='$brand',`quantity`='$quantity',`price`='$price',`status`='$status' WHERE id='$update'";
// echo $sql;
// exit;
$result=mysqli_query($conn,$sql);
if($result==1)
{
    header("location:orderview.php");
}
else{
    echo"error";
}
?>