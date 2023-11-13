<?= $this->extend('template/sewa'); ?>


<?= $this->section('content'); ?>


<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 text-center mb-5">
                <h2 class="heading-section">Profil Anda</h2>
                <?php foreach ($akun as $key => $value) : ?>

                    <img src=<?= base_url('public/assets/img/auth/' . $value['profil']) ?> class="rounded-circle border border-primary" style="width: 100px;" alt="">

                    <form action="<?= base_url('Web/ubah_profil') ?>" method="post" enctype="multipart/form-data">
                        <?= csrf_field(); ?>
                        <div class="d-flex justify-content-center mt-2">

                            <input required type="file" id="profil" value="<?= $value['profil'] ?>" class="form-control col-md-2" name="profil">
                        </div>
            </div>
        </div>


        <div class="row justify-content-center" style="margin-left: 70px;">
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
                    <!-- <div class="d-flex justify-content-center"> -->
                    <label class="col">Nama</label>
                    <div class="col-md-8">
                        <input required type="text" class="form-control" name="nama" value="<?= $value['nama'] ?>">
                    </div>
                    <label class="col" style="margin-top:20px;">Alamat</label>
                    <div class="col-md-8">
                        <input required type="text" class="form-control" name="alamat" value="<?= $value['alamat'] ?>">
                    </div>
                    <label class="col" style="margin-top:20px;">No Telepon</label>
                    <div class="col-md-8">
                        <input required type="number" class="form-control" name="hp" value="<?= $value['hp'] ?>">
                    </div>
                    <label class="col" style="margin-top:20px;">Foto KTP</label>
                    <div class="col-md-8">
                        <img src="<?= base_url('public/assets/img/auth/' . $value['foto_ktp']) ?>" style="width: 100px;" alt="">
                        <input required type="file" id="foto_ktp" value="<?= $value['foto_ktp'] ?>" class="form-control" name="foto_ktp">
                    </div>
                <?php endforeach ?>
                <div class="modal-footer">

                    <div class="row">
                        <div class="col">

                            <button type="sumbit" class="btn btn-primary mb-2">
                                Ubah
                            </button>
                        </div>
                        </form>

                        <div class="col">

                            <a href="<?= base_url('Web/riwayat') ?>" class="btn btn-success mb-2">
                                Riwayat
                            </a>
                        </div>
                    </div>
                </div>
                </div>

            </div>
            <!-- </div> -->
        </div>



</section>

<?= $this->endSection(); ?>