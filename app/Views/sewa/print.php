<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <!--  This file has been downloaded from bootdey.com @bootdey on twitter -->
    <!--  All snippets are MIT license http://bootdey.com/license -->
    <title>Cetak Data Pembayaran</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <link href="https://netdna.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://netdna.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>

<body>
    <table class="body-wrap">
        <tbody>
            <tr>
                <td></td>
                <td class="container" width="600">
                    <div class="content">
                        <table class="main" width="100%" cellpadding="0" cellspacing="0">
                            <tbody>
                                <tr>
                                    <td class="content-wrap aligncenter">
                                        <table width="100%" cellpadding="0" cellspacing="0">
                                            <tbody>
                                                <tr>
                                                    <td class="content-block">
                                                        <img src="vohis.png" width="100px" alt="">
                                                        <h2>Struk PingCamping</h2>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td class="content-block">
                                                        <table class="invoice">
                                                            <tbody>
                                                                <?php foreach ($data_sewa as $key => $value) : ?>
                                                                    <h4><?= 'Atas Nama: ' . $value['nama_pengguna'] ?></h4>
                                                                    <h5><?= 'ID Sewa: ' . $value['id_sewa'] ?></h5>
                                                    </td>
                                                </tr>
                                                <h5><?= 'Tanggal: ' . (date('d F Y', strtotime($value['tanggal_sewa']))) . ' - ' . (date('d F Y', strtotime($value['tanggal_sewa']))) ?></h5>
                                                <tr>
                                                    <td>
                                                        <table class="invoice-items" cellpadding="0" cellspacing="0">
                                                            <tbody>
                                                                <tr>
                                                                    <td><?= $value['nama_barang'] ?></td>
                                                                    <td class="alignright"><?= $value['jumlah_barang'] ?></td>
                                                                </tr>
                                                                <?php if (!empty($value['barang2'])) { ?>
                                                                    <tr>
                                                                        <td><?= $value['barang2'] ?></td>
                                                                        <td class="alignright"><?= $value['jumlah2'] ?></td>
                                                                    </tr>
                                                                <?php } ?>
                                                                <?php if (!empty($value['barang3'])) { ?>
                                                                    <tr>
                                                                        <td><?= $value['barang3'] ?></td>
                                                                        <td class="alignright"><?= $value['jumlah3'] ?></td>
                                                                    </tr>
                                                                <?php } ?>
                                                                <?php if (!empty($value['barang4'])) { ?>
                                                                    <tr>
                                                                        <td><?= $value['barang4'] ?></td>
                                                                        <td class="alignright"><?= $value['jumlah4'] ?></td>
                                                                    </tr>
                                                                <?php } ?>
                                                                <?php if (!empty($value['barang5'])) { ?>
                                                                    <tr>
                                                                        <td><?= $value['barang5'] ?></td>
                                                                        <td class="alignright"><?= $value['jumlah5'] ?></td>
                                                                    </tr>
                                                                <?php } ?>

                                                                <?php if (!empty($value['barang6'])) { ?>
                                                                    <tr>
                                                                        <td><?= $value['barang6'] ?></td>
                                                                        <td class="alignright"><?= $value['jumlah6'] ?></td>
                                                                    </tr>
                                                                <?php } ?>
                                                                <?php if (!empty($value['barang7'])) { ?>
                                                                    <tr>
                                                                        <td><?= $value['barang7'] ?></td>
                                                                        <td class="alignright"><?= $value['jumlah7'] ?></td>
                                                                    </tr>
                                                                <?php } ?>
                                                                <?php if (!empty($value['barang8'])) { ?>
                                                                    <tr>
                                                                        <td><?= $value['barang8'] ?></td>
                                                                        <td class="alignright"><?= $value['jumlah8'] ?></td>
                                                                    </tr>
                                                                <?php } ?>
                                                                <?php if (!empty($value['barang9'])) { ?>
                                                                    <tr>
                                                                        <td><?= $value['barang9'] ?></td>
                                                                        <td class="alignright"><?= $value['jumlah9'] ?></td>
                                                                    </tr>
                                                                <?php } ?>
                                                                <?php if (!empty($value['barang10'])) { ?>
                                                                    <tr>
                                                                        <td><?= $value['barang10'] ?></td>
                                                                        <td class="alignright"><?= $value['jumlah10'] ?></td>
                                                                    </tr>
                                                                <?php } ?>


                                                                <!-- <tr class="total">
                                                                    <td class="alignright" width="80%">Total </td>
                                                                    <td class="alignright">Rp 200.000</td>
                                                                </tr> -->

                                                            </tbody>
                                                        </table>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <table class="invoice-items" cellpadding="0" cellspacing="0">
                                                            <tbody>
                                                                <tr>
                                                                    <td>Jumlah Bayar</td>
                                                                    <td class="alignright"><?= $value['total_harga'] ?></td>
                                                                </tr>
                                                                <tr class="total">
                                                                    <td class="alignright" width="80%">Metode </td>
                                                                    <td class="alignright"><?= $value['pembayaran']  . ' - ' . $value['status'] ?></td>
                                                                </tr>
                                                            <?php endforeach ?>

                                                            </tbody>
                                                        </table>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>

                            </tbody>
                        </table>
                </td>
            </tr>
        </tbody>
    </table>

    </div>
    </td>
    <td></td>
    </tr>
    </tbody>
    </table>

    <style type="text/css">
        /* -------------------------------------
    GLOBAL
    A very basic CSS reset
------------------------------------- */
        * {
            margin: 0;
            padding: 0;
            font-family: "Helvetica Neue", "Helvetica", Helvetica, Arial, sans-serif;
            box-sizing: border-box;
            font-size: 14px;
        }

        img {
            max-width: 100%;
        }

        body {
            -webkit-font-smoothing: antialiased;
            -webkit-text-size-adjust: none;
            width: 100% !important;
            height: 100%;
            line-height: 1.6;
        }

        /* Let's make sure all tables have defaults */
        table td {
            vertical-align: top;
        }

        /* -------------------------------------
    BODY & CONTAINER
------------------------------------- */
        body {
            background-color: #f6f6f6;
        }

        .body-wrap {
            background-color: #f6f6f6;
            width: 100%;
        }

        .container {
            display: block !important;
            max-width: 600px !important;
            margin: 0 auto !important;
            /* makes it centered */
            clear: both !important;
        }

        .content {
            max-width: 600px;
            margin: 0 auto;
            display: block;
            padding: 20px;
        }

        /* -------------------------------------
    HEADER, FOOTER, MAIN
------------------------------------- */
        .main {
            background: #fff;
            border: 1px solid #e9e9e9;
            border-radius: 3px;
        }

        .content-wrap {
            padding: 20px;
        }

        .content-block {
            padding: 0 0 20px;
        }

        .header {
            width: 100%;
            margin-bottom: 20px;
        }

        .footer {
            width: 100%;
            clear: both;
            color: #999;
            padding: 20px;
        }

        .footer a {
            color: #999;
        }

        .footer p,
        .footer a,
        .footer unsubscribe,
        .footer td {
            font-size: 12px;
        }

        /* -------------------------------------
    TYPOGRAPHY
------------------------------------- */
        h1,
        h2,
        h3 {
            font-family: "Helvetica Neue", Helvetica, Arial, "Lucida Grande", sans-serif;
            color: #000;
            margin: 40px 0 0;
            line-height: 1.2;
            font-weight: 400;
        }

        h1 {
            font-size: 32px;
            font-weight: 500;
        }

        h2 {
            font-size: 24px;
        }

        h3 {
            font-size: 18px;
        }

        h4 {
            font-size: 14px;
            font-weight: 600;
        }

        p,
        ul,
        ol {
            margin-bottom: 10px;
            font-weight: normal;
        }

        p li,
        ul li,
        ol li {
            margin-left: 5px;
            list-style-position: inside;
        }

        /* -------------------------------------
    LINKS & BUTTONS
------------------------------------- */
        a {
            color: #1ab394;
            text-decoration: underline;
        }

        .btn-primary {
            text-decoration: none;
            color: #FFF;
            background-color: #1ab394;
            border: solid #1ab394;
            border-width: 5px 10px;
            line-height: 2;
            font-weight: bold;
            text-align: center;
            cursor: pointer;
            display: inline-block;
            border-radius: 5px;
            text-transform: capitalize;
        }

        /* -------------------------------------
    OTHER STYLES THAT MIGHT BE USEFUL
------------------------------------- */
        .last {
            margin-bottom: 0;
        }

        .first {
            margin-top: 0;
        }

        .aligncenter {
            text-align: center;
        }

        .alignright {
            text-align: right;
        }

        .alignleft {
            text-align: left;
        }

        .clear {
            clear: both;
        }

        /* -------------------------------------
    ALERTS
    Change the class depending on warning email, good email or bad email
------------------------------------- */
        .alert {
            font-size: 16px;
            color: #fff;
            font-weight: 500;
            padding: 20px;
            text-align: center;
            border-radius: 3px 3px 0 0;
        }

        .alert a {
            color: #fff;
            text-decoration: none;
            font-weight: 500;
            font-size: 16px;
        }

        .alert.alert-warning {
            background: #f8ac59;
        }

        .alert.alert-bad {
            background: #ed5565;
        }

        .alert.alert-good {
            background: #1ab394;
        }

        /* -------------------------------------
    INVOICE
    Styles for the billing table
------------------------------------- */
        .invoice {
            margin: 40px auto;
            text-align: left;
            width: 80%;
        }

        .invoice td {
            padding: 5px 0;
        }

        .invoice .invoice-items {
            width: 100%;
        }

        .invoice .invoice-items td {
            border-top: #eee 1px solid;
        }

        .invoice .invoice-items .total td {
            border-top: 2px solid #333;
            border-bottom: 2px solid #333;
            font-weight: 700;
        }



        /* -------------------------------------
    RESPONSIVE AND MOBILE FRIENDLY STYLES
    ------------------------------------- */
        @media only screen and (max-width: 640px) {

            h1,
            h2,
            h3,
            h4 {
                font-weight: 600 !important;
                margin: 20px 0 5px !important;
            }

            h1 {
                font-size: 22px !important;
            }

            h2 {
                font-size: 18px !important;
            }

            h3 {
                font-size: 16px !important;
            }

            .container {
                width: 100% !important;
            }

            .content,
            .content-wrap {
                padding: 10px !important;
            }

            .invoice {
                width: 100% !important;
            }
        }

        @page {
            size: landscape;
        }
    </style>

    <script type="text/javascript">
        print()
    </script>
</body>

</html>
<!-- <script>
    print()
</script> -->