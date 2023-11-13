<?= $this->extend('template/web'); ?>


<?= $this->section('content'); ?>

<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 text-center mb-5">
                <h2 class="heading-section">Register</h2>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-5">
                <form class="was-validated" action="<?= base_url('Login/proses_register') ?>" method="post" enctype="multipart/form-data">
                    <?= csrf_field(); ?>

                    <div class="form-outline mb-4">
                        <label class="form-label">Username</label>
                        <input type="text" class="form-control" required name="username" />
                        <div class="valid-feedback">OK</div>
                        <div class="invalid-feedback">Tidak Boleh Kosong</div>
                    </div>

                    <div class="form-outline mb-4">
                        <label class="form-label">Password</label>
                        <input type="password" class="form-control" required name="password" />
                        <div class="valid-feedback">OK</div>
                        <div class="invalid-feedback">Tidak Boleh Kosong</div>
                    </div>

                    <div class="form-outline mb-4">
                        <label class="form-label">Nama</label>
                        <input type="text" class="form-control" required name="nama" />
                        <div class="valid-feedback">OK</div>
                        <div class="invalid-feedback">Tidak Boleh Kosong</div>
                    </div>

                    <div class="form-outline mb-4">
                        <label class="form-label">Telephone (WA)</label>
                        <input type="number" class="form-control" required name="hp" />
                        <div class="valid-feedback">OK</div>
                        <div class="invalid-feedback">Tidak Boleh Kosong / Huruf / Simbol</div>
                    </div>


                    <div class="form-outline mb-4">
                        <label class="form-label">Alamat</label>
                        <textarea class="form-control" required name="alamat"></textarea>
                        <div class="valid-feedback">OK</div>
                        <div class="invalid-feedback">Tidak Boleh Kosong</div>
                    </div>

                    <div class="form-outline mb-4">
                        <label class="form-label">Foto KTP</label>
                        <input type="file" class="form-control" required name="foto_ktp">
                        <div class="valid-feedback">OK</div>
                        <div class="invalid-feedback">Tidak Boleh Kosong</div>
                    </div>



                    <!-- Submit button -->
                    <button type="submit" class="btn btn-primary btn-block mb-4" style="width: 100%;">Create Account</button>
                </form>
            </div>
        </div>
    </div>
</section>

<?= $this->endSection(); ?>