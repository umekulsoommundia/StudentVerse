@extends("User_Dashboard.user_layout")
@section('main')
	

	<section>
		<div class="gap">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div id="page-contents" class="row merged20">
							<div class="col-lg-9">
								<div class="search-question">
									<form method="post">
										<input type="text" placeholder="Search Questoin?">
										<button type="submit"><i class="icofont-search-1"></i></button>
									</form>
								</div>
								<div class="main-wraper">
									<div class="friend-info">
										<h2 class="question-title"><a href="#" title="">What's a mutation observer?</a></h2>
										<div class="more">
												<div class="more-post-optns">
													<i class="">
<svg class="feather feather-more-horizontal" stroke-linejoin="round" stroke-linecap="round" stroke-width="2" stroke="currentColor" fill="none" viewBox="0 0 24 24" height="24" width="24" xmlns="http://www.w3.org/2000/svg"><circle r="1" cy="12" cx="12"/><circle r="1" cy="12" cx="19"/><circle r="1" cy="12" cx="5"/></svg></i>
													<ul>
														<li>
															<i class="icofont-pen-alt-1"></i>Edit Post
															<span>Edit This Post within a Hour</span>
														</li>
														<li>
															<i class="icofont-ban"></i>Hide Post
															<span>Hide This Post</span>
														</li>
														<li>
															<i class="icofont-ui-delete"></i>Delete Post
															<span>If inappropriate Post By Mistake</span>
														</li>
														<li>
															<i class="icofont-flag"></i>Report
															<span>Inappropriate content</span>
														</li>
													</ul>
												</div>
											</div>
										<figure>
											<img src="images/resources/user1.jpg" alt="">
										</figure>
										<div class="friend-name">
											
											<ins><a href="time-line.html" title="">Jack Carter</a> added a chapter</ins>
											<span><i class="icofont-globe"></i> published: Sep,15 2020</span>
										</div>
										<div class="question-meta">
											<p>
												Lorem ipsum dolor sit amet, consectetur adipiscing elit. At eum nihili facit; Quacumque enim ingredimur, in aliqua historia vestigium ponimus.
											</p>
											<ul class="tags">
												<li><a data-ripple="" title="" href="#">Thesis</a></li>
												<li><a data-ripple="" title="" href="#">exprement</a></li>
												<li><a data-ripple="" title="" href="#">research</a></li>
											</ul>
										</div>	
									</div>
									<div class="anser">
										<i class="icofont-check-circled" title="Best Answer"></i>
										<div class="friend-info">
											<div class="more">
												<div class="more-post-optns">
													<i class="">
<svg class="feather feather-more-horizontal" stroke-linejoin="round" stroke-linecap="round" stroke-width="2" stroke="currentColor" fill="none" viewBox="0 0 24 24" height="24" width="24" xmlns="http://www.w3.org/2000/svg"><circle r="1" cy="12" cx="12"/><circle r="1" cy="12" cx="19"/><circle r="1" cy="12" cx="5"/></svg></i>
													<ul>
														<li>
															<i class="icofont-pen-alt-1"></i>Edit Post
															<span>Edit This Post within a Hour</span>
														</li>
														<li>
															<i class="icofont-ban"></i>Hide Post
															<span>Hide This Post</span>
														</li>
														<li>
															<i class="icofont-ui-delete"></i>Delete Post
															<span>If inappropriate Post By Mistake</span>
														</li>
														<li>
															<i class="icofont-flag"></i>Report
															<span>Inappropriate content</span>
														</li>
													</ul>
												</div>
											</div>
											<figure>
												<img src="images/resources/user1.jpg" alt="">
											</figure>
											<div class="friend-name">

												<ins><a href="time-line.html" title="">Jack Carter</a> added a chapter</ins>
												<span><i class="icofont-globe"></i> published: Sep,15 2020</span>
											</div>
											<div class="question-meta">
												<p>
													Lorem ipsum dolor sit amet, consectetur adipiscing elit. At eum nihili facit; Quacumque enim ingredimur, in aliqua historia vestigium ponimus.
												</p>
												<a href="#" title="" class="main-btn">vote 25</a>
											</div>	
										</div>
										
										<div class="friend-info">
											<div class="more">
												<div class="more-post-optns">
													<i class="">
