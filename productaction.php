<?php
$pname=$_REQUEST['pname'];
$ptype=$_REQUEST['type'];
$brand=$_REQUEST['brand'];
$quantity=$_REQUEST['quantity'];
$price=$_REQUEST['price'];
$expdate=$_REQUEST['exp'];

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

$sql = "INSERT INTO `product`(`pname`, `ptype`, `brand`, `quantity`, `price`, `expdate`) VALUES ('$pname','$ptype','$brand','$quantity','$price','$expdate')"; 
// echo $sql;
// exit;
$result=mysqli_query($conn,$sql);
if($result==1)
{
    header("location:productview.php");
}
else{
    echo"error";
}
?>