<?php
    class Request
    {
        private string $method;
        private array $headers;
        private string $authToken;
        private array $query;
        private array $body;

        public function setHeaders(array $headers): void {
            $this->headers = $headers;
        }

        public function setMethod(string $method): void {
            $this->method = $method;
        }

        public function setAuthToken(string $authToken): void {
            $this->authToken = $authToken;
        }

        public function setQuery(array $query): void {
            $this->query = $query;
        }

        public function setBody(array $body): void {
            $this->body = $body;
        }
    }
?>
