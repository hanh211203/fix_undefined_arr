<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>Order Success</title>
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/home.css">
<link rel="stylesheet" href="css/success.css">
<link rel="stylesheet" href="public/style.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
<script src="js/jquery-3.3.1.js"></script>
<script src="js/bootstrap.js"></script>
</head>
<body>

<div id="header">

<nav class="navbar navbar-expand-lg navbar-dark header">
<div class="container-fluid">
            <div class="box2">
                <img id="logo" src="./public/logo1.jpg" width="10" height="10">
            </div>  
            <div>
                <form class="p-1" action="https://httpbin.org/anything" placeholder="Tìm kiếm" aria-label="Search" method="post">
                    <input  type="search" name="search" id="search" >
                    <button type="submit">Tìm kiếm</button>
                </form>
            </div>
            <div class="col-lg-4 " id="cart" >
            	<a class="mt-4 mr-2" href="?redirect=cart">
                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16">
                    <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                </svg>
                </a>
                <span class="mt-3" style="font-size:30px">
                    <?php
                    if(isset($_SESSION["cart"])){
                        $totals = 0;
                        foreach($arr['product'] as $prd_id=>$qtt){
                            $totals++;
                        }
                        echo $totals;
                    }
                    else{
                        echo 0;
                    }
                    ?>
                </span>
            </div>
           
  </div>
</nav>

    <!-- Toggler/collapsibe Button -->
    <button class="navbar-toggler navbar-light" type="button" data-toggle="collapse" data-target="#menu">
    	<span class="navbar-toggler-icon"></span>
    </button>
</div>
<!--	End Header	-->

<!--	Body	-->
<div id="body">
	<div class="container">
    
        <div class="row">
        	<div id="main" class="col-lg-8 col-md-12 col-sm-12">
            	
                
                <!--	Order Success	-->
                <div id="order-success">
                	<div class="row">
                    	<div id="order-success-img" class="col-lg-3 col-md-3 col-sm-12"></div>
                        <div id="order-success-txt" class="col-lg-9 col-md-9 col-sm-12">
                        	<h3>bạn đã đặt hàng thành công !</h3>
                            <p>Vui lòng kiểm tra email để xem lại thông tin đơn hàng của mình.</p>
                        </div>
                    </div>    
                </div>
                <!--	End Order Success	-->
                
            </div>
            
           
        </div>
    </div>
</div>
<div class="container-fluid">
 <div id="bgr">
	<div class="container">
        <div >
            <div class="row" > 
                <div id="logo-2" class="col-lg-3 col-md-6">
                <h3>WHEY STORE</h3>
                    <p>
                    Tất cả các sản phẩm mà Wheystore bán không phải là thuốc, không thể thay thế thuốc chữa bệnh.
                    Hiệu quả khi dùng sản phẩm còn tùy thuộc vào cơ địa và chế độ ăn uống, sinh hoạt, tập luyện của mỗi người.
                    </p>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <h3>ĐỊA CHỈ</h3>
                    <p>1: 125 Lê Thanh Nghị, HBT, Hà Nội </p>
                    <p>=>Hotline phản ánh: 091.901.3030</p>
                    <hr>
                    <p>1: 17 Xuân Thủy, Cầu Giấy, Hà Nội </p>
                    <p>=>Hotline phản ánh: 091.901.3030</p>
                    <hr>
                    <p>1: 21 Trần Phú, Căn Quán, Hà Đông, Hà Nội </p>
                    <p>=>Hotline phản ánh: 091.901.3030</p>
                    
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <h3>HỖ TRỢ KHÁCH HÀNG</h3>
                    <p>Hướng dẫn đặt hàng</p>
                    <p>Hướng dẫn thanh toán</p>
                    <p>Chính sách vận chuyển</p>
                    <p>Chính sách bảo mật</p>
                    <p>Chính sách bảo hành</p>
                    
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <h3>THÔNG TIN CẦN BIẾT</h3>
                    <p>Kiểm tra tích điểm</p>
                    <p>Săn hàng giá rẻ</p>
                    <p>Kiến thức tập Gym</p>
                    <p>Chế độ dinh dưỡng</p>
                </div>
            </div>
        </div>
    </div>
</div> 
