<?php

class Ingredient extends Entity 
{
    protected $id;
    protected $name;
    protected $recipes;
    protected static $dao = "IngredientDAO";

    public function __construct ($id, $name, $recipes = false) 
    {
        $this->id = $id;
        $this->name = $name;
        $this->consoles = $recipes;
    }
    public function __toString () 
    {
        return "{$this->id} : {$this->name}";
    }
    public function __get ($prop) 
    {
        if (property_exists($this, $prop)) 
        {
            if ($prop == "recipes") 
            {
                return $this->recipes();
            }
            return $this->$prop;
        }
    }
    public function recipes () {
        return $this->belongsToMany(Recipe::class, "recipes", "ingredient_recipe", "ingredient_id", "recipe_id");
    } 
}