<?php

include "../../Config/koneksi.php";

$NIK = $_POST['nik'];
$Nama = $_POST['nama'];
$TanggalMulai = $_POST['tanggalmulai'];
$GajiPokok = $_POST['gajipokok'];
$Status = $_POST['status'];
$Jabatan = $_POST['jabatan'];

$tambah = mysqli_query($koneksi, "INSERT INTO karyawan VALUES('$NIK', '$Nama', '$TanggalMulai', '$GajiPokok', '$Status', '$Jabatan')");

if ($tambah === false):
	echo "<script>alert('Data Gagal Ditambahkan !!');location.href='../Karyawan/index.php';</script>";
else :
	echo "<script>alert('Data Berhasil Ditambahkan !!');location.href='../Karyawan/index.php';</script>";
endif;

?>