<?php

class Model {
    protected $table;
    protected $id = 'id';
    protected static $db;
    protected static $tbl;
    protected static $mod;
    protected static $key;

    public function __construct(){
        static::$db = new Database;
        static::$tbl = $this->table;
        static::$key = $this->id;
        
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
        new Static;
        if ($where == null) {
            static::$db->query('SELECT '. $attributes .' FROM ' . static::$tbl);
        }else{
            static::$db->query('SELECT '. $attributes .' FROM ' . static::$tbl . ' WHERE ' . $where);
        }
        return static::$db->resultSet();
    }
    
    public static function find($attributes = '*', $where = null){
        new Static;
        if ($where == null) {
            static::$db->query('SELECT '. $attributes .' FROM ' . static::$tbl);
        }else{
            static::$db->query('SELECT '. $attributes .' FROM ' . static::$tbl . ' WHERE ' . $where);
        }
        return static::$db->single();
    }

    public static function destroy($where){
        new Static;
        static::$db->query('DELETE FROM ' . static::$tbl . ' WHERE '. static::$key .'=' . $where);
        static::$db->execute();
    }

    public static function insert($field,$value){
        new Static;
        static::$db->query('INSERT INTO ' . static::$tbl . ' ('. $field .') VALUES ('. $value .')');
        static::$db->execute();
    }

    public static function delete($where){
        new Static;
        static::$db->query('DELETE FROM ' . static::$tbl . ' WHERE ' . $where);
        static::$db->execute();
    }

    public static function update($set, $where){
        new Static;
        static::$db->query('UPDATE ' . static::$tbl . ' SET ' . $set .' WHERE ' . $where);
        static::$db->execute();
    }
}