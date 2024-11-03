<?php
    require_once 'Notification.php';
    require_once __DIR__ . '/../DTO/Payment.php';
    require_once __DIR__ . '/../Implementation/Notifier.php';

    class PaymentNotification implements Notification
    {
        private const NOTIFICATION_TYPE = 'PAYMENT_NOTIFICATION_TYPE';

        private Notifier $notifier;
        private Payment $payment;

        public function __construct(Notifier $notifier, Payment $payment)
        {
            $this->notifier = $notifier;
            $this->payment = $payment;
        }

        public function getMessage(): string {
            return json_encode($this->payment->getPaymentData());
        }

        public function getNotificationType(): string {
            return self::NOTIFICATION_TYPE;
        }

        public function notify(): void
        {
            $this->notifier->send($this->getMessage());
        }
    }
?>
