<?php
$namaServer = "localhost";
$namaPengguna= "root";
$password = "";
$nama_db= "growup_database";

$koneksi = new mysqli($namaServer,$namaPengguna,$password,$nama_db);

if ($koneksi -> connect_error){
    die("Koneksi gagal : ". $koneksi->connect_error. "<br>");
}
echo "Koneksi berhasil. <br>";
?>