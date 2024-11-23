<?php
    require_once 'Logger/Logger.php';

    class CustomLogger implements Logger
    {
        public function log(string $message): void {
            echo $message . '<br>';
        }
    }
?>
