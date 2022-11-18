<?php
session_start();
include('db_connect.php');
$id=$_REQUEST['id'];

$sql4="UPDATE flights_tb set status='1' where id='$id'";
if(mysqli_query($conn,$sql4))
{
    $_SESSION['msg2'] = "Category activated successfully";
}
header("Location: index.php?page=manage_flight1");
?>
