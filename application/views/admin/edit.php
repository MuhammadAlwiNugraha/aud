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
<div class="container pt-5">
    <h3><?= $title ?></h3>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb ">
            <li class="breadcrumb-item"><a>Data Pendaftar</a></li>
            <li class="breadcrumb-item "><a href="<?= base_url('admin/pendaftar'); ?>">List Data</a></li>
            <li class="breadcrumb-item active" aria-current="page">Edit Data</li>
        </ol>
    </nav>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">

                    <div class="">
                        <div class="wrapper wrapper--w680">
                            <div class="card card-4">
                                <div class="card-body">
                                    <h2 class="title">Edit Form</h2>
                                    <form class="user" method="post" enctype="multipart/form-data">
                                        <div class="row row-space">
                                            <input type="hidden" class="form-control" id="id" name="id" value=" <?= $data_pendaftar->id; ?>">
                                            <div class="col-6">
                                                <div class="input-group">
                                                    <label class="label">NAMA LENGKAP</label>
                                                    <input class="input--style-4" type="text" name="nama" value=" <?= $data_pendaftar->nama; ?>">
                                                </div>
                                            </div>
                                            <div class=" col-6">
                                                <div class="input-group">
                                                    <label class="label">EMAIL</label>
                                                    <input class="input--style-4" type="email" name="email" value=" <?= $data_pendaftar->email; ?>">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row row-space">
                                            <div class="col-6">
                                                <div class="input-group">
                                                    <label class="label">NIK KTP</label>
                                                    <input class="input--style-4" type="text" name="nik" value=" <?= $data_pendaftar->nik; ?>">
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="input-group">
                                                    <label class="label">TEMPAT LAHIR</label>
                                                    <input class="input--style-4" type="text" name="tempat_lahir" value=" <?= $data_pendaftar->tempat_lahir; ?>">
                                                </div>
                                            </div>
                                        </div>
                                        <div class=" row row-space">
                                            <div class="col-6">
                                                <div class="input-group">
                                                    <label class="label">TANGGAL LAHIR</label>
                                                    <div class="input-group-icon">
                                                        <input class="input--style-4 js-datepicker" data-date-format="yyyy-mm-dd" type="text" name="tanggal_lahir" value="<?php echo $data_pendaftar->tanggal_lahir ?>">
                                                        <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="input-group">
                                                    <label class="label">USIA SAAT INI</label>
                                                    <input class="input--style-4" type="text" name="usia" value=" <?= $data_pendaftar->usia; ?>">
                                                </div>
                                            </div>
                                        </div>


                                        <div class="input-group">
                                            <label class="label">ALAMAT LENGKAP SESUAI KTP</label>
                                            <input class="input--style-4" type="text" name="alamat_ktp" value=" <?= $data_pendaftar->alamat_ktp; ?>">
                                        </div>

                                        <div class="input-group">
                                            <label class="label">ALAMAT LENGKAP TEMPAT TINGGAL SAAT INI</label>
                                            <input class="input--style-4" type="text" name="alamat_tinggal" value=" <?= $data_pendaftar->alamat_tinggal; ?>">
                                        </div>


                                        <div class="row row-space">
                                            <div class="input-group">
                                                <label class="label m-3 col-2">AGAMA</label>
                                                <div class="rs-select2 js-select-simple select--no-search">
                                                    <select name="agama">
                                                        <option disabled="disabled" selected="selected">Choose option</option>
                                                        <option <?php if ($data_pendaftar->agama == "ISLAM") {
                                                                    echo "selected='selected'";
                                                                }
                                                                echo $data_pendaftar->jk; ?>value="ISLAM">ISLAM</option>

                                                        <option <?php if ($data_pendaftar->agama == "KRISTEN") {
                                                                    echo "selected='selected'";
                                                                }
                                                                echo $data_pendaftar->jk; ?>value="KRISTEN">KRISTEN</option>
                                                        <option <?php if ($data_pendaftar->agama == "KATOLIK") {
                                                                    echo "selected='selected'";
                                                                }
                                                                echo $data_pendaftar->jk; ?>value="KATOLIK">KATOLIK</option>
                                                        <option <?php if ($data_pendaftar->agama == "HINDU") {
                                                                    echo "selected='selected'";
                                                                }
                                                                echo $data_pendaftar->jk; ?>value="HINDU">HINDU</option>
                                                        <option <?php if ($data_pendaftar->agama == "BUDHA") {
                                                                    echo "selected='selected'";
                                                                }
                                                                echo $data_pendaftar->jk; ?>value="BUDHA">BUDHA</option>
                                                        <option <?php if ($data_pendaftar->agama == "KONGHUCU") {
                                                                    echo "selected='selected'";
                                                                }
                                                                echo $data_pendaftar->jk; ?>value="KONGHUCU">KONGHUCU</option>
                                                    </select>
                                                    <div class="select-dropdown"></div>
                                                </div>
                                            </div>

                                            <div class="input-group">
                                                <label class="label m-3 col-3">JENIS KELAMIN</label>
                                                <div class="rs-select2 js-select-simple select--no-search">
                                                    <select name="jk">
                                                        <option disabled="disabled" selected="selected">Choose option</option>
                                                        <option <?php if ($data_pendaftar->jk == "PRIA") {
                                                                    echo "selected='selected'";
                                                                }
                                                                echo $data_pendaftar->jk; ?>value="PRIA">PRIA</option>

                                                        <option <?php if ($data_pendaftar->jk == "WANITA") {
                                                                    echo "selected='selected'";
                                                                }
                                                                echo $data_pendaftar->jk; ?>value="WANITA">WANITA</option>

                                                    </select>
                                                    <div class="select-dropdown"></div>
                                                </div>
                                            </div>
                                        </div>




                                        <div class="row row-space">
                                            <div class="col-6">
                                                <div class="input-group">
                                                    <label class="label">BERAT BADAN (KG)</label>
                                                    <input class="input--style-4" type="text" name="bb" value=" <?= $data_pendaftar->bb; ?>">
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="input-group">
                                                    <label class="label">TINGGI BADAN (CM)</label>
                                                    <input class="input--style-4" type="text" name="tb" value=" <?= $data_pendaftar->tb; ?>">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row row-space">
                                            <div class="col-6">
                                                <div class="input-group">
                                                    <label class="label">PENDIDIKAN TERAKHIR</label>
                                                    <div class="rs-select2 js-select-simple select--no-search">
                                                        <select name="pendidikan">
                                                            <option disabled="disabled" selected="selected ">Choose option</option>
                                                            <option <?php if ($data_pendaftar->pendidikan == "SMP") {
                                                                        echo "selected='selected'";
                                                                    }
                                                                    echo $data_pendaftar->pendidikan; ?>value="SMP">SMP</option>
                                                            <option <?php if ($data_pendaftar->pendidikan == "SMK") {
                                                                        echo "selected='selected'";
                                                                    }
                                                                    echo $data_pendaftar->pendidikan; ?>value="SMK">SMK</option>
                                                            <option <?php if ($data_pendaftar->pendidikan == "SMA") {
                                                                        echo "selected='selected'";
                                                                    }
                                                                    echo $data_pendaftar->pendidikan; ?>value="SMA">SMA</option>
                                                            <option <?php if ($data_pendaftar->pendidikan == "DIPLOMA") {
                                                                        echo "selected='selected'";
                                                                    }
                                                                    echo $data_pendaftar->pendidikan; ?>value="DIPLOMA">DIPLOMA</option>
                                                            <option <?php if ($data_pendaftar->pendidikan == "SARJANA") {
                                                                        echo "selected='selected'";
                                                                    }
                                                                    echo $data_pendaftar->pendidikan; ?>value="SARJANA">SARJANA</option>

                                                        </select>
                                                        <div class="select-dropdown"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="input-group">
                                                    <label class="label">JURUSAN</label>
                                                    <input class="input--style-4" type="text" name="jurusan" value=" <?= $data_pendaftar->jurusan; ?>">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row row-space">
                                            <div class="col-6">
                                                <label class="label">NOMER TELP</label>
                                                <input class="input--style-4" type="text" name="telp" value=" <?= $data_pendaftar->telp; ?>">
                                            </div>
                                        </div>

                                        <!-- <div class="row row-space">
                                                <div class="col-10">
                                                    <label class="label">PHOTO KARTU IDENTITAS</label>
                                                    <div class="form-group">
                                                        <div class="col-sm-4">Picture</div>
                                                        <div class="col-sm-10">
                                                            <div class="row">
                                                                <div class="col-sm-9">
                                                                    <div class="custom-file">
                                                                        <input type="file" class="custom-file-input" id="image" name="img_ktp">
                                                                        <label class="custom-file-label" for="image">Choose file</label>
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
                                                    <div class="form-group">
                                                        <div class="col-sm-4">Picture</div>
                                                        <div class="col-sm-10">
                                                            <div class="row">
                                                                <div class="col-sm-9">
                                                                    <div class="custom-file">
                                                                        <input type="file" class="custom-file-input" id="image" name="img_selfie">
                                                                        <label class="custom-file-label" for="image">Choose file</label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> -->
                                        <div class="row row-space">
                                            <div class="col-md-4">
                                                <input type="hidden" name="old_img_ktp" value="<?= $data_pendaftar->img_ktp; ?>">
                                                <img src="<?= base_url('assets/img/daftar/') . $data_pendaftar->img_ktp; ?>" class="card-img">
                                            </div>

                                            <div class="col-md-4">
                                                <input type="hidden" name="old_img_selfie" value="<?= $data_pendaftar->img_selfie; ?>">
                                                <img src="<?= base_url('assets/img/daftar/') . $data_pendaftar->img_selfie; ?>" class="card-img">
                                            </div>
                                        </div>
                                        <div class="row row-space">
                                            <div class="col-12">
                                                <label class="label">REF</label>
                                                <input class="input--style-4" type="text" name="ref" value=" <?= $data_pendaftar->ref; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-10 offset-md-2">
                                                <button type="submit" class="btn btn-primary">Simpan</button>
                                                <a class="btn btn-secondary" href="javascript:history.back()">Kembali</a>
                                            </div>
                                        </div>
                                    </form>
                                </div>
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