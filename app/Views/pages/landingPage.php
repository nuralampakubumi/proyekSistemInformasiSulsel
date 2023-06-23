<?= $this->extend('layout/template_user'); ?>


<?= $this->section('content'); ?>

<div class="container-fluid py-5 bg-dark hero-header mb-5">
    <div class="container my-5 py-5">
        <div class="row align-items-center g-5">
            <div class="col-lg-6 text-center text-lg-start">
                <h1 class="display-5 text-white animated slideInLeft"><br />BAPPELITBANGDA SULSEL</h1>
                <br />
                <h3 class="text-primary m-0">Let's Join</h3>
                <br />
                <a href="<?= base_url('home/daftar') ?> " class="btn btn-primary py-sm-3 px-sm-5 me-3 animated slideInLeft">Daftar
                    Sekarang</a>
            </div>
            <div class="col-lg-6 text-center text-lg-end overflow-hidden">
                <img class="img-fluid" src="<?= base_url('assets/img/logo.png'); ?>" alt="image" />
            </div>
        </div>
    </div>
</div>
</div>
<!-- Navbar & Hero End -->


<!-- Service Start -->
<div class="container-fluid py-5">
    <div class="container">
        <div class="row g-4">
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="service-item rounded pt-3">
                    <div class="p-4">
                        <i class="fa fa-3x fa-user-tie text-primary mb-4"></i>
                        <h5>Title</h5>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quisquam, delectus.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="service-item rounded pt-3">
                    <div class="p-4">
                        <i class="fa fa-3x fa-user-tie text-primary mb-4"></i>
                        <h5>Title</h5>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quisquam, delectus.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="service-item rounded pt-3">
                    <div class="p-4">
                        <i class="fa fa-3x fa-user-tie text-primary mb-4"></i>
                        <h5>Title</h5>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quisquam, delectus.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                <div class="service-item rounded pt-3">
                    <div class="p-4">
                        <i class="fa fa-3x fa-user-tie text-primary mb-4"></i>
                        <h5>Title</h5>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quisquam, delectus.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Service End -->

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

<!-- Testimonial Start -->
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">
        <div class="text-center">
            <h5 class="section-title ff-secondary text-center text-primary fw-normal">Title</h5>
            <h1 class="mb-5">Sub Title</h1>
        </div>
        <div class="owl-carousel testimonial-carousel">
            <div class="testimonial-item bg-transparent border rounded p-4">
                <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro, dolores.</p>
                <div class="d-flex align-items-center">
                    <img class="img-fluid flex-shrink-0 rounded-circle" src="<?= base_url('assets/img/testimonial-1.jpg'); ?>" style="width: 50px; height: 50px" />
                    <div class="ps-3">
                        <h5 class="mb-1">Name</h5>
                        <small>Profession</small>
                    </div>
                </div>
            </div>
            <div class="testimonial-item bg-transparent border rounded p-4">
                <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro, dolores.</p>
                <div class="d-flex align-items-center">
                    <img class="img-fluid flex-shrink-0 rounded-circle" src="<?= base_url('assets/img/testimonial-2.jpg'); ?>" style="width: 50px; height: 50px" />
                    <div class="ps-3">
                        <h5 class="mb-1">Name</h5>
                        <small>Profession</small>
                    </div>
                </div>
            </div>
            <div class="testimonial-item bg-transparent border rounded p-4">
                <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro, dolores.</p>
                <div class="d-flex align-items-center">
                    <img class="img-fluid flex-shrink-0 rounded-circle" src="<?= base_url('assets/img/testimonial-3.jpg'); ?>" style="width: 50px; height: 50px" />
                    <div class="ps-3">
                        <h5 class="mb-1">Name</h5>
                        <small>Profession</small>
                    </div>
                </div>
            </div>
            <div class="testimonial-item bg-transparent border rounded p-4">
                <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro, dolores.</p>
                <div class="d-flex align-items-center">
                    <img class="img-fluid flex-shrink-0 rounded-circle" src="<?= base_url('assets/img/testimonial-4.jpg'); ?>" style="width: 50px; height: 50px" />
                    <div class="ps-3">
                        <h5 class="mb-1">Name</h5>
                        <small>Profession</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Testimonial End -->

<?= $this->endSection(); ?>