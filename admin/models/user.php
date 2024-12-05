<?php
class User extends Db {
    public function getAllUser() {
        $sql = self::$connection->prepare("SELECT * FROM users ORDER BY created_at DESC");
        $sql->execute();
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items;
    }


    function DeleteUser($id) {
        $sql = self::$connection->prepare("DELETE FROM `users` WHERE `id` = ?");
        $sql->bind_param("i", $id);
        $sql->execute();
    }
}


?>