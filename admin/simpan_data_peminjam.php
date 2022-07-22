<?php
session_start();
if ($_SESSION['status'] != "sudah_login") {
 //melakukan pengalihan
 header("location:../login/login.php");
}
include "../config/koneksi.php";
$id_inventaris = $_POST['id_inventaris'];
$nama_peminjam = $_POST['nama_peminjam'];
$tgl_pinjam = $_POST['tgl_pinjam'];
$insert_data = mysqli_query($koneksi, "INSERT INTO tbl_peminjam
(id_inventaris,nama_peminjam,tgl_pinjam)
values ('$id_inventaris','$nama_peminjam','$tgl_pinjam')");
if ($insert_data) {
 header('location:data_peminjam.php?pesan=Data Berhasil Di simpan');
} else {
 header('location:data_peminjam.php?pesan=Data Gagal Di simpan');
}