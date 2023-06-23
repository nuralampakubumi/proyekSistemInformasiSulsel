<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title><?= $title; ?></title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="sulsel, bapelitbangda, gubernur, lomba inovasi, sistem informasi, pendaftaran" name="keywords" />
    <meta content="Pendaftaran Lomba Inovasi, informasi Lomba inovasi, sistem informasi, sistem informasi lomba inovasi, lomba inovasi, sulsel" name="description" />

    <!-- Favicon -->
    <link href="logo.ico" rel="icon" />

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&family=Pacifico&display=swap" rel="stylesheet" />

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />

    <!-- Libraries Stylesheet -->
    <link href="<?= base_url('assets/lib/animate/animate.min.css'); ?>" rel="stylesheet" />
    <link href="<?= base_url('assets/lib/owlcarousel/assets/owl.carousel.min.css'); ?> " rel="stylesheet" />
    <link href="<?= base_url('assets/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css'); ?>" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="<?= base_url('assets/css/bootstrap.min.css'); ?>" rel="stylesheet" />

    <!-- Template Stylesheet -->
    <link href="<?= base_url('assets/css/style.css'); ?>" rel="stylesheet" />
</head>

<body>
    <div class="container-fluid bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->

        <!-- Navbar & Hero Start -->
        <div class="container-fluid position-relative p-0">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark px-4 px-lg-5 py-3 py-lg-0">
                <a href="" class="navbar-brand p-0">
                    <h1 class="text-primary m-0">Lomba Inovasi</h1>
                    <!-- <img src="img/logo.png" alt="Logo"> -->
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0 pe-4">
                        <a href="<?= base_url(); ?>" class="nav-item nav-link active">HOME</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">PENDAFTARAN</a>
                            <div class="dropdown-menu m-0">
                                <a href="<?= base_url('pendaftaran_Sma'); ?>" class="dropdown-item">SMA/SMK/SEDERAJAT</a>
                                <a href="<?= base_url('pendaftaran_Opd'); ?>" class="dropdown-item">OPD</a>
                            </div>
                        </div>
                        <a href="<?= base_url('panduan'); ?>" class="nav-item nav-link">PANDUAN</a>
                    </div>
                    <a href="<?= base_url('/login'); ?>" class="btn btn-primary py-2 px-4">LOGIN</a>
                </div>
            </nav>


            <?= $this->renderSection('content') ?>


            <!-- Footer Start -->
            <div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
                <div class="container py-5">
                    <div class="row g-5 d-flex justify-content-center">
                        <div class="col-lg-3 col-md-6">
                            <h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4">Title</h4>
                            <a class="btn btn-link" href="<?= base_url('home/index') ?> ">Home</a>
                            <a class="btn btn-link" href="<?= base_url('home/daftar') ?> ">Pendaftaran</a>
                            <a class="btn btn-link" href="<?= base_url('home/panduan') ?> ">Panduan</a>
                            <a class="btn btn-link" href="<?= base_url('home/login') ?> ">Login</a>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4">Contact</h4>
                            <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>JL. Jend Urip Sumoharjo, No. 269, Makasar, Sinrijala, Panakkukang, Makassar City, South Sulawesi 90232</p>
                            <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>0411453486</p>
                            <p class="mb-2"><i class="fa fa-envelope me-3"></i>Email</p>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4">Opening</h4>
                            <h5 class="text-light fw-normal">Monday - Saturday</h5>
                            <p>08AM - 04PM</p>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="copyright">
                        <div class="row d-flex justify-content-center">
                            <div class="col-md-6 text-center mb-3 mb-md-0">&copy; <a class="border-bottom" href="#">BAPPELITBANGDA</a>, All Right Reserved.</div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer End -->

            <!-- Back to Top -->
            <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
        </div>


        <!-- JavaScript Unduh -->
        <script>
            function unduhDokumen1() {
                fetch('<?= base_url('assets/download/PANDUAN_PENDAFTARAN.pdf') ?>', {
                        method: 'GET'
                    })
                    .then((response) => response.blob())
                    .then((blob) => {
                        const url = window.URL.createObjectURL(blob);
                        const a = document.createElement('a');
                        a.href = url;
                        a.download = 'PANDUAN_PENDAFTARAN.pdf';
                        document.body.appendChild(a);
                        a.click();
                        document.body.removeChild(a);
                        window.URL.revokeObjectURL(url);
                    })
                    .catch((error) => {
                        console.error('Terjadi kesalahan:', error);
                    });
            }

            function unduhDokumen2() {
                fetch('<?= base_url('assets/download/PANDUAN_PENDAFTARAN.pdf') ?>', {
                        method: 'GET'
                    })
                    .then((response) => response.blob())
                    .then((blob) => {
                        const url = window.URL.createObjectURL(blob);
                        const a = document.createElement('a');
                        a.href = url;
                        a.download = 'PANDUAN_PENDAFTARAN.pdf';
                        document.body.appendChild(a);
                        a.click();
                        document.body.removeChild(a);
                        window.URL.revokeObjectURL(url);
                    })
                    .catch((error) => {
                        console.error('Terjadi kesalahan:', error);
                    });
            }
        </script>

        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="<?= base_url('assets/lib/wow/wow.min.js'); ?>"></script>
        <script src="<?= base_url('assets/lib/easing/easing.min.js'); ?>"></script>
        <script src="<?= base_url('assets/lib/waypoints/waypoints.min.js'); ?>"></script>
        <script src="<?= base_url('assets/lib/counterup/counterup.min.js'); ?>"></script>
        <script src="<?= base_url('assets/lib/owlcarousel/owl.carousel.min.js'); ?>"></script>
        <script src="<?= base_url('assets/lib/tempusdominus/js/moment.min.js'); ?>"></script>
        <script src="<?= base_url('assets/lib/tempusdominus/js/moment-timezone.min.js'); ?>"></script>
        <script src="<?= base_url('assets/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js'); ?>"></script>

        <!-- Template Javascript -->
        <script src="<?= base_url('assets/js/main.js'); ?>"></script>
</body>

</html>