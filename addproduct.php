<?php
require('./connect.php');
$files = $_FILES['img'];
$imgname = $files['name'];
move_uploaded_file($files['tmp_name'] , "$imgname");
$name = $_REQUEST['name'];
$price = $_REQUEST['price'];
$category = $_REQUEST['category'];
var_dump($category);
$query1 = 'SELECT id from category WHERE name = "hot"';
$sql1 = $connect->prepare($query1);
$category_id = $query1 ;
$query = "INSERT INTO products (name,price,img,category_id,admin_id) VALUES ('$name',$price,'$imgname', $category_id , 1 )";
$sql = $connect->prepare($query);
$sql->execute();
header('location:./showproducts.php');
