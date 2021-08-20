<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">

    <title>Register</title>
</head>

<body>
    <div class="container">
        <div class="row justify-content-md-center">

            <div class="col-6">
                <h1>Sign Up</h1>
                <?php if (isset($validation)) : ?>
                    <div class="alert alert-danger"><?= $validation->listErrors() ?></div>
                <?php endif; ?>
                <form action="/regist/save" method="post">
                    <div class="mb-3">
                        <label for="InputForEmail" class="form-label">Email</label>
                        <input type="email" name="email" class="form-control" id="InputForEmail" value="<?= set_value('email') ?>">
                    </div>
                    <div class="mb-3">
                        <label for="InputForName" class="form-label">Nama Lengkap</label>
                        <input type="text" name="name" class="form-control" id="InputForName" value="<?= set_value('name') ?>">
                    </div>
                    <div class="mb-3">
                        <label for="InputForName" class="form-label">NIK KTP</label>
                        <input type="text" name="name" class="form-control" id="InputForName" value="<?= set_value('nik') ?>">
                    </div>
                    <div class="mb-3">
                        <label for="InputForName" class="form-label">TEMPAT LAHIR</label>
                        <input type="text" name="name" class="form-control" id="InputForName" value="<?= set_value('tempat_lahir') ?>">
                    </div>
                    <div class="mb-3">
                        <div class="form-group">
                            <label>Tanggal Lahir</label>
                            <input type="date" name="tgl_pinjam" class="form-control" style="padding:0px 10px;">
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="InputForName" class="form-label">USIA SAAT INI</label>
                        <input type="text" name="name" class="form-control" id="InputForName" value="<?= set_value('usia') ?>">
                    </div>
                    <div class="mb-3">
                        <label for="InputForName" class="form-label">ALAMAT LENGKAP SESUAI KTP</label>
                        <input type="text" name="name" class="form-control" id="InputForName" value="<?= set_value('alamat_ktp') ?>">
                    </div>
                    <div class="mb-3">
                        <label for="InputForName" class="form-label">ALAMAT LENGKAP TEMPAT TINGGAL SAAT INI</label>
                        <input type="text" name="name" class="form-control" id="InputForName" value="<?= set_value('alamat_tinggal') ?>">
                    </div>
                    <div class="mb-3">
                        <label for="InputForName" class="form-label">AGAMA</label>
                        <input type="text" name="name" class="form-control" id="InputForName" value="<?= set_value('agama') ?>">
                    </div>
                    <div class="form-group">
                        <label>JENIS KELAMIN</label>
                        <select name="jk" class="form-control">
                            <option value="" <?= set_select('jk', '', TRUE); ?>>-JK-</option>
                            <option value="LAKI - LAKI" <?= set_select('jk', 'LAKI - LAKI'); ?>>LAKI - LAKI</option>
                            <option value="PEREMPUAN" <?= set_select('jk', 'PEREMPUAN'); ?>>PEREMPUAN</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="InputForName" class="form-label">BERAT BADAN (KG)</label>
                        <input type="text" name="name" class="form-control" id="InputForName" value="<?= set_value('bb') ?>">
                    </div>
                    <div class="mb-3">
                        <label for="InputForName" class="form-label">TINGGI BADAN (CM)</label>
                        <input type="text" name="name" class="form-control" id="InputForName" value="<?= set_value('tb') ?>">
                    </div>
                    <div class="mb-3">
                        <label for="InputForName" class="form-label">PENDIDIKAN TERAKHIR</label>
                        <input type="text" name="name" class="form-control" id="InputForName" value="<?= set_value('pendidikan') ?>">
                    </div>
                    <div class="mb-3">
                        <label for="InputForName" class="form-label">JURUSAN</label>
                        <input type="text" name="name" class="form-control" id="InputForName" value="<?= set_value('jurusan') ?>">
                    </div>
                    <div class="mb-3">
                        <label for="InputForName" class="form-label">NOMER TELEPHONE</label>
                        <input type="text" name="name" class="form-control" id="InputForName" value="<?= set_value('no_tlp') ?>">
                    </div>
                    <div class="mb-3">
                        <label for="InputForName" class="form-label">PHOTO KARTU IDENTITAS</label>
                        <input type="text" name="name" class="form-control" id="InputForName" value="<?= set_value('img_ktp') ?>">
                    </div>
                    <div class="mb-3">
                        <label for="InputForName" class="form-label">PHOTO DIRI</label>
                        <input type="text" name="name" class="form-control" id="InputForName" value="<?= set_value('img_diri') ?>">
                    </div>
                    <div class="mb-3">
                        <label for="InputForName" class="form-label">REFERENSI</label>
                        <input type="text" name="name" class="form-control" id="InputForName" value="<?= set_value('ref') ?>">
                    </div>
                    <button type="submit" class="btn btn-primary">Register</button>
                </form>
            </div>

        </div>
    </div>

    <!-- Popper.js first, then Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>

</html>