<!-- Banner  -->
<style>
	@import url("https://fonts.googleapis.com/css2?family=Yeseva+One&display=swap");
	@import url("https://fonts.googleapis.com/css2?family=Nunito&family=Yeseva+One&display=swap");

	:root {
		--font-family-1: "Yeseva One";
		--font-family-2: "Nunito";
		--primary-color: #f16e9c;
		--secondary-color: #f95f7d;
		--pink-color: #f1556f;
		--skin-color: #f5eddc;
		--light-color: #ffffff;
		--dark-color: #000000;
	}

	body * {
		font-family: var(--font-family-2), sans-serif;
	}

	.client-header .nav-item a.nav-link {
		font-family: var(--font-family-1), sans-serif;
		text-transform: uppercase;
		color: var(--dark-color);
	}

	.client-header .nav-item.nav-icon a.nav-link {
		text-transform: none;
		color: var(--pink-color);
	}

	.client-header .nav-item:not(.nav-icon) a.nav-link:hover,
	.client-header .nav-item a.nav-link.active {
		color: var(--pink-color);
		text-decoration: underline;
		text-underline-offset: 10px;
		text-decoration-thickness: 3px;
	}

	.client-header .nav-item.nav-icon .badge {
		position: absolute;
		top: 0;
		right: 0;
		font-size: 10px;
		background-color: var(--pink-color);
	}

	.client-footer .client-main-footer {
		margin-top: 60px;
		padding: 30px 0px;
		background: linear-gradient(95deg, #f16e9c -8.64%, #fed7e4 107.65%);
	}

	.client-footer .primary-footer .client-footer-info {
		margin-top: -90px;
		padding: 50px 30px;
		border-radius: 5px;
		background: linear-gradient(274deg, #f6e2e9 -11.37%, #fc6e9e 118.62%);
		box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25);
	}

	.title-font {
		font-family: var(--font-family-1), sans-serif;
	}

	.text-custom-primary {
		color: var(--primary-color);
	}

	.text-custom-secondary {
		color: var(--primary-color);
	}

	.text-custom-pink {
		color: var(--primary-color);
	}

	.contact-form .form-input {
		position: relative;
		padding: 15px;
		box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25);
	}

	.contact-form .submit-btn {
		position: absolute;
		right: 20px;
		top: 5px;
		bottom: 5px;
		width: 45px;
		border: 0;
		background: none;
		font-size: 26px;
	}

	.client-footer .client-sub-footer {
		background-color: var(--dark-color);
	}

	.home-banner {
		position: relative;
		height: 520px;
	}

	.banner-cover {
		position: relative;
		z-index: 1;
	}

	.banner-cover * {
		position: relative;
		z-index: 1;
	}

	.banner-cover::after {
		content: "";
		position: absolute;
		top: 0;
		left: 0;
		right: 0;
		bottom: 0;
		width: 100%;
		background: linear-gradient(96deg,
				rgba(243, 190, 207, 0.38) -6.43%,
				rgba(243, 143, 176, 0.38) 107.3%);
		z-index: 0;
	}

	.btn-custom-pink {
		background-color: var(--pink-color);
		color: var(--light-color);
	}

	.btn-custom-skin {
		background-color: var(--skin-color);
		color: var(--secondary-color);
	}

	.btn-custom-outline-pink {
		background-color: var(--light-color-color);
		color: var(--secondary-color);
		border: 1px solid var(--secondary-color);
	}

	.btn-custom-outline-pink.active,
	.btn-custom-outline-pink:hover {
		background-color: var(--secondary-color);
		color: var(--light-color);
		border: 1px solid var(--secondary-color);
	}

	.btn-custom-outline-skin {
		background-color: var(--skin-color);
		color: var(--secondary-color);
		border: 1px solid var(--skin-color);
	}

	.btn-custom-outline-pink.active,
	.btn-custom-outline-pink:hover {
		background-color: var(--secondary-color);
		color: var(--light-color);
		border: 1px solid var(--secondary-color);
	}

	.btn-custom-like {
		background-color: var(--light-color-color);
		color: var(--dark-color);
		border: 1px solid var(--dark-color);
	}

	.btn-custom-like.active,
	.btn-custom-like:hover {
		background-color: var(--secondary-color);
		color: var(--light-color);
		border: 1px solid var(--secondary-color);
	}

	.card a:hover {
		text-decoration: none;
	}

	.categories-card {
		display: flex;
		flex-direction: column;
		text-transform: uppercase;
		text-decoration: none;
		color: var(--dark-color);
	}

	.categories-card .categories-img {
		width: 90px;
		height: 90px;
		border: 1px solid var(--secondary-color);
		border-radius: 50px;
		object-fit: cover;
		margin: 10px;
	}

	.categories-card:hover {
		color: var(--secondary-color);
		text-decoration: none;
	}

	.categories-card:hover .categories-img {
		box-shadow: 0px 0px 6px 0px var(--primary-color);
	}

	.product-list .card .card-img-top {
		height: 300px;
		object-fit: cover;
	}

	.product-list a {
		color: #000000;
	}

	.product-list a:hover {
		text-decoration: none;
	}

	.product-list .card {
		position: relative;
		text-decoration: none;
		overflow: hidden;
		background: none;
	}

	.product-list .product-action {
		position: absolute;
		top: 15%;
		right: -100px;
		transition: right ease-in-out 1s;
	}

	.product-list .product-action .btn.btn-custom-white {
		border-radius: 50px;
		background-color: white;
		margin: 10px 0;
	}

	.product-list .card:hover .product-action {
		right: 10px;
	}

	.product-list .card .discount-price,
	.media .discount-price {
		color: var(--secondary-color);
	}

	.product-list .card .price,
	.media .price {
		color: gray;
		text-decoration: line-through;
	}

	.product-list .card .rating {
		font-size: 12px;
	}

	.product-list .card .card-img-preview {
		width: 40px;
		height: 40px;
		object-fit: cover;
		margin: 0 5px;
	}

	.product-list .swiper-button-next,
	.product-list .swiper-button-prev {
		--swiper-navigation-size: 18px;
		--swiper-navigation-color: var(--secondary-color);
		background-color: white;
		font-weight: 700;
		border-radius: 35px;
		width: 35px;
		height: 35px;
		filter: drop-shadow(0px 4px 4px rgba(0, 0, 0, 0.25));
	}

	.product-list .swiper-button-disabled {
		display: none;
	}

	.product-list .swiper-pagination .swiper-pagination-bullet.swiper-pagination-bullet-active {
		background-color: #f1556f;
		border: none;
	}

	.product-list .swiper-pagination .swiper-pagination-bullet {
		background: none;
		border: 1px solid var(--dark-color);
		width: 10px;
		height: 10px;
	}

	.custom-center-underline {
		position: relative;
	}

	.custom-center-underline::after {
		content: "";
		position: absolute;
		bottom: -15px;
		left: calc(50% - 75px);
		width: 150px;
		height: 1px;
		background-color: var(--pink-color);
	}

	.custom-left-underline {
		position: relative;
	}

	.custom-left-underline::after {
		content: "";
		position: absolute;
		bottom: -5px;
		left: 10px;
		width: 50px;
		height: 1px;
		background-color: var(--pink-color);
	}

	.custom-center-underline-dark {
		position: relative;
	}

	.custom-center-underline-dark::after {
		content: "";
		position: absolute;
		bottom: -5px;
		left: 25%;
		width: 50%;
		height: 1px;
		background-color: var(--dark-color);
	}

	.custom-full-underline {
		position: relative;
	}

	.custom-full-underline::after {
		content: "";
		position: absolute;
		bottom: -10px;
		left: 0;
		width: 100%;
		height: 1px;
		background-color: var(--pink-color);
	}

	.custom-full-underline-dark {
		position: relative;
	}

	.custom-full-underline-dark::after {
		content: "";
		position: absolute;
		bottom: 0px;
		left: 0;
		width: 100%;
		height: 1px;
		background-color: var(--dark-color);
	}

	.service-card {
		border: 2px solid var(--secondary-color);
		padding: 25px 30px;
		border-radius: 50px;
		margin: 10px;
	}

	.service-card .service-img-container {
		position: relative;
		border: 2px solid rgba(249, 95, 125, 0.34);
		padding: 12px;
		border-radius: 30px;
	}

	.service-card .service-img-container .service-img {
		width: 100%;
		height: 100%;
		position: relative;
		object-fit: cover;
		border-radius: 70px;
		z-index: 1;
	}

	.service-card .service-price {
		position: absolute;
		right: -60px;
		top: calc(50% - 60px);
		display: flex;
		align-items: center;
		width: 120px;
		height: 120px;
		border-radius: 120px;
		font-size: 12px;
		border: 2px solid var(--secondary-color);
		padding: 10px 2px 10px 50px;
		background: var(--light-color);
		z-index: 0;
	}

	.service-card .service-list .service-list-item {
		list-style-image: url(../images/icons/lotus-icon.png);
		margin: 10px 0;
	}

	.service-card .service-list .service-list-item.disable {
		list-style-image: url(../images/icons/lotus-disable-icon.png);
	}

	.action-banner .card-img {
		height: 500px;
		object-fit: cover;
	}

	.product-thumbnail-img {
		width: 100px;
		height: 120px;
		object-fit: cover;
	}

	.product-info-container .swiper-slide {
		text-align: center;
		font-size: 18px;
		background: #fff;
		display: flex;
		justify-content: space-between;
		align-items: center;
	}

	.product-info-container .swiper-slide img {
		display: block;
		width: 100%;
		height: 100%;
		object-fit: cover;
	}

	.product-info-container .swiper {
		width: 100%;
		height: 300px;
		margin-left: auto;
		margin-right: auto;
	}

	.product-info-container .swiper-slide {
		background-size: cover;
		background-position: center;
	}

	.product-info-container .product-info-thumb {
		height: 75%;
		width: 100%;
	}

	.product-info-container .product-info {
		height: 15%;
		box-sizing: border-box;
		padding: 10px 0;
	}

	.product-info-container .product-info .swiper-slide {
		width: 25%;
		height: 100%;
		opacity: 0.4;
	}

	.product-info-container .product-info .swiper-slide-thumb-active {
		opacity: 1;
	}

	.product-info-container .swiper-slide img {
		display: block;
		width: 100%;
		height: 100%;
		object-fit: cover;
	}

	.product-count {
		width: fit-content;
	}

	.product-count .qtyminus,
	.product-count .qtyplus {
		color: var(--dark-color);
		border: 1px solid var(--dark-color);
	}

	.product-count .qtyminus {
		border-radius: 3px 0 0 3px;
	}

	.product-count .qtyplus {
		border-radius: 0 3px 3px 0;
	}

	.product-count .qty {
		width: 60px;
		text-align: center;
		border: 1px solid var(--dark-color);
		border-left: 0;
		border-right: 0;
	}

	.custom-box-with-shadow {
		border-radius: 10px;
		background: #fff;
		box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25);
	}

	.thumbnail-user-img {
		width: 75px;
		height: 75px;
		object-fit: cover;
		border-radius: 50px;
	}

	.pagination-custom-container .page-item .page-link {
		color: var(--dark-color);
	}

	.pagination-custom-container .page-item.active .page-link {
		background: var(--pink-color);
	}

	.cart-table-container .table {
		border-collapse: separate;
		border-spacing: 0 30px;
	}

	.cart-table-container .table tr {
		box-shadow: 0px 1px 13px 0px rgba(0, 0, 0, 0.05);
	}

	.payment-container .cart-img,
	.cart-table-container .table .cart-img {
		width: 50px;
		height: 50px;
		object-fit: cover;
		margin-right: 20px;
	}

	.cart-table-container .table .cart-img-container {
		position: relative;
	}

	.cart-table-container .table .btn-clear-item {
		position: absolute;
		left: -5px;
		top: -5px;
		color: #116200;
	}

	.cart-table-container input {
		color: var(--secondary-color);
		width: 60px;
	}

	.cart-table-container input::placeholder {
		color: var(--secondary-color);
	}

	.cart-table-container .table tr th,
	.cart-table-container .table tr td {
		padding: 20px 30px;
		vertical-align: middle;
	}

	/*show all categories */
	.showAllCategory {
		list-style-type: none;
		margin-top: 28px;
		display: inline-block;
	}

	.textShowCategory {
		padding: 10px 14px;
		color: white;
		border-radius: 6px;
		background-color: #fc63c3;
	}

	.showAllCategory:hover .textShowCategory {
		color: black;
	}

	.section-title {
		font-weight: 100;
	}

	.product-wrapper {
		width: 100% !important;
	}

	.product-row {
		justify-content: center !important;
	}

	.price {
		color: #f95f7d !important;
	}

	.btn.btn-product.bg-main2.text-white {
		background: #fa5f7d;
	}

	.stats-row {
		border: none
	}

	.see-more {
		border: none
	}

	.color2 {
		color: #f16e9c !important;
	}

	.ad-caption h3 {
		letter-spacing: 0 !important;
		text-transform: uppercase
	}

	.ad-caption {
		padding: 48px 0;
	}

	.category-home {
		display: block;
		text-align: center
	}

	.category-home h3 {
		text-align: center;
		margin-top: 8px;
		font-size: 20px;
		color: #f16e9c;
		line-height: 160%;
	}

	.category-home:hover {
		color: #ff7b7bc4;
		text-decoration: underline;
	}

	.blog-para p {
		background-color: rgb(255, 255, 255);
		font-size: 17px;
		line-height: 160%;
	}

	.bg-main2{
		background-color: #ff9eaf;
	}
	.nav-link{
		color:#2a2a2a !important;
		text-transform: uppercase;
		font-weight: 500;
	}

	.nav-link:hover{
		color:#f1556f !important;
	}
	.nav-item.active .nav-link{
		color:#f1556f !important;
	}

	.navbar .navbar-nav .nav-item.active::before{
		background:#f1556f !important;
	}
	.header-right-listing ul li.cart-top span.cart-count{
		background:#f991ce
	}
	.navbar .navbar-nav .dropdown-menu li{
		background: #363949;
		color:#F95F7D
	}

	.navbar .navbar-nav .dropdown-menu li:hover a{
		color:white
	}
	.navbar .navbar-nav .dropdown-menu li:hover{
		background:#F95F7D
	}
	.home-new-products{
		margin-top: 48px;
	}
	.home-trend-top{
		padding: 0 0 30px 0;
	}
