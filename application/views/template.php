<!doctype html>
<html class="no-js" lang="zxx">

<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>Dinomix</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Favicons -->
	<link rel="shortcut icon" href="<?= base_url()?>/assets/images/favicon.ico">
	<link rel="apple-touch-icon" href="<?= base_url()?>/assets/images/icon.png">

	<!-- Google font (font-family: 'Roboto', sans-serif; Poppins ; Satisfy) -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,500,600,600i,700,700i,800"
		rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Pacifico&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="<?= base_url()?>/assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?= base_url()?>/assets/css/plugins.css">
	<link rel="stylesheet" href="<?= base_url()?>/assets/style.css">

	<!-- Cusom css -->
	<link rel="stylesheet" href="<?= base_url()?>/assets/css/custom.css">

	<!-- Modernizer js -->
	<script src="<?= base_url()?>/assets/js/vendor/modernizr-3.5.0.min.js"></script>
</head>

<body>
	<!--[if lte IE 9]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
	<![endif]-->

	<!-- Main wrapper -->
	<div class="wrapper" id="wrapper">
		<div class="head" style="width:100%;height:25px;background-color:#B97C5E"></div>
		<!-- Header -->
		<header id="wn__header" class="header__area ">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-6 col-sm-6 col-6 col-lg-2">
						<div class="logo">
							<a href="<?= base_url('Home')?>">
								Dinomix
							</a>
						</div>
					</div>
					<div class="col-lg-8 d-none d-lg-block">
						<nav class="mainmenu__nav">
							<ul class="meninmenu d-flex justify-content-start">
								<li class="drop with--one--item"><a href="<?= base_url('Home')?>">Home</a></li>
								<li class="drop"><a href="<?= base_url('Shop')?>">Shop</a> </li>
								<li class="drop"><a href="<?= base_url('Event')?>">Event</a> </li>
								<li class="drop"><a href="<?= base_url('Blog')?>">Blog</a></li>
								<li class="drop"><a href="<?= base_url('About')?>">About Us</a></li>
							</ul>
						</nav>
					</div>
					<div class=" col-md-6 col-sm-6 col-6 col-lg-2">
					<ul
						class="header__sidebar__right d-flex justify-content-end align-items-center">
						<li class="shop_search"><a class="search__active" href="#"></a></li>
						<li class="wishlist"><a href="#"></a></li>
						<li class="shopcart"><a class="cartbox_active" href="<?= base_url('Cart')?>"><span class="product_qun">
							<?php 
							$keranjang = $this->cart->total_items()?> <?php echo $keranjang ?>
						</span></a>
							<!-- Start Shopping Cart -->
							<div class="block-minicart minicart__active">
								<div class="minicart-content-wrapper">
									<div class="micart__close">
										<span>close</span>
									</div>
									<div class="mini_action checkout">
										<a class="checkout__btn" href="<?= base_url('Pembayaran')?>">Go to Checkout</a>
									</div>
									<div class="single__items">
										<div class="miniproduct">
										<?php foreach ($this->cart->contents() as $items):?>
											<div class="item01 d-flex">
												<div class="thumb">
													<a href="product-details.html"><img src="<?= base_url();?>upload/barang/<?= $items['gambar'] ?>" style="width:300px;">
													</a>
												</div>
												<div class="content">
													<h6><a href="product-details.html"><?php echo $items['name']?></a></h6>
													<span class="prize">Rp.<?php echo number_format($items['price'],0,',','.');?></span>
													<div
														class="product_prize d-flex justify-content-between">
														<span class="qun"><?php echo $items['qty']?></span>
														<ul class="d-flex justify-content-end">
															<li><a href="#"><i
																		class="zmdi zmdi-settings"></i></a>
															</li>
															<li><a href="<?=base_url('Cart/hapusCart/'.$items['rowid'])?>"><i
																		class="zmdi zmdi-delete"></i></a>
															</li>
														</ul>
														
													</div>
												</div>
											</div>
											<hr>
											<?php endforeach ;?>
											<div class="product_prize d-flex justify-content-between">
											<span class="prize">Grand Total <br>  Rp.<?php echo number_format($this->cart->total(),0,',','.')?></span></div>
										
														<div class="mini_action cart">
															<a class="cart__btn" href="<?= base_url('Cart')?>">View and edit cart</a>
														</div>
													</div>
												</div>
												<!-- End Shopping Cart -->
											</li>
											<li class="setting__bar__icon"><a class="setting__active" href="#"></a>
												<div class="searchbar__content setting__block">
													<div class="content-inner">
														<div class="switcher-currency">
															<strong class="label switcher-label">
																<span>
																	<?php if ($this->session->userdata('logged_in') == TRUE) {
																		echo $_SESSION['nama']; 
																	} else {
																		echo "MY ACCOUNT";
																	}?>
																</span>
															</strong>
															<div class="switcher-options">
																<div class="switcher-currency-trigger">
																	<div class="setting__menu">
																	<?php if ($this->session->userdata('logged_in') == TRUE) { ?>
																		<span><a href="<?php echo base_url('home/history');?>">History</a></span>
																	<?php }?>
																	<span><a href="<?php echo base_url('Login');?>">Sign In</a></span>
																	<span><a href="<?php echo base_url('login/logout'); ?>">Logout</a></span>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</li>
										</ul>
									</div>
						
					</div>
				</div>
				<!-- Start Mobile Menu -->
				<div class="row d-none">
					<div class="col-lg-12 d-none">
						<nav class="mobilemenu__nav">
							<ul class="meninmenu">
								<li><a href="index.html">Home</a></li>
								<li><a href="#">Pages</a>
									<ul>
										<li><a href="about.html">About Page</a></li>
										<li><a href="portfolio.html">Portfolio</a>
											<ul>
												<li><a href="portfolio.html">Portfolio</a></li>
												<li><a href="portfolio-details.html">Portfolio Details</a></li>
											</ul>
										</li>
										<li><a href="my-account.html">My Account</a></li>
										<li><a href="cart.html">Cart Page</a></li>
										<li><a href="checkout.html">Checkout Page</a></li>
										<li><a href="wishlist.html">Wishlist Page</a></li>
										<li><a href="error404.html">404 Page</a></li>
										<li><a href="faq.html">Faq Page</a></li>
										<li><a href="team.html">Team Page</a></li>
									</ul>
								</li>
								<li><a href="shop-grid.html">Shop</a>
									<ul>
										<li><a href="shop-grid.html">Shop Grid</a></li>
										<li><a href="single-product.html">Single Product</a></li>
									</ul>
								</li>
								<li><a href="blog.html">Blog</a>
									<ul>
										<li><a href="blog.html">Blog Page</a></li>
										<li><a href="blog-details.html">Blog Details</a></li>
									</ul>
								</li>
								<li><a href="contact.html">Contact</a></li>
							</ul>
						</nav>
					</div>
				</div>
				<!-- End Mobile Menu -->
				<div class="mobile-menu d-block d-lg-none">

				</div>
				<!-- Mobile Menu -->
			</div>
		</header>
		<div class="brown--color box-search-content search_active block-bg close__top">
			<form id="search_mini_form" class="minisearch" action="#">
				<div class="field__search">
					<input type="text" placeholder="Search entire store here...">
					<div class="action">
						<a href="#"><i class="zmdi zmdi-search"></i></a>
					</div>
				</div>
			</form>
			<div class="close__wrap">
				<span>close</span>
			</div>
		</div>
		<div class="brown--color box-search-content search_active block-bg close__top">
			<form id="search_mini_form" class="minisearch" action="#">
				<div class="field__search">
					<input type="text" placeholder="Search entire store here...">
					<div class="action">
						<a href="#"><i class="zmdi zmdi-search"></i></a>
					</div>
				</div>
			</form>
			<div class="close__wrap">
				<span>close</span>
			</div>
		</div>
	</div>

		<!-- End Search Popup -->
                <?php 	$this->load->view($konten);?>

                	<!-- JS Files -->
	<script src="<?= base_url()?>/assets/js/vendor/jquery-3.2.1.min.js"></script>
	<script src="<?= base_url()?>/assets/js/popper.min.js"></script>
	<script src="<?= base_url()?>/assets/js/bootstrap.min.js"></script>
	<script src="<?= base_url()?>/assets/js/plugins.js"></script>
	<script src="<?= base_url()?>/assets/js/active.js"></script>
	
</body>
</html>