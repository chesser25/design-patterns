<?php
    require_once 'RecipeBuilder.php';
    require_once 'Director.php';
    require_once 'ChocolateBuilder.php';

    // Grab recipe to prepare chocolate
    $recipeBuilder = new RecipeBuilder();
    $director = new Director($recipeBuilder);
    $director->build();
    $recipe = $recipeBuilder->getProduct();

    // Create chocolate
    $chocolateBuilder = new ChocolateBuilder();
    $director = new Director($chocolateBuilder);
    $director->build();
    $chocolate = $chocolateBuilder->getProduct();
?>