<svg class="feather feather-more-horizontal" stroke-linejoin="round" stroke-linecap="round" stroke-width="2" stroke="currentColor" fill="none" viewBox="0 0 24 24" height="24" width="24" xmlns="http://www.w3.org/2000/svg"><circle r="1" cy="12" cx="12"/><circle r="1" cy="12" cx="19"/><circle r="1" cy="12" cx="5"/></svg></i>
													<ul>
														<li>
															<i class="icofont-pen-alt-1"></i>Edit Post
															<span>Edit This Post within a Hour</span>
														</li>
														<li>
															<i class="icofont-ban"></i>Hide Post
															<span>Hide This Post</span>
														</li>
														<li>
															<i class="icofont-ui-delete"></i>Delete Post
															<span>If inappropriate Post By Mistake</span>
														</li>
														<li>
															<i class="icofont-flag"></i>Report
															<span>Inappropriate content</span>
														</li>
													</ul>
												</div>
											</div>
											<figure>
												<img src="images/resources/user1.jpg" alt="">
											</figure>
											<div class="friend-name">

												<ins><a href="time-line.html" title="">Jack Carter</a> added a chapter</ins>
												<span><i class="icofont-globe"></i> published: Sep,15 2020</span>
											</div>
											<div class="question-meta">
												<p>
													Lorem ipsum dolor sit amet, consectetur adipiscing elit. At eum nihili facit; Quacumque enim ingredimur, in aliqua historia vestigium ponimus.
												</p>
												<a href="#" title="" class="main-btn">vote 20</a>
											</div>	
										</div>
									</div>	
								</div>
								<div class="main-wraper">
									<h4 class="main-title">Related Questions</h4>
									<ul class="related-qst">
										<li>
											<a href="#" title="">I'd like to learn a js framework, any ideas?</a>
										</li>
										<li>
											<a href="#" title="">Trouble running with Kubernetes + Docker</a>
										</li>
										<li>
											<a href="#" title="">I'd like to learn a js framework, any ideas?</a>
										</li>
										<li>
											<a href="#" title="">Is it worth buying the new Surface tablet?</a>
										</li>
										<li>
											<a href="#" title="">How much should I charge for freelance design?</a>
										</li>
										<li>
											<a href="#" title="">I'd like to learn a js framework, any ideas?</a>
										</li>	
									</ul>
								</div>
							</div>
							<div class="col-lg-3">
								<aside class="sidebar static right">
									<div class="widget">
										<h4 class="widget-title">Ask Research Question?</h4>
										<div class="ask-question">
											<i class="icofont-question-circle"></i>
											<h6>Ask questions in Q&A to get help from experts in your field.</h6>
											<a class="ask-qst" href="#" title="">Ask a question</a>
										</div>
									</div>
									<div class="widget">
										<h4 class="widget-title">Explor Events <a class="see-all" href="#" title="">See All</a></h4>
										<div class="rec-events bg-purple">
											<i class="icofont-gift"></i>
											<h6><a title="" href="#">BZ University good night event in columbia</a></h6>
											<img alt="" src="images/clock.png">
										</div>
										<div class="rec-events bg-blue">
											<i class="icofont-microphone"></i>
											<h6><a title="" href="#">The 3rd International Conference 2020</a></h6>
											<img alt="" src="images/clock.png">
										</div>
									</div>
									<div class="widget stick-widget">
										<h4 class="widget-title">Who's follownig</h4>
										<ul class="followers" >
											<li>
												<figure><img alt="" src="images/resources/friend-avatar.jpg"></figure>
												<div class="friend-meta">
													<h4>
														<a title="" href="time-line.html">Kelly Bill</a>
														<span>Dept colleague</span>
													</h4>
													<a class="underline" title="" href="#">Follow</a>
												</div>
											</li>
											<li>
												<figure><img alt="" src="images/resources/friend-avatar2.jpg"></figure>
												<div class="friend-meta">
													<h4>
														<a title="" href="time-line.html">Issabel</a>
														<span>Dept colleague</span>
													</h4>
													<a class="underline" title="" href="#">Follow</a>
												</div>
											</li>
											<li>
												<figure><img alt="" src="images/resources/friend-avatar3.jpg"></figure>
												<div class="friend-meta">
													<h4>
														<a title="" href="time-line.html">Andrew</a>
														<span>Dept colleague</span>
													</h4>
													<a class="underline" title="" href="#">Follow</a>
												</div>
											</li>
											<li>
												<figure><img alt="" src="images/resources/friend-avatar4.jpg"></figure>
												<div class="friend-meta">
													<h4>
														<a title="" href="time-line.html">Sophia</a>
														<span>Dept colleague</span>
													</h4>
													<a class="underline" title="" href="#">Follow</a>
												</div>
											</li>
											<li>
												<figure><img alt="" src="images/resources/friend-avatar5.jpg"></figure>
												<div class="friend-meta">
													<h4>
														<a title="" href="time-line.html">Allen</a>
														<span>Dept colleague</span>
													</h4>
													<a class="underline" title="" href="#">Follow</a>
												</div>
											</li>
										</ul>	
									</div>
								</aside>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>



@endsection