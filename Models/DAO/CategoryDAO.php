<?php

class CategoryDAO extends DAO 
{

    public function __construct () 
    {
        parent::__construct("categories");
    }
    public function store ($category) 
    {
        $statement = $this->db->prepare("INSERT INTO categories (name) VALUES (?)");
        return parent::insert($statement, [$category->name], $category);
    }
    public function update($category) 
    {
        $statement = $this->db->prepare("UPDATE categories SET name = ? WHERE id = ?");
        return parent::insert($statement, [$category->id, $category->name], $category);
    }
    public function create ($data) {
        if (empty($data["id"])) {
            return false;
        }
        return new Type(
            $data["id"] ?? false,
            $data["name"] ?? false,
            false
        );
    }
}