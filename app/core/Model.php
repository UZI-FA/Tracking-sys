<?php

class Model {
    protected $table;
    protected $db;

    public function __construct(){
        $this->db = new Database;
        // var_dump($this->db);
    }

    // public function getTabel(){
    //     return $this->table;
    // }

    public function getAll($where = null){
        if ($where == null) {
            $this->db->query('SELECT * FROM ' . $this->table);
        }else{
            $this->db->query('SELECT * FROM ' . $this->table . ' WHERE ' . $where);
        }
        return $this->db->resultSet();
    }
    
    public function get($attributes = '*', $where = null){
        if ($where == null) {
            $this->db->query('SELECT '. $attributes .' FROM ' . $this->table);
        }else{
            $this->db->query('SELECT '. $attributes .' FROM ' . $this->table . ' WHERE ' . $where);
        }
        return $this->db->resultSet();
    }
}