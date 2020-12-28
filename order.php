<?php 

include("includes/db.php");
include("includes/functions.php");
session_start();
?>

<?php

$session_email = $_SESSION['Email_id'];
$select_customer = "select * from users where Email_id='$session_email'";
$run_customer = mysqli_query($con,$select_customer) or die( mysqli_error($con));
$row_customer = mysqli_fetch_array($run_customer);
$customer_id = $row_customer['customer_id'];
?>





<?php 

if(isset($_GET['c_id'])){
    
    $customer_id = $_GET['c_id'];
    
}

$ip_add = getip();

$status = "pending";

$invoice_no = mt_rand();

$select_cart = "select * from cart where ip_add='$ip_add'";

$run_cart = mysqli_query($con,$select_cart);

while($row_cart = mysqli_fetch_array($run_cart)){
    
    $pro_id = $row_cart['p_id'];
    $qty = $row_cart['qty'];
    
    $get_products = "select * from products where prd_id='$pro_id'";
    
    $run_products = mysqli_query($con,$get_products);
    
    

            while($row_products = mysqli_fetch_array($run_products)){
        
        $sub_total = $row_products['prd_price']*$qty;
        $insert_customer_order = "insert into customer_orders (customer_id,due_amount,invoice_no,product_id,qty,order_date,order_status) values ('$customer_id','$sub_total','$invoice_no','$pro_id','$qty',NOW(),'$status')";
        
        $run_customer_order = mysqli_query($con,$insert_customer_order);
        
        $insert_pending_order = "insert into pending_orders (customer_id,invoice_no,product_id,qty,order_status) values ('$customer_id','$invoice_no','$pro_id','$qty','$status')";
        
        $run_pending_order = mysqli_query($con,$insert_pending_order);
        
        $delete_cart = "delete from cart where ip_add='$ip_add'";
        
        $run_delete = mysqli_query($con,$delete_cart);
        $delete_prod = "delete from cart where ip_add='$ip_add'";
       
        echo "<script>alert('Your orders has been submitted,Successfully')</script>";
        
        echo "<script>window.open('myorders.php','_self')</script>";
        
    
    }}


?>