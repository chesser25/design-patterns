<?php
    require_once 'Processor.php';
    require_once 'Context/Context.php';
    require_once 'Logger/Logger.php';

    class PaymentProcessor implements Processor
    {
        private Logger $logger;
        public function __construct(Logger $logger)
        {
            $this->logger = $logger;
        }

        public function handle(Context $context): Context {
            $this->logger->log('Handle payment');

            return $context;
        }
    }
?>
