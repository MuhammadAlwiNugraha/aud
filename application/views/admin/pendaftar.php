<script src="<?= base_url('assets/'); ?>vendor/jquery/jquery.min.js"></script>
<link href="<?= base_url('assets/'); ?>vendor/select2/select2.min.css" rel="stylesheet" media="all">
<link href="<?= base_url('assets/'); ?>vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">
<link href="<?= base_url('assets/'); ?>vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
<link href="<?= base_url('assets/'); ?>vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">

<!-- Main CSS-->
<link href="<?= base_url('assets/'); ?>css/main.css" rel="stylesheet" media="all">


<link href="<?= base_url('assets/'); ?>vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
<!-- Begin Page Content -->

<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb ">
            <li class="breadcrumb-item"><a>Data Pendaftar</a></li>
            <li class="breadcrumb-item active" aria-current="page">List Data</li>
        </ol>

    </nav>
    <div class="row">
        <div class="col-md-12">
            <?= form_error('menu', '<div class="alert alert-danger" role="alert">', '</div>'); ?>

            <?= $this->session->flashdata('message'); ?>

            <a href="" class="btn btn-primary mb-3" data-toggle="modal" data-target="#tambah-data">tambah-data</a>

            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover" id="tablePendaftar" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th scope="col">ACTION</th>
                                    <th scope="col">NAMA</th>
                                    <th scope="col">NIK</th>
                                    <th scope="col">EMAIL</th>
                                    <th scope="col">DATE CREATED</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($data_pendaftar as $row) : ?>
                                    <tr>
                                        <td>
                                            <a href="<?= site_url('admin/edit/' . $row->id) ?>" class="btn btn-outline btn-circle btn-sm purple"><i class="fa fa-edit"></i> </a>
                                            <a href="<?= base_url('admin/edit/' . $row->id) ?>" data-toggle="modal" data-target="#view-data<?= $row->id; ?>" class="btn btn-outline btn-circle btn-sm purple"><i class="fa fa-eye"></i> </a>
                                            <a href="<?= base_url('admin/delete/' . $row->id) ?>" data-toggle="modal" data-target="#hapus-data<?= $row->id; ?>" class="btn btn-outline btn-circle btn-sm purple"><i class="fa fa-trash"></i> </a>
                                        </td>
                                        <td><?= $row->nama ?></td>
                                        <td><?= $row->nik ?></td>
                                        <td><?= $row->email ?></td>
                                        <td><?php echo date('d F Y H:i:s', $row->date_created); ?></td>

                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>


        </div>
    </div>



</div>

<!-- Modal dialog view data-->

<?php $no = 0;
foreach ($data_pendaftar as $i) : $no++; ?>
    <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="view-data<?= $i->id; ?>" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">View Data, <?= $i->nama; ?></h4>
                    <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>

                </div>
                <form action="<?php echo site_url('admin/edit'); ?>" method="post">
                    <div class="modal-body">
                        <div class="card mb-8 col-lg-13">
                            <div class="row no-gutters">
                                <div class="col-md-6">
                                    <img src="<?= base_url('assets/img/daftar/') . $i->img_ktp; ?>" class="card-img">
                                </div>
                                <div class="col-md-6">
                                    <img src="<?= base_url('assets/img/daftar/') . $i->img_selfie; ?>" class="card-img">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <input type="hidden" class="form-control" id="id" name="id" value=" <?= $i->id; ?>">
                                        <h5 class="card-title"><?= $i->nama; ?></h5>
                                        <p class="card-text"><?= $i->email; ?></p>
                                        <p class="card-text"><small class="text-muted">Member since <?php echo date('d F Y H:i:s', $i->date_created); ?></small></p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php endforeach; ?>

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

<?php
foreach ($data_pendaftar as $i) : ?>
    <!-- ============ MODAL HAPUS BARANG =============== -->
    <div class="modal fade" id="hapus-data<?= $i->id; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title" id="myModalLabel">Hapus Data, <?= $i->nama; ?></h3>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                </div>
                <form class="form-horizontal" method="post" action="<?php echo site_url('admin/delete'); ?>">
                    <div class="modal-body">
                        <p>Anda yakin mau menghapus <b><?php echo $i->nama; ?></b>?</p>
                    </div>
                    <div class="modal-footer">
                        <input type="hidden" id="id" name="id" value=" <?= $i->id; ?>">
                        <button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
                        <button class="btn btn-danger">Hapus</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php endforeach; ?>
<!-- Jquery JS-->
<script src="<?= base_url('assets/'); ?>vendor/jquery/jquery.min.js"></script>

<script src="<?= base_url('assets/'); ?>vendor/select2/select2.min.js"></script>
<script src="<?= base_url('assets/'); ?>vendor/datepicker/moment.min.js"></script>
<script src="<?= base_url('assets/'); ?>vendor/datepicker/daterangepicker.js"></script>
<script src="<?= base_url('assets/'); ?>js/global.js"></script>
<!-- Page level plugins -->
<script src="<?= base_url('assets/'); ?>vendor/datatables/jquery.dataTables.min.js" defer></script>
<script src="<?= base_url('assets/'); ?>vendor/datatables/dataTables.bootstrap4.min.js"></script>

<!-- Page level custom scripts -->
<script src="<?= base_url('assets/'); ?>js/demo/datatables-demo.js"></script>

<script>
    $(document).ready(function() {
        $('#tablePendaftar').dataTable({
            "paging": true,
            "lengthChange": true,
            "searching": true,
            "ordering": true,
            "info": true,
            "autoWidth": false
        });
    });

    $('.custom-file-input').on('change', function() {
        let fileName = $(this).val().split('\\').pop();
        $(this).next('.custom-file-label').addClass("selected").html(fileName);
    });
</script>