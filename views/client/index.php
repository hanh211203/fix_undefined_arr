<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Home</title>
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/home.css">
<link rel="stylesheet" href="css/product.css">
<link rel="stylesheet" href="css/success.css">
<link rel="stylesheet" href="css/cart.css">
<link rel="stylesheet" href="public/style.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
<script src="js/jquery-3.3.1.js"></script>
<script src="js/bootstrap.js"></script>
</head>
<body>
<!--	Header	-->
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
            <div class="box3">
              <a href="#">  
                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                    <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                </svg>             
               </a> 
               <p style="color:white">Đăng nhập</p>
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
        	<div >
            	<nav>
                	<div class="menu_nav-text">
                        <ul>
                            <?php
                            foreach($arr['category'] as $item) {
                            ?>
                                <li class="menu-item">
                                    <a href="?redirect=cate&cat_id=<?= $item['cat_id']; ?>"><?= $item['cat_name'] ?></a>
                                </li>
                            <?php } ?>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <div class="row">
        	<div id="main" class="col-lg-12 col-md-12 col-sm-12">

            	<!--	Slider	-->
                <div id="carouselExampleCaptions" class="carousel slide">
  `              <div class="carousel-indicators">
                    <button type="button" data-bs-target="0" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="1" data-bs-slide-to="1" aria-label="Slide 2"></button>
                
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                    <img src="./public/images/slide1.jpg" class="d-block w-100" alt="...">                    
                    </div>
                    <div class="carousel-item">
                    <img src="./public/images/slide2.jpg" class="d-block w-100" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="0" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="1" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
                </div>`
                <!--	End Slider	-->

               
                <?php
                if(isset($_GET['redirect'])) {
                    $redirect = $_GET['redirect'];
                    switch($redirect) {
                        case 'product': include_once('views/client/product_detail.php');break;
                        case 'cart': include_once('views/client/cart.php');break;
                        case 'cate': include_once('views/client/category_product.php');break;
                    }
                }else {
                    include_once('views/client/dashboard.php');              
                }
                ?>
                
            </div>
            
            
        </div>
    </div>
</div>
<!--	End Body	-->

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
</div>
</body>
</html>