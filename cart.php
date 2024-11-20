<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giỏ Hàng | Shop Công Nghệ</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="public/css/stylecart.css">
    <style>
       
    </style>
</head>
<body>
    <!-- Navbar -->
    <?php include "header.php" ?>

    <!-- Main Content -->
    <div class="container">
        <div class="cart-container">
            <div class="cart-header text-center">
                <h2><i class="fas fa-shopping-cart me-2"></i>Giỏ Hàng Của Bạn</h2>
                <p class="mb-0">2 sản phẩm trong giỏ hàng</p>
            </div>

            <div class="products-list">
                <!-- Product 1 -->
                <div class="product-card">
                    <div class="row align-items-center">
                        <div class="col-md-2 text-center">
                            <img src="/api/placeholder/200/200" alt="iPhone 14" class="product-image">
                        </div>
                        <div class="col-md-4">
                            <h5 class="mb-2">iPhone 14 Pro Max</h5>
                            <p class="text-muted mb-0">256GB, Deep Purple</p>
                            <span class="badge bg-primary mt-2">Bảo hành 24 tháng</span>
                        </div>
                        <div class="col-md-2">
                            <span class="price">25.000.000₫</span>
                        </div>
                        <div class="col-md-2">
                            <div class="quantity-control">
                                <button class="quantity-btn" onclick="decreaseQuantity(this)">-</button>
                                <input type="number" class="quantity-input" value="1" min="1" readonly>
                                <button class="quantity-btn" onclick="increaseQuantity(this)">+</button>
                            </div>
                        </div>
                        <div class="col-md-2 text-end">
                            <button class="btn delete-btn">
                                <i class="fas fa-trash-alt"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Product 2 -->
                <div class="product-card">
                    <div class="row align-items-center">
                        <div class="col-md-2 text-center">
                            <img src="/api/placeholder/200/200" alt="Samsung Galaxy S23" class="product-image">
                        </div>
                        <div class="col-md-4">
                            <h5 class="mb-2">Samsung Galaxy S23 Ultra</h5>
                            <p class="text-muted mb-0">256GB, Phantom Black</p>
                            <span class="badge bg-primary mt-2">Bảo hành 24 tháng</span>
                        </div>
                        <div class="col-md-2">
                            <span class="price">20.000.000₫</span>
                        </div>
                        <div class="col-md-2">
                            <div class="quantity-control">
                                <button class="quantity-btn" onclick="decreaseQuantity(this)">-</button>
                                <input type="number" class="quantity-input" value="2" min="1" readonly>
                                <button class="quantity-btn" onclick="increaseQuantity(this)">+</button>
                            </div>
                        </div>
                        <div class="col-md-2 text-end">
                            <button class="btn delete-btn">
                                <i class="fas fa-trash-alt"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Checkout Section -->
            <div class="checkout-section">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <h4 class="mb-2">Tổng cộng: <span id="totalPrice">65.000.000₫</span></h4>
                        <p class="mb-0"><i class="fas fa-info-circle me-2"></i>Đã bao gồm VAT & Phí vận chuyển</p>
                    </div>
                    <div class="col-lg-6 text-lg-end">
                        <button class="checkout-btn">
                            <i class="fas fa-lock me-2"></i>Thanh Toán An Toàn
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <?php include "footer.php" ?>

    <script>
        function formatCurrency(amount) {
            return new Intl.NumberFormat('vi-VN', { 
                style: 'currency', 
                currency: 'VND'
            }).format(amount).replace('VND', '₫');
        }

        function decreaseQuantity(button) {
            const input = button.nextElementSibling;
            if (parseInt(input.value) > 1) {
                input.value = parseInt(input.value) - 1;
                updateTotal();
            }
        }

        function increaseQuantity(button) {
            const input = button.previousElementSibling;
            input.value = parseInt(input.value) + 1;
            updateTotal();
        }

        function updateTotal() {
            let total = 0;
            const products = document.querySelectorAll('.product-card');
            
            products.forEach(product => {
                const priceText = product.querySelector('.price').innerText;
                const price = parseInt(priceText.replace(/\D/g, ''));
                const quantity = parseInt(product.querySelector('.quantity-input').value);
                total += price * quantity;
            });

            document.getElementById('totalPrice').innerText = formatCurrency(total);
        }

        // Thêm hiệu ứng cho nút xóa
        document.querySelectorAll('.delete-btn').forEach(btn => {
            btn.addEventListener('click', function() {
                const productCard = this.closest('.product-card');
                productCard.style.opacity = '0';
                productCard.style.transform = 'scale(0.8)';
                setTimeout(() => {
                    productCard.remove();
                    updateTotal();
                }, 300);
            });
        });
    </script>
</body>
</html>