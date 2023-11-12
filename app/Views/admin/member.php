<?= $this->extend('template/admin'); ?>


<?= $this->section('content'); ?>


<div class="site-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="row mb-2">
                <div class="col-lg-12">
                    <h2 class="fw-bold">Kelola Member</h2>
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
                        <h5 class="card-title">Kelola Data Member</h5>

                        <table id="myTable" class="table table-bordered table-hover" style="width:100%">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama member</th>
                                    <th>Hp (WA)</th>
                                    <th>Alamat</th>
                                    <th>Username</th>
                                    <th>Password</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php foreach ($member as $key => $value) : ?>
                                    <tr>
                                        <td><?= $key + 1 ?></td>
                                        <td><?= $value['nama'] ?></td>
                                        <td><?= $value['hp'] ?></td>
                                        <td><?= $value['alamat'] ?></td>
                                        <td><?= $value['username'] ?></td>
                                        <td><?= $value['password'] ?></td>
                                        <td>
                                            <button class="btn btn-success" data-toggle="modal" data-target="#ubah_member<?= $value['id_pengguna'] ?>">
                                                <i class="bi bi-pencil-fill"></i>
                                            </button>
                                            <button class="btn btn-secondary" data-toggle="modal" data-target="#hapus_member<?= $value['id_pengguna'] ?>">
                                                <i class="bi bi-trash-fill"></i>
                                            </button>
                                        </td>
                                    </tr>


                                    <!-- MODAL HAPUS -->
                                    <div class="modal fade" id="hapus_member<?= $value['id_pengguna'] ?>">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">

                                                <!-- Header Modal -->
                                                <div class="modal-header">
                                                    <h4 class="modal-title">Hapus Data</h4>
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                </div>

                                                <form action="<?= base_url('Admin/hapus_member/' . $value['id_pengguna']) ?>" method="post" enctype="multipart/form-data">
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
                                    <div class="modal fade" id="ubah_member<?= $value['id_pengguna'] ?>">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">

                                                <!-- Header Modal -->
                                                <div class="modal-header">
                                                    <h4 class="modal-title">Ubah Data</h4>
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                </div>

                                                <form action="<?= base_url('Admin/ubah_member/' . $value['id_pengguna']) ?>" method="post" enctype="multipart/form-data">
                                                    <!-- Isi Modal -->
                                                    <div class="modal-body">
                                                        <?= csrf_field(); ?>

                                                        <label>Nama</label>
                                                        <input type="text" name="nama" class="form-control" required value="<?= $value['nama'] ?>">

                                                        <label>HP</label>
                                                        <input type="number" name="hp" class="form-control" value="<?= $value['hp'] ?>" required>

                                                        <label>Alamat</label>
                                                        <textarea class="form-control" name="alamat" required><?= $value['alamat'] ?></textarea>

                                                        <label>Username</label>
                                                        <input type="text" name="username" class="form-control" value="<?= $value['username'] ?>" required>

                                                        <label>Password</label>
                                                        <input type="text" name="password" class="form-control" value="<?= $value['password'] ?>" required>

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



</div>

<?= $this->endSection(); ?>