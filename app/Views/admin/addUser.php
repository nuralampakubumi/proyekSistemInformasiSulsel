<?= $this->extend('layout/template_admin'); ?>

<?= $this->section('content'); ?>
<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="row pt-5 d-flex justify-content-center">
                <div class="col-lg-7">

                    <form action="<?= base_url('Admin/addUserLogic') ?> " method="post">
                        <?= csrf_field() ?>
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama</label>
                            <input type="text" class="form-control" name="nama">
                        </div>
                        <div class="mb-3">
                            <label for="usernamee" class="form-label">Username</label>
                            <input type="text" class="form-control" name="username">
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" name="password">
                        </div>
                        <div class="mb-3">
                            <label for="role">Peran</label>
                            <select id="role" name="role">
                                <option value="pilih">Pilih Role</option>
                                <option value="admin">Admin</option>
                                <option value="juri">Juri</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>
<?= $this->endSection(); ?>