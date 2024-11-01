<?php
    class StripeApi
    {
        public function pay(StripeRequest $request): void {
            echo 'Processing Stripe request' . '<br>';
            var_dump($request);
            echo '<br>';
            echo 'Payment via Stripe was successfull!' . '<br>';
        }
    }
?>
