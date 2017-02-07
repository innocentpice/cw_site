<?php

class checkjob extends Controller {
    function __construct(){
        parent::__construct();
    }
    function index(){
        $this->loadModel('task');
        // $_POST['JobNo'] = 'TEST';
        
        $this->view->JSInject[0] = URL_Public . '/js/checkjob.js';
        
        if(isset($_POST['JobNo'])){
            $task = $this->task->checkjob($_POST['JobNo']);
            if(isset($task[0])){
                $taskLog = $this->task->showtasklog($task[0]['JOB_NO']);
                $this->showjob($task[0],$taskLog);
            }else{
                $this->view->tStatus = false;
                $this->checkform();
            }
        }else{
            $this->checkform();
        }
        
        $this->view->render('footer');
    }
    private function checkform(){
        $this->view->render('header');
        $this->view->render('checkjob/checkform');
    }
    private function showjob($task,$taskLog){
        $this->view->task = $task;
        $this->view->taskLog = $taskLog;
        $this->view->clearBOOSTRAP = true;
        $this->view->render('header');
        $this->view->render('checkjob/showjob');
    }
}