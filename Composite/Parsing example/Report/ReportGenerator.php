<?php
    interface ReportGenerator
    {
        public function generate(string $file): array;
    }
?>
