<?php

$cn=mysqli_connect("localhost","root","","doctorportal_db");
$doctid=$_REQUEST['id'];
$sql="delete from doctor_tbl where doctid='".$doctid."'";
mysqli_query($cn,$sql);
header("location:viewdoctor.php");
?>