<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="">

    <!-- Title Page-->
    <title>Daftar</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css') ?>" />
    <link rel="stylesheet" href="<?= base_url('assets/js/bootstrap.min.js') ?>" />

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- Icons font CSS-->

    <link href="<?= base_url('assets/'); ?>vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="<?= base_url('assets/'); ?>vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="<?= base_url('assets/'); ?>vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="<?= base_url('assets/'); ?>vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="<?= base_url('assets/'); ?>css/main.css" rel="stylesheet" media="all">

    <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
    <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
</head>
<style>
    .navbar .nav-link {
        color: #000000;
    }

    .navbar .nav-link:hover,
    .navbar .nav-link:focus {
        color: #000000;
        text-decoration: none;
    }

    .navbar .navbar-brand {
        color: #fff;
    }


    /* Change navbar styling on scroll */
    .navbar.active {
        background: #fff;
        box-shadow: 1px 2px 10px rgba(0, 0, 0, 0.1);
    }

    .navbar.active .nav-link {
        color: #000000;
    }

    .navbar.active .nav-link:hover,
    .navbar.active .nav-link:focus {
        color: #000000;
        text-decoration: none;
    }

    .navbar.active .navbar-brand {
        color: #000000;
    }

    .nav-link .text-uppercase .font-weight-bold {
        color: #000000;
    }
</style>

