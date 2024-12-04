<?php
class Product extends Db{
    //Viet phuong thuc lay ra tat ca san pham moi nhat
    function getAllProducts(){
        $sql = self::$connection->prepare("SELECT * FROM products");
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }
    function DeleteProducts($id){
        $sql = self::$connection->prepare("DELETE FROM `products` WHERE `id` = ? ");
        $sql ->bind_param("i",$id);
        $sql ->execute();
       
    }
    
   
    
}