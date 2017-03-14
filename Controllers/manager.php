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
        if(empty($_SESSION['username']) || $_SESSION['permiss'] != 5){
            if(@$_POST['auth']){
                $this->loadModel('auth');
                $result = $this->auth->login($_POST['username'],$_POST['password'],5);
                if($result){
                    $_SESSION['username'] = $result[0]['USERNAME'];
                    $_SESSION['permiss'] = $result[0]['PERMISSION'];
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
    
    private function ShowError($msg){
        if(isset($msg)){
            $this->view->ErrorMsg = $msg;
        }
        $page[0] = 'manager/error';
        $this->RederAsPanel($page);
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
        
        $page[0] = 'manager/task/tasklist';
        $this->RederAsPanel($page);
    }
    
    function jobdone(){
        $this->loadModel('task');
        
        if(isset($_POST['DELETETASK'])){
            $result = $this->task->deletetask($_POST['JOB_NO']);
            if($result == 00000){
                $this->view->msgDelete = true;
            }else{
                $this->view->msgDelete = false;
            }
        }
        
        $this->view->list_data[0] = $this->task->task_list(4);
        $this->view->JSInject[1] = URL_Public.'/js/tasklist.js';
        
        $page[0] = 'manager/task/jobdone';
        $this->RederAsPanel($page);
    }
    
    function taskedit(){
        if(!isset($_GET['JOB_NO'])){
            $this->ShowError();
            return false;
        }else{
            $JOB_NO = $_GET['JOB_NO'];
        }
        
        $this->loadModel('task');
        $this->loadModel('supplier');
        $this->loadModel('staff');
        $this->view->JSInject[1] = URL_Public.'/js/edittask.js';
        
        if(isset($_POST['EDITTASK'])){
            $query['C_NAME'] = $_POST['JOB_NAME'];
            $query['DES'] = $_POST['JOB_DES'];
            $query['QTY'] = $_POST['JOB_QTY'];
            $query['TYPE'] = $_POST['JOB_TYPE'];
            $query['DLT'] = $_POST['JOB_DEAD'];
            $query['JOB_NO'] = $_POST['JOB_NO'];
            $query['SUP_NO'] = $_POST['SUP_NO'];
            $query['STAFF_NO'] = $_POST['STAFF_NO'];
            $edit = $this->task->taskedit($query);
            if($edit == 00000){
                $this->view->msgEdit = true;
            }else{
                $this->view->msgEdit = false;
            }
        }
        
        
        $JobData = $this->task->checkjob($JOB_NO);
        if(empty($JobData[0][0])){
            $this->ShowError('ไม่มีหมายเลขที่ท่านค้นหา');
            return false;
        }else{
            $this->view->SELECT_SUP = $this->supplier->viewsup(NULL,1);
            $this->view->SELECT_STAFF = $this->staff->viewstaff(NULL,1);
            $this->view->JobData = $JobData[0];
            
            $page[0] = 'manager/task/edittask';
            $this->RederAsPanel($page);
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
        $page[0] = 'manager/task/createtask';
        $this->RederAsPanel($page);
    }
    
    function tasklog(){
        if(!isset($_GET['JOB_NO'])){
            $this->ShowError();
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
        $taskStatus = $this->task->checkjob($JOB_NO);
        if($taskStatus == NULL){
            $this->ShowError();
            return false;
        }
        $this->view->taskLog[0] = $this->task->showtasklog($JOB_NO,1);
        $this->view->taskLog[1] = $this->task->showtasklog($JOB_NO,2);
        $this->view->taskLog[2] = $this->task->showtasklog($JOB_NO,3);
        $this->view->taskLog[3] = $this->task->showtasklog($JOB_NO,4);
        $this->view->taskStatus = $taskStatus[0]['STATUS'];$taskStatus = null;
        $this->view->taskID = $JOB_NO;
        $this->view->ansTask = $this->task->ansTaskLog($this->view->taskStatus);
        $this->view->JSInject[1] = URL_Public.'/js/tasklog.js';
        
        
        $page[0] = 'manager/task/tasklog';
        $this->RederAsPanel($page);
    }
    
    // Supplier Management.
    
    function supplier(){
        $this->loadModel('supplier');
        if(isset($_POST['DEL_SUP'])){
            $result = $this->supplier->deleteSup($_POST['SUP_ABNAME']);
            if($result == 00000){
                $this->view->msgDelete = true;
            }else{
                $this->view->msgDelete = false;
            }
        }
        $this->view->supplier = $this->supplier->viewsup();
        $this->view->JSInject[1] = URL_Public.'/js/suplist.js';
        $page[0] = 'manager/supplier/supplier';
        $this->RederAsPanel($page);
    }
    function addsup(){
        if(isset($_POST['ADDSUP'])){
            $query['SUP_ABNAME'] = $_POST['SUP_ABNAME'];
            $query['SUP_NAME'] = $_POST['SUP_NAME'];
            $query['SUP_ADDRESS'] = $_POST['SUP_ADDRESS'];
            $query['SUP_TEL'] = $_POST['SUP_TEL'];
            $query['SUP_EMAIL'] = $_POST['SUP_EMAIL'];
            $query['USERNAME'] = $_POST['USERNAME'];
            $query['PASSWORD'] = $_POST['PASSWORD'];
            
            $this->loadModel('supplier');
            $result = $this->supplier->addsup($query);
            if($result == 23000){
                $this->view->msgCreate = 'Available';
                $this->view->DataCreate = $query;
            }else if($result == 00000){
                $this->view->msgCreate = 'Success';
            }else{
                $this->view->msgCreate = 'Error';
            }
        }
        
        $this->view->JSInject[1] = URL_Public.'/js/addsup.js';
        $page[0] = 'manager/supplier/addsup';
        $this->RederAsPanel($page);
    }
    function editsup(){
        if(empty($_GET['SUP_NO'])){
            $this->ShowError();
            return false;
        }
        
        $this->loadModel('supplier');
        
        if(isset($_POST['EDITSUP'])){
            $query['SUP_ABNAME'] = $_POST['SUP_ABNAME'];
            $query['SUP_NAME'] = $_POST['SUP_NAME'];
            $query['SUP_ADDRESS'] = $_POST['SUP_ADDRESS'];
            $query['SUP_TEL'] = $_POST['SUP_TEL'];
            $query['SUP_EMAIL'] = $_POST['SUP_EMAIL'];
            $query['NO'] = $_GET['SUP_NO'];
            
            $result = $this->supplier->editsup($query);
            if($result == 23000){
                $this->view->msgUpdate = 'Available';
            }else if($result == 00000){
                $this->view->msgUpdate = 'Success';
            }else{
                $this->view->msgUpdate = 'Error';
            }
        }
        $this->view->supplier = $this->supplier->viewsup($_GET['SUP_NO']);
        if($this->view->supplier[0] == ''){
            $this->ShowError();
            return false;
        }
        if(isset($query)){
            $this->view->supplier[0] = $query;
        }
        $this->view->JSInject[1] = URL_Public.'/js/editsup.js';
        $page[0] = 'manager/supplier/editsup';
        $this->RederAsPanel($page);
    }
    
    // news
    
    function news($action,$page){
        if($action == 'add'){
            $this->AddNews(@$_POST['news_header'],@$_POST['news_title'],@$_POST['news_content'],@$_POST['news_imgUrl']);
        }else if($action > 0){
            $this->EditNews($action);
        }else if(empty($action) || $action == 'page'){
            if(empty($page)){$page = 1;}
            $this->ViewNews($page);
        }else {
            $this->ShowError('NEWS NOT FOUND.');
        }
    }
    
    private function AddNews($header,$title,$content,$img=NULL){
        if($header != '' && $title != ''){
            $this->loadModel('news');
            $result = $this->news->AddNews($header,$title,$content,$img);
            if($result == '00000'){
                $page[0] = 'manager/news/addednews';
                $this->RederAsPanel($page);
            }else{
                $this->view->JSInject[1] = URL_Public.'/js/MCE/textboxio/textboxio.js';
                $this->view->JSInject[2] = URL_Public.'/js/addnews.js';
                $this->view->ErrorMsg = '<strong>ERROR CODE '.$result.'</strong>';
                $page[0] = 'manager/news/addnews';
                $this->RederAsPanel($page);
            }
        }else{
            $this->view->JSInject[1] = URL_Public.'/js/MCE/textboxio/textboxio.js';
            $this->view->JSInject[2] = URL_Public.'/js/addnews.js';
            $page[0] = 'manager/news/addnews';
            $this->RederAsPanel($page);
        }
    }
    
    
    private function EditNews($key){
        $this->loadModel('news');
        if(isset($_POST['news_edit'])){
            $result = $this->news->editnews($key,@$_POST['news_header'],@$_POST['news_title'],@$_POST['news_content'],@$_POST['news_imgUrl']);   
            if($result = '00000'){
                $this->view->editMsg = 'success';
            }else{
                $this->view->editMsg = 'failed';
            }
        }
        
        $this->view->News = $this->news->viewNews(0,$key);
        $this->view->JSInject[1] = URL_Public.'/js/MCE/textboxio/textboxio.js';
        $this->view->JSInject[2] = URL_Public.'/js/editnews.js';
        
        $this->view->KEYNEWS = $key;
        $page[0] = 'manager/news/editnews';
        $this->RederAsPanel($page);
    }
    
    
    
    private function ViewNews($page=1){
        $this->loadModel('news');
        if(isset($_GET['del'])){
            $this->news->delNews($_GET['del']);
        }
        $data = $this->news->viewNews($page);
        $this->view->News = $data;
        $this->view->CurPage = $page;
        $this->view->LastPage = $this->news->countNews();
        
        $pages[0] = 'manager/news/viewnews';
        $this->RederAsPanel($pages);
    }
    
}