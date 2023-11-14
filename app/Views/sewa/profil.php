<?= $this->extend('template/sewa'); ?>


<?= $this->section('content'); ?>


<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 text-center mb-5">
                <h2 class="heading-section">Profil Anda</h2>
                <?php foreach ($akun as $key => $value) : ?>

                    <img src=<?= base_url('public/assets/img/auth/' . $value['profil']) ?> class="rounded-circle border border-primary" style="width: 200px;" alt="">


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
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Data</th>

                            </tr>
                        </thead>
                        <tbody>

                            <tr>
                                <th>Nama</th>
                                <td><?= $value['nama'] ?></td>

                            </tr>
                            <tr>
                                <th>Data</th>
                                <td><?= $value['alamat'] ?></td>

                            </tr>
                            <tr>
                                <th>No Telepon</th>
                                <td><?= $value['hp'] ?></td>
                            </tr>
                            <tr>
                                <th>Foto KTP</th>
                                <td><img src="<?= base_url('public/assets/img/auth/' . $value['foto_ktp']) ?>" style="width: 300px;" alt=""></td>
                            </tr>
                        </tbody>
                    </table>

                <?php endforeach ?>
                <div class="modal-footer">

                    <div class="row">
                        <div class="col">
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                Ubah </button>

                            <!-- Modal -->

                            <!-- <button type="sumbit" class="btn btn-primary mb-2">
                                Ubah
                            </button> -->
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

        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Ubah Profil Kamu</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <?php foreach ($akun as $key => $value) : ?>
                            <div class="d-flex justify-content-center">
                                <form action="<?= base_url('Web/ubah_profil') ?>" method="post" enctype="multipart/form-data">
                                    <?= csrf_field(); ?>
                                    <div class="row">
                                        <div class="col">
                                            <img src=<?= base_url('public/assets/img/auth/' . $value['profil']) ?> class="rounded-circle border border-primary" style="width: 100px;" alt="">
                                        </div>
                                        <div class="col">
                                            <input type="file" id="profil" value="<?= $value['profil'] ?>" class="form-control" style="margin-top: 10px;" name="profil">
                                            <div id="emailHelp" class="form-text">Foto Profil</div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <label for="exampleInputEmail1" class="form-label">Nama</label>
                                            <input type="text" class="form-control" value="<?= $value['nama'] ?>" name="nama">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <label for="exampleInputEmail1" class="form-label">Alamat</label>
                                            <input type="text" class="form-control" value="<?= $value['alamat'] ?>" name="alamat">

                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <label for="exampleInputEmail1" class="form-label">No Telepon</label>
                                            <input type="number" class="form-control" value="<?= $value['hp'] ?>" name="hp">
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col">
                                            <img src="<?= base_url('public/assets/img/auth/' . $value['foto_ktp']) ?>" style="width: 100px;" alt="">
                                        </div>
                                        <div class="col">
                                            <input type="file" id="foto_ktp" value="<?= $value['foto_ktp'] ?>" class="form-control" name="foto_ktp">
                                            <div id="emailHelp" class="form-text">Foto KTP</div>
                                        </div>
                                    </div>
                            </div>


                    </div>
                <?php endforeach ?>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                    </form>

                </div>
                </div>
            </div>
        </div>

</section>

<?= $this->endSection(); ?>