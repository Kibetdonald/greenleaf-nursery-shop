

<?php
$con = new mysqli('localhost', 'root', '', 'greenleaf');
?>
<!DOCTYPE HTML>
<html>
<head>
 <meta charset="utf-8">
 <title>Quantity Report</title>
 <script type="text/javascript" src="https://www.google.com/jsapi"></script>
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <link rel="stylesheet" href="Style.css">
  <link href="style/css/bootstrap.min.css" rel="stylesheet">
<link href="style/css/k.css" rel="stylesheet">

<script type="text/javascript" src="./charts/loader.js"></script>
  
 <body>
 <div id="main-header">
        <div id="logo">
            <span id="IST">GRE</span
                ><span id="IIST">ENLEAF</span>
            
            </div>
        
        
      

            
        </div>
        
        <div id="navigation">
        <nav>
            
            
            
            </nav><br><br><br><br><br><br><br><br><br><br><br>
            </div>
        
    <br><br><br><br><br><br>
<?php include("include/header.php"); ?>

<div class="container-fluid">

<?php include("include/side_bar.php"); ?>
<div class="col-sm-9" style="margin-left:10px"> 
<div class="panel-heading" style="background-color:#1aaa1a">
<h1 align="center">Quantity Report</h1>
  </div>
 <script type="text/javascript">
 google.load("visualization", "1", {packages:["corechart"]});
 google.setOnLoadCallback(drawChart);
 function drawChart() {
 var data = google.visualization.arrayToDataTable([
 
 ['Product Name','Quantity'],
 <?php 
      
      $query = "SELECT prd_title, SUM(qty) total FROM products p INNER JOIN customer_orders o ON o.product_id = p.prd_id GROUP BY prd_id; ";
        
			 $exec = mysqli_query($con,$query);
			 while($row = mysqli_fetch_array($exec)){
 
			 echo "['".$row['prd_title']."',".$row['total']."],";
			 }
			 ?> 
 
 ]);
 
 var options = {
 title: 'Statistics Report for  Orders According to quantity',
  pieHole: 0.5,
          pieSliceTextStyle: {
            color: 'black',
          },
          legend: 'none'
 }; 
 var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

chart.draw(data, options);
}
</script>
</head>
<body>
<div id="curve_chart" style="width: 1000px; height: 500px"></div>
<center>
<h3>Quantity Report</h3>
<h4>Tabular Representation</h4>
<table width='60%' border=1px solid black>
<tr>

    <th><center>Product Title</center></th>
        <th><center>Quantity Sold</center></th>

   

</tr>

<?php 
      
      $query = "SELECT prd_title, SUM(qty) total FROM products p INNER JOIN customer_orders o ON o.product_id = p.prd_id GROUP BY prd_id; ";
        
			 $exec = mysqli_query($con,$query);
			 while($row = mysqli_fetch_array($exec)){
 
       echo
     
       "
       <tr>
       <td><center>".$row['prd_title']."</center></td>
      <td> <center>".$row['total']."</center></td>
       </tr>";

			 }
		
      
?>
</center>

</body>
</html>


