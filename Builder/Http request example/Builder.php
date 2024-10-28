<?php
    interface Builder
    {
        public function setHeaders(array $headers): Builder;

        public function setMethod(string $method): Builder;

        public function setAuthToken(string $authToken): Builder;

        public function setQuery(array $query): Builder;

        public function setBody(array $body): Builder;
    }
?>
