<?php
    require_once __DIR__ . '/../Watch.php';

    class FendiWatch implements Watch
    {
        public function getPrice(): string {
            return '3000 EUR';
        }

        public function getCurrentTime(): string {
            return '12:23:00 AM';
        }
    }
?>
