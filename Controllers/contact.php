<?php

class contact extends Controller {
    function __construct(){
        parent:: __construct();
    }
    function index(){
        $this->view->clearBOOSTRAP = true;
        $this->view->render('header');
        $this->view->render('index/contact');
        $this->view->render('footer');
    }
}