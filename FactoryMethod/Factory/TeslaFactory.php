<?php
    require_once 'CarFactory.php';
    require_once __DIR__ . '/../Product/Car.php';
    require_once __DIR__ . '/../Product/Tesla.php';
    
    class TeslaFactory extends CarFactory
    {
        public function create(): Car {
            return new Tesla();
        }
    }
?>
