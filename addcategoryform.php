
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
                        <li><a href="addcategoryform.php" class="active nav-link">add category</a></li>
                        <li><a href="logout.php" class="nav-link ">logout</a></li>
                    </ul>
                </nav>   
            </div>           
        </div>    
    </div>
</div>

    <div class="container my-5">
        <form class="m-auto text-center " action="addcategory.php" method="post" enctype="multipart/form-data">
            <div class="row g-3">
                <div class="col-sm-6"><br><br><br><br><br><br>
                <label for="productTitle" class="form-label tm-handwriting-font1">Category name:</label>
                <input type="text" class="form-control " name="name" required="">
                </div>
                <div class="col-sm-6"><br><br><br><br><br><br>
                    <label for="admin_id" class="form-label tm-handwriting-font1">admin_id:</label>
                    <input type="number" class="form-control" name="admin_id" required="">
                </div>
            </div>
            <br>
            <br>
            <br>
            <br>
            <button class="tm-more-button btn  btn-lg"  type="submit">Add Category</button>
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