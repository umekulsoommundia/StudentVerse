@extends("navbar")
@section('main')


		<!-- Start Mail Content Area -->
		<div class="main-content-area ptb-100">
			<div class="container">
				<div class="row">
					<div class="col-lg-3">
						<div class="sidebar-menu-wrap">
							<div class="sidemenu-wrap d-flex justify-content-between align-items-center">
								<h3>Pify Sidebar Menu</h3>
								<button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
									<i class="ri-menu-line"></i>
								</button>
							</div>
							  
							<div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
								<div class="offcanvas-header">
									<h5 class="offcanvas-title" id="offcanvasExampleLabel">Menu</h5>
									<button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
								</div>
								<div class="offcanvas-body">
									<div class="left-sidebar">
										<nav class="sidebar-nav" data-simplebar>
											<ul id="sidebar-menu" class="sidebar-menu">
												<li>
													<a href="index.html" class="box-style">
														<span class="menu-title">
															<i class="ri-home-8-line"></i>
															Home
														</span>
													</a>
												</li>
												<li>
													<a href="#" class="has-arrow box-style">
														<i class="ri-question-line"></i>
														<span class="menu-title">
															Questions
														</span>
													</a>
													<ul class="sidemenu-nav-second-level">
														<li>
															<a href="all-queations.html">
																<span class="menu-title">All questions</span>
															</a>
														</li>
														<li>
															<a href="queations-details.html">
																<span class="menu-title">questions details</span>
															</a>
														</li>
													</ul>
												</li>
												<li>
													<a href="communities.html" class="box-style">
														<span class="menu-title">
															<i class="ri-links-line"></i>
															Communities
														</span>
													</a>
												</li>
												<li>
													<a href="#" class="has-arrow box-style">
														<i class="ri-question-answer-fill"></i>
														<span class="menu-title">
															Most answered
														</span>
													</a>
													<ul class="sidemenu-nav-second-level">
														<li>
															<a href="most-answered.html">
																<span class="menu-title">Most answered</span>
															</a>
														</li>
														<li>
															<a href="most-answered-details.html">
																<span class="menu-title">Most answered details</span>
															</a>
														</li>
													</ul>
												</li>
												<li>
													<a href="unanswered.html" class="box-style">
														<span class="menu-title">
															<i class="ri-checkbox-circle-line"></i>
															Unanswered
														</span>
													</a>
												</li>
												<li>
													<a href="most-visited.html" class="box-style">
														<span class="menu-title">
															<i class="ri-eye-line"></i>
															Most visited 
														</span>
													</a>
												</li>
												<li>
													<a href="polls.html" class="box-style">
														<span class="menu-title">
															<i class="ri-bar-chart-fill"></i>
															Polls
														</span>
													</a>
												</li>
												<li>
													<a href="faq.html" class="box-style">
														<span class="menu-title">
															<i class="ri-hq-line"></i>
															FAQs
														</span>
													</a>
												</li>
												<li>
													<a href="groups.html" class="box-style">
														<span class="menu-title">
															<i class="ri-group-2-line"></i>
															Groups
														</span>
													</a>
												</li>
												<li>
													<a href="education.html" class="box-style">
														<span class="menu-title">
															<i class="ri-book-line"></i>
															Education
														</span>
													</a>
												</li>
												<li>
													<a href="technology.html" class="box-style">
														<span class="menu-title">
															<i class="ri-file-shield-2-line"></i>
															Technology
														</span>
													</a>
												</li>
												<li>
													<a href="tags.html" class="box-style">
														<span class="menu-title">
															<i class="ri-price-tag-line"></i>
															Tags
														</span>
													</a>
												</li>
												<li>
													<a href="badges.html" class="box-style">
														<span class="menu-title">
															<i class="ri-award-line"></i>
															Badges
														</span>
													</a>
												</li>
			
												<li>
													<a href="#" class="has-arrow box-style">
														<i class="ri-user-line"></i>
														<span class="menu-title">
															User
														</span>
													</a>
													<ul class="sidemenu-nav-second-level">
														<li>
															<a href="user.html">
																<span class="menu-title">User</span>
															</a>
														</li>
														<li>
															<a href="user-profile.html">
																<span class="menu-title">User profile</span>
															</a>
														</li>
														<li>
															<a href="ask-questions.html">
																<span class="menu-title">Ask a questions</span>
															</a>
														</li>
													</ul>
												</li>
											</ul>
										</nav>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-lg-9">
						<div class="referrals-area">
							<div class="referrals-content">
								<h3>Spread the word with friends. Earn points.</h3>
								<p>We have a number of ways to help spread the word to your friends and family, Choose whatever works best for you.</p>

								<form class="referrals-form">
									<div class="fprm-group">
										<label>Send a referral by email.</label>
										<input type="email" class="form-control" name="email" id="email" placeholder="Send and email">

										<button type="submit" class="default-btn">
											Send
										</button>
									</div>

									<div class="fprm-group">
										<label>Copy and paste your referral link anywhere.</label>
										<input type="text" class="form-control copy" name="email" id="text" placeholder="https://www.pify/demo/themes/invite=ldASsui0asDOfs89JTJ">

										<button class="default-btn">
											Copy
										</button>
									</div>
								</form>
							</div>
							<div class="row">
								<div class="col-lg-3 col-sm-6">
									<div class="single-referrals">
										<h2>14</h2>
										<span>Invitations Sent</span>
									</div>
								</div>

								<div class="col-lg-3 col-sm-6">
									<div class="single-referrals">
										<h2>7</h2>
										<span>Pending</span>
									</div>
								</div>

								<div class="col-lg-3 col-sm-6">
									<div class="single-referrals">
										<h2>2</h2>
										<span>Completed</span>
									</div>
								</div>

								<div class="col-lg-3 col-sm-6">
									<div class="single-referrals">
										<h2>100</h2>
										<span>Earned</span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Mail Content Area -->
		@extends("navbar")
		@section('main')
		