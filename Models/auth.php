<?php

class auth extends Model {
    function __construct(){
        parent::__construct();
    }
    function login($user,$pass){
        $sql = "SELECT USERNAME , PASSWORD FROM AUTH WHERE USERNAME = :user AND PASSWORD = :pass";
        $login = array(
            ':user' => $user,
            ':pass' => $pass
        );
        $sth = $this->db->prepare($sql);
        $sth->execute($login);
        $result = $sth->fetchAll();
        if(isset($result[0])){
            $_SESSION['username'] = $result[0][0];
            return true;
        }else{
            return false;
        }
    }
    function logout(){
        session_unset();
    }
}