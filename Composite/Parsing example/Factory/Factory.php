<?php
    require_once __DIR__ . '/../OutputDto/Report.php';

    interface Factory
    {
        public function create(string $file): Report;
    }
?>
