<div class="ht__bradcaump__area bg-image--6">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="bradcaump__inner text-center">
					<h2 class="bradcaump-title">Don't Think Too Much <br> Buy It To Support Our Culture </h2>
					<nav class="bradcaump-content">
						<a class="breadcrumb_item" href="index.html">Home</a>
						<span class="brd-separetor">/</span>
						<span class="breadcrumb_item active">Shop Grid</span>
					</nav>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- End Bradcaump area -->
<!-- Start Shop Page -->
<div class="page-shop-sidebar left--sidebar bg--white section-padding--lg">
	<div class="container">
		<div class="row">
			<div class="col-lg-3 col-12 order-2 order-lg-1 md-mt-40 sm-mt-40">
				<div class="shop__sidebar">
					<aside class="wedget__categories poroduct--cat">
						<h3 class="wedget__title">Product Categories</h3>
						<ul>
							<li><a href="#">Wall Display <span>(3)</span></a></li>
							<li><a href="#">Flower Pot <span>(4)</span></a></li>
							<li><a href="#">Vase <span>(6)</span></a></li>
							<li><a href="#">Gucci <span>(7)</span></a></li>
							<li><a href="#">Cutlery <span>(7)</span></a></li>
						</ul>
					</aside>
					<aside class="wedget__categories pro--range">
						<h3 class="wedget__title">Filter by price</h3>
						<div class="content-shopby">
							<div class="price_filter s-filter clear">
								<form action="#" method="GET">
									<div id="slider-range"></div>
									<div class="slider__range--output">
										<div class="price__output--wrap">
											<div class="price--output">
												<span>Price :</span><input type="text" id="amount" readonly="">
											</div>
											<div class="price--filter">
												<a href="#">Filter</a>
											</div>
										</div>
									</div>
								</form>
							</div>
						</div>
					</aside>
					<aside class="wedget__categories poroduct--tag">
						<h3 class="wedget__title">Product Tags</h3>
						<ul>
							<li><a href="#">Aesthetic</a></li>
							<li><a href="#">Ceramics</a></li>
							<li><a href="#">Pottery</a></li>
							<li><a href="#">Culture</a></li>
							<li><a href="#">Malang</a></li>
							<li><a href="#">Dinoyo</a></li>
							<li><a href="#">Craft</a></li>
							<li><a href="#">Pot</a></li>

						</ul>
					</aside>
				</div>
			</div>
			<div class="col-lg-9 col-12 order-1 order-lg-2">
				<div class="row">
					<div class="col-lg-12">
						<div class="shop__list__wrapper d-flex flex-wrap flex-md-nowrap justify-content-between">
							<div class="shop__list nav justify-content-center" role="tablist">
								<a class="nav-item nav-link active" data-toggle="tab" href="#nav-grid" role="tab"><i
										class="fa fa-th"></i></a>
								<a class="nav-item nav-link" data-toggle="tab" href="#nav-list" role="tab"><i
										class="fa fa-list"></i></a>
							</div>
							<p>Showing 1–12 of 40 results</p>
							<div class="orderby__wrapper">
								<span>Sort By</span>
								<select class="shot__byselect">
									<option>Default sorting</option>
									<option>HeadPhone</option>
									<option>Furniture</option>
									<option>Jewellery</option>
									<option>Handmade</option>
									<option>Kids</option>
								</select>
							</div>
						</div>
					</div>
				</div>

				<div class="tab__container">
					<div class="shop-grid tab-panel fade show active" id="nav-grid" role="tabpanel">
						<div class="row" style="padding-left:25px;">
							<!-- Start Single Product -->
							<?php foreach ($barang as $brg):?>
							<div class="product product__style--3 col-lg-4 col-md-4 col-sm-6 col-12">
								<div class="product__thumb">
									<a class="first__img" href="single-product.html"><img
											src="<?=base_url();?>upload/barang/<?= $brg->gambar ?>"
											style="width:300px;"></a>
									<a class="second__img animation1" href="single-product.html"> </a>
									<div class="hot__box color--2">
										<span class="hot-label">HOT</span>
									</div>
								</div>
								<?php if ($brg->stok > 0) { ?>
								<div class="product__content content--center">
									<h4><a href="single-product.html"><?= $brg->nama_barang; ?></a></h4>
									<ul class="prize d-flex">
										<li>Rp. <?= $brg->harga; ?></li>
									</ul>
									<ul class="prize d-flex">
										<li>Penjual : <?= $brg->nama_penjual; ?></li>
									</ul>
									<div class="action">
										<div class="actions_inner">
											<ul class="add_to_links">
												<li><a class="cart" href=""><i class="bi bi-shopping-bag4"></i></a>
												</li>
												<li>
												<?= anchor('Cart/tambahCart/'.$brg->id_barang, '<i class="bi bi-shopping-cart-full"></i>'); ?>
												</li>
												<li><a class="compare" href="#"><i class="bi bi-heart-beat"></i></a>
												</li>
												<li><a data-target="#productmodal<?= $brg->id_barang; ?>"
														data-toggle="modal" title="Quick View"
														class="quickview modal-view detail-link">
														<i class="bi bi-search"></i>
													</a>
												</li>
											</ul>
										</div>
									</div>
									<div class="product__hover--content">
										<ul class="rating d-flex">
											<li class="on"><i class="fa fa-star-o"></i></li>
											<li class="on"><i class="fa fa-star-o"></i></li>
											<li class="on"><i class="fa fa-star-o"></i></li>
											<li><i class="fa fa-star-o"></i></li>
											<li><i class="fa fa-star-o"></i></li>
										</ul>
									</div>
								</div>
								<?php } else { ?>
								<div class="product__content content--center">
									<h4 class="col-red"><a href="single-product.html">Sold Out</a></h4>
								</div>

								<?php } ?>

							</div>
							<?php endforeach; ?>
							<!-- End Single Product -->
						</div>
						<ul class="wn__pagination">
							<li class="active"><a href="#">1</a></li>
							<li><a href="#">2</a></li>
							<li><a href="#">3</a></li>
							<li><a href="#">4</a></li>
							<li><a href="#"><i class="zmdi zmdi-chevron-right"></i></a></li>
						</ul>
					</div>
					<div class="shop-grid tab-pane fade" id="nav-list" role="tabpanel">
						<div class="list__view__wrapper">
							<!-- Start Single Product -->
							<div class="list__view">
								<div class="thumb">
									<a class="first__img" href="single-product.html"><img src="images/product/1.jpg"
											alt="product images"></a>
									<a class="second__img animation1" href="single-product.html"><img
											src="images/product/2.jpg" alt="product images"></a>
								</div>
								<div class="content">
									<h2><a href="single-product.html">Ali Smith</a></h2>
									<ul class="rating d-flex">
										<li class="on"><i class="fa fa-star-o"></i></li>
										<li class="on"><i class="fa fa-star-o"></i></li>
										<li class="on"><i class="fa fa-star-o"></i></li>
										<li class="on"><i class="fa fa-star-o"></i></li>
										<li><i class="fa fa-star-o"></i></li>
										<li><i class="fa fa-star-o"></i></li>
									</ul>
									<ul class="prize__box">
										<li>$111.00</li>
										<li class="old__prize">$220.00</li>
									</ul>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue
										nec est
										tristique auctor. Donec non est at libero vulputate rutrum. Morbi ornare
										lectus quis
										justo gravida semper. Nulla tellus mi, vulputate adipiscing cursus eu,
										suscipit id
										nulla.</p>
									<ul class="cart__action d-flex">
										<li class="cart"><a href="cart.html">Add to cart</a></li>
										<li class="wishlist"><a href="cart.html"></a></li>
										<li class="compare"><a href="cart.html"></a></li>
									</ul>

								</div>
							</div>
							<!-- End Single Product -->
							<!-- Start Single Product -->
							<div class="list__view mt--40">
								<div class="thumb">
									<a class="first__img" href="single-product.html"><img src="images/product/2.jpg"
											alt="product images"></a>
									<a class="second__img animation1" href="single-product.html"><img
											src="images/product/4.jpg" alt="product images"></a>
								</div>
								<div class="content">
									<h2><a href="single-product.html">Blood In Water</a></h2>
									<ul class="rating d-flex">
										<li class="on"><i class="fa fa-star-o"></i></li>
										<li class="on"><i class="fa fa-star-o"></i></li>
										<li class="on"><i class="fa fa-star-o"></i></li>
										<li class="on"><i class="fa fa-star-o"></i></li>
										<li><i class="fa fa-star-o"></i></li>
										<li><i class="fa fa-star-o"></i></li>
									</ul>
									<ul class="prize__box">
										<li>$111.00</li>
										<li class="old__prize">$220.00</li>
									</ul>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue
										nec est
										tristique auctor. Donec non est at libero vulputate rutrum. Morbi ornare
										lectus quis
										justo gravida semper. Nulla tellus mi, vulputate adipiscing cursus eu,
										suscipit id
										nulla.</p>
									<ul class="cart__action d-flex">
										<li class="cart"><a href="cart.html">Add to cart</a></li>
										<li class="wishlist"><a href="cart.html"></a></li>
										<li class="compare"><a href="cart.html"></a></li>
									</ul>

								</div>
							</div>
							<!-- End Single Product -->
							<!-- Start Single Product -->
							<div class="list__view mt--40">
								<div class="thumb">
									<a class="first__img" href="single-product.html"><img src="images/product/3.jpg"
											alt="product images"></a>
									<a class="second__img animation1" href="single-product.html"><img
											src="images/product/6.jpg" alt="product images"></a>
								</div>
								<div class="content">
									<h2><a href="single-product.html">Madeness Overated</a></h2>
									<ul class="rating d-flex">
										<li class="on"><i class="fa fa-star-o"></i></li>
										<li class="on"><i class="fa fa-star-o"></i></li>
										<li class="on"><i class="fa fa-star-o"></i></li>
										<li class="on"><i class="fa fa-star-o"></i></li>
										<li><i class="fa fa-star-o"></i></li>
										<li><i class="fa fa-star-o"></i></li>
									</ul>
									<ul class="prize__box">
										<li>$111.00</li>
										<li class="old__prize">$220.00</li>
									</ul>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue
										nec est
										tristique auctor. Donec non est at libero vulputate rutrum. Morbi ornare
										lectus quis
										justo gravida semper. Nulla tellus mi, vulputate adipiscing cursus eu,
										suscipit id
										nulla.</p>
									<ul class="cart__action d-flex">
										<li class="cart"><a href="cart.html">Add to cart</a></li>
										<li class="wishlist"><a href="cart.html"></a></li>
										<li class="compare"><a href="cart.html"></a></li>
									</ul>

								</div>
							</div>
							<!-- End Single Product -->
							<!-- Start Single Product -->
							<div class="list__view mt--40">
								<div class="thumb">
									<a class="first__img" href="single-product.html"><img src="images/product/4.jpg"
											alt="product images"></a>
									<a class="second__img animation1" href="single-product.html"><img
											src="images/product/6.jpg" alt="product images"></a>
								</div>
								<div class="content">
									<h2><a href="single-product.html">Watching You</a></h2>
									<ul class="rating d-flex">
										<li class="on"><i class="fa fa-star-o"></i></li>
										<li class="on"><i class="fa fa-star-o"></i></li>
										<li class="on"><i class="fa fa-star-o"></i></li>
										<li class="on"><i class="fa fa-star-o"></i></li>
										<li><i class="fa fa-star-o"></i></li>
										<li><i class="fa fa-star-o"></i></li>
									</ul>
									<ul class="prize__box">
										<li>$111.00</li>
										<li class="old__prize">$220.00</li>
									</ul>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue
										nec est
										tristique auctor. Donec non est at libero vulputate rutrum. Morbi ornare
										lectus quis
										justo gravida semper. Nulla tellus mi, vulputate adipiscing cursus eu,
										suscipit id
										nulla.</p>
									<ul class="cart__action d-flex">
										<li class="cart"><a href="cart.html">Add to cart</a></li>
										<li class="wishlist"><a href="cart.html"></a></li>
										<li class="compare"><a href="cart.html"></a></li>
									</ul>

								</div>
							</div>
							<!-- End Single Product -->
							<!-- Start Single Product -->
							<div class="list__view mt--40">
								<div class="thumb">
									<a class="first__img" href="single-product.html"><img src="images/product/5.jpg"
											alt="product images"></a>
									<a class="second__img animation1" href="single-product.html"><img
											src="images/product/9.jpg" alt="product images"></a>
								</div>
								<div class="content">
									<h2><a href="single-product.html">Court Wings Run</a></h2>
									<ul class="rating d-flex">
										<li class="on"><i class="fa fa-star-o"></i></li>
										<li class="on"><i class="fa fa-star-o"></i></li>
										<li class="on"><i class="fa fa-star-o"></i></li>
										<li class="on"><i class="fa fa-star-o"></i></li>
										<li><i class="fa fa-star-o"></i></li>
										<li><i class="fa fa-star-o"></i></li>
									</ul>
									<ul class="prize__box">
										<li>$111.00</li>
										<li class="old__prize">$220.00</li>
									</ul>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue
										nec est
										tristique auctor. Donec non est at libero vulputate rutrum. Morbi ornare
										lectus quis
										justo gravida semper. Nulla tellus mi, vulputate adipiscing cursus eu,
										suscipit id
										nulla.</p>
									<ul class="cart__action d-flex">
										<li class="cart"><a href="cart.html">Add to cart</a></li>
										<li class="wishlist"><a href="cart.html"></a></li>
										<li class="compare"><a href="cart.html"></a></li>
									</ul>
								</div>
							</div>
							<!-- End Single Product -->
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- End Shop Page -->
<!-- Footer Area -->
<footer id="wn__footer" class="footer__area bg__cat--8 brown--color">
	<div class="footer-static-top">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="footer__widget footer__menu">
						<div class="ft__logo">
							<a href="index.html">
								<img src="images/logo/3.png" alt="logo">
							</a>
							<p>There are many variations of passages of Lorem Ipsum available, but the majority have
								suffered duskam alteration variations of passages</p>
						</div>
						<div class="footer__content">
							<ul class="social__net social__net--2 d-flex justify-content-center">
								<li><a href="#"><i class="bi bi-facebook"></i></a></li>
								<li><a href="#"><i class="bi bi-google"></i></a></li>
								<li><a href="#"><i class="bi bi-twitter"></i></a></li>
								<li><a href="#"><i class="bi bi-linkedin"></i></a></li>
								<li><a href="#"><i class="bi bi-youtube"></i></a></li>
							</ul>
							<ul class="mainmenu d-flex justify-content-center">
								<li><a href="index.html">Trending</a></li>
								<li><a href="index.html">Best Seller</a></li>
								<li><a href="index.html">All Product</a></li>
								<li><a href="index.html">Wishlist</a></li>
								<li><a href="index.html">Blog</a></li>
								<li><a href="index.html">Contact</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="copyright__wrapper">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-12">
					<div class="copyright">
						<div class="copy__right__inner text-left">
							<p>Copyright <i class="fa fa-copyright"></i> <a href="https://freethemescloud.com/">Free
									themes Cloud.</a> All Rights Reserved</p>
						</div>
					</div>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-12">
					<div class="payment text-right">
						<img src="images/icons/payment.png" alt="" />
					</div>
				</div>
			</div>
		</div>
	</div>
