<?php

class news extends Controller {
    function __construct(){
        parent:: __construct();
    }
    function index(){
        $this->view->CSSInject[0] = URL_Public . '/css/main.css';
        $this->view->PageTitle = 'ข่าวสารบริษัท';
        $this->view->URL_INDEX = URL_Path;
        $this->view->BodyAti = 'id="home"';
        $this->view->render('header');
        $this->view->render('news/index');
        $this->view->render('footer');
    }
}