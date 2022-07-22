<?php
session_start();
if ($_SESSION['status'] != "sudah_login") {
 //melakukan pengalihan
 header("location:../login/login.php");
}
include "../config/koneksi.php";
$nama_pegawai = $_POST['nama_pegawai'];
$no_tlpn = $_POST['no_tlpn'];
$username = $_POST['username'];
$password = $_POST['password'];
$insert_data = mysqli_query($koneksi, "INSERT INTO tbl_pegawai
(nama_pegawai,no_tlpn,username,password)
values ('$nama_pegawai','$no_tlpn','$username','$password')");
if ($insert_data) {
 header('location:data_pegawai.php?pesan=Data Berhasil Di simpan');
} else {
 header('location:data_pegawai.php?pesan=Data Gagal Di simpan');
}