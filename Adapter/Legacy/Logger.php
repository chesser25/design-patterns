<?php
    require_once 'LoggerContract.php';

    class Logger implements LoggerContract
    {
        private const LOG_LEVEL_ERROR = 1;
        
        public function logError(string $message, array $context): void {
            $error = [
                'message' => $message,
                'log_level' => self::LOG_LEVEL_ERROR,
                'timestamp' => $context['timestamp'] ?? time(),
                'file' => $context['file'] ?? 'N/A',
                'line' => $context['line'] ?? 'N/A'
            ];
            
            echo json_encode($error);
        }
    }
?>
