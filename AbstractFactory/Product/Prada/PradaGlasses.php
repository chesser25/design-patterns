<?php
    require_once __DIR__ . '/../Glasses.php';

    class PradaGlasses implements Glasses
    {
        public function getPrice(): string {
            return '20 000 000 USD';
        }
    }
?>
