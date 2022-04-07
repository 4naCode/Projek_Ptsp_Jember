<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
    <!-- /.container-fluid -->
    <div class="row">
        <div class="col-lg-6">


            <div class="container">
                <div class="row mt-3">
                    <div class="col-md-12">

                        <div class="card">
                            <!-- <h5 class="card-header">Detail Data Pemohon</h5> -->
                            <div class="card-body">
                                <h5 class="card-title"><?= $pemohon['nama']; ?></h5>
                                <h6 class="card-text mt-4"><?= $pemohon['nik']; ?></h6>
                                <p class="card-text mt-4"><?= $pemohon['umur']; ?></p>
                                <p class="card-text"><?= $pemohon['kebangsaan']; ?></p>
                                <p class="card-text"><?= $pemohon['tempat_tinggal']; ?></p>
                                <p class="card-text"><?= $pemohon['agama']; ?></p>
                                <p class="card-text"><?= $pemohon['pekerjaan']; ?></p>
                                <p class="card-text"><?= $pemohon['status_perkawinan']; ?></p>
                                <p class="card-text"><?= $pemohon['jenis_kelamin']; ?></p>
                                <p class="card-text"><?= $pemohon['pendidikan']; ?></p>
                                <p class="card-text"><?= $pemohon['no_wa']; ?></p>
                                <a href="<?= base_url(); ?>pemohon" class="btn btn-primary">Kembali</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->