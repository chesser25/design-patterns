<?php
    require_once __DIR__ . '/../Implementation/Exporter.php';
    require_once 'Document.php';

    class Invoice implements Document
    {
        private string $content;
        private Exporter $exporter;
        public function __construct(Exporter $exporter, string $content)
        {
            $this->exporter = $exporter;
            $this->content = $content;
        }

        public function getContent(): string
        {
            return $this->content;
        }

        public function export(): void {
            $this->exporter->export($this->getContent());
        }
    }
?>
