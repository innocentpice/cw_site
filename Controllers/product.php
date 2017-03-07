<?php

class product extends Controller {
    function __construct(){
        parent:: __construct();
    }
    function index(){
        $this->view->CSSInject[0] = URL_Public . '/css/main.css';
        
        $this->view->PageTitle = 'ตัวอย่างสินค้า';
        $this->view->URL_INDEX = URL_Path;
        $this->view->render('header');
        $this->view->render('index/navbar');
        $this->view->render('index/product_sample');
        $this->view->render('footer');
    }
}