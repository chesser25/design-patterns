<?php
    require_once __DIR__ . '/Component.php';

    abstract class ComplexComponent implements Component
    {
        protected array $components = [];

        public function add(Component $component): void {
            if (true === array_key_exists($component->getName(), $this->components)) {
                throw new Exception('Element has already been added');
            }

            $this->components[$component->getName()] = $component;
        }

        public function remove(Component $component): void {
            if (false === array_key_exists($component->getName(), $this->components)) {
                throw new Exception('Element does not exist');
            }

            unset($this->components[$component->getName()]);
        }
    }
?>