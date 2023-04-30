<?php
function index(){
include_once('config/connect.php');
$sqlAllProduct = "SELECT COUNT(*) AS count_product FROM product";
$queryAllProduct = mysqli_query($connect, $sqlAllProduct);

$sqlAllAdmin = "SELECT COUNT(*) AS count_admin FROM admin";
$queryAllAdmin = mysqli_query($connect, $sqlAllAdmin);

$sqlAllCustomer = "SELECT COUNT(*) AS count_customer FROM customer";
$queryAllCustomer = mysqli_query($connect, $sqlAllCustomer);

$sqlAllCategory = "SELECT COUNT(*) AS count_category FROM category";
$queryAllCategory = mysqli_query($connect, $sqlAllCategory);

$sqlAllOrder = "SELECT COUNT(*) AS count_order FROM `order`";
$queryAllOrder = mysqli_query($connect, $sqlAllOrder);

include_once('config/close_connect.php');
foreach ($queryAllProduct as $each){
    $count_product = $each['count_product'];
}
foreach ($queryAllAdmin as $each){
    $count_admin = $each['count_admin'];
}
foreach ($queryAllCustomer as $each){
    $count_customer = $each['count_customer'];
}
foreach ($queryAllCategory as $each){
    $count_category = $each['count_category'];
}
foreach ($queryAllOrder as $each){
    $count_order = $each['count_order'];
}
$arr = array();
$arr['count_product'] = $count_product;
$arr['count_admin'] = $count_admin;
$arr['count_customer'] = $count_customer;
$arr['count_category'] = $count_category;
$arr['count_order'] = $count_order;
return $arr;

}
switch($action){
    case'': $arr = index(); break;

}
?>