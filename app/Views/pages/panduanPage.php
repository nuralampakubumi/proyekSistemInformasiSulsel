<?= $this->extend('layout/template_user'); ?>

<?= $this->section('content'); ?>

<!-- tabel -->
<div class="container-fluid py-5 bg-dark mb-5"></div>
</div>
<div class="container mt-5">
    <h2>Dokumen Panduan</h2>
    <div class="row">
        <div class="col">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama Dokumen</th>
                        <th scope="col">Tahun</th>
                        <th scope="col">Dokumen</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Panduan Pendaftaran</td>
                        <td>2023</td>
                        <td>
                            <button onclick="unduhDokumen1()" class="btn btn-primary">Unduh</button>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Panduan Proposal</td>
                        <td>2023</td>
                        <td>
                            <button onclick="unduhDokumen2()" class="btn btn-primary">Unduh</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- end tabel -->

<?= $this->endSection(); ?>