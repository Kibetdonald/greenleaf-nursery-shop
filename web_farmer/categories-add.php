<?php
ob_start();
session_start();
include "php/db.php";
if(isset($_POST['category-name'])){
    $name = mysqli_real_escape_string($connection,$_POST['category-name']);
    
    if($name == '' || ctype_space($name)){
        
    }else{
       $query = "SELECT id FROM categories WHERE name = '$name'";
    $result = mysqli_query($connection,$query);
    
    if(mysqli_num_rows($result) > 0){
        die("SORRY, This category already exists");
    }else{
         $query = "INSERT INTO categories (name) VALUES('$name')";
         $result = mysqli_query($connection,$query);
    } 
    }
    
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Grocery Store</title>
    
    <link href="https://fonts.googleapis.com/css?family=Fjalla+One|PT+Sans+Narrow&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <br>
   <?php include "includes/top-bar.php"; ?>
   <?php include "includes/admin-nav.php"; ?>
   
      <div class="row">
        <div class="container">
            <div class="product-floor">
            <div class="product-floor-header">
                <h3>Add Categories</h3>
            </div>
            <hr style="color:grey">
            <div class="row">
                <div class="col-sm-4">
                    <form action="" method="post">
                <div class="form-group">
                    <input type="text" placeholder="Category Name" name="category-name" id="" class="form-control">
                </div>
                <div class="form-group">
                    <input type="submit" value="Add Category" class="btn btn-success">
                    <input type="reset" value="Reset" class="btn btn-danger">
                </div>
            </form>
                </div>
                <div class="col-sm-8">
                    <table class="table table-striped table-padded">
                        <thead>
                            <tr>
                                <th>#No</th>
                                <th>Name</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                           <?php
                            $query = "SELECT id,name FROM categories ORDER BY id DESC";
                            $result = mysqli_query($connection,$query);
                            
                            if(mysqli_num_rows($result) > 0){
                                $counter = 1;
                                while($row = mysqli_fetch_assoc($result)){
                                    $id = $row['id'];
                                    $name = $row['name'];
                                    echo "<tr><td>$counter</td><td>$name</td><td><a href='?edit=$id'>Edit</a></td><td><a href='?delete=$id'>Delete</a></td></tr>";
                                    $counter++;
                                }
                            }else{
                                echo "<tr><td colspan='4' style='text-align:center;'>There are no added categories at the moment</td></tr>";
                            }
                            ?>
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        </div>
    </div>

</body>
</html>