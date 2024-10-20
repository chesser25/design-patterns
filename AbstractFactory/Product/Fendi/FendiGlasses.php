<?php
    require_once __DIR__ . '/../Glasses.php';

    class FendiGlasses implements Glasses
    {
        public function getPrice(): string {
            return '10000 Euro';
        }
    }
?>
