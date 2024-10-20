<?php
    require_once __DIR__ . '/../Glasses.php';

    class GucciGlasses implements Glasses
    {
        public function getPrice(): string {
            return '300 USD';
        }
    }
?>
