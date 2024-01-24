<!DOCTYPE html>
<html lang="en">

<head>
    <?php include "link.php"; ?>
</head>

<?php
if (isset($_POST['submit'])) {
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $nip = mysqli_real_escape_string($conn, $_POST['nip']);
    $rank = mysqli_real_escape_string($conn, $_POST['rank']);
    $position = mysqli_real_escape_string($conn, $_POST['position']);
    $work_unit = mysqli_real_escape_string($conn, $_POST['work_unit']);
    $activity_category = mysqli_real_escape_string($conn, $_POST['activity_category']);
    $activity_description = mysqli_real_escape_string($conn, $_POST['activity_description']);
    $activity_date_start = mysqli_real_escape_string($conn, $_POST['activity_date_start']);
    $activity_date_end = mysqli_real_escape_string($conn, $_POST['activity_date_end']);
    $result_unit = mysqli_real_escape_string($conn, $_POST['result_unit']);
    $activity_volume = mysqli_real_escape_string($conn, $_POST['activity_volume']);
    $credit_score = mysqli_real_escape_string($conn, $_POST['credit_score']);
    $total_credit_score = mysqli_real_escape_string($conn, $_POST['total_credit_score']);
    $documentation = mysqli_real_escape_string($conn, $_POST['documentation']);

    $query = "INSERT INTO community_service_activities (name, nip, rank, position, work_unit, activity_category, activity_description, activity_date_start, activity_date_end, result_unit, activity_volume, credit_score, total_credit_score, documentation) VALUES ('$name', '$nip', '$rank', '$position', '$work_unit', '$activity_category', '$activity_description', '$activity_date_start', '$activity_date_end', '$result_unit', $activity_volume, $credit_score, $total_credit_score, '$documentation')";

    if (mysqli_query($conn, $query)) {
        $script = "
            Swal.fire({
                icon: 'success',
                title: 'Data Berhasil Ditambahkan!',
                timer: 3000,
                timerProgressBar: true,
                showConfirmButton: false
            });
        ";
    } else {
        $script = "
            Swal.fire({
                icon: 'error',
                title: 'Data Gagal Ditambahkan!',
                timer: 3000,
                timerProgressBar: true,
                showConfirmButton: false
            });
        ";
    }
}

if (isset($_POST['edit'])) {
    $id = mysqli_real_escape_string($conn, $_POST['id_kegiatan']);
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $nip = mysqli_real_escape_string($conn, $_POST['nip']);
    $rank = mysqli_real_escape_string($conn, $_POST['rank']);
    $position = mysqli_real_escape_string($conn, $_POST['position']);
    $work_unit = mysqli_real_escape_string($conn, $_POST['work_unit']);
    $activity_category = mysqli_real_escape_string($conn, $_POST['activity_category']);
    $activity_description = mysqli_real_escape_string($conn, $_POST['activity_description']);
    $activity_date_start = mysqli_real_escape_string($conn, $_POST['activity_date_start']);
    $activity_date_end = mysqli_real_escape_string($conn, $_POST['activity_date_end']);
    $result_unit = mysqli_real_escape_string($conn, $_POST['result_unit']);
    $activity_volume = mysqli_real_escape_string($conn, $_POST['activity_volume']);
    $credit_score = mysqli_real_escape_string($conn, $_POST['credit_score']);
    $total_credit_score = mysqli_real_escape_string($conn, $_POST['total_credit_score']);
    $documentation = mysqli_real_escape_string($conn, $_POST['documentation']);

    $query = "UPDATE community_service_activities SET name = '$name', nip = '$nip', rank = '$rank', position = '$position', work_unit = '$work_unit', activity_category = '$activity_category', activity_description = '$activity_description', activity_date_start = '$activity_date_start', activity_date_end = '$activity_date_end', result_unit = '$result_unit', activity_volume = $activity_volume, credit_score = $credit_score, total_credit_score = $total_credit_score, documentation = '$documentation' WHERE id = $id";

    if (mysqli_query($conn, $query)) {
        $script = "
            Swal.fire({
                icon: 'success',
                title: 'Data Berhasil di Edit!',
                timer: 3000,
                timerProgressBar: true,
                showConfirmButton: false
            });
        ";
    } else {
        $script = "
            Swal.fire({
                icon: 'error',
                title: 'Data Gagal Di-Edit!',
                timer: 3000,
                timerProgressBar: true,
                showConfirmButton: false
            });
        ";
    }
}

