<?php

use App\Models\Recipe;
use App\Storage\SessionRecipeStorage;
use App\RecipeManager;

// Autoload
require '/autoload.php';

// Initialiser la session
session_start();

// Créer le stockage en session
$storage = new SessionRecipeStorage();

// Créer le gestionnaire de recettes
$manager = new RecipeManager($storage);

// Créer une recette
$recipe = new Recipe;
$recipe->setCreatedAt(new DateTime())
    ->setName('Fondant au chocolat mi-cuit')
    ->setDescription('La recette du fameux fondant au chocolat mi-cuit.')
    ->setPeople(4)
    ->setPreparationTime(40);
$addedRecipeId = $manager->addRecipe($recipe);

// Mettre à jour une recette
$recipeToUpdate = $manager->getRecipe($addedRecipeId);
$recipeToUpdate->setPreparationTime(60);
$manager->updateRecipe($recipeToUpdate);

// Obtenir toutes les recettes
$recipes = $manager->getRecipes();
print_r($recipes);