</style>

<!-- Thêm thư viện Swiper -->
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<section class="banner-slider">
	<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
		<div class="carousel-inner text-center text-white">
			<?php
			$homepage_slider = json_decode($store_setting['homepage_slider']);
			for ($i = 0; $i < sizeof($homepage_slider); $i++) {
				$homepage_slider_available = true;
			?>
				<div class="carousel-item <?= ($i == 0) ? 'active' : ''; ?>">
					<div class="banner-caption" style="">
						<img src="<?= (!empty($homepage_slider[$i]->slider_background_image)) ? base_url('assets/images/site/' . $homepage_slider[$i]->slider_background_image) : base_url('assets/store/default/img/banner.png') ?>" alt="Los Angeles" width="100%" height="100%">
						<div class="carousel-caption banner-caption-inner">
							<?php $slider_text_color = (!empty($homepage_slider[$i]->slider_text_color)) ? $homepage_slider[$i]->slider_text_color : '#FFF'; ?>
							<h1 class="display-4" style="color: <?= $slider_text_color ?> !important;">
								<?= htmlentities($homepage_slider[$i]->title, ENT_QUOTES); ?><br />
								<?= htmlentities($homepage_slider[$i]->sub_title, ENT_QUOTES); ?>
							</h1>
							<?= (!empty($homepage_slider[$i]->content)) ? '<p style="color: ' . $slider_text_color . ' !important;">' . htmlentities($homepage_slider[$i]->content, ENT_QUOTES) . '</p>' : '' ?>
							<?php if (!empty($homepage_slider[$i]->button_text)) { ?>
								<a href="<?= $homepage_slider[$i]->button_link; ?>" class="btn btn-main bg-white color mt-4" style="color: <?= (!empty($homepage_slider[$i]->button_text_color)) ? $homepage_slider[$i]->button_text_color : '#FFF' ?> !important; background-color: <?= (!empty($homepage_slider[$i]->button_bg_color)) ? $homepage_slider[$i]->button_bg_color : '#FFF' ?> !important;"><?= $homepage_slider[$i]->button_text; ?>&nbsp;<i class="fa fa-angle-right" aria-hidden="true"></i></a>
							<?php } ?>
						</div>
					</div>
				</div>
			<?php
			}

			// dummy homepage slide if not available
			if (!isset($homepage_slider_available)) {
			?>
				<div class="carousel-item active">
					<div class="banner-caption" style="background-image: url(<?= base_url('assets/store/default/img/banner.png') ?>);">
						<div class="banner-caption-inner">
							<h1>Are you ready to <span> lead the way </span></h1>
							<p>
								Lorem Ipsum has been the industry's standard dummy text ever
								since the 1500s, when an unknown printer took a galley of type
								and scrambled it to make a type specimen book.
							</p>
							<a href="#" class="btn btn-main bg-white color" data-toggle="modal" data-target="#buyModel"><?= __('store.buy_now') ?> &nbsp;<i class="fa fa-angle-right" aria-hidden="true"></i></a>
						</div>
					</div>
				</div>
			<?php
			}
			?>
		</div>
		<a class="carousel-control-prev bg-main2" href="#carouselExampleControls" role="button" data-slide="prev">
			<img alt="<?= __('store.image') ?>" src="<?= base_url('assets/store/default/'); ?>img/slider-arrow.png" />
		</a>
		<a class="carousel-control-next bg-main2" href="#carouselExampleControls" role="button" data-slide="next">
			<img alt="<?= __('store.image') ?>" src="<?= base_url('assets/store/default/'); ?>img/slider-arrow.png" />
		</a>
	</div>
