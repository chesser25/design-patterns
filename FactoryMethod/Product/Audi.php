<?php
    require_once 'Car.php';

    class Audi implements Car
    {
        public function go(): void {
            echo 'Lets go using Audi <br>';
        }

        public function stop(): void {
            echo 'Stop Audi <br>';
        }

        public function charge(): bool {
            echo 'Start charging Audi with petrol <br>';
            echo 'Stop charging Audi with petrol <br>';
            return true;
        }
    }
?>
