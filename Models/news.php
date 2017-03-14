<?php

class news extends Model {
    function __construct(){
        parent::__construct();
    }
    function slideNews(){
        $sql = "SELECT ID,HEADER,TITLE,DATE FROM NEWS ORDER BY ID DESC LIMIT 0,4";
        $sth = $this->db->prepare($sql);
        $sth->execute();
        $result = $sth->fetchAll();
        return $result;
    }
    function addNews($header,$title,$content,$img=NULL){
        $sql = "INSERT INTO  NEWS ( ID, HEADER, TITLE,CONTENT, DATE, IMG_URL) VALUES ( NULL ,  :HEADER, :TITLE, :CONTENT, CURRENT_TIMESTAMP , :IMG_URL )";
        $NO = array(
            ':HEADER' => $header,
            ':TITLE' => $title,
            ':CONTENT' => $content,
            ':IMG_URL' => $img
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
    function editNews($id,$header,$title,$content,$img=NULL){
        $sql = "UPDATE NEWS SET ".
            "HEADER =  :HEADER,".
            "TITLE =  :TITLE,".
            "CONTENT =  :CONTENT,".
            "IMG_URL = :IMG_URL".
            " WHERE ID = :ID";
        $NO = array(
            ':HEADER' => $header,
            ':TITLE' => $title,
            ':CONTENT' => $content,
            ':IMG_URL' =>$img,
            ':ID' => $id
        );
        $sth = $this->db->prepare($sql);
        $sth->execute($NO);
        $result = $sth->errorCode();
        return $result;
    }
    function delNews($id){
        $sql = "DELETE FROM NEWS WHERE ID = :ID";
        $NO = array(
            ':ID' => $id
        );
        $sth = $this->db->prepare($sql);
        $sth->execute($NO);
        $result = $sth->errorCode();
        return $result;
    }
}