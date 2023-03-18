<?php

require_once ROOT . '/vendor/autoload.php';
require_once __DIR__.'/../config/pathServer.php';

use Restfull\Htmltopdf\HtmlToPdf;

$pdf = new HtmlToPdf();
$pdf->validateHTML(
    '<html><head><title>teste pdf</title></head><body><h1>Teste executado com sucesso</h1></body></html>'
);
$pdf->gerarPDF(ROOT . '/example/test/example.pdf');