<?php
    const MYSQL_HOST = 'localhost';
    const MYSQL_PORT = 3306;
    const MYSQL_NAME = 'my_recipes';
    const MYSQL_USER = 'root';
    const MYSQL_PASSWORD = 'root';
    try {
        $db = new PDO(
            'mysql:host=localhost;dbname=my_recipes;charset=utf8',
            'root',
            'root',
            [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION],
            );
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch(Exception $exception) {
        die('Erreur : '.$exception->getMessage());
    }
?>

<!-- On se connecte à MySQL -->
<?php include_once('mysql.php'); ?>
<!-- Si tout va bien, on peut continuer -->
<?php
    // On récupère tout le contenu de la table recipes
    $sqlQuery = 'SELECT * FROM recipes';
    $recipesStatement = $db->prepare($sqlQuery);
    $recipesStatement->execute();
    $recipes = $recipesStatement->fetchAll();
?>
<!-- On affiche chaque recette une à une -->
<?php foreach ($recipes as $recipe) : ?>
<p><?php echo $recipe['author']; ?> </p>
<?php endforeach; ?>