<?php
    require_once 'Notifier.php';

    class SmsNotifier implements Notifier
    {
        public function send(string $message): void {
            echo 'Notify by sms:'  . '<br>';
            echo $message . '<br>';
            echo 'Notification via sms was sent' . '<br>';
        }
    }
?>
