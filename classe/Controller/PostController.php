<?php

namespace Lybra\Controller;
use Lybra\App;
use Lybra\Controller;

class PostController extends Controller{

    protected $template = TEMPLATE;

    public function index(){
        $db = App::getDb();
        $posts = $db->getAll("posts");
        $this->render('views.home', compact('posts'));
    }

    public function about(){
        $this->render('views.about');
    }

    public function contact(){
        $this->render('views.contact');
    }

}