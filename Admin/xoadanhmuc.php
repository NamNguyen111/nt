<?php

$id = $_GET['ma'];
require './connect.php';
$sql = "delete from danh_muc where id = '$id'";

mysqli_query($connect, $sql);
mysqli_close($connect);
header('location: quan_ly_danh_muc.php');
