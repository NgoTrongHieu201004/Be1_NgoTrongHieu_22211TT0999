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

    public function getProductsByTypeAndManuLimit($manu_id, $type_id,$page,$perPage)
    {
        $start = ($page-1)*$perPage;
        $sql = self::$connection->prepare("SELECT * FROM products WHERE manu_id = ? AND type_id = ? LIMIT ?,?");

        $sql->bind_param("iiii", $manu_id, $type_id,$start,$perPage); // "ii" biểu thị 2 tham số kiểu integer
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
    public function getItemByCate($cate_id, $page, $count)
    {
        $start = ($page - 1) * $count;
        $sql = self::$connection->prepare("SELECT * FROM items WHERE category = ? LIMIT ?,?");
        $sql->bind_param("iii", $cate_id, $start, $count);
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }
    public function paginate($url, $total, $perPage)
    {
        $totalLinh = ceil($total / $perPage);
        $link = "";
        for ($i = 1; $i <= $totalLinh; $i++) {
            # code...
            $link = $link . "<a class='badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2' href ='{$url}&page={$i}'> $i </a>";
        }
        return $link;
    }
    public function getSearchLimit($keys, $count, $page)
    {

        $start = ($page - 1) * $count;
        $sql = self::$connection->prepare("SELECT * FROM `products` WHERE name LIKE ? LIMIT ?,?");
        $key = "%$keys%";
        $sql->bind_param("sii", $key, $start, $count);
        $sql->execute();
        $products = array();
        $products = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $products;
    }
    public function getSearchAll($keys)
    {
        $sql = self::$connection->prepare("SELECT * FROM `products` WHERE name LIKE ?");
        $key = "%$keys%";
        $sql->bind_param("s", $key);
        $sql->execute();
        $products = array();
        $products = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $products;
    }
    public function paginateVer3($url, $total, $perPage, $page, $offset, $key)
    {
        if ($total <= 0) return "";
        $keys = trim($key);
        $totalLink = ceil($total / $perPage);
        if ($totalLink <= 1) return "";
        $from = $page - $offset;
        $to = $page + $offset;
        if ($from <= 0) {
            $from = 1;
            $to = $offset * 2;
        }
        if ($to > $totalLink) {
            $to = $totalLink;
        }
        $links = "";
        $prevLinks = "" ; 
        $nextLinks = "";
        if($page > 1){
            $prev = $page -1 ; 
            $prevLinks = "<li class='page-item  '><a class='page-link' href='result.php?keyfind=$keys&page=$prev'> Trước </a></li>";
        }
        if($page < $totalLink){
            $next = $page+1; 
            $nextLinks = "<li class='page-item  '><a class='page-link' href='result.php?keyfind=$keys&page=$next'> Tiếp </a></li>";
        }
        for ($i = $from; $i < $to; $i++) {
            $links = $links . "<li class='page-item  '><a class='page-link' href='result.php?keyfind=$keys&page=$i'> $i </a></li>";
        }
        return $prevLinks.$links.$nextLinks;
    }
    public function PaginateVer4($url , $total , $perPage , $offset , $page , $manu_id, $type_id){
        if($total <=0) {return "";} 
        $totalLinks = ceil($total/$perPage);
        if($totalLinks <=1) {return "" ; }
        $from = $page -$offset ; 
        $to = $page + $offset ; 
        if($from <= 0 ){
            $from = 1 ; 
            $to = $offset * 2 ; 
        }
        if($to >$totalLinks){
            $to = $totalLinks;
        }
        $link = "";
        $prevLink = "";
        $nextLink = "";
        if($page > 1){
            $prev = $page-1 ; 
            $prevLink = "<li class='page-item  '><a class='page-link' href='sanpham.php?page=$prev&manu-id=$manu_id&type-id=$type_id'> Trước </a></li>";
        }
        if($page < $totalLinks){
           $next = $page+1 ; 
           $nextLink = "<li class='page-item  '><a class='page-link' href='sanpham.php?page=$next&manu-id=$manu_id&type-id=$type_id'> Tiếp </a></li>";
        }
        for($i = $from ; $i < $to ; $i++){
            $link = $link."<li class='page-item  '><a class='page-link' href='sanpham.php?page=$i&manu-id=$manu_id&type-id=$type_id'> $i </a></li>";
        }
        return $prevLink.$link.$nextLink;
        
    }
    public function detailItems($id){
        $sql = self::$connection->prepare("SELECT * FROM `products` WHERE id = ?");
        $sql -> bind_param("i",$id);
        $sql ->execute();
        $products = array();
        $products = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $products;
    }
}
