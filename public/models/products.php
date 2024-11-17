<?php

class Products extends db
{
    public function HienThi()
    {
        $sql = self::$connection->prepare("SELECT * FROM products");
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array

    }
    public function HienThiMotSanPham($id)
    {
        $sql = self::$connection->prepare("SELECT * FROM products WHERE id = ?");
        $sql->bind_param("i", $id);
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }
    public function HienThiSanPhamMoi($start, $count)
    {
        $sql = self::$connection->prepare("SELECT * FROM products ORDER BY create_at DESC LIMIT ?,?");
        $sql->bind_param("ii", $start, $count);
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }

    public function getProductsByTypeAndManu($manu_id, $type_id)
    {
    $sql = self::$connection->prepare("SELECT * FROM products WHERE manu_id = ? AND type_id = ?");
    
    $sql->bind_param("ii", $manu_id, $type_id); // "ii" biểu thị 2 tham số kiểu integer
    $sql->execute(); // Thực thi câu lệnh SQL
    $items = array();
    $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
    return $items; // Trả về mảng các sản phẩm
    }


    public function getFeaturedItem($start, $count)
    {
        $sql = self::$connection->prepare("SELECT * FROM products WHERE featured = 1 ORDER BY created_at DESC LIMIT ?,?");
        $sql->bind_param("ii", $start, $count);
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }
    public function  Search($keyword, $start, $count)
    {
        $sql = self::$connection->prepare("SELECT * FROM items WHERE content LIKE ? LIMIT ?,?");
        $keyword = "%$keyword%";
        $sql->bind_param("sii", $keyword, $start, $count);
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }


    public function  getAllIteByCate($cate_id)
    {
        $sql = self::$connection->prepare("SELECT * FROM items WHERE category = ?");
    
        $sql->bind_param("i", $cate_id);
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }
    public function getItemByCate($cate_id,$page,$count)
    {
        $start = ($page - 1) * $count;
        $sql = self::$connection->prepare("SELECT * FROM items WHERE category = ? LIMIT ?,?");
        $sql->bind_param("iii", $cate_id,$start,$count);
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }
    public function paginate($url,$total,$perPage){
        $totalLinh = ceil($total / $perPage);
        $link = "";
        for ($i=1; $i <= $totalLinh ; $i++) { 
            # code...
            $link = $link . "<a class='badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2' href ='{$url}&page={$i}'> $i </a>";
        }
        return $link;
    }

}
