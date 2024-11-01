<?php
    require_once 'PayPal/PayPalApi.php';
    require_once 'Stripe/StripeApi.php';
    require_once 'CustomPaymentProcessor.php';
    require_once 'PayPal/PayPalRequest.php';
    require_once 'Stripe/StripeRequest.php';
    require_once 'PayPalAdapter.php';
    require_once 'StripeAdapter.php';

    // API processing part
    function processPayPal(PayPalRequest $payPalRequest): void {
        $payPalApi = new PayPalApi();
        $payPalApi->pay($payPalRequest);
    }

    function processStripe(StripeRequest $stripeRequest): void {
        $stripeApi = new StripeApi();
        $stripeApi->pay($stripeRequest);
    }

    function client(PaymentProcessor $paymentProcessor, string $userPaymentSelection): void {
        if ("paypal" === $userPaymentSelection) {
            $payPalAdapter = new PayPalAdapter($paymentProcessor);
            processPayPal($payPalAdapter);

            return;
        }

        if ("stripe" === $userPaymentSelection) {
            $stripeAdapter = new StripeAdapter($paymentProcessor);
            processStripe($stripeAdapter);

            return;
        }

        throw new Exception('Payment method is not supported');
    }

    echo 'Pay via PayPal' . '<br>';
    client(new CustomPaymentProcessor(), 'paypal');

    echo 'Pay via Stripe' . '<br>';
    client(new CustomPaymentProcessor(), 'stripe');
?>
