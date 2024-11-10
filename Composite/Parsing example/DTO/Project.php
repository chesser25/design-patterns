<?php
    require_once __DIR__ . '/Report/Leaf.php';
    
    class Project implements Leaf
    {
        private string $projectName;
        private string $deadline;
        private bool $isActive;

        public function __construct(string $projectName, string $deadline, bool $isActive)
        {
            $this->projectName = $projectName;
            $this->deadline = $deadline;
            $this->isActive = $isActive;
        }

        public function getInfo(): array
        {
            return [
                'is_active' => $this->isActive
            ];
        }

        public function getName(): string
        {
            return $this->projectName;
        }
    }
?>
