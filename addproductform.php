<?php
require('./connect.php');

session_start();
    if(isset($_SESSION['login_admin'])){ 

$query = "SELECT id,name FROM category";
$sql = $connect->prepare($query);
$sql->execute();
$category = $sql->fetchAll(PDO::FETCH_ASSOC);
?>  

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cafe House</title>


    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,600,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Damion' rel='stylesheet' type='text/css'>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/templatemo-style.css" rel="stylesheet">
    <link 
    rel="stylesheet" 
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" 
    integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" 
    crossorigin="anonymous">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" href="./ibrahim/css/style.css">
    <link rel="stylesheet" href="./css/editStyle.css">



</head>
    <body>
    <!-- Preloader -->
    <div id="loader-wrapper">
        <div id="loader"></div>
        <div class="loader-section section-left"></div>
        <div class="loader-section section-right"></div>
    </div>
    <!-- End Preloader -->
    <div class="tm-top-header">
      <div class="container">
        <div class="row">
          <div class="tm-top-header-inner">
            <div class="tm-logo-container">
              <img src="img/logo.png" alt="Logo" class="tm-site-logo" style="height:50px; width: 50px;">
              <h1 class="tm-site-name tm-handwriting-font">Cafe House</h1>
            </div>
            <div class="mobile-menu-icon">
              <i class="fa fa-bars"></i>
            </div>
            <nav class="tm-nav">
              <ul class="nav">
                <li><a href="#" class="active nav-link"> Add User</a></li>
                <li><a href="./showusers.php" class="nav-link">Users</a></li>
                <li><a href="./ibrahim/orders.php" class="nav-link">Orders</a></li>
                <li><a href="./showproducts.php" class="nav-link">products</a></li>
                <li><a href="#" class="nav-link">manual order</a></li>
                <li><a href="./esraa/menu.php" class="nav-link">checks</a></li>
                <li><a href=" logout.php" class="nav-link"> logout</a></li>
              </ul>
            </nav>   
          </div>           
        </div>    
      </div>
    </div>
    <br>
    <br>

<div class="container my-5">
    <form action="addproduct.php" class="addProductForm m-auto " method="post" enctype="multipart/form-data">
        <h4 class="mb-1 text-center tm-handwriting-font tm-site-name">Add Product</h4>
        <hr class="mb-5">
        <div class="row g-3">
          <div class="col-sm-6">
            <label for="productTitle" class="form-label">Product name:</label>
            <input type="text" class="form-control mb-3" name="name" required="">
          </div>
          <div class="col-sm-6"> <label for="productPrice" class="form-label">Product price:</label> 
            <input type="number" min="1" class="form-control mb-3" name="price" required="">
          </div>
          <div class="col-sm-6"> <label for="category" class="form-label">category:</label> 
            <select name="category" value=""> 
            <?php foreach ($category as $cat) : ?>
              <option> <?php echo $cat['name'] ?></option>
              <?php endforeach ;?> 
            </select>
            <a href="./addcategoryform.php">Add New Category</a>
          </div>
          <div class="col-sm-6"> 
            <label for="img"  class="form-label">Product image:</label>
              <input type="file" class="form-control mb-3" name="img" required="">
          </div>
        </div>
        <hr class="my-4">
        <button class="tm-more-button btn btn-lg"  type="submit">Add Product</button>
        <br/> <br/>
        <input type="reset" class="tm-more-button btn btn-lg" name="Reset">
      </form>
    </div>
    <script type="text/javascript" src="js/jquery-1.11.2.min.js"></script> <!-- jQuery -->
   <script type="text/javascript" src="js/templatemo-script.js"></script><!-- Templatemo Script -->
</body>
</html>
<?php 
 }
 else{
   header('location:./adminlogin.php') ;
 } 
 die;
?>