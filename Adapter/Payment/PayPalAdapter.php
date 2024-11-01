<?php
    class PayPalAdapter implements PayPalRequest
    {
        private PaymentProcessor $paymentProcessor;
        public function __construct(PaymentProcessor $paymentProcessor)
        {
            $this->paymentProcessor = $paymentProcessor;
        }

        public function getToken(): string {
            $data = $this->paymentProcessor->getCredentials();

            if (
                [] === $data ||
                false === isset($data['token']) ||
                false === is_string($data['token'])
            ) {
                throw new Exception('Token not found or invalid');
            }

            return $data['token'];
        }

        public function getEmail(): string {
            $data = $this->paymentProcessor->getCredentials();

            if (
                [] === $data ||
                false === isset($data['email']) ||
                false === is_string($data['email'])
            ) {
                throw new Exception('Email not found or invalid');
            }

            return $data['email'];
        }

        public function getData(): string {
            $data = $this->paymentProcessor->getPaymentData();

            if (
                [] === $data ||
                false === isset($data['card']) ||
                false === is_string($data['card'])
            ) {
                throw new Exception('Card data not found');
            }

            return json_encode($data);
        }
    }
?>
