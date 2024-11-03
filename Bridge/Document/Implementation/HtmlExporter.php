<?php
    require_once 'Exporter.php';

    class HtmlExporter implements Exporter
    {
        public function export(string $content): void {
            echo 'Exporting html content ...' . '<br>';
            echo $content . '<br>';
            echo 'Exporting html finished!' . '<br>';
        }
    }
?>
