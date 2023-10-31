<?php

include "../Config/koneksi.php";

$NIK = $_GET['NIK'];
$hapus = mysqli_query($koneksi, "DELETE FROM karyawan WHERE NIK = '$NIK'");

if ($hapus === false):
	echo "<script>alert('Data Gagal Dihapus !!');location.href='../Page/Karyawan/index.php';</script>";
else :
	echo "<script>alert('Data Berhasil Dihapus !!');location.href='../Page/Karyawan/index.php';</script>";
endif;

?>