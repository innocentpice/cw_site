<?php

class auth extends Model {
    function __construct(){
        parent::__construct();
    }
    function login($user,$pass){
        $sql = "SELECT USERNAME, PASSWORD, PERMISSION FROM STAFF WHERE USERNAME = :user AND PASSWORD = :pass";
        $login = array(
            ':user' => $user,
            ':pass' => $pass
        );
        $sth = $this->db->prepare($sql);
        $sth->execute($login);
        $result = $sth->fetchAll();
        if(isset($result[0])){
            return $result;
        }else{
            return false;
        }
    }
    function logout(){
        session_unset();
    }
}