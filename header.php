<?php
require "config.php";
require "./public/models/db.php";
require "./public/models/products.php";
require "./public/models/manufactures.php";
require "./public/models/protypes.php";

$products = new Products();
$type = new Protypes();
$manu = new Manufactures();

?>



<nav class="navbar navbar-expand-lg navbar-dark sticky-top">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center" href="#">
                <i class="fas fa-laptop-code me-2"></i>
                Shop Công Nghệ
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="index.php"><i class="fas fa-home me-1"></i>Trang chủ</a></li>
                    <li class="nav-item"><a class="nav-link" href="sanpham.php"><i class="fas fa-store me-1"></i>Sản phẩm</a></li>
                    <li class="nav-item"><a class="nav-link" href="cart.php"><i class="fas fa-shopping-cart me-1"></i>Giỏ hàng</a></li>
                    <li class="nav-item"><a class="nav-link" href="#"><i class="fas fa-phone me-1"></i>Liên hệ</a></li>
                </ul>
                <form action="result.php" method="get">
                <div class="input-group ml-auto d-none d-lg-flex" style="width: 100%; max-width: 300px;">
                    <input type="text" name="keyfind" class="form-control border-0" placeholder="Tìm sản phẩm">
                    <div class="input-group-append">
                        <button type="submit" class="input-group-text bg-primary text-dark border-0 px-3"><i 
                           style ="padding: 5px;"class="fa fa-search"></i></button>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </nav>