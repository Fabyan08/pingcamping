<?= $this->extend('template/web'); ?>


<?= $this->section('content'); ?>

<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 text-center mb-5">
                <h2 class="heading-section">Login</h2>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-5">
                <form class="was-validated" action="<?= base_url('Login/proses_login') ?>" method="post" enctype="multipart/form-data">
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


                    <?php if (session()->getFlashdata('gagal')) { ?>
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <?= session()->getFlashdata('gagal') ?>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    <?php } ?>


                    <!-- Submit button -->
                    <button type="submit" class="btn btn-primary btn-block mb-4" style="width: 100%;">Log in</button>
                    <h6 class="text-center">Belum Memiliki Akun? <a href="<?= base_url('Login/register') ?>">Sign In</a></h6>
                </form>
            </div>
        </div>
    </div>
</section>

<?= $this->endSection(); ?>