<?php
/**
 * Created by PhpStorm.
 * User: Lisanne
 * Date: 19-12-2017
 */
Class Pages extends Controller {
    public function __construct(){

    }

    public function index(){
        $data = ['title' => 'Welcome!'];
        $this->view('pages/index', $data);
    }

    public function about(){
        $this->view('pages/about');
    }
}