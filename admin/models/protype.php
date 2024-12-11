<?php
class Protype extends Db{
    //Viet phuong thuc lay ra tat ca san pham moi nhat
    function getAllProtypes(){
        $sql = self::$connection->prepare("SELECT * 
        FROM protypes ORDER BY created_at DESC");
        $sql->execute();//return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }
    public function HienThiMotType($id)
    {
        $sql = self::$connection->prepare("SELECT * FROM protypes WHERE id_type = ?");
        $sql->bind_param("i", $id);
        $sql->execute();
        return $sql->get_result()->fetch_assoc(); // Trả về một dòng dưới dạng mảng liên kết
    }
    
}