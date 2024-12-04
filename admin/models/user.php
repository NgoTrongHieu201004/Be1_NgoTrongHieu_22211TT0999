<?php
class User extends Db {
    public function getAllUser() {
        $sql = self::$connection->prepare("SELECT * FROM `users`");
        $sql->execute();
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items;
    }

    function DeleteUser($id) {
        // // Kiểm tra xem tài khoản có phải là role 100 không
        // $checkRoleSql = self::$connection->prepare("SELECT `role` FROM `users` WHERE `id` = ?");
        // $checkRoleSql->bind_param("i", $id);
        // $checkRoleSql->execute();
        
        // // Lấy kết quả và gán vào biến $role
        // $checkRoleSql->store_result();
        
        // // Kiểm tra nếu có kết quả trả về
        // if ($checkRoleSql->num_rows > 0) {
        //     // Lấy giá trị của role
        //     $checkRoleSql->bind_result($role);
        //     $checkRoleSql->fetch();
            
        //     // Nếu role = 100, không cho phép xóa
        //     if ($role == 100) {
        //         return 'Không thể xóa tài khoản có vai trò 100.';
        //     }
        // } else {
        //     return 'Tài khoản không tồn tại.';
        // }

        // Tiến hành xóa nếu không phải tài khoản có role = 100
        $sql = self::$connection->prepare("DELETE FROM `users` WHERE `id` = ?");
        $sql->bind_param("i", $id);
        $sql->execute();
    }
}


?>