<body>
    <div class="page-wrapper bg-gra-02 p-t-130 p-b-100 font-poppins">
        <div class="wrapper wrapper--w680">
            <div class="card card-4">
                <div class="card-body">
                    <h2 class="title">Registration Form</h2>
                    <?php
                    if ($this->session->flashdata('error') != '') {
                        echo '<div class="alert alert-danger" role="alert">';
                        echo $this->session->flashdata('error');
                        echo '</div>';
                    }
                    ?>

                    <?php
                    if ($this->session->flashdata('success_register') != '') {
                        echo '<div class="alert alert-info" role="alert">';
                        echo $this->session->flashdata('success_register');
                        echo '</div>';
                    }
                    ?>
                    <br>
                    <br>
                    <h5> HARAP DIISI MENGGUNAKAN HURUF BESAR / HURUF KAPITAL <h5>
                            <br>
                            <form class="user" method="post" action="<?= base_url('regist/'); ?>" enctype="multipart/form-data">
                                <div class="row row-space">
                                    <div class="col-6">
                                        <div class="input-group">
                                            <label class="label">NAMA LENGKAP</label>
                                            <small>SESUAI IDENTITAS (KTP/SIM/AKTA/LAINNYA) </small>
                                            <input class="input--style-4" type="text" name="nama" value="<?= set_value('nama'); ?>">
                                        </div>
                                    </div>
                                    <div class=" col-6">
                                        <div class="input-group">
                                            <label class="label">EMAIL </label>
                                            <hr>
                                            </hr>
                                            <p><small>EMAIL AKTIF (GMAIL/Yahoo! Mail/DLL)</small></p>
                                            <input class="input--style-4" type="email" name="email" value="<?= set_value('email') ?>">
                                            <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="row row-space">
                                    <div class="col-6">
                                        <div class="input-group">
                                            <label class="label">NIK KTP</label>
                                            <input class="input--style-4" type="text" name="nik" value="<?= set_value('nik'); ?>">
                                            <?= form_error('nik', '<small class="text-danger pl-3">', '</small>'); ?>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="input-group">
                                            <label class="label">TEMPAT LAHIR</label>
                                            <input class="input--style-4" type="text" name="tempat_lahir" value="<?= set_value('tempat_lahir'); ?>">
                                            <?= form_error('tempat_lahir', '<small class="text-danger pl-3">', '</small>'); ?>
                                        </div>
                                    </div>
                                </div>
                                <div class=" row row-space">
                                    <div class="col-6">
                                        <div class="input-group">
                                            <label class="label">TANGGAL LAHIR</label>
                                            <div class="input-group-icon">
                                                <input class="input--style-4 js-datepicker" data-date-format="yyyy-mm-dd" type="text" id="hitungumur" name="tanggal_lahir" value="<?= set_value('tanggal_lahir'); ?>">
                                                <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>
                                                <?= form_error('tanggal_lahir', '<small class="text-danger pl-3">', '</small>'); ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="input-group">
                                            <label class="label">USIA SAAT INI</label>
                                            <input class="input--style-4" type="text" id="umur" name="usia" value="<?= set_value('usia'); ?>">
                                            <?= form_error('usia', '<small class="text-danger pl-3">', '</small>'); ?>
                                        </div>
                                    </div>
                                </div>


                                <div class="input-group">
                                    <label class="label">ALAMAT LENGKAP SESUAI KTP</label>
                                    <input class="input--style-4" type="text" name="alamat_ktp" value="<?= set_value('alamat_ktp'); ?>">
                                    <?= form_error('alamat_ktp', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>

                                <div class="input-group">
                                    <label class="label">ALAMAT LENGKAP TEMPAT TINGGAL SAAT INI</label>
                                    <input class="input--style-4" type="text" name="alamat_tinggal" value="<?= set_value('alamat_tinggal'); ?>">
                                    <?= form_error('alamat_tinggal', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>


                                <div class="row row-space">
                                    <div class="input-group">
                                        <label class="label m-3 col-2">AGAMA</label>
                                        <div class="rs-select2 js-select-simple select--no-search">
                                            <select name="agama" value="<?= set_value('agama'); ?>">
                                                <option disabled="disabled" selected="selected">Choose option</option>
                                                <option value="ISLAM">ISLAM</option>
                                                <option value="KRISTEN">KRISTEN</option>
                                                <option value="KATOLIK">KATOLIK</option>
                                                <option value="HINDU">HINDU</option>
                                                <option value="BUDHA">BUDHA</option>
                                                <option value="KONGHUCU">KONGHUCU</option>
                                            </select>
                                            <div class="select-dropdown"></div>
                                            <?= form_error('agama', '<small class="text-danger pl-3">', '</small>'); ?>
                                        </div>
                                    </div>

                                    <div class="input-group">
                                        <label class="label m-3 col-3">JENIS KELAMIN</label>
                                        <div class="rs-select2 js-select-simple select--no-search">
                                            <select name="jk" value="<?= set_value('jk'); ?>">
                                                <option disabled="disabled" selected="selected">Choose option</option>
                                                <option value="PRIA">PRIA</option>
                                                <option value="WANITA">WANITA</option>

                                            </select>
                                            <div class="select-dropdown"></div>
                                            <?= form_error('jk', '<small class="text-danger pl-3">', '</small>'); ?>
                                        </div>
                                    </div>
                                </div>


                                <div class="row row-space">
                                    <div class="col-6">
                                        <div class="input-group">
                                            <label class="label">BERAT BADAN (KG)</label>
                                            <input class="input--style-4" type="text" name="bb" value="<?= set_value('bb'); ?>">
                                            <?= form_error('bb', '<small class="text-danger pl-3">', '</small>'); ?>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="input-group">
                                            <label class="label">TINGGI BADAN (CM)</label>
                                            <input class="input--style-4" type="text" name="tb" value="<?= set_value('tb'); ?>">
                                            <?= form_error('tb', '<small class="text-danger pl-3">', '</small>'); ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="row row-space">
                                    <div class="col-6">
                                        <div class="input-group">
                                            <label class="label">PENDIDIKAN TERAKHIR</label>
                                            <div class="rs-select2 js-select-simple select--no-search">
                                                <select name="pendidikan" value="<?= set_value('pendidikan'); ?>">
                                                    <option disabled="disabled" selected="selected ">Choose option</option>
                                                    <option value="SMP">SMP</option>
                                                    <option value="SMK">SMK</option>
                                                    <option value="SMA">SMA</option>
                                                    <option value="DIPLOMA">DIPLOMA</option>
                                                    <option value="SARJANA">SARJANA</option>

                                                </select>
                                                <div class="select-dropdown"></div>
                                                <?= form_error('pendidikan', '<small class="text-danger pl-3">', '</small>'); ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="input-group">
                                            <label class="label">JURUSAN</label>
                                            <input class="input--style-4" type="text" name="jurusan" value="<?= set_value('jurusan'); ?>">
                                            <?= form_error('jurusan', '<small class="text-danger pl-3">', '</small>'); ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="row row-space">
                                    <div class="col-6">
                                        <label class="label">NOMER TELP</label>
                                        <small>AKTIF GSM DAN WHATSAPP</small>
                                        <input class="input--style-4" type="text" name="telp" value="<?= set_value('telp'); ?>">
                                        <?= form_error('telp', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                </div>

                                <div class="row row-space py-3">
                                    <div class="col-40">
                                        <label style="text-align:center;" class="label">PHOTO KARTU IDENTITAS</label>

                                        <div class="form-group">
                                            <div class="col-md-200">
                                                <img src="<?= base_url('assets/'); ?>img/ktpcontoh.jpg" width=150% height=150% class="img-fluid" alt="Responsive image">
                                            </div>
                                            <small>KTP / SIM / LAINNYA</small>
                                            <div class="col-sm-4">Picture KTP</div>
                                            <div class="col-sm-10">
                                                <div class="row">
                                                    <div class="col-sm-9">
                                                        <div class="custom-file">
                                                            <input type="file" class="custom-file-input" id="image" name="img_ktp">
                                                            <label class="custom-file-label" for="image">Choose file</label>
                                                            <?= form_error('img_ktp', '<small class="text-danger pl-3">', '</small>'); ?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row row-space">
                                    <div class="col-10">
                                        <label class="label">PHOTO DIRI</label>
                                        <small>PAS PHOTO / PHOTO SELFIE TERBARU</small>
                                        <div class="form-group">
                                            <div class="col-sm-4">Picture</div>
                                            <div class="col-sm-10">
                                                <div class="row">
                                                    <div class="col-sm-9">
                                                        <div class="custom-file">
                                                            <input type="file" class="custom-file-input" id="image" name="img_selfie">
                                                            <label class="custom-file-label" for="image">Choose file</label>
                                                            <?= form_error('img_selfie', '<small class="text-danger pl-3">', '</small>'); ?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row row-space">
                                    <div class="col-12">
                                        <label class="label">REF</label>
                                        <small>ANDA MENDAPATKAN INFORMASI MENGENAI PROGRAM INI DARI MANA ATAU SIAPA, CONTOH : IKLAN (SEBUTKAN MEDIANYA), TEMAN, SAUDARA ATAU KERABAT LAINNYA (SEBUTKAN NAMA LENGKAPNYA),</small>
                                        <input class="input--style-4" type="text" name="ref" value="<?= set_value('ref'); ?>">
                                        <?= form_error('ref', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                </div>
                                <br>
                                <br>
                                <br>
                                <?php
                                if ($this->session->flashdata('error') != '') {
                                    echo '<div class="alert alert-danger" role="alert">';
                                    echo $this->session->flashdata('error');
                                    echo '</div>';
                                }
                                ?>

                                <?php
                                if ($this->session->flashdata('success_register') != '') {
                                    echo '<div class="alert alert-info" role="alert">';
                                    echo $this->session->flashdata('success_register');
                                    echo '</div>';
                                }
                                ?>
                                <div class="p-t-15">
                                    <button class="btn btn--radius-2 btn--blue" type="submit">Submit</button>
                                </div>
                            </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="<?= base_url('assets/'); ?>vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="<?= base_url('assets/'); ?>vendor/select2/select2.min.js"></script>
    <script src="<?= base_url('assets/'); ?>vendor/datepicker/moment.min.js"></script>
    <script src="<?= base_url('assets/'); ?>vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="<?= base_url('assets/'); ?>js/global.js"></script>
    <script>
        $('.custom-file-input').on('change', function() {
            let fileName = $(this).val().split('\\').pop();
            $(this).next('.custom-file-label').addClass("selected").html(fileName);
        });
    </script>
    <script>
        $(function() {
            $(window).on('scroll', function() {
                if ($(window).scrollTop() > 10) {
                    $('.navbar').addClass('active');
                } else {
                    $('.navbar').removeClass('active');
                }
            });
        });
    </script>
    <script>
        $(function() {
            $("#hitungumur").datepicker();
        });

        window.onload = function() {
            $('#hitungumur').on('change', function() {
                var dob = new Date(this.value);
                var today = new Date();
                var age = Math.floor((today - dob) / (365.25 * 24 * 60 * 60 * 1000));
                $('#umur').val(age);
            });
        }
    </script>
</body>

</html>
<!-- end document-->