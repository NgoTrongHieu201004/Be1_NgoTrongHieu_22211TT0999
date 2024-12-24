<?php
include "header.php";
include "sidebar.php";
?>
<div id="content">
    <div id="content-header">
        <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom current"><i
                    class="icon-home"></i> Home</a></div>
        <h1>Manage Payments</h1>
    </div>
    <div class="container">
    <hr>
         <!-- Card chứa ComboBox chọn tháng -->
         <div class="card">
            <div class="card-header">
                <h4 class="mb-0">Chọn Tháng</h4>
            </div>
            <div class="card-body">
                <form>
                    <label for="monthSelect" class="form-label">Chọn tháng:</label>
                    <select id="monthSelect" name="month" class="form-select" aria-label="Chọn tháng">
                        <option value="13">Mới nhất</option>
                        <option value="01">Tháng 1</option>
                        <option value="02">Tháng 2</option>
                        <option value="03">Tháng 3</option>
                        <option value="04">Tháng 4</option>
                        <option value="05">Tháng 5</option>
                        <option value="06">Tháng 6</option>
                        <option value="07">Tháng 7</option>
                        <option value="08">Tháng 8</option>
                        <option value="09">Tháng 9</option>
                        <option value="10">Tháng 10</option>
                        <option value="11">Tháng 11</option>
                        <option value="12">Tháng 12</option>
                    </select>
                </form>
            </div>
        </div>

        <!-- Card chứa Danh Sách Đơn Hàng -->
        <div class="card">
            <div class="card-header">
                <h4 class="mb-0">Danh Sách Đơn Hàng</h4>
            </div>
            <div class="card-body">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Tên Người Đặt</th>
                            <th>Số Tiền</th>
                            <th>Ngày Đơn Hàng</th>
                        </tr>
                    </thead>
                    <tbody id="orderList">
                        <a href="#"> <tr>     
                            <td>Nguyễn Văn A</td>
                            <td>500,000 VND</td>
                            <td>2024-01-15</td>
                        </tr> 
                        </a>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>   







<?php include "footer.php"; ?>
<script>
    document.getElementById("monthSelect").addEventListener("change", function() {
    var month = this.value;  // Lấy giá trị tháng đã chọn
    fetchOrders(month);
});

function fetchOrders(month) {
    // Gửi yêu cầu Ajax để lấy dữ liệu đơn hàng theo tháng
    fetch('your_php_script.php?month=' + month)
        .then(response => response.json())
        .then(data => {
            var orderList = document.getElementById("orderList");
            orderList.innerHTML = ""; // Xóa danh sách cũ

            // Kiểm tra nếu có đơn hàng
            if (data.length === 0) {
                orderList.innerHTML = "<tr><td colspan='3'>Không có đơn hàng cho tháng này</td></tr>";
            } else {
                // Hiển thị các đơn hàng
                data.forEach(order => {
                    var row = document.createElement("tr");
                    row.innerHTML = `
                        <td>${order.order_date}</td>
                        <td>${order.customer_name}</td>
                        <td>${order.total_amount}</td>
                    `;
                    orderList.appendChild(row);
                });
            }
        })
        .catch(error => {
            console.error("Error fetching orders:", error);
        });
}

</script>