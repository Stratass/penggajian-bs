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
    <!--card-->
    <div class="mx-auto">
        <div class="card">
            <div class="card-header bg-dark" style="color: white;">
                Edit Data
            </div>
            <div class="card-body">

                <?php
                include "../../Config/koneksi.php";
                $NIK = $_GET['NIK'];
                $karyawan = $koneksi->query("SELECT * FROM karyawan WHERE NIK = '$NIK'");
                while ($data = $karyawan->fetch_array()) {
                ?>

                    <form action="editkaryawan.php" method="post">
                        <div class="row mb-3">
                            <label for="nik" class="col-sm-2 col-form-label">NIK</label>
                            <div class="col-sm-10">
                                <input type="number" class="form-control" name="nik" value="<?php echo $data['NIK'] ?>" readonly>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="nama" value="<?php echo $data['Nama'] ?>">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="tanggalmulai" class="col-sm-2 col-form-label">Tanggal Mulai</label>
                            <div class="col-sm-10">
                                <input type="date" class="form-control" name="tanggalmulai" value="<?php echo $data['Tanggal_Mulai'] ?>">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="gajipokok" class="col-sm-2 col-form-label">Gaji Pokok</label>
                            <div class="col-sm-10">
                                <input type="number" class="form-control" name="gajipokok" value="<?php echo $data['Gaji_Pokok'] ?>">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="status" class="col-sm-2 col-form-label">Status Karyawan</label>
                            <div class="col-sm-10">
                                <select class="form-select" aria-label="Default select example" name="status">
                                    <option value="<?php echo $data['Status_Karyawan'] ?>"><?php echo $data['Status_Karyawan'] ?></option>
                                    <option value="MAGANG">MAGANG</option>
                                    <option value="TETAP">TETAP</option>
                                    <option value="KONTRAK">KONTRAK</option>
                                </select>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="status" class="col-sm-2 col-form-label">Jabatan Karyawan</label>
                            <div class="col-sm-10">
                                <select class="form-select" aria-label="Default select example" name="jabatan">
                                    <?php
                                    $data1 = $koneksi->query("SELECT * FROM karyawan AS k 
                                LEFT JOIN bagian AS b
                                ON k.BagianID = b.ID WHERE k.NIK = '$NIK'
                                ")->fetch_array();
                                    ?>
                                    <option value="<?php echo $data1['ID'] ?>"><?php echo $data1['Nama'] ?></option>
                                    <?php
                                    $data = $koneksi->query("SELECT * FROM bagian");
                                    foreach ($data as $value) {
                                        echo "<option value='{$value['ID']}'>{$value['Nama']}</option>";
                                    }
                                    ?>

                                </select>
                            </div>
                        </div>

                        <div style="float:left; margin-right:20px;">
                            <button class="btn btn-dark" type="submit" value="SIMPAN">Simpan Data</button>
                        </div>

                    </form>

                    <div style="float:left; margin-right:20px;">
                        <button class="btn btn-dark" value="KEMBALI" onclick="history.go(-1);">Kembali</button>
                    </div>
            </div>
        </div>
    </div>

<?php
                }
?>

<!--footer-->

<!--end footer-->

<!--End card-->
<?php
include "../../Template/Script.php";
?>

</body>


</html>