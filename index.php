<?php 
include_once './db/db_con.php';
include_once './config.php';

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">
<title>Trandy</title>
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/font-awesome.min.css" rel="stylesheet">
<link href="css/prettyPhoto.css" rel="stylesheet">
<link href="css/price-range.css" rel="stylesheet">
<link href="css/animate.css" rel="stylesheet">
<link href="css/main.css" rel="stylesheet">
<link href="css/responsive.css" rel="stylesheet">
<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<script src="js/respond.min.js"></script>
<![endif]-->
<link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<script src="js/jquery.js"></script>
	<script src="js/price-range.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>


<body>
<meta charset="UTF-8">
<header id="header"><!--header-->
<div class="header_top"><!--header_top-->
<div class="container">
<div class="row">
<div class="col-sm-6">
<div class="contactinfo">
						</div>
						</div>
						
					</div>
					</div>
					</div><!--/header_top-->

					<div class="header-middle"><!--header-middle-->
					<div class="container">
					<div class="row">
					<div class="col-md-4 clearfix">
					<div class="logo pull-left">
							<a href="index.php"><img src="images/home/logo.png" alt="메인 이미지" / style="width: 93px; height: 57px;"></a>
					</div>
						</div>
																	<div class="col-md-8 clearfix">
						<div class="shop-menu clearfix pull-right">
						<ul class="nav navbar-nav">
											<?php
					    if(!$userid) {
									?>                
								<li><a href="order_list.php"><i class="fa fa-shopping-cart"></i>주문정보</a></li>
								<li><a href="cart.php"><i class="fa fa-shopping-cart"></i> 장바구니</a></li>
								<li><a href="login.php"><i class="fa fa-lock"></i> 로그인</a></li>
								<li><a href="sign.php"><i class="fa fa-lock"></i> 회원가입</a></li>
									<?php
									    } else {
									                $logged = $username."(".$userid.")님 환영합니다.";
									?>
									<li><a><i></i> <?=$logged ?></a></li>
									<li><a href="order_list.php"><i class="fa fa-shopping-cart"></i>주문정보</a></li>
								<li><a href="cart.php"><i class="fa fa-shopping-cart"></i> 장바구니</a></li>
								<li><a href="./logout.php"><i class="fa fa-lock"></i> 로그아웃</a></li>
									<?php
									    }
									?>
							  
								
								</ul>
								</div>
								</div>
								</div>
								</div>
								</div><!--/header-middle-->

								<div class="header-bottom"><!--header-bottom-->
								<div class="container">
								<div class="row">
								<div class="col-sm-9">
								<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
							<span class="sr-only">Toggle navigation</span>
									<span class="icon-bar"></span>
											<span class="icon-bar"></span>
											<span class="icon-bar"></span>
											</button>
						</div>
						<div class="mainmenu pull-left">
						<ul class="nav navbar-nav collapse navbar-collapse">
								<li><a href="index.php">Home</a></li>
								

								</ul>
								</div>
								</div>
												</div>
				</div>
				</div><!--/header-bottom-->
				</header><!--/header-->

					
	<section>
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<div class="left-sidebar">
						<h2>Category</h2>
						<div class="panel-group category-products" id="accordian"><!--category-productsr-->
								
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="./index.php">products</a></h4>
								</div>
							</div>


                                                        <div class="panel panel-default">
                                                                <div class="panel-heading">
                                                                        <h4 class="panel-title">
                                                                                <a data-toggle="collapse" data-parent="#accordian" href="#mens1">
                                                                                        <span class="badge pull-right"><i class="fa fa-plus"></i></span>
                                                                                        Top 상의
                                                                                </a>
                                                                        </h4>
                                                                </div>
                                                                <div id="mens1" class="panel-collapse collapse">
                                                                        <div class="panel-body">
                                                                                <ul>
                                                                                        <li><a href="#">T-Shirts 티셔츠</a></li>
                                                                                        <li><a href="#">Long Sleeve 긴팔티</a></li>
											<li><a href="#">Dress Shirt/Blouse 셔츠/블라우스</a></li>
											<li><a href="#">Knit 니트</a></li>
											<li><a href="#">Sweatshirts 맨투맨</a></li>
											<li><a href="#">Hoodie 후드</a></li>
                                                                                </ul>
                                                                        </div>
                                                                </div>
                                                        </div>


                                                        <div class="panel panel-default">
                                                                <div class="panel-heading">
                                                                        <h4 class="panel-title">
                                                                                <a data-toggle="collapse" data-parent="#accordian" href="#mens2">
                                                                                        <span class="badge pull-right"><i class="fa fa-plus"></i></span>
                                                                                        Outer 아우터
                                                                                </a>
                                                                        </h4>
                                                                </div>
                                                                <div id="mens2" class="panel-collapse collapse">
                                                                        <div class="panel-body">
                                                                                <ul>
                                                                                        <li><a href="#">Cardigan/Sweater 가디건/스웨터</a></li>
                                                                                        <li><a href="#">Jacket 재킷</a></li>
											<li><a href="#">Blazer 블레이져</a></li>
											<li><a href="#">Jumper 점퍼</a></li>
											<li><a href="#">Coat 코드</a></li>
											<li><a href="#">Parka/Anorak 파카/패딩</a></li>
                                                                                </ul>
                                                                        </div>
                                                                </div>
                                                        </div>


                                                        <div class="panel panel-default">
                                                                <div class="panel-heading">
                                                                        <h4 class="panel-title">
                                                                                <a data-toggle="collapse" data-parent="#accordian" href="#mens3">
                                                                                        <span class="badge pull-right"><i class="fa fa-plus"></i></span>
                                                                                        Pants 바지
                                                                                </a>
                                                                        </h4>
                                                                </div>
                                                                <div id="mens3" class="panel-collapse collapse">
                                                                        <div class="panel-body">
                                                                                <ul>
                                                                                        <li><a href="#">Shorts 반바지</a></li>
                                                                                        <li><a href="#">Denim Pants 데님 바지</a></li>
											<li><a href="#">Cotton Pants 코튼 바지</a></li>
											<li><a href="#">Trousers 슈트 바지/슬렉스</a></li>
											<li><a href="#">Sweat Pants/Jogger Pants 트레이닝/조거 팬츠</a></li>
                                                                                </ul>
                                                                        </div>
                                                                </div>
                                                        </div>


                                                        <div class="panel panel-default">
                                                                <div class="panel-heading">
                                                                        <h4 class="panel-title">
                                                                                <a data-toggle="collapse" data-parent="#accordian" href="#mens4">
                                                                                        <span class="badge pull-right"><i class="fa fa-plus"></i></span>
                                                                                        Accessory 액세서리
                                                                                </a>
                                                                        </h4>
                                                                </div>
                                                                <div id="mens4" class="panel-collapse collapse">
                                                                        <div class="panel-body">
                                                                                <ul>
                                                                                        <li><a href="#">Headwear 모자</a></li>
                                                                                        <li><a href="#">Shoes 신발</a></li>
											<li><a href="#">Socks/Legwear 양말/레그웨어</a></li>
                                                                                </ul>
                                                                        </div>
                                                                </div>
                                                        </div>
						</div><!--/category-products-->
					
						
						
					
					</div>
				</div>
				
			
				<?php 
				$sql = "select * from shop_data";
				$result = mysqli_query($con, $sql);
				?>
				
				<div class="col-sm-9 padding-right">
					<div class="features_items"> <!-- 제품 목록-->
						<h2 class="title text-center">Features Items</h2>
						<?php while ($row = mysqli_fetch_array($result)){?>
						<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
										<div class="productinfo text-center">
											<img src="<?=$row['img']?>" alt="" / style="width: 200px; height: 200px;">
											<h2></h2>
											<p><?=$row['name']?></p>
											<p><?=$row['memo']?></p>
											<a href="./product-details.php?no=<?=$row['no']?>" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>상품 상세보기</a>
										</div>
										<div class="product-overlay">
											<div class="overlay-content">
												<h2>&#8361; <?=number_format($row['price'])?></h2>
												<p><?=$row['memo']?></p>
												<a href="./product-details.php?no=<?=$row['no']?>" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>상품상세보기</a>
											</div>
										</div>
								</div>
								
							</div>
						</div>
						<?php }; ?>
						
					</div><!--features_items-->
					
				</div>
			</div>
		</div>
	</section>
								
					<br><br><br><br>
	

</body>
</html>
