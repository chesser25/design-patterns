<?php
    interface LoggerContract
    {
        public function logError(string $message, array $context): void;
    }
?>
