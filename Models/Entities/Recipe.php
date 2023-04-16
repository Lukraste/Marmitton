<?php

class Recipe extends Entity 
{
    protected $id;
    protected $name;
    protected $category_id;
    protected $ingredients;
    protected static $dao = "RecipeDAO";

    public function __construct ($id, $name, $category_id, $ingredients = false) 
    {
        $this->id = $id;
        $this->name = $name;
        $this->type = $category_id;
        $this->consoles = $ingredients;
    }
    public function __toString () 
    {
        return "{$this->id} : {$this->name} ({$this->category})";
    }
    public function __get ($prop) 
    {
        if (property_exists($this, $prop)) 
        {
            if ($prop == "category_id") 
            {
                return $this->category();
            }
            if ($prop == "ingredients") 
            {
                return $this->ingredients();
            }
            return $this->$prop;
        }
    }
    public function ingredients () 
    {
        return $this->belongsToMany(Ingredient::class, "ingredients", "ingredient_recipe", "recipe_id", "ingredient_id");
    }
    public function category () 
    {
        return $this->belongsTo(Category::class, "category");
    }   
}