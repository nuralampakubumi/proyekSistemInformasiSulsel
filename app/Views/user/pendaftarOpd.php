<?= $this->extend('layout/template_admin'); ?>

<?= $this->section('content'); ?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Pendaftar OPD</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Pendaftar OPD</a></li>
                        <!-- <li class="breadcrumb-item active">Blank Page</li> -->
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">daftar Pendaftar OPD</h3>
                        </div>
                        <!-- /.card-header -->
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
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Ketua</th>
                                        <th>Judul</th>
                                        <th>Link Proposal</th>
                                        <th>Status</th>
                                        <th>action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($result as $key => $value) : ?>
                                        <tr>
                                            <td><?= $key + 1 ?> </td>
                                            <td><?= $value->nama ?> </td>
                                            <td> <?= $value->judul ?></td>
                                            <td> <?= $value->link ?></td>
                                            <td>
                                                <?php if ($value->status == 'lolos') : ?>
                                                    <span class="badge text-bg-primary"><?= $value->status ?></span>
                                                <?php endif; ?>
                                                <?php if ($value->status == 'tidak_lolos') : ?>
                                                    <span class="badge text-bg-danger"><?= $value->status ?></span>
                                                <?php endif; ?>
                                            </td>
                                            <td>
                                                <a href="<?= site_url('user/editStatusOpd/' . $value->id) ?> " class="btn btn-info">Tindakan</a>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>

                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>

<?= $this->endSection(); ?>