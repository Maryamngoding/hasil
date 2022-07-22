<?php
session_start();
if ($_SESSION['status'] != "sudah_login") {
 //melakukan pengalihan
 header("location:../login/login.php");
}
include "../config/koneksi.php";
$id_pegawai = $_POST['id_pegawai'];
$nama_pegawai = $_POST['nama_pegawai'];
$no_tlpn = $_POST['no_tlpn'];
$username = $_POST['username'];
$password = $_POST['password'];
$update_data = mysqli_query($koneksi, "UPDATE tbl_pegawai set
nama_pegawai='$nama_pegawai',no_tlpn='$no_tlpn', username='$username', password='$password' where id_pegawai=$id_pegawai");
if ($update_data) {
 header('location:data_pegawai.php?pesan=Data Berhasil Di Ubah');
} else {
 header('location:data_pegawai.php?pesan=Data Gagal Di Ubah');
}