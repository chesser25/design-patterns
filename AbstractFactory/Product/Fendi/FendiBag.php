<?php
    require_once __DIR__ . '/../Bag.php';

    class FendiBag implements Bag
    {
        public function getContent(): string {
            return 'Sausage!';
        }

        public function getPrice(): string {
            return '100 USD';
        }
    }
?>
