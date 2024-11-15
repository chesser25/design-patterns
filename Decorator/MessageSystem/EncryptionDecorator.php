<?php
    require_once 'MessageSystem.php';
    
    class EncryptionDecorator implements MessageSystem
    {
        private MessageSystem $messageSystem;
        public function __construct(MessageSystem $messageSystem)
        {
            $this->messageSystem = $messageSystem;
        }

        public function send(string $message): void {
            $encryptedMessage = $this->encrypt($message);

            $this->messageSystem->send($encryptedMessage);
        }

        private function encrypt(string $message): string {
            $password="password";
            return openssl_encrypt($message,"AES-128-ECB", $password);
        }
    }
?>
