<?php
    interface Serializer
    {
        public function serialize(array $data): string;
        public function deserialize(array $data): object;
    }
?>
