<?php
    require_once 'Context.php';

    class DbContext implements Context
    {
        private array $data = [];
        private bool $canProcess = true;

        public function setData(array $data): void {
            $this->data = $data;
        }

        public function getData(): array {
            return $this->data;
        }

        public function canProcess(): bool
        {
            return $this->canProcess;
        }

        public function setStatus(bool $status): void {
            $this->canProcess = $status;
        }
    }
?>
