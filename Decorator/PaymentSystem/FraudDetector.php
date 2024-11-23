<?php
    require_once 'Processor.php';
    require_once 'Context/Context.php';
    require_once 'Logger/Logger.php';

    class FraudDetector implements Processor
    {
        private const FRAUD_EMAILS = [
            'iamfrauder@google.com'
        ];

        private Processor $processor;
        private Logger $logger;

        public function __construct(Processor $processor, Logger $logger)
        {
            $this->processor = $processor;
            $this->logger = $logger;
        }

        public function handle(Context $context): Context {
            if (false === $context->canProcess()) {
                return $context;
            }

            $this->logger->log('Checking is fraud payment');

            if (false === $this->isDataValid($context->getData())) {
                $this->logger->log('Processing halted; cannot continue.');
                $context->setStatus(false);

                return $context;
            }
            
            $this->processor->handle($context);
            return $context;
        }

        private function isDataValid(array $data): bool {
            if (false === isset($data['email'])) {
                $this->logger->log('Missing email field');

                throw new Exception('Missing email field');
            }

            if (true === in_array($data['email'], self::FRAUD_EMAILS, true)) {
                return false;
            }

            return true;
        }
    }
?>
