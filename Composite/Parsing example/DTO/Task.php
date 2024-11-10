<?php
    require_once __DIR__ . '/Report/Leaf.php';

    class Task implements Leaf
    {
        private string $taskName;
        private string $deadline;

        public function __construct(string $taskName, string $deadline)
        {
            $this->taskName = $taskName;
            $this->deadline = $deadline;
        }

        public function getInfo(): array
        {
            return [
                'deadline' => $this->deadline
            ];
        }

        public function getName(): string
        {
            return $this->taskName;
        }
    }
?>
