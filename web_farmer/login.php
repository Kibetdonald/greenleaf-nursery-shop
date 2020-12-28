<?php
session_start();
//session_regenerate_id(true);
include("connection.php");
$check=0;

if(isset($_POST['submit']))
{
$Email_id = $_POST['Email_id'];
$password = $_POST['password'];

$query=mysqli_query($connection,"select Email_id from admin where Email_id='$Email_id' and password='$password'")or die ("query 1 incorrect.......");

list($user_id)=mysqli_fetch_array($query);

$_SESSION['user_id']=$user_id;
header("location:index.php");

$check=1;

if($check==0)
{
$check=2;
}

mysqli_close($connection);
}
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="Style.css">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="../layout/css/bootstrap.min.css">
<title>Welcome Farmer</title>
</head>
<body>
<body>
     <div id="wrapper">
    <div id="header">
         <div id="subheader">
              <div class="container">
    <p> Best Online Nursery Store</p>
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
        <li><a href="#">Cart</a></li>
        <li><a href="Login.php">Login</a></li>
            
        </div>
        </div>
        <div id="navigation">
        <nav>
            
            <a href="http://localhost/project/Index.html">HOME</a>
             <a href="#">ABOUT US</a>
            <a href="#">ALL PLANTS</a>
            <a href="#">DISCOUNT</a>
            <a href="#">PRODUCTS</a>
            <a href="#">FAQ</a>
             <a href="#">CONTACTS</a>
            
            </nav>
            </div>
        <br><br><br><br><br><br><br><br><br><br><br>
        <center>
            <h1>Welcome Farmer</h1>
<form action="login.php" method="post" id="login" name="login" enctype="multipart/form-data">
<div class="form-group">
Email_id: <input type="text" style="font-size:18px; width:200px" class="input-lg" name="Email_id" id="Email_id" placeholder="Email_id" required autofocus>
</div>
    <br><br>
<div class="form-group">
Password: <input type="password" class="input-lg" name="password" style="font-size:18px; width:200px" id="password" placeholder="Password" required>
 </div><br>
 <div class="form-group">
<button class="btn btn-large btn-lg btn-success" type="submit" name="submit" id="submit">Log in</button>
</div>

</form>
            </center>
</div>
</div>
</body>
</html>