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
<!-- Begin Page Content -->
<div class="container-fluid">
    <div class="form-group text-right">
        <a data-toggle="modal" data-target="#tambah-data" class="btn btn-primary btn-xs">Tambah</a>
    </div>
    <div class="page-header">
        <h3>Data Transaksi</h3>
    </div>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover" id="table-datatable">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Tgl. Daftar</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                foreach ($daftar as $ldr) {
                ?>
                    <tr>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $ldr->nama ?></td>
                        <td><?php echo $ldr->email ?></td>
                        <td><?php echo date('d F Y', $ldr->date_created); ?></td>
                        <td>
                            <!-- <a data-toggle="modal" data-target="#edit-data" class="btn btn-primary btn-xs">Edit</a> -->
                            <a href="<?php echo base_url() . 'admin/edit_pendaftar/' . $ldr->id; ?>" class="btn btn-primary btn-xs">Edit</a>
                            <a href="#" class="btn btn-danger btn-xs">Hapus</a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
    <!-- Modal Tambah -->
    <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="tambah-data" class="modal fade">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                    <h4 class="modal-title">Tambah Data</h4>
                </div>
                <form class="form-horizontal" action="<?php echo base_url('admin/regist') ?>" method="post" enctype="multipart/form-data" role="form">
                    <div class="modal-body">
                        <div class="row row-space">
                            <div class="col-6">
                                <div class="input-group">
                                    <label class="label">Nama</label>
                                    <input class="input--style-4" type="text" name="nama" value="<?= set_value('nama'); ?>">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="input-group">
                                    <label class="label">EMAIL</label>
                                    <input class="input--style-4" type="text" name="email" value="<?= set_value('email'); ?>">
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-6">
                                <div class="input-group">
                                    <label class="label">NIK KTP</label>
                                    <input class="input--style-4" type="text" name="nik" value="<?= set_value('nik'); ?>">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="input-group">
                                    <label class="label">TEMPAT LAHIR</label>
                                    <input class="input--style-4" type="text" name="tempat_lahir" value="<?= set_value('tempat_lahir'); ?>">
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="m-0 col-5">
                                <div class="input-group">
                                    <label class="label">TANGGAL LAHIR</label>
                                    <div class="input-group-icon">
                                        <input class="input--style-4 js-datepicker" data-date-format="yyyy-mm-dd" type="text" name="tanggal_lahir">
                                        <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="input-group">
                                    <label class="label">USIA SAAT INI</label>
                                    <input class="input--style-4" type="text" name="usia">
                                </div>
                            </div>
                        </div>


                        <div class="input-group">
                            <label class="label">ALAMAT LENGKAP SESUAI KTP</label>
                            <input class="input--style-4" type="text" name="alamat_ktp">
                        </div>

                        <div class="input-group">
                            <label class="label">ALAMAT LENGKAP TEMPAT TINGGAL SAAT INI</label>
                            <input class="input--style-4" type="text" name="alamat_tinggal">
                        </div>


                        <div class="row row-space">
                            <div class="input-group">
                                <label class="label m-3 col-2">AGAMA</label>
                                <div class="rs-select2 js-select-simple select--no-search">
                                    <select name="agama">
                                        <option disabled="disabled" selected="selected">Choose option</option>
                                        <option value="ISLAM">ISLAM</option>
                                        <option value="KRISTEN">KRISTEN</option>
                                        <option value="KATOLIK">KATOLIK</option>
                                        <option value="HINDU">HINDU</option>
                                        <option value="BUDHA">BUDHA</option>
                                        <option value="KONGHUCU">KONGHUCU</option>
                                    </select>
                                    <div class="select-dropdown"></div>
                                </div>
                            </div>

                            <!-- <div class="input-group">
                                <label class="label m-2 col-4">JENIK KELAMIN</label>
                                <div class="p-t-10">
                                    <label class="radio-container m-r-45" value="PRIA">LAKI-LAKI
                                        <input type="radio" name="jk">
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="radio-container" value="WANITA">PEREMPUAN
                                        <input type="radio" name="jk">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                            </div> -->

                            <div class="input-group">
                                <label class="label m-3 col-3">JENIS KELAMIN</label>
                                <div class="rs-select2 js-select-simple select--no-search">
                                    <select name="jk">
                                        <option disabled="disabled" selected="selected">Choose option</option>
                                        <option value="PRIA">PRIA</option>
                                        <option value="WANITA">WANITA</option>

                                    </select>
                                    <div class="select-dropdown"></div>
                                </div>
                            </div>
                        </div>


                        <div class="row row-space">
                            <div class="col-6">
                                <div class="input-group">
                                    <label class="label">BERAT BADAN (KG)</label>
                                    <input class="input--style-4" type="text" name="bb">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="input-group">
                                    <label class="label">TINGGI BADAN (CM)</label>
                                    <input class="input--style-4" type="text" name="tb">
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="m-0 col-5">
                                <div class="input-group">
                                    <label class="label">PENDIDIKAN TERAKHIR</label>
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select name="pendidikan">
                                            <option disabled="disabled" selected="selected ">Choose option</option>
                                            <option value="SMP">SMP</option>
                                            <option value="SMK">SMK</option>
                                            <option value="SMA">SMA</option>
                                            <option value="DIPLOMA">DIPLOMA</option>
                                            <option value="SARJANA">SARJANA</option>

                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="input-group">
                                    <label class="label">JURUSAN</label>
                                    <input class="input--style-4" type="text" name="jurusan">
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-6">
                                <label class="label">NOMER TELP</label>
                                <input class="input--style-4" type="text" name="telp">
                            </div>
                        </div>
                        <div class="row row-space">
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
                        </div>
                        <div class="row row-space">
                            <div class="col-12">
                                <label class="label">REF</label>
                                <input class="input--style-4" type="text" name="ref">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-info" type="submit"> Simpan&nbsp;</button>
                            <button type="button" class="btn btn-warning" data-dismiss="modal"> Batal</button>
                        </div>
                    </div>

            </div>

            </form>

        </div>
    </div>
    <!-- END Modal Tambah -->


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