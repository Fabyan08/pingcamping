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
                    <div class="card ">
                        <div class="card-body p-10" style="padding: 60px;">
                            <?php foreach ($data_sewa as $key => $value) : ?>
                                <div class="row">
                                    <div class="col">
                                        <h6>Nama Barang</h6>
                                    </div>
                                    <div class="col">
                                        <p>: <?= $value['nama_barang']; ?></p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <h6>Nama Penyewa</h6>
                                    </div>
                                    <div class="col">
                                        <?php foreach($pengguna as $key => $pgn) : ?>
                                        <p>: <?= $pgn['nama']; ?></p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <h6>No Telepon</h6>
                                    </div>
                                    <div class="col">
                                        <p>: <?= $pgn['hp']; ?></p>
                                        <?php endforeach; ?>
                                    </div>
                                </div>


                                <div class="row">
                                    <div class="col">
                                        <h6>Waktu Sewa</h6>
                                    </div>
                                    <div class="col">
                                        <p>: <?= $value['tanggal_sewa'] . ' - ' . $value['tanggal_kembali']; ?></p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <h6>Jenis Pembayaran</h6>
                                    </div>
                                    <div class="col">
                                        <p>: <?= $value['pembayaran']  ?></p>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col">
                                        <h6>Total Harga</h6>
                                    </div>
                                    <div class="col">
                                        <p>: <?= $value['total_harga']; ?></p>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-end">
                                    <a href="riwayat" class="btn btn-primary btn-lg">OK</a>
                                </div>

                            <?php endforeach; ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <br>
</div>

<?= $this->endSection(); ?>