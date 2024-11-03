<?php
    class Payment
    {
        private array $paymentData;
        public function __construct(array $paymentData)
        {
            $this->paymentData = $paymentData;
        }

        public function getPaymentData(): array {
            return $this->paymentData;
        }
    }
?>
