<?php
error_reporting(0);
include('db.php');
session_start();



if (isset($_POST['submit']))
{
$farmer_id=$_POST['farmer_id'];

$username=mysqli_real_escape_string($con, $_POST['username']);
$phone=mysqli_real_escape_string($con, $_POST['phone']);
$Email_Id=mysqli_real_escape_string($con, $_POST['Email_Id']);
$password=mysqli_real_escape_string($con, $_POST['password']);

//updating the table
mysqli_query($con,"UPDATE farmer SET username='$username', phone='$phone', Email_Id='$Email_Id', password='$password' WHERE farmer_id='$farmer_id'");


echo "<script>
Swal.fire({
  position: 'top-end',
  icon: 'success',
  title: 'Farmer Edited',
  showConfirmButton: false,
  timer: 2000
})
</script>"; 

echo"<script>window.open('index.php?tn=$r','_self')</script>";


}


if (isset($_GET['farmer_id']) && is_numeric($_GET['farmer_id']) && $_GET['farmer_id'] > 0)
{

$farmer_id = $_GET['farmer_id'];
$result = mysqli_query($con,"SELECT * FROM farmer WHERE farmer_id=".$_GET['farmer_id']);

$row = mysqli_fetch_array($result);

if($row)
{

$farmer_id = $row['farmer_id'];
$farmer_id = $row['farmer_id'];
$username = $row['username'];
$phone = $row['phone'];
$Email_Id=$row['Email_Id'];
$password = $row['password'];

}
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Farmer Panel</title>
 <meta name="viewport" content="width=device-width, initial-scale=1">
<link href="style/css/bootstrap.min.css" rel="stylesheet">
 <link rel="stylesheet" href="Style.css">
<link href="style/css/k.css" rel="stylesheet">




<style>

input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  
}
table{
  border: 1px solid black;
  }
   table{
   width: 100%;
}
th{
  width:40px;
  font-size: 14px;
}
td{font-size: 12px;}
.label{
	color:black;
}
.btn {
  

  border: none;
  color: white;
  padding: 12px 16px;
  font-size: 13px;
  cursor: pointer;
  background:green;
}

/* Darker background on mouse-over */

.circular--square {
  border-radius: 50%;
}
</style>
</head>
<body>
<div id="wrapper">
    <div id="header">
         <div id="subheader">
              <div class="container">
    
                
                   
    </div>
</div>
        <div id="main-header">
        <div id="logo">
            <span id="IST">GRE</span
                ><span id="IIST">ENLEAF</span>
            
            </div>
       
        
        
        <div id="navigation">
        <nav>
            
           
            
            </nav>
            </div>
        </div>
        <br><br><br><br><br><br>
  <?php include("include/header.php");?>
    <div class="container-fluid main-container">
    <?php include("include/side_bar.php");?>
    <div class="col-md-9 content" style="margin-left:10px">
    <div class="panel-heading" style="background-color:#1AAA1A">
    <h1>Edit Farmer's Records</h1></div>
    <div id="wrapper">
    <div id="header">
         <div id="subheader">
        
              <div class="container">
              <br><br><br><br><br>
   	<div class="container-fluid main-container">
       
	<div class="col-md-9 content" style="margin-left:50px">
  	<div class="panel panel-default">

	
	<div class="panel-body">
		<h3>
    <!-- end of center content -->
    <!-- end of right content -->
<!-- end of main_container -->

    <h5 class="card-title">Edit Farmer's Records <span class="text-danger"></span></h5>
    <form method="post" action="profile-settings.php">
    <input type="hidden" name="id" value="<?php echo $farmer_id; ?>"/>
	 <div class="form-row">
   
	 <div class="form-group">
            <label>Farmer Id <span class="text-danger"></span></label>
            <input type="text" name="farmer_id" id="farmer_id" value="<?php echo $farmer_id; ?>" required>
        </div>

		<div class="form-group">
            <label>Username <span class="text-danger"></span></label>
            <input type="text" name="username" id="username" value="<?php echo $username; ?>" required>
        </div>
		<div class="form-group">
            <label>Phone <span class="text-danger"></span></label>
            <input type="text" name="phone" id="phone" value="<?php echo $phone; ?>" required>
        </div>




	    <div class="form-group">
            <label>Email_Id <span class="text-danger"></span></label>
            <input type="text" name="Email_Id" id="Email_Id" value="<?php echo $Email_Id; ?>" required>
        </div>
        <div class="form-group">
            <label>Password <span class="text-danger"></span></label>
            <input type="text" name="password" id="password" value="<?php echo $password; ?>" required>
        </div>
        
        <div class="form-group">
		<div class="col-sm-8">
			<button type="button" name="cancel" value="cancel" id="cancel" onClick="window.location='index.php';" class="btn btn-primary">Cancel</button>
		</div>
		<div class="col-sm-4">
            <button type="submit" name="submit" value="submit" id="submit" class="btn btn-primary"><i class="fa fa-fw fa-edit"></i>Save Changes</button>
		</div>
        </div>
    </form>
</body>
</html>
		</div>
               
                
                    
        </div>
		
        <!-- main content area end -->
        <!-- footer area start-->
       
        <!-- footer area end-->
    </div>
	</div>
	</div>
	</div>
	</div>
	<div>
		</div>
	</div>
	</div>
	<div>
	

   

</body>

</html>

   