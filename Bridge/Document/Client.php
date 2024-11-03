<?php
    require_once 'Implementation/HtmlExporter.php';
    require_once 'Implementation/PdfExporter.php';

    require_once 'Abstraction/Invoice.php';
    require_once 'Abstraction/Report.php';

    $htmlExporter = new HtmlExporter();
    $pdfExporter = new PdfExporter();

    $pdfInvoice = new Invoice($pdfExporter, 'Pdf invoice content');
    $htmlInvoice = new Invoice($htmlExporter, 'Html invoice content');
    $pdfInvoice->export();
    $htmlInvoice->export();

    $pdfReport = new Report($pdfExporter, 'Pdf report content');
    $htmlReport = new Report($htmlExporter, 'Html report content');
    $pdfReport->export();
    $htmlReport->export();
?>
