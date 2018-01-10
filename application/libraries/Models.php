<?php

/**
 * Created by PhpStorm.
 * User: Lisanne
 * Date: 9-1-2018
 */
class Models
{

    protected $db;

    public function __construct()
    {
        $this->db = new Database;
    }

}