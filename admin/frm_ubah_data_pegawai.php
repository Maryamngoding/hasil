<?php
session_start();
if ($_SESSION['status'] != "sudah_login") {
 //melakukan pengalihan
 header("location:../../login/login.php");
}
include "../layout/header.php";
include "../config/koneksi.php";
$id = $_GET['id_pegawai'];
$queri = mysqli_query($koneksi, "SELECT * FROM tbl_pegawai where id_pegawai");
$rs = mysqli_fetch_assoc($queri);
?>
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
 <div
 class="d-flex justify-content-between flex-wrap flex-md-nowrap alignitems-center pt-3 pb-2 mb-3 border-bottom">
 <h1 class="h2">Form Ubah Pegawai</h1>
 </div>
 <!-- <canvas class="my-4 w-100" id="myChart" width="900" height="380">
</canvas> -->                                             
 <!-- <h4>Data Jadwal Kegiatan</h4> -->
 <div class="table-responsive">
 <form action="simpan_ubah_data_pegawai.php" method="POST">
 <div class="col-6">
 <div class="mb-3">
 <label for="exampleFormControlInput1" class="formlabel">nama pegawai</label>
 <input type="text" name="nama_pegawai" value="<?php echo
$rs['nama_pegawai']; ?>" class="form-control">
 </div>
 <div class="mb-3">
 <label for="exampleFormControlTextarea1" class="formlabel">no tlpn</label>
 <input type="text" name="no_tlpn" value="<?php echo
$rs['no_tlpn']; ?>" class="form-control">
 </div>
 <div class="mb-3">
 <label for="exampleFormControlTextarea1" class="formlabel">username</label>
 <input type="text" name="username" value="<?php echo
$rs['username']; ?>" class="form-control">
 </div>
 <div class="mb-3">
 <label for="exampleFormControlTextarea1" class="formlabel">password</label>
 <input type="text" name="password" value="<?php echo
$rs['password']; ?>" class="form-control">
 <div class="mb-3">
 <input type="hidden" name="id_pegawai" value="<?php echo
$rs['id_pegawai']; ?>" class="form-control">
 <button type="submit" class="btn btn-sm btn-primary">
Simpan</button>
 </div>
 </div>
 </form>
 </div>
</main>
</main>
<?php
include "../layout/footer.php";
?>


