<?php
    require_once 'MessageSystem.php';

    class CompressionDecorator implements MessageSystem
    {
        private MessageSystem $messageSystem;
        public function __construct(MessageSystem $messageSystem)
        {
            $this->messageSystem = $messageSystem;
        }

        public function send(string $message): void {
            $compressedMessage = $this->compress($message);

            $this->messageSystem->send($compressedMessage);
        }

        private function compress(string $message): string {
            return gzcompress($message);
        }
    }
?>
