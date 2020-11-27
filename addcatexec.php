<?php
session_start();

include('config.php');
$textfield=$_POST['textfield'];
mysqli_query($bd, "INSERT INTO category (category) VALUES('$textfield')");
header("location: viewproducts.php");
mysqli_close($con);
?> 