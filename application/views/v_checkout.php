        <!-- Start Bradcaump area -->
        <div class="ht__bradcaump__area bg-image--4">
        	<div class="container">
        		<div class="row">
        			<div class="col-lg-12">
        				<div class="bradcaump__inner text-center">
        					<h2 class="bradcaump-title">Checkout</h2>
        					<nav class="bradcaump-content">
        						<a class="breadcrumb_item" href="index.html">Home</a>
        						<span class="brd-separetor">/</span>
        						<span class="breadcrumb_item active">Checkout</span>
        					</nav>
        				</div>
        			</div>
        		</div>
        	</div>
        </div>
        <!-- End Bradcaump area -->
        <!-- Start Checkout Area -->
        <section class="wn__checkout__area section-padding--lg bg__white">
        	<div class="container">
        		<form action="<?= base_url(); ?>pembayaran/insertTransaksi" method="POST">
        			<div class="row">
        				<div class="col-lg-6 col-12">
        					<div class="customer_details">
        						<h3>Billing details</h3>
        						<div class="customar__field">
        							<div class="margin_between">
        								<div class="input_box space_between">
        									<input name="id_pembeli" type="hidden" value="<?= $_SESSION['id_pembeli']; ?>">
        								</div>
        							</div>

        							<div class="margin_between">
        								<div class="input_box space_between">
        									<label>Name<span>*</span></label>
        									<input value="<?= $_SESSION['nama']; ?>">
        								</div>
        							</div>

        							<div class="margin_between">
        								<div class="input_box space_between">
        									<label>Alamat<span>*</span></label>
        									<input name="alamat" type="text" value="<?= $_SESSION['alamat']; ?>">
        								</div>
        							</div>

        							<div class="margin_between">
        								<div class="input_box space_between">
        									<label>Telepon<span>*</span></label>
        									<input name="telepon" type="text" value="<?= $_SESSION['telepon']; ?>">
        								</div>
        							</div>

        							<div class="input_box">
        								<label>Kurir<span>*</span></label>
        								<select class="select__option" name="id_kurir">
        									<?php foreach ($kurir as $k ) : ?>
        									<option value="<?= $k['id_kurir'] ?>"><?= $k['nama']; ?></option>
        									<?php endforeach; ?>
        								</select>
        							</div>

        							<div class="input_box">
        								<label>Pembayaran<span>*</span></label>
        								<select class="select__option" name="id_pembayaran">
        									<?php foreach ($pembayaran as $p ) : ?>
        									<option value="<?= $p['id_pembayaran'] ?>"><?= $p['jenis']; ?></option>
        									<?php endforeach; ?>
        								</select>
        							</div>

        						</div>

        					</div>

        				</div>
        				<div class="col-lg-6 col-12 md-mt-40 sm-mt-40">
        					<div class="wn__order__box">
        						<h3 class="onder__title">Your order</h3>
        						<ul class="order__total">
        							<li>Product</li>
        							<li>Total</li>
        						</ul>
        						<?php foreach ($this->cart->contents() as $items):?>
        						<ul class="order_product">
        							<li><?php echo $items['name']?><br>x<?php echo $items['qty']?><span>Rp.<?php echo number_format($items['price'],0,',','.')?></span>
        							</li>
        							<hr>
        						</ul>
        						<?php endforeach;?>
        						<ul class="shipping__method">
        							<li>Cart Subtotal
        								<span>Rp.<?php echo number_format($this->cart->total(),0,',','.')?></span></li>
        							<li>Shipping <span>Rp. 20.000</span></li>
        							</li>
        						</ul>

        						<ul class="total__amount">
        							<li>Order Total <span>Rp.
        									<?php echo number_format($this->cart->total() + 20000 ,0,',','.')?></span>
        							</li>
        						</ul>
        					</div>
        				</div>
        			</div>
        			<div class="row beli mt-3">
        				<input type="submit" value="Beli" class="btn btn-success bg-success">
        			</div>
        		</form>
        	</div>
        </section>
        <!-- End Checkout Area -->
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
        							<p>There are many variations of passages of Lorem Ipsum available, but the majority
        								have suffered duskam alteration variations of passages</p>
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
        							<p>Copyright <i class="fa fa-copyright"></i> <a
        									href="https://freethemescloud.com/">Free themes Cloud.</a> All Rights
        								Reserved</p>
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

        </div>
        <!-- //Main wrapper -->

        <!-- JS Files -->

        </body>

        </html>
