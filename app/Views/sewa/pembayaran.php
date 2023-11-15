<?= $this->extend('template/sewa'); ?>


<?= $this->section('content'); ?>


<div class="site-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="row mb-2">
                <div class="col-lg-12">
                    <h2 class="fw-bold text-center mt-10" style="margin-top: 70px;">Pembayaran</h2>
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
                                    <h4 class="text-center">Total Harga: Rp <?= number_format($value['total_harga'], 0, ',', '.') ?></h4>
                                    <div class="col">
                                        <h6>Nama Barang</h6>
                                    </div>
                                    <div class="col">
                                        <p>: <?= $value['nama_barang'] . ', ' . $value['barang2'] . ', ' . $value['barang3'] . ', ' . $value['barang4'] . ', ' . $value['barang5'] . ', ' . $value['barang6'] . ', ' . $value['barang7'] . ', ' . $value['barang8'] . ', ' . $value['barang9'] . ', ' . $value['barang10']; ?></p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <h6>Nama Penyewa</h6>
                                    </div>
                                    <div class="col">
                                        <?php foreach ($pengguna as $key => $pgn) : ?>
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
                                <div class="row" style="margin-top: 20px;">
                                    <div class="col">
                                        <div class="card">
                                            <div class="card-body">
                                                <h5 class="card-title">Cash</h5>
                                                <h6 class="card-subtitle mb-2 text-body-secondary">Langsung Datang ke Kantor</h6>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="card">
                                            <div class="card-body">
                                                <h5 class="card-title">BCA</h5>
                                                <h6 class="card-subtitle mb-2 text-body-secondary">No Rek: 12345678910</h6>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="card">
                                            <div class="card-body">
                                                <h5 class="card-title">Mandiri</h5>
                                                <h6 class="card-subtitle mb-2 text-body-secondary">No Rek: 12345678910</h6>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="card">
                                            <div class="card-body">
                                                <h5 class="card-title">Bank Jatim</h5>
                                                <h6 class="card-subtitle mb-2 text-body-secondary">No Rek: 12345678910</h6>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="card">
                                            <div class="card-body">
                                                <h5 class="card-title">BRI</h5>
                                                <h6 class="card-subtitle mb-2 text-body-secondary">No Rek: 12345678910</h6>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="card">
                                            <div class="card-body">
                                                <h5 class="card-title">BSI</h5>
                                                <h6 class="card-subtitle mb-2 text-body-secondary">No Rek: 12345678910</h6>

                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <form action="<?= base_url('Web/proses_pembayaran') ?>" method="post" enctype="multipart/form-data">
                                    <?= csrf_field(); ?>
                                    <div class="row" style="margin-top: 20px;">

                                        <div class="col">
                                            <label class="form-label">Metode Pembayaran</label>
                                            <div class="row">
                                                <div class="col">
                                                    <select name="pembayaran" id="pembayaran" class="form-control">
                                                        <option value="Cash">Cash</option>
                                                        <option value="BCA">BCA</option>
                                                        <option value="Mandiri">Mandiri</option>
                                                        <option value="Bank Jatim">Bank Jatim</option>
                                                        <option value="BRI">BRI</option>
                                                        <option value="BSI">BSI</option>
                                                    </select>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <label class="form-label">Bukti Pembayaran</label>
                                            <div class="row">
                                                <div class="col">
                                                    <input type="file" name="bukti" class="form-control">
                                                    <div class="form-text" id="basic-addon4">Kosongi Jika Memilih Cash.</div>


                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="d-flex justify-content-end">
                                        <button type="submit" class="btn btn-primary btn-lg">Bayar</button>
                                    </div>

                                </form>
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