<?php
    require_once __DIR__ . '/Factory.php';
    require_once __DIR__ . '/../Report/ReportGenerator.php';
    require_once __DIR__ . '/../OutputDto/Report.php';
    require_once __DIR__ . '/../OutputDto/DepartmentOverviewReport.php';

    class DepartmentOverviewReportFactory implements Factory
    {
        private ReportGenerator $reportGenerator;
        private Serializer $serializer;
        public function __construct(ReportGenerator $reportGenerator, Serializer $serializer)
        {
            $this->reportGenerator = $reportGenerator;
            $this->serializer = $serializer;
        }

        public function create(string $file): Report {
            $generatedReport = $this->reportGenerator->generate($file);

            return new DepartmentOverviewReport($this->serializer, $generatedReport);
        }
    }
?>
