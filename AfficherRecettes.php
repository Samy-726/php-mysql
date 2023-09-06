<?php
$recipes = [
    [
        'title' => 'Cassoulet',
        'recipe' => '',
        'author' => 'mickael.andrieu@exemple.com',
        'is_enabled' => true,
    ],

    [
        'title' => 'Flageolet',
        'recipe' => '',
        'author' => 'mathieu.nebra@exemple.com',
        'is_enabled' => true,
    ],

    [
        'title' => 'boeuf bourgignon',
        'recipe' => '',
        'author' => 'nathan.plt@exemple.com',
        'is_enabled' => true,
    ],
];
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Affichage des recettes</title>
    </head>
    <body>
    <?php
        foreach($recipes as $recipe) {?>
            <h2>  <?php echo $recipe['title'] ?></h2>
            <br>
            <p> Etape 1 : </p>
            <br>
            <p> <?php echo $recipe['author'] ?></p>
            <br>
            <?php }?>
    </body>
</html>