<?php
     $db = "mysql:host=localhost;dbname=cafetaria";
      $con = new PDO($db,'root','');

      function getAllOrders( $from, $to)
    {
      global $con;
       $query = "SELECT sum(total) as total,u.name,o.id,o.user_id,o.created_at,u.id, u.admin_id	
       FROM `orders` as o,`users` AS u where o.user_id =u.id
       and o.created_at BETWEEN '$from' AND '$to'
       GROUP BY o.user_id";
        $sql = $con->prepare($query);
        $sql->execute();
        return $sql->fetchAll(PDO::FETCH_ASSOC);
        
    }
    function getAllOrderss()
    {
      global $con;
       $query = "SELECT sum(total) as total,u.name,o.id,o.user_id,o.created_at,u.id, u.admin_id	
       FROM `orders` as o,`users` AS u where o.user_id =u.id
       GROUP BY o.user_id";
        $sql = $con->prepare($query);
        $sql->execute();
        return $sql->fetchAll(PDO::FETCH_ASSOC);
        
    }
    function getOrdersForUser($from, $to)
    {
        global $con;
        $query = "SELECT *	
        FROM `orders` as o,`users` AS u where o.user_id =u.id
        and o.created_at BETWEEN '$from' AND '$to'
        ";
         $sql = $con->prepare($query);
         $sql->execute();
         return $sql->fetchAll(PDO::FETCH_ASSOC);
        
    }
    function getdOrdersForUser()
    {
        global $con;
        $query = "SELECT *	
        FROM `orders` as o,`users` AS u where o.user_id =u.id";
         $sql = $con->prepare($query);
         $sql->execute();
         return $sql->fetchAll(PDO::FETCH_ASSOC);
        
    }
    // getAllOrders("2022/10/23","2022/10/31");