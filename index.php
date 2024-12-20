<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop Công Nghệ - Thiết Bị Hiện Đại</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="public/css/style.css">

</head>

<body>


    <!-- Navbar -->
    <?php include "header.php"; ?>



    <!-- Banner -->
    <div class="container">
        <div class="banner animated-card">
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <h1 class="display-4 fw-bold">Khuyến Mãi Mùa Hè 🌞</h1>
                    <p class="lead">Giảm giá lên đến 50% cho các sản phẩm công nghệ hot nhất</p>
                    <div class="d-flex gap-3">
                        <a href="#products" class="btn btn-light btn-lg"><i class="fas fa-shopping-bag me-2"></i>Mua
                            Ngay</a>
                        <a href="#" class="btn btn-outline-light btn-lg"><i class="fas fa-gift me-2"></i>Ưu Đãi</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Features -->
    <div class="container my-5">
        <div class="row g-4 text-center">
            <div class="col-md-4">
                <div class="p-3 border rounded animated-card">
                    <i class="fas fa-truck feature-icon"></i>
                    <h4>Miễn Phí Vận Chuyển</h4>
                    <p class="text-muted">Cho đơn hàng trên 5 triệu</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="p-3 border rounded animated-card">
                    <i class="fas fa-shield-alt feature-icon"></i>
                    <h4>Bảo Hành 12 Tháng</h4>
                    <p class="text-muted">Đổi trả miễn phí</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="p-3 border rounded animated-card">
                    <i class="fas fa-headset feature-icon"></i>
                    <h4>Hỗ Trợ 24/7</h4>
                    <p class="text-muted">Tư vấn miễn phí</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Products -->
    <?php

    $productsList = $products->HienThiSanPhamMoi(0, 3);

    // Sắp xếp sản phẩm theo ngày tạo (mới nhất lên đầu)
    usort($productsList, function ($a, $b) {
        $dateA = new DateTime($a['create_at']);
        $dateB = new DateTime($b['create_at']);
        return $dateB <=> $dateA; // Sắp xếp giảm dần theo ngày tạo
    });
    ?>

    <div class="container my-5" id="products">
        <h2 class="text-center mb-4">Sản Phẩm Nổi Bật</h2>
        <div class="row row-cols-1 row-cols-md-3 g-4">

            <?php
            foreach($productsList as $a => $values):
                ?>

                <!-- Product 1 -->
                <div class="col">
                    <div class="card h-100 product-card">
                        <div class="position-relative">
                            <img src="public/img/<?php echo $values['image'] ?>" class="card-img-top" alt="iPhone">
                            <span
                                class="category-badge"><?php echo $type->HienThiMotType($values['type_id'])[0]['name_type'] ?></span>
                        </div>
                        <div class="card-body">
                            <a class="h5 d-block mb-3 text-secondary text-uppercase font-weight-bold  text-decoration-none"
                                href="single.php?id=<?php echo $values['id'] ?>"><?php echo $values['name'] ?></a>
                            <p class="card-text">Chip A17 Pro, Camera 48MP, Pin 4422 mAh</p>
                            <div class="price-tag"><?php echo number_format($values['price'], 0, '', '.') ?>₫</div>
                            <a
                                href="./public/xulyCRUD/xulythemcart.php?idUser=<?php echo $idUser ?>&idProduct=<?php echo $values['id'] ?>">
                                <button class="btn btn-primary w-100"><i class="fas fa-shopping-cart me-2"></i>Thêm vào
                                    giỏ</button>
                            </a>
                        </div>
                    </div>
                </div>
                <?php
            endforeach;
            ?>

        </div>
    </div>

    <!-- Footer -->
    <?php include "footer.php" ?>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.1/js/bootstrap.bundle.min.js"></script>
</body>

</html>