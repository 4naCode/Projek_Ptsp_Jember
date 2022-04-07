<!DOCTYPE html>
<html>

<head>
    <script src="<?= base_url('assets/'); ?>vendor/tinymce/js/tinymce/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
        //js dari tiny nanti seharusnya dipindah

        var useDarkMode = window.matchMedia('(prefers-color-scheme:)').matches;

        tinymce.init({
            selector: 'textarea',
            plugins: 'print preview powerpaste casechange importcss tinydrive searchreplace autolink autosave save directionality advcode visualblocks visualchars fullscreen image link media mediaembed template codesample table charmap hr pagebreak nonbreaking anchor toc insertdatetime advlist lists checklist wordcount tinymcespellchecker a11ychecker imagetools textpattern noneditable help formatpainter permanentpen pageembed charmap tinycomments mentions quickbars linkchecker emoticons advtable export',
            tinydrive_token_provider: 'URL_TO_YOUR_TOKEN_PROVIDER',
            tinydrive_dropbox_app_key: 'YOUR_DROPBOX_APP_KEY',
            tinydrive_google_drive_key: 'YOUR_GOOGLE_DRIVE_KEY',
            tinydrive_google_drive_client_id: 'YOUR_GOOGLE_DRIVE_CLIENT_ID',
            mobile: {
                plugins: 'print preview powerpaste casechange importcss tinydrive searchreplace autolink autosave save directionality advcode visualblocks visualchars fullscreen image link media mediaembed template codesample table charmap hr pagebreak nonbreaking anchor toc insertdatetime advlist lists checklist wordcount tinymcespellchecker a11ychecker textpattern noneditable help formatpainter pageembed charmap mentions quickbars linkchecker emoticons advtable'
            },
            menu: {
                tc: {
                    title: 'Comments',
                    items: 'addcomment showcomments deleteallconversations'
                }
            },
            menubar: 'file edit view insert format tools table tc help',
            toolbar: 'undo redo | bold italic underline strikethrough | fontselect fontsizeselect formatselect | alignleft aligncenter alignright alignjustify | outdent indent |  numlist bullist checklist | forecolor backcolor casechange permanentpen formatpainter removeformat | pagebreak | charmap emoticons | fullscreen  preview save print | insertfile image media pageembed template link anchor codesample | a11ycheck ltr rtl | showcomments addcomment',
            autosave_ask_before_unload: true,
            autosave_interval: '30s',
            autosave_prefix: '{path}{query}-{id}-',
            autosave_restore_when_empty: false,
            autosave_retention: '2m',
            image_advtab: true,
            link_list: [{
                    title: 'My page 1',
                    value: 'https://www.tiny.cloud'
                },
                {
                    title: 'My page 2',
                    value: 'http://www.moxiecode.com'
                }
            ],
            image_list: [{
                    title: 'My page 1',
                    value: 'https://www.tiny.cloud'
                },
                {
                    title: 'My page 2',
                    value: 'http://www.moxiecode.com'
                }
            ],
            image_class_list: [{
                    title: 'None',
                    value: ''
                },
                {
                    title: 'Some class',
                    value: 'class-name'
                }
            ],
            importcss_append: true,
            templates: [{
                    title: 'New Table',
                    description: 'creates a new table',
                    content: '<div class="mceTmpl"><table width="98%%"  border="0" cellspacing="0" cellpadding="0"><tr><th scope="col"> </th><th scope="col"> </th></tr><tr><td> </td><td> </td></tr></table></div>'
                },
                {
                    title: 'Starting my story',
                    description: 'A cure for writers block',
                    content: 'Once upon a time...'
                },
                {
                    title: 'New list with dates',
                    description: 'New List with dates',
                    content: '<div class="mceTmpl"><span class="cdate">cdate</span><br /><span class="mdate">mdate</span><h2>My List</h2><ul><li></li><li></li></ul></div>'
                }
            ],
            template_cdate_format: '[Date Created (CDATE): %m/%d/%Y : %H:%M:%S]',
            template_mdate_format: '[Date Modified (MDATE): %m/%d/%Y : %H:%M:%S]',
            height: 600,
            image_caption: true,
            quickbars_selection_toolbar: 'bold italic | quicklink h2 h3 blockquote quickimage quicktable',
            noneditable_noneditable_class: 'mceNonEditable',
            toolbar_mode: 'sliding',
            spellchecker_ignore_list: ['Ephox', 'Moxiecode'],
            tinycomments_mode: 'embedded',
            content_style: '.mymention{ color: gray; }',
            contextmenu: 'link image imagetools table configurepermanentpen',
            a11y_advanced_options: true,
            skin: useDarkMode ? 'oxide-dark' : 'oxide',
            content_css: useDarkMode ? 'dark' : 'default',


            /*
            The following settings require more configuration than shown here.
            For information on configuring the mentions plugin, see:
            https://www.tiny.cloud/docs/plugins/premium/mentions/.
            */

        });



        //
    </script>
    <style>
        textarea#mentions {
            height: 350px;
        }

        div.card,
        .tox div.card {
            width: 240px;
            background: white;
            border: 1px solid #ccc;
            border-radius: 3px;
            box-shadow: 0 4px 8px 0 rgba(34, 47, 62, .1);
            padding: 8px;
            font-size: 14px;
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen-Sans, Ubuntu, Cantarell, "Helvetica Neue", sans-serif;
        }

        div.card::after,
        .tox div.card::after {
            content: "";
            clear: both;
            display: table;
        }

        div.card h1,
        .tox div.card h1 {
            font-size: 14px;
            font-weight: bold;
            margin: 0 0 8px;
            padding: 0;
            line-height: normal;
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen-Sans, Ubuntu, Cantarell, "Helvetica Neue", sans-serif;
        }

        div.card p,
        .tox div.card p {
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen-Sans, Ubuntu, Cantarell, "Helvetica Neue", sans-serif;
        }

        div.card img.avatar,
        .tox div.card img.avatar {
            width: 48px;
            height: 48px;
            margin-right: 8px;
            float: left;
        }
    </style>
    <title><?= $title; ?></title>
