<?php
    require_once __DIR__ . '/File.php';
    require_once __DIR__ . '/Folder.php';

    $firstFile = new File('first file', 2);
    $secondFile = new File('second file', 5);
    $innerFolder = new Folder('inner folder');
    $innerFolder->add($firstFile);
    $innerFolder->add($secondFile);
    $thirdFile = new File('third file', 7);

    $rootFolder = new Folder('root folder');
    $rootFolder->add($innerFolder);
    $rootFolder->add($thirdFile);

    $rootFolder->remove($thirdFile);

    echo 'Total size is ' . $rootFolder->getSize() . 'Mb';
?>