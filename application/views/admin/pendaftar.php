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

<!-- Bootstrap 4.5.2-->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<!-- Fontawesome 5.15.3-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<!-- Datatables -->
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" integrity="sha512-RXf+QSDCUQs5uwRKaDoXt55jygZZm2V++WUZduaU/Ui/9EGp3f/2KZVahFZBKGH0s774sd3HmrhUy+SgOFQLVQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js" defer></script>
<script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js"></script>

<div class="container-fluid">

    <h3><?= $title ?></h3>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb ">
            <li class="breadcrumb-item"><a>Data Pendaftar</a></li>
            <li class="breadcrumb-item active" aria-current="page">List Data</li>
        </ol>

    </nav>
    <div class="row">
        <div class="col-md-12">
            <div mb-2>
                <!-- Menampilkan flashh data (pesan saat data berhasil disimpan)-->
                <?php if ($this->session->flashdata('message')) :
                    echo $this->session->flashdata('message');
                endif; ?>
            </div>
            <a class="btn btn-primary mb-2" data-toggle="modal" data-target="#tambah-data">Tambah Data</a>
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover" id="tablePendaftar">


                            <thead>
                                <tr class="table-success">
                                    <th></th>
                                    <th>NAMA</th>
                                    <th>NIK</th>
                                    <th>EMAIL</th>
                                    <th>DATE CREATED</th>
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

<!-- Vendor JS-->
<script src="<?= base_url('assets/'); ?>vendor/select2/select2.min.js"></script>
<script src="<?= base_url('assets/'); ?>vendor/datepicker/moment.min.js"></script>
<script src="<?= base_url('assets/'); ?>vendor/datepicker/daterangepicker.js"></script>

<!-- Main JS-->
<script src="<?= base_url('assets/'); ?>js/global.js"></script>
<script>
    $(document).ready(function() {
        $('#tablePendaftar').dataTable({
            "bPaginate": true,
            "bLengthChange": true,
            "bFilter": true,
            "bInfo": true,
            "searching": true,
            "bAutoWidth": true
        });
    });

    $('.custom-file-input').on('change', function() {
        let fileName = $(this).val().split('\\').pop();
        $(this).next('.custom-file-label').addClass("selected").html(fileName);
    });
</script>