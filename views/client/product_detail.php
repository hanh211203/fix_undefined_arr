<?php
    foreach ($arr['product'] as $item) {
?>   
    <link rel="stylesheet" href="public/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
<div id="product">
    <div id="product-head" class="row">
        <div id="product-img" class="col-lg-6 col-md-6 col-sm-12">
            <img src="images/<?= $item['image'] ?>">
        </div>
        <div id="product-details" class="col-lg-6 col-md-6 col-sm-12">
            <h1><?= $item['prd_name'] ?></h1>
            <ul>
                <li id="price">Giá Bán (chưa bao gồm VAT)</li>
                <li id="price-number"><?= number_format($item['price']); ?>đ</li>
                <?php
                if($item['quantity'] == 0) {
                    echo '<li class="text-danger">Hết hàng</li>';
                }else {
                    echo '<li id="status">Còn hàng</li>';
                }
                ?>
                
            </ul>
            <div id="add-cart"><a href="index.php?redirect=cart&action=add&id=<?= $item['id'] ?>">Thêm vào giỏ hàng</a></div>
        </div>
    </div>
    <div id="product-body" class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <h3>Đánh giá về <?= $item['prd_name'] ?></h3>
            
        </div>
    </div>

    <!--	Comments List	-->
    <div id="comments-list" class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="comment-item">
                <ul>
                    <li><b>Nguyễn Quang Nghĩa</b></li>
                    <li>2023-30-4 20:40:10</li>
                    <li>
                        <p>
                           Sản phẩm hỗ trợ tốt cho vận động thể thao mạnh, hỗ trợ cải thiện sức mạnh cơ bắp! Good!
                        </p>
                    </li>
                </ul>
            </div>     
        
        </div>
    </div>
    <!--	End Comments List	-->
</div>
<!--	End Product	-->
<div id="pagination">
    <ul class="pagination">
        <li class="page-item"><a class="page-link" href="#">Trang trước</a></li>
        <li class="page-item active"><a class="page-link" href="#">1</a></li>
        <li class="page-item"><a class="page-link" href="#">2</a></li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>
        <li class="page-item"><a class="page-link" href="#">Trang sau</a></li>
    </ul>
</div>
<?php } ?> 