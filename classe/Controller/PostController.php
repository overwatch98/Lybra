<?php

namespace Lybra\Controller;
use Lybra\App;
use Lybra\Controller;

class PostController extends Controller{

    public function index(){
        $db = App::getDb();
        $posts = $db->getAll("posts");
        $this->render('homeView');
    }

}