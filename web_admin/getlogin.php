<!Doctype html>
<html>
<title>Greenleaf Nursery Shop</title>
<head>
    <link rel="stylesheet" href="Style.css">
    <link rel="stylesheet" href="mobile.css">
     <link rel="stylesheet" href="navi.css">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> 
    
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<h1></h1>
    <style>
body {
  font-family: Arial;
  margin: 0;
}

* {
  box-sizing: border-box;
}

img {
  vertical-align: middle;
}

/* Position the image container (needed to position the left and right arrows) */
.container {
  position: relative;
}

/* Hide the images by default */
.mySlides {
  display: none;
}

/* Add a pointer when hovering over the thumbnail images */
.cursor {
  cursor: pointer;
}

/* Next & previous buttons */
.prev,
.next {
  cursor: pointer;
  position: absolute;
  top: 40%;
  width: auto;
  padding: 16px;
  margin-top: -50px;
  color: white;
  font-weight: bold;
  font-size: 20px;
  border-radius: 0 3px 3px 0;
  user-select: none;
  -webkit-user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover,
.next:hover {
  background-color: rgba(0, 0, 0, 0.8);
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* Container for image text */
.caption-container {
  text-align: center;
  background-color: #222;
  padding: 2px 16px;
  color: white;
}

.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Six columns side by side */
.column {
  float: left;
  width: 16.66%;
}

/* Add a transparency effect for thumnbail images */
.demo {
  opacity: 0.6;
}

.active,
.demo:hover {
  opacity: 1;
}
         :root{ --main-color: #e74c3c; }
.product-grid{
    font-family: 'Roboto', sans-serif;
    position: relative;
}
.product-grid .product-image{
    overflow: hidden;
    position: relative;
}
.product-grid .product-image:before{
    content: "";
    background: rgba(0,0,0,0.3);
    width: 100%;
    height: 100%;
    opacity: 0;
    position: absolute;
    top: 0;
    left: 0;
    z-index: 1;
    transition: all 0.4s ease-out 0s;
}
.product-grid:hover .product-image:before{ opacity: 1; }
.product-grid .product-image a{ display: block; }
.product-grid .product-image img{
    width: 100%;
    height: auto;
}
.product-image .pic-1{
    opacity: 1;
    backface-visibility: hidden;
    transition: all 0.4s ease-out 0s;
}
.product-grid:hover .product-image .pic-1{ opacity: 0; }
.product-image .pic-2{
    width: 100%;
    height: 100%;
    opacity: 0;
    backface-visibility: hidden;
    transform: scale(3);
    position: absolute;
    top: 0;
    left: 0;
    transition: all 0.4s ease-out 0s;
}
.product-grid:hover .product-image .pic-2 {
    opacity: 1;
    transform: scale(1);
}
.product-image .product-trend-label,
.product-image .product-discount-label{
    content: "";
    color: #fff;
    background-color: #2ecc71;
    font-size: 12px;
    line-height: 28px;
    font-weight: 700;
    text-align: center;
    text-transform: uppercase;
    padding: 0 7px;
    position: absolute;
    top: 12px;
    left: 12px;
    z-index: 3;
}
.product-image .product-discount-label{
    background-color: var(--main-color);
    left: auto;
    right: 12px;
}
.product-grid .social {
    padding: 0;
    margin: 0;
    list-style: none;
    transform: translateY(-50%);
    position: absolute;
    top: 50%;
    left: 10px;
    z-index: 4;
}
.product-grid .social li {
    margin: 0 0 12px;
    opacity: 0;
    transform: translateX(-60px);
    transition: transform .3s ease-out 0s;
}
.product-grid:hover .social li {
    opacity: 1;
    transform: translateX(0);
}
.product-grid:hover .social li:nth-child(2){ transition-delay: 0.1s; }
.product-grid:hover .social li:nth-child(3){ transition-delay: 0.2s; }
.product-grid:hover .social li:nth-child(4){ transition-delay: 0.3s; }
.product-grid .social li a {
    color: #fff;
    font-size: 22px;
    transition: all 0.3s;
}
.product-grid .social li a:hover { color: var(--main-color); }
.product-grid .social li a:before,
 .product-grid .social li a:after{
    content: attr(data-tip);
    color: #000;
    background: #fff;
    font-size: 14px;
    padding: 5px 10px;
    white-space: nowrap;
    display: none;
    transform: translateY(-50%);
    position: absolute;
    left: 33px;
    top: 50%;
    transition: all 0.3s;
}
.product-grid .social li a:after{
    content: '';
    background: linear-gradient(-45deg, #fff 49%, transparent 50%);
    width: 10px;
    height: 10px;
    top: 40%;
    left: 20px;
}
.product-grid .social li a:hover:before,
.product-grid .social li a:hover:after{
      display: block;
}
.product-grid .product-content{ padding: 12px 0; }
.product-grid .title{
    font-size: 15px;
    font-weight: 400;
    text-transform: capitalize;
    margin: 0 0 5px;
}
.product-grid .title a{ color: #959595; }
.product-grid .title a:hover{ color: var(--main-color); }
.product-grid .price{
    color: #333;
    font-size: 14px;
    font-weight: 400;
}
.product-grid .price span{
    color: #333;
    text-decoration: line-through;
    margin-right: 3px;
}
.product-grid .price.discount{ color: var(--main-color); }
@media only screen and (max-width:990px){
    .product-grid{ margin-bottom: 30px; }
}
    
</style>
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
        <li><a href="#"><i class="fa fa-shopping-cart" style="font-size:36px"></i> Cart</a>
            <span id="cart_count" class="text-warning bg-light">0</span>
            </li>
        <li><a href="logout.php"><i class="fa fa-sign-in" aria-hidden="true"></i> Logout</a></li>
            
        </div>
        </div>
        <div id="navigation">
        <nav>
            
            <a href="Index.html">HOME</a>
             <a href="About%20us.php">ABOUT US</a>
            <a href="allproducts.php">ALL PLANTS</a>
            <a href="#">DISCOUNT</a>
            <a href="#">PRODUCTS</a>
            <a href="#">FAQ</a>
             <a href="#">CONTACTS</a>
            
            </nav>
            </div>
        </div>
       <div class="w3-content w3-section">
  <img class="mySlides w3-animate-fading" src="images/seedlings4.jpg" style="width:100%" height="450px">
  <img class="mySlides w3-animate-fading" src="images/seedlings3.jpg" style="width:100%" height="450px">
  <img class="mySlides w3-animate-fading" src="images/seedlings2.jpg" style="width:100%" height="450px">
  <img class="mySlides w3-animate-fading" src="images/seedlings.jpg" style="width:100%"height="450px">
 <img class="mySlides w3-animate-fading" src="images/csr_banner2.jpg" style="width:100%"height="450px">
  <img class="mySlides w3-animate-fading" src="images/csr_banner1.jpg" style="width:100%"height="450px"
       >
           
           
</div>

<script>
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 9000);    
}
</script>


        <div class="category">
            <div id="Heading-Block">
              <h2>Category</h2>
        
            </div>
            <a href="">
            <div class="bowl">
            <img src="images/pastel-cappucinno.jpg" alt="Flowers" height="300" width="350px">
                <span>Koya</span>
                 </div>
                
                 </a>
            <a href="">
            <div class="bowl">
            <img src="images/white-azalea.jpg" alt="Flowers" height="300" width="300px">
                <span>Flowers</span>
                 </div>
                 </a>
            <a href="">
            <div class="bowl">
            <img src="images/supari-palm-500x500.jpg" alt="Flowers" height="300" width="300px">
                <span>Flowers</span>
                 </div>
                 </a>
            <a href="">
            <div class="bowl">
            <img src="images/rose-pastel-top-gear.jpg" alt="Flowers" height="300" width="300px">
                <span>Palm</span>
                 </div>
                
                
               
                
                 </a>
            <a href="">
            <div class="bowl">
            <img src="images/premium-sorbet-spray.jpg" alt="Flowers" height="300" width="300px">
                <span>Palm Tree</span>
                 </div>
                 </a>
                </div>
        <div id="Heading-Block";>
        <h2>Products</h2>
        </div>
        
            
            
            <div class="container">
            
    <div class="row">
        <div class="col-md-3 col-sm-6">
            <div class="product-grid">
                <div class="product-image">
                    <a href="#">
                        <img class="pic-1" src="images/cerise-vuvuzela.jpg">
                        <img class="pic-2" src="images/bush-of-azalea-flowers.jpg">
                    </a>
                    <span class="product-trend-label">Trend</span>
                    <ul class="social">
                        <li><a href="#" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                        <li><a href="#" data-tip="Wishlist"><i class="fa fa-heart"></i></a></li>
                        <li><a href="#" data-tip="Compare"><i class="fa fa-random"></i></a></li>
                        <li><a href="#" data-tip="Quick View"><i class="fa fa-search"></i></a></li>
                    </ul>
                </div>
                <div class="product-content">
                    <h3 class="title"><a href="#">cerise-vuvuzela</a></h3>
                    <div class="price">$21.00</div>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="product-grid">
                <div class="product-image">
                    <a href="#">
                        <img class="pic-1" src="images/garden-peach-vuvuzela.jpg">
                        <img class="pic-2" src="images/rose-pastel-top-gear.jpg">
                    </a>
                    <span class="product-trend-label">Trend</span>
                    <span class="product-discount-label">-20%</span>
                    <ul class="social">
                        <li><a href="#" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                        <li><a href="#" data-tip="Wishlist"><i class="fa fa-heart"></i></a></li>
                        <li><a href="#" data-tip="Compare"><i class="fa fa-random"></i></a></li>
                        <li><a href="#" data-tip="Quick View"><i class="fa fa-search"></i></a></li>
                    </ul>
                </div>
                <div class="product-content">
                    <h3 class="title"><a href="#">Garden-peach-vuvuzela</a></h3>
                    <div class="price discount"><span>$17.00</span> $13.60</div>
                </div>
            </div>
        </div>
           
           
           
           <div class="col-md-3 col-sm-6">
            <div class="product-grid">
                <div class="product-image">
                    <a href="#">
                        <img class="pic-1" src="images/premium-sorbet-spray.jpg">
                        <img class="pic-2" src="images/pink-hydrangea.jpg">
                    </a>
                    <span class="product-trend-label">Trend</span>
                    <span class="product-discount-label">-20%</span>
                    <ul class="social">
                        <li><a href="#" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                        <li><a href="#" data-tip="Wishlist"><i class="fa fa-heart"></i></a></li>
                        <li><a href="#" data-tip="Compare"><i class="fa fa-random"></i></a></li>
                        <li><a href="#" data-tip="Quick View"><i class="fa fa-search"></i></a></li>
                    </ul>
                </div>
                <div class="product-content">
                    <h3 class="title"><a href="#">Herbs</a></h3>
                    <div class="price discount"><span>$17.00</span> $13.60</div>
                </div>
            </div>
        </div> 
           
            
              <div class="col-md-3 col-sm-6">
            <div class="product-grid">
                <div class="product-image">
                    <a href="#">
                        <img class="pic-1" src="images/white-azalea.jpg">
                        <img class="pic-2" src="img-8.jpg">
                    </a>
                    <span class="product-trend-label">Trend</span>
                    <span class="product-discount-label">-20%</span>
                    <ul class="social">
                        <li><a href="#" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                        <li><a href="#" data-tip="Wishlist"><i class="fa fa-heart"></i></a></li>
                        <li><a href="#" data-tip="Compare"><i class="fa fa-random"></i></a></li>
                        <li><a href="#" data-tip="Quick View"><i class="fa fa-search"></i></a></li>
                    </ul>
                </div>
                <div class="product-content">
                    <h3 class="title"><a href="#">Flowers</a></h3>
                    <div class="price discount"><span>$17.00</span> $13.60</div>
                </div>
            </div>
        </div>
    </div>
    <div id="Heading-Block">
    <h2>Offers</h2>
<div class="Offers">
    <a href=""><img src="images/discount-offers.png"></a></div>
 <div class="Offers">
 <a href=""><img src="images/Special-offer.jpg"></a>
</div>
<div class="Offers">
 <a href=""><img src="images/Special_Offers2.jpg"></a> </div>   
                </div>
            </div>
        </div>
             <div id="footer">
        <div class="container">
            <h2>Our Story</h2>
            <div class="footer_1">
        <h3>Greenleaf Online Nursery Store</h3>
                <p>
            Greenleaf Nursery Store  is among some global companies that have made it a strategic imperative to help the planet and its occupants. This goal is to promote sustainable and mutually beneficial coexistence and to make the environment more pleasant to leave in.

This can only be done by solution providers who have a clear understanding of the historical, current and future challenges in the world. With a deep understanding of the art and science of environmental management we are able to provide sustainable solutions. Asepsis Limited is a professional organization  on the journey of shaping a great future..
            <span>
            <a href="">Read More</a>
            
            
            </span></p>
            </div>
            
             <div class="footer_2">
        <center>
                 <h2>Important Links</h2>
            <ul>
            <li><a href="">Home</a></li>
                 <li><a href="Index.html">Home</a></li>
                <li><a href="">ABOUT US</a></li>
                 <li><a href="">ALL PLANTS</a></li>
                 <li><a href="">DISCOUNT</a></li>
                 <li><a href="">PRODUCTS</a></li>
                <li><a href="">FAQ</a></li>
                <li><a href="">CONTACTS</a></li>
                
                </ul>
                 </center>
            </div>
            
             <div class="footer_3">
        <center>
                 <h2>Social Media Links</h2>
            <ul>
            <li><a href="">Facebook</a></li>
                 <li><a href="">Google</a></li>
                 <li><a href="">Youtube</a></li>
                 <li><a href="">Twitter</a></li>
                 <li><a href="">Linkdin</a></li>
                <li><a href="">Blogger</a></li>
                </ul>
                 </center>
            </div>
            <div class="footer_4">
                <center>
                <h2>Subscribe</h2>
       
                <input type="text" name="sub" placeholder="Type your Email Address" class="sub">
                    <input type="submit" name="Submit" value="Subscribe" class=sub_btn>
                <p class="footer_5"><br><br><br><br><br>
                    Enter your email address to get notifications from us</p>
                </center>
            </div>
                 
                 </div>
        </div>
   <center>
    <div class="copyrights_agile">
						<p>© 2019-<?php echo date("Y");?>Greenleaf Nursery Shop. All rights reserved 
        </p>
        </center>
    </center>
        
   

</body>
</html>