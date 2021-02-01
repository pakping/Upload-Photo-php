<?php
require "../db/connect.php";
$x = $_POST ['del'] ;
echo $x;
$del = "DELETE FROM `tbl_photos` WHERE  img_id = $x";
$result = mysqli_query($con,$del);
	if ($result){
		header('location:../index.php');
    } else{
        echo "hummmmm";
    }             
?>