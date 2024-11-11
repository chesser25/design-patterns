<?php
    require_once __DIR__ . '/Component.php';

    class File implements Component
    {
        private string $name;
        private float $size;
        public function __construct(string $name, float $size)
        {
            $this->name = $name;
            $this->size = $size;
        }

        public function getSize(): float
        {
            return $this->size;
        }

        public function getName(): string {
            return $this->name;
        }
    }
?>