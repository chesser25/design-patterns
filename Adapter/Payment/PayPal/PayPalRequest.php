<?php
    interface PayPalRequest
    {
        public function getToken(): string;
        public function getEmail(): string;
        public function getData(): string;
    }
?>
