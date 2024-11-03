<?php
    require_once 'Notification.php';
    require_once __DIR__ . '/../DTO/Order.php';
    require_once __DIR__ . '/../Implementation/Notifier.php';

    class OrderNotification implements Notification
    {
        private const NOTIFICATION_TYPE = 'ORDER_NOTIFICATION_TYPE';

        private Notifier $notifier;
        private Order $order;

        public function __construct(Notifier $notifier, Order $order)
        {
            $this->notifier = $notifier;
            $this->order = $order;
        }

        public function getMessage(): string {
            return json_encode($this->order->getOrderData());
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
