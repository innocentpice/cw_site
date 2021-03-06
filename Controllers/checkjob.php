<?php

class checkjob extends Controller {
    function __construct(){
        parent::__construct();
    }
    function index(){
        $this->loadModel('task');
        $this->view->PageTitle = 'เช็คสถานะสินค้า';
        $this->view->JSInject[0] = URL_Public . '/js/checkjob.js';
        $this->view->CSSInject[0] = URL_Public . '/css/main.css';
        $this->view->CSSInject[1] = URL_Public . '/css/checkjob.css';
        // BOOSTRAP TOUR SCRIPT
        $this->view->JSInject[1] = URL_Public . '/js/tour/checkstatus.js';
        
        if(isset($_POST['JobNo'])){
            $task = $this->task->checkjob($_POST['JobNo']);
        }
        $this->view->render('header');
        $this->checkform();
        if(isset($task[0])){
            $taskLog = $this->task->showtasklog($task[0]['JOB_NO']);
            $this->showjob($task[0],$taskLog);
        }else{
        ?>
            <div class="container" style="margin-top:5rem;">
                <header>
                    <h1 class=text-center>ไม่พบหมายเลขที่ท่านค้นหา</h1>
                </header>
            </div>
        <?php
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