<?php
    require_once __DIR__ . '/../Product/Watch.php';
    require_once __DIR__ . '/../Product/Bag.php';
    require_once __DIR__ . '/../Product/Glasses.php';
    require_once __DIR__ . '/../Product/Prada/PradaBag.php';
    require_once __DIR__ . '/../Product/Prada/PradaWatch.php';
    require_once __DIR__ . '/../Product/Prada/PradaGlasses.php';

    class PradaFactory implements FashionFactory
    {
        public function createWatch(): Watch {
            return new PradaWatch();
        }

        public function createBag(): Bag {
            return new PradaBag();
        }

        public function createGlassess(): Glasses {
            return new PradaGlasses();
        }
    }
?>