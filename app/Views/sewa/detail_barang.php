<?= $this->extend('template/sewa'); ?>


<?= $this->section('content'); ?>



<main id="main">

    <!-- ======= Alat Section ======= -->
    <section id="alat" class="alat">
        <div class="container" data-aos="fade-up">
            <?php foreach ($barang as $key => $value) : ?>

                <div class="row">

                    <div class="col-lg-6 col-md-4 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                        <div class="alatcamp">
                            <div>
                                <img src="<?= base_url('public/assets/img/barang/' . $value['gambar'])  ?>" class="img-fluid">
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
                        <div class="alat-info">
                            <h1><?= $value['nama_barang'] ?></h1>
                            <h4 class="mt-3">
                                <?= $value['detail_barang'] ?>
                            </h4>
                            <br> <br>
                            <h4>Rp. <?= $value['harga_sewa'] ?> / Hari</h4>
                            <h4>Stock: <?= $value['stok'] ?> </h4>

                        </div>
                    </div>


                </div>
            <?php endforeach; ?>

        </div>
    </section><!-- End Team Section -->


    <section class="pt-1">
        <div class="container">
            <button type="button" class="btn btn-primary mb-2" data-toggle="modal" data-target="#tambah">
                Ulasan
            </button>
            <?php if (session()->getFlashdata('success')) { ?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <?= session()->getFlashdata('success') ?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <?php } ?>

            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">User</th>
                        <th scope="col">Ulasan</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($ulasan as $key  => $dt) : ?>
                        <tr>
                            <th scope="row"><?= $key + 1 ?></th>
                            <td><?= $dt['nama'] ?></td>
                            <td><?= $dt['ulasan'] ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <hr>
        </div>
    </section>

</main>

<!-- Hapus -->
<?php foreach ($ulasan as $key  => $dt) : ?>

    <div class="modal fade" id="hapus_barang<?= $dt['id_ulasan'] ?>">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">

                <!-- Header Modal -->
                <div class="modal-header">
                    <h4 class="modal-title">Hapus Data</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <form action="<?= base_url('Web/hapus_ulasan/' . $dt['id_ulasan']) ?>" method="post" enctype="multipart/form-data">
                    <!-- Isi Modal -->
                    <div class="modal-body">
                        <p>Apakah anda yakin?</p>
                    </div>

                    <!-- Footer Modal -->
                    <div class="modal-footer">

                        <button type="submit" class="btn btn-info mb-2">
                            Hapus Data
                        </button>

                    </div>

                </form>
            </div>
        </div>
    </div>
<?php endforeach; ?>

<!-- MODAL TAMBAH -->
<div class="modal fade" id="tambah">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

            <!-- Header Modal -->
            <div class="modal-header">
                <h4 class="modal-title">Tambah Ulasan</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <form action="<?= base_url('Web/tambah_ulasan') ?>" method="post" enctype="multipart/form-data">
                <!-- Isi Modal -->
                <div class="modal-body">
                    <?= csrf_field(); ?>
                    <textarea required class="form-control" name="ulasan"></textarea>
                </div>

                <!-- Footer Modal -->


                <?php foreach ($barang as $key  => $dt) : ?>
                    <input type="hidden" value="<?= $dt['id_barang'] ?>" name="id_barang">
                <?php endforeach; ?>
                <div class="modal-footer">

                    <button type="submit" class="btn btn-info mb-2">
                        Tambah Data
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>