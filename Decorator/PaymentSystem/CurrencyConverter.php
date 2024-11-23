<?php
    require_once 'Processor.php';
    require_once 'Context/Context.php';
    require_once 'Logger/Logger.php';

    class CurrencyConverter implements Processor
    {
        private const USD_CURRENCY_RATE = 45;
        private Processor $processor;
        private Logger $logger;

        public function __construct(Processor $processor,Logger $logger)
        {
            $this->processor = $processor;
            $this->logger = $logger;
        }

        public function handle(Context $context): Context {
            if (false === $context->canProcess()) {
                return $context;
            }

            $data = $context->getData();
            $data = $this->convertToUsd($data);
            $context->setData($data);

            $this->processor->handle($context);

            return $context;
        }

        private function convertToUsd(array $data): array {
            if (false === isset($data['amount'])) {
                $this->logger->log('Missing amount');

                throw new Exception('Missing amount');
            }

            $this->logger->log('Converting amount to usd currency');
            $originalAmount = $data['amount'];
            $data['amount'] *= self::USD_CURRENCY_RATE;

            $this->logger->log(sprintf("Converted amount from %s to %s USD.", $originalAmount, $data['amount']));

            return $data;
        }
    }
?>
