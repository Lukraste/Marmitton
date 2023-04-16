<?php

class Category extends Entity {
    protected $id;
    protected $name;
    protected $recipes;
    protected static $dao = "CategoryDAO";

    public function __construct ($id, $name, $recipes = false) {
        $this->id = $id;
        $this->name = $name;
        $this->games = $recipes;
    }
    public function __get ($prop) {
        if (property_exists($this, $prop)) {
            if ($prop == "recipes") {
                return $this->recipes();
            }
            return $this->$prop;
        }
    }
    public function __toString () {
        return "{$this->id} : {$this->name}";
    }
    public function recipes () {
        return $this->hasMany(Recipe::class, "recipes", "category_id");
    }
}