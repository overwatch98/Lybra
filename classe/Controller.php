<?php

namespace Lybra;

class Controller{

    protected $template;

    public function render($view, $variables = []){
        ob_start();
        extract($variables);
        require ROOT . str_replace('.', '/', $view) . '.php';
        $content = ob_get_clean();
        require $this->template;
    }

}