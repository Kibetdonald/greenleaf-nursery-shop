
<?php

$con = mysqli_connect("localhost","root","","greenleaf");

?>
<?php
if(isset($_POST['submit'])){
$Email_Id=$_POST['Email_Id'];
$password=MD5($_POST['password']);
$position=$_POST['position'];
switch($position){
case 'Farm Manager':
  $result=mysqli_query($con,"SELECT admin_id, Email_Id FROM admin WHERE Email_Id='$Email_Id' AND password='$password'");
  $row=mysqli_fetch_array($result);
if($row>0){
session_start();
$_SESSION['admin_id']=$row[0];
$_SESSION['Email_Id']=$row[1];
header("location:http://".$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF'])."/web_admin/index.php");
}else{
  echo"<script>alert('Wrong Password or Username!')</script>";
}
break;


case 'Customer':

$result=mysqli_query($con,"SELECT customer_id, Email_Id FROM users WHERE Email_Id='$Email_Id' AND password='$password'");
$row=mysqli_fetch_array($result);
if($row>0){
session_start();
$_SESSION['customer_id']=$row[0];
$_SESSION['Email_id']=$row[1];
header("location:http://".$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF'])."/checkout.php");
}else{
  echo"<script>alert('Wrong password or Username!')</script>";
}
break;



case 'Farmer':
$result=mysqli_query($con,"SELECT farmer_id, Email_Id FROM farmer WHERE Email_Id='$Email_Id' AND password='$password'");
$row=mysqli_fetch_array($result);
if($row>0){
session_start();
$_SESSION['farmer_id']=$row[0];
$_SESSION['Email_Id']=$row[1];
header("location:http://".$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF'])."/web_farmer/index.php");
}else{

  echo"<script>alert('Wrong Password or Username!')</script>";
}
break;
}}
echo <<<LOGIN


<!DOCTYPE html>
 
 <html>
 <link rel="stylesheet" type="text/css" href="custom.css">
 <script src="jquery.min.js"></script>
 <script src="control.js"></script>
 
 <title>Greenleaf Nursery Shop</title>
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <link rel="stylesheet" href="Style.css">
      <link rel="stylesheet" href="media.css">
     <link rel="stylesheet" href="mobile.css">
      <link rel="stylesheet" href="navi.css">

      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> 
     
     
      <link rel="stylesheet" href="fontawesome-free-5.14.0-web/css/fontawesome.css">
      <link rel="stylesheet" href="fontawesome-free-5.14.0-web/css/fontawesome.min.css   ">
      <link rel="stylesheet" href="fontawesome-free-5.14.0-web/css/solid.css"/>
      <meta name="viewport" content="width=device-width, initial-scale=1">
           <meta charset="utf-8">
         <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 
 
   
         <link href="css/owl.carousel.css" rel="stylesheet" type="text/css"/>
     
 </head>
 <body>
     <div id="wrapper">
     <div id="header">
          <div id="subheader">
               <div class="container">
     <p><i class="fa fa-phone" style="font-size:28px"></i> Call Tel: +254703959145 | Best Online Nursery Store.Delivered!</p>
                   
                  <a href="#">Enquire Now</a>
                     <a href="#">Track Order</a>
                     <a href="#">Help</a>
                     <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                     
                     
     </div>
 </div>
 
         <div id="main-header">
         <div id="logo">
            
            <img src='images/Captures.png' width="95%" /> 
           
                       
            
           </div> 
 
         <div id="search">
         <form method="get" action="result.php" enctype="multipart/form-data">
   
    <div class="search">
       
       <input type="text" class="search-area" name="user_query" placeholder="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Type Keywords & Press enter..."/>
       <input type="submit" value="Search" class="search-btn" name="search"/>
     </div>
 
     </form>
         
         </div>
         <div id="user-menu">

<li><a href="cart.php"><i class="fa fa-shopping-cart" 

   style="font-size:36px"></i> Cart</a>
<font color="red"><sup> <?php total_items(); ?></font>&nbsp;</li></sup>
</li>






<li>
             <div class="profile_info">
       
                 <i class="fa fa-user" 
       </div><a href="Login.php"></i> Login</a></li></i>
             
         </div>
         </div>
         <BR><BR><BR>
         <div id="navigation">
         <nav>
             
             <a href="Index.html">HOME</a>
              <a href="about us.php">ABOUT US</a>
             <a href="allproducts.php">ALL PLANTS</a>
             <a href="services.php">SERVICES</a>
             <a href="feedback.php">FEEDBACK</a>
             <a href="faq.php">FAQ</a>
              <a href="contact us.php">CONTACT US</a>
             
             </nav>
             </div>
         </div>
<center>
    <br><br>   <br>    <br>
    <br>
    <br>
    
    <center>LOGIN</center>
     
    <br>
  
    
      <form method="post" action="Login.php">
     <p><input type="text" name="Email_Id" id="email" value="" placeholder="Email_Id" required></p>
     <span id="email_error" class="error"></span>


     <div class="form-group">
     <p><input type="password" id="password" name="password" value="" placeholder="Password"minlength="8" "
     pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
     
     </p>
     <input type="checkbox" onclick="myFunction()">Show Password
     <span id="passsword_error" class="error"></span>
 </div>
		<p><select name="position">
		<option>--Select position--</option>
			<option>Farm Manager</option>
			<option>Customer</option>
			<option>Farmer</option>
    
      


			</select></p>
        <p class="submit"><input type="submit" name="submit" value="Login">		
<input type="reset" value="Clear"/> </p>

<a href='Signup.php'>Register as a new user </a><br/>
      </form>

    </div>

    </section>
</div>

<br><br>
<div id="footer" align="Center">Greenleaf Nursery Shop</a>. 2020 Copyright All Rights Reserved</div>
</div>
<script>
function myFunction() {
  var x = document.getElementById("password");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}

var myInput = document.getElementById("password");
var letter = document.getElementById("letter");
var capital = document.getElementById("capital");
var number = document.getElementById("number");
// When the user starts to type something inside the password field
myInput.onkeyup = function() {
  // Validate lowercase letters
  var lowerCaseLetters = /[a-z]/g;
  if(myInput.value.match(lowerCaseLetters)) {  
    letter.classList.remove("invalid");
    letter.classList.add("valid");
  } else {
    letter.classList.remove("valid");
    letter.classList.add("invalid");
  }
  
  // Validate capital letters
  var upperCaseLetters = /[A-Z]/g;
  if(myInput.value.match(upperCaseLetters)) {  
    capital.classList.remove("invalid");
    capital.classList.add("valid");
  } else {
    capital.classList.remove("valid");
    capital.classList.add("invalid");
  }

  // Validate numbers
  var numbers = /[0-9]/g;
  if(myInput.value.match(numbers)) {  
    number.classList.remove("invalid");
    number.classList.add("valid");
  } else {
    number.classList.remove("valid");
    number.classList.add("invalid");
  }
  
}



</script>
</body>
</html>
LOGIN;
?>

	







	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
