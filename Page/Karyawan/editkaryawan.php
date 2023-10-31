<?php

include "../../Config/koneksi.php";

$NIK = $_POST['nik'];
$Nama = $_POST['nama'];
$Tanggal= $_POST['tanggalmulai'];
$GajiPokok = $_POST['gajipokok'];
$Status = $_POST['status'];
$Jabatan = $_POST['jabatan'];

$tambah = mysqli_query($koneksi, "UPDATE karyawan set Nama='$Nama', Tanggal_Mulai='$Tanggal', Gaji_Pokok='$GajiPokok', Status_Karyawan='$Status', BagianID='$Jabatan' WHERE karyawan.NIK = '$NIK'");

if ($tambah === false):
	echo "<script>alert('Data Gagal Diubah !!');location.href='../Karyawan/index.php';</script>";
else :
	echo "<script>alert('Data Berhasil Diubah !!');location.href='../Karyawan/index.php';</script>";
endif;

?>