</section>
<!-- Top tags -->
<section class="category-tag">
	<div class="container">
		<h3><?= __('store.top_tags') ?>:</h3>
		<ul class="category-listing">
			<?php if ($category_tags){ ?>
			<?php foreach ($category_tags as $key => $category_tag) { ?>
			<?php $has_top_tags = true; ?>
			<li><a href="<?= base_url('store/category/'. $category_tag['slug']) ?>"><?= $category_tag['name'] ?></a></li>
			<?php } ?>
			<?php } ?>
		
			<?php if (!isset($has_top_tags)) { ?>
				<li class="demo-cat-badge"><a href="#">Lorem Ipsume 1</a></li>
				<li class="demo-cat-badge"><a href="#">Lorem Ipsume 2</a></li>
				<li class="demo-cat-badge"><a href="#">Lorem Ipsume 3</a></li>
			<?php } ?>

			<li><a href="<?= $base_url ?>category" class="bg-main">+ <?= __('store.see_all_categories') ?></a></li>
		</ul>
	</div>
</section>
<!-- home page product grid -->
<section class="home-product-grid  pt-lg-5 pt-0" style="
        background: url('https://res.cloudinary.com/dtiwyksp8/image/upload/v1700118983/homepage-banner-2_fydjmw.png') center
          center / cover no-repeat;
      ">
	<div class="container">
		<div class="home-trend-top d-flex justify-content-between">
			<h2 class="section-title" style="color:#f16e9c;font-family:Yeseva One !important;font-size:28px">
				<?= __('store.trending_products') ?>
			</h2>
			<div class="searchbox">
				<input id="searchProduct" type="text" placeholder="<?= __('store.search') ?>" />
				<img src="<?= base_url('assets/store/default/'); ?>img/search.png" class="search-icon-home" alt="<?= __('store.search') ?>">
			</div>
		</div>
		<div class="product-row row product-list-trending">
		</div>
		<a href="javascript:void(0);" class="see-more see-more-trendings" data-next_page="1" data-request_page_section="trending">
			<img alt="<?= __('store.image') ?>" src="<?= base_url('assets/store/default/'); ?>img/loading.png" /> <?= __('store.show_more') ?>
		</a>
	</div>
