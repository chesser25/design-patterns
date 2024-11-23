<?php
    require_once 'Processor.php';
    require_once 'CurrencyConverter.php';
    require_once 'EmailSender.php';
    require_once 'FraudDetector.php';
    require_once 'PaymentProcessor.php';
    require_once 'Context/DbContext.php';
    require_once 'Logger/CustomLogger.php';

    $logger = new CustomLogger();
    $paymentProcessor = new PaymentProcessor($logger);
    $emailSender = new EmailSender($paymentProcessor, $logger);
    $currencyConverter = new CurrencyConverter($emailSender, $logger);
    $fraudDetector = new FraudDetector($currencyConverter, $logger);

    $processors = [$fraudDetector, $currencyConverter, $emailSender];
    $paymentProcessor = array_reduce(
        array_reverse($processors),
        fn($next, $current) => new $current($next, $logger),
        new PaymentProcessor($logger)
    );

    $context = new DbContext();
    $context->setData([
        'email' => 'test@google.com',
        'amount' => 100
    ]);
    try {
        var_dump($paymentProcessor->handle($context));
    } catch(Throwable $e) {
        echo $e->getMessage();
    }   
?>

