<?php
function index() {
    $prd_id = $_GET['prd_id'];
    include_once('config/connect.php');
    $cate = mysqli_query($connect, "SELECT * FROM category ORDER BY cat_id ASC");
    $sql = "SELECT * FROM product WHERE prd_id = '$prd_id'";
    $query = mysqli_query($connect, $sql);
    include_once('config/close_connect.php');
    $arr = array();
    $arr['category'] = $cate;
    $arr['product'] = $query;
    return $arr;
}
function cate(){
    $cat_id =  $_GET['cat_id'];
    include_once('config/connect.php');
    $cate = mysqli_query($connect, "SELECT * FROM category ORDER BY cat_id ASC");
    $sql = "SELECT product.*, category.* 
        FROM product
        INNER JOIN category ON product.cat_id = category.cat_id
        WHERE category.cat_id = '$cat_id'
        ORDER BY product.prd_id ASC ";
    $query = mysqli_query($connect, $sql);
    include_once('config/close_connect.php');
    $arr = array();
    $arr['category'] = $cate;
    $arr['product'] = $query;
    $arr['cat_id'] = $cat_id;
    return $arr;
}
switch($redirect) {
    case 'product': $arr = index(); break;
    case 'cate': $arr = cate(); break;
}

?>