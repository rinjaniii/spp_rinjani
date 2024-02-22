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
                        <div class="navbar-nav mx-auto border-top">
                                <a href="tbl_pembayaran.php" class="nav-item nav-link active">Pembayaran</a>
                                <a href="tbl_siswa.php" class="nav-item nav-link">Siswa</a>
                                <a href="tbl_kelas.php" class="nav-item nav-link">Kelas</a>
                                <a href="logout.php" class="nav-item nav-link">Logout</a>
                        </div>
                    </nav>
                </div>
            </div>
        </div>

<div class="hero">
<div class="container">
<div class="row justify-content-between">
<div class="col-lg-5">
<div class="intro-excerpt">

</div>
</div>
<div class="row justify-content-center">
<div class="col-9">
<a href='inputpembayaran.php'><button type='button' class='btn btn-primary my-3'>TAMBAH DATA</button></a>
<form action="" method="post">
<select name="pilih">
<option value="id_pembayaran">Id Pembayaran</option>
<option value="id_petugas">Id Petugas</option>
<option value="NIS">NIS</option>
<option value="tgl_bayar">Tanggal Bayar</option>
<option value="jumlah_bayar">Jumlah Bayar</option>
</select>
<input type="text" name="textcari" size="24" />
<input type="submit" name="cari" value="cari" />
<input type="submit" name="semua" value="tampilkan semua" />
</form>
<br>
<table class="table bg-light table-bordered table-striped">
<thead class="thead-dark">
<tr>
<th>Id Pembayaran</th>
<th>Id Petugas</th>
<th>NIS</th>
<th>Tanggal Bayar</th>
<th>Jumlah Bayar</th>
<th>Opsi</th>
</tr>
</thead>
<?php
include 'koneksi.php';
$input="";
if (isset($_POST["cari"])){
$opsi=$_POST["pilih"];
$nama=$_POST["textcari"];
$input=mysqli_query($koneksi, "SELECT * from pembayaran WHERE $opsi like '%$nama%'");
}else{
$input = mysqli_query($koneksi, "SELECT * from pembayaran");
}

$no = 1;
foreach ($input as $row) {
echo "<tr>
<td>" . $row['id_pembayaran'] . "</td>
<td>" . $row['id_petugas'] . "</td>
<td>" . $row['NIS'] . "</td>
<td>" . $row['tgl_bayar'] . "</td>
<td>" . number_format($row['jumlah_bayar'],2,',','.') . "</td>
<td>
<a href='updatepembayaran.php?id_pembayaran=$row[id_pembayaran]'><button type='button' class='btn btn-primary my-3'>Update</button></a>
<a href='hapuspembayaran.php?id_pembayaran=$row[id_pembayaran]'><button type='button' class='btn btn-danger my-3'>Hapus</button></a>
</td>
</tr>";
}
?>
</table>
</div>
</div>
</div>
</div>
</script>
</div>
</div>
</div>
</div>

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