<?= $this->extend('template/admin'); ?>


<?= $this->section('content'); ?>


<div class="site-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="row mb-2">
                <div class="col-lg-12">
                    <h2 class="fw-bold">Kelola Ulasan</h2>
                </div>
            </div>
        </div>

        <?php if (session()->getFlashdata('success')) { ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <?= session()->getFlashdata('success') ?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        <?php } ?>

        <?php if (session()->getFlashdata('gagal')) { ?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <?= session()->getFlashdata('gagal') ?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        <?php } ?>

        <div class="row justify-content-center">
            <div class="container mt-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Kelola Ulasan</h5>

                        <table id="myTable" class="table table-bordered table-hover" style="width:100%">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Pengguna</th>
                                    <th>Barang</th>
                                    <th>Ulasan</th>
                                    <th>Tanggal Posting</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php foreach ($ulasan as $key => $value) : ?>
                                    <tr>
                                        <td><?= $key + 1 ?></td>
                                        <td><?= $value['nama'] ?></td>
                                        <td><?= $value['nama_barang'] ?></td>
                                        <td><?= $value['ulasan'] ?></td>
                                        <td><?= $value['tanggal'] ?></td>

                                        <td>
                                            <button class="btn btn-danger" data-toggle="modal" data-target="#hapus_ulasan<?= $value['id_ulasan'] ?>">
                                                <i class="bi bi-trash"></i>
                                            </button>

                                        </td>
                                    </tr>

                                    <!-- MODAL EDIT -->
                                    <div class="modal fade" id="hapus_ulasan<?= $value['id_ulasan'] ?>">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">

                                                <!-- Header Modal -->
                                                <div class="modal-header">
                                                    <h4 class="modal-title">Hapus Ulasan</h4>
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                </div>

                                                <form action="<?= base_url('Admin/hapus_ulasan/' . $value['id_ulasan']) ?>" method="post" enctype="multipart/form-data">
                                                    <!-- Isi Modal -->
                                                    <div class="modal-body">
                                                        <h5>Apakah Kamu Yakin?</h5>
                                                    </div>

                                                    <!-- Footer Modal -->
                                                    <div class="modal-footer">

                                                        <button type="sumbit" class="btn btn-info mb-2">
                                                            Hapus Ulasan
                                                        </button>

                                                    </div>

                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>



</div>

<?= $this->endSection(); ?>