<style>

</style>

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LPK KINJADI</title>

    <!-- Bootstrap CSS -->
    <link href="<?= base_url('assets/'); ?>css/front_nav.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css') ?>" />
    <link href="<?= base_url('assets/'); ?>css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="<?= base_url('assets/js/bootstrap.min.js') ?>" />
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/gallery.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

</head>
<header class="header">
    <nav class="navbar navbar-expand-lg fixed-top py-3">
        <div class="container"><a class="navbar-brand" href="<?= base_url('/') ?>"><img src="<?= base_url('assets/'); ?>img/logo5.png"></a> <button class="navbar-toggler" data-target="#navbarResponsive" data-toggle="collapse" type="button"><span class="navbar-toggler-icon"></span></button>
            <button type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler navbar-toggler-right"><i class="fa fa-bars"></i></button>

            <div id="navbarSupportedContent" class="collapse navbar-collapse">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active"><a href="<?= base_url('/') ?>" class="nav-link text-uppercase font-weight-bold">Home <span class="sr-only">(current)</span></a></li>
                    <li class="nav-item"><a href="<?= base_url('gallery') ?>" class="nav-link text-uppercase font-weight-bold">Gallery</a></li>
                    <li class="nav-item"><a href="<?= base_url('about') ?>" class="nav-link text-uppercase font-weight-bold">About</a></li>
                    <li class="nav-item"><a href="<?= base_url('faqs') ?>" class="nav-link text-uppercase font-weight-bold">FAQs</a></li>
                    <li class="nav-item"><a href="<?= base_url('contact') ?>" class="nav-link text-uppercase font-weight-bold">contact</a></li>
                    <li class="nav-item">
                        <a class="btn btn-primary btn-md" target="_blank" href="<?= base_url('/regist') ?>">Daftar</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>
</header>
<!--- End Navigation -->
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
        $(window).on('aria-expanded', 'true', function() {
            if ($(window).scrollTop() < 10) {
                $('.navbar').removeClass('active');
            } else {
                $('.navbar').removeClass('active');
            }
        });
    });
</script>