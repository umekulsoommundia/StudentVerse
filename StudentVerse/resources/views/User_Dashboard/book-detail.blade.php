@extends("User_Dashboard.user_layout")
@section('main')



	<section>
		<div class="gap">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div id="page-contents" class="row merged20">
							<div class="col-lg-9">
								<div class="main-wraper">
									<div class="row">
										<div class="col-lg-4 col-md-4 col-sm-4">
											<div class="full-book">
												<figure>
													<img src="images/resources/book3.jpg" alt="">
													<span>Trending</span>
												</figure>
												<div class="prod-stat">
													<ul>
														<li><span>Visited:</span> 130</li>
														<li><span>Downloads:</span> 1.3k</li>
														<li><span>Availablity:</span> Available</li>
													</ul>
												</div>
											</div>
										</div>
										<div class="col-lg-8 col-md-8 col-sm-8">
											<div class="prod-detail">
												<ul class="stars">
													<li><i class="icofont-star"></i></li>
													<li><i class="icofont-star"></i></li>
													<li><i class="icofont-star"></i></li>
													<li><i class="icofont-star"></i></li>
													<li><i class="icofont-star"></i></li>
												</ul>
												<h4>Python Tricks 2020</h4>
												<span>Price: <i>$20</i></span>
												<p>
													Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper
												</p>
												<ul class="item-info">
													<li><span>Author:</span> Jhon Doe</li>
													<li><span>Pages:</span> 1120</li>
													<li><span>Publish:</span> Aug, 05, 2019</li>
													<li><span>Barcode:</span> 9780099511021</li>
													<li><span>Publisher:</span> Random House</li>
												</ul>
												<div class="sale-button">
													<a href="#" title="" class="main-btn"><i class="icofont-book-alt"></i> Read Now</a>
													<a href="#" title="" class="main-btn purchase-btn"><i class="icofont-cart-alt"></i> Buy Now</a>
												</div>
											</div>
										</div>
									</div>
									<div class="book-description">
										<p>
											Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper
										</p>
									</div>
									<div class="comment-area product mt-5">
										<h4 class="comment-title">03 Feedback</h4>
										<ul class="comments">
											<li>
												<div class="comment-box">
													<div class="commenter-photo">
														<img alt="" src="images/resources/commenter-1.jpg">
													</div>
													<div class="commenter-meta">
														<div class="comment-titles">
															<h6>willimes doe</h6>
															<span>12 june 2017</span>
															<ins><i class="icofont-star"></i> 4.5</ins>
														</div>
														<p>
															Quis autem velum iure reprehe nderit. Lorem ipsum dolor sit amet adipiscing egetmassa pulvinar eu aliquet nibh dapibus.
														</p>
													</div>
												</div>
											</li>
											<li>
												<div class="comment-box">
													<div class="commenter-photo">
														<img alt="" src="images/resources/commenter-2.jpg">
													</div>
													<div class="commenter-meta">
														<div class="comment-titles">
															<h6>Qlark Jack</h6>
															<span>22 july 2017</span>
															<ins><i class="icofont-star"></i> 4.5</ins>
														</div>
															<p>
															Quis autem velum iure reprehe nderit. Lorem ipsum dolor sit amet adipiscing egetmassa
	pulvinar eu aliquet nibh dapibus.
														</p>
													</div>
												</div>	
											</li>
											<li>
												<div class="comment-box">
													<div class="commenter-photo">
														<img alt="" src="images/resources/commenter-3.jpg">
													</div>
													<div class="commenter-meta">
														<div class="comment-titles">
															<h6>Olivia Take</h6>
															<span>15 jan 2016</span>
															<ins><i class="icofont-star"></i> 4.5</ins>
														</div>
														<p>
															Quis autem velum iure reprehe nderit. Lorem ipsum dolor sit amet adipiscing egetmassa
			pulvinar eu aliquet nibh dapibus.
														</p>
													</div>
												</div>	
											</li>
										</ul>
										<div class="add-comment">
											<span>Give Your Rating</span>
											<ul class="stars">
												<li><i class="icofont-star"></i></li>
												<li><i class="icofont-star"></i></li>
												<li><i class="icofont-star"></i></li>
												<li><i class="icofont-star"></i></li>
												<li><i class="icofont-star"></i></li>
											</ul>
											<form method="post" class="c-form">
												<input type="text" placeholder="Name">
												<input type="text" placeholder="Email">
												<textarea rows="4" placeholder="Write Message"></textarea>
												<button class="main-btn" type="submit">Add Review</button>
											</form>
										</div>
									</div>
								</div>
								<div class="main-wraper">
									<h4 class="main-title">Related Books <a class="view-all" href="#" title="">view all</a></h4>
									<div class="books-caro">
										<div class="book-post">
											<figure><a href="book-detail.html" title=""><img src="images/resources/book1.jpg" alt=""></a></figure>
											<a href="book-detail.html" title="">Html5 Brick Breaker</a>
										</div>
										<div class="book-post">
											<figure><a href="book-detail.html" title=""><img src="images/resources/book3.jpg" alt=""></a></figure>
											<a href="book-detail.html" title="">Python Tricks</a>
										</div>
										<div class="book-post">
											<figure><a href="book-detail.html" title=""><img src="images/resources/book5.jpg" alt=""></a></figure>
											<a href="book-detail.html" title="">Technology Wants</a>
										</div>
										<div class="book-post">
											<figure><a href="book-detail.html" title=""><img src="images/resources/book2.jpg" alt=""></a></figure>
											<a href="book-detail.html" title="">The Aesthetic Ideology</a>
										</div>
										<div class="book-post">
											<figure><a href="book-detail.html" title=""><img src="images/resources/book4.jpg" alt=""></a></figure>
											<a href="book-detail.html" title="">Holy Bible Old</a>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-3">
								<aside class="sidebar static right">
									<div class="widget">
										<h4 class="widget-title">Popular Books</h4>
										<div class="popular-book">
											<figure><img src="images/resources/book10.jpg" alt=""></figure>
											<div class="book-about">
												<h6><a href="#" title="">Vu.js 2 Basics</a></h6>
												<span>Richard Ali</span>
												<a href="#" title="Book Mark"><i class="">
<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bookmark"><path d="M19 21l-7-5-7 5V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2z"></path></svg></i></a>
											</div>
										</div>
										<div class="popular-book">
											<figure><img src="images/resources/book9.jpg" alt=""></figure>
											<div class="book-about">
												<h6><a href="#" title="">Css3 for Bigners</a></h6>
												<span>Richard Ali</span>
												<a href="#" title="Book Mark"><i class="">
<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bookmark"><path d="M19 21l-7-5-7 5V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2z"></path></svg></i></a>
											</div>
										</div>
										<div class="popular-book">
											<figure><img src="images/resources/book5.jpg" alt=""></figure>
											<div class="book-about">
												<h6><a href="#" title="">Technology Wants 2020</a></h6>
												<span>Richard Ali</span>
												<a href="#" title="Book Mark"><i class="">
<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bookmark"><path d="M19 21l-7-5-7 5V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2z"></path></svg></i></a>
											</div>
										</div>
									</div>
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