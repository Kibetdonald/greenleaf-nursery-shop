<?php 
$connection=mysqli_connect("localhost","root","","greenleaf");
/*check connection*/
if(mysqli_connect_errno())
{
echo"connection Fail". mysqli_connect_error();
}
?>