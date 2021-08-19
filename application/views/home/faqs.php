<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title; ?></title>

    <!-- Bootstrap CSS -->
</head>

<body>
    <div class="jumbotron JumboHeaderImg">
        <div class="container">
            <div class="col-12 text-center mt-5">
                <h1>FAQs</h1>
            </div>
            <div class="accordion" id="accordionExample">
                <ul class="">
                    <h4>Pertanyaan Umum</h4>
                </ul>
                <div class="card">
                    <div class="card-header" id="headingOne">
                        <h2 class="mb-0">
                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                Apa itu LPK Kinjadi
                            </button>
                        </h2>
                    </div>

                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                        <div class="card-body">
                            LPK Kinjadi merupakan Lembaga Pelatihan dan Keterampilan yang memiliki program magang ke Jepang, yaitu program yang di peruntukkan bagi
                            pemuda pemudi Indonesia untuk melakukan magang di perusahaan penerima di Jepang dalam kurun waktu tertentu.
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingTwo">
                        <h2 class="mb-0">
                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Siapa saja yang dapat mengikuti program di LPK KINJADI?
                            </button>
                        </h2>
                    </div>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                        <div class="card-body">
                            Peserta mulai dari Lulusan SMA sampai lulusan Sarjana/S1 dapat
                            mengikuti program-program yang telah tersedia di LPK KINJADI. Program-programnya dapat kamu tanyakan <a target="_blank" href="http://api.whatsapp.com/send?phone=6281222137799&text=Hallo%20Kak,%20Pengen%20tau%20lebih%20lanjut%20tentang%20program%20magang%20di%20LPK%20Kinjadi">
                                disini!</a>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingThree">
                        <h2 class="mb-0">
                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Bagaimana LPK KINJADI meningkatkan pembelajaran kepada para Peserta?
                            </button>
                        </h2>
                    </div>
                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                        <div class="card-body">
                            LPK KINJADI selalu berusaha meningkatkan mutu
                            pembelajaran baik dari fasilitas maupun cara belajar demi kenyamanan selama pembelajaran di LPK KINJADI dan menerapkan
                            mengenai sikap etos kerja sesuai dengan budaya Jepang.
                        </div>
                    </div>
                </div>
            </div>

            <div class="accordion" id="accordionExample">
                <ul class="">
                    <h4>Pendaftaran</h4>
                </ul>
                <div class="card">
                    <div class="card-header" id="headingOne">
                        <h2 class="mb-0">
                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne1" aria-expanded="false" aria-controls="collapseOne">
                                Bagaimana cara mendaftar di LPK KINJADI
                            </button>
                        </h2>
                    </div>

                    <div id="collapseOne1" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                        <div class="card-body">
                            Daftarkan melalui kontak sosial media yang tersedia
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingOne">
                        <h2 class="mb-0">
                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne1" aria-expanded="false" aria-controls="collapseOne">
                                Program apa saja yang ada di LPK KINJADI
                            </button>
                        </h2>
                    </div>

                    <div id="collapseOne1" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                        <div class="card-body">
                            Terdapat tiga program utama yang ada di LPK KINJADI yaitu JISSHUSEI, NIHONGO GAKKOU, TOKUTEI GINOU.
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- Jquery dan Bootsrap JS -->
    <script src="<?= base_url('assets/'); ?>vendor/jquery/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!--  -->
</body>

</html>