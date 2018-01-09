<?php
/**
 * Created by PhpStorm.
 * User: Lisanne
 * Date: 8-1-2018
 */
// You need to extend Models to recieve DB connection
Class Post extends Models {

    public function __construct(){
       // Place this Parental only if your using a __Construct!
       parent::__construct();

    }

    public function getPosts(){
        $this->db->query("SELECT * FROM users");

        return $this->db->resultSet();
    }
}