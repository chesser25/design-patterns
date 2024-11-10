<?php
    require_once __DIR__ . '/Report.php';
    require_once __DIR__ . '/../Serializer/Serializer.php';

    class DepartmentOverviewReport implements Report
    {
        private Serializer $serializer;
        private array $data;

        public function __construct(Serializer $serializer, array $data)
        {
            $this->serializer = $serializer;
            $this->data = $data;
        }

        public function show(): string {
            return $this->serializer->serialize($this->data);
        }
    }
?>
