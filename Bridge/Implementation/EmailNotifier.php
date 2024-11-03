<?php
    require_once 'Notifier.php';

    class EmailNotifier implements Notifier
    {
        public function send(string $message): void {
            echo 'Notify by email:' . '<br>';
            echo $message . '<br>';
            echo 'Notification via email was sent'  . '<br>';
        }
    }
?>
