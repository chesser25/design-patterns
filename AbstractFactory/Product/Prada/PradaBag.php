<?php
    require_once __DIR__ . '/../Bag.php';

    class PradaBag implements Bag
    {
        public function getContent(): string {
            return 'Butter!';
        }

        public function getPrice(): string {
            return '500 EUR';
        }
    }
?>
