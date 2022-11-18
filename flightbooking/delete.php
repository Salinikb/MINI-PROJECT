<?php
if (isset($_POST['delete'])) {
    $b_id= $_POST['b_id'];
    $del_res= mysqli_query($conn, "DELETE FROM bookedflights WHERE b_id = '$b_id'");
    if(mysqli_affected_rows($conn) >= 1){
        
        echo ("flights cancelled !!");
    }
    else{
        echo "<script>alert('flight canceled !!');</script>";
    }
    echo "<script>window.location.href = 'bookyours.php';</script>";
}
?>