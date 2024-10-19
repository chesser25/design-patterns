<?php
    require_once 'Car.php';

    class Tesla implements Car
    {
        public function go(): void {
            echo 'Lets go by Tesla <br>';
        }

        public function stop(): void {
            echo 'Stop Tesla <br>';
        }

        public function charge(): bool {
            echo 'Start charging Tesla with electricity <br>';
            echo 'Stop charging Tesla with electricity <br>';
            return true;
        }
    }
?>
