<?php
session_start();
include_once('connect_db.php');
if(isset($_SESSION['Email_Id'])){
$admin_id=$_SESSION['admin_id'];
$Email_Id=$_SESSION['Email_Id'];


}else{
header("location:http://".$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF'])."/../Login.php");
exit();
}


$session_email = $_SESSION['Email_Id'];
$select_customer = "select * from admin where Email_Id='$session_email'";
$run_customer = mysqli_query($con,$select_customer) or die( mysqli_error($con));
$row_customer = mysqli_fetch_array($run_customer);
$username = $row_customer['username'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <link rel="stylesheet" href="Style.css">
<title>Farmer Panel</title>
 <meta name="viewport" content="width=device-width, initial-scale=1">
<link href="style/css/bootstrap.min.css" rel="stylesheet">
<link href="style/css/k.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
</head>
<style>
	
.profile_info img {
	
	width: 40px; 
	height: 50px; 
	margin: 3px;
	
}

</style>
<body>
     <div id="wrapper">
    <div id="header">
         <div id="subheader">
              <div class="container">
         
         <br><br><br>
                
</div>
             <center>
        <div id="main-header">
        <div id="logo">
            <span id="IST">GRE</span
                ><span id="IIST">ENLEAF</span>
            
            </div>
        
      
            
        </div>
                 </center>
        </div>
        <div id="navigation">
        <nav>
            
         
            </nav>
        
            <BR>
  <BR>
  <BR>
 
   	 <?php include("include/header.php");?>
   	<div class="container-fluid main-container">
	<?php include("include/side_bar.php");?>
    
	<div class="col-md-9 content" style="margin-left:10px">
  	<div class="panel panel-default">
	<div class="panel-heading" style="background-color:#1aaa1a">
    
	<h1>Welcome Farm Manager,
    

    <?php echo $username; ?>.
	
    
    
    <div class="profile_info">
			<img src="images/admin_profile.png"  >
			</div> </h1></div>
	<div class="panel-body">
		<h3>
<?php  //success message
if(isset($_POST['success'])) {
$success = $_POST["success"];
echo "<h1 style='color:#0C0'>Your Product was added successfully &nbsp;&nbsp;  <span class='glyphicon glyphicon-ok'></h1></span>";
}
?></h3>
	</div>
</div></div></div>
<?php include("include/js.php"); ?>
             
       </div></div>
    
</div>
</body>
</html>