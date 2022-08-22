<html>
<?php
include("config.php");

if($_SESSION["is_login"]=="" or !isset($_SESSION['is_login']))
{
    header("location:index.php");
}
?>
<?php
	$sql="select * from department_tbl";
    $rs=mysqli_query($con,$sql);
?>	

   
    
    <head>
<style>
b
{
color:red;
}
i
{
color:green;
}
b i
{
color:yellow;
}
.ardent
{
height:200px;
width:200px;
background-color:#00CCCC;
margin:10px 10px 10px 10px;
float:left;
clear:left;
padding-left:10px;
padding-top:10px;
border-radius:15px;
margin-left:20px;
}
</style>

        <title>Admin Home Page</title>
        <!-- Bootstrap -->
        <!-- Bootstrap -->
        <!-- Bootstrap Core CSS -->
        <!-- Bootstrap Core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- MetisMenu CSS -->
        <link href="css/metisMenu.min.css" rel="stylesheet">

        <!-- DataTables CSS -->
        <link href="css/dataTables/dataTables.bootstrap.css" rel="stylesheet">

        <!-- DataTables Responsive CSS -->
        <link href="css/dataTables/dataTables.responsive.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="css/startmin.css" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">

    </head>
    
    <body>   
                <?php include("header.php");?>      
         
                <?php include("sidebar.php");?>

 <div id="page-wrapper">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Dashboard</h1>
                    <div class="ardent">
Patient

					</div>
                    <!-- /.col-lg-12 -->
                </div>
               					</div>
									
</div>
</body>
</html>