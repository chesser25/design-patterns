<?php
    require_once __DIR__ . '/Component.php';
    require_once __DIR__ . '/Leaf.php';

    class Folder extends Component
    {
        private string $name;
        public function __construct(string $name)
        {
            $this->name = $name;
        }

        public function getSize(): float
        {
            $totalSize = 0;
            foreach ($this->leaves as $leaf) {
                if (false === $leaf instanceof Leaf) {
                    throw new Exception('Invalid instance');
                }

                $totalSize += $leaf->getSize();
            }

            return $totalSize;
        }

        public function getName(): string {
            return $this->name;
        }
    }
?>