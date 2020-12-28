

<?php

include("includes/functions.php");
include("includes/db.php");
cart();
session_start();
if(isset($_GET['order_id'])){
    
    $order_id = $_GET['order_id'];
    
}
?>




<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=windows-1252" />
<link rel="stylesheet" type="text/css" href="see.css" />
    <link rel="stylesheet" href="Style.css">
    <link href="bootstrap.min.css" rel="stylesheet">
    <link href="bootstrap.css" rel="stylesheet">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link href="css/bootstrap.css" rel="stylesheet" type="text/css"/>
	
	<!--THEME CSS-->
        <link href="css/jquery.fancybox.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/owl.carousel.css" rel="stylesheet" type="text/css"/>
		<link href="css/theme.css" rel="stylesheet" type="text/css"/>
		<script src="js/jquery.min.js"></script>
			<script src="js/bootstrap.min.js"></script>
			<script src="js/owl.carousel.min.js"></script>

			<script src="js/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!--[if IE 6]>


<link rel="stylesheet" type="text/css" href="iecss.css" />
<![endif]-->

<script type="text/javascript" src="js/boxOver.js"></script>
</head>
<style>

.button {
    background-color: white; 
    border: none;
    color: #676d77;
    padding: 5px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 14px;
    margin: 2px 1px;
    cursor: pointer;
}


.button4 {border-radius: 6px;
 <a href="login.php"</a>}
.button5 {border-radius: 20%;}
</style>
<body>

      
    <!-- end of oferte_content-->
  </div>

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
             <span id="IST">
             
             <img src='images/garden shop-mobile logo.png' /> </span >
            
            <span id="IIST">GRE</span><span id="IIIST">ENLEAF</span>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span id="IIST">NURSERY</span>       <span id="IIIST">SHOP</span>

            
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
</div><a href="logout.php"></i> Logout</a></li></i>

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

      <div class="right_menu_corner"></div>
    </div>



		<br><br><br><br><br>

    <?php 
            
           
 

            $session_email = $_SESSION['Email_id'];
            $select_customer = "select * from users where Email_id='$session_email'";
            $run_customer = mysqli_query($con,$select_customer) or die( mysqli_error($con));
            $row_customer = mysqli_fetch_array($run_customer);
            $customer_id = $row_customer['customer_id'];
         
        
                    $get_orders = "SELECT * FROM customer_orders INNER JOIN products ON customer_orders.product_id = products.prd_id where order_id='$order_id'";
           $run_orders = mysqli_query($con,$get_orders);
            
		   $i = 0;
		   
		   while($row_orders = mysqli_fetch_array($run_orders)){
			   
			   $order_id = $row_orders['order_id'];
			   
			   $due_amount = $row_orders['due_amount'];
			   
			   $invoice_no = $row_orders['invoice_no'];
			   $prd_title = $row_orders['prd_title'];
			   $prd_img = $row_orders['prd_img'];
			   $qty = $row_orders['qty'];
			   
			  
			   
			   $order_date = substr($row_orders['order_date'],0,11);
			   
			   $order_status = $row_orders['order_status'];
			   
			   $i++;
			   
		   }
		   
		   ?>
    


							
							
						</div>
					</div>
				</div>
			</div>
			<!-- /Breadcrumb -->
			
			<!-- Page Content -->
			<div class="content">
				<div class="container-fluid">

					<div class="row">
						<div class="col-lg-8 offset-lg-2">
							<div class="invoice-content">
								<div class="invoice-item">
									<div class="row">
										<div class="col-md-6">
											<div class="invoice-logo">
                        <img src='images/Captures.png'/> 
											</div>
										</div>
										<div class="col-md-6">
											<p class="invoice-details">
                        <strong>Order ID:</strong> <?php echo $order_id; ?>  <br>
                        <strong>Invoice Number:</strong> <?php echo $invoice_no; ?> <br>
                        

                      
												<strong>Issued:</strong> <?php echo $order_date; ?> 
											</p>
										</div>
									</div>
								</div>
								
								<!-- Invoice Item -->
								<div class="invoice-item">
									<div class="row">
										<div class="col-md-6">
											<div class="invoice-info">
												<strong class="customer-text">Invoice From</strong>
												<p class="invoice-details invoice-details-two">
												Greenleaf Nursery Shop <br>
													806  Twin Willow Lane, Nairobi,
												 <p style="color:blue;">greenleafnursery.co.ke</p>
													Nairobi, Kenya <br>
												</p>
											</div>
										</div>
										<div class="col-md-6">
											<div class="invoice-info invoice-info2">
												<strong class="customer-text">Invoice To</strong>
												<p class="invoice-details">
													John Doe <br>
													299 Star Trek Drive, Panama City, <br>
												Nairobi,Kenya <br>
												</p>
											</div>
										</div>
									</div>
								</div>
								<!-- /Invoice Item -->
								
								<!-- Invoice Item -->
								<div class="invoice-item">
									<div class="row">
										<div class="col-md-12">
											<div class="invoice-info">
												<strong class="customer-text">Payment Method</strong>
												<p class="invoice-details invoice-details-two">
												Mpesa <br>
													XXXXXXXXXXXX-2541 <br>
													
												</p>
											</div>
										</div>
									</div>
								</div>
								<!-- /Invoice Item -->
								
								<!-- Invoice Item -->
								<div class="invoice-item invoice-table-wrap">
									<div class="row">
										<div class="col-md-12">
											<div class="table-responsive">
