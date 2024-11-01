<?php
    interface StripeRequest
    {
        public function getUsername(): string;
        public function getPassword(): string;
        public function getData(): string;
    }
?>
