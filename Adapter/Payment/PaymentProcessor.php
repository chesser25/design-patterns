<?php
    interface PaymentProcessor
    {
        public function getCredentials(): array;
        public function getPaymentData(): array;
    }
?>
