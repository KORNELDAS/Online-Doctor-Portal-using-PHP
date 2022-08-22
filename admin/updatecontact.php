<?php
include("config.php");

if($_SESSION["is_login"]=="" or !isset($_SESSION['is_login']))
 {
    header("location:index.php");
 }
     
        $cid=$_REQUEST['id'];
        if($_SERVER['REQUEST_METHOD']=='POST')
        {
            $cname=$_POST['name'];
			$caddress=$_POST['address'];
			$cemail=$_POST['email'];
			$cphoneno=$_POST['phnno'];
            $sql="update contact_tbl set cname='".$cname."',  caddress='".$caddress."', cemail='".$cemail."', cphoneno='".$cphoneno."' where cid='".$cid."'";
            mysqli_query($con,$sql);
			header("location:viewcontact.php");
            
        }
        $sql="select * from contact_tbl where cid='".$cid."'";
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
                                      <h3>Update Contact Details</h3>
                        	       </div>
  
   <div class="control-group success">
              <label class="control-label" for="inputError"><strong>Contact ID</strong></label>
                 <div class="controls">
                  <td><input type="text" id="inputError" name="id" value="<?php echo $d['cid'];?>" readonly="readonly">
                 </div>
        </div>

  
   <div class="control-group success">
              <label class="control-label" for="inputError"><strong>Contact Name</strong></label>
                 <div class="controls">
                    <input type="text" id="inputError" name="name" value="<?php echo $d['cname'];?>">
                 </div>
        </div>

      <div class="control-group success">
              <label class="control-label" for="inputError"><strong>Contact Address</strong></label>
                 <div class="controls">
                    <input type="text" id="inputError" name="address" value="<?php echo $d['caddress'];?>">
                 </div>
        </div>
		
		    
    <div class="control-group success">
              <label class="control-label" for="inputError"><strong>Contact Email-ID</strong></label>
                 <div class="controls">
                    <input type="text" id="inputError" name="email" value="<?php echo $d['cemail'];?>">
                 </div>
        </div>

   <div class="control-group success">
              <label class="control-label" for="inputError"><strong>Contact Phone-Number</strong></label>
                 <div class="controls">
                    <input type="text" id="inputError" name="phnno" value="<?php echo $d['cphoneno'];?>">
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
