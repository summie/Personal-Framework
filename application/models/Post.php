<?php
/**
 * Created by PhpStorm.
 * User: Lisanne
 * Date: 8-1-2018
 */
Class Post{
    private $db;

    public function __construct(){
        $this->db = new Database;
    }

    public function getPosts(){
        $this->db->query("SELECT * FROM users");

        return $this->db->resultSet();

    }
}