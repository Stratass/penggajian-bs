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


<body>
    <h1 style="margin-top: 20px; text-align:center;">Data Penggajian</h1>
    <br>
    <!--card-->
    <section id="card">
        <div class="container">

            <div class="card-header">
                <a href="<?= base_url('Page/Penggajian/tambah.php') ?>" class="btn-tambahdata">Tambah Data</a>
            </div>

            <table class="table" id="example">
                <thead class="table-dark">
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">ID Gaji</th>
                        <th scope="col">NIK Karyawan</th>
                        <th scope="col">Tahun</th>
                        <th scope="col">Bulan</th>
                        <th scope="col">Gaji Karyawan</th>
                        <th scope="col">Aksi</th>

                    </tr>
                </thead>
                <tbody>

                    <?php
                    $no = 1;
                    $karyawan = $koneksi->query("SELECT * FROM penggajian");
                    while ($data = $karyawan->fetch_array()) {
                    ?>

                        <tr>
                            <td><?= $no++ ?></td>
                            <td><?= $data["ID"] ?></td>
                            <td><?= $data["NIK_Karyawan"] ?></td>
                            <td><?= $data["Tahun"] ?></td>
                            <td><?= $data["Bulan"] ?></td>
                            <td><?= $data["Gaji_Bayar"] ?></td>
                            <td>
                                <a href="#" class="btn btn-outline-dark">Edit Data</a>
                                <a href="../../Action/hapusdatapenggajian.php?ID=<?php echo $data['ID'] ?>" class="btn btn-outline-dark">Hapus Data</a>
                            </td>
                        </tr>
                    <?php
                    }
                    ?>

                </tbody>
            </table>
        </div>
    </section>

    <!--footer-->
    <?php
    include "../../Template/Footer.php";
    ?>
    <!--end footer-->

    <!--End card-->
    <?php
    include "../../Template/Script.php";
    ?>

</body>


</html>

<script>
    new DataTable('#example');
</script>