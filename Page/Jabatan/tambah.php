<?php
require '../../Config/config.php';
require '../../Config/koneksi.php';
?>

<!doctype html>
<html lang="en">

<?php
include "../../Template/Head.php";
?>

<!-- Navbar -->
<?php
include "../../Template/Navbar.php";
?>
<!-- End Navbar -->

<style>
    .mx-auto {
        width: 1000px;
    }

    .card {
        margin-top: 10px;
    }
</style>

<body>
    <br>
    <!--card-->
    <div class="mx-auto">
        <div class="card">
            <div class="card-header bg-dark" style="color: white;" >
                Tambah Data
            </div>
            <div class="card-body">
                <form action="tambahdatakaryawan.php" method="post">

                    <div class="row mb-3">
                        <label for="id" class="col-sm-2 col-form-label">ID</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" name="ID">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="nama" class="col-sm-2 col-form-label">Nama Jabatan</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="nama">
                        </div>
                    </div>
                    

                    <div style="float:left; margin-right:20px;" >
                        <button class="btn btn-dark" type="submit" value="SIMPAN">Simpan Data</button>
                    </div>

                </form>

                <div style="float:left; margin-right:20px;">
                    <button class="btn btn-dark" value="KEMBALI" onclick="history.go(-1);">Kembali</button>
                </div>
            </div>
        </div>
    </div>

    <!--end footer-->

    <!--End card-->
    <?php
    include "../../Template/Script.php";
    ?>

</body>


</html>