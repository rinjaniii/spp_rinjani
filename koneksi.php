<?php
$server= "localhost";
$username = "root";
$password = "";
$db = "spp_rinjani";

$koneksi = new mysqli
("$server", "$username", "$password", "$db");

if(!$koneksi){
die(mysql_error($koneksi));
}

?>