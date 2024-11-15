<?php
    require_once 'SimpleMessageSystem.php';
    require_once 'EncryptionDecorator.php';
    require_once 'CompressionDecorator.php';
    require_once 'MessageTrackerDecorator.php';

    $messageSystem = new SimpleMessageSystem();
    $encryptedMessageSystem = new EncryptionDecorator($messageSystem);
    $compressedMessageSystem = new CompressionDecorator($encryptedMessageSystem);
    $trackedMessageSystem = new MessageTrackerDecorator($compressedMessageSystem);

    $message = 'test';
    $trackedMessageSystem->send($message);
?>

