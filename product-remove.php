<?php

//if (session_status() !== PHP_SESSION_ACTIVE) {session_start();}
if(session_id() == '' || !isset($_SESSION)){session_start();}

include 'config.php';

$pname = $_GET['pname'];
$action = $_GET['action'];


if($action === 'empty')
  unset($_SESSION['cart']);

$result = $mysqli->query("SELECT qty FROM products WHERE id = ".$pname);


if($result){

  if($obj = $result->fetch_object()) {

    switch($action) {

      case "add":
      if($_SESSION['cart'][$pname]+1 <= $obj->qty)
        $_SESSION['cart'][$pname]++;
      break;

      case "remove":
      $_SESSION['cart'][$pname]--;
      if($_SESSION['cart'][$pname] == 0)
        unset($_SESSION['cart'][$pname]);
        break;



    }
  }
}



header("location:cart.php");

?>