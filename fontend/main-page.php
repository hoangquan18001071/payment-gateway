<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Shopee</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
	<link rel="stylesheet" href="assets/css/base.css">
	<link rel="stylesheet" href="assets/css/main.css">
	<link rel="stylesheet" href="assets/fonts/fontawesome/css/all.min.css">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">

</head>
<body>  
	<div class="app">
		<!-- header -->
		<header class="header">
			<div class="grid wide">

				<!-- header navbar -->
				<nav class="header__navbar">

					<!-- header navbar left -->
					<ul class="header__navbar-list">
						<li class="header__navbar-item header__navbar-item-has-qr header__navbar-item--separate">
							Vào cửa hàng trên ứng dụng Shop
							<div class="header__qr">
								<img src="assets/img/qrcode.png" alt="QR code" class="header__qr-img">
								<div class="header__qr-apps">
									<a class="header__qr-link">
										<img src="assets/img/ch_play.png" alt="CH Play" class="header__qr-download-img">
									</a>
									<a class="header__qr-link">
										<img src="assets/img/apstore.png" alt="Apstore" class="header__qr-download-img">
									</a>
								</div>
							</div>
						</li>
						<li class="header__navbar-item">
							<span class="header__navbar-item-no-pointer">Kết nối</span>
							<a href="#" class="header__navbar-icon-link">
								<i class="header__navbar-icon fab fa-facebook"></i>
							</a>
							<a href="#" class="header__navbar-icon-link">
								<i class="header__navbar-icon fab fa-instagram"></i>
							</a>
						</li>
					</ul>
					<!--rnd header navbar left -->

					<!-- header navbar right -->
					<ul class="header__navbar-list">
						<li class="header__navbar-item header__navbar-item-has-notity">
							<a href="#" class="header__navbar-item-link">
								<i class="header__navbar-icon far fa-bell"></i>
								Thông báo
							</a>
							<div class="header__notify">
								<header class="header__notify-header">
									<h3>Thông báo mới nhận</h3>
								</header>
								<ul class="header__notify-list">
									<li class="header__notify-item header__notify-item-viewed">
										<a href="#" class="header__notify-link">
											<img src="assets/img/prd_img_3.jpg" alt="" class="header__notify-img">
											<div class="header__notify-info">
												<div class="header__notify-name">4 ký do bạn phải sử dụng kem chống nắng thường xuyên</div>
												<div class="header__notify-descrition">Nhiều người vẫn cho rằng kem chống nắng chỉ sử dụng khi có ánh nắng mặt trời, còn khi thời tiết lạnh, râm</div>
											</div>
										</a>
									</li>
									<li class="header__notify-item">
										<a href="#" class="header__notify-link">
											<img src="assets/img/prd_img_2.jpg" alt="" class="header__notify-img">
											<div class="header__notify-info">
												<div class="header__notify-name">4 ký do bạn phải sử dụng kem chống nắng thường xuyên</div>
												<div class="header__notify-descrition">Nhiều người vẫn cho rằng kem chống nắng chỉ sử dụng khi có ánh nắng mặt trời, còn khi thời tiết lạnh, râm</div>
											</div>
										</a>
									</li>
									<li class="header__notify-item header__notify-item-viewed">
										<a href="#" class="header__notify-link">
											<img src="assets/img/prd_img_4.jpg" alt="" class="header__notify-img">
											<div class="header__notify-info">
												<div class="header__notify-name">4 ký do bạn phải sử dụng kem chống nắng thường xuyên</div>
												<div class="header__notify-descrition">Nhiều người vẫn cho rằng kem chống nắng chỉ sử dụng khi có ánh nắng mặt trời, còn khi thời tiết lạnh, râm</div>
											</div>
										</a>
									</li>
									<li class="header__notify-item">
										<a href="#" class="header__notify-link">
											<img src="assets/img/prd_img_8.jpg" alt="" class="header__notify-img">
											<div class="header__notify-info">
												<div class="header__notify-name">4 ký do bạn phải sử dụng kem chống nắng thường xuyên</div>
												<div class="header__notify-descrition">Nhiều người vẫn cho rằng kem chống nắng chỉ sử dụng khi có ánh nắng mặt trời, còn khi thời tiết lạnh, râm</div>
											</div>
										</a>
									</li>
								</ul>
								<div class="header__notify-footer">
									<a href="#" class="header__notity-footer-link">Xem tất cả</a>
								</div>
							</div>
						</li>
						<li class="header__navbar-item">
							<a href="#" class="header__navbar-item-link">
								<i class="header__navbar-icon far fa-question-circle"></i>
								Trợ giúp
							</a>
						</li>	

						<!-- <li class="header__navbar-item header__navbar-item--strong header__navbar-item--separate">Đăng ký</li>
							<li class="header__navbar-item header__navbar-item--strong">Đăng nhập</li> -->

							<li class="header__navbar-item header__navbar-user">
								<img src="assets/img/avata.jpg" class="header__navbar-user-img">
								<span class="header__navbar-user-name">Vĩnh Tiến</span>

								<ul class="header__navbar-user-menu">
									<li class="header__navbar-user-item">
										<a href="#">Tài khoản của tôi</a>
									</li>
									<li class="header__navbar-user-item">
										<a href="#">Địa chỉ của tôi</a>
									</li>
									<li class="header__navbar-user-item">
										<a href="#">Đơn mua</a>
									</li>
									<li class="header__navbar-user-item header__navbar-user-item--separate">
										<a href="#">Đăng xuất</a>
									</li>
								</ul>
							</li>		
						</ul>
						<!--end header navbar right -->
					</nav>

					<!-- end header-navbar -->


					<!-- header-search -->
					<div class="header-with-search">

						<!-- logo -->
						<div class="header__logo">
							<a href="#" class="header__logo-link">
								<img class="header__logo-img" src="" alt="">
							</a>
						</div>

						<!-- end logo -->

						<!-- search -->
						<div class="header__search hide-on-mobile">
							<div class="header__search-input-wrap">
								<input type="text" class="header__search-input" placeholder="Tìm kiếm sản phẩm tại đây">

								<div class="header__search-history">
									<h3 class="header__search-history-heading">Lịch sử tìm kiếm</h3>
									<ul class="header__search-history-list">
										<li class="header__search-history-item">
											<a href="#">Mũ bảo hiểm</a>
										</li>
										<li class="header__search-history-item">
											<a href="#">Gang tay phượt</a>
										</li>
									</ul>
								</div>
							</div>
							<div class="header__search-select">
								<span class="header__search-select-label">
									Trong shop
								</span>
								<i class="fas fa-chevron-down header__search-select-icon"></i>

								<ul class="header__search-option">
									<li class="header__search-option-item header__search-option-item--active">
										<span>Trong shop</span>
										<i class="fas fa-check "></i>
									</li>

									<li class="header__search-option-item">
										<span>Ngoài shop</span>
										<i class="fas fa-check "></i>
									</li>
								</ul>
							</div>

							<button class="header__search-btn">
								<i class="fas fa-search header__search-btn-icon"></i>
							</button>

						</div>
						<!--end search -->

						<!-- cart -->
						<div class="header__cart">
							<div class="header__cart-wrap">
								<span class="header__cart-notice">
									3
								</span>
								<i class="fas fa-shopping-cart header__cart-icon"></i>
								<div class="header__cart-list">
									<!-- no cart: header__cart-list--no-cart -->
									<img src="assets/img/no_cart.png" alt="" class="header__cart-no-cart-img">
									<p class="header__cart-no-cart-msg">
										Chưa có sản phẩm
									</p>

									<h4 class="header__cart-heading">Sản phẩn đã thêm</h4>
									<ul class="header__cart-list-item">
										<li class="header__cart-item">
											<img src="assets/img/prd_img_1.jpg" class="header__cart-img">
											<div class="header__cart-item-info">
												<div class="header__cart-item-head">
													<h5 class="header__cart-item-name">Mũ bảo hiểm fullface yohe</h5>
													<div class="header__cart-item-price-wrap">
														<span class="header__cart-item-price">2.500.000</span>
														<span class="header__cart-item-multiply">x</span>
														<span class="header__cart-item-qnt">3</span>
													</div>
												</div>
												<div class="header__cart-item-body">
													<span class="header__cart-item-description">
														Phân loại: <span class="header__cart-item-classify">Mũ bảo hiểm</span>
													</span>
													<span class="header__cart-item-remove">Xóa</span>
												</div>
											</div>
										</li>
										<li class="header__cart-item">
											<img src="assets/img/prd_img_7.jpg" class="header__cart-img">
											<div class="header__cart-item-info">
												<div class="header__cart-item-head">
													<h5 class="header__cart-item-name">Găng tay cho những người đi phượt đường xa
													</h5>
													<div class="header__cart-item-price-wrap">
														<span class="header__cart-item-price">2.000.000</span>
														<span class="header__cart-item-multiply">x</span>
														<span class="header__cart-item-qnt">2</span>
													</div>
												</div>
												<div class="header__cart-item-body">
													<span class="header__cart-item-description">
														Phân loại: <span class="header__cart-item-classify">Găng tay</span>
													</span>
													<span class="header__cart-item-remove">Xóa</span>
												</div>
											</div>
										</li>
										<li class="header__cart-item">
											<img src="assets/img/prd_img_4.jpg" class="header__cart-img">
											<div class="header__cart-item-info">
												<div class="header__cart-item-head">
													<h5 class="header__cart-item-name">Áo giáp bảo hộ cho nữ</h5>
													<div class="header__cart-item-price-wrap">
														<span class="header__cart-item-price">1.200.000</span>
														<span class="header__cart-item-multiply">x</span>
														<span class="header__cart-item-qnt">1</span>
													</div>
												</div>
												<div class="header__cart-item-body">
													<span class="header__cart-item-description">
														Phân loại: <span class="header__cart-item-classify">Giáp bảo hộ</span>
													</span>
													<span class="header__cart-item-remove">Xóa</span>
												</div>
											</div>
										</li>
									</ul>
									<button class="btn btn--primary header__cart-view-cart">
										Xem giỏ hàng
									</button>
								</div>
							</div>
						</div>
						<!--end cart -->
					</div>

					<!--end header-search -->
				</div>
			<!-- <ul class="header__sort-bar grid wide">
				<li class="header__sort-item">
					<a href="#" class="header__sort-link">Liên quan</a>
				</li>

				<li class="header__sort-item header__sort-item--active">
					<a href="#" class="header__sort-link">Mới nhất</a>
				</li>

				<li class="header__sort-item">
					<a href="#" class="header__sort-link">Bán chạy</a>
				</li>

				<li class="header__sort-item">
					<a href="#" class="header__sort-link">Giá</a>
				</li>

			</ul> -->
		</header>
		<!--end header -->

		<!-- container -->
		<div class="app__container">
			<div class="grid wide">
				<div class="grid__row app__content">

					<!-- aside -->
					<div class="grid__column-2">
						<nav class="category">
							<h3 class="category__heading">
								<i class="fas fa-list-ul category__heading-icon"></i>
							Danh mục</h3>
							<ul class="category-list">
								<li class="category-item catgory-item--active">
									<a href="#" class="category-item__link">Gang tay phượt</a>
								</li>
								<li class="category-item">
									<a href="#" class="category-item__link">Mũ bảo hiểm</a>
								</li>
								<li class="category-item">
									<a href="#" class="category-item__link">Giày leo núi</a>
								</li>
								<li class="category-item">
									<a href="#" class="category-item__link">Giáp bảo hộ</a>
								</li>
								<li class="category-item">
									<a href="#" class="category-item__link">Túi đeo chéo</a>
								</li>
								<li class="category-item">
									<a href="#" class="category-item__link">Khăn chống nắng</a>
								</li>
								<li class="category-item">
									<a href="#" class="category-item__link">Kính đi phượt </a>
								</li>
								<li class="category-item">
									<a href="#" class="category-item__link">Áo đi phượt</a>
								</li>
								<li class="category-item">
									<a href="#" class="category-item__link">Balo đi phượt</a>
								</li>
							</ul>
						</nav>
					</div>
					<!-- end aside -->

					<!-- article -->
					<div class="grid__column-10">

						<!-- home filter -->
						<div class="home-filter hide-on-mobile-tablet">
							<span class="home-filter__label">
								Sắp xếp theo
							</span>
							<button class="btn home-filter__btn">Phổ biến</button>
							<button class="btn btn--primary home-filter__btn">Mới nhất</button>
							<button class="btn home-filter__btn">Bán chạy</button>

							<div class="select-input">
								<span class="select-input__label">Giá</span>
								<i class="fas fa-chevron-down select-input__icon"></i>
								<ul class="select-input__list">
									<li class="select-input__item">
										<a href="#" class="select-input__link">Giá: Thấp đến cao</a>
									</li>
									<li class="select-input__item">
										<a href="#" class="select-input__link">Giá: Cao đến thấp</a>
									</li>

								</ul>
							</div>

							<div class="home-filter__page">
								<span class="home-filter__page-num">
									<span class="home-filter__page-current">1</span>/
									<span class="home-filter__page-total">14</span>
								</span>
								<div class="home-filter__page-control">
									<a href="#" class="home-filter__page-btn home-filter__page-btn--disable">
										<i class="fas fa-angle-left home-filter__page-icon"></i>
									</a>
									<a href="#" class="home-filter__page-btn">
										<i class="fas fa-angle-right home-filter__page-icon"></i>
									</a>
								</div>
							</div>
						</div>

						<!--end home filter -->

						<!-- product -->
						<div class="home-product">
							<div class="grid__row">
								<!-- product item -->
								<div class="grid__column-2-4">
									<a class="home-product-item" href="#">
										<div class="home-product-item-img" style="background-image: url(assets/img/prd_img_3.jpg)">
										</div>
										<h4 class="home-product-item-name"> Mũ 3/4 YOHE 878 2 Kính Thời Thượng</h4>
										<div class="home-product-item__price">
											<span class="home-product-item__price-old">1.400.000đ</span>
											<span class="home-product-item__price-current">1.300.000₫</span>
										</div>
										<div class="home-product-item__action">
											<div class="header__cart" style="width: 28px">
									<div class="header__cart-wrap">
										<button type="button" style="background-color: white; border: white"><i class="fas fa-shopping-cart header__cart-icon" style="color: #e14818; "></i></button>
										<div class="header__cart-list">
											<!-- no cart: header__cart-list--no-cart -->
											<img src="assets/img/no_cart.png" alt="" class="header__cart-no-cart-img">
										</div>
											</div>
										</div>
											<div class="home-product-item__rating">
												<i class="fas fa-star home-product-item__star--gold"></i>
												<i class="fas fa-star home-product-item__star--gold"></i>
												<i class="fas fa-star home-product-item__star--gold"></i>
												<i class="fas fa-star home-product-item__star--gold"></i>
												<i class="fas fa-star home-product-item__star--gold"></i>
											</div>
											<span class="home-product-item__sold">22 đã bán</span>
										</div>
										<div class="home-product-item__origin">
											<span class="home-product-item__brand"></span>
											<span class="home-product-item__origin-name">Thái Lan</span>
										</div>
										<div class="home-product-item__favourite">
											<i class="fas fa-check"></i>
											<span>Yêu thích</span>
										</div>
										<div class="home-product-item__sale-off">
											<span class="home-product-item__sale-off-percent">10%</span>
											<span class="home-product-item__sale-off-label">GIẢM</span>
										</div>
									</a>
								</div>
								<div class="grid__column-2-4">
									<a class="home-product-item" href="#">
										<div class="home-product-item-img" style="background-image: url(assets/img/prd_img_3.jpg)">
										</div>
										<h4 class="home-product-item-name"> Mũ 3/4 YOHE 878 2 Kính Thời Thượng</h4>
										<div class="home-product-item__price">
											<span class="home-product-item__price-old">1.400.000đ</span>
											<span class="home-product-item__price-current">1.300.000₫</span>
										</div>
										<div class="home-product-item__action">
											<div class="header__cart" style="width: 28px">
									<div class="header__cart-wrap">
										<button type="button" style="background-color: white; border: white"><i class="fas fa-shopping-cart header__cart-icon" style="color: #e14818; "></i></button>
										<div class="header__cart-list">
											<!-- no cart: header__cart-list--no-cart -->
											<img src="assets/img/no_cart.png" alt="" class="header__cart-no-cart-img">
										</div>
											</div>
										</div>
											<div class="home-product-item__rating">
												<i class="fas fa-star home-product-item__star--gold"></i>
												<i class="fas fa-star home-product-item__star--gold"></i>
												<i class="fas fa-star home-product-item__star--gold"></i>
												<i class="fas fa-star home-product-item__star--gold"></i>
												<i class="fas fa-star home-product-item__star--gold"></i>
											</div>
											<span class="home-product-item__sold">22 đã bán</span>
										</div>
										<div class="home-product-item__origin">
											<span class="home-product-item__brand"></span>
											<span class="home-product-item__origin-name">Thái Lan</span>
										</div>
										<div class="home-product-item__favourite">
											<i class="fas fa-check"></i>
											<span>Yêu thích</span>
										</div>
										<div class="home-product-item__sale-off">
											<span class="home-product-item__sale-off-percent">10%</span>
											<span class="home-product-item__sale-off-label">GIẢM</span>
										</div>
									</a>
								</div>
								<div class="grid__column-2-4">
									<a class="home-product-item" href="#">
										<div class="home-product-item-img" style="background-image: url(assets/img/prd_img_3.jpg)">
										</div>
										<h4 class="home-product-item-name"> Mũ 3/4 YOHE 878 2 Kính Thời Thượng</h4>
										<div class="home-product-item__price">
											<span class="home-product-item__price-old">1.400.000đ</span>
											<span class="home-product-item__price-current">1.300.000₫</span>
										</div>
										<div class="home-product-item__action">
											<div class="header__cart" style="width: 28px">
									<div class="header__cart-wrap">
										<button type="button" style="background-color: white; border: white"><i class="fas fa-shopping-cart header__cart-icon" style="color: #e14818; "></i></button>
										<div class="header__cart-list">
											<!-- no cart: header__cart-list--no-cart -->
											<img src="assets/img/no_cart.png" alt="" class="header__cart-no-cart-img">
										</div>
											</div>
										</div>
											<div class="home-product-item__rating">
												<i class="fas fa-star home-product-item__star--gold"></i>
												<i class="fas fa-star home-product-item__star--gold"></i>
												<i class="fas fa-star home-product-item__star--gold"></i>
												<i class="fas fa-star home-product-item__star--gold"></i>
												<i class="fas fa-star home-product-item__star--gold"></i>
											</div>
											<span class="home-product-item__sold">22 đã bán</span>
										</div>
										<div class="home-product-item__origin">
											<span class="home-product-item__brand"></span>
											<span class="home-product-item__origin-name">Thái Lan</span>
										</div>
										<div class="home-product-item__favourite">
											<i class="fas fa-check"></i>
											<span>Yêu thích</span>
										</div>
										<div class="home-product-item__sale-off">
											<span class="home-product-item__sale-off-percent">10%</span>
											<span class="home-product-item__sale-off-label">GIẢM</span>
										</div>
									</a>
								</div>
								<div class="grid__column-2-4">
									<a class="home-product-item" href="#">
										<div class="home-product-item-img" style="background-image: url(assets/img/prd_img_3.jpg)">
										</div>
										<h4 class="home-product-item-name"> Mũ 3/4 YOHE 878 2 Kính Thời Thượng</h4>
										<div class="home-product-item__price">
											<span class="home-product-item__price-old">1.400.000đ</span>
											<span class="home-product-item__price-current">1.300.000₫</span>
										</div>
										<div class="home-product-item__action">
											<div class="header__cart" style="width: 28px">
									<div class="header__cart-wrap">
										<button type="button" style="background-color: white; border: white"><i class="fas fa-shopping-cart header__cart-icon" style="color: #e14818; "></i></button>
										<div class="header__cart-list">
											<!-- no cart: header__cart-list--no-cart -->
											<img src="assets/img/no_cart.png" alt="" class="header__cart-no-cart-img">
										</div>
											</div>
										</div>
											<div class="home-product-item__rating">
												<i class="fas fa-star home-product-item__star--gold"></i>
												<i class="fas fa-star home-product-item__star--gold"></i>
												<i class="fas fa-star home-product-item__star--gold"></i>
												<i class="fas fa-star home-product-item__star--gold"></i>
												<i class="fas fa-star home-product-item__star--gold"></i>
											</div>
											<span class="home-product-item__sold">22 đã bán</span>
										</div>
										<div class="home-product-item__origin">
											<span class="home-product-item__brand"></span>
											<span class="home-product-item__origin-name">Thái Lan</span>
										</div>
										<div class="home-product-item__favourite">
											<i class="fas fa-check"></i>
											<span>Yêu thích</span>
										</div>
										<div class="home-product-item__sale-off">
											<span class="home-product-item__sale-off-percent">10%</span>
											<span class="home-product-item__sale-off-label">GIẢM</span>
										</div>
									</a>
								</div>
								<div class="grid__column-2-4">
									<a class="home-product-item" href="#">
										<div class="home-product-item-img" style="background-image: url(assets/img/prd_img_3.jpg)">
										</div>
										<h4 class="home-product-item-name"> Mũ 3/4 YOHE 878 2 Kính Thời Thượng</h4>
										<div class="home-product-item__price">
											<span class="home-product-item__price-old">1.400.000đ</span>
											<span class="home-product-item__price-current">1.300.000₫</span>
										</div>
										<div class="home-product-item__action">
											<div class="header__cart" style="width: 28px">
									<div class="header__cart-wrap">
										<button type="button" style="background-color: white; border: white"><i class="fas fa-shopping-cart header__cart-icon" style="color: #e14818; "></i></button>
										<div class="header__cart-list">
											<!-- no cart: header__cart-list--no-cart -->
											<img src="assets/img/no_cart.png" alt="" class="header__cart-no-cart-img">
										</div>
											</div>
										</div>
											<div class="home-product-item__rating">
												<i class="fas fa-star home-product-item__star--gold"></i>
												<i class="fas fa-star home-product-item__star--gold"></i>
												<i class="fas fa-star home-product-item__star--gold"></i>
												<i class="fas fa-star home-product-item__star--gold"></i>
												<i class="fas fa-star home-product-item__star--gold"></i>
											</div>
											<span class="home-product-item__sold">22 đã bán</span>
										</div>
										<div class="home-product-item__origin">
											<span class="home-product-item__brand"></span>
											<span class="home-product-item__origin-name">Thái Lan</span>
										</div>
										<div class="home-product-item__favourite">
											<i class="fas fa-check"></i>
											<span>Yêu thích</span>
										</div>
										<div class="home-product-item__sale-off">
											<span class="home-product-item__sale-off-percent">10%</span>
											<span class="home-product-item__sale-off-label">GIẢM</span>
										</div>
									</a>
								</div>
								<div class="grid__column-2-4">
									<a class="home-product-item" href="#">
										<div class="home-product-item-img" style="background-image: url(assets/img/prd_img_3.jpg)">
										</div>
										<h4 class="home-product-item-name"> Mũ 3/4 YOHE 878 2 Kính Thời Thượng</h4>
										<div class="home-product-item__price">
											<span class="home-product-item__price-old">1.400.000đ</span>
											<span class="home-product-item__price-current">1.300.000₫</span>
										</div>
										<div class="home-product-item__action">
											<div class="header__cart" style="width: 28px">
									<div class="header__cart-wrap">
										<button type="button" style="background-color: white; border: white"><i class="fas fa-shopping-cart header__cart-icon" style="color: #e14818; "></i></button>
										<div class="header__cart-list">
											<!-- no cart: header__cart-list--no-cart -->
											<img src="assets/img/no_cart.png" alt="" class="header__cart-no-cart-img">
										</div>
											</div>
										</div>
											<div class="home-product-item__rating">
												<i class="fas fa-star home-product-item__star--gold"></i>
												<i class="fas fa-star home-product-item__star--gold"></i>
												<i class="fas fa-star home-product-item__star--gold"></i>
												<i class="fas fa-star home-product-item__star--gold"></i>
												<i class="fas fa-star home-product-item__star--gold"></i>
											</div>
											<span class="home-product-item__sold">22 đã bán</span>
										</div>
										<div class="home-product-item__origin">
											<span class="home-product-item__brand"></span>
											<span class="home-product-item__origin-name">Thái Lan</span>
										</div>
										<div class="home-product-item__favourite">
											<i class="fas fa-check"></i>
											<span>Yêu thích</span>
										</div>
										<div class="home-product-item__sale-off">
											<span class="home-product-item__sale-off-percent">10%</span>
											<span class="home-product-item__sale-off-label">GIẢM</span>
										</div>
									</a>
								</div>
								<div class="grid__column-2-4">
									<a class="home-product-item" href="#">
										<div class="home-product-item-img" style="background-image: url(assets/img/prd_img_3.jpg)">
										</div>
										<h4 class="home-product-item-name"> Mũ 3/4 YOHE 878 2 Kính Thời Thượng</h4>
										<div class="home-product-item__price">
											<span class="home-product-item__price-old">1.400.000đ</span>
											<span class="home-product-item__price-current">1.300.000₫</span>
										</div>
										<div class="home-product-item__action">
											<div class="header__cart" style="width: 28px">
									<div class="header__cart-wrap">
										<button type="button" style="background-color: white; border: white"><i class="fas fa-shopping-cart header__cart-icon" style="color: #e14818; "></i></button>
										<div class="header__cart-list">
											<!-- no cart: header__cart-list--no-cart -->
											<img src="assets/img/no_cart.png" alt="" class="header__cart-no-cart-img">
										</div>
											</div>
										</div>
											<div class="home-product-item__rating">
												<i class="fas fa-star home-product-item__star--gold"></i>
												<i class="fas fa-star home-product-item__star--gold"></i>
												<i class="fas fa-star home-product-item__star--gold"></i>
												<i class="fas fa-star home-product-item__star--gold"></i>
												<i class="fas fa-star home-product-item__star--gold"></i>
											</div>
											<span class="home-product-item__sold">22 đã bán</span>
										</div>
										<div class="home-product-item__origin">
											<span class="home-product-item__brand"></span>
											<span class="home-product-item__origin-name">Thái Lan</span>
										</div>
										<div class="home-product-item__favourite">
											<i class="fas fa-check"></i>
											<span>Yêu thích</span>
										</div>
										<div class="home-product-item__sale-off">
											<span class="home-product-item__sale-off-percent">10%</span>
											<span class="home-product-item__sale-off-label">GIẢM</span>
										</div>
									</a>
								</div>
								<div class="grid__column-2-4">
									<a class="home-product-item" href="#">
										<div class="home-product-item-img" style="background-image: url(assets/img/prd_img_3.jpg)">
										</div>
										<h4 class="home-product-item-name"> Mũ 3/4 YOHE 878 2 Kính Thời Thượng</h4>
										<div class="home-product-item__price">
											<span class="home-product-item__price-old">1.400.000đ</span>
											<span class="home-product-item__price-current">1.300.000₫</span>
										</div>
										<div class="home-product-item__action">
											<div class="header__cart" style="width: 28px">
									<div class="header__cart-wrap">
										<button type="button" style="background-color: white; border: white"><i class="fas fa-shopping-cart header__cart-icon" style="color: #e14818; "></i></button>
										<div class="header__cart-list">
											<!-- no cart: header__cart-list--no-cart -->
											<img src="assets/img/no_cart.png" alt="" class="header__cart-no-cart-img">
										</div>
											</div>
										</div>
											<div class="home-product-item__rating">
												<i class="fas fa-star home-product-item__star--gold"></i>
												<i class="fas fa-star home-product-item__star--gold"></i>
												<i class="fas fa-star home-product-item__star--gold"></i>
												<i class="fas fa-star home-product-item__star--gold"></i>
												<i class="fas fa-star home-product-item__star--gold"></i>
											</div>
											<span class="home-product-item__sold">22 đã bán</span>
										</div>
										<div class="home-product-item__origin">
											<span class="home-product-item__brand"></span>
											<span class="home-product-item__origin-name">Thái Lan</span>
										</div>
										<div class="home-product-item__favourite">
											<i class="fas fa-check"></i>
											<span>Yêu thích</span>
										</div>
										<div class="home-product-item__sale-off">
											<span class="home-product-item__sale-off-percent">10%</span>
											<span class="home-product-item__sale-off-label">GIẢM</span>
										</div>
									</a>
								</div>
								<div class="grid__column-2-4">
									<a class="home-product-item" href="#">
										<div class="home-product-item-img" style="background-image: url(assets/img/prd_img_3.jpg)">
										</div>
										<h4 class="home-product-item-name"> Mũ 3/4 YOHE 878 2 Kính Thời Thượng</h4>
										<div class="home-product-item__price">
											<span class="home-product-item__price-old">1.400.000đ</span>
											<span class="home-product-item__price-current">1.300.000₫</span>
										</div>
										<div class="home-product-item__action">
											<div class="header__cart" style="width: 28px">
									<div class="header__cart-wrap">
										<button type="button" style="background-color: white; border: white"><i class="fas fa-shopping-cart header__cart-icon" style="color: #e14818; "></i></button>
										<div class="header__cart-list">
											<!-- no cart: header__cart-list--no-cart -->
											<img src="assets/img/no_cart.png" alt="" class="header__cart-no-cart-img">
										</div>
											</div>
										</div>
											<div class="home-product-item__rating">
												<i class="fas fa-star home-product-item__star--gold"></i>
												<i class="fas fa-star home-product-item__star--gold"></i>
												<i class="fas fa-star home-product-item__star--gold"></i>
												<i class="fas fa-star home-product-item__star--gold"></i>
												<i class="fas fa-star home-product-item__star--gold"></i>
											</div>
											<span class="home-product-item__sold">22 đã bán</span>
										</div>
										<div class="home-product-item__origin">
											<span class="home-product-item__brand"></span>
											<span class="home-product-item__origin-name">Thái Lan</span>
										</div>
										<div class="home-product-item__favourite">
											<i class="fas fa-check"></i>
											<span>Yêu thích</span>
										</div>
										<div class="home-product-item__sale-off">
											<span class="home-product-item__sale-off-percent">10%</span>
											<span class="home-product-item__sale-off-label">GIẢM</span>
										</div>
									</a>
								</div>
								<div class="grid__column-2-4">
									<a class="home-product-item" href="#">
										<div class="home-product-item-img" style="background-image: url(assets/img/prd_img_3.jpg)">
										</div>
										<h4 class="home-product-item-name"> Mũ 3/4 YOHE 878 2 Kính Thời Thượng</h4>
										<div class="home-product-item__price">
											<span class="home-product-item__price-old">1.400.000đ</span>
											<span class="home-product-item__price-current">1.300.000₫</span>
										</div>
										<div class="home-product-item__action">
											<div class="header__cart" style="width: 28px">
									<div class="header__cart-wrap">
										<button type="button" style="background-color: white; border: white"><i class="fas fa-shopping-cart header__cart-icon" style="color: #e14818; "></i></button>
										<div class="header__cart-list">
											<!-- no cart: header__cart-list--no-cart -->
											<img src="assets/img/no_cart.png" alt="" class="header__cart-no-cart-img">
										</div>
											</div>
										</div>
											<div class="home-product-item__rating">
												<i class="fas fa-star home-product-item__star--gold"></i>
												<i class="fas fa-star home-product-item__star--gold"></i>
												<i class="fas fa-star home-product-item__star--gold"></i>
												<i class="fas fa-star home-product-item__star--gold"></i>
												<i class="fas fa-star home-product-item__star--gold"></i>
											</div>
											<span class="home-product-item__sold">22 đã bán</span>
										</div>
										<div class="home-product-item__origin">
											<span class="home-product-item__brand"></span>
											<span class="home-product-item__origin-name">Thái Lan</span>
										</div>
										<div class="home-product-item__favourite">
											<i class="fas fa-check"></i>
											<span>Yêu thích</span>
										</div>
										<div class="home-product-item__sale-off">
											<span class="home-product-item__sale-off-percent">10%</span>
											<span class="home-product-item__sale-off-label">GIẢM</span>
										</div>
									</a>
								</div>
								<div class="grid__column-2-4">
									<a class="home-product-item" href="#">
										<div class="home-product-item-img" style="background-image: url(assets/img/prd_img_3.jpg)">
										</div>
										<h4 class="home-product-item-name"> Mũ 3/4 YOHE 878 2 Kính Thời Thượng</h4>
										<div class="home-product-item__price">
											<span class="home-product-item__price-old">1.400.000đ</span>
											<span class="home-product-item__price-current">1.300.000₫</span>
										</div>
										<div class="home-product-item__action">
											<div class="header__cart" style="width: 28px">
									<div class="header__cart-wrap">
										<button type="button" style="background-color: white; border: white"><i class="fas fa-shopping-cart header__cart-icon" style="color: #e14818; "></i></button>
										<div class="header__cart-list">
											<!-- no cart: header__cart-list--no-cart -->
											<img src="assets/img/no_cart.png" alt="" class="header__cart-no-cart-img">
										</div>
											</div>
										</div>
											<div class="home-product-item__rating">
												<i class="fas fa-star home-product-item__star--gold"></i>
												<i class="fas fa-star home-product-item__star--gold"></i>
												<i class="fas fa-star home-product-item__star--gold"></i>
												<i class="fas fa-star home-product-item__star--gold"></i>
												<i class="fas fa-star home-product-item__star--gold"></i>
											</div>
											<span class="home-product-item__sold">22 đã bán</span>
										</div>
										<div class="home-product-item__origin">
											<span class="home-product-item__brand"></span>
											<span class="home-product-item__origin-name">Thái Lan</span>
										</div>
										<div class="home-product-item__favourite">
											<i class="fas fa-check"></i>
											<span>Yêu thích</span>
										</div>
										<div class="home-product-item__sale-off">
											<span class="home-product-item__sale-off-percent">10%</span>
											<span class="home-product-item__sale-off-label">GIẢM</span>
										</div>
									</a>
								</div>
								<div class="grid__column-2-4">
									<a class="home-product-item" href="#">
										<div class="home-product-item-img" style="background-image: url(assets/img/prd_img_3.jpg)">
										</div>
										<h4 class="home-product-item-name"> Mũ 3/4 YOHE 878 2 Kính Thời Thượng</h4>
										<div class="home-product-item__price">
											<span class="home-product-item__price-old">1.400.000đ</span>
											<span class="home-product-item__price-current">1.300.000₫</span>
										</div>
										<div class="home-product-item__action">
											<div class="header__cart" style="width: 28px">
									<div class="header__cart-wrap">
										<button type="button" style="background-color: white; border: white"><i class="fas fa-shopping-cart header__cart-icon" style="color: #e14818; "></i></button>
										<div class="header__cart-list">
											<!-- no cart: header__cart-list--no-cart -->
											<img src="assets/img/no_cart.png" alt="" class="header__cart-no-cart-img">
										</div>
											</div>
										</div>
											<div class="home-product-item__rating">
												<i class="fas fa-star home-product-item__star--gold"></i>
												<i class="fas fa-star home-product-item__star--gold"></i>
												<i class="fas fa-star home-product-item__star--gold"></i>
												<i class="fas fa-star home-product-item__star--gold"></i>
												<i class="fas fa-star home-product-item__star--gold"></i>
											</div>
											<span class="home-product-item__sold">22 đã bán</span>
										</div>
										<div class="home-product-item__origin">
											<span class="home-product-item__brand"></span>
											<span class="home-product-item__origin-name">Thái Lan</span>
										</div>
										<div class="home-product-item__favourite">
											<i class="fas fa-check"></i>
											<span>Yêu thích</span>
										</div>
										<div class="home-product-item__sale-off">
											<span class="home-product-item__sale-off-percent">10%</span>
											<span class="home-product-item__sale-off-label">GIẢM</span>
										</div>
									</a>
								</div>
								<div class="grid__column-2-4">
									<a class="home-product-item" href="#">
										<div class="home-product-item-img" style="background-image: url(assets/img/prd_img_3.jpg)">
										</div>
										<h4 class="home-product-item-name"> Mũ 3/4 YOHE 878 2 Kính Thời Thượng</h4>
										<div class="home-product-item__price">
											<span class="home-product-item__price-old">1.400.000đ</span>
											<span class="home-product-item__price-current">1.300.000₫</span>
										</div>
										<div class="home-product-item__action">
											<div class="header__cart" style="width: 28px">
									<div class="header__cart-wrap">
										<button type="button" style="background-color: white; border: white"><i class="fas fa-shopping-cart header__cart-icon" style="color: #e14818; "></i></button>
										<div class="header__cart-list">
											<!-- no cart: header__cart-list--no-cart -->
											<img src="assets/img/no_cart.png" alt="" class="header__cart-no-cart-img">
										</div>
											</div>
										</div>
											<div class="home-product-item__rating">
												<i class="fas fa-star home-product-item__star--gold"></i>
												<i class="fas fa-star home-product-item__star--gold"></i>
												<i class="fas fa-star home-product-item__star--gold"></i>
												<i class="fas fa-star home-product-item__star--gold"></i>
												<i class="fas fa-star home-product-item__star--gold"></i>
											</div>
											<span class="home-product-item__sold">22 đã bán</span>
										</div>
										<div class="home-product-item__origin">
											<span class="home-product-item__brand"></span>
											<span class="home-product-item__origin-name">Thái Lan</span>
										</div>
										<div class="home-product-item__favourite">
											<i class="fas fa-check"></i>
											<span>Yêu thích</span>
										</div>
										<div class="home-product-item__sale-off">
											<span class="home-product-item__sale-off-percent">10%</span>
											<span class="home-product-item__sale-off-label">GIẢM</span>
										</div>
									</a>
								</div>
								<div class="grid__column-2-4">
									<a class="home-product-item" href="#">
										<div class="home-product-item-img" style="background-image: url(assets/img/prd_img_3.jpg)">
										</div>
										<h4 class="home-product-item-name"> Mũ 3/4 YOHE 878 2 Kính Thời Thượng</h4>
										<div class="home-product-item__price">
											<span class="home-product-item__price-old">1.400.000đ</span>
											<span class="home-product-item__price-current">1.300.000₫</span>
										</div>
										<div class="home-product-item__action">
											<div class="header__cart" style="width: 28px">
									<div class="header__cart-wrap">
										<button type="button" style="background-color: white; border: white"><i class="fas fa-shopping-cart header__cart-icon" style="color: #e14818; "></i></button>
										<div class="header__cart-list">
											<!-- no cart: header__cart-list--no-cart -->
											<img src="assets/img/no_cart.png" alt="" class="header__cart-no-cart-img">
										</div>
											</div>
										</div>
											<div class="home-product-item__rating">
												<i class="fas fa-star home-product-item__star--gold"></i>
												<i class="fas fa-star home-product-item__star--gold"></i>
												<i class="fas fa-star home-product-item__star--gold"></i>
												<i class="fas fa-star home-product-item__star--gold"></i>
												<i class="fas fa-star home-product-item__star--gold"></i>
											</div>
											<span class="home-product-item__sold">22 đã bán</span>
										</div>
										<div class="home-product-item__origin">
											<span class="home-product-item__brand"></span>
											<span class="home-product-item__origin-name">Thái Lan</span>
										</div>
										<div class="home-product-item__favourite">
											<i class="fas fa-check"></i>
											<span>Yêu thích</span>
										</div>
										<div class="home-product-item__sale-off">
											<span class="home-product-item__sale-off-percent">10%</span>
											<span class="home-product-item__sale-off-label">GIẢM</span>
										</div>
									</a>
								</div>
							</div>
						</div>
						<!--end product -->
						
						<!-- pagination -->
						<ul class="pagination home-product__pagination">
							<li class="pagination-item">
								<a href="#" class="pagination-item__link">
									<i class="pagination-item__icon fas fa-angle-left"></i>
								</a>
							</li>

							<li class="pagination-item pagination-item--active">
								<a href="#" class="pagination-item__link">1</a>
							</li>
							<li class="pagination-item">
								<a href="#" class="pagination-item__link">2</a>
							</li>
							<li class="pagination-item">
								<a href="#" class="pagination-item__link">3</a>
							</li>
							<li class="pagination-item">
								<a href="#" class="pagination-item__link">4</a>
							</li>
							<li class="pagination-item">
								<a href="#" class="pagination-item__link">5</a>
							</li>
							<li class="pagination-item">
								<a href="#" class="pagination-item__link">...</a>
							</li>
							<li class="pagination-item">
								<a href="#" class="pagination-item__link">14</a>
							</li>

							<li class="pagination-item">
								<a href="#" class="pagination-item__link">
									<i class="pagination-item__icon fas fa-angle-right"></i>
								</a>
							</li>
						</ul>
						<!--end pagination -->
					</div>
					<!--end article -->
				</div>
			</div>
		</div>
		<!--end container -->

		<!-- footer -->
		<footer class="footer">
			<div class="grid wide">
				<div class="grid__row">
					<div class="grid__column-2-4">
						<h3 class="footer__heading">Chăm sóc khách hàng</h3>
						<ul class="footer-list">
							<li class="footer-item">
								<a href="#" class="footer-item__link">Trung tâm trợ giúp</a>
							</li>
							<li class="footer-item">
								<a href="#" class="footer-item__link">C-shop Mall</a>
							</li>
							<li class="footer-item">
								<a href="#" class="footer-item__link">Hướng dẫn mua hàng</a>
							</li>
						</ul>
					</div>
					<div class="grid__column-2-4">
						<h3 class="footer__heading">Giới thiệu</h3>
						<ul class="footer-list">
							<li class="footer-item">
								<a href="#" class="footer-item__link">Giới thiệu</a>
							</li>
							<li class="footer-item">
								<a href="#" class="footer-item__link">Tuyển dụng</a>
							</li>
							<li class="footer-item">
								<a href="#" class="footer-item__link">Điều khoản</a>
							</li>
						</ul>
					</div>
					<div class="grid__column-2-4">
						<h3 class="footer__heading">Theo dõi</h3>
						<ul class="footer-list">
							<li class="footer-item">
								<a href="#" class="footer-item__link">
									<i class="fab fa-facebook footer-item__icon"></i>
									Facebook
								</a>
							</li>
							<li class="footer-item">
								<a href="#" class="footer-item__link">
									<i class="fab fa-instagram footer-item__icon"></i>
									Instagram
								</a>
							</li>
							<li class="footer-item">
								<a href="#" class="footer-item__link">
									<i class="fab fa-linkedin footer-item__icon"></i>
								Linkedin</a>
							</li>
						</ul>
					</div>
					<div class="grid__column-2-4">
						<h3 class="footer__heading">Danh mục</h3>
						<ul class="footer-list">
							<li class="footer-item">
								<a href="#" class="footer-item__link">Mũ bảo hiểm</a>
							</li>
							<li class="footer-item">
								<a href="#" class="footer-item__link">Phụ kiện phượt</a>
							</li>
							<li class="footer-item">
								<a href="#" class="footer-item__link">Đồ bảo hộ</a>
							</li>
						</ul>
					</div>
					<div class="grid__column-2-4">
						<h3 class="footer__heading">Vào cửa hàng trên ứng dụng</h3>
						<div class="footer__download">
							<img src="assets/img/qrcode.png" class="footer__download-qr">
							<div class="footer__download-apps">
								<a href="#" class="footer__download-app-link">
									<img src="assets/img/ch_play.png" class="footer__download-app-img">
								</a>

								<a href="#" class="footer__download-app-link">
									<img src="assets/img/apstore.png" class="footer__download-app-img">
								</a>
							</div>
						</div>

					</div>
				</div>
			</div>
			<div class="footer__bottom">
				<div class="grid wide">
					<p class="footer__text">@2020 - Bản quyền thuộc về Công ty C-shoft</p>
				</div>
			</div>
		</footer>

		<!--end footer -->
	</div>
	<!-- <div class="modal">
		<div class="modal__overlay"></div>
		<div class="modal__body"> -->

			<!-- resgist form -->
			<!-- <div class="auth-form">
				<div class="auth-form__container">
					<div class="auth-form__header">
						<h3 class="auth-form__heading">Đăng ký</h3>
						<span class="auth-form__switch-btn">Đăng nhập</span>
					</div>

					<div class="auth-form__form">
						<div class="auth-form__group">
							<input class="auth-form__input" type="text" placeholder="Email của bạn">
						</div>
						<div class="auth-form__group">
							<input class="auth-form__input" type="password" placeholder="Mật khẩu của bạn">
						</div>
						<div class="auth-form__group">
							<input class="auth-form__input" type="password" placeholder="Nhập lại mật khẩu">
						</div>
					</div>

					<div class="auth-form__aside">
						<p class="auth-form__policy-text">Bằng việc đăng ký, bạn đã đồng ý với QC - Shop về <a href="#" class="auth-form__policy-link">Điều khoản dịch vụ</a> & 
							<a href="#" class="auth-form__policy-link">Chính sách bảo mật</a>
						</p>
					</div>

					<div class="auth-form__controls">
						<button class="btn auth-form__controls-back">TRỞ LẠI</button>
						<button class="btn btn--primary">Đăng ký</button>
					</div>
				</div>

				<div class="auth-form__socials">
					<a href="#" class="btn btn--with-icon btn--size-s auth-form__socials--facebook">
						<i class="fab fa-facebook-square auth-form__socials-icon"></i>
						<span class="auth-form__socials-title">
							Kết nối với Facebook
						</span>
					</a>
					<a href="#" class="btn btn--with-icon btn--size-s auth-form__socials--google">
						<i class="fab fa-google auth-form__socials-icon"></i>
						<span class="auth-form__socials-title">
							Kết nối với google
						</span>
					</a>
				</div>
			</div> -->

			<!-- login form -->
			<!-- <div class="auth-form">
				<div class="auth-form__container">
					<div class="auth-form__header">
						<h3 class="auth-form__heading">Đăng nhập</h3>
						<span class="auth-form__switch-btn">Đăng ký</span>
					</div>

					<div class="auth-form__form">
						<div class="auth-form__group">
							<input class="auth-form__input" type="text" placeholder="Email của bạn">
						</div>
						<div class="auth-form__group">
							<input class="auth-form__input" type="password" placeholder="Mật khẩu của bạn">
						</div>
					</div>

					<div class="auth-form__aside">
						<div class="auth-form-help">
							<a href="#" class="auth-form__help-link auth-form-help-fogot">Quên mật khẩu</a>
							<span class="auth-form-help-separate">
							</span>
							<a href="#" class="auth-form__help-link">Cần trợ giúp?</a>
						</div>
					</div>

					<div class="auth-form__controls">
						<button class="btn auth-form__controls-back">TRỞ LẠI</button>
						<button class="btn btn--primary">Đăng nhập</button>
					</div>
				</div>

				<div class="auth-form__socials">
					<a href="#" class="btn btn--with-icon btn--size-s auth-form__socials--facebook">
						<i class="fab fa-facebook-square auth-form__socials-icon"></i>
						<span class="auth-form__socials-title">
							Đăng nhập với Facebook
						</span>
					</a>
					<a href="#" class="btn btn--with-icon btn--size-s auth-form__socials--google">
						<i class="fab fa-google auth-form__socials-icon"></i>
						<span class="auth-form__socials-title">
							Đăng nhập với google
						</span>
					</a>
				</div>
			</div> -->
		<!-- </div>
	</div>  -->
</body>
</html>