</footer>
<!-- //Footer Area -->

<!-- QUICKVIEW PRODUCT -->
<div id="quickview-wrapper">
	<!-- Modal -->
	<?php foreach ($barang as $brg):?>
	<div class="modal fade" id="productmodal<?= $brg->id_barang; ?>" tabindex="-1" role="dialog">
		<div class="modal-dialog modal__container" role="document">
			<div class="modal-content">
				<div class="modal-header modal__header">
					<h2>Data Barang</h2>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
							aria-hidden="true">&times;</span></button>
				</div>
				<div class="modal-body">
					<div class="modal-product">
						<!-- Start product images -->
						<div class="product-images">
							<div class="main-image images">
								<img alt="big images" src="upload/barang/<?= $brg->gambar; ?>">
							</div>
						</div>


						<!-- end product images -->
						<div class="product-info">
							<h1 class="mt-5"><?= $brg->nama ?></h1>
							<div class="rating__and__review">

							</div>
							<div class="price-box-3">
								<div class="s-price-box">
									<span class="new-price">Rp. <?= $brg->harga; ?></span>
								</div>
							</div>

							<div class="select__size">
								<h2>Stok</h2>
								<ul class="color__list">
									<li class="l__size"><a><?= $brg->stok; ?></a></li>
								</ul>
							</div>

							<div class="addtocart-btn">
								<a href="<?= base_url(); ?>Cart/tambahCart/<?= $brg->id_barang; ?>">Add to cart</a>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
	</div>
	<?php endforeach; ?>

</div>
<!-- END QUICKVIEW PRODUCT -->
</div>
<!-- //Main wrapper -->


</body>

</html>
