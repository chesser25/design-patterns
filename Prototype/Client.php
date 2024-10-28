<?php
    require_once 'UserDocuments.php';
    require_once 'ReportTemplate.php';
    require_once 'ResumeTemplate.php';

    $userDocuments = new UserDocuments();

    $reportTemplate = new ReportTemplate('First red report', 'red', 121);
    $userDocuments->addDocument($reportTemplate);

    $anotherReportTemplate = new ReportTemplate('First green report', 'green', 200);
    $userDocuments->addDocument($anotherReportTemplate);

    $resumeTemplate = new ResumeTemplate('First red resume', 'Arial', 'red', 400);
    $userDocuments->addDocument($resumeTemplate);

    $anotherResumeTemplate = new ResumeTemplate('First black resume', 'Times new romain', 'black', 300);
    $userDocuments->addDocument($anotherResumeTemplate);

    foreach ($userDocuments->cloneRedDocuments() as $clonedRedDocument) {
        echo $clonedRedDocument->getTitle() . '<br>';
    }
?>
