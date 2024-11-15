<?php
    require_once 'MessageSystem.php';
    
    class MessageTrackerDecorator implements MessageSystem
    {
        private MessageSystem $messageSystem;
        public function __construct(MessageSystem $messageSystem)
        {
            $this->messageSystem = $messageSystem;
        }

        public function send(string $message): void {
            $this->messageSystem->send($message);

            echo 'Message has been read' . '<br>';
        }
    }
?>
