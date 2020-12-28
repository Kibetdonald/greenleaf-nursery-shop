
<?php

include("includes/functions.php");
include("includes/db.php");


?>
 <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">

 <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
<link rel="stylesheet" href="Style.css">
<link rel="stylesheet" href="getit.css">
<link rel="stylesheet" type="text/css" href="styles.css" />
<script type="text/javascript" src="js/boxOver.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<header>
<link rel="stylesheet" href="fontawesome-free-5.14.0-web/css/fontawesome.css">
    <link rel="stylesheet" href="fontawesome-free-5.14.0-web/css/fontawesome.min.css   ">
    <link rel="stylesheet" href="fontawesome-free-5.14.0-web/css/solid.css"/>
<title>Get Details</title>

<script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">


</header>


<div id="wrapper">
    <div id="header">
         <div id="subheader">
              <div class="container">
    <p><i class="fa fa-phone" style="font-size:28px"></i> Call Tel: +254703959145 | Best Online Nursery Store.Delivered!</p>
                  <a href="#">Enquire Now</a>
                    <a href="#">Track Order</a>
                    <a href="#">Help</a>
                    <a href="#">Center</a>
    </div>
</div>
       

       <div id="main-header">
        <div id="logo">
             <span id="IST"><img src='images/garden shop-mobile logo.png' /> </span >
            
            <span id="IIST">GRE</span><span id="IIIST">ENLEAF</span>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span id="IIST">NURSERY</span>        <span id="IIIST">SHOP</span>

            
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
<font color="red"><sup> <?php total_items(); ?></font>&nbsp;</sup></li>
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


           

  
     <br><br><br><br>
   <div class="banner_adds"> <a href="details.php?prd_id=20"><img src="images/bann2.jpg" alt="" border="0" /></a> </div>
 </div>
 
 
 
<div class="content_right">
<br><br><br>

<label class="qty">Qty: </label>
<input type="number" value="1" name="qty"/>
<br><br>
<a href='details.php?addcart=$product_id' class='addtocart'>ADD TO CART</a>
<br>

<h4>Ship to:</h4>
<h6>Rongai, Nairobi</h6>

</div>

 <!-- end of left content -->
 <div class="center_content">
  
   
<?php

details();

?>





   
   
 </div>
  
  
  <!-- end of main content -->      
      
</div>


<?php


cart();

?>
<!-- end of main_container -->
</body>
</html>
