<?php
    require_once __DIR__ . '/../Product/Watch.php';
    require_once __DIR__ . '/../Product/Bag.php';
    require_once __DIR__ . '/../Product/Glasses.php';
    require_once __DIR__ . '/../Product/Gucci/GucciBag.php';
    require_once __DIR__ . '/../Product/Gucci/GucciWatch.php';
    require_once __DIR__ . '/../Product/Gucci/GucciGlasses.php';

    class GucciFactory implements FashionFactory
    {

        public function createWatch(): Watch {
            return new GucciWatch();
        }

        public function createBag(): Bag {
            return new GucciBag();
        }

        public function createGlassess(): Glasses {
            return new GucciGlasses();
        }
    }
?>