<hr>
												<table width='75%' border-spacing='100' solid black>
													<thead>
														<tr>
															<th>Description</th>
															<th class="text-center">Quantity</th>
															<th class="text-center">VAT</th>
															<th class="text-right">Total</th>
														</tr>
													</thead>
													<tbody>
														<tr>
															<td><?php echo $prd_title; ?></td>
															<td class="text-center">   <?php echo $qty; ?>   </td>
															<td class="text-center">$0</td>
															<td class="text-right">Ksh.<?php echo $due_amount; ?></td>
														
														</tr>
														
													</tbody>
												</table>
											</div>
										</div>
										<div class="col-md-6 col-xl-4 ml-auto">
											<div class="table-responsive">
											<table width='85%' border-spacing='100' solid black>
													<tbody>
													<tr>
														<th>Subtotal:</th>
														<td><span>Ksh.<?php echo $due_amount; ?></span></td>
													</tr>
													<br>
													<tr>
														<th>Discount:</th>
														<td><span>0</span></td>
													</tr>
													<tr>
													
														<th>
														<hr>
													Total Amount:</th>
                            <td>
							<br><br><span>Ksh.<?php echo $due_amount; ?></span></td>
													</tr>
													</tbody>
									</table>
											</div>
										</div>
									</div>
								</div>

							
							
<!-- Payment Summary -->
<div id="pay_method"></div>
               
            </div>

            <!-- PayPal Modal: Start -->
            <div id="ppmodal" class="modal fade" role="dialog">
                <div class="modal-dialog">

                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">PayPal</h4>
                        </div>
                        <div class="modal-body">
                            <div id="paypal-button-container"></div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                    </div>

                </div>
            </div>
            <!-- Paypal modal: end -->

           <!-- Checkout Form -->
		   <form id="frmPay" method="doPay.php" method="GET">


<div class="payment-widget">
	<h4 class="card-title">Payment Method</h4>



	<!-- Paypal Payment -->
	<div class="payment-list">
		<label class="payment-radio paypal-option">
			<input id="pp" type="radio" name="payment_opt" value="paypal" checked>
			<span class="checkmark"></span>
			Paypal
		</label>
	</div>
	<!-- /Paypal Payment -->

	<!-- M-Pesa Payment -->
	<div class="payment-list">
		<label class="payment-radio paypal-option">
			<input id="mpesa" type="radio" name="payment_opt" value="mpesa">
			<span class="checkmark"></span>
			M-Pesa
		</label>
	</div>
	<!-- /M-Pesa Payment -->



	<!-- Submit Section -->
	<div class="submit-section mt-4">
	<input class="btn btn-primary submit-btn" type="submit" name="btnPay"
                                            value="Confirm And Pay">
	
	</div>
	<!-- /Submit Section -->

