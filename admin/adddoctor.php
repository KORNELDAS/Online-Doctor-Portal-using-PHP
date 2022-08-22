<?php
include("config.php");

if($_SESSION["is_login"]=="" or !isset($_SESSION['is_login']))
{
    header("location:index.php");
}
?>
<?php
               if($_SERVER['REQUEST_METHOD']=='POST')
            {
              
              $doctname=$_POST['name'];
			  $doctquali=$_POST['qualification'];
			  $doctexp=$_POST['experience'];
			  @$doctvisit=$_POST['visit'];
			  @$doctpic=$_POST['picture'];
			  @$doctemail=$_POST['emailid'];
			  @$doctphn=$_POST['phoneno'];
			  $doctadd=$_POST['address'];
			  $deptid=$_POST['deptid'];
			  
		      @$sql="insert into doctor_tbl values(NULL,'".$doctname."','".$doctquali."','".$doctexp."','".$doctvisit."','".$doctpic."','".$doctemail."','".$doctphn."','".$doctadd."','".$deptid."')";
              $n=mysqli_query($con,$sql);
                if($n)
                  {
                     $msg="DATA  IS  INSERTED";    
                  }
                else
                  {
                     $msg="DATA  IS  NOT  INSERTED";
                  }
            }
        ?>



<!=======================================DOCTYPE html=============================================>

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
        
        
        
        
         <script type="text/javascript">
            
        </script>  
    </head>
    
    <body>

        <div id="wrapper">

                <?php include("header.php");?>      
         
                <?php include("sidebar.php");?> 
                
                
<!========================================Form=========================================================>           <br/>     
            
       <div id="page-wrapper">
    
           <div class="span10">
            
                        <form class="form-horizontal"  method="post" enctype="multipart/form-data">
                                     
                          <fieldset>
                                   <div class="alert alert-success">
                                      <h3>Add Doctor</h3>
                        	       </div>
 <!========================================Form=========================================================>
 <div class="control-group success">
              <label class="control-label" for="inputError"><strong>Doctor Name</strong></label>
                 <div class="controls">
                    <input class="input-xlarge focused" id="focusedInput" type="text" name="name">
                 </div>
        </div>  
		
		 <div class="control-group success">
              <label class="control-label" for="inputError"><strong>Doctor Qualification</strong></label>
                 <div class="controls">
                    <textarea name="qualification" class="input-xlarge focused" id="focusedInput"></textarea>
                 </div>
        </div>  
		
		 <div class="control-group success">
              <label class="control-label" for="inputError"><strong>Doctor Experience</strong></label>
                 <div class="controls">
                    <textarea name="experience" class="input-xlarge focused" id="focusedInput"></textarea>
                 </div>
        </div>                              
        
        <div class="control-group success">
              <label class="control-label" for="inputError"><strong>Doctor Visit</strong></label>
                 <div class="controls">
                    <input class="input-xlarge focused" id="focusedInput" type="text" name="visit" value="">
                 </div>
        </div>
		
		<div class="control-group success">
              <label class="control-label" for="inputError"><strong>Doctor Pic</strong></label>
                 <div class="controls">
                    <input class="input-xlarge focused" id="focusedInput" type="file" name="picture" value="">
                 </div>
        </div>
	    
		 <div class="control-group success">
              <label class="control-label" for="inputError"><strong>Doctor Email</strong></label>
                 <div class="controls">
                    <input class="input-xlarge focused" id="focusedInput" type="text" name="emailid" value="">
                 </div>
        </div>    
		
		<div class="control-group success">
              <label class="control-label" for="inputError"><strong>Doctor Phone-Number</strong></label>
                 <div class="controls">
                    <input class="input-xlarge focused" id="focusedInput" type="text" name="phoneno" value="">
                 </div>
        </div>
		
		<div class="control-group success">
              <label class="control-label" for="inputError"><strong>Doctor Address</strong></label>
                 <div class="controls">
                    <textarea name="address" class="input-xlarge focused" id="focusedInput" type="text"></textarea>
                 </div>
        </div>
		
				
		
		
		
		<!--Design for combo box-->			 
			 
			 
			 <div class="control-group success">
			 <label for="inputError" class="control-label"><strong>Department Name</strong></label>
                 <div class="controls">
                    <select id="selectError" name="deptid"> 
                     
                    <?php
                        $sql="select * from department_tbl";
                        $rs=mysqli_query($con,$sql);
                        while($data=mysqli_fetch_array($rs))
                        {
                          ?>
                        <option value="<?php echo $data['deptid'];?>">
                            <?php echo $data['deptname'];?>
                        </option>
                        <?php
                        }
                        ?>
                        
                    </select>
                     
                        </div>
                
        </div>

        <div class="form-actions">                    
        <button type="submit" class="btn btn-outline btn-success" onClick="return alert('DATA SAVED SUCCESSFULLY')">Save Data</button>                  
        
        <button type="submit" class="btn btn-outline btn-danger">Cancel</button>
            
            
        </div> 
<!======================================================================================================>
                              
            
            </fieldset>
            </form>
        </div>   
                
   </div>  
                       
<!======================================================================================================>            
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
