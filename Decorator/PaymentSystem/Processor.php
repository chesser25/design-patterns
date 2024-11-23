<?php
    require_once 'Context/Context.php';

    interface Processor {
        public function handle(Context $context): Context;
    }
?>
