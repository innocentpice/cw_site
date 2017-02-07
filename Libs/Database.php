<?php

class Database extends PDO {
    public function __construct(){
        try{
            parent::__construct('mysql:host=localhost;dbname=cwgreat','innocentpice','');
            parent::exec("SET CHARACTER SET utf8");
            parent::exec("SET @@global.time_zone = '+00:00'");
            parent::exec("SET GLOBAL time_zone = '+7:00'");
            parent::exec("SET GLOBAL time_zone = 'Asia/Bangkok'");
        } catch (PDOException $e){
            echo "Database Connection Error.</br>";
        }
    }
}