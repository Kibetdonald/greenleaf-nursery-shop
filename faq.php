<?php

include("includes/functions.php");
include("includes/db.php");



?>

<!Doctype html>
<html>
<title>Give Feedback</title>
<head>
    <link rel="stylesheet" href="Style.css">
    <link rel="stylesheet" href="fontawesome-free-5.14.0-web/css/fontawesome.css">
    <link rel="stylesheet" href="fontawesome-free-5.14.0-web/css/fontawesome.min.css   ">
    <link rel="stylesheet" href="fontawesome-free-5.14.0-web/css/solid.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
.collapsible {
  background-color:white;
  color:black;
  cursor: pointer;
  padding: 18px;
  width: 100%;
  border: none;
  text-align: left;
  outline: none;
  font-size: 15px;
}

.active, .collapsible:hover {
  background-color: white;
}

.collapsible:after {
  content: '\002B';
  color: white;
  font-weight: bold;
  float: right;
  margin-left: 5px;
}

.active:after {
  content: "\2212";
}

.content {
  padding: 0 18px;
  max-height: 0;
  overflow: hidden;
  transition: max-height 0.2s ease-out;
  background-color: #f1f1f1;
}
</style>
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
      
      <input type="text" class="search-area" name="user_query" placeholder="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Search your need"/>
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
            </div>
        </div>
		
    
		<br><br><br><br><br><br><br><br>
		<center>
		<h1>FREQUENTLY ASKED QUESTIONS</h1>
    
		<button class="collapsible">1. How do I place my order?</button>
<div class="content">
  <p>To place an order you can either telephone us on +254703959145  or +254-700-723220 or drop us an email at greenleafnursery@gmail.com.</p>
</div>
<button class="collapsible">2. How long does it take to process an order?</button>
<div class="content">
  <p>It normally takes 4 weeks for tomato, cabbage, broccoli, watermelon, kales, and spinach seedlings to be ready for transplanting. For onions, leeks the duration is normally about 5 weeks. For seedlings like peppers (both sweet and hot) and brinjals the transplanting time is about 7 weeks. Order confirmation is usually through payment of a deposit.</p>
</div>
<button class="collapsible">
3. How do I arrange delivery / collection?</button>
<div class="content">
  <p>We arrange delivery to Nairobi. Upcountry order deliveries are normally made through a courier service for customers who cannot come to Nairobi. For large scale growers the seedlings are normally collected from our farm in their own transport.</p>
</div>
<button class="collapsible">4. Is the cost of delivery included in the price?</button>
<div class="content">
  <p>Deliver charges are not included in the price and are normally borne by the customer.</p>
</div>
<button class="collapsible">5. Do we supply to trade customers?</button>
<div class="content">
  <p>Yes we can supply to any agrovet who will partner with us. We also sell direct to small holder farmers and large scale vegetable exporters.</p>
</div>
<button class="collapsible">6. What are the ideal conditions for storing young vegetable plants?</button>
<div class="content">
  <p>To prevent young vegetable plant deterioration: unpack immediately upon receipt. Ensure that they do not dry out, but also do not over water. Tender plants should be kept in warm dry area at all times. Transplant within 24 hours of receipt of plants.</p>
</div>

</center>
<script>
var coll = document.getElementsByClassName("collapsible");
var i;

for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var content = this.nextElementSibling;
    if (content.style.maxHeight){
      content.style.maxHeight = null;
    } else {
      content.style.maxHeight = content.scrollHeight + "px";
    } 
  });
}
</script>

        

<br>



<br>

<br>

<br>

<br>

<br>

<br>

<br>

<br>
  <center> <div class="copyrights_agile">
          <img src="images/pay.jpg" height="100" width="350"  >
                        <p> <?php echo date("Y");?>Greenleaf Nursery Shop. All rights reserved 
        </p>
       </div>
        </center>