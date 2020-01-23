<?php

class IndexController extends Controller {

    public function __construct (){
        $this->model = new IndexModel();
        $this->view = new View();
    }

    public function index(){
        $this->pageData['students'] = $this->model->getAllRecords();
        $this->pageData['title'] = 'privet';
        $this->pageData['content'] = VIEW_PATH . 'main/index.php';
        $this->view->render($this->pageTpl, $this->pageData);
    }
}