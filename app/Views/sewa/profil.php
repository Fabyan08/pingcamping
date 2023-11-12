<?= $this->extend('template/sewa'); ?>


<?= $this->section('content'); ?>


<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 text-center mb-5">
                <h2 class="heading-section">Profil</h2>
            </div>
        </div>


        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-10">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="row mb-2">
                            <div class="col-lg-12">
                            </div>
                        </div>
                    </div>

                    <?php if (session()->getFlashdata('success')) { ?>
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <?= session()->getFlashdata('success') ?>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    <?php } ?>

                    <div class="row justify-content-center">
                        <div class="container mt-4">
                            <a href="<?= base_url('Web/riwayat') ?>" class="btn btn-success">Riwayat</a>
                            <br> <br>

                            <div class="card">
                                <div class="card-body">
                                    <form action="<?= base_url('Web/ubah_profil') ?>" method="post" enctype="multipart/form-data">
                                        <?= csrf_field(); ?>
                                        <?php foreach ($akun as $key => $value) : ?>

                                            <div class="modal-body">
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Nama</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" name="nama" value="<?= $value['nama'] ?>">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Nomor</label>
                                                    <div class="col-sm-10">
                                                        <input type="number" class="form-control" name="hp" value="<?= $value['hp'] ?>">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Alamat</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" name="alamat" value="<?= $value['alamat'] ?>">
                                                    </div>
                                                </div>
                                            </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="modal-footer">


                        <button type="sumbit" class="btn btn-info mb-2">
                            Ubah Data
                        </button>
                    </div>
                    </form>

                <?php endforeach; ?>

                </div>
            </div>
        </div>

</section>

<?= $this->endSection(); ?>