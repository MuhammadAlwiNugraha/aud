<style>
    .kop_nota {
        color: black;
        line-height: 1.2;
    }

    .sub1 {
        font-size: 18px;
        font-family: 'Times New Roman', Times, serif;
    }

    .sub2 {
        font-size: 14px;
    }

    .sub3 {
        font-size: 15px;
    }

    .nomor {
        font-size: 20px;
        width: 35%;
        /* transform: rotate(-90deg); */
    }

    .total {
        font-size: 15px;
        font-weight: bold;
    }

    .catatan {
        font-size: 10px;
        text-align: justify;
    }

    .ttd {
        float: right;
    }
</style>

<div class="row">
    <div class="col-lg-7">
        <div class="card sub2">
            <div class="card-body">
                <div class="kop_nota">
                    <table width="100%">
                        <tr>
                            <td rowspan="2" width="30%"><img src="<?php echo 'assets/img/logo555.jpg'; ?>" alt="" width="140" height="140"></td>
                            <td class="sub1"><b>LPK KINJADI</b></td>
                        </tr>
                        <tr>
                            <td>
                                Jl. Buncis No.6, Cikole, Lembang Kabupaten Bandung Barat, Jawa Barat, Indonesia<br>
                                Hp. 0812 8224 1075<br>
                                <b>WA : Hp. 0812 8224 1075 NPWP. 25.687.980.0-403.000</b><br>
                            </td>
                        </tr>
                    </table>
                </div>
                <hr>
                <table width="100%" cellpadding="1" class="sub3">
                    <tr>
                        <td width="13%" style="padding-left: 4px;">Nama</td>
                        <td width="2%">:</td>
                        <td><?= $data->nama; ?></td>
                        <td width="15%">Email</td>
                        <td width="2%">:</td>
                        <td><?= $data->email; ?></td>
                    </tr>
                    <tr>
                        <td style="padding-left: 4px;">NIK</td>
                        <td>:</td>
                        <td><?= $data->nik; ?></td>

                        <td>Tempat Lahir</td>
                        <td>:</td>
                        <td><?= $data->tempat_lahir; ?></td>
                    </tr>
                    <tr>
                        <td style="padding-left: 4px;">Tanggal Lahir</td>
                        <td>:</td>
                        <td><?= $data->tanggal_lahir; ?></td>
                        <td>Usia</td>
                        <td>:</td>
                        <td><?= $data->usia; ?></td>
                    </tr>
                    <tr>
                        <td style="padding-left: 4px;"> Alamat KTP </td>
                        <td>:</td>
                        <td><?= $data->alamat_ktp; ?></td>
                    </tr>
                    <tr>
                        <td style="padding-left: 4px;">Alamat Tinggal </td>
                        <td>:</td>
                        <td> <?= $data->alamat_tinggal; ?></td>
                    </tr>
                    <tr>
                        <td style="padding-left: 4px;">Agama</td>
                        <td>:</td>
                        <td><?= $data->agama; ?></td>
                        <td>Jenis Kelamin</td>
                        <td>:</td>
                        <td><?= $data->jk; ?></td>
                    </tr>
                    <tr>
                        <td style="padding-left: 4px;">Berat Badan</td>
                        <td>:</td>
                        <td><?= $data->bb; ?></td>
                        <td>Tinggi Badan</td>
                        <td>:</td>
                        <td><?= $data->tb; ?></td>
                    </tr>
                    <tr>
                        <td style="padding-left: 4px;">Pendidikan Terakhir</td>
                        <td>:</td>
                        <td><?= $data->pendidikan; ?></td>
                        <td>Jurusan</td>
                        <td>:</td>
                        <td><?= $data->jurusan; ?></td>
                    </tr>
                    <tr>
                        <td style="padding-left: 4px;">Nomer Telp</td>
                        <td>:</td>
                        <td><?= $data->telp; ?></td>
                        <td>Referensi</td>
                        <td>:</td>
                        <td><?= $data->ref; ?></td>
                    </tr>
                    <tr>
                        <td style="padding-left: 4px;">Tanggal Daftar</td>
                        <td>:</td>
                        <td><?php echo date('d F Y H:i:s', $data->date_created); ?></td>

                    </tr>
                    <tr>
                        <td style="padding-left: 4px;">Foto KTP</td>
                        <td>:</td>
                        <td></td>
                        <td>Foto Selfie</td>
                        <td>:</td>
                        <td></td>
                    </tr>

                </table>
            </div>
        </div>
    </div>
</div>

<table width="100%" cellpadding="1">
    <tr>
        <td style="padding-left: 4px;">
            <img src="<?= base_url('assets/img/daftar/') . $data->img_ktp; ?>" alt="" width=" 240" height="240">
        </td>
        <td style="padding-left: 8px;">
            <img src="<?= base_url('assets/img/daftar/') . $data->img_selfie; ?>" alt="" width=" 240" height="240">
        </td>
    </tr>
</table>
<div class="ttd" style="font-size:15px; padding-top: 1rem;">
    <b>Hormat Kami,</b><br>
</div>
</div>
</div>
</div>
</div>
</div>