</section>

<?php
$homepage_features = (isset($store_setting['homepage_features']) && !empty($store_setting['homepage_features'])) ? json_decode($store_setting['homepage_features']) : [];
?>
<!-- Home page feature box -->
<section class="stats-home">
	<div class="container">
		<div class="stats-row d-flex justify-content-center">
		<?php
		foreach($homepage_features as $hf) {
			$homepage_features_are_available = true;
		?>
			<?php $img = (!empty($hf->feature_image)) ? base_url('assets/images/site/'. $hf->feature_image) : base_url('assets/store/default/img/stats1.png'); ?>
			<div class="stats-box d-flex align-items-center mx-4">
			<div class="stats-icon">
				<img alt="<?= __('store.image') ?>" src="<?= $img; ?>" style="width: 65px; height: 65px;"/>
			</div>
			<div class="stats-text">
				<h4><?= $hf->title; ?></h4>
				<p><?= $hf->sub_title; ?></p>
			</div>
			</div>
		<?php	
		}

		if(!isset($homepage_features_are_available)) {
		?>
		<div class="stats-box d-flex align-items-center mx-4">
		<div class="stats-icon">
		<img alt="<?= __('store.image') ?>" src="<?= base_url('assets/store/default/')?>img/stats1.png" style="width: 65px; height: 65px;"/>
		</div>
		<div class="stats-text">
		<h4><?= __('store.free_shipping') ?></h4>
		<p><?= __('store.free_shipping_all_order') ?></p>
		</div>
		</div>

		<div class="stats-box d-flex align-items-center mx-4">
		<div class="stats-icon">
		<img alt="<?= __('store.image') ?>" src="<?= base_url('assets/store/default/')?>img/stats2.png" style="width: 65px; height: 65px;"/>
		</div>
		<div class="stats-text">
		<h4><?= __('store.100_money_guarantee') ?></h4>
		<p><?= __('store.30_days_money_back') ?></p>
		</div>
		</div>

		<div class="stats-box d-flex align-items-center mx-4">
		<div class="stats-icon">
		<img alt="<?= __('store.image') ?>" src="<?= base_url('assets/store/default/')?>img/stats3.png" style="width: 65px; height: 65px;"/>
		</div>
		<div class="stats-text">
		<h4><?= __('store.help_center') ?></h4>
		<p><?= __('store.24_7_support_system') ?></p>
		</div>
		</div>

		<div class="stats-box d-flex align-items-center mx-4">
		<div class="stats-icon">
		<img alt="<?= __('store.image') ?>" src="<?= base_url('assets/store/default/')?>img/stats4.png" style="width: 65px; height: 65px;"/>
		</div>
		<div class="stats-text">
		<h4><?= __('store.payment_method') ?></h4>
		<p><?= __('store.secure_payment') ?></p>
		</div>
		</div>
		<?php
		}
		?>
		</div>
	</div>
