<?php

interface EntityInterface {
    public function __get($attr);
    public function __set($attr, $value);
    public function save();
    public function delete();
    public static function all();
    public static function find($id);
    public function where($attr, $value);
    public function first($attr, $value);
    public function belongsTo($class, $prop);
    public function beslongsToMany($class, $prop, $table, $key, $foreign);
    public function intermediate($table, $key, $value, $foreign);
}