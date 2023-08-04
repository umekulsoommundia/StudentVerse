@extends("StudentVerse.layout2")
@section('main')

    <!-- ================> header section start here <================== -->
    <header class="header" id="navbar">
        <div class="header__top d-none d-lg-block">
			<div class="container">
				<div class="header__top--area">
					<div class="header__top--left">
						<ul>
                            <li>
                                <i class="fa-solid fa-phone"></i> <span>+800-123-4567 6587</span>
                            </li>
                            <li>
                                <i class="fa-solid fa-location-dot"></i> Beverley, New York 224 USA
                            </li>
                        </ul>
					</div>
					<div class="header__top--right">
						<ul>
                            <li><a href="#"><i class="fa-brands fa-facebook-f"></i> Facebook</a></li>
                            <li><a href="#"><i class="fa-brands fa-instagram"></i> Instagram</a></li>
                            <li><a href="#"><i class="fa-brands fa-youtube"></i> Youtube</a></li>
                        </ul>
					</div>
				</div>
			</div>
		</div>
		<div class="header__bottom">
			<div class="container">
				<nav class="navbar navbar-expand-lg">
					<a class="navbar-brand" href="index.html"><img src="assets/images/logo/logo.png" alt="logo"></a>
					<button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse"
						data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false"
						aria-label="Toggle navigation">
						<span class="navbar-toggler--icon"></span>
					</button>
					<div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
						<div class="navbar-nav mainmenu">
							<ul>
								<li>
									<a href="#0">Home</a>
									<ul>
										<li><a href="index.html">Home Page One</a></li>
										<li><a href="index-2.html">Home Page Two</a></li>
										<li><a href="index-3.html">Home Page Three</a></li>
									</ul>
								</li>
								<li class="active">
									<a href="#0">Pages</a>
									<ul>
										<li><a href="about.html">About Us</a></li>
                                        <li><a href="membership.html" class="active">Membership</a></li>
                                        <li><a href="comingsoon.html">comingsoon</a></li>
                                        <li><a href="404.html">404</a></li>
									</ul>
								</li>
								<li>
									<a href="#0">Community</a>
									<ul>
										<li><a href="community.html">Community</a></li>
										<li><a href="group.html">All Group</a></li>
										<li><a href="members.html">All Members</a></li>
										<li><a href="activity.html">Activity</a></li>

									</ul>
								</li>
								<li>
									<a href="#0">Shops</a>
									<ul>
										<li><a href="shop.html">Product</a></li>
										<li><a href="shop-single.html">Product Details</a></li>
										<li><a href="shop-cart.html">Product Cart</a></li>
									</ul>
								</li>
								<li>
									<a href="#0">Blogs</a>
									<ul>
										<li><a href="blog.html">Blog</a></li>
										<li><a href="blog-2.html">Blog Style Two</a></li>
										<li><a href="blog-single.html">Blog Details</a></li>
									</ul>
								</li>
								<li><a href="contact.html">contact</a></li>
							</ul>
						</div>
						<div class="header__more">
                            <button class="default-btn dropdown-toggle" type="button" id="moreoption" data-bs-toggle="dropdown" aria-expanded="false">My Account</button>
                            <ul class="dropdown-menu" aria-labelledby="moreoption">
                                <li><a class="dropdown-item" href="login.html">Log In</a></li>
                                <li><a class="dropdown-item" href="register.html">Sign Up</a></li>
                            </ul>
						</div>
					</div>
				</nav>
			</div>
		</div>
    </header>
    <!-- ================> header section end here <================== -->



    <!-- ================> Page Header section start here <================== -->
    <div class="pageheader bg_img" style="background-image: url(assets/images/bg-img/pageheader.jpg);">
        <div class="container">
            <div class="pageheader__content text-center">
                <h2>Membership Levels</h2>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center mb-0">
                      <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                      <li class="breadcrumb-item"><a href="#">Pages</a></li>
                      <li class="breadcrumb-item active" aria-current="page">Membership</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- ================> Page Header section end here <================== -->




    <!-- ================> Membership start here <================== -->
    <div class="membership padding-top padding-bottom">
        <div class="container">
            <div class="section__header style-2 text-center">
				<h2>Membership Levels</h2>
				<p>Our dating platform is like a breath of fresh air. Clean and trendy design with ready to use features we are sure you will love.</p>
			</div>
            <div class="section__wrapper">
				<div class="row g-4 justify-content-center row-cols-xl-4 row-cols-lg-3 row-cols-sm-2 row-cols-1">
					<div class="col">
						<div class="membership__item">
                            <div class="membership__inner">
                                <div class="membership__head">
                                    <h4>7 Day Free Trial</h4>
                                    <p>$15.00 Now And Then $30.00 Per Month.</p>
                                </div>
                                <div class="membership__body">
                                    <h4>FREE</h4>
                                    <ul>
                                        <li><i class="fa-solid fa-circle-check"></i> <span>View Members Directory</span></li>
                                        <li><i class="fa-solid fa-circle-check"></i> <span>View Members Profile</span></li>
                                        <li><i class="fa-solid fa-circle-xmark"></i> <span>Send Private Messages</span></li>
                                        <li><i class="fa-solid fa-circle-xmark"></i> <span>Add Media To Your Profile</span></li>
                                    </ul>
                                </div>
                                <div class="membership__footer">
                                    <a href="login.html" class="default-btn reverse"><span>Select Plan</span></a>
                                </div>
                            </div>
                        </div>
					</div>
					<div class="col">
						<div class="membership__item">
                            <div class="membership__inner">
                                <div class="membership__head">
                                    <h4>Bronze</h4>
                                    <p>$15.00 Now And Then $30.00 Per Month.</p>
                                </div>
                                <div class="membership__body">
                                    <h4>$15.00</h4>
                                    <ul>
                                        <li><i class="fa-solid fa-circle-check"></i> <span>View Members Directory</span></li>
                                        <li><i class="fa-solid fa-circle-check"></i> <span>View Members Profile</span></li>
                                        <li><i class="fa-solid fa-circle-xmark"></i> <span>Send Private Messages</span></li>
                                        <li><i class="fa-solid fa-circle-xmark"></i> <span>Add Media To Your Profile</span></li>
                                    </ul>
                                </div>
                                <div class="membership__footer">
                                    <a href="login.html" class="default-btn reverse"><span>Select Plan</span></a>
                                </div>
                            </div>
                        </div>
					</div>
					<div class="col">
						<div class="membership__item">
                            <div class="membership__inner">
                                <div class="membership__head">
                                    <h4>Silver</h4>
                                    <p>$15.00 Now And Then $30.00 Per Month.</p>
                                </div>
                                <div class="membership__body">
                                    <h4>$20.00</h4>
                                    <ul>
                                        <li><i class="fa-solid fa-circle-check"></i> <span>View Members Directory</span></li>
                                        <li><i class="fa-solid fa-circle-check"></i> <span>View Members Profile</span></li>
                                        <li><i class="fa-solid fa-circle-check"></i> <span>Send Private Messages</span></li>
                                        <li><i class="fa-solid fa-circle-xmark"></i> <span>Add Media To Your Profile</span></li>
                                    </ul>
                                </div>
                                <div class="membership__footer">
                                    <a href="login.html" class="default-btn reverse"><span>Select Plan</span></a>
                                </div>
                            </div>
                        </div>
					</div>
					<div class="col">
						<div class="membership__item">
                            <div class="membership__inner">
                                <div class="membership__head">
                                    <h4>Gold</h4>
                                    <p>$15.00 Now And Then $30.00 Per Month.</p>
                                </div>
                                <div class="membership__body">
                                    <h4>$30.00</h4>
                                    <ul>
                                        <li><i class="fa-solid fa-circle-check"></i> <span>View Members Directory</span></li>
                                        <li><i class="fa-solid fa-circle-check"></i> <span>View Members Profile</span></li>
                                        <li><i class="fa-solid fa-circle-check"></i> <span>Send Private Messages</span></li>
                                        <li><i class="fa-solid fa-circle-check"></i> <span>Add Media To Your Profile</span></li>
                                    </ul>
                                </div>
                                <div class="membership__footer">
                                    <a href="login.html" class="default-btn reverse"><span>Select Plan</span></a>
                                </div>
                            </div>
                        </div>
					</div>
				</div>
			</div>
        </div>
    </div>
    <!-- ================> Membership end here <================== -->

@endsection
	