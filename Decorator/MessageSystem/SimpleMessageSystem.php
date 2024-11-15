<?php
    require_once 'MessageSystem.php';

    class SimpleMessageSystem implements MessageSystem
    {
        public function send(string $message): void {
            echo 'Send next message' . '<br>';
            echo $message . '<br>';
            echo 'Message has been sent' . '<br>';
        }
    }
?>
