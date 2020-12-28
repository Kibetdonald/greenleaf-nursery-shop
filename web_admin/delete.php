
<?php
$db = mysqli_connect('localhost', 'root', '', 'greenleaf');
if (mysqli_connect_errno())
    {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
?>
<?php

if (isset($_GET['id']))
{

$result = mysqli_query($db,"DELETE FROM farmer WHERE farmer_id=".$_GET['id']);
if($result==true)
	echo "sucess";
header("Location:manage_users.php");
}

?>