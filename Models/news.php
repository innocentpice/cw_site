<?php

class news extends Model {
    function __construct(){
        parent::__construct();
    }
    function addNews($header,$title,$content){
        $sql = "INSERT INTO  NEWS ( ID, HEADER, TITLE,CONTENT, DATE, IMG_URL) VALUES ( NULL ,  :HEADER, :TITLE, :CONTENT, CURRENT_TIMESTAMP , NULL )";
        $NO = array(
            ':HEADER' => $header,
            ':TITLE' => $title,
            ':CONTENT' => $content
        );
        $sth = $this->db->prepare($sql);
        $sth->execute($NO);
        $result = $sth->errorCode();
        return $result;
    }
    function viewNews($page,$key){
        if(empty($key) && $page != 0){
            $sql = "SELECT ID,HEADER,TITLE,DATE FROM NEWS ORDER BY ID DESC LIMIT ".(($page-1)*10).",10";
            $sth = $this->db->prepare($sql);
            $sth->execute();
            $result = $sth->fetchAll();
        }else if(isset($key)){
            $sql = "SELECT * FROM NEWS WHERE ID = :ID";
            $param = array(
                ':ID' => $key    
            );
            $sth = $this->db->prepare($sql);
            $sth->execute($param);
            $result = $sth->fetch();
        }
        return $result;
    }
    function countNews(){
        $sql = "SELECT COUNT(ID) FROM NEWS;";
        $sth = $this->db->prepare($sql);
        $sth->execute();
        $result = $sth->fetch();
        return $result[0];
    }
}