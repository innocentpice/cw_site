<?php

class checkjob extends Controller {
    function __construct(){
        parent::__construct();
    }
    function index(){
        $this->loadModel('task');
        
        $this->view->JSInject[0] = URL_Public . '/js/checkjob.js';
        $this->view->CSSInject[0] = URL_Public . '/css/main.css';
        $this->view->CSSInject[1] = URL_Public . '/css/checkjob.css';
        
        if(isset($_POST['JobNo'])){
            $task = $this->task->checkjob($_POST['JobNo']);
        }
        $this->view->render('header');
        $this->checkform();
        if(isset($task[0])){
            $taskLog = $this->task->showtasklog($task[0]['JOB_NO']);
            $this->showjob($task[0],$taskLog);
        }else{
            echo 'NOT FOUND.';
        }
        $this->view->render('footer');
    }
    
    private function checkform(){
        $this->view->render('checkjob/checkform');
    }
    private function showjob($task,$taskLog){
        $this->view->task = $task;
        $this->view->taskLog = $taskLog;
        $this->view->render('checkjob/showjob');
    }
}