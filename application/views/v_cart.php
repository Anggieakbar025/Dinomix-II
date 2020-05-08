
		<!-- End Search Popup -->
        <!-- Start Bradcaump area -->
        <div class="ht__bradcaump__area bg-image--3">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="bradcaump__inner text-center">
                        	<h2 class="bradcaump-title">Shopping Cart</h2>
                            <nav class="bradcaump-content">
                              <a class="breadcrumb_item" href="index.html">Home</a>
                              <span class="brd-separetor">/</span>
                              <span class="breadcrumb_item active">Shopping Cart</span>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Bradcaump area -->
        <!-- cart-main-area start -->
        <div class="cart-main-area section-padding--lg bg--white">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 ol-lg-12">
                        <form action="#">               
                            <div class="table-content wnro__table table-responsive">
                                <table>
                                    <thead>
                                        <tr class="title-top">
                                            <th class="product-thumbnail">Image</th>
                                            <th class="product-name">Product</th>
                                            <th class="product-price">Price</th>
                                            <th class="product-quantity">Quantity</th>
                                            <th class="product-subtotal">Total</th>
                                            <th class="product-remove">Remove</th>
                                        </tr>
                                    </thead>
                                    <tbody>
										<?php foreach ($this->cart->contents() as $items):?>
										<input type="hidden" name="rowid[] " value="<?=$items['rowid']?>">
                                        <tr>
                                            <td class="product-thumbnail"><a href="#"><img src="upload/barang/<?= $items['gambar'] ?>" alt="product img"></a></td>
                                            <td class="product-name"><a href=""><?php echo $items['name']?></a></td>
                                            <td class="product-price"><span class="amount">Rp.<?php echo number_format($items['price'],0,'','.')?></span></td>
                                            <td class="product-quantity"><?php echo $items['qty']?></td>
                                            <td class="product-subtotal"><span class="amount">Rp.<?php echo number_format($items['subtotal'],0,',','.')?></td>
                                            <td class="product-remove"><a href="<?=base_url('Cart/hapusCart/'.$items['rowid'])?>">X</a></td>
                                        </tr>
										<?php endforeach ;?>
                                    </tbody>
                                </table>
                            </div>
                        </form> 
                        <div class="cartbox__btn">
                            <ul class="cart__btn__list d-flex flex-wrap flex-md-nowrap flex-lg-nowrap justify-content-between">
								<!-- ke function checkout --> 
                                <li><a href="<?=base_url('Pembayaran')?>">Check Out</a></li>

                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 offset-lg-6">
                        <div class="cartbox__total__area">
                            <div class="cartbox-total d-flex justify-content-between">
                                <ul class="cart__total__list">
                                    <li>Cart total</li>
                                    <li>Delivery fee</li>
                                </ul>
                                <ul class="cart__total__tk">
                                    <li>Rp.<?php echo number_format($this->cart->total(),0,',','.')?></li>
                                    <li>Rp.20.000</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>  
        </div>
        <!-- cart-main-area end -->
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
									<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered duskam alteration variations of passages</p>
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
									<p>Copyright <i class="fa fa-copyright"></i> <a href="https://freethemescloud.com/">Free themes Cloud.</a> All Rights Reserved</p>
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