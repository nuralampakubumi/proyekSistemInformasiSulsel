<?= $this->extend('layout/template_user'); ?>

<?= $this->section('content'); ?>

<div class="container-fluid py-5 bg-dark mb-5"></div>
</div>
<div class="container">
    <div class="row d-flex justify-content-center mt-5">
        <?php if (session()->getFlashdata('error')) : ?>
            <div class="alert alert-danger" role="alert">
                <?= session()->getFlashdata('error'); ?>
            </div>
        <?php endif; ?>
        <div class="col-lg-6 border border-warning p-5">
            <form action="<?= base_url('home/loginLogic') ?> " method="post">
                <?= csrf_field(); ?>
                <div class="mb-3">
                    <label class="form-label">Username</label>
                    <input type="text" class="form-control" name="username" />
                </div>
                <div class="mb-3">
                    <label class="form-label">Password</label>
                    <input type="password" class="form-control" name="password" />
                </div>
                <button type="submit" class="btn btn-primary">Login</button>
            </form>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>