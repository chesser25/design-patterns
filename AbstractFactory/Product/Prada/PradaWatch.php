<?php
    require_once __DIR__ . '/../Watch.php';

    class PradaWatch implements Watch
    {
        public function getPrice(): string {
            return '33.3 $';
        }

        public function getCurrentTime(): string {
            return '11:00:02 PM';
        }
    }
?>
