<?php
    require_once 'CarFactory.php';
    require_once __DIR__ . '/../Product/Car.php';
    require_once __DIR__ . '/../Product/Audi.php';
    
    class AudiFactory extends CarFactory
    {
        public function create(): Car {
            return new Audi();
        }
    }
?>
