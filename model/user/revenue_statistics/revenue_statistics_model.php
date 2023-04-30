<?php
function index(){
    include_once('config/connect.php');
    $sql_order = "SELECT SUM(total_price_order) AS result FROM `order`";
    $query_order = mysqli_query($connect, $sql_order);
    include_once('config/close_connect.php');

    foreach ($query_order as $each){
        $result = $each['result'];
    }
    
    $arr = array();
    $arr['result'] = $result;
    return $arr;
}
switch($action){
    case '': $arr = index(); break;
}
?>