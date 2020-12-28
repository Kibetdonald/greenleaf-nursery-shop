
<?php

include("includes/functions.php");
include("includes/db.php");
cart();
session_start();

?>


<?php

include("header.php");

?>



		<br><br><br><br><br>
       
    <center><!--  center Begin  -->
    
    <h1> My Orders </h1>
    
   
    
    <p class="text-muted">
        
        If you have any questions, feel free to <a href="feedback.php">Contact Us</a>. Our Customer Service work <strong>24/7</strong>
        
    </p>
 
</center><!--  center Finish  -->
    <center>
    <table width='75%' border-spacing='100' solid black>

    <div class="card">
      <div class="card-body">
          
        <thead><!--  thead Begin  -->
            
            <tr><!--  tr Begin  -->
                
                <th> NO: </th>
                <th> Due Amount: </th>
                <th> Invoice No: </th>
                <th> Product Name: </th>
                <th> Product image: </th>
                <th> Quantity: </th>
                <th> Order Date:</th>
                <th> Paid / Unpaid: </th>
                <th> Status: </th>
                
            </tr><!--  tr Finish  -->
            
        </thead><!--  thead Finish  -->
        
        <tbody><!--  tbody Begin  -->
        <hr>   
           <?php 
            
           
 

    $session_email = $_SESSION['Email_id'];
    $select_customer = "select * from users where Email_id='$session_email'";
    $run_customer = mysqli_query($con,$select_customer) or die( mysqli_error($con));
    $row_customer = mysqli_fetch_array($run_customer);
    $customer_id = $row_customer['customer_id'];
 

            $get_orders = "SELECT * FROM customer_orders INNER JOIN products ON customer_orders.product_id = products.prd_id where customer_id='$customer_id' 
            ORDER BY order_date DESC";




            
            
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
                
                if($order_status=='pending'){
                    
                    $order_status = 'Unpaid';
                    
                }else{
                    
                    $order_status = 'Paid';
                    
                }
            
            ?>
            
            <tr><!--  tr Begin  -->
                
                <th> <?php echo $i; ?> </th>
                <td> Ksh.<?php echo $due_amount; ?> </td>
                <td> <?php echo $invoice_no; ?> </td>
                <td> <?php echo $prd_title; ?> </td>
                <td><img width="130" height="130" src="images/<?php echo $prd_img;?>" alt="<?php echo $prd_img;?>" ></td>
                <td> <?php echo $qty; ?> </td>
               
                
                <td> <?php echo $order_date; ?> </td>
                <td> <?php echo $order_status; ?> </td>
                
                <td>
                    
                <a href="invoice.php?order_id=<?php echo $order_id; ?>"  class="btn btn-success btn-sm"> PAY NOW </a>
                    
                </td>
                
            </tr><!--  tr Finish  -->
        
            <?php } ?>
            
        </tbody><!--  tbody Finish  -->
        
    </table><!--  table table-bordered table-hover Finish  -->
 </center>
<!--  table-responsive Finish  -->





<html>
<body>