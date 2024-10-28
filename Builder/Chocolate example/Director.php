<?php
    require_once 'Builder.php';

    class Director
    {
        private Builder $builder;
        public function __construct(Builder $builder)
        {
            $this->builder = $builder;
        }

        public function build(): void {
            $this->builder->addMilk();
            $this->builder->addCoconut();
        }
    }
?>
