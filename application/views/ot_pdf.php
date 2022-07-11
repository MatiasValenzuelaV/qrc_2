<?php
require 'vendor/autoload.php';

use Dompdf\Dompdf;

$dompdf = new DOMPDF();
?>
    <h1>S</h1>
    <button class="btn btn-primary">LOL</button>
<?php

$dompdf->load_html(ob_get_clean());
$dompdf->render();
$dompdf->set_base_path('https://qrc.acbingenieria.cl/assets/css/brackets.css');
// header("Content-type: application/pdf");
// header("filename=documento.pdf");
// echo $dompdf->output();
// $dompdf->stream("hello.pdf");

// $dompdf->set_paper(array(0, 0, 600, 500), 'landscape');
// $dompdf->set_option('defaultFont', 'Courier');
// $dompdf->load_html(ob_get_clean());
// $dompdf->render();
// // $pdf = $dompdf->output();

// header("Content-type: application/pdf");
// header("filename=documento.pdf");
// echo $dompdf->output();

// $filename = 'boucher-repuestos-ot.pdf';
// $dompdf->stream($filename, array("Attachment" => 0));

?>