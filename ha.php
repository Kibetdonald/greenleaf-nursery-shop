<?php

$select_cart = "select * from cart where ip_add='$ip_add'";

$run_cart = mysqli_query($con,$select_cart);

while($row_cart = mysqli_fetch_array($run_cart)){
    
    $pro_id = $row_cart['p_id'];
    $qty = $row_cart['qty'];
    
    $get_products = "select * from products where prd_id='$pro_id'";
    
    $run_products = mysqli_query($con,$get_products);
    
    

            while($row_products = mysqli_fetch_array($run_products)){
        
        $sub_total = $row_products['prd_price']*$qty;}?>