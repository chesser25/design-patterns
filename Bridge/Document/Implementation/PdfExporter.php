<?php
    require_once 'Exporter.php';

    class PdfExporter implements Exporter
    {
        public function export(string $content): void {
            echo 'Exporting pdf content ...' . '<br>';
            echo $content . '<br>';
            echo 'Exporting pdf finished!' . '<br>';
        }
    }
?>
