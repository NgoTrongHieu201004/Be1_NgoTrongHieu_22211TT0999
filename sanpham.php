<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh Mục Sản Phẩm - Shop Công Nghệ</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="public/css/stylesanpham.css">
    <style>
        
    </style>
</head>
<body>
    <!-- Navbar -->
    <?php include "header.php";?>

    <!-- Category Header -->
    <div class="container my-4">
        <div class="category-header text-center">
            <h1 class="display-4 fw-bold mb-3">Danh Mục Sản Phẩm</h1>
            <p class="lead mb-0">Khám phá các sản phẩm công nghệ chất lượng cao với giá tốt nhất</p>
        </div>
    </div>

    <!-- Main Categories -->
    <div class="container">
        <!-- Tabs -->
        <ul class="nav nav-tabs" id="productTabs" role="tablist">

        <?php  
        foreach($type->HienThiType() as $x):
           
        ?>
            <li class="nav-item" role="presentation">
            <a class="btn" href="sanpham.php?type-id=<?php echo $x['id_type'] ?>">
                <button class="nav-link " id="phone-tab" data-bs-toggle="tab" data-bs-target="#phone" type="button" role="tab">
                  <i class="<?php echo $x['icon'] ?>"></i><?php echo $x['name_type'] ?>
                </button>
                </a>
            </li>
            
        <?php endforeach ?>
        </ul>

        <!-- Tab Content -->
        <div class="tab-content" id="productTabsContent">
            <!-- Điện thoại -->
            <div class="tab-pane fade show active" id="phone" role="tabpanel">
                <div class="text-center mb-4">
                    <ul class="nav nav-pills">
                      
                    <?php 
                    if (isset($_GET['type-id'])) {
                        $type_id = $_GET['type-id'];
                        // Nếu không có tham số 'manu-id', gán mặc định là 1
                        $manu_id = isset($_GET['manu-id']) ? $_GET['manu-id'] : 1;
                       
                    } else {
                      
                        $type_id = 1;
                        $manu_id = 1;
                    }
                    
                    foreach($manu->HienThiManu() as $x): ?>

                        <li class="nav-item">
                        <a class="btn" href="sanpham.php?type-id=<?php echo $type_id ?>&manu-id=<?php echo $x['id_manu'] ?>">
                            <button class="nav-link " data-bs-toggle="tab" data-bs-target="#apple-phone">
                                <?php echo $x['name_manu'] ?>
                            </button>
                    </a>
                        </li>
                        <?php endforeach ?>
                        

                    </ul>
                </div>

                <div class="tab-content">
                    <!-- Apple Phones -->
                    <div class="tab-pane fade show active" id="apple-phone">
                        <div class="row g-4">
                        <?php
                        foreach($products->getProductsByTypeAndManu($manu_id,$type_id) as $a=>$values):
    
                        ?>
                            <div class="col-md-4 fade-in">
                                <div class="card product-card">
                                    <div class="position-relative">
                                        <img src="public/img/<?php echo $values['image'] ?>" class="card-img-top" alt="iPhone 14 Pro Max">
                                        <span class="product-badge">Mới</span>
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title"><?php echo $values['name'] ?></h5>
                                        
                                        <div class="price-tag"><?php echo number_format($values['price'], 0, '', '.') ?>₫</div>
                                        <button class="btn btn-cart">
                                            <i class="fas fa-shopping-cart me-2"></i>Thêm vào giỏ
                                        </button>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach ?>

                            <!-- Thêm sản phẩm Apple khác tương tự -->
                        </div>
                    </div>

                    <!-- Samsung Phones -->
                    <div class="tab-pane fade" id="samsung-phone">
                        <div class="row g-4">
                            <div class="col-md-4 fade-in">
                                <div class="card product-card">
                                    <div class="position-relative">
                                        <img src="/api/placeholder/400/300" class="card-img-top" alt="Samsung S23 Ultra">
                                        <span class="product-badge">Hot</span>
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title">Samsung Galaxy S23 Ultra</h5>
                                        <div class="product-specs">
                                            <div class="spec-item">
                                                <i class="fas fa-microchip spec-icon"></i>
                                                <span>Snapdragon 8 Gen 2</span>
                                            </div>
                                            <div class="spec-item">
                                                <i class="fas fa-memory spec-icon"></i>
                                                <span>12GB RAM</span>
                                            </div>
                                            <div class="spec-item">
                                                <i class="fas fa-hdd spec-icon"></i>
                                                <span>256GB</span>
                                            </div>
                                        </div>
                                        <div class="price-tag">26.990.000₫</div>
                                        <button class="btn btn-cart">
                                            <i class="fas fa-shopping-cart me-2"></i>Thêm vào giỏ
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <!-- Thêm sản phẩm Samsung khác tương tự -->
                        </div>
                    </div>
                </div>
            </div>

            <!-- Laptop Content -->
            <div class="tab-pane fade" id="laptop" role="tabpanel">
                <!-- Tương tự như phần điện thoại -->
            </div>

            <!-- Accessory Content -->
            <div class="tab-pane fade" id="accessory" role="tabpanel">
                <!-- Tương tự như phần điện thoại -->
            </div>
        </div>
    </div>
    <!-- Pagination -->
    <div class="row mt-5">
            <div class="col-12">
                <nav aria-label="Page navigation">
                    <ul class="pagination justify-content-center">
                        <li class="page-item disabled">
                            <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Trước</a>
                        </li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#">Sau</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>

 <!-- Footer -->
 <?php include "footer.php" ?>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.1/js/bootstrap.bundle.min.js"></script>
</body>
</html>