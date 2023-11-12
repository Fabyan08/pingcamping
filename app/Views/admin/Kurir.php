<?= $this->extend('template/admin'); ?>


<?= $this->section('content'); ?>


<div class="site-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="row mb-2">
                <div class="col-lg-12">
                    <h2 class="fw-bold">Kelola Kurir</h2>
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
                        <h5 class="card-title">Kelola Data Kurir</h5>
                        <button type="button" class="btn btn-info mb-2" data-toggle="modal" data-target="#tambah_kurir">
                            Tambah Data
                        </button>
                        <table id="myTable" class="table table-bordered table-hover" style="width:100%">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Kurir</th>
                                    <th>HP</th>
                                    <th>Area</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php foreach ($kurir as $key => $value) : ?>
                                    <tr>
                                        <td><?= $key + 1 ?></td>
                                        <td><?= $value['nama_kurir'] ?></td>
                                        <td><?= $value['hp'] ?></td>
                                        <td>
                                            <?php
                                            if ($value['area'] == 'luar_kota') {
                                                echo "Luar Kota";
                                            } else {
                                                echo "Dalam Kota";
                                            }
                                            ?>
                                        </td>
                                        <td>
                                            <button class="btn btn-success" data-toggle="modal" data-target="#ubah_kurir<?= $value['id_kurir'] ?>">
                                                <i class="bi bi-pencil-fill"></i>
                                            </button>
                                            <button class="btn btn-secondary" data-toggle="modal" data-target="#hapus_kurir<?= $value['id_kurir'] ?>">
                                                <i class="bi bi-trash-fill"></i>
                                            </button>
                                        </td>
                                    </tr>


                                    <!-- MODAL HAPUS -->
                                    <div class="modal fade" id="hapus_kurir<?= $value['id_kurir'] ?>">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">

                                                <!-- Header Modal -->
                                                <div class="modal-header">
                                                    <h4 class="modal-title">Hapus Data</h4>
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                </div>

                                                <form action="<?= base_url('Admin/hapus_kurir/' . $value['id_kurir']) ?>" method="post" enctype="multipart/form-data">
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
                                    <div class="modal fade" id="ubah_kurir<?= $value['id_kurir'] ?>">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">

                                                <!-- Header Modal -->
                                                <div class="modal-header">
                                                    <h4 class="modal-title">Ubah Data</h4>
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                </div>

                                                <form action="<?= base_url('Admin/ubah_kurir/' . $value['id_kurir']) ?>" method="post" enctype="multipart/form-data">
                                                    <!-- Isi Modal -->
                                                    <div class="modal-body">
                                                        <?= csrf_field(); ?>

                                                        <label>Nama kurir</label>
                                                        <input type="text" name="nama_kurir" class="form-control" required value="<?= $value['nama_kurir'] ?>">

                                                        <label>HP</label>
                                                        <input type="text" class="form-control" name="hp" value="<?= $value['hp'] ?>" required>
                                                        <label for="Are">Area</label>
                                                        <select name="" id="" class="form-control">
                                                            <option value="luar_kota">Luar Kota</option>
                                                            <option value="dalam_kota">Dalam Kota</option>
                                                        </select>
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
    <div class="modal fade" id="tambah_kurir">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">

                <!-- Header Modal -->
                <div class="modal-header">
                    <h4 class="modal-title">Tambah Data</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <form action="<?= base_url('Admin/tambah_kurir') ?>" method="post" enctype="multipart/form-data">
                    <!-- Isi Modal -->
                    <div class="modal-body">
                        <?= csrf_field(); ?>

                        <label>Nama kurir</label>
                        <input type="text" name="nama_kurir" class="form-control" required>

                        <label>HP</label>
                        <input type="text" name="hp" class="form-control" required>
                        <label>Area</label>
                        <select name="" id="" class="form-control">
                            <option value="luar_kota">Luar Kota</option>
                            <option value="dalam_kota">Dalam Kota</option>
                        </select>
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