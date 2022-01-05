<?php
$name=$_REQUEST['name'];
// echo $fname;
// exit;
$address=$_REQUEST['address'];
$phno=$_REQUEST['phno'];
$email=$_REQUEST['email'];
$pname=$_REQUEST['pname'];
$type=$_REQUEST['type'];
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

$sql = "INSERT INTO `order_form`(`cname`, `address`, `phno`, `email`, `pname`, `ptype`, `brand`, `quantity`, `price`, `status`) VALUES ('$name','$address','$phno','$email','$pname','$type','$brand','$quantity','$price','$status')";
// echo $sql;
// exit;
$result=mysqli_query($conn,$sql);
if($result==1)
{
    header("location:order_select.php");
}
else{
    echo"error";
}
?>