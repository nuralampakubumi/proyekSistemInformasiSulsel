<?= $this->extend('layout/template_user'); ?>

<?= $this->section('content'); ?>

<div class="container-fluid py-5 bg-dark mb-5"></div>
</div>

<div class="container">
    <div class="row pt-5 d-flex justify-content-center">
        <div class="col-lg-7 border border-2 border-primary p-5">
            <?php if (session()->getFlashdata('pesan')) : ?>
                <div class="alert alert-success" role="alert">
                    <?= session()->getFlashdata('pesan'); ?>
                </div>
            <?php endif; ?>
            <form action="<?= base_url('home/addDataOpd') ?> " method="POST">
                <?= csrf_field(); ?>
                <h3 class="mb-5">Form Pendaftaran Lomba Untuk OPD</h3>
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama</label>
                    <input type="text" class="form-control" id="nama" name="nama" required autofocus value="<?= old('nama'); ?>" />
                </div>
                <div class="mb-3">
                    <label for="nama_instansi_opd" class="form-label">Nama Instansi OPD</label>
                    <input type="text" class="form-control" id="nama_instansi_opd" name="nama_instansi_opd" required value="<?= old('nama_instansi_opd'); ?>" />
                </div>
                <div class="mb-3">
                    <label for="no_hp" class="form-label">Nomer Hp/Whatsapp</label>
                    <input type="text" class="form-control" id="no_hp" name="no_hp" required value="<?= old('no_hp'); ?>" />
                </div>
                <label for="floatingTextarea">Judul Inovasi</label>
                <div class="mb-3">
                    <textarea class="form-control" placeholder="Judul Inovasi" name="judul" required value="<?= old('judul'); ?>"></textarea>
                </div>
                <label for="ringkasan" class="form-label">Ringkasan Inovasi</label>
                <div class="mb-3">
                    <textarea class="form-control" placeholder="Ringkasan Inovasi" name="ringkasan" style="height: 100px" required value="<?= old('ringkasan'); ?>"></textarea>
                </div>
                <div class="mb-3">
                    <label for="tahun_penerapan" class="form-label">Tahun Penerapan</label>
                    <input type="text" class="form-control" id="tahun_penerapan" name="tahun_penerapan" required value="<?= old('tahun_penerapan'); ?>" />
                </div>
                <div class="mb-3">
                    <label for="link_proposal" class="form-label">Masukkan alamat/link file proposal
                        inovasi</label>
                    <input type="text" class="form-control" name="link" required value="<?= old('link'); ?>" />
                    <div id="emailHelp" class="form-text">Google Drive, etc.</div>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>


<?= $this->endSection(); ?>