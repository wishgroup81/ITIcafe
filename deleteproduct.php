<?php
require('./connect.php');
if(isset($_GET['id'])){
    $id = $_GET['id'];
    echo($id);
    $query = "DELETE from products where id = $id";
    $sql = $connect->prepare($query);
    $sql->execute();
}
header('location:./showproducts.php');