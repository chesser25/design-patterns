<?php
    require_once 'RequestBuilder.php';
    require_once 'Director.php';

    $builder = new RequestBuilder();
    $director = new Director($builder);
    $director->build();

    $request = $builder->getRequest();

    var_dump($request);
?>
