@extends("User_Dashboard.user_layout")
@section('main')
	
	<section>
		<div class="gap">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div id="page-contents" class="row merged20">
							<div class="col-lg-12">
								<div class="main-wraper">
									<h4 class="main-title">Product Cart</h4>
									<div class="cart-table">
										<table class="table table-responsive-md">
											<thead>
												<tr>
													<th>Product</th>
													<th>Price</th>
													<th>Qty</th>
													<th>Subtotal</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>
														<div class="edit-cart"><i class="">
<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg></i></div>
														<figure><img src="images/resources/cart1.jpg" alt=""></figure>
														<div class="item-meta">
															<h6>Holly Bible Book</h6>
															<span>by: Gray David</span>
														</div>
													</td>
													<td>
														<span>29.99</span>
													</td>
													<td>
														<span>1</span>
													</td>
													<td>
														<span>29.99</span>
													</td>
												</tr>
												<tr>
													<td>
														<div class="edit-cart"><i class="">
<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg></i></div>
														<figure><img src="images/resources/cart2.jpg" alt=""></figure>
														<div class="item-meta">
															<h6>Basic Vu.js Online Course</h6>
															<span>by: Gray David</span>
														</div>
													</td>
													<td>
														<span>29.99</span>
													</td>
													<td>
														<span>1</span>
													</td>
													<td>
														<span>29.99</span>
													</td>
												</tr>
												<tr>
													<td>
														<div class="edit-cart"><i class="">
<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg></i></div>
														<figure><img src="images/resources/cart3.jpg" alt=""></figure>
														<div class="item-meta">
															<h6>Advanced Css3 Pure Book</h6>
															<span>by: Gray David</span>
														</div>
													</td>
													<td>
														<span>29.99</span>
													</td>
													<td>
														<span>1</span>
													</td>
													<td>
														<span>29.99</span>
													</td>
												</tr>
											</tbody>
										</table>
										<div class="cart-update">
											<a href="#" title="">Continue Shopping</a>
											<a href="#" title="">Update Shopping cart</a>
										</div>
										
									</div>
								</div>
								<div class="row">
									<div class="col-lg-4 col-md-4 col-sm-6">
										<div class="cart-box">
											<span>Doscount Code</span>
											<form method="post" class="c-form">
												<input type="text" placeholder="Enter Your Coupon Code">
												<button class="button primary circle" type="submit">Apply</button>
											</form>
										</div>
									</div>
									<div class="col-lg-4 col-md-4 col-sm-6">
										<div class="cart-box">
											<span>Estimate Shipping and Tax</span>
											<form method="post" class="c-form">
												<input type="text" placeholder="Country">
												<button class="button primary circle" type="submit">Get A Quote</button>
											</form>
										</div>
									</div>
									<div class="col-lg-4 col-md-4 col-sm-12">
										<div class="cart-box">
											<span>Your Order Total</span>
											<ul>
												<li><span>Sub Total :</span> <i>29.99</i></li>
												<li><span>Discount :</span> <i>2.00</i></li>
												<li><span>Shipping :</span> <i>8.00</i></li>
												<li><span>Grand Total :</span> <i>35.99</i></li>
											</ul>
											<a class="main-btn" href="#" title="">Proceed To Checkout</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	
	<footer>
		<div class="gap">
			<div class="bg-image" style="background-image: url(images/resources/footer-bg.png)"></div>
			<div class="container">
				<div class="row">
					<div class="col-lg-3 col-md-6 col-sm-6">
						<div class="web-info">
							<a href="#" title=""><img src="images/logo.png" alt=""></a>
							<p>Subscribe our newsletter for getting notifications and alerts</p>
							<div class="contact-little">
								<span><i class="icofont-phone-circle"></i> +1-235-099-34</span>
								<span><i class="icofont-email"></i> <a href="https://wpkixx.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="6c05020a032c0d07090801050f420f0301">[email&#160;protected]</a></span>
							</div>
						</div>
					</div>
					<div class="col-lg-2 col-md-3 col-sm-6">
						<div class="widget">
							<div class="widget-title">
								<h4>Company</h4>
							</div>
							<ul class="quick-links">
								<li><a href="#" title="">About Us</a></li>
								<li><a href="#" title="">Career</a></li>
								<li><a href="#" title="">Privacy</a></li>
								<li><a href="#" title="">Terms</a></li>
								<li><a href="#" title="">FAQ</a></li>
								<li><a href="#" title="">Contact</a></li>
							</ul>
						</div>
					</div>
					<div class="col-lg-2 col-md-3 col-sm-6">
						<div class="widget">
							<div class="widget-title">
								<h4>Quick Links</h4>
							</div>
							<ul class="quick-links">
								<li><a href="#" title="">Product</a></li>
								<li><a href="#" title="">Market</a></li>
								<li><a href="#" title="">Courses</a></li>
								<li><a href="#" title="">Services</a></li>
								<li><a href="#" title="">Enterprise</a></li>
								<li><a href="#" title="">Sitemap</a></li>
							</ul>
						</div>
					</div>
					<div class="col-lg-2 col-md-4 col-sm-6">
						<div class="widget">
							<div class="widget-title">
								<h4>Follow Us</h4>
							</div>
							<ul class="quick-links">
								<li><a href="#" title=""><i class="icofont-facebook"></i>facebook</a></li>
								<li><a href="#" title=""><i class="icofont-twitter"></i>twitter</a></li>
								<li><a href="#" title=""><i class="icofont-instagram"></i>instagram</a></li>
								<li><a href="#" title=""><i class="icofont-google-plus"></i>google +</a></li>
								<li><a href="#" title=""><i class="icofont-whatsapp"></i>whatsapp</a></li>
								<li><a href="#" title=""><i class="icofont-reddit"></i>reddit</a></li>
							</ul>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-6">
						<div class="widget">
							<div class="widget-title">
								<h4>Newsletter</h4>
							</div>
							<div class="news-lettr">
								<form class="newsletter">
									<input type="text" placeholder="Email Address">
									<button type="submit"><i class="icofont-paper-plane"></i></button>
								</form>
								<p>
									it is a long established fact that a reader will be distracted by.
								</p>
								<h5>Download App</h5>
								<a href="#" title=""><img src="images/android.png" alt=""></a>
								<a href="#" title=""><img src="images/apple.png" alt=""></a>
								<a href="#" title=""><img src="images/windows.png" alt=""></a>
							</div>	
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer><!-- footer -->	
	
@endsection