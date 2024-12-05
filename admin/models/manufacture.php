<?php
class Manufacture extends Db{
    //Viet phuong thuc lay ra tat ca san pham moi nhat
    function getAllManu(){
        $sql = self::$connection->prepare("SELECT * 
        FROM manufactures ORDER BY created_at DESC");
        $sql->execute();//return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }
    
}