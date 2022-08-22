<?php
include("config.php");

if($_SESSION["is_login"]=="" or !isset($_SESSION['is_login']))
 {
    header("location:index.php");
 }
     
        $doctid=$_REQUEST['id'];
        if($_SERVER['REQUEST_METHOD']=='POST')
        {
            $doctname=$_POST['name'];
			$doctquali=$_POST['qualification'];
			$doctexp=$_POST['experience'];
			$doctvisit=$_POST['visit'];
			$doctpic=$_POST['picture'];
            $doctemail=$_POST['email'];
            $doctphn=$_POST['phnno'];
            $doctadd=$_POST['address'];
			$deptid=$_POST['deptid'];

            $sql="update doctor_tbl set doctname='".$doctname."',  doctquali='".$doctquali."', doctexp='".$doctexp."', doctvisit='".$doctvisit."', doctpic='".$doctpic."', doctemail='".$doctemail."', doctphn='".$doctphn."', doctadd='".$doctadd."', deptid='".$deptid."'
			  where doctid='".$doctid."'";
            mysqli_query($con,$sql);
			header("location:viewdoctor.php");
            
        }
        $sql="select * from doctor_tbl where doctid='".$doctid."'";
        $rs=mysqli_query($con,$sql);
        $d=mysqli_fetch_array($rs);
?>


<!--=======================================DOCTYPE html=============================================-->

<html lang="en">
    <head><title>Admin Home Page</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content=""> 

        <!-- Bootstrap Core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- MetisMenu CSS -->
        <link href="css/metisMenu.min.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="css/startmin.css" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">

        
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
        
        
        
        
          
    </head>
    
    <body>

        <div id="wrapper">

                <?php include("header.php");?>      
         
                <?php include("sidebar.php");?> 
                
                
  <br/>     
            
       <div id="page-wrapper">
    
           <div class="span10">
            
                        <form class="form-horizontal"  method="post">
                                     
                          <fieldset>
                                   <div class="alert alert-success">
                                      <h3>Update Doctor Details</h3>
                        	       </div>
  
   <div class="control-group success">
              <label class="control-label" for="inputError"><strong>Doctor ID</strong></label>
                 <div class="controls">
                  <td><input type="text" id="inputError" name="id" value="<?php echo $d['doctid'];?>" readonly="readonly">
                 </div>
        </div>

  <div class="control-group success">
              <label class="control-label" for="inputError"><strong>Doctor Name</strong></label>
                 <div class="controls">
                   <td><input type="text" id="inputError" name="name" value="<?php echo $d['doctname'];?>">
                 </div>
        </div>  
		
		 <div class="control-group success">
              <label class="control-label" for="inputError"><strong>Doctor Qualification</strong></label>
                 <div class="controls">
                    <td><input type="text" id="inputError" name="qualification" value="<?php echo $d['doctquali'];?>">
                 </div>
        </div>  
		
		 <div class="control-group success">
              <label class="control-label" for="inputError"><strong>Doctor Experience</strong></label>
                 <div class="controls">
                  <td><input type="text" id="inputError" name="experience" value="<?php echo $d['doctexp'];?>">  
			  </div>
        </div>                              
        
        <div class="control-group success">
              <label class="control-label" for="inputError"><strong>Doctor Visit</strong></label>
                 <div class="controls">
                 <td><input type="text" id="inputError" name="visit" value="<?php echo $d['doctvisit'];?>">
                 </div>
        </div>
		
		<div class="control-group success">
              <label class="control-label" for="inputError"><strong>Doctor Pic</strong></label>
                 <div class="controls">
                    <td><input type="text" id="inputError" name="picture" value="<?php echo $d['doctpic'];?>">
                 </div>
        </div>
	    
		 <div class="control-group success">
              <label class="control-label" for="inputError"><strong>Doctor Email-ID</strong></label>
                 <div class="controls">
                    <td><input type="text" id="inputError" name="email" value="<?php echo $d['doctemail'];?>">
                 </div>
        </div>    
		
		<div class="control-group success">
              <label class="control-label" for="inputError"><strong>Doctor Phone-Number</strong></label>
                 <div class="controls">
                  <td><input type="text" id="inputError" name="phnno" value="<?php echo $d['doctphn'];?>">
                 </div>
        </div>
		
		<div class="control-group success">
              <label class="control-label" for="inputError"><strong>Doctor Address</strong></label>
                 <div class="controls">
                    <td><input type="text" id="inputError" name="address" value="<?php echo $d['doctadd'];?>">
                 </div>
        </div>
   
		<div class="control-group success">
              <label class="control-label" for="inputError"><strong>Department ID</strong></label>
                 <div class="controls">
                    <td><input type="text" id="inputError" name="deptid" value="<?php echo $d['deptid'];?>" readonly="readonly">
                 </div>
        </div>

				
        <div class="form-actions">                    
        <button type="submit" class="btn btn-success">Update Data</button>                  
        
        <button type="submit" class="btn btn-danger">Cancel</button>
            
            
        </div>                               
            
            </fieldset>
            </form>
        </div>   
                
   </div>  
                                   
            </div>
            
            
        <!-- /#wrapper -->

        <!-- jQuery -->
        <script src="js/jquery.min.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="js/bootstrap.min.js"></script>

        <!-- Metis Menu Plugin JavaScript -->
        <script src="js/metisMenu.min.js"></script>

        <!-- Custom Theme JavaScript -->
        <script src="js/startmin.js"></script>

    </body>
</html>
