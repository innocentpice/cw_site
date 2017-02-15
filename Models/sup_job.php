<?php

class sup_job extends Model {
    function __construct(){
        parent::__construct();
    }
    function task_list($SUP_NO,$STATUS = NULL){
        if(isset($SUP_NO)){ 
            $NO = array(
                ':SUP_NO' => $SUP_NO,
                ':STATUS' => $STATUS
            );
            $sql = "SELECT TASK.*,".
            " (SELECT STAFF.USERNAME FROM STAFF WHERE STAFF.NO = TASK.STAFF_NO) AS STAFF_NAME,".
            " (SELECT SUP_ABNAME FROM SUPPLIER WHERE SUPPLIER.NO = TASK.SUP_NO) AS SUP_NAME".
            " FROM TASK WHERE SUP_NO = :SUP_NO AND STATUS = :STATUS ORDER BY NO DESC";
        }else{
            echo 'Plz enter PARAM.';
            return false;
        }
        $sth = $this->db->prepare($sql);
        $sth->execute($NO);
        $data = $sth->fetchAll();
        return $data;
    }
    function ansTaskLog($STATUS = NULL){
        $NO = array();
        $sql = "SELECT  `DESCRIPTION` , COUNT( * ) AS  `NO` FROM TASK_LOG ";
        if(isset($STATUS)){
            $NO = array(':STATUS' => $STATUS);
            $sql .= "WHERE STATUS = :STATUS ";
        }
        $sql .=  "GROUP BY `DESCRIPTION` ORDER BY `NO` DESC LIMIT 10";
        $sth = $this->db->prepare($sql);
        $sth->execute($NO);
        $result = $sth->fetchAll();
        return $result;
    }
    function showtasklog($J_NO,$STATUS = NULL){
        $NO = array(':J_NO' => $J_NO);
        $sql = "SELECT * FROM TASK_LOG WHERE JOB_NO = :J_NO";
        if(isset($STATUS)){
            $sql.= " AND STATUS = :STATUS";
            $NO[':STATUS'] = $STATUS;
        }
        $sql.= " ORDER BY NO DESC";
        $sth = $this->db->prepare($sql);
        $sth->execute($NO);
        $result = $sth->fetchAll();
        return $result;
    }
    function addtasklog($JOB_NO,$DES,$STATUS = 1){
        $sql = "INSERT INTO TASK_LOG ".
        "VALUES (NULL, :JOB_NO, :DES, CURRENT_TIMESTAMP , :STATUS)";
        $NO = array(
            ':JOB_NO' => $JOB_NO,
            ':DES' => $DES,
            ':STATUS' => $STATUS
        );
        $sth = $this->db->prepare($sql);
        $sth->execute($NO);
        $result = $sth->errorCode();
        return $result;
    }
    function deletetasklog($JOB_NO, $INDEX){
        if($INDEX == 'ALL'){
            $sql = "DELETE FROM TASK_LOG WHERE JOB_NO = :J_NO";
            $NO = array(':J_NO' => $JOB_NO);
        }else{
            $sql = "DELETE FROM TASK_LOG WHERE JOB_NO = :J_NO AND NO = :INDEX";
            $NO = array(':J_NO' => $JOB_NO, ':INDEX' => $INDEX);
        }
        $sth = $this->db->prepare($sql);
        $sth->execute($NO);
        $result = $sth->errorCode();
        return $result;
    }
}