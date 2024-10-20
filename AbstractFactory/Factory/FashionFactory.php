<?php
    require_once __DIR__ . '/../Product/Bag.php';
    require_once __DIR__ . '/../Product/Watch.php';
    require_once __DIR__ . '/../Product/Glasses.php';

    interface FashionFactory
    {
        public function createWatch(): Watch;
        public function createBag(): Bag;
        public function createGlassess(): Glasses;
    }
?>
