<?php
    require_once __DIR__ . '/Parser.php';

    class JsonParser implements Parser
    {
        public function parse(string $pathToFile): array {
            $jsonContent = file_get_contents($pathToFile);
            $data = json_decode($jsonContent, true);

            if (JSON_ERROR_NONE !== json_last_error()) {
                throw new Exception("Error decoding JSON: " . json_last_error_msg());
            }

            return $data;
        }
    }
?>
