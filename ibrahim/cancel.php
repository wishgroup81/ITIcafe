<?php
require("./dataBaseInfo.php");
$string = BD_TYPE .":host=".DB_HOST.";dbname=".DB_NAME.";";
$db = new PDO($string,DB_USER,DB_PASSWD);
$id = $_REQUEST['id'];
$query = "DELETE FROM orderproduct WHERE order_id = $id";
$sql = $db->prepare($query);
$res = $sql->execute();
$query1 = "DELETE FROM orders WHERE id = $id";
$sql1 = $db->prepare($query1);
$res1 = $sql1->execute();
header("location:index.php");