if (isset($_POST['hapus'])) {
    $id = mysqli_real_escape_string($conn, $_POST['id_kegiatan']);

    $query = "DELETE FROM community_service_activities WHERE id = $id";
    if (mysqli_query($conn, $query)) {
        $script = "
            Swal.fire({
                icon: 'success',
                title: 'Data Berhasil Dihapus!',
                timer: 3000,
                timerProgressBar: true,
                showConfirmButton: false
            });
        ";
    } else {
        $script = "
            Swal.fire({
                icon: 'error',
                title: 'Data Gagal Di-Hapus!',
                timer: 3000,
                timerProgressBar: true,
                showConfirmButton: false
            });
        ";
    }
}

?>


<body id="page-top">

    <div id="wrapper">

        <?php include "sidebar.php"; ?>

        <div id="content-wrapper" class="d-flex flex-column">

            <div id="content">

                <?php include "topbar.php"; ?>

                <div class="container-fluid">
                    <div class="mb-3">
                        <p>
                            <a class="btn btn-primary" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                                <i class="fas fa-plus-square"></i> Tambah Data Aktivitas
                            </a>
                        </p>
                        <div class="collapse" id="collapseExample">
                            <div class="card card-body">
                                <form method="POST" action="" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label for="name">Nama:</label>
                                        <input type="text" class="form-control" id="name" name="name" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="nip">NIP:</label>
                                        <input type="text" class="form-control" id="nip" name="nip" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="rank">Pangkat:</label>
                                        <input type="text" class="form-control" id="rank" name="rank" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="position">Jabatan:</label>
                                        <input type="text" class="form-control" id="position" name="position" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="work_unit">Unit Kerja:</label>
                                        <input type="text" class="form-control" id="work_unit" name="work_unit" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="activity_category">Kategori Kegiatan:</label>
                                        <input type="text" class="form-control" id="activity_category" name="activity_category" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="activity_description">Deskripsi Kegiatan:</label>
                                        <input type="text" class="form-control" id="activity_description" name="activity_description" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="activity_date_start">Tanggal Mulai Kegiatan:</label>
                                        <input type="date" class="form-control" id="activity_date_start" name="activity_date_start" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="activity_date_end">Tanggal Selesai Kegiatan:</label>
                                        <input type="date" class="form-control" id="activity_date_end" name="activity_date_end" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="result_unit">Unit Hasil:</label>
                                        <input type="text" class="form-control" id="result_unit" name="result_unit" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="activity_volume">Volume Kegiatan:</label>
                                        <input type="number" class="form-control" id="activity_volume" name="activity_volume" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="credit_score">Skor Kredit:</label>
                                        <input type="number" class="form-control" id="credit_score" name="credit_score" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="total_credit_score">Total Skor Kredit:</label>
                                        <input type="number" class="form-control" id="total_credit_score" name="total_credit_score" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="documentation">Dokumentasi:</label>
                                        <textarea class="form-control" id="documentation" name="documentation" required></textarea>
                                    </div>
                                    <button type="submit" name="submit" class="btn btn-primary w-100">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- Content Row -->
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Data Aktivitas</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataX" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Nama</th>
                                            <th>NIP</th>
                                            <th>Pangkat</th>
                                            <th>Jabatan</th>
                                            <th>Unit Kerja</th>
                                            <th>Kategori Kegiatan</th>
                                            <th>Deskripsi Kegiatan</th>
                                            <th>Tanggal Mulai</th>
                                            <th>Tanggal Selesai</th>
                                            <th>Unit Hasil</th>
                                            <th>Volume Kegiatan</th>
                                            <th>Skor Kredit</th>
                                            <th>Total Skor Kredit</th>
                                            <th>Dokumentasi</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $stmt = $conn->prepare("SELECT * FROM community_service_activities");
                                        $stmt->execute();
                                        $activities = $stmt->get_result();
                                        ?>
                                        <?php $i = 1; ?>
                                        <?php foreach ($activities as $activity) : ?>
                                            <tr>
                                                <td><?= $i; ?></td>
                                                <td><?= htmlspecialchars($activity['name']); ?></td>
                                                <td><?= htmlspecialchars($activity['nip']); ?></td>
                                                <td><?= htmlspecialchars($activity['rank']); ?></td>
                                                <td><?= htmlspecialchars($activity['position']); ?></td>
                                                <td><?= htmlspecialchars($activity['work_unit']); ?></td>
                                                <td><?= htmlspecialchars($activity['activity_category']); ?></td>
                                                <td><?= htmlspecialchars($activity['activity_description']); ?></td>
                                                <td><?= htmlspecialchars($activity['activity_date_start']); ?></td>
                                                <td><?= htmlspecialchars($activity['activity_date_end']); ?></td>
                                                <td><?= htmlspecialchars($activity['result_unit']); ?></td>
                                                <td><?= htmlspecialchars($activity['activity_volume']); ?></td>
                                                <td><?= htmlspecialchars($activity['credit_score']); ?></td>
                                                <td><?= htmlspecialchars($activity['total_credit_score']); ?></td>
                                                <td><?= htmlspecialchars($activity['documentation']); ?></td>
                                                <td>
                                                    <a href="#" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#editModal<?= $activity['id'] ?>">Edit</a>
                                                    <br><br>
                                                    <a href="#" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#hapusModal<?= $activity['id'] ?>">Hapus</a>
                                                </td>
                                            </tr>

                                            <!-- Modal Edit Kegiatan -->
                                            <div class="modal fade" id="editModal<?= $activity['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-lg" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="editModalLabel">Edit Data Kegiatan</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form action="" method="POST">
                                                                <input type="hidden" name="id_kegiatan" value="<?= $activity['id']; ?>">

                                                                <div class="form-group">
                                                                    <label for="name">Nama:</label>
                                                                    <input type="text" class="form-control" id="name" name="name" value="<?= htmlspecialchars($activity['name']); ?>" required>
                                                                </div>

                                                                <div class="form-group">
                                                                    <label for="nip">NIP:</label>
                                                                    <input type="text" class="form-control" id="nip" name="nip" value="<?= htmlspecialchars($activity['nip']); ?>" required>
                                                                </div>

                                                                <div class="form-group">
                                                                    <label for="rank">Pangkat:</label>
                                                                    <input type="text" class="form-control" id="rank" name="rank" value="<?= htmlspecialchars($activity['rank']); ?>" required>
                                                                </div>

                                                                <div class="form-group">
                                                                    <label for="position">Jabatan:</label>
                                                                    <input type="text" class="form-control" id="position" name="position" value="<?= htmlspecialchars($activity['position']); ?>" required>
                                                                </div>

                                                                <div class="form-group">
                                                                    <label for="work_unit">Unit Kerja:</label>
                                                                    <input type="text" class="form-control" id="work_unit" name="work_unit" value="<?= htmlspecialchars($activity['work_unit']); ?>" required>
                                                                </div>

                                                                <div class="form-group">
                                                                    <label for="activity_category">Kategori Kegiatan:</label>
                                                                    <input type="text" class="form-control" id="activity_category" name="activity_category" value="<?= htmlspecialchars($activity['activity_category']); ?>" required>
                                                                </div>

                                                                <div class="form-group">
                                                                    <label for="activity_description">Deskripsi Kegiatan:</label>
                                                                    <input type="text" class="form-control" id="activity_description" name="activity_description" value="<?= htmlspecialchars($activity['activity_description']); ?>" required>
                                                                </div>

                                                                <div class="form-group">
                                                                    <label for="activity_date_start">Tanggal Mulai Kegiatan:</label>
                                                                    <input type="date" class="form-control" id="activity_date_start" name="activity_date_start" value="<?= htmlspecialchars($activity['activity_date_start']); ?>" required>
                                                                </div>

                                                                <div class="form-group">
                                                                    <label for="activity_date_end">Tanggal Selesai Kegiatan:</label>
                                                                    <input type="date" class="form-control" id="activity_date_end" name="activity_date_end" value="<?= htmlspecialchars($activity['activity_date_end']); ?>" required>
                                                                </div>

                                                                <div class="form-group">
                                                                    <label for="result_unit">Unit Hasil:</label>
                                                                    <input type="text" class="form-control" id="result_unit" name="result_unit" value="<?= htmlspecialchars($activity['result_unit']); ?>" required>
                                                                </div>

                                                                <div class="form-group">
                                                                    <label for="activity_volume">Volume Kegiatan:</label>
                                                                    <input type="number" class="form-control" id="activity_volume" name="activity_volume" value="<?= htmlspecialchars($activity['activity_volume']); ?>" required>
                                                                </div>

                                                                <div class="form-group">
                                                                    <label for="credit_score">Skor Kredit:</label>
                                                                    <input type="number" class="form-control" id="credit_score" name="credit_score" value="<?= htmlspecialchars($activity['credit_score']); ?>" required>
                                                                </div>

                                                                <div class="form-group">
                                                                    <label for="total_credit_score">Total Skor Kredit:</label>
                                                                    <input type="number" class="form-control" id="total_credit_score" name="total_credit_score" value="<?= htmlspecialchars($activity['total_credit_score']); ?>" required>
                                                                </div>

                                                                <div class="form-group">
                                                                    <label for="documentation">Dokumentasi:</label>
                                                                    <textarea class="form-control" id="documentation" name="documentation" required><?= htmlspecialchars($activity['documentation']); ?></textarea>
                                                                </div>

                                                                <button type="submit" name="edit" class="btn btn-primary w-100">Simpan</button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="modal fade" id="hapusModal<?= $activity['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">Hapus Data Kegiatan</h5>
                                                            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">×</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            Apakah Anda yakin ingin menghapus data kegiatan dengan Nama: <b><?= htmlspecialchars($activity['name']) ?></b>?
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
                                                            <form action="" method="post">
                                                                <input type="hidden" name="id_kegiatan" value="<?= $activity['id'] ?>">
                                                                <button type="submit" name="hapus" class="btn btn-danger">Hapus</button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                            <?php $i++; ?>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <?php include "footer.php"; ?>

        </div>

    </div>

    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <?php include "plugin.php"; ?>

    <script>
        $(document).ready(function() {
            $('#dataX').DataTable({
                "language": {
                    "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Indonesian.json",
                    "oPaginate": {
                        "sFirst": "Pertama",
                        "sLast": "Terakhir",
                        "sNext": "Selanjutnya",
                        "sPrevious": "Sebelumnya"
                    },
                    "sInfo": "Menampilkan _START_ sampai _END_ dari _TOTAL_ data",
                    "sSearch": "Cari:",
                    "sEmptyTable": "Tidak ada data yang tersedia dalam tabel",
                    "sLengthMenu": "Tampilkan _MENU_ data",
                    "sZeroRecords": "Tidak ada data yang cocok dengan pencarian Anda"
                }
            });
        });
    </script>

    <script>
        <?php if (isset($script)) {
            echo $script;
        } ?>
    </script>
</body>

</html>