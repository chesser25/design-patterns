<?php
    require_once __DIR__ . '/../Product/Watch.php';
    require_once __DIR__ . '/../Product/Bag.php';
    require_once __DIR__ . '/../Product/Glasses.php';
    require_once __DIR__ . '/../Product/Fendi/FendiBag.php';
    require_once __DIR__ . '/../Product/Fendi/FendiWatch.php';
    require_once __DIR__ . '/../Product/Fendi/FendiGlasses.php';

    class FendiFactory implements FashionFactory
    {
        public function createWatch(): Watch {
            return new FendiWatch();
        }

        public function createBag(): Bag {
            return new FendiBag();
        }

        public function createGlassess(): Glasses {
            return new FendiGlasses();
        }
    }
?>
