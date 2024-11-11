<?php
    require_once __DIR__ . '/ComplexComponent.php';
    require_once __DIR__ . '/Component.php';

    class Folder extends ComplexComponent
    {
        private string $name;
        public function __construct(string $name)
        {
            $this->name = $name;
        }

        public function getSize(): float
        {
            $totalSize = 0;
            foreach ($this->components as $component) {
                if (false === $component instanceof Component) {
                    throw new Exception('Invalid instance');
                }

                $totalSize += $component->getSize();
            }

            return $totalSize;
        }

        public function getName(): string {
            return $this->name;
        }
    }
?>