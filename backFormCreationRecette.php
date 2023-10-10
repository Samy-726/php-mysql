<?php

if( !isset($_POST['title']) || !isset($_POST['recipe'])){
    echo 'Il faut un titre et une recette pour soumettre le formulaire.';
    return;
}

$tilte = $_POST['title'];
$recipe = $_POST['recipe'];

try {
    $db = new PDO(
        'mysql:host=localhost;dbname=my_recipes;charset=utf8',
        'root',
        'root',
        [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
    );
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(Exception $e) {
    die('Erreur : '.$e->getMessage());
}

$sqlQuery = 'INSERT INTO recipes(title, recipe, author, is_enabled) VALUES (:title, :recipe, :author, :is_enabled)';

$insertRecipe = $db->prepare($sqlQuery);

$insertRecipe->execute([
    'title' => $title,
    'recipe' => $recipe,
    'author' => $user,
    'is_enabled' => 1,
    
]);
?>