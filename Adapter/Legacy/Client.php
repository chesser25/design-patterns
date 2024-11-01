<?php
    require_once 'LegacyLogger.php';
    require_once 'LegacyLoggerContract.php';
    require_once 'LoggerAdapter.php';
    require_once 'Logger.php';

    class Client
    {
        private LegacyLoggerContract $logger;
        public function __construct(LegacyLoggerContract $logger)
        {
            $this->logger = $logger;
        }

        public function main(): void {
            try {
                throw new Exception('Some business logic exception thrown');
            } catch (Exception $e) {
                $this->logger->logError($e->getMessage());
            }
        }
    }

    // Work with legacy logger
    $legacyLogger = new LegacyLogger();
    (new Client($legacyLogger))->main();

    // Work with new logger
    $logger = new Logger();
    $loggerAdapter = new LoggerAdapter($logger);
    (new Client($loggerAdapter))->main();
?>