</head>

<body>
    <h1 style="text-align: center;">Report Data Pemohon</h1>


    <textarea>
<p>perihal : Permohonan ganti bulan kelahiran di Akta Kelahiran</p>
<p>Kepada Yang Terhormat</p>
<p>Bapak Ketua Pengadilan Negeri Jember</p>
<p>Jl. Kalimantan No. 3 Jember</p>
<p>Dengan hormat</p>
<p>Yang bertanda tangan dibawah ini:</p>
<ul style="list-style-type:none;">
  <li>Nama : <?= $pemohon['nama']; ?></li>
  <li>NIK :  <?= $pemohon['nik']; ?> </li>
  <li>Umur :  <?= $pemohon['umur']; ?></li>
  <li>Kebangsaan :  <?= $pemohon['kebangsaan']; ?></li>
  <li>Tempat tinggal :  <?= $pemohon['tempat_tinggal']; ?></li>
  <li>Agama :  <?= $pemohon['agama']; ?></li>
  <li>Pekerjaan :  <?= $pemohon['pekerjaan']; ?></li>
  <li>Status Perkawinan :   <?= $pemohon['status_perkawinan']; ?></li>
  <li>Jenis Kelamin :   <?= $pemohon['jenis_kelamin']; ?></li>
  <li>Pendidikan :  <?= $pemohon['pendidikan']; ?></li>
</ul>
<p>Adapun alasan permohonan ganti bulan kelahiran sebagai berikut :</p>
<ol style="list-style:decimal"  >
    <li>Bahwa MUHAMMAD TOHER (PEMOHON) telah menikah dengan LULUK MAISAROH (ISTRI PEMOHON) pada Kamis, 28 Januari 2016 dan tercatat pada Akta Nikah Nomor : 0109/ 109/1/ 2016; tertanggal : 28 Januari 2016</li>
    <li>Bahwa dari pernikahan tersebut, Pemohon mempunyai satu orang anak yang bernama MOHAMMAD HENDRA SAPUTRA yang dilahirkan di Jember, tanggal 18 Februari 2016. Kelahiran Anak Pemohon yang bernama MOHAMMAD HENDRA SAPUTRA telah didaftarkan dan dicatatkan di Dinas Kependudukan dan Catatan Sipil Kabupaten Jember dan diterbitkan dalam Akta Kelahiran dengan Nomor 3509-LT-06012020-0217 tertanggal 06 Januari 2020;</li>
    <li>Bahwa dalam Akta Kelahiran Anak Pemohon dengan Nomor 3509-LT-06012020-0217 tertanggal 06 Januari 2020 yang dikeluarkan oleh Dinas Kependudukan dan Kantor Catatan Sipil Kabupaten Jember terdapat kesalahan dalam penulisan bulan lahir anak, karena Pemohon tidak teliti dalam menerima dan memeriksa berkas yang diterimanya dari Dinas Kependudukan dan Kantor Catatan Sipil Kabupaten Jember sehingga Pemohon ingin mengganti dan menyesuaikan bulan lahir anak sesuai dengan Surat Kelahiran dari Desa Nomor: 474.1/ 44/ 35.09.09.2010/ 2021 yang dikeluarkan oleh Kantor Desa Banjarsari. Perubahan yang dimaksud yaitu Bulan lahir dalam Akta Kelahiran anak Pemohon yang semula tertulis  bulan September, dirubah menjadi bulan Februari;</li>
    <li>Bahwa pada waktu Pemohon berkeinginan untuk mengganti Akta Kelahiran Anak Pemohon dengan Nomor 3509-LT-06012020-0217 tertanggal 06 Januari 2020 yang dikeluarkan oleh Dinas Kependudukan dan Kantor Catatan Sipil Kabupaten Jember diberi petunjuk untuk mengurus revisi atau ganti Akta Kelahiran Anak Pemohon dilakukan di Pengadilan Negeri Jember sesuai dengan UU No. 24  tahun 2013 tentang Perubahan Atas UU No. 23 Tahun 2006 Tentang Administrasi Kependudukan, sebagai salah satu persyaratan untuk mendapatkan perbaikan Akta Kelahiran Anak Pemohon sebagai persyaratan administrasi sekolah anak Pemohon;</li>
    
</ol>
</textarea>



</body>

</html>