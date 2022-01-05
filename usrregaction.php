<?php
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

$sql = "INSERT INTO `user_register`(`name`, `address`, `gender`, `phno`, `username`, `password`, `email`) VALUES ('$name','$address','$gender','$phno','$usr','$pswd','$email')"; 
// echo $sql;
// exit;
$result=mysqli_query($conn,$sql);
if($result==1)
{
    header("location:user_login.html");
}
else{
    echo"error";
}
?>