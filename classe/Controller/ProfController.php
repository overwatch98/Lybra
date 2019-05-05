<?php

namespace Lybra\Controller;
use Lybra\App;
use Lybra\Controller;

class ProfController extends Controller{

    protected $template = TEMPLATE;

    public function index(){
        $db = App::getDb();
        $profs = $db->query("SELECT * FROM profs ORDER BY id DESC")->fetchAll();
        $this->render('views.prof', compact('profs'));
    }

}