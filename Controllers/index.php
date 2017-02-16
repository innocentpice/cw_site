<?php

class index extends Controller {
    function __construct(){
        parent:: __construct();
    }
    function index(){
        $this->view->CSSInject[0] = URL_Public . '/css/main.css';
        $this->view->JSInject[0] = URL_Public . '/js/main.js';
        
        // GOOGLE MAP
        $this->view->JSInject[1] = 'https://maps.googleapis.com/maps/api/js?key=AIzaSyCuaTaa7gsBh1imCWAqErUUu_Uce4RhrcY&callback=myMap';
        
        $this->view->BodyAti = 'id="home" data-spy="scroll" data-target=".navbar" data-offset="60"';
        $this->view->render('header');
        $this->view->render('index/index');
        $this->view->render('footer');
    }
}