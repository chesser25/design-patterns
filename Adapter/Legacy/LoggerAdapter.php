<?php
    require_once 'LegacyLoggerContract.php';
    require_once 'LoggerContract.php';
    
    class LoggerAdapter implements LegacyLoggerContract
    {
        private LoggerContract $logger;
        public function __construct(LoggerContract $logger)
        {
            $this->logger = $logger;
        }

        public function logError(string $message): void
        {
            $context = ['timestamp' => time(), 'file' => __FILE__, 'line' => __LINE__];
            $this->logger->logError($message, $context);
        }
    }
?>
