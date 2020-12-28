<?php
include("check_session.php"); 
include("connection.php");

if(isset($_POST['btn_save']))
{
$user_name=$_POST['user_name'];
$user_password=$_POST['user_password'];

mysqli_query($connection,"insert into admin_login(user_name, user_password) values ('$user_name','$user_password')") 
			or die ("Query 1 is inncorrect........");
header("location: manage_users.php"); 
mysqli_close($connection);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Admin Panel</title>
 <link rel="stylesheet" href="Style.css">
 <meta name="viewport" content="width=device-width, initial-scale=1">
<link href="style/css/bootstrap.min.css" rel="stylesheet">
<link href="style/css/k.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
</head>
<body>
<div id="wrapper">
    <div id="header">
         <div id="subheader">
              <div class="container">
    <p><i class="fa fa-phone" style="font-size:28px"></i> Call Tel: +254703959145 | Best Online Nursery Store.Delivered!</p>
                  
                  <a href="#">Guest</a>
                    <a href="#">Download App</a>
                    <a href="#">Customer</a>
                    <a href="#">Help</a>
    </div>
</div>
        <div id="main-header">
        <div id="logo">
            <span id="IST">GRE</span
                ><span id="IIST">ENLEAF</span>
            
            </div>
        <div id="search">
        <form action="">
            <input class="search-area" type="text" name="text" placeholder="Search Here">
            <input class="search-btn" type="submit" name="submit" value="SEARCH">
             </form>
        
        </div>
        <div id="user-menu">
        <li><a href="#"><i class="fa fa-shopping-cart" style="font-size:36px"></i> Cart</a></li>
        <li><a href="Login.php"><i class="fa fa-sign-in" aria-hidden="true"></i> Login</a></li>
            
        </div>
        </div>
        <div id="navigation">
        <nav>
            
            <a href="#">HOME</a>
             <a href="About%20us.php">ABOUT US</a>
            <a href="allproducts.php">ALL PLANTS</a>
            <a href="#">DISCOUNT</a>
            <a href="#">PRODUCTS</a>
            <a href="#">FAQ</a>
             <a href="#">CONTACTS</a>
            
            </nav>
            </div>
        </div>
<?php include("include/header.php"); ?>

<div class="container-fluid">
<?php include("include/side_bar.php"); ?>

  <div class="col-sm-10 " align="center">	
  <div class="panel-heading" style="background-color:#c4e17f">
	<h1>Add User  </h1></div><br>
	
<form action="add_user.php" name="form" method="post">
<input name="user_name" class="input-lg" type="text"  id="user_name" style="font-size:18px; width:200px" placeholder="User-Name" autofocus required><br><br>
<input name="user_password" class="input-lg" type="text"  id="user_password" style="font-size:18px; width:200px"  placeholder="Password" required>
<hr>
 <button type="submit" class="btn btn-success" name="btn_save" id="btn_save" style="font-size:18px">Submit</button>
</form>
</div></div>
<?php include("include/js.php"); ?>
</body>
</html>