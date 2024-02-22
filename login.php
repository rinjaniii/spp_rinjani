<?php

@include 'koneksi.php';

session_start();

if(isset($_POST['submit'])){

$username = mysqli_real_escape_string($koneksi, $_POST['username']);
$password = ($_POST['password']);

$select = " SELECT * FROM login WHERE username = '$username' && password = '$password' ";

$result = mysqli_query($koneksi, $select);

if(mysqli_num_rows($result) > 0){

$row = mysqli_fetch_array($result);

$_SESSION['petugas_name'] = $row['id_petugas'];
header('location:tbl_pembayaran.php');

}else{
$error[] = 'incorrect username or password!';
}

};
?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>SISTEM PEMBAYARAN SPP</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">

        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=PT+Serif:wght@400;700&display=swap" rel="stylesheet"> 

        <!-- Icon Font Stylesheet -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

        <!-- Libraries Stylesheet -->
        <link href="lib/animate/animate.min.css" rel="stylesheet">
        <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">


        <!-- Customized Bootstrap Stylesheet -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="css/style.css" rel="stylesheet">
    </head>

    <body>

      

        <!-- Navbar start -->

            <div class="container-fluid bg-light">
                <div class="container px-0">
                    <nav class="navbar navbar-light navbar-expand-xl">
                        <a href="index.html" class="navbar-brand">
                            <h1 class="text-primary display-4">SPP SEKOLAH</h1>
                        </a>
                               
                    </nav>
                </div>
            </div>
        </div>
        <!-- Navbar End -->

        <div class="container-fluid appointment py-5">
            <div class="container py-5">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6">
                        <div class="appointment-form p-5">
                            <p class="fs-4 text-uppercase text-primary">LOGIN PETUGAS</p>
                            <h3 class="display-4 mb-4 text-white">masuk untuk melihat</h3>
                            <form method="post" action="">
                            <?php
                             if(isset($error)){
                             foreach ($error as $error){
                              echo '<span class="error-msg">'.$error.'</span>';
                              };
                            };
                             ?>
                                <div class="row gy-3 gx-4"> 
                                    <div class="col-lg-12">
                                        <input type="username" class="form-control py-3 border-white bg-transparent text-white" name="username" placeholder="username">
                                    </div>
                                    <div class="col-lg-12">
                                        <input type="password" class="form-control py-3 border-white bg-transparent text-white" name="password" placeholder="password">
                                    </div>
                                    <div class="col-lg-12">
                                    <button><input type="submit" name="submit" class="btn btn-white-outline"><a href="#"></a></botton>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
                                 
                       
                        
        <!-- gallery End -->


      



        <!-- Back to Top -->
        <a href="#" class="btn btn-primary btn-primary-outline-0 btn-md-square rounded-circle back-to-top"><i class="fa fa-arrow-up"></i></a>   

        
    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
    </body>

</html>