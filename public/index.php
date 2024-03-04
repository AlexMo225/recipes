<?php

require_once __DIR__ . '/../vendor/autoload.php';

use App\Models\Recipe;
use App\RecipeManager;
use App\Storage\MySqlDatabaseRecipeStorage;

$pdo = new PDO('mysql:host=localhost;dbname=recipes;unix_socket=/Applications/MAMP/tmp/mysql/mysql.sock', 'root', '');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$storage = new MySqlDatabaseRecipeStorage($pdo);
$manager = new RecipeManager($storage);

$recipe = new Recipe();
$recipe->setCreatedAt(new DateTime());
$recipe->setName('Pain au chocolat ');
$recipe->setDescription('La recette du croissant.');
$recipe->setPeople(4);
$recipe->setPreparationTime(40);

echo $recipe->getName();
echo $recipe->getDescription(); 
echo $recipe->getPreparationTime();


?>
