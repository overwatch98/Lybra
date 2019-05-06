<?php

namespace Lybra;

class AdminController{

    protected $template = ADMINTEMPLATE;

    public function render($view, $variables = []){
        ob_start();
        extract($variables);
        require ROOT . str_replace('.', '/', $view) . '.php';
        $content = ob_get_clean();
        require $this->template;
    }

}