</section>

<!-- New product box -->
<section class="home-new-products">
	<div class="container">
		<div class="home-trend-top d-flex justify-content-between">
			<h2 class="section-title color2" style="color:#f16e9c;font-family:Yeseva One !important;font-size:28px">
				<?= __('store.new_products') ?>
			</h2>
			<ul class="category-listing">
				<li class="demo-cat-badge"><a href="#">Lorem Ipsume 1</a></li>
				<li class="demo-cat-badge"><a href="#">Lorem Ipsume 2</a></li>
				<li class="demo-cat-badge"><a href="#">Lorem Ipsume 3</a></li>
			</ul>
		</div>

		<div class="product-row d-flex flex-wrap product-list-new">
		</div>

		<a href="javascript:void(0);" class="see-more see-more-new" data-next_page="1" data-request_page_section="new">
			<img alt="<?= __('store.image') ?>" src="<?= base_url('assets/store/default/'); ?>img/loading.png" /> <?= __('store.show_more') ?>
		</a>
	</div>
</section>

<section class="banner-ads">
	<?php if (isset($settings['hbanimage']) && $settings['hbanimage'] != "") { ?>
		<img alt="<?= __('store.image') ?>" src="<?= base_url('assets/images/site/'); ?><?= $settings['hbanimage']; ?>" class="img-fluid img-banner-ads" />
	<?php } else { ?>
		<img alt="<?= __('store.image') ?>" src="<?= base_url('assets/store/default/'); ?>img/ad-bg.jpg" class="img-fluid img-banner-ads" />
	<?php } ?>


	<?php $homepage_banner = (isset($store_setting['homepage_banner'])) ? json_decode($store_setting['homepage_banner']) : []; ?>

	<div class="ad-caption">
		<h3><?= (isset($homepage_banner->title) && !empty($homepage_banner->title)) ? $homepage_banner->title : 'LOREM IPSUM'; ?></h3>
		<p><?= (isset($homepage_banner->content) && !empty($homepage_banner->content)) ? $homepage_banner->content : 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.'; ?></p>
		<a href="<?= (isset($homepage_banner->button_link) && !empty($homepage_banner->button_link)) ? $homepage_banner->button_link : '#'; ?>"><?= (isset($homepage_banner->button_text) && !empty($homepage_banner->button_text)) ? $homepage_banner->button_text : 'Lorem Ipsum'; ?></a>
	</div>
</section>

<section class="main-categories">
	<div class="container">
		<h2 class="section-title" style="color:#f16e9c;font-family:Yeseva One !important;font-size:28px">
			<?= __('store.categories') ?>
		</h2>

		<div class="categories-listing-row row justify-content-center">
			<?php

			if (!empty($category)) {
				foreach ($category as $cat_value) {
			?>
					<div href="<?php echo base_url('store/category/' . $cat_value['slug']) ?>" class="category-home col-lg-2 col-md-3 col-sm-4 col-6 ">
						<img alt="<?= __('store.image') ?>" src="<?= base_url('assets/images/product/upload/thumb/'); ?><?= $cat_value['image']; ?>" />
						<h3><?= $cat_value['name']; ?></h3>
				</div>
				<?php
				}
			} else {
				?>
				<div class="category-home">
					<img alt="<?= __('store.image') ?>" src="<?= base_url('assets/store/default/'); ?>img/ctg1.png" />
					<h3><?= __('store.dog') ?></h3>
				</div>
			<?php

			}
			?>

		</div>
	</div>
</section>

