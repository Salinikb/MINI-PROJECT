<?php
session_start();
include('db_connect.php');
$id=$_REQUEST['id'];

$sql3="UPDATE flights_tb set status='0' where id='$id'";
if(mysqli_query($conn,$sql3))
{
  
   $_SESSION['msg'] = "flight deactivated successfully";
}
header("Location: index.php?page=manage_flight1");
?>