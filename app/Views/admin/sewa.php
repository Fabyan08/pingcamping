<?= $this->extend('template/admin'); ?>


<?= $this->section('content'); ?>


<div class="site-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="row mb-2">
                <div class="col-lg-12">
                    <h2 class="fw-bold">Kelola Penyewaan</h2>
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
                        <h5 class="card-title">Kelola Data Sewa</h5>

                        <table id="myTable" class="table table-bordered table-hover" style="width:100%">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Barang</th>
                                    <th>Tanggal Sewa</th>
                                    <th>Tanggal Kembali</th>
                                    <th>Total Harga</th>
                                    <th>Nama Penyewa</th>
                                    <th>HP</th>
                                    <th>Alamat</th>
                                    <th>Status</th>
                                    <th>Nama Kurir</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php foreach ($data_sewa as $key => $value) : ?>
                                    <tr>
                                        <td><?= $key + 1 ?></td>
                                        <td><?= $value['nama_barang'] ?></td>
                                        <td><?= $value['tanggal_sewa'] ?></td>
                                        <td><?= $value['tanggal_kembali'] ?></td>
                                        <td><?= $value['total_harga'] ?></td>
                                        <td><?= $value['nama_pengguna'] ?></td>
                                        <td><?= $value['hp'] ?></td>
                                        <td><?= $value['alamat'] ?></td>
                                        <td><?= $value['status'] ?></td>
                                        <td><?= $value['nama_kurir'] ?></td>
                                        <td>
                                            <button class="btn btn-success" data-toggle="modal" data-target="#ubah_sewa<?= $value['id_sewa'] ?>">
                                                <i class="bi bi-plus"></i>
                                            </button>

                                        </td>
                                    </tr>

                                    <!-- MODAL EDIT -->
                                    <div class="modal fade" id="ubah_sewa<?= $value['id_sewa'] ?>">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">

                                                <!-- Header Modal -->
                                                <div class="modal-header">
                                                    <h4 class="modal-title">Tambah Kurir</h4>
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                </div>

                                                <form action="<?= base_url('Admin/ubah_sewa/' . $value['id_sewa']) ?>" method="post" enctype="multipart/form-data">
                                                    <!-- Isi Modal -->
                                                    <div class="modal-body">
                                                        <?= csrf_field(); ?>

                                                        <label>Nama Barang</label>
                                                        <input type="text" class="form-control" readonly value="<?= $value['nama_barang'] ?>">

                                                        <label>Tanggal Sewa</label>
                                                        <input type="date" class="form-control" value="<?= $value['tanggal_sewa'] ?>" readonly>

                                                        <label>Tanggal Kembali</label>
                                                        <input type="date" class="form-control" value="<?= $value['tanggal_kembali'] ?>" readonly>

                                                        <label>Total Harga</label>
                                                        <input type="int" class="form-control" value="<?= $value['total_harga'] ?>" readonly>

                                                        <label>Nama Penyewa</label>
                                                        <input type="text" class="form-control" value="<?= $value['nama_pengguna'] ?>" readonly>

                                                        <label>Hp</label>
                                                        <input type="text" class="form-control" value="<?= $value['hp'] ?>" readonly>

                                                        <label>Nama Kurir</label>
                                                        <select name="nama_kurir" class="form-control">
                                                            <?php foreach ($kurir as $key => $value2) : ?>
                                                                <option><?= $value2['nama_kurir'] ?></option>
                                                            <?php endforeach; ?>
                                                        </select>
                                                    </div>

                                                    <!-- Footer Modal -->
                                                    <div class="modal-footer">

                                                        <button type="sumbit" class="btn btn-info mb-2">
                                                            Tambah Kurir
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