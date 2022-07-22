<?php
session_start();
if ($_SESSION['status'] != "sudah_login") {
 //melakukan pengalihan
 header("location:../login/login.php");
}
include "../config/koneksi.php";
$nama = $_POST['nama_barang'];
$jumlah_barang = $_POST['jumlah_barang'];
$tgl_masuk_barang = $_POST['tgl_masuk_barang'];
$insert_data = mysqli_query($koneksi, "INSERT INTO tbl_barang
(nama_barang,jumlah_barang,tgl_masuk_barang)
values ('$nama','$jumlah_barang','$tgl_masuk_barang')");
if ($insert_data) {
 header('location:data_barang.php?pesan=Data Berhasil Di simpan');
} else {
 header('location:data_barang.php?pesan=Data Gagal Di simpan');
}