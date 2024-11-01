<?php
    require_once 'LegacyLoggerContract.php';

    class LegacyLogger implements LegacyLoggerContract
    {
        public function logError(string $message): void {
            echo $message . '<br>';
        }
    }
?>
