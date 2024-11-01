<?php
    class PayPalApi
    {
        public function pay(PayPalRequest $request): void {
            echo 'Processing PayPal request' . '<br>';
            var_dump($request);
            echo  '<br>';
            echo 'Payment via PayPal was successfull!' . '<br>';
        }
    }
?>
