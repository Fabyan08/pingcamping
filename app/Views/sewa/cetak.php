<?= $this->extend('template/sewa'); ?>


<?= $this->section('content'); ?>


<div class="site-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="row mb-2">
                <div class="col-lg-12">
                    <h2 class="fw-bold text-center mt-10" style="margin-top: 70px;">Pembayaran Berhasil</h2>
                </div>
            </div>
        </div>



        <div class="d-flex justify-content-center ">
            <div class="row justify-content-center " style="width: 800px;">
                <div class="container mt-4 " style="width: 800px;">
                    <div class="card shadow-lg">
                        <div class="card-body p-10" style="padding: 60px;">
                            <?php foreach ($data_sewa as $key => $value) : ?>
                                <h5 class="text-center"><?= $value['nama_barang'] ?></h5>
                                <div class="row">
                                    <div class="col">
                                        <?php foreach ($pengguna as $key => $pgn) : ?>
                                            <h5>Nama Penyewa</h5>
                                            <p> <?= $pgn['nama']; ?></p>
                                        <?php endforeach; ?>

                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <h5>Tanggal Mulai</h5>
                                        <p> <?= date("d F Y", strtotime($value['tanggal_sewa'])) ?></p>

                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col">
                                        <h5>Tanggal Kembali</h5>
                                        <p> <?= date("d F Y", strtotime($value['tanggal_kembali'])) ?></p>

                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <h5>Metode Pembayaran </h5>
                                        <p> <?= $value['pembayaran'] ?></p>
                                    </div>
                                </div>

                                <div class="mt-10">
                                    <div class="row flex justify-content-between">
                                        <div class="col-md-10">Durasi</div>
                                        <div class="col"><?= (strtotime($value['tanggal_kembali']) - strtotime($value['tanggal_sewa'])) / (60 * 60 * 24) . ' hari'; ?></div>
                                    </div>
                                </div>
                                <hr>

                                <div class="row">

                                    <div class="col text-end">
                                        <h5><?= 'Rp ' . number_format($value['total_harga'], 0, ',', '.'); ?></h5>
                                    </div>
                                </div>


                            <?php endforeach; ?>
                            <div class="d-flex justify-content-end">
                                <a href="<?= base_url('Web/print/' )  ?>" class="btn btn-success btn-lg">Print</a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <br>
</div>

<?= $this->endSection(); ?>