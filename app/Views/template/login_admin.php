<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <link href="<?php echo base_url('public/assets/css/bootstrap.min.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('public/assets/css/style_login.css'); ?>" rel="stylesheet">

    <title>LOGIN ADMIN</title>
</head>

<body>
    <section class="form-02-main">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="_lk_de">
                        <div class="form-03-main">
                            <div class="logo">
                                <h1>LOGIN </h1>
                            </div>

                            <?php if (session()->getFlashdata('gagal')) { ?>
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    <?= session()->getFlashdata('gagal') ?>
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            <?php } ?>

                            <form class="was-validated" action="<?= base_url('Login_admin/proses_login_admin') ?>" method="post" enctype="multipart/form-data">
                                <?= csrf_field(); ?>

                                <div class="form-group">
                                    <input type="username" name="username" class="form-control _ge_de_ol" type="text" placeholder="Enter Username" required="" aria-required="true">
                                </div>

                                <div class="form-group">
                                    <input type="password" name="password" class="form-control _ge_de_ol" type="text" placeholder="Enter Password" required="" aria-required="true">
                                </div>


                                <div class="form-group">
                                    <button type="submit" class="_btn_04 btn btn-primary btn-block mb-4" style="width: 100%;">Sign in</button>

                                </div>

                                <!-- Submit button -->
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>