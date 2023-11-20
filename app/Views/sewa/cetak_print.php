<?php
// include('../../config/conn.php');
require_once('dompdf/autoload.inc.php');

use Dompdf\Dompdf;

ob_start();
include "print.php";
$html = ob_get_clean();
ob_end_clean();

define('DOMPDF_ENABLE_PHP', true);

$options = new \Dompdf\Options();
$options->setIsPhpEnabled(true);
$options->set('isHtml5ParserEnabled', true); // Adjust other options as needed
$dompdf = new Dompdf($options);
$dompdf->loadHtml($html);
$dompdf->setPaper('a4', 'landscape');
$dompdf->render();
//==
// include('../../config/conn.php');
// $sql = "SELECT * FROM profil_risiko,user WHERE profil_risiko.id_user=user.id_user AND profil_risiko.id_risiko=$_GET[id_risiko]";
// $query = mysqli_query($koneksi, $sql);
// $data = mysqli_fetch_array($query);

$dompdf->stream("Struk-Pingcamping.pdf");
