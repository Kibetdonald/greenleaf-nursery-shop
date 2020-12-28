<?php

include('db.php');

if (isset($_POST['submit']))
{
	$id=$_POST['id'];
$cat_title=mysqli_real_escape_string($con, $_POST['cat_title']);


//updating the table
mysqli_query($con,"UPDATE categories SET cat_title='$cat_title' WHERE cat_id='$id'");


echo"<script>alert('Category Edited Succesfully')</script>";
echo"<script>window.open('cate.php?tn=$r','_self')</script>";
}





if (isset($_GET['id']) && is_numeric($_GET['id']) && $_GET['id'] > 0)
{

$id = $_GET['id'];
$result = mysqli_query($con,"SELECT * FROM categories WHERE cat_id=".$_GET['id']);

$row = mysqli_fetch_array($result);

if($row)
{


$cat_id = $row['cat_id'];
$cat_title = $row['cat_title'];
}
else
{
echo "No results!";
}
}

$get_subs = "select * from categories where cat_id='$cat_id'";
$run_subs = mysqli_query($con,$get_subs);
$row_subs = mysqli_fetch_array($run_subs);



$cat_title = $row_subs['cat_title'];
?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Farmer Panel</title>
 <meta name="viewport" content="width=device-width, initial-scale=1">
<link href="style/css/bootstrap.min.css" rel="stylesheet">
 <link rel="stylesheet" href="Style.css">
<link href="style/css/k.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>

<style>

input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  
}
table{
  border: 1px solid black;
  }
   table{
   width: 100%;
}
th{
  width:40px;
  font-size: 14px;
}
td{font-size: 12px;}
.btn {
  

  border: none;
  color: white;
  padding: 12px 16px;
  font-size: 13px;
  cursor: pointer;
  background:green;
}

/* Darker background on mouse-over */

.circular--square {
  border-radius: 50%;
}
</style>
</head>
<body>
<div id="wrapper">
    <div id="header">
         <div id="subheader">
              <div class="container">
    <p><i class="fa fa-phone" style="font-size:28px"></i> Call Tel: +254703959145 | Best Online Nursery Store.Delivered!</p>
                
                   
    </div>
</div>
        <div id="main-header">
        <div id="logo">
            <span id="IST">GRE</span
                ><span id="IIST">ENLEAF</span>
            
            </div>
       
        
        
        <div id="navigation">
        <nav>
            
           
            
            </nav>
            </div>
        </div>
        <br><br><br><br><br><br>
  <?php include("include/header.php");?>
    <div class="container-fluid main-container">
    <?php include("include/side_bar.php");?>
    <div class="col-md-9 content" style="margin-left:10px">
   
    <div class="panel-heading" style="background-color:#1AAA1A">
    <h1>Edit Category</h1></div><br>
    <h5 class="card-title"><span class="text-danger"></span></h5>
    <form method="post" action="cat_edit.php">
    <input type="hidden" name="id" value="<?php echo $id; ?>"/>
    <div class="form-group">
            <label>Category ID <span class="text-danger"></span></label>
            <input type="text" name="cat_id" id="cat_id" value="<?php echo $cat_id; ?>" required>
        </div>
        <div class="form-row">
     <div class="form-group">

	 <label for="inputState"> Category Title</label>
    <select name="cat_title" required>
    <option value="<?php echo $cat_title;?>"><?php echo $cat_title ;?></option>
      <?php
      $get_subs = "select * from categories";
      $run_subs = mysqli_query($con,$get_subs);

      while($row_subs = mysqli_fetch_array($run_subs)){
      $cat_id = $row_subs['cat_id'];
      $cat_title = $row_subs['cat_title'];

      echo "
      <option value='$cat_title'>$cat_title</option>

      ";
      }
      ?>
	  </select>
      </div>
      </div>
      <div class="form-group">
		<div class="col-sm-8">
			<button type="button" name="cancel" value="cancel" id="cancel" onClick="window.location='http://localhost/project/web_farmer/cate.php';" class="btn btn-primary">Cancel</button>
		</div>
		<div class="col-sm-4">
            <button type="submit" name="submit" value="submit" id="submit" class="btn btn-primary"><i class="fa fa-fw fa-edit"></i> Update Record</button>
		</div>
        </div>
    </form>
</body>
</html>
		</div>
               
                
                    
        </div>
		
        <!-- main content area end -->
        <!-- footer area start-->
       
        <!-- footer area end-->
    </div>
	</div>
	</div>
	</div>
	</div>
	<div>
		</div>
	</div>
	</div>
	<div>
	
    <!-- page container area end -->
    <!-- offset area start -->
    
           
    <!-- offset area end -->
    <!-- jquery latest version -->
    <script src="assets/js/vendor/jquery-2.2.4.min.js"></script>
    <!-- bootstrap 4 js -->
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/metisMenu.min.js"></script>
    <script src="assets/js/jquery.slimscroll.min.js"></script>
    <script src="assets/js/jquery.slicknav.min.js"></script>

    <!-- start chart js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js"></script>
    <!-- start highcharts js -->
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <!-- start zingchart js -->
    <script src="https://cdn.zingchart.com/zingchart.min.js"></script>
    <script>
    zingchart.MODULESDIR = "https://cdn.zingchart.com/modules/";
    ZC.LICENSE = ["569d52cefae586f634c54f86dc99e6a9", "ee6b7db5b51905a13dc2339db3edaf6d"];
    </script>
    <!-- all line chart activation -->
    <script src="assets/js/line-chart.js"></script>
    <!-- all pie chart -->
    <script src="assets/js/pie-chart.js"></script>
    <!-- others plugins -->
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/scripts.js"></script>
</body>

</html>

   