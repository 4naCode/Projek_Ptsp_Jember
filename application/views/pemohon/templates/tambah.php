<div class="container ">
    <!-- flash data tambah pemohon belum fix-->
    <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash', 'Ditambahkan'); ?>"></div>
    <?php if ($this->session->flashdata('flash')) : ?>
        <div class="pesan " data-flashdata=data-flashdata="<?= $this->session->flashdata('pesan', 'Ditambahkan'); ?>"></div>
    <?php endif; ?>
    <?php if ($this->session->flashdata('flash')) : ?>
        <div class="pesan " data-flashdata=data-flashdata="<?= $this->session->flashdata('pesan', 'Ditambahkan'); ?>"></div>
    <?php endif; ?>

    <div id="flash" class="flash" data-flashdata="<?= $this->session->flashdata('flash', 'Ditambahkan'); ?>"></div>
    <?php if ($this->session->flashdata('flash')) : ?>
        <!-- <div class="row mt-3 ">
            <div class="col-md-6">
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    Selamat Data Anda akan <strong>diperoses</strong><?= $this->session->flashdata('flash'); ?>.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
        </div> -->
    <?php endif; ?>


    <div class="row mt-3 mb-5 justify-content-center ">
        <div class="col-md-6 ">
            <div class="card ">
                <div class="card-body d-flex flex-column">
                    <p class="h5">Lengkapi Dokumen</p>
                </div>
                <div class="dropdown-divider mt-0"></div>

                <p class="card-body mt-0 mb-0">Lengkapi data diri dan dokumenmu untuk dapat mengajukan permohonan. Informasimu akan kami simpan dengan aman.</p>
                <!-- card -->
                <div class="card-body mt-0 mb-0">
                    <!-- <?= validation_errors(); ?> -->
                    <form action="<?= base_url('pemohon/tambah') ?>" method="post" enctype="multipart/form-data">
                        <div class="form-group mt-0">
                            <label for="nama">Nama lengkap</label>
                            <input type="text" class="form-control" name="nama" id="nama" placeholder="Masukkan nama">
                            <small class="form-text text-danger"><?= form_error('nama'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="nik">NIK</label>
                            <input type="text" class="form-control" name="nik" id="nik" placeholder="Masukkan nik">
                            <small class="form-text text-danger"><?= form_error('nik'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="umur">Umur</label>
                            <input type="text" class="form-control" name="umur" id="umur" placeholder="umur">
                            <small class="form-text text-danger"><?= form_error('umur'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="kebangsaan">kebangsaan</label>
                            <input type="text" class="form-control" name="kebangsaan" id="kebangsaan" placeholder="Indonesia">
                            <small class="form-text text-danger"><?= form_error('kebangsaan'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="tempatTinggal">Tempat tinggal</label>
                            <input type="text" class="form-control" name="tempatTinggal" id="tempatTinggal" placeholder="alamat">
                            <small class="form-text text-danger"><?= form_error('tempatTinggal'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="agama">Agama</label>
                            <select class="form-control" id="agama" name="agama">
                                <option value="Islam">Islam</option>
                                <option value="Protestan">Prostestan</option>
                                <option value="Katolik">Katolik</option>
                                <option value="Hindu">Hindu</option>
                                <option value="Buddha">Buddha</option>
                                <option value="Khonghucu">Khonghucu</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="pekerjaan">Pekerjaan</label>
                            <input type="text" class="form-control" name="pekerjaan" id="pekerjaan" placeholder="masukkan pekerjaan anda">
                            <small class="form-text text-danger"><?= form_error('pekerjaan'); ?></small>
                        </div>
                        <fieldset class="form-group">
                            <div class="row">
                                <legend class="col-form-label col-md-12 pt-0 ">Status Perkawinan</legend>
                                <div class="custom-control custom-radio custom-control-inline ml-3">
                                    <input type="radio" id="kawin" name="statusPerkawinan" class="custom-control-input" value="kawin">
                                    <label class="custom-control-label" for="kawin">kawin</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="belumKawin" name="statusPerkawinan" class="custom-control-input" value="belum kawin">
                                    <label class="custom-control-label" for="belumKawin">Belum kawin</label>
                                </div>
                            </div>
                        </fieldset>
                        <fieldset class="form-group">
                            <div class="row">
                                <legend class="col-form-label col-md-12 pt-0 ">Jenis Kelamin</legend>
                                <div class="custom-control custom-radio custom-control-inline ml-3">
                                    <input type="radio" id="lakiLaki" name="jenisKelamin" class="custom-control-input" value="laki-laki">
                                    <label class="custom-control-label" for="lakiLaki">Laki-laki</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="perempuan" name="jenisKelamin" class="custom-control-input" value="perempuan">
                                    <label class="custom-control-label" for="perempuan">Perempuan</label>
                                </div>
                            </div>
                        </fieldset>
                        <div class="form-group">
                            <label for="pendidikan">Pendidikan</label>
                            <input type="text" class="form-control" id="pendidikan" name="pendidikan" placeholder="Pendidikan terakhir">
                            <small class="form-text text-danger"><?= form_error('pendidikan'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="noWA">Nomor ponsel (WA)</label>
                            <input type="text" class="form-control" id="noWA" name="noWA" placeholder="0000-0000-0000">
                            <small class="form-text text-danger"><?= form_error('noWA'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="perkara">Perkara</label>
                            <select class="form-control" id="perkara" name="perkara">
                                <option value="perubahan akta">Perubahan akta</option>
                                <option>gatau</option>
                                <option>yoi</option>
                                <option>mungkin</option>
                            </select>
                        </div>



                        <!-- <div class="form-group">
                            <label for="aktaKelahiran">akta kelahiran</label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="aktaKelahiran" name="aktaKelahiran" value="<?php echo set_value('akta_kelahiran'); ?>">
                                <label class="custom-file-label" for="aktaKelahiran">Upload Akta Kelahiran..</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="ijazah">ijazah</label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="ijazah" name="ijazah" value="<?php echo set_value('ijazah'); ?>">
                                <label class="custom-file-label" for="ijazah">Upload ijazah..</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="ktp">ktp</label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="ktp" name="ktp" value="<?php echo set_value('ktp'); ?>">
                                <label class="custom-file-label" for="ktp">Upload ktp..</label>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="kk">kk</label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="kk" name="kk" value="<?php echo set_value('kk'); ?>">
                                <label class="custom-file-label" for="kk">Upload kk..</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="skbi">surat keterangan beda identitas</label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="skbi" name="skbi" value="<?php echo set_value('skbi'); ?>">
                                <label class="custom-file-label" for="skbi">Upload skbi..</label>
                            </div>
                        </div> -->
                        <!-- <div class="form-group">
                            <label for="sktm">surat keterangan tidak mampu</label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="sktm" name="sktm" value="<?php echo set_value('sktm'); ?>">
                                <label class="custom-file-label" for="kk">Upload sktm..</label>
                            </div>
                        </div> -->
                        <?php if ($this->session->set_userdata('error')) : ?>
                            <div class="flash-data" data-flashdata="<?= $this->session->set_userdata('error'); ?>"></div>
                            <small>
                                <p class="text-danger"> Data <?= $this->session->set_userdata('error'); ?></p>
                            </small>
                            </p>
                            <!-- <div class="row mt-2">
                                <div class="col-md-12">
                                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                                        Selamat Data pemohon <strong>berhasil </strong><?= $this->session->flashdata('pGagal'); ?>.
                                        <button type="" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                </div>
                            </div> -->

                        <?php endif; ?>

                        <div class="form-group ">

                            <label for="aktaKelahiran" class="col-form-label font-weight-bold">Akta Kelahiran</label>
                            <small>
                                <p>Unggah file dalam format pdf dengan ukuran maksimal 2 MB</p>
                            </small>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="aktaKelahiran" name="aktaKelahiran" value="<?php echo set_value('akta_kelahiran'); ?>">
                                <small class="form-text text-danger"><?= form_error('aktaKelahiran'); ?></small>


                            </div>
                        </div>
                        <div class="form-group ">
                            <label for="ijazah" class="col-form-label font-weight-bold">Ijazah</label>
                            <small>
                                <p>Unggah file dalam format pdf dengan ukuran maksimal 2 MB</p>
                            </small>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="ijazah" name="ijazah" value="<?php echo set_value('ijazah'); ?>">
                                <small class="form-text text-danger"><?= form_error('ijazah'); ?></small>
                            </div>
                        </div>
                        <div class="form-group ">
                            <label for="ktp" class="col-form-label font-weight-bold">Kartu Tanda Penduduk</label>
                            <small>
                                <p>Unggah file dalam format pdf dengan ukuran maksimal 2 MB</p>
                            </small>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="ktp" name="ktp" value="<?php echo set_value('ktp'); ?>">
                                <small class="form-text text-danger"><?= form_error('ktp'); ?></small>
                            </div>
                        </div>
                        <div class="form-group ">
                            <label for="kk" class="col-form-label font-weight-bold">Kartu Keluarga</label>
                            <small>
                                <p>Unggah file dalam format pdf dengan ukuran maksimal 2 MB</p>
                            </small>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="kk" name="kk" value="<?php echo set_value('kk'); ?>">
                                <small class="form-text text-danger"><?= form_error('kk'); ?></small>
                            </div>
                        </div>
                        <div class="form-group ">
                            <label for="skbi" class="col-form-label font-weight-bold">Surat Keterangan Beda Identitas</label>
                            <small>
                                <p>Unggah file dalam format pdf dengan ukuran maksimal 2 MB</p>
                            </small>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="skbi" name="skbi" value="<?php echo set_value('skbi'); ?>">
                                <small class="form-text text-danger"><?= form_error('skbi'); ?></small>
                            </div>
                        </div>
                        <div class="form-group  ">
                            <label for="sktm" class="col-form-label font-weight-bold">Surat Keterangan Tidak Mampu</label>
                            <small>
                                <p>Unggah file dalam format pdf dengan ukuran maksimal 2 MB</p>
                            </small>
                            <div class="custom-file ">
                                <input type="file" class="custom-file-input" id="sktm" name="sktm" value="<?php echo set_value('sktm'); ?>">
                                <small class="form-text text-danger"><?= form_error('sktm'); ?></small>
                            </div>
                        </div>










                        <div class="dropdown-divider mt-4"></div>
                        <div class="align-self-center mx-auto  ">
                            <button type="submit" name="tambah" class="btn btn-primary mt-4  align-self-end btn btn-md btn-block btn-primary shadow bg-primary rounded ">Ajukan Permohonan</button>
                        </div>


                    </form>
                </div>
                <!-- card -->

            </div>

        </div>
    </div>
</div>

<script>
    $('#aktaKelahiran, #ijazah, #ktp, #kk, #skbi, #sktm').on('change', function() {
        //get the file name
        var fileName = $(this).val();
        //replace the "Choose a file" label
        $(this).next('.custom-file-label').html(fileName);
    })
    // $('#ijazah').on('change', function() {
    //     //get the file name
    //     var fileName = $(this).val();
    //     //replace the "Choose a file" label
    //     $(this).next('.custom-file-label').html(fileName);
    // })
    // $('#ktp').on('change', function() {
    //     //get the file name
    //     var fileName = $(this).val();
    //     //replace the "Choose a file" label
    //     $(this).next('.custom-file-label').html(fileName);
    // })
    // $('#kk').on('change', function() {
    //     //get the file name
    //     var fileName = $(this).val();
    //     //replace the "Choose a file" label
    //     $(this).next('.custom-file-label').html(fileName);
    // })
    // $('#skbi').on('change', function() {
    //     //get the file name
    //     var fileName = $(this).val();
    //     //replace the "Choose a file" label
    //     $(this).next('.custom-file-label').html(fileName);
    // })
    // $('#sktm').on('change', function() {
    //     //get the file name
    //     var fileName = $(this).val();
    //     //replace the "Choose a file" label
    //     $(this).next('.custom-file-label').html(fileName);
    // })


    // $('#cobalagi').on('change', function() {
    //     //get the file name
    //     var fileName = $(this).val();
    //     //replace the "Choose a file" label
    //     $(this).next('.custom-file-label').html(fileName);
    // })


    $(document).ready(function() {
        $("#aktaKelahiran").ratifyUpload();
    });
    $(document).ready(function() {
        $("#ijazah").ratifyUpload();
    });
    $(document).ready(function() {
        $("#ktp").ratifyUpload();
    });
    $(document).ready(function() {
        $("#kk").ratifyUpload();
    });
    $(document).ready(function() {
        $("#skbi").ratifyUpload();
    });
    $(document).ready(function() {
        $("#sktm").ratifyUpload();
    });
</script>