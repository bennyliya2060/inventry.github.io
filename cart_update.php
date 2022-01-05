<!DOCTYPE html>
<!-- saved from url=(0030)https://cosmeti.w3spaces.com/# -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><title>W3.CSS Template</title>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="./Leora cosmetics_files/w3.css">
<link rel="stylesheet" href="./Leora cosmetics_files/css">
<link rel="stylesheet" href="./Leora cosmetics_files/css(1)">
<link rel="stylesheet" href="./Leora cosmetics_files/font-awesome.min.css">
<link rel="srylesheet" href="./Leora cosmetics_files/staff_register.css">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>

<style>
.w3-sidebar a {font-family: "Roboto", sans-serif}
body,h1,h2,h3,h4,h5,h6,.w3-wide {font-family: "Montserrat", sans-serif;}
body{
  background-image: url("formbg.jpg");
  background-size: cover;
}
button{
  background-color:rgb(236,56,56);
}
</style>
</head>
<body style=max-width:200%;>
<!-- Navbar/menu -->
<nav class="navbar navbar-expand-sm navbar-dark bg-danger" style="max-width: 100%;">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <ul class="navbar-nav">
          <li class=nav-item>
          <h4 class="nav-link">Leora Cosmeticals</h4>
          </li>
          <li class="nav-item">
          <a class="nav-link" href="javascript:void(0)">Home</a>
          </li>
          <li class="nav-item">
          <a class="nav-link" href="javascript:void(0)">About</a>
          </li>
      <form class="d-flex">
        <input class="form-control me-2" type="text" placeholder="Search">
        <button class="btn btn-primary" type="button">Search</button>
      </form>
    </div>
  </div>
</nav>
<!-- Top menu on small screens -->
<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->

  <!-- Push down content on small screens -->
  <div class="w3-hide-large" style="margin-top:83px"></div>
        <!--registration form-->
        <div class="container">
        <div class="left">
            <br>
            <h1 Align="center">Update cart</h1>
        </div>
        <div class="right">
        </div>
        </div>
        <?php
        $update =$_REQUEST['updateid'];
        // echo $update;
        // exit;
        $servername="localhost";
        $username="root";
        $password="";
        $dbname="leora_cosmetics";
        $conn=mysqli_connect($servername,$username,$password,$dbname);
        //check connection
        if($conn===false)
        {
           die("error,could'nt connect".mysqli_connect_error());
        }
        $sql="SELECT * FROM  cart WHERE id=$update";
        // echo $sql;
        // exit;
        $res=mysqli_query($conn,$sql);
        $row=mysqli_fetch_array($res);
        ?>
        <table Align="center" boder="1" frame="box" width="30%" height="40%">
        <form Align="center" action="cart_update_action.php?updateid=<?php echo $row[0];?>" method="POST">
           <br>
           <br>
           <tr Align="left">
           <td Align="center">
           <br>
           pname: <input type="text"  name="pname" value="<?php echo $row[1]; ?>"> 
           <br>
           <br>
           <br>
           </td>
           </tr>
           <tr Align="left">
           <td Align="center">
           Type:<input type="text" name="type" value="<?php echo $row[2]; ?>">
           <br>
           <br>
           <br>
           </td>
           </tr>
           <tr Align="left">
           <td Align="center">
           brand: <input type="text" name="brand" value="<?php echo $row[3]; ?>">
           <br>
           <br>
           <br>
           </td>
           </tr>
           <tr Align="left">
           <td Align="center">
           quantity: <input type="text" name="quantity" value="<?php echo $row[4]; ?>">
           <br>
           <br>
           <br>
           </td>
           </tr>
           <tr Align="left">
           <td Align="center">
           price: <input type="text" name="price" value="<?php echo $row[5]; ?>"> 
           <br>
           <br>
           <br>
           </td>
           </tr>
           <tr>
           <td Align="center">
           <button type="submit">update</button>
           </td>
           </tr>
        </form>
        </table>
</body>
</html>