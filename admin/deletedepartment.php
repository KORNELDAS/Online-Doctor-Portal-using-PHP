<?php
$cn=mysqli_connect("localhost","root","","doctorportal_db");
$deptid=$_REQUEST['id'];
$sql="delete from department_tbl where deptid='$deptid'";
mysqli_query($cn,$sql);
header("location:viewdepartment.php");
?>