<?= $this->extend('layout/template_admin'); ?>

<?= $this->section('content'); ?>

<div class="content">

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
                <form action="<?= site_url('admin/updateDataSma') ?> " method="POST" autocomplete="off">
                    <?= csrf_field(); ?>
                    <h3 class="mb-5">Form Pendaftaran Lomba Untuk SMA/SMK/Sederajat</h3>
                    <input type="hidden" name="id" value="<?php echo $record->id; ?>">
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama Ketua Tim</label>
                        <input type="text" class="form-control" value="<?= $record->nama ?> " name="nama" required />
                    </div>
                    <div class="mb-3">
                        <label for="asal_sekolah" class="form-label">Nama SMA/SMK/Sederajat</label>
                        <input type="text" class="form-control" value="<?= $record->asal_sekolah ?> " name="asal_sekolah" required />
                    </div>
                    <div class="mb-3">
                        <label for="no_hp" class="form-label">Nomer Hp/Whatsapp</label>
                        <input type="text" class="form-control" value="<?= $record->no_hp ?> " name="no_hp" required />
                    </div>
                    <label for="floatingTextarea">Judul Inovasi</label>
                    <div class="mb-3">
                        <textarea class="form-control" name="judul" required><?= $record->judul ?></textarea>
                    </div>
                    <label for="ringkasan" class="form-label">Ringkasan Inovasi</label>
                    <div class="mb-3">
                        <textarea class="form-control" name="ringkasan" style="height: 100px" required><?= $record->ringkasan ?></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="link_proposal" class="form-label">Masukkan alamat/link file proposal
                            inovasi</label>
                        <input type="text" class="form-control" value="<?= $record->link ?> " name="link" required />
                        <div id="emailHelp" class="form-text">Google Drive, etc.</div>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>

                </form>
            </div>
        </div>
    </div>
</div>


<?= $this->endSection(); ?>