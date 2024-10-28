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
            $this->builder
                ->setHeaders([
                    'Content-type' => 'application/json'
                ])
                ->setMethod('GET')
                ->setAuthToken('123232323232')
                ->setQuery([
                    'page' => 1
                ])
                ->setBody([]);
        }
    }
?>