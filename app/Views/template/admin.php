<!doctype html>
<html lang="en">

<head>
    <title>admin</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <link href="<?php echo base_url('public/assets/vendor/bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet">

    <link rel="stylesheet" href="<?php echo base_url('public/assets/css/style_admin.css'); ?>">
</head>

<body>

    <div class="wrapper d-flex align-items-stretch">
        <nav id="sidebar">
            <div class="p-4 pt-5">
                <div class="text-center">
                    <h3 class="name" style="color:aliceblue">Dashboard</h3>
                </div>
                <ul class="list-unstyled components mb-5">

                    <li>
                        <a href="<?= base_url('Admin/barang')  ?>">Barang</a>
                    </li>
                    <li>
                        <a href="<?= base_url('Admin/data_sewa')  ?>">Sewa</a>
                    </li>
                    <li>
                        <a href="<?= base_url('Admin/member')  ?>">Member</a>
                    </li>
                    <li>
                        <a href="<?= base_url('Admin/kurir')  ?>">Kurir</a>
                    </li>

                </ul>


            </div>
            <div class="text-center mt-5">
                <button class="btn btn-dark">
                    <a href="<?= base_url('Login_admin/logout_admin')  ?>"><i class="bi bi-box-arrow-right"></i> Log Out</a>
                </button>
            </div>
        </nav>

        <!-- Page Content  -->

        <div id="content" class="p-4 p-md-5">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                    <button type="button" id="sidebarCollapse" class="btn btn-info">
                        <i class="fa fa-bars"></i>
                        <span class="sr-only">Toggle Menu</span>
                    </button>
                    <h5>PingCamping</h5>
                </div>
            </nav>

            <?= $this->renderSection('content'); ?>

        </div>
    </div>
    <script src="<?php echo base_url('public/assets/js/jquery.min.js'); ?>"></script>
    <script src="<?php echo base_url('public/assets/js/popper.min.js '); ?>"></script>
    <script src="<?php echo base_url('public/assets/js/bootstrap.min.js'); ?>"></script>
    <script src="<?php echo base_url('public/assets/js/main_admin.js '); ?>"></script>
    <script src="<?php echo base_url('public/assets/js/datatables.js'); ?>"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.5.0/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
</body>

</html>