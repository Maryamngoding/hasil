<?php
session_start();
if ($_SESSION['status'] != "sudah_login") {
 //melakukan pengalihan
 header("location:../login/login.php");
}
include "../config/koneksi.php";
$id_peminjam = $_GET['id_peminjam'];
$hapus_data = mysqli_query($koneksi, "DELETE FROM tbl_peminjam where
id_peminjam=$id_peminjam");
if ($hapus_data) {
 header('location:data_peminjam.php?pesan=Data Berhasil Di Hapus');
} else {
 header('location:data_peminjam.php?pesan=Data Gagal Di Hapus');
}