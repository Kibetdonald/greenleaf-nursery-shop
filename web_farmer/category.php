<?php include "includes/header.php"; ?>
<?php
if(isset($_GET['id'])){
    $target_id = $_GET['id'];
    
}else{
    header("Location: index.php");
}
?>
<body>
   <?php include "includes/top-bar.php"; ?>
   <?php include "includes/admin-nav.php"; ?>
     <?php
    $query = "SELECT * FROM categories WHERE id = $target_id";
    $result = mysqli_query($connection,$query);
    if(mysqli_num_rows($result) > 0){
        $html = "";
        while($row = mysqli_fetch_assoc($result)){
            $target_id = $row['id'];
            $name = $row['name'];
            $html .= '<dv class="row">
        <div class="product-floor">
            <div class="product-floor-header">
                <h3>'.$name.'</h3><a href="category.php?id='.$target_id.'">See All</a>
            </div>
            <hr style="color:grey">
            <div class="product-floor-body">';
            
            $sql2 = "SELECT * FROM products WHERE category = $target_id";
            $result2 = mysqli_query($connection,$sql2);
            while($row2 = mysqli_fetch_assoc($result2)){
                $product_id = $row2['id'];
                $product_name = $row2['name'];
                $product_image = $row2['image'];
                $product_price = $row2['price'];
                $old_price = $row2['old_price'];
                
                $html .= '<a href="javascript:void();">
                    <div class="product">
                    <div class="product-image-section">
                        <img src="product-images/'.$product_image.'" alt="" class="product-image">
                    </div>
                    <div class="desc-name">
                        <div class="name">
                            <h6 class="name">
                                '.$product_name.'
                            </h6>
                        </div>
                        <div class="price">
                            <div class="new-price">
                                Ksh '.$product_price.'
                            </div>
                            <div class="old-price">
                                Ksh '.$old_price.'
                            </div>
                        </div>
                        <div class="add-cart">
                            <button class="btn btn-add-cart" data-product="'.$product_id.'">Add To Cart</button>
                        </div>
                    </div>
                </div>
                </a>';
            }
            $html .= '    </div>
        </div>
    </dv>';
            
        }
        echo $html;
        
    }else{
        header("Location: index.php");
    }
    ?>

</body>
</html>