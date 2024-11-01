<?php
    class StripeAdapter implements StripeRequest
    {
        private PaymentProcessor $paymentProcessor;
        public function __construct(PaymentProcessor $paymentProcessor)
        {
            $this->paymentProcessor = $paymentProcessor;
        }

        public function getUsername(): string {
            $data = $this->paymentProcessor->getCredentials();

            if (
                [] === $data ||
                false === isset($data['username']) ||
                false === is_string($data['username'])
            ) {
                throw new Exception('Username not found or invalid');
            }

            return $data['username'];
        }

        public function getPassword(): string {
            $data = $this->paymentProcessor->getCredentials();

            if (
                [] === $data ||
                false === isset($data['password']) ||
                false === is_string($data['password'])
            ) {
                throw new Exception('Password not found or invalid');
            }

            return $data['password'];
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
