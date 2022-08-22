<?php

$cn=mysqli_connect("localhost","root","","doctorportal_db");
$aid=$_REQUEST['id'];
$sql="delete from about_tbl where aid='".$aid."'";
mysqli_query($cn,$sql);
header("location:viewabout.php");
?>