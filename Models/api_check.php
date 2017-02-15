<?php
class api_check extends Model {
    function __construct(){
        parent::__construct();
    }
    function sup_username($username){
        $sql = "SELECT USERNAME FROM SUPPLIER WHERE USERNAME = :USERNAME";
        $NO = array(':USERNAME' => $username);
        $sth = $this->db->prepare($sql);
        $sth->execute($NO);
        $result = $sth->fetch();
        return $result;
    }
}