<?= $this->extend('template/sewa'); ?>


<?= $this->section('content'); ?>


<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 text-center mb-5">
                <h2 class="heading-section">Isi Data Sewa</h2>
            </div>
        </div>


        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-10">
                <form action="<?= base_url('Web/proses_sewa') ?>" method="post" enctype="multipart/form-data">
                    <?= csrf_field(); ?>

                    <div class="form-outline mb-12">
                        <div class="clone" id="form-container">
                            <div class="row">
                                <div class="col-md-8">
                                    <label class="form-label">Nama Barang</label>
                                    <select name="nama_barang" class="form-control">
                                        <?php foreach ($barang as $key => $value) : ?>
                                            <option><?= $value['nama_barang'] ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                            <div class="row align-items-center">
                                <div class="col-md-4">
                                    <label class="form-label">Jumlah Barang</label>
                                    <input type="text" name="jumlah_barang" class="form-control" id="jumlah_barang_1">
                                </div>
                                <div class="col" style="margin-top: 30px;">
                                    <i class="bi bi-plus-circle" style="cursor: pointer;" onclick="duplicateForm()"></i>
                                </div>
                            </div>
                        </div>

                        <script>
                            var formIndex = 1; // Variabel untuk melacak indeks form

                            function duplicateForm() {
                                // Dapatkan elemen form yang akan di-duplicate
                                var originalForm = document.getElementById('form-container');

                                // Salin elemen form
                                var clonedForm = originalForm.cloneNode(true);

                                // Tingkatkan indeks untuk nama dan ID baru
                                formIndex++;

                                // Ubah semua elemen dengan atribut id di dalam form yang di-duplicate
                                clonedForm.querySelectorAll('[id]').forEach(function(element) {
                                    element.id = element.id.replace(/\d+/, formIndex);
                                });

                                // Atur nama baru untuk elemen input jumlah_barang di dalam form yang di-duplicate
                                clonedForm.querySelector('[name="jumlah_barang"]').name = 'jumlah_barang_' + formIndex;

                                // Atur nama baru untuk elemen select nama_barang di dalam form yang di-duplicate
                                clonedForm.querySelector('[name="nama_barang"]').name = 'nama_barang_' + formIndex;

                                // Dapatkan kontainer tempat Anda ingin menambahkan elemen form yang di-duplicate
                                var formContainer = document.getElementById('form-container');

                                // Tambahkan elemen form yang di-duplicate ke dalam kontainer, tetapi sebelum tombol tambah
                                formContainer.parentNode.insertBefore(clonedForm, formContainer.nextSibling);
                            }
                        </script>



                    </div>
                    <div class="form-outline mb-4">

                        <div class="row">
                            <div class="col-md-4">
                                <label class="form-label">Tanggal Sewa</label>
                                <input type="date" name="tanggal_sewa" class="form-control" placeholder="" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <label class="form-label">Tanggal Kembali</label>
                                <input type="date" name="tanggal_kembali" class="form-control" placeholder="" required>
                            </div>
                        </div>
                    </div>
                    <div class="form-outline mb-4">

                        <div class="row">
                            <div class="col-md-4">
                                <label class="form-label">Kurir</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2">
                                <input type="radio" name="rad" id="yaRadio" value="ya">
                                <label for="yaRadio">Ya</label>
                            </div>
                            <div class="col-md-2">
                                <input value="tidak" type="radio" name="rad" id="tidakRadio" value="tidak">
                                <label for="tidakRadio">Tidak</label>
                            </div>
                        </div>


                        <!-- <div class="row">
                            <div class="col-md-2">
                                <input type="radio" name="kurir" value="ya" id="yaRadio">
                                <label for="yaRadio">Ya</label>
                            </div>
                            <div class="col-md-2">
                                <input type="radio" name="kurir" value="tidak" id="tidakRadio">
                                <label for="tidakRadio">Tidak</label>
                            </div>
                        </div> -->

                        <div class="row" id="selectKurirRow" style="display: none;">
                            <div class="row">
                                <div class="col-md-6">
                                    <!-- <input type="radio" name="kurirOption" id="dlm"> -->
                                    <!-- <label for="dlm">Dalam Kota</label> -->
                                    <select name="nama_kurir" class="form-control">
                                        <option value=""></option>
                                        <?php foreach ($kurir as $key => $value) : ?>
                                            <option value=<?= $value['nama_kurir'] ?>><?= $value['nama_kurir'] . ' - ' . $value['area'] ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                                <!-- <div class="col-md-2">
                                    <input type="radio" name="kurirOption" id="lr">
                                    <label for="lr">Luar Kota</label>
                                </div> -->
                            </div>
                        </div>



                        <script>
                            var yaRadio = document.getElementById("yaRadio");
                            var tidakRadio = document.getElementById("tidakRadio");
                            var selectKurirRow = document.getElementById("selectKurirRow");

                            yaRadio.addEventListener("click", function() {
                                selectKurirRow.style.display = "block";
                            });

                            tidakRadio.addEventListener("click", function() {
                                selectKurirRow.style.display = "none";
                            });
                        </script>




                    </div>


                    <?php if (session()->getFlashdata('success')) { ?>
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <?= session()->getFlashdata('success') ?>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    <?php } ?>
                    <!-- Submit button -->
                    <button type="submit" class="btn btn-primary btn-block mb-4 col-md-2" style="width: 100%;">Sewa</button>
                </form>
            </div>
        </div>
    </div>
</section>

<?= $this->endSection(); ?>