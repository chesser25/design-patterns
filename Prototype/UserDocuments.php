<?php
    require_once 'Template.php';

    class UserDocuments
    {
        private array $documents;

        public function __construct()
        {
            $this->documents = [];
        }

        public function addDocument(Template $template) {
            array_push($this->documents, $template);
        }

        public function cloneRedDocuments(): Generator {
            foreach($this->documents as $document) {
                if ($document->getColor() === 'red') {
                    yield $document->clone();
                }
            }
        }
    }
?>
