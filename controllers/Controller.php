<?php

class Controller {

    public $model;
    public $view;
    protected $pageData = [];
    protected $pageTpl = VIEW_PATH . '/main.tpl.php'; // default template

    public function __construct() {

        $this->view = new View();
        $this->model = new Model();


    }

}