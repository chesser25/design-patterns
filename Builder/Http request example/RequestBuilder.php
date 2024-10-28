<?php
    require_once 'Builder.php';
    require_once 'Request.php';

    class RequestBuilder implements Builder
    {
        private Request $request;
        public function __construct()
        {
            $this->reset();
        }

        public function setHeaders(array $headers): Builder {
            $this->request->setHeaders($headers);

            return $this;
        }

        public function setMethod(string $method): Builder {
            $this->request->setMethod($method);
            
            return $this;
        }

        public function setAuthToken(string $authToken): Builder {
            $this->request->setAuthToken($authToken);
            
            return $this;
        }

        public function setQuery(array $query): Builder {
            $this->request->setQuery($query);
            
            return $this;
        }

        public function setBody(array $body): Builder {
            $this->request->setBody($body);
            
            return $this;
        }

        private function reset(): void {
            $this->request = new Request();
        }

        public function getRequest(): Request {
            $request = $this->request;
            $this->reset();
            
            return $request;
        }
    }
?>
