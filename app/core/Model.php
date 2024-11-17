<?php

class Model {
    protected $table;
    protected static $db;
    protected static $tbl;
    protected static $mod;

    public function __construct(){
        static::$db = new Database;
        static::$tbl = $this->table;
        
        // var_dump($this->db);
    }

    // public function getTabel(){
    //     return $this->table;
    // }

    public static function getAll($where = null){
        new Static;
        if ($where == null) {
            static::$db->query('SELECT * FROM ' . static::$tbl);
        }else{
            static::$db->query('SELECT * FROM ' . static::$tbl . ' WHERE ' . $where);
        }
        return static::$db->resultSet();
    }
    
    public static function get($attributes = '*', $where = null){
        if ($where == null) {
            static::$db->query('SELECT '. $attributes .' FROM ' . static::$tbl);
        }else{
            static::$db->query('SELECT '. $attributes .' FROM ' . static::$tbl . ' WHERE ' . $where);
        }
        return static::$db->resultSet();
    }

    public static function delete($where){
        static::$db->query('DELETE FROM ' . static::$tbl . ' WHERE ' . $where);
    }

    public static function update($set, $where){
        static::$db->query('UPDATE ' . static::$tbl . ' SET ' . $set .' WHERE ' . $where);
    }
}