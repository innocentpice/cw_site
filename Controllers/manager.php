<?php

class manager extends Controller {
    function __construct(){
        parent:: __construct();
        session_start();
        
        $this->view->CSSInject[0] = URL_Public.'/css/manager.css';
        $this->view->JSInject[0] = URL_Public.'/js/manager.js';
        
        $auth = $this->auth();
        if(!$auth){
            $this->view->render('header');
            $this->view->render('manager/form_login');
            $this->view->render('footer');
            exit();
            return false;
        }
    }
    function index(){
        $page[0] = 'manager/index';
        $this->RederAsPanel($page);
        
    }
    
    // Render As Panel
    
    private function RederAsPanel($page){
        $this->view->render('header');
        $this->view->render('manager/panel_menu');
        foreach($page as $page){
            $this->view->render($page);
        }
        $this->view->render('manager/panel_end');
        $this->view->render('footer');
    }
    
    // Auth
    
    private function auth(){
        if(!isset($_SESSION['username'])){
            if($_POST['auth']){
                $this->loadModel('auth');
                $result = $this->auth->login($_POST['username'],$_POST['password']);
                if($result){
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
    
    // task
    
    function tasklist(){
        $this->loadModel('task');
        
        if(isset($_POST['DELETETASK'])){
            $result = $this->task->deletetask($_POST['JOB_NO']);
            if($result == 00000){
                $this->view->msgDelete = true;
            }else{
                $this->view->msgDelete = false;
            }
        }
        
        $this->view->list_data[0] = $this->task->task_list(1);
        $this->view->list_data[1] = $this->task->task_list(2);
        $this->view->list_data[2] = $this->task->task_list(3);
        
        $this->view->JSInject[1] = URL_Public.'/js/tasklist.js';
        
        $page[0] = 'manager/tasklist';
        $this->RederAsPanel($page);
    }
    function taskedit(){
        if(!isset($_GET['JOB_NO'])){
            echo 'NOT PARAM.';
            return false;
        }else{
            $JOB_NO = $_GET['JOB_NO'];
        }
        
        $this->loadModel('task');
        $this->view->JSInject[1] = URL_Public.'/js/edittask.js';
        
        if(isset($_POST['EDITTASK'])){
            $query['C_NAME'] = $_POST['JOB_NAME'];
            $query['DES'] = $_POST['JOB_DES'];
            $query['QTY'] = $_POST['JOB_QTY'];
            $query['TYPE'] = $_POST['JOB_TYPE'];
            $query['DLT'] = $_POST['JOB_DEAD'];
            $query['STATUS'] = 1;
            $query['JOB_NO'] = $_POST['JOB_NO'];
            $edit = $this->task->taskedit($query);
            if($edit == 00000){
                $this->view->msgEdit = true;
            }else{
                $this->view->msgEdit = false;
            }
        }
        
        
        $JobData = $this->task->checkjob($JOB_NO);
        if(!isset($JobData[0][0])){
            echo 'NOT EXCIST.';
            return false;
        }else{
            $this->view->JobData = $JobData[0];
            
            $page[0] = 'manager/edittask';
            $this->RederAsPanel($page);
        }
    }
    private function deletetask($JOB_NO){
        $this->loadModel('task');
        $result = $this->deletetask($JOB_NO);
        if($result = 00000){
            return true;
        }else{
            return false;
        }
    }
    function createtask(){
        if(isset($_POST['CREATE'])){
            $this->loadModel('task');
            $data[0] = $_POST['JOB_NO'];
            $data[1] = $_POST['JOB_NAME'];
            $data[2] = $_POST['JOB_DES'];
            $data[3] = $_POST['JOB_QTY'];
            $data[4] = $_POST['JOB_TYPE'];
            $data[5] = $_POST['JOB_DEAD'];
            $result = $this->task->addtask($data);
            if($result == 23000){
                $this->view->msgCreate = 'Available';
                $this->view->DataCreate = $data;
            }else if($result == 00000){
                $this->view->msgCreate = 'Success';
            }else{
                $this->view->msgCreate = 'Error';
            }
        }
        $this->view->JSInject[1] = URL_Public.'/js/createtask.js';
        
        $page[0] = 'manager/createtask';
        $this->RederAsPanel($page);
    }
    function tasklog(){
        if(!isset($_GET['JOB_NO'])){
            echo 'NOT PARAM';
            return false;
        }
        
        $this->loadModel('task');
        
        if(isset($_GET['CHANGESTATUS'])){
            $this->task->taskedit($_GET['JOB_NO'],$_GET['CHANGESTATUS']);
        }
        if(isset($_POST['DELETETASK'])){
            $this->task->deletetasklog($_GET['JOB_NO'],$_POST['DELETETASK']);
        }
        if(isset($_POST['ADDTASKLOG'])){
            $this->task->addtasklog($_GET['JOB_NO'],$_POST['ADDTASKLOG'],$_POST['STATUS']);
        }
        $JOB_NO = $_GET['JOB_NO'];
        $this->view->taskLog[0] = $this->task->showtasklog($JOB_NO,1);
        $this->view->taskLog[1] = $this->task->showtasklog($JOB_NO,2);
        $this->view->taskLog[2] = $this->task->showtasklog($JOB_NO,3);
        $taskStatus = $this->task->checkjob($JOB_NO);
        $this->view->taskStatus = $taskStatus[0]['STATUS'];$taskStatus = null;
        $this->view->taskID = $JOB_NO;
        $this->view->ansTask = $this->task->ansTaskLog($this->view->taskStatus);
        $this->view->JSInject[1] = URL_Public.'/js/tasklog.js';
        
        
        $page[0] = 'manager/tasklog';
        $this->RederAsPanel($page);
    }
    
    // Supplier Management.
    
    function supplier(){
        $page[0] = 'manager/supplier';
        $this->RederAsPanel($page);
    }
    
}