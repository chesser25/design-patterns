<?php
    require_once 'Product/Chocolate.php';
    require_once 'Builder.php';

    class ChocolateBuilder implements Builder
    {
        private Chocolate $chocolate;

        public function __construct()
        {
            $this->reset();
        }

        public function addMilk(): void {
            $this->chocolate->setMilk();
        }

        public function addCoconut(): void {
            $this->chocolate->setCoconut();
        }
        
        private function reset(): void {
            $this->chocolate = new Chocolate();
        }

        public function getProduct(): Chocolate {
            return $this->chocolate;
        }
    }
?>
