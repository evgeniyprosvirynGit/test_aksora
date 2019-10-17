<?php

namespace journal\app\core;

class Controller
{

    protected $modelBase = 'journal\app\Models\\';
    protected $model     = '';
    protected $view      = '';

    public function model($model)
    {

        $this->model = $this->modelBase.$model;

        return $this->model = new $this->model;

    }

    public function view($view,$data = [])
    {

        ob_start();

        require '../app/Views/'. $view . '.php';

        $buffer = ob_get_clean();

        return $buffer;

    }

    public function renderOutput($view,$data = [])
    {

        require '../app/Views/'. $view . '.php';

    }

    public function redirect($url, $statusCode = 303)
    {

        header('Location: ' . $url, true, $statusCode);
        die();

    }


}