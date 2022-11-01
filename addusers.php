<?php session_start();
    if(isset($_SESSION['login_admin'])){ 
      ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <html lang="en">
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
                        <img src="img/logo.png" alt="Logo" style="width: 50px; height: 50px;">
                        <h1 class="tm-site-name tm-handwriting-font">Cafe House</h1>
                    </div>
                    <div class="mobile-menu-icon">
                        <i class="fa fa-bars"></i>
                    </div>
                    <nav class="tm-nav ">
                        <ul class="nav ">
                            <li><a href="./showproducts.php" class="active  nav-link">products</a></li>
                            <li><a href="./showusers.php" class="nav-link" >users</a></li>
                            <li><a href="./addproductform.php" class="nav-link">Add Product</a></li>
                            <li><a href=".#"class="nav-link">manual</a></li>
                            <li><a href="./ibrahim/index.php" class="nav-link">Show Orders</a></li>
                            <li><a href="./esraa/menu.php" class="nav-link">checks</a></li>
                            <li><a href="logout.php" class="nav-link">logout</a></li>
                        </ul>
                    </nav>   
                </div>           
            </div>    
        </div>
    </div>
    <br>
    <br>
<div class="container my-5">
    <form action="adduser.php" class="addProductForm m-auto needs-validation" method="post" enctype="multipart/form-data">
        <h2 class="mb-1 text-center tm-handwriting-font tm-site-name">Add User</h2>
        <hr class="mb-5">
        <div class="row g-3">
          <div class="col-sm-6">
            <label for="productTitle" class="form-label">Name:</label>
            <input type="text" class="form-control" name="name" required="">
          </div>
          <div class="col-sm-6"> <label for="email" class="form-label">Email:</label> <input
              type="email" min="0" class="form-control" name="email" required>
          </div>
          <div class="col-sm-6"> <label for="password" class="form-label">Password:</label> <input
            type="password"  class="form-control" name="password" required>
          </div>
          <div class="col-sm-6"> <label for="confirm" class="form-label">Confirm Password:</label> <input
            type="password" min="8"  class="form-control" name="confirm" required>
        </div>
        <div class="col-sm-6"> 
          <label for="room"  class="form-label">Room No:</label>
            <input type="number" min="1" class="form-control" name="room" required>
          </div>
          <div class="col-sm-6"> 
            <label for="ext"  class="form-label">Ext..:</label>
              <input type="number" min="1" class="form-control" name="ext" >
            </div>
          <div class="col-sm-6"> 
            <label for="img"  class="form-label">Image:</label>
              <input type="file" class="form-control" name="img" required>
          </div>
        </div>
        <hr class="my-4">
        <button class="tm-more-button btn btn-lg"  type="submit">Add User</button>
        <br/> <br/>
        <input type="reset" class=" tm-more-button btn btn-lg" name="Reset">
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