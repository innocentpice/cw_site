<?php
class staff extends Model {
    function __construct(){
        parent::__construct();
    }
    function viewstaff($NO=NULL,$GETNO_USERNAME){
        if(isset($NO)){
            if($GETNO_USERNAME != true){
                $sql = "SELECT * FROM STAFF WHERE NO = '".$NO."'";
            }else{
                $sql = "SELECT NO, USERNAME FROM STAFF WHERE NO = '".$NO."'";
            }
        }else{
            if($GETNO_USERNAME != true){
                $sql = "SELECT * FROM STAFF ORDER BY NO DESC";
            }else{
                $sql = "SELECT NO, USERNAME FROM STAFF ORDER BY USERNAME";
            }
        }
        $sth = $this->db->query($sql);
        $result = $sth->fetchAll();
        return $result;
    }
}