<?php
    require_once __DIR__ . '/Parser/JsonParser.php';
    require_once __DIR__ . '/Serializer/CustomSerializer.php';
    require_once __DIR__ . '/Factory/DepartmentOverviewReportFactory.php';
    require_once __DIR__ . '/Report/DepartmentOverviewReportGenerator.php';

    $parser = new JsonParser();
    $serializer = new CustomSerializer();
    $reportGenerator = new DepartmentOverviewReportGenerator($parser, $serializer);
    $factory = new DepartmentOverviewReportFactory($reportGenerator, $serializer);
    
    $report = $factory->create('income_data.json');
    echo $report->show();
?>