<section class="container">
	<h2 class="title-font text-custom-secondary text-start" style="color:#f16e9c;font-family:Yeseva One !important;font-size:28px">Dịch vụ</h2>
	<div class="row my-auto">
		<div class="col-12 col-lg-6 px-0">
			<div class="row service-card">
				<div class="col-10 col-md-6 my-3 service-img-container">
					<img src="https://res.cloudinary.com/dtiwyksp8/image/upload/v1700123969/woman-with-mask_vnj1sv.png" class="service-img" alt="" />
					<div class="service-price title-font">300.000 đ</div>
				</div>
				<div class="col-12 col-md-5 my-auto ml-auto pl-4">
					<h3 class="title-font text-custom-secondary custom-full-underline">
						Cơ bản
					</h3>
					<ul class="service-list mt-5">
						<li class="service-list-item">Body Treatments</li>
						<li class="service-list-item">Body Treatments</li>
						<li class="service-list-item">Body Treatments</li>
						<li class="service-list-item disable">Body Treatments</li>
						<li class="service-list-item disable">Body Treatments</li>
					</ul>
					<a href="" class="btn btn-custom-pink">Mua ngay</a>
				</div>
			</div>
		</div>
		<div class="col-12 col-lg-6 px-0">
			<div class="row service-card">
				<div class="col-10 col-md-6 my-3 service-img-container">
					<img src="https://res.cloudinary.com/dtiwyksp8/image/upload/v1700123970/woman-spa_w1896x.png" class="service-img" alt="" />
					<div class="service-price title-font">900.000 đ</div>
				</div>
				<div class="col-12 col-md-5 my-auto ml-auto pl-4">
					<h3 class="title-font text-custom-secondary custom-full-underline">
						Cao cấp
					</h3>
					<ul class="service-list mt-5">
						<li class="service-list-item">Body Treatments</li>
						<li class="service-list-item">Body Treatments</li>
						<li class="service-list-item">Body Treatments</li>
						<li class="service-list-item">Body Treatments</li>
						<li class="service-list-item">Body Treatments</li>
					</ul>
					<a href="" class="btn btn-custom-pink">Mua ngay</a>
				</div>
			</div>
		</div>
	</div>
</section>

<article class="container py-5">
	<section class="row">
		<div class="col-12 col-lg-5 action-banner">
			<div class="card h-100 text-white">
				<img src="https://res.cloudinary.com/dtiwyksp8/image/upload/v1700124222/woman-face_qhiwp8.png" class="card-img" />
				<div class="card-img-overlay p-5 d-flex flex-column justify-content-between">
					<div class="w-50">
						<h2 class="card-title title-font mt-5">Tế bào gốc</h2>
						<p class="card-text font-italic">
							Vivulum ut tempor sem leo a ultricies quam aliquam eget.
						</p>
						<h3 class="title-font mb-3">YUSACHI</h3>
						<a href="" class="btn btn-custom-skin title-font">XEM THÊM</a>
					</div>
					<p class="card-text font-weight-light mb-5">
						Valid till 23rd March, 10am | Online exclusive
					</p>
				</div>
			</div>
		</div>
		<div class="col-12 col-lg-7">
			<div class="row">
				<div class="media my-auto col-10 col-lg-6 p-3">
					<img src="https://res.cloudinary.com/dtiwyksp8/image/upload/v1700124220/hair-spray_k3qpyh.png" class="mr-1 product-thumbnail-img" alt="..." />
					<div class="media-body d-flex flex-column align-self-center">
						<a href="" class="font-weight-bold text-dark">Detangling Hair Spray</a>
						<div class="rating">
							<i class="fa fa-star text-warning"></i>
							<i class="fa fa-star text-warning"></i>
							<i class="fa fa-star text-warning"></i>
							<i class="fa fa-star text-warning"></i>
							<i class="fa fa-star text-secondary"></i>
						</div>
						<div class="d-flex my-2 justify-content-between align-content-center">
							<span class="discount-price">295.000 đ</span> -
							<span class="price">295.000 đ</span>
						</div>
					</div>
				</div>
				<div class="media my-auto col-8 col-lg-6 p-3">
					<img src="https://res.cloudinary.com/dtiwyksp8/image/upload/v1700124220/hair-spray_k3qpyh.png" class="mr-1 product-thumbnail-img" alt="..." />
					<div class="media-body d-flex flex-column align-self-center">
						<a href="" class="font-weight-bold text-dark">Detangling Hair Spray</a>
						<div class="rating">
							<i class="fa fa-star text-warning"></i>
							<i class="fa fa-star text-warning"></i>
							<i class="fa fa-star text-warning"></i>
							<i class="fa fa-star text-warning"></i>
							<i class="fa fa-star text-secondary"></i>
						</div>
						<div class="d-flex my-2 justify-content-between align-content-center">
							<span class="discount-price">295.000 đ</span> -
							<span class="price">295.000 đ</span>
						</div>
					</div>
				</div>
				<div class="media my-auto col-8 col-lg-6 p-3">
					<img src="https://res.cloudinary.com/dtiwyksp8/image/upload/v1700124220/hair-spray_k3qpyh.png" class="mr-1 product-thumbnail-img" alt="..." />
					<div class="media-body d-flex flex-column align-self-center">
						<a href="" class="font-weight-bold text-dark">Detangling Hair Spray</a>
						<div class="rating">
							<i class="fa fa-star text-warning"></i>
							<i class="fa fa-star text-warning"></i>
							<i class="fa fa-star text-warning"></i>
							<i class="fa fa-star text-warning"></i>
							<i class="fa fa-star text-secondary"></i>
						</div>
						<div class="d-flex my-2 justify-content-between align-content-center">
							<span class="discount-price">295.000 đ</span> -
							<span class="price">295.000 đ</span>
						</div>
					</div>
				</div>
				<div class="media my-auto col-8 col-lg-6 p-3">
					<img src="https://res.cloudinary.com/dtiwyksp8/image/upload/v1700124220/hair-spray_k3qpyh.png" class="mr-1 product-thumbnail-img" alt="..." />
					<div class="media-body d-flex flex-column align-self-center">
						<a href="" class="font-weight-bold text-dark">Detangling Hair Spray</a>
						<div class="rating">
							<i class="fa fa-star text-warning"></i>
							<i class="fa fa-star text-warning"></i>
							<i class="fa fa-star text-warning"></i>
							<i class="fa fa-star text-warning"></i>
							<i class="fa fa-star text-secondary"></i>
						</div>
						<div class="d-flex my-2 justify-content-between align-content-center">
							<span class="discount-price">295.000 đ</span> -
							<span class="price">295.000 đ</span>
						</div>
					</div>
				</div>
				<div class="media my-auto col-8 col-lg-6 p-3">
					<img src="https://res.cloudinary.com/dtiwyksp8/image/upload/v1700124220/hair-spray_k3qpyh.png" class="mr-1 product-thumbnail-img" alt="..." />
					<div class="media-body d-flex flex-column align-self-center">
						<a href="" class="font-weight-bold text-dark">Detangling Hair Spray</a>
						<div class="rating">
							<i class="fa fa-star text-warning"></i>
							<i class="fa fa-star text-warning"></i>
							<i class="fa fa-star text-warning"></i>
							<i class="fa fa-star text-warning"></i>
							<i class="fa fa-star text-secondary"></i>
						</div>
						<div class="d-flex my-2 justify-content-between align-content-center">
							<span class="discount-price">295.000 đ</span> -
							<span class="price">295.000 đ</span>
						</div>
					</div>
				</div>
				<div class="media my-auto col-8 col-lg-6 p-3">
					<img src="https://res.cloudinary.com/dtiwyksp8/image/upload/v1700124220/hair-spray_k3qpyh.png" class="mr-1 product-thumbnail-img" alt="..." />
					<div class="media-body d-flex flex-column align-self-center">
						<a href="" class="font-weight-bold text-dark">Detangling Hair Spray</a>
						<div class="rating">
							<i class="fa fa-star text-warning"></i>
							<i class="fa fa-star text-warning"></i>
							<i class="fa fa-star text-warning"></i>
							<i class="fa fa-star text-warning"></i>
							<i class="fa fa-star text-secondary"></i>
						</div>
						<div class="d-flex my-2 justify-content-between align-content-center">
							<span class="discount-price">295.000 đ</span> -
							<span class="price">295.000 đ</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</article>

