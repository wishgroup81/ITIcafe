<?php
session_start();

    if(isset($_SESSION['login_admin'])){ 
var_dump($_SESSION['admin_id']);
    }
require('./connect.php');
$files = $_FILES['img'];
$imgname = $files['name'];
move_uploaded_file($files['tmp_name'] , "$imgname");
$name = $_REQUEST['name'];
$email = $_REQUEST['email'];
$password = $_REQUEST['password'];
$room = $_REQUEST['room'];
$ext = $_REQUEST['ext'];
$query = "INSERT INTO rooms (number,ext) values ($room,$ext)";
$sql = $connect->prepare($query);
$sql->execute();
$query1 = "SELECT id from rooms where number = $room ";
$sql1 = $connect->prepare($query1);
$sql1->execute();
$tehena = $sql1->fetch(PDO::FETCH_ASSOC);
$integerIDs = implode('', $tehena);
$query2 = "INSERT INTO users (name,email,password,img,room_id,admin_id) VALUES ('$name','$email','$password','$imgname','$integerIDs','1' )";
$sql2 = $connect->prepare($query2);
$sql2->execute();
// header('location:./addusers.php');