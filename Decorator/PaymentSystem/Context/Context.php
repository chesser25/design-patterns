<?php
    interface Context {
        public function setData(array $data): void;
        public function getData(): array;
        public function canProcess(): bool;
        public function setStatus(bool $status): void;
    }
?>
