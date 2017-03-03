<?php

class sitemap extends Controller {
    function __construct(){
        parent:: __construct();
    }
    function index(){
        $this->view->asXml('sitemap/index');
    }
    function url(){
        $this->view->asXml('sitemap/url');
    }
}