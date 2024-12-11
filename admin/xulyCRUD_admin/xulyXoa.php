<?php


include "../../config.php";
include "../models/db.php";
include "../models/product.php";
$product = new Product();
if(isset($_GET['id_product'])){
    $id_product = $_GET['id_product'];
    $product->XoaProduct($id_product);
    header('location:.././product.php');
}

?>