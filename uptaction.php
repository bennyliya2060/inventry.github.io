<?php
$update=$_REQUEST['updateid'];
// echo "$update";
// exit;
$name=$_REQUEST['name'];
// echo $fname;
$address=$_REQUEST['address'];
$gender=$_REQUEST['gender'];
$phno=$_REQUEST['phno'];
$usr=$_REQUEST['usr'];
$pswd=$_REQUEST['pwd'];
$email=$_REQUEST['email'];

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

$sql = "UPDATE `staff_register` SET `name`='$name',`address`='$address',`gender`='$gender',`phno`='$phno',`username`='$usr',`password`='$pswd',`email`='$email' WHERE id='$update'";
// echo $sql;
// exit;
$result=mysqli_query($conn,$sql);
if($result==1)
{
    header("location:regview.php");
}
else{
    echo"error";
}
?>