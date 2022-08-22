<?php

$cn=mysqli_connect("localhost","root","","doctorportal_db");
$cid=$_REQUEST['id'];
$sql="delete from contact_tbl where cid='".$cid."'";
mysqli_query($cn,$sql);
header("location:viewcontact.php");
?>