<?php
/**
 * Created by PhpStorm.
 * User: Lisanne
 * Date: 19-12-2017
 */
Class Pages extends Controller {
    public function __construct(){
        $this->postModel = $this->model('Post');
    }

    public function index(){
        $posts = $this->postModel->getPosts();

        $data = [   'title' => 'Homepagina!',
                    'posts' => $posts];
        $this->view('pages/index', $data);
    }

    public function about(){
        $data = ['title' => 'About'];

        $this->view('pages/about', $data);
    }
}