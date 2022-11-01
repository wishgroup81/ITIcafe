<?php
require('./connect.php');
if(isset($_GET['id'])){
    $id = $_GET['id'];
    echo($id);
    $query = "DELETE from users where id = $id";
    $sql = $connect->prepare($query);
    $sql->execute();

}
header('location:./showusers.php');


