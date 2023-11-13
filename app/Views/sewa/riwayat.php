<?= $this->extend('template/sewa'); ?>


<?= $this->section('content'); ?>


<div class="site-section">
    <div class="container">
        <div class="row justify-content-center mt-20">
            <div class="row mb-2 mt-40" style="margin-top: 50px;">
                <div class="col-lg-12">
                    <h2 class="fw-bold text-center">RIWAYAT PEMESANAN</h2>
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

        <div class="container">
            <div class="row">
                <?php foreach ($data_sewa as $key => $value) : ?>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-header bg-black text-white">
                                <h5 class="card-title"><?= date("d F Y", strtotime($value['tanggal_sewa'])) ?></h5>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-9">
                                        <h6><?= $value['nama_barang'] ?></h6>
                                        <h6>Metode Pembayaran Transfer <?= $value['pembayaran'] ?></h6>
                                    </div>
                                    <div class="col-md-3">
                                        <h6><?= 'Rp ' . number_format($value['total_harga'], 0, ',', '.'); ?></h6>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer bg-black text-white text-center">
                                <a href="cetak?id_sewa=<?= $value['id_sewa'] ?>" class="text-white">Lihat Detail</a>
                            </div>
                        </div>

                    </div>
                <?php endforeach; ?>
            </div>
        </div>


    </div>


    <br>
</div>

<?= $this->endSection(); ?>