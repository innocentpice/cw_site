<?php

class api extends Controller {
    function __construct(){
        parent:: __construct();
    }
    function index(){
        $this->view->render('error/index');
        return false;
    }
    function sup_username ($username){
        if(empty($username)){
            $this->view->render('error/index');
            return false;
        }
        $this->loadModel('api_check');
        $result = $this->api_check->sup_username($username);
        if($result){
            echo 0;
        }else{
            echo 1;
        }
    }
}