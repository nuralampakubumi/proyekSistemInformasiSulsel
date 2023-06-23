<?= $this->extend('layout/template_admin'); ?>

<?= $this->section('content'); ?>

<div class="content">

    <div class="container">
        <div class="row pt-5 d-flex justify-content-center">
            <div class="col-lg-7 border border-2 border-primary p-5">
                <?php if (session()->getFlashdata('pesan')) : ?>
                    <div class="alert alert-success" role="alert">
                        <?= session()->getFlashdata('pesan'); ?>
                    </div>
                <?php endif; ?>
                <?php if (session()->getFlashdata('error')) : ?>
                    <div class="alert alert-success" role="alert">
                        <?= session()->getFlashdata('error'); ?>
                    </div>
                <?php endif; ?>
                <form action="<?= base_url('admin/addDataOpd') ?> " method="POST">
                    <?= csrf_field(); ?>
                    <h3 class="mb-5">Form Pendaftaran Lomba Untuk OPD</h3>
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" class="form-control" name="nama" required />
                    </div>
                    <div class="mb-3">
                        <label for="nama_instansi_opd" class="form-label">Nama Instansi OPD</label>
                        <input type="text" class="form-control" name="nama_instansi_opd" required />
                    </div>
                    <div class="mb-3">
                        <label for="no_hp" class="form-label">Nomer Hp/Whatsapp</label>
                        <input type="text" class="form-control" name="no_hp" required />
                    </div>
                    <label for="floatingTextarea">Judul Inovasi</label>
                    <div class="mb-3">
                        <textarea class="form-control" name="judul"></textarea>
                    </div>
                    <label for="ringkasan" class="form-label">Ringkasan Inovasi</label>
                    <div class="mb-3">
                        <textarea class="form-control" name="ringkasan" style="height: 100px" required></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="tahun_penerapan" class="form-label">Tahun Penerapan</label>
                        <input type="text" class="form-control" name="tahun_penerapan" required />
                    </div>
                    <div class="mb-3">
                        <label for="link_proposal" class="form-label">Masukkan alamat/link file proposal
                            inovasi</label>
                        <input type="text" class="form-control" name="link" required />
                        <div id="emailHelp" class="form-text">Google Drive, etc.</div>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>

</div>


<?= $this->endSection(); ?>