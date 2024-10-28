<?php
    require_once 'Product/Recipe.php';
    require_once 'Builder.php';

    class RecipeBuilder implements Builder
    {
        private Recipe $recipe;

        public function __construct()
        {
            $this->reset();
        }

        public function addMilk(): void {
            $this->recipe->setMilk();
        }

        public function addCoconut(): void {
            $this->recipe->setCoconut();
        }
        
        private function reset(): void {
            $this->recipe = new Recipe();
        }

        public function getProduct(): Recipe {
            return $this->recipe;
        }
    }
?>
