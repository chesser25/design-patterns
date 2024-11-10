<?php
    require_once __DIR__ . '/Leaf.php';

    abstract class Component implements Leaf
    {
        protected array $leaves = [];

        public function add(Leaf $leaf): void {
            if (true === array_key_exists($leaf->getName(), $this->leaves)) {
                throw new Exception('Element has already been added');
            }

            $this->leaves[$leaf->getName()] = $leaf;
        }

        public function remove(Leaf $leaf): void {
            if (false === array_key_exists($leaf->getName(), $this->leaves)) {
                throw new Exception('Element does not exist');
            }

            unset($this->leaves[$leaf->getName()]);
        }
    }
?>