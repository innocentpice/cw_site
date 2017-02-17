<?php

class supplier extends Model {
    function __construct(){
        parent::__construct();
    }
    function viewsup($NO=NULL,$GETNO_ABNAME){
        if(isset($NO)){
            if($GETNO_ABNAME != true){
                $sql = "SELECT * FROM SUPPLIER WHERE NO = '".$NO."'";
            }else{
                $sql = "SELECT NO, SUP_ABNAME FROM SUPPLIER WHERE NO = '".$NO."'";
            }
        }else{
            if($GETNO_ABNAME != true){
                $sql = "SELECT * FROM SUPPLIER ORDER BY NO DESC";
            }else{
                $sql = "SELECT NO, SUP_ABNAME FROM SUPPLIER ORDER BY SUP_ABNAME";
            }
        }
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
        $USERNAME = $query['USERNAME'];
        $PASSWORD = $query['PASSWORD'];
        
        $sql = "INSERT INTO SUPPLIER (SUP_ABNAME, SUP_NAME, SUP_ADDRESS, SUP_TEL, SUP_EMAIL, USERNAME, PASSWORD)".
        " VALUES (:SUP_ABNAME, :SUP_NAME, :SUP_ADDRESS, :SUP_TEL, :SUP_EMAIL, :USERNAME, :PASSWORD)";
        $NO = array(
            ':SUP_ABNAME' => $SUP_ABNAME,
            ':SUP_NAME' => $SUP_NAME,
            ':SUP_ADDRESS' => $SUP_ADDRESS,
            ':SUP_TEL' => $SUP_TEL,
            ':SUP_EMAIL' => $SUP_EMAIL,
            ':USERNAME' => $USERNAME,
            ':PASSWORD' => $PASSWORD
        );
        $sth = $this->db->prepare($sql);
        $sth->execute($NO);
        $result = $sth->errorCode();
        return $result;
    }
    function editsup($query){
        $SUP_ABNAME = $query['SUP_ABNAME'];
        $SUP_NAME = $query['SUP_NAME'];
        $SUP_ADDRESS = $query['SUP_ADDRESS'];
        $SUP_TEL = $query['SUP_TEL'];
        $SUP_EMAIL = $query['SUP_EMAIL'];
        $sql = "UPDATE SUPPLIER SET ".
            "SUP_ABNAME = :SUP_ABNAME, ".
            "SUP_NAME = :SUP_NAME, ".
            "SUP_ADDRESS = :SUP_ADDRESS, ".
            "SUP_TEL = :SUP_TEL, ".
            "SUP_EMAIL = :SUP_EMAIL";
        $sql.= " WHERE NO =".$query['NO'];
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
    function deleteSup($SUP_ABNAME){
        $sql = 'DELETE FROM SUPPLIER WHERE SUP_ABNAME = :SUP_ABNAME';
        $NO = array(':SUP_ABNAME' => $SUP_ABNAME);
        $sth = $this->db->prepare($sql);
        $sth->execute($NO);
        $result = $sth->errorCode();
        return $result;
    }
}