<article class="pb-5">
	<div class="container py-2" style="background: rgba(238, 220, 188, 0.22)">
		<div class="row">
			<div class="col-12 col-lg-5 promote-training-img">
				<img class="w-100" src="https://res.cloudinary.com/dtiwyksp8/image/upload/v1700124409/training-img_p0qe2v.png" />
			</div>
			<div class="col-11 pr-lg-5 mx-auto col-lg-7 d-flex flex-column justify-content-center">
				<h2 class="title-font text-custom-secondary" style="font-family:Yeseva One !important">ĐÀO TẠO</h2>
				<p class="title-font" style="font-family:Yeseva One !important">
					Ut tempor sem leo, a ultricies quam aliquam eget. Vivamus commodo
					scelerisq ue velit, quis viverra velit bibendum vel. Phasell sus
					id leo et vestibulum.
				</p>
				<div class="d-flex flex-wrap">
					<div class="w-50 p-3 d-flex text-custom-secondary">
						<h3 class="title-font mr-2" style="font-family:Yeseva One !important">01</h3>
						Mềm mịn thoải mái
					</div>
					<div class="w-50 p-3 d-flex text-custom-secondary">
						<h3 class="title-font mr-2" style="font-family:Yeseva One !important">02</h3>
						Mềm mịn thoải mái
					</div>
					<div class="w-50 p-3 d-flex text-custom-secondary">
						<h3 class="title-font mr-2" style="font-family:Yeseva One !important">03</h3>
						Mềm mịn thoải mái
					</div>
					<div class="w-50 p-3 d-flex text-custom-secondary">
						<h3 class="title-font mr-2" style="font-family:Yeseva One !important">04</h3>
						Mềm mịn thoải mái
					</div>
					<div class="w-50 p-3 d-flex text-custom-secondary">
						<h3 class="title-font mr-2" style="font-family:Yeseva One !important">05</h3>
						Mềm mịn thoải mái
					</div>
					<div class="w-50 p-3 d-flex text-custom-secondary">
						<h3 class="title-font mr-2" style="font-family:Yeseva One !important">06</h3>
						Mềm mịn thoải mái
					</div>
				</div>
			</div>
		</div>
	</div>
</article>

