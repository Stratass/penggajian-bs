<?php

include "../Config/koneksi.php";

$ID = $_GET['ID'];
$hapus = mysqli_query($koneksi, "DELETE FROM bagian WHERE ID = '$ID'");

if ($hapus === false):
	echo "<script>alert('Data Gagal Dihapus !!');location.href='../index.php';</script>";
else :
	echo "<script>alert('Data Berhasil Dihapus !!');location.href='../index.php';</script>";
endif;

?>