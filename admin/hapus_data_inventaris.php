<?php
session_start();
if ($_SESSION['status'] != "sudah_login") {
 //melakukan pengalihan
 header("location:../login/login.php");
}
include "../config/koneksi.php";
$id_inventaris = $_GET['id_inventaris'];
$hapus_data = mysqli_query($koneksi, "DELETE FROM tbl_inventaris where
id_inventaris=$id_inventaris");
if ($hapus_data) {
 header('location:data_inventaris.php?pesan=Data Berhasil Di Ubah');
} else {
 header('location:data_inventaris.php?pesan=Data Gagal Di Ubah');
}