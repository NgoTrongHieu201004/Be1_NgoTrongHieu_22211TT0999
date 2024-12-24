<?php

class ThanhToan extends db{
    
    public function ThemSanPhamThanhToan($payment_id, $id_product, $soluong, $price)
    {
        $sql = self::$connection->query("INSERT INTO `payment_details`(`payment_id`, `id_product`, `soluong`, `price`) VALUES ('$payment_id',' $id_product','$soluong','$price')");
        // Kiểm tra và trả về kết quả
        if ($sql) {
            return true; // Truy vấn thành công
        } else {
            return false; // Truy vấn thất bại
        }
    }
    public function ThemDonThanhToan($id_user, $tongtien)
    {
        $sql = self::$connection->query("INSERT INTO `payments`(`id_user`, `tongtien`) VALUES ('$id_user','$tongtien')");
        if ($sql) {
            return self::$connection->insert_id; 
        } else {
            return false; 
        }
    }
    
    public function HienThiDon($id_user)
    {
        $sql = self::$connection->prepare("SELECT * FROM payments WHERE id_user = ? ORDER BY created_at DESC");
        $sql->bind_param("i", $id_user); // "i" là kiểu dữ liệu Integer
        $sql->execute(); // Thực thi câu lệnh SQL
        $items = array();
        $result = $sql->get_result();
        $items = $result->fetch_all(MYSQLI_ASSOC);
        return $items; 
    }
    
public function HienThiSanPhamTheoDon($id_payment)
{
    $sql = self::$connection->prepare("SELECT * FROM payment_details WHERE payment_id = ?");
    $sql->bind_param("i", $id_payment); // "i" là kiểu dữ liệu Integer
    $sql->execute(); // Thực thi câu lệnh SQL
    $items = array();
    $result = $sql->get_result();
    $items = $result->fetch_all(MYSQLI_ASSOC);
    return $items; 
}

    function LayIDDonThanhToan($idUser, $tongtien) {
        $query = "INSERT INTO payments (id_user, tongtien) VALUES ('$idUser', '$tongtien')";
        if (mysqli_query($this->conn, $query)) {
            return mysqli_insert_id($this->conn);  
        }
        return false;  // In case of failure
    }

    public function HienThiTienTheoThang(){
        $sql = self::$connection->prepare(" SELECT DATE_FORMAT(created_at, '%Y-%m') AS month, 
            SUM(tongtien) AS total FROM payments 
            GROUP BY month 
            ORDER BY month ASC ");
        $sql->execute();
        $result = $sql->get_result();
        $items = $result->fetch_all(MYSQLI_ASSOC);
        return $items; 
    }
    
    
    
}

?>