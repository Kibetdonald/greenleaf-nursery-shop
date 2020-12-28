<?php


  include("include/db.php");
   ?>





<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Admin Panel</title>
 <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="stylesheet" href="Style.css">
<link href="style/css/bootstrap.min.css" rel="stylesheet">
<link href="style/css/k.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
</head>
<body>

        <div id="main-header">
        <div id="logo">
            <span id="IST">GRE</span
                ><span id="IIST">ENLEAF</span>
            
            </div>
        
        
      
            
        </div>
        
        <div id="navigation">
        <nav>
            
            
            
            </nav><br><br><br><br><br><br><br><br><br><br><br>
            </div>
        
    <br><br><br><br><br><br>
<?php include("include/header.php"); ?>

<div class="container-fluid">

<?php include("include/side_bar.php"); ?>
<div class="col-sm-9" style="margin-left:10px"> 
<div class="panel-heading" style="background-color:#1aaa1a">
	<h1>View Comments</h1></div><br>
<title>Category</title>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252" />
<link rel="stylesheet" type="text/css" href="style.css" />
<!--[if IE 6]>
<link rel="stylesheet" type="text/css" href="iecss.css" />
<![endif]-->
<script type="text/javascript" src="js/boxOver.js"></script>


<style type="text/css">
.style2 {
	width: 520px;
	height: 33px;
	float: left;
	padding: 0 0 0 40px;
	margin: 0 0 0 12px;
	_margin: 0 0 0 6px;
	line-height: 33px;
	font-size: 12px;
	color: #847676;
	font-weight: bold;
	background: url(images/bar_bg.gif) no-repeat center;
	text-align: center;
	
}

</style>

<script type="text/javascript" src="js/boxOver.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
 
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<div id="main_container">
  <div id="header">
   
    <!-- end of oferte_content-->
  </div>
  
       </ul></br>
       <?php

$con = mysqli_connect("localhost","root","","greenleaf");

if(mysqli_connect_errno()){
	
	echo"Failed to connect : " . mysqli_connect_error(); 
	
}


$sel=mysqli_query($con,"select * from comments");
while($arr=mysqli_fetch_array($sel))
  {
	
	echo "<center><fieldset style='width:60%'><table border=1,align=center>
	
	
	<h3>Details</h3>
	<tr>
	<td><b>Buyer &nbsp;&nbsp;</b> </td>
   <td><b>Phone No &nbsp;&nbsp;</b> </td>
	<td><b>County &nbsp;&nbsp;</b> </td>
	<td><b>Subject &nbsp;&nbsp;</b> </td>
    <td><b>Message &nbsp;&nbsp;</b></td>
</tr>
<tr>
<td>".$arr['FirstName']."</td>
<td>".$arr['Contacts']."</td>
<td>".$arr['County']."</td>
<td> ".$arr['Subject']."</td>
<td>".$arr['Message']."</td>
</tr>
	</table>
</fieldset><br>
</center>";
}

	
	?>
  <center><a href="excel.php" class="btn btn-default" style="color:black;"> Download Excel File </a></center>  
      
<div class="footer">
    
    <div class="center_footer"> &nbsp;All Rights Reserved 2020<br />
      	<br />
    
    
  </div>
</div>
<!-- end of main_container -->
</body>
</html>
