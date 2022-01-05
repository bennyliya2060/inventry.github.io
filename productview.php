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
  table {
    text-Align:center;
    width:100%;
  }
  
  th, td {
    text-align: center;
    padding: 8px;
  }
  
  tr:nth-child(even){background-color: #f2f2f2}
  
  th {
    background-color: #04AA6D;
    color: white;
  }
  button{
      text-Align:"right";
  }
  .fa fa-plus{
      text-Align:"right";
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
          <a class="nav-link" href="staff_home.html">Home</a>
          </li>
          <li class="nav-item">
          <a class="nav-link" href="About.html">About</a>
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
  <!--heading-->
  <h1>Product details</h1>
  <a href="product.html" class="btn btn-danger"><i class="fa fa-plus"></i>Add Product</a>
  <br>
  <br>
  <br>
  <div class="table-responsive">
  <table>
  <tr>
    <th>id</th>
    <th>pname</th>
    <th>ptype</th>
    <th>brand</th> 
    <th>quantity</th> 
    <th>price</th>
    <th>expdate</th>
    <th>View</th>
    <th>Update</th>
    <th>Delete</th>
  </tr>
  <?php
  //database connection
  $servername="localhost";
  $username="root";
  $password="";
  $dbname="leora_cosmetics";
  $conn=mysqli_connect($servername,$username,$password,$dbname);
  $sql="SELECT * FROM `product`";
  $result=mysqli_query($conn,$sql);
  while($row=mysqli_fetch_array($result)){
  ?>
  <tr>
  <td><?php echo $row[0]; ?></td>
  <td><?php echo $row[1]; ?></td>
  <td><?php echo $row[2]; ?></td>
  <td><?php echo $row[3]; ?></td>
  <td><?php echo $row[4]; ?></td>
  <td><?php echo $row[5]; ?></td>
  <td><?php echo $row[6]; ?></td>
  <td><a href="product_view.php?viewid=<?php echo $row[0]; ?>"><img src="view.jpg" alt="image"></a></td>
  <td><a href="product_update.php?updateid=<?php echo $row[0]; ?>"><img src="update.jpg" alt="image"></td>
  <td><a href="product_delete.php?deleteid=<?php echo $row[0]; ?>"><img src="delete.jpg" alt="image"></td>
</tr>
<?php
  }
?>
</table>  
</body>
</html>