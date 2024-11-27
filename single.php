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
                    
                </div>
            </div>

            <!-- Laptop Content -->
           

            <!-- Accessory Content -->
           
        </div>
    </div>
    <!-- Pagination -->
  

 <!-- Footer -->
 <?php include "footer.php" ?>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.1/js/bootstrap.bundle.min.js"></script>
</body>
</html>