<section class="home-blog">
	<div class="container">

		<?php $bs_cards = (isset($store_setting['bs_cards']) && !empty($store_setting['bs_cards'])) ? json_decode($store_setting['bs_cards']) : []; ?>

		<div class="row">
			<?php

			foreach ($bs_cards as $hf) {
				$bs_cards_are_available = true;
				if ($hf->button_link != "")
					$bs_button_link = $hf->button_link;
				else
					$bs_button_link = "#";


			?>
				<?php $img = (!empty($hf->feature_image)) ? base_url('assets/images/site/' . $hf->feature_image) : base_url('assets/store/default/img/blog1.png'); ?>
				<div class="col-md-6 col-12">
					<a class="bs_button_link" href="<?php echo $bs_button_link; ?>" target="<?php if ($hf->link_target == "true") {
																								echo '_blank';
																							} else {
																								echo '_self';
																							} ?>">
						<div class="blog-wrapper bg-main2" <?= (!empty($hf->bg_color)) ? 'style="background-color:' . $hf->bg_color . '"' : '' ?>>
							<img alt="<?= __('store.image') ?>" src="<?= $img; ?>" class="blog-img" />
							<div class="blog-content">
								<h4 style="font-family: 'Yeseva One' !important;"><?= $hf->title; ?></h4>
								<p><?= $hf->sub_title; ?></p>
							</div>
						</div>
					</a>
				</div>
			<?php
			}

			if (!isset($bs_cards_are_available)) {
			?>
				<div class="col-md-6 col-12">
					<div class="blog-wrapper bg-main2">
						<img alt="<?= __('store.image') ?>" src="<?= base_url('assets/store/default/img') ?>/blog1.png" class="blog-img" />
						<div class="blog-content">
							<h4>What is Lorem Ipsum?</h4>
							<p>
								Lorem Ipsum is simply dummy text of the printing and
								typesetting industry.
							</p>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-12">
					<div class="blog-wrapper bg-main">
						<img alt="<?= __('store.image') ?>" src="<?= base_url('assets/store/default/img') ?>/fb2.png" class="blog-img" />
						<div class="blog-content">
							<h4>What is Lorem Ipsum?</h4>
							<p>
								Lorem Ipsum is simply dummy text of the printing and
								typesetting industry.
							</p>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-12">
					<div class="blog-wrapper bg-main">
						<img alt="<?= __('store.image') ?>" src="<?= base_url('assets/store/default/img') ?>/fb3.png" class="blog-img" />
						<div class="blog-content">
							<h4>What is Lorem Ipsum?</h4>
							<p>
								Lorem Ipsum is simply dummy text of the printing and
								typesetting industry.
							</p>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-12">
					<div class="blog-wrapper bg-main2">
						<img alt="<?= __('store.image') ?>" src="<?= base_url('assets/store/default/img') ?>/fb4.png" class="blog-img" />
						<div class="blog-content">
							<h4>What is Lorem Ipsum?</h4>
							<p>
								Lorem Ipsum is simply dummy text of the printing and
								typesetting industry.
							</p>
						</div>
					</div>
				</div>
			<?php
			}
			?>
		</div>

		<div class="blog-para">
			<?php
			$para = isset($store_setting['homepage_bottom_section']) ? json_decode($store_setting['homepage_bottom_section']) : "";
			$para = isset($para->content) ? $para->content : "";
			?>
			<?= (!empty(strip_tags($para))) ? $para : 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
'; ?>
		</div>
		<a href="javascript:void(0);" class="blog-more"><?= __('store.show_more') ?> <br /> <i class="fas fa-angle-down"></i></a>
	</div>
</section>

<?php include 'product-list-template.php';  ?>

<script type="text/javascript">
	$(document).on('click', '.blog-more', function() {
		var el = $(".blog-para"),
			curHeight = el.height(),
			autoHeight = el.css('height', 'auto').height();
		el.height(curHeight).animate({
			height: autoHeight
		}, 500);
		$(this).after('<a href="javascript:void(0);" class="blog-less">' + '<?= __('store.hide') ?>' + ' <br/> <i class="fas fa-angle-up"></i></a>');
		$(this).remove();
	});

	$(document).on('click', '.blog-less', function() {
		var el = $(".blog-para");
		el.animate({
			height: '50px'
		}, 500);
		$(this).after('<a href="javascript:void(0);" class="blog-more">' + '<?= __('store.show_more') ?>' + ' <br/> <i class="fas fa-angle-down"></i></a>');
		$(this).remove();
	});

	$(document).ready(function() {
		load_Product($('#searchProduct').val());

		$('#searchProduct').keyup(function(e) {
			e.preventDefault();
			var search = $(this).val();
			load_Product(search);
		});
	});


	$(document).on('click', '.see-more', function() {
		load_Product(null, {
			next_page: $(this).data('next_page'),
			request_page_section: $(this).data('request_page_section')
		});
	});

	function load_Product(search, postData = {}) {
		var data = postData;
		data.search = search;
		data.request_page = 'home';
		var ajaxReq = 'ToCancelPrevReq';
		var ajaxReq = $.ajax({
			url: "<?= base_url() ?>" + 'Store/load_Product',
			type: 'POST',
			dataType: 'JSON',
			data: data,
			beforeSend: function() {
				if (ajaxReq != 'ToCancelPrevReq' && ajaxReq.readyState < 4) {
					ajaxReq.abort();
				}
				$('.btn-search').addClass('btn-loading');
			},
			complete: function() {
				$('.btn-search').removeClass('btn-loading');
			},
			success: function(res) {
				if (res.trendings) {
					if (postData.next_page && postData.next_page > 1) {
						$('.product-list-trending').append(Mustache.render($('#product-list-template').html(), res.trendings));
					} else {
						$('.product-list-trending').html(Mustache.render($('#product-list-template').html(), res.trendings));
					}
					$('.see-more-trendings').data('next_page', res.trendings.next_page);
					if (res.trendings.is_last_page) {
						$('.see-more-trendings').hide();
					}
				}

				if (res.new) {
					if (postData.next_page && postData.next_page > 1) {
						$('.product-list-new').append(Mustache.render($('#product-list-template').html(), res.new));
					} else {
						$('.product-list-new').html(Mustache.render($('#product-list-template').html(), res.new));
					}
					$('.see-more-new').data('next_page', res.new.next_page);
					if (res.new.is_last_page) {
						$('.see-more-new').hide();
					}
				}

				if (res.category.new && res.category.new.length) {
					$('.home-new-products .category-listing').html(res.category.new);
				}

				if (res.category.all && res.category.all.length) {
					$(".demo-cat-badge").hide();
				}
			}
		});
	}
</script>

<!-- <script>
     document.addEventListener("DOMContentLoaded", function () {
        var mySwiper = new Swiper(".swiper", {
            slidesPerView: 4, // Hiển thị 4 cột
            spaceBetween: 10,
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
        });
    });
</script> -->