<?php

class sup extends Controller {
    function __construct(){
        parent:: __construct();
        session_start();
        
        $this->view->CSSInject[0] = URL_Public.'/css/manager.css';
        $this->view->JSInject[0] = URL_Public.'/js/manager.js';
        
        $auth = $this->auth();
        if(!$auth){
            $this->view->render('header');
            $this->view->render('sup/login');
            $this->view->render('footer');
            exit();
            return false;
        }
    }
    function index(){
        $page[0] = 'sup/index';
        $this->RederAsPanel($page);
        
    }
    
    // Render As Panel
    
    private function RederAsPanel($page){
        $this->view->render('header');
        $this->view->render('sup/panel_menu');
        foreach($page as $page){
            $this->view->render($page);
        }
        $this->view->render('sup/panel_end');
        $this->view->render('footer');
        
    }
    
    // Auth
    
    private function auth(){
        if(empty($_SESSION['username']) || $_SESSION['permiss'] != 2){
            if($_POST['auth']){
                $this->loadModel('auth');
                $result = $this->auth->sup_login($_POST['username'],$_POST['password']);
                if($result){
                    $_SESSION['sup_no'] = $result[0]['NO'];
                    $_SESSION['username'] = $result[0]['USERNAME'];
                    $_SESSION['permiss'] = 2;
                    return true;
                }else{
                    $this->view->msgLogin = 'Username or Password incorrect ';
                    return false;
                }
            }else{
                return false;
            }
        }else{
            return true;
        }
    }
    
    function logout(){
        $this->loadModel('auth');
        $this->auth->logout();
        $this->view->render('header');
        $this->view->render('footer');
        echo '<script>$(document).ready(function(){
            alert("LOGOFF");
            window.location = "'. URL_Path .'";
        });</script>';
    }
    // ERROR 
    
    function ShowError(){
        $page[0] = 'manager/error';
        $this->RederAsPanel($page);
    }
    
    function job($job_no){
        
        if(isset($job_no)){
            
            $this->loadModel('sup_job');
            $this->loadModel('task');
            
            if(isset($_GET['CHANGESTATUS'])){
                $this->task->taskedit($job_no,$_GET['CHANGESTATUS']);
            }
            if(isset($_POST['DELETETASK'])){
                $this->task->deletetasklog($job_no,$_POST['DELETETASK']);
            }
            if(isset($_POST['ADDTASKLOG'])){
                $this->task->addtasklog($job_no,$_POST['ADDTASKLOG'],$_POST['STATUS']);
            }
            
            $JOB_NO = $job_no;
            $taskStatus = $this->task->checkjob($JOB_NO);
            if($taskStatus == NULL){
                $this->ShowError();
                return false;
            }
            $this->view->taskLog[0] = $this->sup_job->showtasklog($JOB_NO,1);
            $this->view->taskLog[1] = $this->sup_job->showtasklog($JOB_NO,2);
            $this->view->taskLog[2] = $this->sup_job->showtasklog($JOB_NO,3);
            $this->view->taskStatus = $taskStatus[0]['STATUS'];$taskStatus = null;
            $this->view->taskID = $JOB_NO;
            $this->view->ansTask = $this->sup_job->ansTaskLog($this->view->taskStatus);
            $this->view->JSInject[1] = URL_Public.'/js/tasklog.js';
            
            
            $page[0] = 'sup/job_log';
            $this->RederAsPanel($page);
        }else{
            $this->loadModel('sup_job');
            $sup_no = $_SESSION['sup_no'];
            $this->view->list_data[0] = $this->sup_job->task_list($sup_no,1);
            $this->view->list_data[1] = $this->sup_job->task_list($sup_no,2);
            $this->view->list_data[2] = $this->sup_job->task_list($sup_no,3);
            
            $this->view->JSInject[1] = URL_Public.'/js/tasklist.js';
            
            $page[0] = 'sup/job';
            $this->RederAsPanel($page);
        }
    }
}