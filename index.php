<?php
require('Models/Entities/EntityInterface.php');
require('Models/Entities/Entity.php');
require('Models/Entities/Recipe.php');
require('Models/Entities/Ingredient.php');
require('Models/Entities/Category.php');
require('Models/DAO/DAOInterface.php');
require('Models/DAO/DAO.php');
require('Models/DAO/RecipeDAO.php');
require('Models/DAO/IngredientDAO.php');
require('Models/DAO/CategoryDAO.php');

$recipe = Recipe::first('name', 'Oeufs aux lardons');
echo $recipe->name;

//$type = Type::first('name', 'Souls Like');

//$type->associate($elden, 'type');
