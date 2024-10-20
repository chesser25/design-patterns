<?php
    require_once __DIR__ . '/../Bag.php';

    class GucciBag implements Bag
    {
        public function getContent(): string {
            return 'No content in Gucci bag!';
        }

        public function getPrice(): string {
            return '2500 USD';
        }
    }
?>
