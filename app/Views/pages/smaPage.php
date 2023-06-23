<?= $this->extend('layout/template_user'); ?>

<?= $this->section('content'); ?>

<div class="container-fluid py-5 bg-dark mb-5"></div>
</div>

<div class="container">
    <div class="row pt-5 d-flex justify-content-center">
        <div class="col-lg-7 border border-2  border-primary p-5">
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
            <form action="home/addDataSma" method="POST" autocomplete="off">
                <?= csrf_field(); ?>
                <h3 class="mb-5">Form Pendaftaran Lomba Untuk SMA/SMK/Sederajat</h3>
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama Ketua Tim</label>
                    <input type="text" class="form-control" name="nama" required autofocus />
                </div>
                <div class="mb-3">
                    <label for="asal_sekolah" class="form-label">Nama SMA/SMK/Sederajat</label>
                    <input type="text" class="form-control" name="asal_sekolah" required />
                </div>
                <div class="mb-3">
                    <label for="no_hp" class="form-label">Nomer Hp/Whatsapp</label>
                    <input type="text" class="form-control" id="no_hp" name="no_hp" required />
                </div>
                <label for="floatingTextarea">Judul Inovasi</label>
                <div class="mb-3">
                    <textarea class="form-control" placeholder="Judul Inovasi" name="judul" required></textarea>
                </div>
                <label for="ringkasan" class="form-label">Ringkasan Inovasi</label>
                <div class="mb-3">
                    <textarea class="form-control" placeholder="Ringkasan Inovasi" name="ringkasan" style="height: 100px" required></textarea>
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


<?= $this->endSection(); ?>