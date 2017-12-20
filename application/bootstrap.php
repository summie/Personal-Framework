<?php
/**
 * Created by PhpStorm.
 * User: Lisanne
 * Date: 19-12-2017
 */
// Laad Config
require_once 'config/config.php';

// Automatisch laden van Core Libraries
    spl_autoload_register(function($className){
        require_once  'libraries/'. $className. '.php';
    });