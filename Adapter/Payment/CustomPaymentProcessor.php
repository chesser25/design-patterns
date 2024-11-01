<?php
    require_once 'PaymentProcessor.php';

    class CustomPaymentProcessor implements PaymentProcessor
    {
        private string $token;
        private string $username;
        private string $password;
        private string $card;
        private string $email;

        public function __construct()
        {
            $this->token = '12323r34434';
            $this->username = 'Andy';
            $this->password = 'querty';
            $this->card = '4111111111111111';
            $this->email = 'test@gmail.com';
        }


        public function getCredentials(): array {
            return [
                'token' => $this->token,
                'username' => $this->username,
                'password' => $this->password,
                'email' => $this->email,
            ];
        }

        public function getPaymentData(): array {
            return [
                'card' => $this->card
            ];
        }
    }
?>
