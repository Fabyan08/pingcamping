<?= $this->extend('template/sewa'); ?>


<?= $this->section('content'); ?>

<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex align-items-center">
    <div class="container" data-aos="zoom-out" data-aos-delay="100">
        <h1>Welcome to <span>PingCamping</span></h1>
        <h2><b>Temukan berbagai peralatan camping untuk petualangan outdoor anda menuju <br> pengalaman yang luar biasa</b></h2>
       

        <div class="input-group mb-3 col-md-3">
            <input type="text" class="form-control"  aria-describedby="basic-addon2">
            <span class="input-group-text" id="basic-addon2"><i class="fa fa-search"></i></span>
        </div>

</section><!-- End Hero -->


<main id="main">

    <!-- ======= Alat Section ======= -->
    <section id="alat" class="alat">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h3><span>Rekomendasi </span>untuk anda</h3>
            </div>

            <div class="row">
                <?php foreach ($barang as $key => $value) : ?>
                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                        <div class="alatcamp">
                            <div class="alat-img">
                                <img src="<?= base_url('public/assets/img/barang/' . $value['gambar'])  ?>" width="200px" height="200px">
                            </div>
                            <div class="alat-info">
                                <h4> <a href="<?= base_url('Web/profil_detail_barang/' . $value['id_barang'])  ?>"> <?= $value['nama_barang'] ?> </a></h4>
                                <p style="font-style: italic;">Rp. <?= $value['harga_sewa'] ?> / Hari</p>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>


            </div>

        </div>
    </section><!-- End Team Section -->

</main><!-- End #main -->


<?= $this->endSection(); ?>