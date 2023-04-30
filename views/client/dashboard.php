<!--    Product	-->
<div class="products">
    <h3>Danh sách sản phẩm</h3>
    <div class="product-list row">
        <?php
        foreach ($arr['product'] as $item) {
        ?>
            <div class="col-lg-4 col-md-6 col-sm-12 mx-product">
                <div class="product-item card text-center">
                    <a href="?redirect=product&prd_id=<?= $item['prd_id'] ?>"><img src="public/images/<?= $item['image'] ?>"></a>
                    <h4><a href="?redirect=product&prd_id=<?= $item['prd_id'] ?>"><?= $item['prd_name'] ?></a></h4>
                    <p>Giá Bán: <span><?= number_format($item['price']); ?>đ</span></p>
                </div>
            </div>
        <?php } ?>
    </div>
</div>
<!--	End Product	-->