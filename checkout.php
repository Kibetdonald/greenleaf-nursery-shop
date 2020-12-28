


<?php

include("includes/functions.php");
include("includes/db.php");
cart();

?>


<?php

include("header.php");

?>


<?php

session_start();


if(isset($_SESSION['Email_id']))
{

?>
<br><br>


<?php 
    
 

    $session_email = $_SESSION['Email_id'];
    $select_customer = "select * from users where Email_id='$session_email'";
    $run_customer = mysqli_query($con,$select_customer) or die( mysqli_error($con));
    $row_customer = mysqli_fetch_array($run_customer);
    $customer_id = $row_customer['customer_id'];
    ?>




<?php	
}

else
	
{
  echo "<script>window.open('Login.php','_self')</script>";

}


?>


       <!-- Breadcrumb -->
			<div class="breadcrumb-bar">
				<div class="container-fluid">
					<div class="row align-items-center">
						<div class="col-md-12 col-12">
							<nav aria-label="breadcrumb" class="page-breadcrumb">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="index.html">CART</a></li>
									<li class="breadcrumb-item active" aria-current="page">Checkout</li>
								</ol>
							</nav>
							<h2 class="breadcrumb-title">Submit Order</h2>
						</div>
					</div>
				</div>
			</div>
			<!-- /Breadcrumb -->
			
			<!-- Page Content -->
			<div class="content">
				<div class="container">

					<div class="row">
						<div class="col-md-7 col-lg-8">
							<div class="card">
								<div class="card-body">
								
									<!-- Checkout Form -->
									<form action="connect.php" method="POST">
									
										<!-- Personal Information -->
										<div class="info-widget">
											<h4 class="card-title">Address Information</h4>
											<div class="row">
												<div class="col-md-6 col-sm-12">
													<div class="form-group card-label">
														<label>First Name</label>
														<input class="form-control" name="firstname" type="text" required>
													</div>
												</div>
												<div class="col-md-6 col-sm-12">
													<div class="form-group card-label">
														<label>Last Name</label>
														<input class="form-control" name="lastname" type="text" required>
													</div>
												</div>
												<div class="col-md-6 col-sm-12">
													<div class="form-group card-label">
														<label>Email</label>
														<input class="form-control" name="Email_id" type="email" required>
													</div>
												</div>
												<div class="col-md-6 col-sm-12">
													<div class="form-group card-label">
														<label>Phone  Number</label>
														<input class="form-control" name="phonenumber" type="text" required>
													</div>
												</div>
                        <div class="col-md-6 col-sm-12">
													<div class="form-group card-label">
														<label>Address</label>
														<input class="form-control" name="address" type="text" required>
													</div>
												</div>
                        <div class="col-md-6 col-sm-12">
													<div class="form-group card-label">
														<label>Pick Up Station</label>
														<select name="station" name="station" class="form-control">
<option selected disabled>Select Station</option>
<option >Eldoret</option>
<option >Machakos</option>
<option >Kajiado</option>
<option >Machakos</option>
<option >Murang'a</option>
<option >Nairobi</option>
<option >Nakuru</option>
<option >Nyeri</option>

</select>
													</div>
												</div>
											</div>
                      
											
											
											<!-- Terms Accept -->
										
											<!-- /Terms Accept -->
											
											<!-- Submit Section -->
											<div class="submit-section mt-4">
										
												<button href="order.php?c_id=<?php echo $customer_id ?>" type="submit" class="btn btn-success"> Submit Address Info </button>
												<p>N/B: Fill and submit the address information for delivery</p>
											</div>
											<!-- /Submit Section -->
											
										</div>
									</form>
									<!-- /Checkout Form -->
									
								</div>
							</div>
							
						</div>
						
						<div class="col-md-5 col-lg-4 theiaStickySidebar">
						
							<!-- Booking Summary -->
							<div class="card booking-card">
								<div class="card-header">
									<h4 class="card-title">Order Summary</h4>
								</div>
								<div class="card-body">
								
									<!-- Booking Doctor Info -->
						
									<!-- Booking Doctor Info -->
									
									<div class="booking-summary">

										<div class="booking-item-wrap">
											<ul class="booking-date">
											
											</ul>
											<ul class="booking-fee">

											
                                            <?php 
    
	
 
	$total = 0;
global $con;

$ip = getip();

$price = "select * from cart where ip_add = '$ip'";

$run_price = mysqli_query($con,$price) ;

while($pprice = mysqli_fetch_array($run_price)){

 $pro_id = $pprice['p_id'];
 
 $prod_price = "select * from products where prd_id = '$pro_id'";

 $run_pro_price = mysqli_query($con,$prod_price);


 while($ppprice = mysqli_fetch_array($run_pro_price)){

	$product_price = array($ppprice['prd_price']);
	$product_title = $ppprice['prd_title'];
	$product_image = $ppprice['prd_img'];
	$single_price = $ppprice['prd_price'];
  

	$price_sum = array_sum($product_price);

	$ip_add = getip();
$select_cart = "select * from cart where ip_add='$ip_add'";

$run_cart = mysqli_query($con,$select_cart);

while($row_cart = mysqli_fetch_array($run_cart)){
    
    $pro_id = $row_cart['p_id'];
    $qty = $row_cart['qty'];
    
    $get_products = "select * from products where prd_id='$pro_id'";
    
    $run_products = mysqli_query($con,$get_products);
    
    

            while($row_products = mysqli_fetch_array($run_products)){
	$sub_total = $row_products['prd_price']*$qty;
	$total +=$price_sum;

	//echo  $product_price;
 
 }

   }  }}
   ?>

   
 <tr align="center">
   
 <td><?php echo $product_title; ?></td>
 

  <br>
  <img src="images/<?php echo $product_image; ?>" width="90" height="90">
  </td>
  <br>
 <td>
Quantity:
 <?php echo $_SESSION['qty']; ?>
 </td> 
 <br>
											
	<td>													<td>
     Price:Ksh.
	 <?php echo    $total;  ?>
	 </td>
	 <br>
	 <td>													<td>
     VAT:Ksh.
	0
	 </td>
	 <br>
	 
	 <td>													<td>
     Total:Ksh.
	 <?php echo    $sub_total;  ?>
	 </td>


													</li>
												</ul>
                        <a href="order.php?c_id=<?php echo $customer_id ?>" class="btn btn-success"> Submit Order </a>
			   <a href="myorders.php?c_id=<?php echo $customer_id ?>" class="btn btn-success"> View Orders </a>
			  
			  
										
								</div>
							</div>
							<!-- /Booking Summary -->
							
						</div>
					</div>

				</div>

			</div>		
      




</br></br></br></br></br></br></br></br></br></br></br></br></br></br>


<center> <div class="copyrights_agile">
          <img src="images/pay.jpg" height="100" width="350"  >
            <p> <?php echo date("Y");?>   Greenleaf Nursery Shop. All rights reserved 
        </p>
       </div>
        </center>



</body>
</html>