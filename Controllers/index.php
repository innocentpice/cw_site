<?php

class index extends Controller {
    function __construct(){
        parent:: __construct();
    }
    function index(){
        $this->view->clearBOOSTRAP = true;
        $this->view->render('header');
        $this->view->render('index/index');
        $this->view->render('footer');
    }
}