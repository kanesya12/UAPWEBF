<!DOCTYPE html>
<html lang="en">

<head>
    <?php include "link.php"; ?>
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <?php include "sidebar.php"; ?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <?php include "topbar.php"; ?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                    </div>

                    <!-- Content Row -->
                    <!-- Kartu Biodata -->
<div class="row">
    <div class="col-lg-12">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Biodata</h6>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-9">
                        <div class="row">
                            <div class="col-lg-6">
                                <label class="label">Nama :</label>
                                <p> Dr. X</p>
                                <label class="label">NIP :</label>
                                <p> G 123456</p>
                                <label class="label">Tempat dan Tanggal Lahir :</label>
                                <p> Padang, xx yy 19zz</p>
                                <label class="label">Jenis Kelamin :</label>
                                <p> Laki-laki</p>
                            </div>
                            <div class="col-lg-6">
                                <label class="label">Pendidikan terahir :</label>
                                <p> Doktor</p>
                                <label class="label">Jabatan Akademik Dosen/TMT :</label>
                                <p> Tenaga Pengajar / 1 Juni 2012</p>
                                <label class="label">Unit Kerja :</label>
                                <p> Universitas X</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Akhir Kartu Biodata -->

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <?php include "footer.php"; ?>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <?php include "plugin.php"; ?>
</body>

</html>