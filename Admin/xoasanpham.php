<?php 
include './connect.php';

$id = $_GET['id'];
$sql = "delete from san_pham where id = '$id'";

mysqli_query($connect, $sql);
mysqli_close($connect);


header('location: quan_ly_san_pham.php');