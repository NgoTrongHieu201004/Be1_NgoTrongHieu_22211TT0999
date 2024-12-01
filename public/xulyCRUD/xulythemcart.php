
<?php
require "../../config.php";
require "../models/db.php";
require "../models/carts.php";
session_start(); 

if (isset($_GET['idUser']) && isset($_GET['idProduct'])) {
   $id_user = $_GET['idUser'];
   $id_product = $_GET['idProduct'];
   $soluong = 1;
   $cart = new Carts();
   
   $cartUser = $cart->HienThiMotCart_User($id_user, $id_product);
   if ($cartUser) {
      $soluong += 1; // Cộng thêm số lượng hiện tại
      $cart->SuaCart($id_user, $id_product, $soluong);
   } else {
      $cart->ThemCart($id_user, $id_product, $soluong);
   }
   
   // Thêm số lượng sản phẩm đã thêm (dùng để hiển thị số đỏ)
   if (!isset($_SESSION['new_cart_count'])) {
      $_SESSION['new_cart_count'] = 0;
  }
  $_SESSION['new_cart_count'] += 1;

   header('location:../../sanpham.php');
}



?>