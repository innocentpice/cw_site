<?php

class news extends Controller {
    function __construct(){
        parent:: __construct();
    }
    function index($page=1,$key=NULL){
        $this->loadModel('_news');
        $this->view->News = $this->_news->viewNews($page,$key);
        $this->view->CurPage = $page;
        $this->view->LastPage = $this->_news->countNews();
        
        $this->view->CSSInject[0] = URL_Public . '/css/main.css';
        $this->view->PageTitle = 'ข่าวสารบริษัท';
        $this->view->URL_INDEX = URL_Path;
        $this->view->BodyAti = 'id="home"';
        $this->view->render('header');
        $this->view->render('news/index');
        $this->view->render('footer');
    }
    function page($page=1){
        $this->index($page);
    }
    function id($id){
        $this->loadModel('_news');
        $this->view->News = $this->_news->viewNews(0,$id);
        
        $this->view->CSSInject[0] = URL_Public . '/css/main.css';
        $this->view->URL_INDEX = URL_Path;
        $this->view->BodyAti = 'id="home"';
        $this->view->render('header');
        $this->view->render('news/view');
        $this->view->render('footer');
    }
}