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

                        <div class="card-body ">
                            <?= validation_errors(); ?>
                            <form action="" method="post" enctype="multipart/form-data">
                                <input type="hidden" name="id" value="<?= $pemohon['id']; ?>">
                                <div class="form-group">
                                    <label for="nama">Nama lengkap</label>
                                    <input type="text" class="form-control" name="nama" id="nama" placeholder="Masukkan nama" value="<?= $pemohon['nama']; ?>">
                                </div>
                                <div class="form-group">
                                    <label for="nik">NIK</label>
                                    <input type="text" class="form-control" name="nik" id="nik" placeholder="Masukkan nik" value="<?= $pemohon['nik']; ?>">
                                </div>
                                <div class="form-group">
                                    <label for="umur">Umur</label>
                                    <input type="number" class="form-control" name="umur" id="umur" placeholder="umur" value="<?= $pemohon['umur']; ?>">
                                </div>
                                <div class="form-group">
                                    <label for="kebangsaan">kebangsaan</label>
                                    <input type="text" class="form-control" name="kebangsaan" id="kebangsaan" placeholder="Indonesia" value="<?= $pemohon['kebangsaan']; ?>">
                                </div>
                                <div class="form-group">
                                    <label for="tempatTinggal">Tempat tinggal</label>
                                    <input type="text" class="form-control" name="tempatTinggal" id="tempatTinggal" placeholder="alamat" value="<?= $pemohon['tempat_tinggal']; ?>">
                                </div>
                                <div class="form-group">
                                    <label for="agama">Agama</label>
                                    <select class="form-control" id="agama" name="agama" value="<?= $pemohon['agama']; ?>">
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
                                    <input type="text" class="form-control" name="pekerjaan" id="pekerjaan" placeholder="masukkan pekerjaan anda" value="<?= $pemohon['pekerjaan']; ?>">
                                </div>
                                <fieldset class="form-group">
                                    <div class="row">
                                        <legend class="col-form-label col-md-12 pt-0 ">Status Perkawinan</legend>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="kawin" name="statusPerkawinan" class="custom-control-input" value="kawin">
                                            <label class=" custom-control-label" for="kawin">kawin</label>
                                        </div>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="belumKawin" name="statusPerkawinan" class="custom-control-input" value="belum kawin">
                                            <label class=" custom-control-label" for="belumKawin">Belum kawin</label>
                                        </div>
                                    </div>
                                </fieldset>
                                <fieldset class="form-group">
                                    <div class="row">
                                        <legend class="col-form-label col-md-12 pt-0 ">Jenis Kelamin</legend>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="lakiLaki" name="jenisKelamin" class="custom-control-input" value="laki-laki">
                                            <label class=" custom-control-label" for="lakiLaki">Laki-laki</label>
                                        </div>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="perempuan" name="jenisKelamin" class="custom-control-input" value="perempuan">
                                            <label class=" custom-control-label" for="perempuan">Perempuan</label>
                                        </div>
                                    </div>
                                </fieldset>
                                <div class="form-group">
                                    <label for="pendidikan">Pendidikan</label>
                                    <input type="text" class="form-control" id="pendidikan" name="pendidikan" placeholder="Pendidikan terakhir" value="<?= $pemohon['pendidikan']; ?>">
                                </div>
                                <div class="form-group">
                                    <label for="noWA">Nomor ponsel (WA)</label>
                                    <input type="number" class="form-control" id="noWA" name="noWA" placeholder="000-0000-0000" value="<?= $pemohon['no_wa']; ?>">
                                </div>
                                <div class="form-group">
                                    <label for="perkara">Perkara</label>
                                    <select class="form-control" id="perkara" name="perkara" value="<?= $pemohon['perkara']; ?>">
                                        <option value="perubahan akta">Perubahan akta</option>
                                        <option>gatau</option>
                                        <option>yoi</option>
                                        <option>mungkin</option>
                                    </select>
                                </div>

                                <!-- upload ga penting  -->

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
                                </div>
                                <div class="form-group">
                                    <label for="sktm">surat keterangan tidak mampu</label>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="sktm" name="sktm" value="<?php echo set_value('sktm'); ?>">
                                        <label class="custom-file-label" for="kk">Upload sktm..</label>
                                    </div>
                                </div> -->

                                <button type="submit" name="ubah" class="btn btn-primary float-right">Ubah Data</button>
                            </form>
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