<?php
$redirect = $_GET['redirect']?? '';
$action = $_GET['action'] ?? '';
if($redirect == ''){
    require_once('model/client/index_model.php');
    require_once('views/client/index.php');
}else{
    switch($redirect){
        case 'product':
            require_once('model/client/product/product_model.php');
            require_once('views/client/index.php');
            require_once('views/client/product_detail.php');
            ;break;
        case 'cate':
            require_once('model/client/product/product_model.php'); 
            require_once('views/client/index.php');
            require_once('views/client/product_category.php');
            ;break;
        case 'cart':
            require_once('controller/client/cart/cart_controller.php');
            require_once('views/client/cart.php');
            ;break;
    }
}
?>
