<?php
function index(){
    include_once('config/connect.php');
    $sql_cate = "SELECT * FROM category ORDER BY cat_id ASC";
    $query_cate = mysqli_query($connect, $sql_cate);
    $sql_prd= "SELECT * FROM product ORDER BY prd_id DESC LIMIT 6";
    $query_prd = mysqli_query($connect, $sql_prd);

    if(isset($_SESSION['cart'])) {
        foreach($_SESSION['cart'] as $prd_id => $value) {
            $sqlTemp = "SELECT * FROM product WHERE prd_id = '$prd_id'";
            $resultTemp = mysqli_query($connect, $sqlTemp);
            if(isset($resultTemp)){
                foreach ($resultTemp as $each){
                    $temp[$prd_id]['prd_name'] = $each['prd_name'];
                    $temp[$prd_id]['price'] = $each['price'];
                    $temp[$prd_id]['image'] = $each['image'];
                    $temp[$prd_id]['quantity'] = $each['quantity'];
                    $temp[$prd_id]['amount'] = $value;
                }
            }
        }
    }

    include_once('config/close_connect.php');
    $arr = array();
    $arr['category'] = $query_cate;
    $arr['product'] = $query_prd;
    return $arr;
}
switch($redirect){
    case '': $arr = index(); break;
}
?>