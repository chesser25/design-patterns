<?php
    require_once __DIR__ . '/../Watch.php';

    class GucciWatch implements Watch
    {
        public function getPrice(): string {
            return '100 EUR';
        }

        public function getCurrentTime(): string {
            return '08:44:02 PM';
        }
    }
?>
