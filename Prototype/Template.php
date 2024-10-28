<?php
    interface Template
    {
        public function clone(): Template;
        public function getColor(): string;
        public function getTitle(): string;
    }
?>
