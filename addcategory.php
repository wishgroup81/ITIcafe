<?php
require('./connect.php');
$name = $_REQUEST['name'];
$admin_id = $_REQUEST['admin_id'];
$query = "INSERT INTO category (name,admin_id) VALUES ('$name','$admin_id')";
$sql = $connect->prepare($query);
$sql->execute();
header('location:./addproductform.php');