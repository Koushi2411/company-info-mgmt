<?php
error_reporting(0);
require('vendor/autoload.php');
$mpdf = new \Mpdf\Mpdf();
$mpdf->WriteHTML('<h1>Hello world!</h1>');
$mpdf->Output();
?>