@extends("StudentVerse.layout")
@section('main')

	<!-- ===========Info Section Ends Here========== -->
    <div class="info-section padding-top padding-bottom">
        <div class="container">
			<div class="section__header style-2 text-center">
				<h2>Contact Info</h2>
				<p>Let us know your opinions. Also you can write us if you have any questions.</p>
			</div>
            <div class="section-wrapper">
                <div class="row justify-content-center g-4">
                    <div class="col-lg-4 col-sm-6 col-12">
                        <div class="contact-item text-center">
                            <div class="contact-thumb mb-4">
                                <img src="assets/images/contact/icon/01.png" alt="contact-thumb">
                            </div>
                            <div class="contact-content">
                                <h6 class="title">Office Address</h6>
                                <p>1201 park street, Fifth Avenue</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 col-12">
                        <div class="contact-item text-center">
                            <div class="contact-thumb mb-4">
                                <img src="assets/images/contact/icon/02.png" alt="contact-thumb">
                            </div>
                            <div class="contact-content">
                                <h6 class="title">Phone number</h6>
                                <p>+22698 745 632,02 982 745</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 col-12">
                        <div class="contact-item text-center">
                            <div class="contact-thumb mb-4">
                                <img src="assets/images/contact/icon/03.png" alt="contact-thumb">
                            </div>
                            <div class="contact-content">
                                <h6 class="title">Send Email</h6>
                                <p>youremail@gmil.com</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
	<!-- ===========Info Section Ends Here========== -->



    <!-- ================> contact section start here <================== -->
    <div class="contact-section bg-white">
        <div class="contact-top padding-top padding-bottom">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-9">
                        <div class="contact-form-wrapper text-center">
                            <h2>Feedback</h2>
							<p class="mb-5">Let us know your opinions. Also you can write us if you have any questions.</p>
                            <form class="contact-form" action="https://demos.codexcoder.com/themeforest/html/ollya-dark/contact.php" id="contact-form" method="POST">
                                <div class="form-group">
                                    <input type="text" placeholder="Your Name" id="name" name="name" required="required">
                                </div>
                                <div class="form-group">
                                    <input type="text" placeholder="Your Email" id="email" name="email" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" placeholder="Phone" id="phone" name="phone" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" placeholder="Subject" id="subject" name="subject" required>
                                </div>
                                <div class="form-group w-100">
                                    <textarea name="message" rows="8" id="message" placeholder="Your Message" required></textarea>
                                </div>
                                <div class="form-group w-100 text-center">
                                    <button class="default-btn reverse" type="submit"><span>Send our Message</span></button>
                                </div>
                            </form>
                            <p class="form-message"></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="contact-bottom">
            <div class="contac-bottom">
                <div class="row justify-content-center g-0">
                    <div class="col-12">
                        <div class="location-map">
                            <div id="map">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d423283.4355669374!2d-118.69192993092697!3d34.02073049448939!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80c2c75ddc27da13%3A0xe22fdf6f254608f4!2sLos%20Angeles%2C%20CA%2C%20USA!5e0!3m2!1sen!2sbd!4v1633958856057!5m2!1sen!2sbd" allowfullscreen="" loading="lazy"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ================> contact section end here <================== -->



    <!-- ================> Footer section start here <================== -->
	<footer class="footer footer--style2">
		<div class="footer__top bg_img" style="background-image: url(assets/images/footer/bg.jpg)">
			<div class="footer__newsletter">
				<div class="container">
					<div class="row g-4 justify-content-center">
						<div class="col-lg-6 col-12">
							<div class="footer__newsletter--area">
								<div class="footer__newsletter--title">
									<h4>Newsletter Sign up</h4>
								</div>
								<div class="footer__newsletter--form">
									<form action="#">
										<input type="email" placeholder="Your email address">
										<button type="submit" class="default-btn"><span>Subscribe</span></button>
									</form>
								</div>
							</div>
						</div>
						<div class="col-lg-6 col-12">
							<div class="footer__newsletter--area justify-content-xxl-end">
								<div class="footer__newsletter--title me-xl-4">
									<h4>Join Community</h4>
								</div>
								<div class="footer__newsletter--social">
									<ul>
										<li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
										<li><a href="#"><i class="fa-brands fa-twitch"></i></a></li>
										<li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
										<li><a href="#"><i class="fa-brands fa-dribbble"></i></a></li>
										<li><a href="#"><i class="fa-brands fa-facebook-messenger"></i></a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="footer__toparea padding-top padding-bottom wow fadeInUp" data-wow-duration="1.5s">
				<div class="container">
					<div class="row g-4">
						<div class="col-lg-3 col-sm-6 col-12">
							<div class="footer__item footer--about">
								<div class="footer__inner">
									<div class="footer__content">
										<div class="footer__content--title">
											<h4>About Ollya</h4>
										</div>
										<div class="footer__content--desc">
											<p>Ollya is a friendly dating theme based on HTML template for the community functionality</p>
										</div>
										<div class="footer__content--info">
											<p><b>Address :</b> Suite-13 Tropical Center New Elephant Road 1205</p>
											<p><b>Contact :</b> +30 226 4881 514 www.yoursitename.com</p>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-sm-6 col-12">
							<div class="footer__item footer--feature">
								<div class="footer__inner">
									<div class="footer__content">
										<div class="footer__content--title">
											<h4>Featured Members</h4>
										</div>
										<div class="footer__content--desc">
											<ul>
												<li>
													<div class="thumb position-relative">
														<img src="assets/images/footer/feature/01.jpg" alt="member-img">
														<span class="feature__activity"></span>
													</div>
													<div class="content">
														<a href="member-single.html"><h6>Samantha Lee</h6></a>
														<p>Active</p>
													</div>
												</li>
												<li>
													<div class="thumb position-relative">
														<img src="assets/images/footer/feature/02.jpg" alt="member-img">
														<span class="feature__activity feature__activity--ofline"></span>
													</div>
													<div class="content">
														<a href="member-single.html"><h6>Peter McMillan</h6></a>
														<p>2 Hours Ago</p>
													</div>
												</li>
												<li>
													<div class="thumb position-relative">
														<img src="assets/images/footer/feature/03.jpg" alt="member-img">
														<span class="feature__activity"></span>
													</div>
													<div class="content">
														<a href="member-single.html"><h6>Tluagtea Tualzik</h6></a>
														<p>Active</p>
													</div>
												</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-sm-6 col-12">
							<div class="footer__item footer--support">
								<div class="footer__inner">
									<div class="footer__content">
										<div class="footer__content--title">
											<h4>Contacts & Support</h4>
										</div>
										<div class="footer__content--desc">
											<ul>
												<li><a href="#"><i class="fa-solid fa-angle-right"></i> About Us</a></li>
												<li><a href="#"><i class="fa-solid fa-angle-right"></i> Our Team</a></li>
												<li><a href="#"><i class="fa-solid fa-angle-right"></i> Testimonials</a></li>
												<li><a href="#"><i class="fa-solid fa-angle-right"></i> Get in Touch</a></li>
												<li><a href="#"><i class="fa-solid fa-angle-right"></i> FAQ</a></li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-sm-6 col-12">
							<div class="footer__item footer--activity">
								<div class="footer__inner">
									<div class="footer__content">
										<div class="footer__content--title">
											<h4>Recent Activity</h4>
										</div>
										<div class="footer__content--desc">
											<ul>
												<li>
													<div class="thumb">
														<a href="group-single.html"><img src="assets/images/footer/activity/01.jpg" alt="dating thumb"></a>
													</div>
													<div class="content">
														<a href="group-single.html"><h6>Where to find a good...</h6></a>
														<p>August 13, 2022</p>
													</div>
												</li>
												<li>
													<div class="thumb">
														<a href="group-single.html"><img src="assets/images/footer/activity/02.jpg" alt="dating thumb"></a>
													</div>
													<div class="content">
														<a href="group-single.html"><h6>Where to find a good...</h6></a>
														<p>August 13, 2022</p>
													</div>
												</li>
												<li>
													<div class="thumb">
														<a href="group-single.html"><img src="assets/images/footer/activity/03.jpg" alt="dating thumb"></a>
													</div>
													<div class="content">
														<a href="group-single.html"><h6>Where to find a good...</h6></a>
														<p>August 13, 2022</p>
													</div>
												</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<div class="footer__bottom py-4">
			<div class="container">
				<div class="footer__content text-center">
					<p class="mb-0">All Rights Reserved &copy; <a href="index.html">Ollya</a> || Design By: CodexCoder</p>
				</div>
			</div>
		</div>
	</footer>
    <!-- ================> Footer section end here <================== -->

	
	

	<!-- All Needed JS -->
	<script src="assets/js/vendor/jquery-3.6.0.min.js"></script>
	<script src="assets/js/vendor/modernizr-3.11.2.min.js"></script>
	<script src="assets/js/isotope.pkgd.min.js"></script>
	<script src="assets/js/swiper.min.js"></script>
	<!-- <script src="assets/js/all.min.js"></script> -->
	<script src="assets/js/wow.js"></script>
	<script src="assets/js/counterup.js"></script>
	<script src="assets/js/jquery.countdown.min.js"></script>
	<script src="assets/js/lightcase.js"></script>
	<script src="assets/js/waypoints.min.js"></script>
	<script src="assets/js/vendor/bootstrap.bundle.min.js"></script>
	<script src="assets/js/plugins.js"></script>
	<script src="assets/js/main.js"></script>


	<!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
	<script>
		window.ga = function () {
			ga.q.push(arguments)
		};
		ga.q = [];
		ga.l = +new Date;
		ga('create', 'UA-XXXXX-Y', 'auto');
		ga('set', 'anonymizeIp', true);
		ga('set', 'transport', 'beacon');
		ga('send', 'pageview')
	</script>
	<script src="../../../../www.google-analytics.com/analytics.js" async></script>
</body>

<!-- Mirrored from demos.codexcoder.com/themeforest/html/ollya-dark/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 28 Jul 2023 16:54:01 GMT -->
</html>


@endsection