<?php
    require_once 'Processor.php';
    require_once 'Context/Context.php';
    require_once 'Logger/Logger.php';

    class EmailSender implements Processor
    {
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

            $this->processor->handle($context);

            $this->send($context->getData());

            return $context;
        }

        private function send(array $data): void {
            if (false === isset($data['email'])) {
                $this->logger->log('Missing email');

                throw new Exception('Missing email');
            }

            $this->logger->log('Sending to email: ' . $data['email']);
        }
    }
?>
