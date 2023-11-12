<?= $this->extend('template/admin'); ?>


<?= $this->section('content'); ?>


<div class="site-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="row mb-2">
                <div class="col-lg-12">
                    <h2 class="fw-bold">Kelola Barang</h2>
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
                        <h5 class="card-title">Kelola Data Barang</h5>
                        <button type="button" class="btn btn-info mb-2" data-toggle="modal" data-target="#tambah_barang">
                            Tambah Data
                        </button>
                        <table id="myTable" class="table table-bordered table-hover" style="width:100%">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Barang</th>
                                    <th>Stok</th>
                                    <th>Harga Sewa/Hari</th>
                                    <th>Gambar</th>
                                    <th>Detail</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php foreach ($barang as $key => $value) : ?>
                                    <tr>
                                        <td><?= $key + 1 ?></td>
                                        <td><?= $value['nama_barang'] ?></td>
                                        <td><?= $value['stok'] ?></td>
                                        <td><?= $value['harga_sewa'] ?></td>
                                        <td><img src="<?= base_url('public/assets/img/barang/' . $value['gambar'])  ?>" width="50px" height="50px"></td>
                                        <td><?= $value['detail_barang'] ?></td>
                                        <td>
                                            <button class="btn btn-success" data-toggle="modal" data-target="#ubah_barang<?= $value['id_barang'] ?>">
                                                <i class="bi bi-pencil-fill"></i>
                                            </button>
                                            <button class="btn btn-secondary" data-toggle="modal" data-target="#hapus_barang<?= $value['id_barang'] ?>">
                                                <i class="bi bi-trash-fill"></i>
                                            </button>
                                        </td>
                                    </tr>


                                    <!-- MODAL HAPUS -->
                                    <div class="modal fade" id="hapus_barang<?= $value['id_barang'] ?>">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">

                                                <!-- Header Modal -->
                                                <div class="modal-header">
                                                    <h4 class="modal-title">Hapus Data</h4>
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                </div>

                                                <form action="<?= base_url('Admin/hapus_barang/' . $value['id_barang']) ?>" method="post" enctype="multipart/form-data">
                                                    <!-- Isi Modal -->
                                                    <div class="modal-body">
                                                        <p>Apakah anda yakin?</p>
                                                    </div>

                                                    <!-- Footer Modal -->
                                                    <div class="modal-footer">

                                                        <button type="sumbit" class="btn btn-info mb-2">
                                                            Hapus Data
                                                        </button>

                                                    </div>

                                                </form>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- MODAL EDIT -->
                                    <div class="modal fade" id="ubah_barang<?= $value['id_barang'] ?>">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">

                                                <!-- Header Modal -->
                                                <div class="modal-header">
                                                    <h4 class="modal-title">Ubah Data</h4>
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                </div>

                                                <form action="<?= base_url('Admin/ubah_barang/' . $value['id_barang']) ?>" method="post" enctype="multipart/form-data">
                                                    <!-- Isi Modal -->
                                                    <div class="modal-body">
                                                        <?= csrf_field(); ?>

                                                        <label>Nama Barang</label>
                                                        <input type="text" name="nama_barang" class="form-control" required value="<?= $value['nama_barang'] ?>">

                                                        <label>Harga Sewa / Hari</label>
                                                        <input type="number" class="form-control" name="harga_sewa" value="<?= $value['harga_sewa'] ?>" required>

                                                        <label>Stok</label>
                                                        <input type="number" name="stok" class="form-control" value="<?= $value['stok'] ?>" required>

                                                        <label>Detail</label>
                                                        <textarea class="form-control" name="detail_barang" required><?= $value['detail_barang'] ?></textarea>

                                                        <label>Gambar Barang</label>
                                                        <input type="file" class="form-control" name="gambar" required>

                                                    </div>

                                                    <!-- Footer Modal -->
                                                    <div class="modal-footer">

                                                        <button type="sumbit" class="btn btn-info mb-2">
                                                            Ubah Data
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

    <!-- MODAL TAMBAH -->
    <div class="modal fade" id="tambah_barang">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">

                <!-- Header Modal -->
                <div class="modal-header">
                    <h4 class="modal-title">Tambah Data</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <form action="<?= base_url('Admin/tambah_barang') ?>" method="post" enctype="multipart/form-data">
                    <!-- Isi Modal -->
                    <div class="modal-body">
                        <?= csrf_field(); ?>

                        <label>Nama Barang</label>
                        <input type="text" name="nama_barang" class="form-control" required>

                        <label>Harga Sewa / Hari</label>
                        <input type="number" class="form-control" name="harga_sewa" required>

                        <label>Stok</label>
                        <input type="number" name="stok" class="form-control" required>

                        <label>Detail</label>
                        <textarea class="form-control" name="detail_barang" required></textarea>

                        <label>Gambar Barang</label>
                        <input type="file" class="form-control" name="gambar" required>

                    </div>

                    <!-- Footer Modal -->
                    <div class="modal-footer">

                        <button type="sumbit" class="btn btn-info mb-2">
                            Tambah Data
                        </button>

                    </div>

                </form>
            </div>
        </div>
    </div>


</div>

<?= $this->endSection(); ?>