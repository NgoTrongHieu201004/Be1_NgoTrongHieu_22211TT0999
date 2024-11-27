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
        .section-title {
    margin-bottom: 15px;
    padding: 15px;
    display: flex;
    align-items: center;
    justify-content: space-between;
    background: #FFFFFF;
    border: 1px solid #dee2e6;
    border-left: 5px solid #3491d0;
  }
  .center {
 display: block;
 margin-left: auto;
 margin-right: auto;
 width: auto;
}
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

             <!-- Products -->
    <div class="container my-5" id="products">
     
     <div class="row ">
      <div class="col">
                        
                    
                     <?php 
                     $id = (isset($_GET['id']))?$_GET['id']:1;
                          foreach($products->detailItems($id) as $key=>$values){
                       ?>
                     <div class="col fade-in">
                             <div class="card product-card">
                                 <div class="position-relative">
                                     <img src="public/img/<?php echo $values['image']; ?>" class="center img-fluid" alt="ảnh">
                                     <span class="product-badge">Mới</span>
                                 </div>
                                 <div class="card-body">
                                
                                 <a class="h1 d-block mb-3 text-secondary text-uppercase font-weight-bold  text-decoration-none" href="single.php?id=<?php echo $values['id'] ?>"><?php echo $values['name'] ?></a>       
                                     <div class="price-tag"><?php echo number_format($values['price'], 0, '', '.'); ?>₫</div>
                                     <h5><?php echo $values['description'] ?></h5>
                                     <button class="btn btn-cart">
                                         <i class="fas fa-shopping-cart me-2"></i>Thêm vào giỏ
                                     </button>
                                 </div>
                             </div>
                         </div>
                     <?php } ?>
                       <!-- Comment List Start -->
                    <div class="mb-3">
                        <div class="section-title mb-0">
                            <h4 class="m-0 text-uppercase font-weight-bold">3 Bình luận</h4>
                        </div>
                        <div class="bg-white border border-top-0 p-4">
                            <div class="media mb-4">
                                <img src="public/img/icon_avatar.png" alt="Image" class="img-fluid mr-3 mt-1" style="width: 45px;">
                                <div class="media-body">
                                    <h6><a class="text-secondary font-weight-bold" href="">John Doe</a> <small><i>01 Jan 2045</i></small></h6>
                                    <p>Diam amet duo labore stet elitr invidunt ea clita ipsum voluptua, tempor labore
                                        accusam ipsum et no at. Kasd diam tempor rebum magna dolores sed sed eirmod ipsum.</p>
                                    <button class="btn btn-sm btn-outline-secondary">Reply</button>
                                </div>
                            </div>
                            <div class="media">
                                <img src="public/img/icon_avatar.png" alt="Image" class="img-fluid mr-3 mt-1" style="width: 45px;">
                                <div class="media-body">
                                    <h6><a class="text-secondary font-weight-bold" href="">John Doe</a> <small><i>01 Jan 2045</i></small></h6>
                                    <p>Diam amet duo labore stet elitr invidunt ea clita ipsum voluptua, tempor labore
                                        accusam ipsum et no at. Kasd diam tempor rebum magna dolores sed sed eirmod ipsum.</p>
                                    <button class="btn btn-sm btn-outline-secondary">Reply</button>
                                    <div class="media mt-4">
                                        <img src="public/img/icon_avatar.png" alt="Image" class="img-fluid mr-3 mt-1"
                                            style="width: 45px;">
                                        <div class="media-body">
                                            <h6><a class="text-secondary font-weight-bold" href="">John Doe</a> <small><i>01 Jan 2045</i></small></h6>
                                            <p>Diam amet duo labore stet elitr invidunt ea clita ipsum voluptua, tempor
                                                labore accusam ipsum et no at. Kasd diam tempor rebum magna dolores sed sed
                                                eirmod ipsum.</p>
                                            <button class="btn btn-sm btn-outline-secondary">Reply</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                        <!-- Comment List End -->

                    <!-- Comment Form Start -->
                    <div class="mb-3">
                        <div class="section-title mb-0">
                            <h4 class="m-0 text-uppercase font-weight-bold">Leave a comment</h4>
                        </div>
                        <div class="bg-white border border-top-0 p-4">
                            <form>
                                <div class="form-row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="name">Name *</label>
                                            <input type="text" class="form-control" id="name">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="email">Email *</label>
                                            <input type="email" class="form-control" id="email">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="website">Website</label>
                                    <input type="url" class="form-control" id="website">
                                </div>

                                <div class="form-group">
                                    <label for="message">Message *</label>
                                    <textarea id="message" cols="30" rows="5" class="form-control"></textarea>
                                </div>
                                <div class="form-group mb-0" style ="margin-top: 10px;">
                                    <input type="submit" value="Leave a comment"
                                        class="btn btn-primary font-weight-semi-bold py-2 px-3">
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- Comment Form End -->
                     <?php ?>
     </div>

 </div>
           
        </div>
    </div>
    <!-- Pagination -->
  

 <!-- Footer -->
 <?php include "footer.php" ?>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.1/js/bootstrap.bundle.min.js"></script>
</body>
</html>