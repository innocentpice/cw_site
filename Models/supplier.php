<?php

class supplier extends Model {
    function __construct(){
        parent::__construct();
    }
    function viewsup(){
        $sql = "SELECT * FROM SUPPLIER";
        $sth = $this->db->query($sql);
        $result = $sth->fetchAll();
        return $result;
    }
    function addsup($query){
        $SUP_ABNAME = $query['SUP_ABNAME'];
        $SUP_NAME = $query['SUP_NAME'];
        $SUP_ADDRESS = $query['SUP_ADDRESS'];
        $SUP_TEL = $query['SUP_TEL'];
        $SUP_EMAIL = $query['SUP_EMAIL'];
        
        $sql = "INSERT INTO SUPPLIER ".
        "VALUES (NULL, :SUP_ABNAME, :SUP_NAME, :SUP_ADDRESS, :SUP_TEL, :SUP_EMAIL)";
        $NO = array(
            ':SUP_ABNAME' => $SUP_ABNAME,
            ':SUP_NAME' => $SUP_NAME,
            ':SUP_ADDRESS' => $SUP_ADDRESS,
            ':SUP_TEL' => $SUP_TEL,
            ':SUP_EMAIL' => $SUP_EMAIL
        );
        $sth = $this->db->prepare($sql);
        $sth->execute($NO);
        $result = $sth->errorCode();
        return $result;
    }
}
