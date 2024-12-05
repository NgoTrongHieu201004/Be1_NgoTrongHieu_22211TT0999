<?php
require_once "db.php";
class Categories extends Db
{
    public function getAllCate()
    {
        $sql = self::$connection->prepare("SELECT * FROM `manufactures`");
        $sql->execute();
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items;
    }
    function Delete($id){
        $sql = self::$connection->prepare("DELETE FROM `manufactures` WHERE `id_manu` = ? ");
        $sql ->bind_param("i",$id);
        $sql ->execute();
       
    }
   
}
