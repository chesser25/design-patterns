<?php
    interface Notification
    {
        public function getMessage(): string;
        public function getNotificationType(): string;
        public function notify(): void;
    }
?>
