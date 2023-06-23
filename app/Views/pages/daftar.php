<?= $this->extend('layout/template_user'); ?>


<?= $this->section('content'); ?>

<div class="container-fluid py-5 bg-dark hero-header mb-5">
    <div class="container text-center my-5 pt-5 pb-4">
        <h1 class="display-3 text-white mb-3 animated slideInDown">Daftar Sekarang</h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb justify-content-center text-uppercase">
                <li class="breadcrumb-item"><a href="<?= base_url('home/pendaftaran_Sma') ?> ">SMA/SMK</a></li>
                <li class="breadcrumb-item"><a href="<?= base_url('home/pendaftaran_Opd') ?>">OPD</a></li>
            </ol>
        </nav>
    </div>
</div>
</div>
<!-- Navbar & Hero End -->


<!-- About Start -->
<div class="container-fluid py-5">
    <div class="container">
        <div class="row g-5 align-items-center">
            <div class="col-lg-6">
                <div class="row g-3">
                    <div class="col-6 text-start">
                        <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.1s" src="<?= base_url('assets/img/download (1).jpg'); ?>" alt="image" />
                    </div>
                    <div class="col-6 text-start">
                        <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.3s" src="<?= base_url('assets/img/images.jpg'); ?>" style="margin-top: 25%" alt="image" />
                    </div>
                    <div class="col-6 text-end">
                        <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.5s" src="<?= base_url('assets/img/images (1).jpg'); ?>" alt="image" />
                    </div>
                    <div class="col-6 text-end">
                        <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.7s" src="<?= base_url('assets/img/images (2).jpg'); ?>" alt="image" />
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <h5 class="section-title ff-secondary text-start text-primary fw-normal">About Us</h5>
                <h1 class="mb-4">Sub Title</h1>
                <p class="mb-4">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam accusamus, fugiat quae consectetur
                    quas obcaecati veritatis. Aperiam laudantium asperiores quas eos sequi, consectetur rerum expedita.
                    Expedita qui beatae eius
                    quo! Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis ab saepe fugit neque mollitia
                    expedita? Quidem cumque minus eius quis nihil accusantium atque vitae, repudiandae culpa?
                    Consequatur itaque perspiciatis
                    perferendis.
                </p>
                <p class="mb-4">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam molestias est enim itaque dolor odio
                    quia natus iusto optio exercitationem nostrum, sequi, libero, dolores error delectus modi molestiae
                    accusantium dignissimos?.
                </p>
            </div>
        </div>
    </div>
</div>
<!-- About End -->

<?= $this->endSection(); ?>