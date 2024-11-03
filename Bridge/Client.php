<?php
    require_once 'DTO/Order.php';
    require_once 'DTO/Payment.php';
    require_once 'Abstraction/OrderNotification.php';
    require_once 'Abstraction/PaymentNotification.php';
    require_once 'Implementation/SmsNotifier.php';
    require_once 'Implementation/EmailNotifier.php';

    $emailNotfier = new EmailNotifier();
    $smsNotifier = new SmsNotifier();

    $order = new Order([
        'id' => 1,
        'description' => 'Some description'
    ]);
    $payment = new Payment([
        'transaction_id' => '1212121212',
        'amount' => 100,
        'currency' => 'USD'
    ]);

    $orderNotificationViaEmail = new OrderNotification($emailNotfier, $order);
    $orderNotificationViaSms = new OrderNotification($smsNotifier, $order);
    $orderNotificationViaSms->notify();
    $orderNotificationViaEmail->notify();

    $paymentNotificationViaEmail = new PaymentNotification($emailNotfier, $payment);
    $paymentNotificationViaSms = new PaymentNotification($smsNotifier, $payment);
    $paymentNotificationViaSms->notify();
    $paymentNotificationViaEmail->notify();
?>
