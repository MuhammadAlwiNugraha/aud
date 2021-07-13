<!-- Begin Page Content -->
<div class="container-fluid">

    <div class="row mb-5">
        <?php foreach ($daftar as $ldr) : ?>
            <div class="col-md-4">

                <div class="card mt-3 mb-3">

                    <div class="card-header">
                        <h5 class="text-center">
                            <strong class="">asdjskad</strong>
                        </h5>
                    </div>
                    <div class="col-md-4">
                        <img src="<?php echo base_url() . '/assets/img/daftar/' . $ldr->img_ktp; ?>" width="80" height="80" class="card-img" alt="gambar tidak ada">
                        <img src="<?php echo base_url() . '/assets/img/daftar/' . $ldr->img_selfie; ?>" width="80" height="80" class="card-img" alt="gambar tidak ada">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title"><?= $ldr->nama ?></h5>
                        <p>Nama : <?php echo $ldr->nama ?></p>
                        <p>email : <?php echo $ldr->email ?></p>
                        <p>nik : <?php echo $ldr->nik ?></p>
                        <p>tempat lahir : <?php echo $ldr->tempat_lahir ?></p>
                        <p>tanggal lahir : <?php echo $ldr->tanggal_lahir ?></p>
                        <p>usia : <?php echo $ldr->usia ?></p>
                        <p>alamat ktp : <?php echo $ldr->alamat_ktp ?></p>
                        <p>alamat tinggal : <?php echo $ldr->alamat_tinggal ?></p>
                        <p>agama : <?php echo $ldr->agama ?></p>

                    </div>

                </div>

            </div>
        <?php endforeach; ?>

    </div>