</div>
</form>
<!-- /Checkout Form -->

</div>
</div>

</div>



<!-- Booking Summary -->
<div id="pay_method"></div>
<!-- /Booking Summary -->

</div>

<!-- PayPal Modal: Start -->
<div id="ppmodal" class="modal fade" role="dialog">
<div class="modal-dialog">

<!-- Modal content-->
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal">&times;</button>
<h4 class="modal-title">PayPal</h4>
</div>
<div class="modal-body">
<div id="paypal-button-container"></div>
</div>
<div class="modal-footer">
<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
</div>
</div>

</div>
</div>
<!-- Paypal modal: end -->

<!-- M-Pesa Modal: Start -->
<div id="mpesaModal" class="modal fade" role="dialog">
<div class="modal-dialog">

<!-- Modal content-->
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal">&times;</button>
<h4 class="modal-title">M-Pesa</h4>
</div>
<div class="modal-body">
<div>
<form action="mpesa.php" method="post">
<br>
<label for="phone">Enter Phone Number: </label><input type="text" id="phone" placeholder="2547000000000" name="phone"><br>
<br>
<label for="phone">Enter Amount:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </label><input type="number" id="phone" name="amt"><br><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="submit" value="Pay With Mpesa" name="btnPay">

<div class="container">


 
</div>
</form>

</div>
</div>
<div class="modal-footer">
<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
</div>
</div>

</div>
</div>
<!-- M-Pesa modal: end -->

</div>

</div>

</div>
<!-- /Page Content -->
<!--footer-->





</body>
<!-- jQuery -->
<script src="assets/js/jquery.min.js"></script>

<!-- Bootstrap Core JS -->
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>

<!-- Sticky Sidebar JS -->
<script src="assets/plugins/theia-sticky-sidebar/ResizeSensor.js"></script>
<script src="assets/plugins/theia-sticky-sidebar/theia-sticky-sidebar.js"></script>

<!-- Paypal Checkout -->
<!-- Replace SB_CLIENT_ID with client id given -->
<!-- <script
src="https://www.paypal.com/sdk/js?client-id=SB-CLIENT_ID">
</script> -->
<script
src="https://www.paypal.com/sdk/js?client-id=AWsNo7RLc1WprMyny73UeYKYIy7EwmR51L5yG0lHzUd_5l2Dauj9eaoDkCvdbOw5GNgsV9Rw2LRyARA8">
</script>
<!-- Custom JS -->
<script src="assets/js/script.js"></script>

<script>
$(document).ready(function () {
var cost = $('#cost').text();

$('#frmPay').submit(function (ev) {
// alert($('input[name=payment_opt]:checked', '#frmPay').val());
if ($('input[name=payment_opt]:checked', '#frmPay').val() == "paypal") {
$('#ppmodal').modal('show');
}

if ($('input[name=payment_opt]:checked', '#frmPay').val() == "mpesa") {
$('#mpesaModal').modal('show');
}
ev.preventDefault();
});

paypal.Buttons({
createOrder: function (data, actions) {
// This function sets up the details of the transaction, including the amount and line item details.
return actions.order.create({
purchase_units: [{
amount: {
value: cost
}
}]
});
},
onApprove: function (data, actions) {
// This function captures the funds from the transaction.
return actions.order.capture().then(function (details) {
// This function shows a transaction success message to your buyer.
alert('Transaction completed by ' + details.payer.name.given_name);
}) 
}
}).render('#paypal-button-container');
});
</script>

</html>



