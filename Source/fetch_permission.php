<?php
session_start();

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
include_once 'connection.php';

if(isset($_SESSION["role"])){
  $id = $_SESSION["role"];

  $query = "select * from user_role where id = '$id'";
  $result = mysqli_query($conn, $query);
  if ($result) {
        $row = $result->fetch_assoc();
        $permission = explode(", ", $row["permissions"]);
  
        if(empty($permission)) $permission = array();
}
} else {
  ?>
<meta http-equiv='refresh' content='0;../login.php'>
  <?php
  die();
}



?>