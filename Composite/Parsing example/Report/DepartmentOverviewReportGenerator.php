<?php
    class DepartmentOverviewReportGenerator implements ReportGenerator
    {
        private Parser $parser;
        private Serializer $serializer;
        
        public function __construct(
            Parser $parser,
            Serializer $serializer
        ) {
            $this->parser = $parser;
            $this->serializer = $serializer;
        }

        public function generate(string $jsonFile): array {
            $data = $this->parser->parse($jsonFile);
            $company = $this->serializer->deserialize($data);

            if (false === $company instanceof Composite) {
                throw new Exception('Invalid instance');
            }

            return $company->getInfo();
        }
    }
?>
