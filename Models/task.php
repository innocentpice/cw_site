<?php

class task extends Model {
    function __construct(){
        parent::__construct();
    }
    function task_list($STATUS = NULL){
        $NO = array();
        if(isset($STATUS)){ 
            $NO = array(':STATUS' => $STATUS);
            $sql = "SELECT TASK.*,".
            " (SELECT STAFF.USERNAME FROM STAFF WHERE STAFF.NO = TASK.STAFF_NO) AS STAFF_NAME,".
            " (SELECT SUP_ABNAME FROM SUPPLIER WHERE SUPPLIER.NO = TASK.SUP_NO) AS SUP_NAME".
            " FROM TASK WHERE STATUS = :STATUS ORDER BY NO DESC";
        }else{
            $sql = 'SELECT * FROM TASK ORDER BY NO DESC';
        }
        $sth = $this->db->prepare($sql);
        $sth->execute($NO);
        $data = $sth->fetchAll();
        return $data;
    }
    function deletetask($JOB_NO){
        $sql = "DELETE FROM TASK WHERE JOB_NO = :J_NO";
        $NO = array(':J_NO' => $JOB_NO);
        $sth = $this->db->prepare($sql);
        $sth->execute($NO);
        $result = $sth->errorCode();
        if($result == 00000){
            $this->deletetasklog($JOB_NO,'ALL');
        }
        return $result;
    }
    function addtask($query){
        $sql = "INSERT INTO TASK (NO, JOB_NO, C_NAME, DESCRIPTION, QUANTITY, TYPE, START_TIME, DEADLINE_TIME, STATUS)".
            " VALUES ( NULL, :JOB_NO, :C_NAME, :DESCTIP, :QTY, :TYPE, CURRENT_DATE(), :DEADLINE, 1)";
        $NO = array(
            ':JOB_NO' => $query[0],
            ':C_NAME' => $query[1],
            ':DESCTIP' => $query[2],
            ':QTY' => $query[3],
            ':TYPE' => $query[4],
            ':DEADLINE' => $query[5]
        );
        $sth = $this->db->prepare($sql);
        $sth->execute($NO);
        $result = $sth->errorCode();
        
        // TASK LOG
        if($result == 00000){
            $this->addtasklog($query[0],'ได้รับคำสั่งซื้อเรียบร้อยแล้ว');
        }
        
        return $result;
    }
    function checkjob($J_NO){
        $sql = "SELECT * FROM TASK WHERE JOB_NO = :J_NO";
        $NO = array(':J_NO' => $J_NO);
        $sth = $this->db->prepare($sql);
        $sth->execute($NO);
        $result = $sth->fetchAll();
        return $result;
    }
    function taskedit($query,$status){
        if(isset($status)){
            $sql = "UPDATE TASK SET ".
            "STATUS = :STATUS WHERE JOB_NO = :JOB_NO";
            $NO = array(
                ':STATUS' => $status,
                ':JOB_NO' => $query
            );
        }else{
            $sql = "UPDATE TASK SET ".
            "C_NAME = :C_NAME, ".
            "DESCRIPTION = :DES, ".
            "QUANTITY = :QTY, ".
            "TYPE = :TYPE, ".
            "DEADLINE_TIME = :DLT, ".
            "SUP_NO = :SUP_NO, ".
            "STAFF_NO = :STAFF_NO ".
            "WHERE JOB_NO = :JOB_NO";
            $NO = array(
                ':C_NAME' => $query['C_NAME'],
                ':DES' => $query['DES'],
                ':QTY' => $query['QTY'],
                ':TYPE' => $query['TYPE'],
                ':DLT' => $query['DLT'],
                ':JOB_NO' => $query['JOB_NO'],
                ':SUP_NO' => $query['SUP_NO'],
                ':STAFF_NO' => $query['STAFF_NO']
            );
        }
        $sth = $this->db->prepare($sql);
        $sth->execute($NO);
        $result = $sth->errorCode();
        return $result;
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