<?php

$cn=mysqli_connect("localhost","root","","doctorportal_db");
$hid=$_REQUEST['id'];
$sql="delete from home_tbl where hid='".$hid."'";
mysqli_query($cn,$sql);
header("location:viewhome.php");
?>