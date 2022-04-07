<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
    <!-- /.container-fluid -->
    <div class="row">
        <div class="col-lg-8">
            <!-- flash data tambah pemohon belum fix-->



            <?php if ($this->session->flashdata('flash')) : ?>
                <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>

                <div class="row mt-2">
                    <div class="col-md-6">
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            Selamat Data pemohon <strong>berhasil </strong><?= $this->session->flashdata('flash'); ?>.
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    </div>
                </div>

            <?php endif; ?>


            <a href="<?= base_url(); ?>pemohon/tambah" class="btn btn-primary mb-3">Add pemohon</a>
            <form action="" method="POST">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Cari data pemohon.." name="keyword" autocomplete="
                    off" autofocus>
                    <div class="input-group-append">
                        <button class="btn btn-outline-primary" type="submit">Cari</button>
                    </div>
                </div>
            </form>





            <?php if (empty($pemohon)) : ?>

                <div class="alert alert-danger" role="alert">
                    Data yang Anda cari tidak ditemukan..
                </div>


            <?php endif; ?>

            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama</th>
                        <th scope="col">no WA</th>
                        <th scope="col">Action</th>

                    </tr>
                </thead>

                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($pemohon as $p) : ?>
                        <tr>
                            <th><?= ++$start; ?> </th>
                            <!-- <th scope="row"><?= $i; ?></th> -->
                            <td><?= $p['nama']; ?></td>
                            <td><?= $p['no_wa']; ?></td>
                            <td>
                                <a href="<?= base_url(); ?>pemohon/ubah/<?= $p['id']; ?>" class="badge badge-success">edit</a>
                                <a href="<?= base_url(); ?>pemohon/detail/<?= $p['id']; ?>" class="badge badge-primary">detail</a>
                                <a href="<?= base_url(); ?>pemohon/hapus/<?= $p['id']; ?>" class="badge badge-danger" onclick="return confirm('yakin?');">delete</a>
                                <a href="<?= base_url(); ?>pemohon/cetak/<?= $p['id']; ?>" class="badge badge-warning ">cetak</a>

                            </td>
                        </tr>
                        <?php $i++; ?>
                    <?php endforeach; ?>
                </tbody>
            </table>

            <?= $this->pagination->create_links(); ?>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->