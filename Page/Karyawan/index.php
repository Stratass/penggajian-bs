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
    <h1 style="margin-top: 20px; text-align:center;">Karyawan</h1>
    <br>
    <!--card-->
    <section id="card">
        <div class="container">

            <div class="card-header">
                <a href="<?= base_url('Page/Karyawan/tambah.php') ?>" class="btn-tambahdata bg-primary">Tambah Data</a>
            </div>

            <div class="card-body">
                <table class="table" id="example">
                    <thead class="table-dark">
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">NIK</th>
                            <th scope="col">Nama Karyawan</th>
                            <th scope="col">Tanggal Mulai</th>
                            <th scope="col">Gaji Pokok</th>
                            <th scope="col">Status</th>
                            <th scope="col">Jabatan</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php
                        $no = 1;
                        $karyawan = $koneksi->query("SELECT k.NIK, k.Nama AS NamaKaryawan, k.Tanggal_Mulai , k.Gaji_Pokok, k.Status_Karyawan, b.Nama FROM karyawan AS k LEFT JOIN bagian AS b ON k.BagianID = b.ID");
                        while ($data = $karyawan->fetch_array()) {
                        ?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td><?= $data["NIK"] ?></td>
                                <td><?= $data["NamaKaryawan"] ?></td>
                                <td><?= $data["Tanggal_Mulai"] ?></td>
                                <td><?= $data["Gaji_Pokok"] ?></td>
                                <td><?= $data["Status_Karyawan"] ?></td>
                                <td><?= $data["Nama"] ?></td>
                                <td>
                                    <a href="edit.php?NIK=<?php echo $data['NIK'] ?>" class="btn btn-outline-dark bg-success">Edit Data</a>
                                    <a href="../../Action/hapusdatakaryawan.php?NIK=<?php echo $data['NIK'] ?>" class="btn btn-outline-dark bg-danger">Hapus Data</a>
                                </td>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <!--footer-->
    
    <!--End card-->
    <?php
    include "../../Template/Script.php";
    ?>

</body>


</html>

<script>
    new DataTable('#example');
</script>