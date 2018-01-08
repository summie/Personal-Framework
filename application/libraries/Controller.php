<?php
/**
 * Created by PhpStorm.
 * User: Lisanne
 * Date: 20-12-2017
 * Base Controller
 * Loads the models & views
 */

 class Controller{
     // Ophalen model
     public function model($model){
         // Vereist model bestand
         require_once '../application/models/' . $model . '.php';


         // Bevestig model
         return new $model();
     }

     // Ophalen view
     public function view($view, $data = []){
         // Controleer de view
         if(file_exists('../application/views/' . $view . '.php')){
             require_once '../application/views/' . $view . '.php';
         } else {
             // view bestaat niet
             die('View bestaat niet!');
         }
     }
 }

