<?php
$usr=$_REQUEST['usr'];
// echo $usr;
// exit;
$pswd=$_REQUEST['pwd'];

//database connection
$servername="localhost";
$username="root";
$password="";
$dbname="leora_cosmetics";
$conn=mysqli_connect($servername,$username,$password,$dbname);

//cinnectivity checking
if($conn===false)
{
    die("error,couldn't connect".mysqli_connect_error());
}

  $sql = "SELECT * FROM `staff_register` WHERE username='$usr' and password='$pswd'"; 
//   echo $sql;
//   exit;
$res=mysqli_query($conn,$sql);
$num=mysqli_num_rows($res);
if($num==1)
{
    header('location:staff_home.html');
}
else{
 echo"incorrect username or password.please check your username and password and retry.";
}
?>
<br>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Error</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<a href="staff_login.html">
<button type="button"  class="btn btn-warning" style="background-position:center">Retry</button>
</a>
</body>
</html>