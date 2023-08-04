@extends("User_Dashboard.user_layout")
@section('main')
	
	<section>
		<div class="gap">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div id="page-contents" class="row merged20">
							<div class="col-lg-3">
								<aside class="sidebar static left">
									<div class="widget">
										<span><i class="icofont-globe"></i> Sponsored</span>
										<ul class="sponsors-ad">
											<li>
												<figure><img alt="" src="images/resources/sponsor.jpg"></figure>
												<div class="sponsor-meta">
													<h5><a title="" href="#">IQ Options Broker</a></h5>
													<a target="_blank" title="" href="#">www.iqvie.com</a>
												</div>
											</li>
											<li>
												<figure><img alt="" src="images/resources/sponsor2.jpg"></figure>
												<div class="sponsor-meta">
													<h5><a title="" href="#">BM Fashion Designer</a></h5>
													<a target="_blank" title="" href="#">www.abcd.com</a>
												</div>
											</li>
										</ul>
									</div>
									<div class="widget">
										<h4 class="widget-title">Your Groups</h4>
										<ul class="ak-groups">
											<li>
												<figure><img alt="" src="images/resources/your-group1.jpg"></figure>
												<div class="your-grp">
													<h5><a title="" href="group-detail.html">Good Group</a></h5>
													<a title="" href="#"><i class="icofont-bell-alt"></i>Notifilactions <span>13</span></a>
													<a class="promote" title="" href="group-feed.html">view feed</a>
												</div>
											</li>
											<li>
												<figure><img alt="" src="images/resources/your-group2.jpg"></figure>
												<div class="your-grp">
													<h5><a title="" href="group-detail.html">E-course Group</a></h5>
													<a title="" href="#"><i class="icofont-bell-alt"></i>Notifilactions <span>13</span></a>
													<a class="promote" title="" href="group-feed.html">view feed</a>
												</div>
											</li>
										</ul>
									</div>
									<div class="widget">
										<h4 class="widget-title">Suggested Group</h4>
										<div class="sug-caro">
											<div class="friend-box">
												<figure>
													<img alt="" src="images/resources/sidebar-info.jpg">
													<span>Members: 505K</span>
												</figure>
												<div class="frnd-meta">
													<img alt="" src="images/resources/frnd-figure2.jpg">
													<div class="frnd-name">
														<a title="" href="#">Social Research</a>
														<span>@biolabest</span>

													</div>
													<a class="main-btn2" href="#" title="">Join Community</a>
												</div>
											</div>
											<div class="friend-box">
												<figure>
													<img alt="" src="images/resources/sidebar-info2.jpg">
													<span>Members: 505K</span>
												</figure>
												<div class="frnd-meta">
													<img alt="" src="images/resources/frnd-figure3.jpg">
													<div class="frnd-name">
														<a title="" href="#">Bio Labest Group</a>
														<span>@biolabest</span>

													</div>
													<a class="main-btn2" href="#" title="">Join Community</a>
												</div>
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
									<div class="widget">
										<h4 class="widget-title">Group Terms</h4>
										<div class="grop-rules">
											<p>
												Hi! To ensure that this is a great place for everyone to have a wondefull time, we have some rules. Breaking them will result in a ban from the group.
											</p>
											<ol>
												<li><i class="icofont-dotted-right"></i> Be positive! Respect and help other viewers</li>
												<li><i class="icofont-dotted-right"></i> No insults, aggravations or any other bad languag</li>
												<li><i class="icofont-dotted-right"></i> No self promotions</li>
												<li><i class="icofont-dotted-right"></i> Avoid political or religious discussions</li>
												<li><i class="icofont-dotted-right"></i> No comment spamming</li>
											</ol>
										</div>
									</div>
									<div class="widget stick-widget">
										<h4 class="widget-title">Featured Universities <a class="see-all" href="#" title="">See All</a></h4>
										<ul class="featured-comp">
											<li>
											<a href="#" title="Color Hands inc" data-toggle="tooltip"><img src="images/resources/company1.png" alt=""></a>
											</li>
											<li>
											<a href="#" title="Macrosoft inc" data-toggle="tooltip"><img src="images/resources/company2.png" alt=""></a>
											</li>
											<li>
											<a href="#" title="EBM inc" data-toggle="tooltip"><img src="images/resources/company3.png" alt=""></a>
											</li>
											<li>
											<a href="#" title="Boogle inc" data-toggle="tooltip"><img src="images/resources/company4.png" alt=""></a>
											</li>
											<li>
											<a href="#" title="Color Hands inc" data-toggle="tooltip"><img src="images/resources/company5.png" alt=""></a>
											</li>
											<li>
											<a href="#" title="Macrosoft inc" data-toggle="tooltip"><img src="images/resources/company6.png" alt=""></a>
											</li>
											<li>
											<a href="#" title="EBM inc" data-toggle="tooltip"><img src="images/resources/company7.png" alt=""></a>
											</li>
											<li>
											<a href="#" title="Boogle inc" data-toggle="tooltip"><img src="images/resources/company8.png" alt=""></a>
											</li>
										</ul>
									</div><!-- feature universites logos -->
								</aside>
							</div>
							<div class="col-lg-9">
								<div class="group-feed">
									<div class="group-avatar">
										<img src="images/resources/group-profile.jpg" alt="">
										<a href="#" title=""><i class="icofont-check-circled"></i>Joined</a>
										<figure class="group-dp"><img src="images/resources/group-dp.jpg" alt=""></figure>
									</div>
									<div class="grp-info">
										<h4>Science World <span>@Educational</span></h4>
										
										<ul>
											<li><span>Created:</span> April 2020</li>
											<li><span>Members:</span> 55K</li>
											<li><span>Posts:</span> 932</li>
											<li><span>Followers:</span> 2.2K</li>
										</ul>
										<ul class="more-grp-info">
											<li>
												<form class="c-form" method="post">
													<input type="text" placeholder="search Group">
													<i class="icofont-search-1"></i>
												</form>
											</li>
											<li>
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
											</li>
										</ul>
									</div>
									<div class="main-wraper">
										<div class="grp-about">
											<div class="row">
												<div class="col-lg-8">
													<h4>Info</h4>
													<p>Hi! And welcome to the group! for those who just join us, we invite you to our Discord official channel, where we talk about vidplays, conventions, DIY, costume tips and more!</p>
												</div>
												<div class="col-lg-4">
													<div class="share-article">
														<span>share this Group</span>
														<a href="#" title="" class="facebook"><i class="icofont-facebook"></i></a>
														<a href="#" title="" class="pinterest"><i class="icofont-pinterest"></i></a>
														<a href="#" title="" class="instagram"><i class="icofont-instagram"></i></a>
														<a href="#" title="" class="twitter"><i class="icofont-twitter"></i></a>
														<a href="#" title="" class="google"><i class="icofont-google-plus"></i></a>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-lg-8">
											<div class="main-wraper">
												<span class="new-title">Create New Post</span>
												<div class="new-post">
													<form method="post">
														<i class="icofont-pen-alt-1"></i>
														<input type="text" placeholder="Create New Post">
													</form>
													<ul class="upload-media">
														<li>
															<i><img src="images/image.png" alt=""></i>
															<span>Photo/Video</span>
														</li>
														<li>
															<i><img src="images/activity.png" alt=""></i>
															<span>Feeling/Activity</span>
														</li>
														<li>
															<i><img src="images/live-stream.png" alt=""></i>
															<span>Live Stream</span>
														</li>
													</ul>
												</div>
											</div><!-- create new post -->
											<div class="main-wraper">
												<div class="chatroom-title">
													<i>
			<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-tv"><rect x="2" y="7" width="20" height="15" rx="2" ry="2"></rect><polyline points="17 2 12 7 7 2"></polyline></svg></i>
													<span>Chat Rooms <em>Video chat with friends</em></span>
													<a class="create-newroom" href="#" title="">Create Room</a>
												</div>
												<ul class="chat-rooms">
													<li>
														<div class="room-avatar">
															<img src="images/resources/user2.jpg" alt="">
															<span class="status online"></span>
														</div>
														<span>Sara's Room</span>
														<a class="join" href="#" title="Join Room">Join</a>
														<a class="say-hi send-mesg" href="#" title="Send Message"><i class="icofont-facebook-messenger"></i></a>
													</li>
													<li>
														<div class="room-avatar">
															<img src="images/resources/user3.jpg" alt="">
															<span class="status offline"></span>
														</div>
														<span>jawad's Room</span>
														<a class="join" href="#" title="Join Room">Join</a>
														<a class="say-hi send-mesg" href="#" title="Send Message"><i class="icofont-facebook-messenger"></i></a>
													</li>
													<li>
														<div class="room-avatar">
															<img src="images/resources/user4.jpg" alt="">
															<span class="status away"></span>
														</div>
														<span>Jack's Room</span>
														<a class="join" href="#" title="Join Room">Join</a>
														<a class="say-hi send-mesg" href="#" title="Send Message"><i class="icofont-facebook-messenger"></i></a>
													</li>
													<li>
														<div class="room-avatar">
															<img src="images/resources/user5.jpg" alt="">
															<span class="status online"></span>
														</div>
														<span>jobidn's Room</span>
														<a class="join" href="#" title="Join Room">Join</a>
														<a class="say-hi send-mesg" href="#" title="Send Message"><i class="icofont-facebook-messenger"></i></a>
													</li>
													<li>
														<div class="room-avatar">
															<img src="images/resources/user6.jpg" alt="">
															<span class="status offline"></span>
														</div>
														<span>Emily's Room</span>
														<a class="join" href="#" title="Join Room">Join</a>
														<a class="say-hi send-mesg" href="#" title="Send Message"><i class="icofont-facebook-messenger"></i></a>
													</li>
												</ul>
											</div><!-- chat rooms -->
											<div class="main-wraper">
												<div class="user-post">
													<div class="friend-info">
														<figure>
															<i class="icofont-learn"></i>
														</figure>
														<div class="friend-name">
															<ins><a title="" href="time-line.html">Suggested</a></ins>
															<span><i class="icofont-runner-alt-1"></i> Follow similar People</span>
														</div>
														<ul class="suggested-caro">
															<li>
																<figure><img src="images/resources/speak-1.jpg" alt=""></figure>
																<span>Amy Watson</span>
																<ins>Department of Socilolgy</ins>
																<a href="#" title="" data-ripple=""><i class="icofont-star"></i> Follow</a>
															</li>
															<li>
																<figure><img src="images/resources/speak-2.jpg" alt=""></figure>
																<span>Muhammad Khan</span>
																<ins>Department of Socilolgy</ins>
																<a href="#" title="" data-ripple=""><i class="icofont-star"></i> Follow</a>
															</li>
															<li>
																<figure><img src="images/resources/speak-3.jpg" alt=""></figure>
																<span>Sadia Gill</span>
																<ins>Department of Socilolgy</ins>
																<a href="#" title="" data-ripple=""><i class="icofont-star"></i> Follow</a>
															</li>
														</ul>
													</div>
												</div>
											</div><!-- suggested friends -->
											<div class="main-wraper">
												<div class="user-post">
													<div class="friend-info">
														<figure>
															<img alt="" src="images/resources/user1.jpg">
														</figure>
														<div class="friend-name">
															<div class="more">
																<div class="more-post-optns">
																	<i class="">
			<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal"><circle cx="12" cy="12" r="1"></circle><circle cx="19" cy="12" r="1"></circle><circle cx="5" cy="12" r="1"></circle></svg></i>
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
															<ins><a title="" href="time-line.html">Jack Carter</a> Share Post</ins>
															<span><i class="icofont-globe"></i> published: Sep,15 2020</span>
														</div>
														<div class="post-meta">
															<a href="post-detail.html" class="post-title">Supervision as a Personnel Development Device</a>
															<p>
																Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero.
															</p>
															<div class="we-video-info">
																<ul>
																	<li>
																		<span title="views" class="views">
																			<i>
			<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg></i>
																			<ins>1.2k</ins>
																		</span>
																	</li>
																	<li>
																		<span title="Comments" class="Recommend">
																			<i>
			<svg class="feather feather-message-square" stroke-linejoin="round" stroke-linecap="round" stroke-width="2" stroke="currentColor" fill="none" viewBox="0 0 24 24" height="16" width="16" xmlns="http://www.w3.org/2000/svg"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/></svg></i>
																			<ins>54</ins>
																		</span>

																	</li>
																	<li>
																		<span title="follow" class="Follow">
																			<i>
			<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg></i>
																		<ins>5k</ins>	
																		</span>
																	</li>
																	<li>
																		<span class="share-pst" title="Share">
																			<i>
			<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-share-2"><circle cx="18" cy="5" r="3"></circle><circle cx="6" cy="12" r="3"></circle><circle cx="18" cy="19" r="3"></circle><line x1="8.59" y1="13.51" x2="15.42" y2="17.49"></line><line x1="15.41" y1="6.51" x2="8.59" y2="10.49"></line></svg></i>
																		<ins>205</ins>
																		</span>	
																	</li>
																</ul>
																<a href="post-detail.html" title="" class="reply">Reply <i class="icofont-reply"></i></a>
															</div>
															<div class="stat-tools">
																<div class="box">
																  <div class="Like"><a class="Like__link"><i class="icofont-like"></i> Like</a>
																	<div class="Emojis">
																	  <div class="Emoji Emoji--like">
																		<div class="icon icon--like"></div>
																	  </div>
																	  <div class="Emoji Emoji--love">
																		<div class="icon icon--heart"></div>
																	  </div>
																	  <div class="Emoji Emoji--haha">
																		<div class="icon icon--haha"></div>
																	  </div>
																	  <div class="Emoji Emoji--wow">
																		<div class="icon icon--wow"></div>
																	  </div>
																	  <div class="Emoji Emoji--sad">
																		<div class="icon icon--sad"></div>
																	  </div>
																	  <div class="Emoji Emoji--angry">
																		<div class="icon icon--angry"></div>
																	  </div>
																	</div>
																  </div>
																</div>
																<div class="box">
																	<div class="Emojis">
																	  <div class="Emoji Emoji--like">
																		<div class="icon icon--like"></div>
																	  </div>
																	  <div class="Emoji Emoji--love">
																		<div class="icon icon--heart"></div>
																	  </div>
																	  <div class="Emoji Emoji--haha">
																		<div class="icon icon--haha"></div>
																	  </div>
																	  <div class="Emoji Emoji--wow">
																		<div class="icon icon--wow"></div>
																	  </div>
																	  <div class="Emoji Emoji--sad">
																		<div class="icon icon--sad"></div>
																	  </div>
																	  <div class="Emoji Emoji--angry">
																		<div class="icon icon--angry"></div>
																	  </div>
																	</div>
																  </div>
																<a title="" href="#" class="comment-to"><i class="icofont-comment"></i> Comment</a>
																<a title="" href="#" class="share-to"><i class="icofont-share-alt"></i> Share</a>
																<div class="emoji-state">
																	<div class="popover_wrapper">
																		<a class="popover_title" href="#" title=""><img alt="" src="images/smiles/thumb.png"></a>
																		<div class="popover_content">
																			<span><img alt="" src="images/smiles/thumb.png"> Likes</span>
																			<ul class="namelist">
																				<li>Jhon Doe</li>
																				<li>Amara Sin</li>
																				<li>Sarah K.</li>
																				<li><span>20+ more</span></li>
																			</ul>
																		</div>
																	</div>
																	<div class="popover_wrapper">
																		<a class="popover_title" href="#" title=""><img alt="" src="images/smiles/heart.png"></a>
																		<div class="popover_content">
																			<span><img alt="" src="images/smiles/heart.png"> Love</span>
																			<ul class="namelist">
																				<li>Amara Sin</li>
																				<li>Jhon Doe</li>
																				<li><span>10+ more</span></li>
																			</ul>
																		</div>
																	</div>
																	<div class="popover_wrapper">
																		<a class="popover_title" href="#" title=""><img alt="" src="images/smiles/smile.png"></a>
																		<div class="popover_content">
																			<span><img alt="" src="images/smiles/smile.png"> Happy</span>
																			<ul class="namelist">
																				<li>Sarah K.</li>
																				<li>Jhon Doe</li>
																				<li>Amara Sin</li>
																				<li><span>100+ more</span></li>
																			</ul>
																		</div>
																	</div>
																	<div class="popover_wrapper">
																		<a class="popover_title" href="#" title=""><img alt="" src="images/smiles/weep.png"></a>
																		<div class="popover_content">
																			<span><img alt="" src="images/smiles/weep.png"> Dislike</span>
																			<ul class="namelist">
																				<li>Danial Carbal</li>
																				<li>Amara Sin</li>
																				<li>Sarah K.</li>
																				<li><span>15+ more</span></li>
																			</ul>
																		</div>
																	</div>
																	<p>10+</p>
																</div>
																<div class="new-comment" style="display: none;">
																	<form method="post">
																		<input type="text" placeholder="write comment">
																		<button type="submit"><i class="icofont-paper-plane"></i></button>
																	</form>
																	<div class="comments-area">
																		<ul>
																			<li>
																				<figure><img alt="" src="images/resources/user1.jpg"></figure>
																				<div class="commenter">
																					<h5><a title="" href="#">Jack Carter</a></h5>
																					<span>2 hours ago</span>
																					<p>
																						i think that some how, we learn who we really are and then live with that decision, great post!
																					</p>
																					<span>you can view the more detail via link</span>
																					<a title="" href="https://www.youtube.com/watch?v=HpZgwHU1GcI" target="_blank">https://www.youtube.com/watch?v=HpZgwHU1GcI</a>
																				</div>
																				<a title="Like" href="#"><i class="icofont-heart"></i></a>
																				<a title="Reply" href="#" class="reply-coment"><i class="icofont-reply"></i></a>
																			</li>
																			<li>
																				<figure><img alt="" src="images/resources/user2.jpg"></figure>
																				<div class="commenter">
																					<h5><a title="" href="#">Ching xang</a></h5>
																					<span>2 hours ago</span>
																					<p>
																						i think that some how, we learn who we really are and then live with that decision, great post!
																					</p>
																				</div>
																				<a title="Like" href="#"><i class="icofont-heart"></i></a>
																				<a title="Reply" href="#" class="reply-coment"><i class="icofont-reply"></i></a>
																			</li>
																		</ul>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div><!-- share post without image -->
											<div class="main-wraper">
												<div class="user-post">
													<div class="friend-info">
														<figure>
															<img alt="" src="images/resources/user2.jpg">
														</figure>
														<div class="friend-name">
															<div class="more">
																<div class="more-post-optns">
																	<i class="">
			<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal"><circle cx="12" cy="12" r="1"></circle><circle cx="19" cy="12" r="1"></circle><circle cx="5" cy="12" r="1"></circle></svg></i>
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
															<ins><a title="" href="time-line.html">Maria k.</a> Premium Product</ins>
															<span><i class="icofont-globe"></i> published: Sep,15 2020</span>
														</div>
														<div class="post-meta">
															<figure class="premium-post"><img src="images/resources/book5.jpg" alt=""></figure>
															<div class="premium">
																<a href="book-detail.html" class="post-title">Technicial words 2020 Book world</a>
																<p>
																	Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero.
																</p>
																<a class="main-btn purchase-btn" title="" href="book-detail.html"><i class="icofont-cart-alt"></i> Buy Now</a>
															</div>
															<div class="we-video-info">
																<ul>
																	<li>
																		<span title="views" class="views">
																			<i>
			<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg></i>
																			<ins>1.2k</ins>
																		</span>
																	</li>
																	<li>
																		<span title="Comments" class="Recommend">
																			<i>
			<svg class="feather feather-message-square" stroke-linejoin="round" stroke-linecap="round" stroke-width="2" stroke="currentColor" fill="none" viewBox="0 0 24 24" height="16" width="16" xmlns="http://www.w3.org/2000/svg"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/></svg></i>
																			<ins>54</ins>
																		</span>

																	</li>
																	<li>
																		<span title="follow" class="Follow">
																			<i>
			<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg></i>
																		<ins>5k</ins>	
																		</span>
																	</li>
																	<li>
																		<span class="share-pst" title="Share">
																			<i>
			<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-share-2"><circle cx="18" cy="5" r="3"></circle><circle cx="6" cy="12" r="3"></circle><circle cx="18" cy="19" r="3"></circle><line x1="8.59" y1="13.51" x2="15.42" y2="17.49"></line><line x1="15.41" y1="6.51" x2="8.59" y2="10.49"></line></svg></i>
																		<ins>205</ins>
																		</span>	
																	</li>
																</ul>
																<a href="post-detail.html" title="" class="reply">Reply <i class="icofont-reply"></i></a>
															</div>
															<div class="stat-tools">
																<div class="box">
																  <div class="Like"><a class="Like__link"><i class="icofont-like"></i> Like</a>
																	<div class="Emojis">
																	  <div class="Emoji Emoji--like">
																		<div class="icon icon--like"></div>
																	  </div>
																	  <div class="Emoji Emoji--love">
																		<div class="icon icon--heart"></div>
																	  </div>
																	  <div class="Emoji Emoji--haha">
																		<div class="icon icon--haha"></div>
																	  </div>
																	  <div class="Emoji Emoji--wow">
																		<div class="icon icon--wow"></div>
																	  </div>
																	  <div class="Emoji Emoji--sad">
																		<div class="icon icon--sad"></div>
																	  </div>
																	  <div class="Emoji Emoji--angry">
																		<div class="icon icon--angry"></div>
																	  </div>
																	</div>
																  </div>
																</div>
																<div class="box">
																	<div class="Emojis">
																	  <div class="Emoji Emoji--like">
																		<div class="icon icon--like"></div>
																	  </div>
																	  <div class="Emoji Emoji--love">
																		<div class="icon icon--heart"></div>
																	  </div>
																	  <div class="Emoji Emoji--haha">
																		<div class="icon icon--haha"></div>
																	  </div>
																	  <div class="Emoji Emoji--wow">
																		<div class="icon icon--wow"></div>
																	  </div>
																	  <div class="Emoji Emoji--sad">
																		<div class="icon icon--sad"></div>
																	  </div>
																	  <div class="Emoji Emoji--angry">
																		<div class="icon icon--angry"></div>
																	  </div>
																	</div>
																  </div>
																<a title="" href="#" class="comment-to"><i class="icofont-comment"></i> Comment</a>
																<a title="" href="#" class="share-to"><i class="icofont-share-alt"></i> Share</a>
																<div class="emoji-state">
																	<div class="popover_wrapper">
																		<a class="popover_title" href="#" title=""><img alt="" src="images/smiles/thumb.png"></a>
																		<div class="popover_content">
																			<span><img alt="" src="images/smiles/thumb.png"> Likes</span>
																			<ul class="namelist">
																				<li>Jhon Doe</li>
																				<li>Amara Sin</li>
																				<li>Sarah K.</li>
																				<li><span>20+ more</span></li>
																			</ul>
																		</div>
																	</div>
																	<div class="popover_wrapper">
																		<a class="popover_title" href="#" title=""><img alt="" src="images/smiles/heart.png"></a>
																		<div class="popover_content">
																			<span><img alt="" src="images/smiles/heart.png"> Love</span>
																			<ul class="namelist">
																				<li>Amara Sin</li>
																				<li>Jhon Doe</li>
																				<li><span>10+ more</span></li>
																			</ul>
																		</div>
																	</div>
																	<div class="popover_wrapper">
																		<a class="popover_title" href="#" title=""><img alt="" src="images/smiles/smile.png"></a>
																		<div class="popover_content">
																			<span><img alt="" src="images/smiles/smile.png"> Happy</span>
																			<ul class="namelist">
																				<li>Sarah K.</li>
																				<li>Jhon Doe</li>
																				<li>Amara Sin</li>
																				<li><span>100+ more</span></li>
																			</ul>
																		</div>
																	</div>
																	<div class="popover_wrapper">
																		<a class="popover_title" href="#" title=""><img alt="" src="images/smiles/weep.png"></a>
																		<div class="popover_content">
																			<span><img alt="" src="images/smiles/weep.png"> Dislike</span>
																			<ul class="namelist">
																				<li>Danial Carbal</li>
																				<li>Amara Sin</li>
																				<li>Sarah K.</li>
																				<li><span>15+ more</span></li>
																			</ul>
																		</div>
																	</div>
																	<p>10+</p>
																</div>
																<div class="new-comment" style="display: block;">
																	<form method="post">
																		<input type="text" placeholder="write comment">
																		<button type="submit"><i class="icofont-paper-plane"></i></button>
																	</form>
																	<div class="comments-area">
																		<ul>
																			<li>
																				<figure><img alt="" src="images/resources/user1.jpg"></figure>
																				<div class="commenter">
																					<h5><a title="" href="#">Jack Carter</a></h5>
																					<span>2 hours ago</span>
																					<p>
																						i think that some how, we learn who we really are and then live with that decision, great post!
																					</p>
																					<span>you can view the more detail via link</span>
																					<a title="" href="#">https://www.youtube.com/watch?v=HpZgwHU1GcI</a>
																				</div>
																				<a title="Like" href="#"><i class="icofont-heart"></i></a>
																				<a title="Reply" href="#" class="reply-coment"><i class="icofont-reply"></i></a>
																			</li>
																			<li>
																				<figure><img alt="" src="images/resources/user2.jpg"></figure>
																				<div class="commenter">
																					<h5><a title="" href="#">Ching xang</a></h5>
																					<span>2 hours ago</span>
																					<p>
																						i think that some how, we learn who we really are and then live with that decision, great post!
																					</p>
																				</div>
																				<a title="Like" href="#"><i class="icofont-heart"></i></a>
																				<a title="Reply" href="#" class="reply-coment"><i class="icofont-reply"></i></a>
																			</li>
																		</ul>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div><!-- post sell book -->
											<div class="main-wraper">
												<div class="wraper-title">
													<span><i class="icofont-video-alt"></i> Videos Play List</span>
													<a href="videos.html" title="">See all Videos</a>
												</div>
												<div class="videos-caro">
													<div class="item-video" data-merge="2">
														<a class="owl-video" href="https://www.youtube.com/watch?v=8iZTb9NWbz8"></a>
														<div class="posted-user">
															<img src="images/resources/user4.jpg" alt="">
															<span>Frank J.</span>
														</div>
														<div class="vid-info">
															<span>1 year ago</span>
															<span><i class="icofont-eye-open"></i> 3.1k</span>
														</div>
													</div>
													<div class="item-video" data-merge="2">
														<a class="owl-video" href="https://www.youtube.com/watch?v=8itUNRIWVIs"></a>
														<div class="posted-user">
															<img src="images/resources/user2.jpg" alt="">
															<span>Maria K.</span>
														</div>
														<div class="vid-info">
															<span>2 weeks ago</span>
															<span><i class="icofont-eye-open"></i> 1.1k</span>
														</div>
													</div>
													<div class="item-video" data-merge="2">
														<a class="owl-video" href="https://www.youtube.com/watch?v=JpxsRwnRwCQ"></a> 
														<div class="posted-user">
															<img src="images/resources/user1.jpg" alt="">
															<span>Jack Carter</span>
														</div>
														<div class="vid-info">
															<span>4 weeks ago</span>
															<span><i class="icofont-eye-open"></i> 20k</span>
														</div>
													</div>
													<div class="item-video" data-merge="2">
														<a class="owl-video" href="https://www.youtube.com/watch?v=WNeLUngb-Xg"></a>
														<div class="posted-user">
															<img src="images/resources/user3.jpg" alt="">
															<span>Fawad Jan</span>
														</div>
														<div class="vid-info">
															<span>1 Month ago</span>
															<span><i class="icofont-eye-open"></i> 8k</span>
														</div>
													</div>

												</div>
											</div><!-- video playlist carousel -->
											<div class="main-wraper">
												<div class="user-post">
													<div class="friend-info">
														<figure>
															<img alt="" src="images/resources/user3.jpg">
														</figure>
														<div class="friend-name">
															<div class="more">
																<div class="more-post-optns">
																	<i class="">
			<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal"><circle cx="12" cy="12" r="1"></circle><circle cx="19" cy="12" r="1"></circle><circle cx="5" cy="12" r="1"></circle></svg></i>
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
															<ins><a title="" href="time-line.html">Turgut Alp</a> Create Post</ins>
															<span><i class="icofont-globe"></i> published: Sep,15 2020</span>
														</div>
														<div class="post-meta">
															<figure>
																<a data-toggle="modal" data-target="#img-comt" href="images/resources/album1.jpg">
																	<img src="images/resources/study.jpg" alt="">
																</a>	
															</figure>
															<a href="post-detail.html" class="post-title">Supervision as a Personnel Development Device</a>
															<p>
																Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero.
															</p>
															<div class="we-video-info">
																<ul>
																	<li>
																		<span title="views" class="views">
																			<i>
			<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg></i>
																			<ins>1.2k</ins>
																		</span>
																	</li>
																	<li>
																		<span title="Comments" class="Recommend">
																			<i>
			<svg class="feather feather-message-square" stroke-linejoin="round" stroke-linecap="round" stroke-width="2" stroke="currentColor" fill="none" viewBox="0 0 24 24" height="16" width="16" xmlns="http://www.w3.org/2000/svg"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/></svg></i>
																			<ins>54</ins>
																		</span>

																	</li>
																	<li>
																		<span title="follow" class="Follow">
																			<i>
			<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg></i>
																		<ins>5k</ins>	
																		</span>
																	</li>
																	<li>
																		<span class="share-pst" title="Share">
																			<i>
			<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-share-2"><circle cx="18" cy="5" r="3"></circle><circle cx="6" cy="12" r="3"></circle><circle cx="18" cy="19" r="3"></circle><line x1="8.59" y1="13.51" x2="15.42" y2="17.49"></line><line x1="15.41" y1="6.51" x2="8.59" y2="10.49"></line></svg></i>
																		<ins>205</ins>
																		</span>	
																	</li>
																</ul>
																<a href="post-detail.html" title="" class="reply">Reply <i class="icofont-reply"></i></a>
															</div>
															<div class="stat-tools">
																<div class="box">
																  <div class="Like"><a class="Like__link"><i class="icofont-like"></i> Like</a>
																	<div class="Emojis">
																	  <div class="Emoji Emoji--like">
																		<div class="icon icon--like"></div>
																	  </div>
																	  <div class="Emoji Emoji--love">
																		<div class="icon icon--heart"></div>
																	  </div>
																	  <div class="Emoji Emoji--haha">
																		<div class="icon icon--haha"></div>
																	  </div>
																	  <div class="Emoji Emoji--wow">
																		<div class="icon icon--wow"></div>
																	  </div>
																	  <div class="Emoji Emoji--sad">
																		<div class="icon icon--sad"></div>
																	  </div>
																	  <div class="Emoji Emoji--angry">
																		<div class="icon icon--angry"></div>
																	  </div>
																	</div>
																  </div>
																</div>
																<div class="box">
																	<div class="Emojis">
																	  <div class="Emoji Emoji--like">
																		<div class="icon icon--like"></div>
																	  </div>
																	  <div class="Emoji Emoji--love">
																		<div class="icon icon--heart"></div>
																	  </div>
																	  <div class="Emoji Emoji--haha">
																		<div class="icon icon--haha"></div>
																	  </div>
																	  <div class="Emoji Emoji--wow">
																		<div class="icon icon--wow"></div>
																	  </div>
																	  <div class="Emoji Emoji--sad">
																		<div class="icon icon--sad"></div>
																	  </div>
																	  <div class="Emoji Emoji--angry">
																		<div class="icon icon--angry"></div>
																	  </div>
																	</div>
																  </div>
																<a title="" href="#" class="comment-to"><i class="icofont-comment"></i> Comment</a>
																<a title="" href="#" class="share-to"><i class="icofont-share-alt"></i> Share</a>
																<div class="emoji-state">
																	<div class="popover_wrapper">
																		<a class="popover_title" href="#" title=""><img alt="" src="images/smiles/thumb.png"></a>
																		<div class="popover_content">
																			<span><img alt="" src="images/smiles/thumb.png"> Likes</span>
																			<ul class="namelist">
																				<li>Jhon Doe</li>
																				<li>Amara Sin</li>
																				<li>Sarah K.</li>
																				<li><span>20+ more</span></li>
																			</ul>
																		</div>
																	</div>
																	<div class="popover_wrapper">
																		<a class="popover_title" href="#" title=""><img alt="" src="images/smiles/heart.png"></a>
																		<div class="popover_content">
																			<span><img alt="" src="images/smiles/heart.png"> Love</span>
																			<ul class="namelist">
																				<li>Amara Sin</li>
																				<li>Jhon Doe</li>
																				<li><span>10+ more</span></li>
																			</ul>
																		</div>
																	</div>
																	<div class="popover_wrapper">
																		<a class="popover_title" href="#" title=""><img alt="" src="images/smiles/smile.png"></a>
																		<div class="popover_content">
																			<span><img alt="" src="images/smiles/smile.png"> Happy</span>
																			<ul class="namelist">
																				<li>Sarah K.</li>
																				<li>Jhon Doe</li>
																				<li>Amara Sin</li>
																				<li><span>100+ more</span></li>
																			</ul>
																		</div>
																	</div>
																	<div class="popover_wrapper">
																		<a class="popover_title" href="#" title=""><img alt="" src="images/smiles/weep.png"></a>
																		<div class="popover_content">
																			<span><img alt="" src="images/smiles/weep.png"> Dislike</span>
																			<ul class="namelist">
																				<li>Danial Carbal</li>
																				<li>Amara Sin</li>
																				<li>Sarah K.</li>
																				<li><span>15+ more</span></li>
																			</ul>
																		</div>
																	</div>
																	<p>30+</p>
																</div>
																<div class="new-comment" style="display: none;">
																	<form method="post">
																		<input type="text" placeholder="write comment">
																		<button type="submit"><i class="icofont-paper-plane"></i></button>
																	</form>
																	<div class="comments-area">
																		<ul>
																			<li>
																				<figure><img alt="" src="images/resources/user1.jpg"></figure>
																				<div class="commenter">
																					<h5><a title="" href="#">Jack Carter</a></h5>
																					<span>2 hours ago</span>
																					<p>
																						i think that some how, we learn who we really are and then live with that decision, great post!
																					</p>
																					<span>you can view the more detail via link</span>
																					<a title="" href="#">https://www.youtube.com/watch?v=HpZgwHU1GcI</a>
																				</div>
																				<a title="Like" href="#"><i class="icofont-heart"></i></a>
																				<a title="Reply" href="#" class="reply-coment"><i class="icofont-reply"></i></a>
																			</li>
																			<li>
																				<figure><img alt="" src="images/resources/user2.jpg"></figure>
																				<div class="commenter">
																					<h5><a title="" href="#">Ching xang</a></h5>
																					<span>2 hours ago</span>
																					<p>
																						i think that some how, we learn who we really are and then live with that decision, great post!
																					</p>
																				</div>
																				<a title="Like" href="#"><i class="icofont-heart"></i></a>
																				<a title="Reply" href="#" class="reply-coment"><i class="icofont-reply"></i></a>
																			</li>
																		</ul>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div><!-- share image with post -->
											<div class="main-wraper">
												<div class="user-post">
													<div class="friend-info">
														<figure>
															<img alt="" src="images/resources/user4.jpg">
														</figure>
														<div class="friend-name">
															<div class="more">
																<div class="more-post-optns">
																	<i class="">
			<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal"><circle cx="12" cy="12" r="1"></circle><circle cx="19" cy="12" r="1"></circle><circle cx="5" cy="12" r="1"></circle></svg></i>
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
															<ins><a title="" href="time-line.html">Saim turan</a> added image album</ins>
															<span><i class="icofont-globe"></i> published: Sep,15 2020</span>
														</div>
														<div class="post-meta">
															<figure>
																<div class="img-bunch">
																	<div class="row">
																		<div class="col-lg-6 col-md-6 col-sm-6">
																			<figure>
																				<a data-toggle="modal" data-target="#img-comt" href="images/resources/album1.jpg">
																					<img src="images/resources/album1.jpg" alt="">
																				</a>
																			</figure>
																			<figure>
																				<a data-toggle="modal" data-target="#img-comt" href="images/resources/album2.jpg"><img src="images/resources/album2.jpg" alt="">
																				</a>
																			</figure>
																		</div>
																		<div class="col-lg-6 col-md-6 col-sm-6">
																			<figure>
																				<a data-toggle="modal" data-target="#img-comt" href="images/resources/album6.jpg"><img src="images/resources/album6.jpg" alt="">
																				</a>
																			</figure>
																			<figure>
																				<a data-toggle="modal" data-target="#img-comt" href="images/resources/album5.jpg"><img src="images/resources/album5.jpg" alt="">
																				</a>
																			</figure>
																			<figure>
																				<a data-toggle="modal" data-target="#img-comt" href="images/resources/album4.jpg"><img src="images/resources/album4.jpg" alt="">
																				</a>
																				<div class="more-photos">
																					<span>+15</span>
																				</div>
																			</figure>
																		</div>
																	</div>
																</div>	
															</figure>
															<a href="post-detail.html" class="post-title">Supervision as a Personnel Development Device</a>
															<p>
																Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero.
															</p>
															<div class="we-video-info">
																<ul>
																	<li>
																		<span title="views" class="views">
																			<i>
			<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg></i>
																			<ins>1.2k</ins>
																		</span>
																	</li>
																	<li>
																		<span title="Comments" class="Recommend">
																			<i>
			<svg class="feather feather-message-square" stroke-linejoin="round" stroke-linecap="round" stroke-width="2" stroke="currentColor" fill="none" viewBox="0 0 24 24" height="16" width="16" xmlns="http://www.w3.org/2000/svg"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/></svg></i>
																			<ins>54</ins>
																		</span>

																	</li>
																	<li>
																		<span title="follow" class="Follow">
																			<i>
			<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg></i>
																		<ins>5k</ins>	
																		</span>
																	</li>
																	<li>
																		<span class="share-pst" title="Share">
																			<i>
			<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-share-2"><circle cx="18" cy="5" r="3"></circle><circle cx="6" cy="12" r="3"></circle><circle cx="18" cy="19" r="3"></circle><line x1="8.59" y1="13.51" x2="15.42" y2="17.49"></line><line x1="15.41" y1="6.51" x2="8.59" y2="10.49"></line></svg></i>
																		<ins>205</ins>
																		</span>	
																	</li>
																</ul>
																<a href="post-detail.html" title="" class="reply">Reply <i class="icofont-reply"></i></a>
															</div>
															<div class="stat-tools">
																<div class="box">
																  <div class="Like"><a class="Like__link"><i class="icofont-like"></i> Like</a>
																	<div class="Emojis">
																	  <div class="Emoji Emoji--like">
																		<div class="icon icon--like"></div>
																	  </div>
																	  <div class="Emoji Emoji--love">
																		<div class="icon icon--heart"></div>
																	  </div>
																	  <div class="Emoji Emoji--haha">
																		<div class="icon icon--haha"></div>
																	  </div>
																	  <div class="Emoji Emoji--wow">
																		<div class="icon icon--wow"></div>
																	  </div>
																	  <div class="Emoji Emoji--sad">
																		<div class="icon icon--sad"></div>
																	  </div>
																	  <div class="Emoji Emoji--angry">
																		<div class="icon icon--angry"></div>
																	  </div>
																	</div>
																  </div>
																</div>
																<div class="box">
																	<div class="Emojis">
																	  <div class="Emoji Emoji--like">
																		<div class="icon icon--like"></div>
																	  </div>
																	  <div class="Emoji Emoji--love">
																		<div class="icon icon--heart"></div>
																	  </div>
																	  <div class="Emoji Emoji--haha">
																		<div class="icon icon--haha"></div>
																	  </div>
																	  <div class="Emoji Emoji--wow">
																		<div class="icon icon--wow"></div>
																	  </div>
																	  <div class="Emoji Emoji--sad">
																		<div class="icon icon--sad"></div>
																	  </div>
																	  <div class="Emoji Emoji--angry">
																		<div class="icon icon--angry"></div>
																	  </div>
																	</div>
																  </div>
																<a title="" href="#" class="comment-to"><i class="icofont-comment"></i> Comment</a>
																<a title="" href="#" class="share-to"><i class="icofont-share-alt"></i> Share</a>
																<div class="emoji-state">
																	<div class="popover_wrapper">
																		<a class="popover_title" href="#" title=""><img alt="" src="images/smiles/thumb.png"></a>
																		<div class="popover_content">
																			<span><img alt="" src="images/smiles/thumb.png"> Likes</span>
																			<ul class="namelist">
																				<li>Jhon Doe</li>
																				<li>Amara Sin</li>
																				<li>Sarah K.</li>
																				<li><span>20+ more</span></li>
																			</ul>
																		</div>
																	</div>
																	<div class="popover_wrapper">
																		<a class="popover_title" href="#" title=""><img alt="" src="images/smiles/heart.png"></a>
																		<div class="popover_content">
																			<span><img alt="" src="images/smiles/heart.png"> Love</span>
																			<ul class="namelist">
																				<li>Amara Sin</li>
																				<li>Jhon Doe</li>
																				<li><span>10+ more</span></li>
																			</ul>
																		</div>
																	</div>
																	<div class="popover_wrapper">
																		<a class="popover_title" href="#" title=""><img alt="" src="images/smiles/smile.png"></a>
																		<div class="popover_content">
																			<span><img alt="" src="images/smiles/smile.png"> Happy</span>
																			<ul class="namelist">
																				<li>Sarah K.</li>
																				<li>Jhon Doe</li>
																				<li>Amara Sin</li>
																				<li><span>100+ more</span></li>
																			</ul>
																		</div>
																	</div>
																	<div class="popover_wrapper">
																		<a class="popover_title" href="#" title=""><img alt="" src="images/smiles/weep.png"></a>
																		<div class="popover_content">
																			<span><img alt="" src="images/smiles/weep.png"> Dislike</span>
																			<ul class="namelist">
																				<li>Danial Carbal</li>
																				<li>Amara Sin</li>
																				<li>Sarah K.</li>
																				<li><span>15+ more</span></li>
																			</ul>
																		</div>
																	</div>
																	<p>50+</p>
																</div>
																<div class="new-comment" style="display: none;">
																	<form method="post">
																		<input type="text" placeholder="write comment">
																		<button type="submit"><i class="icofont-paper-plane"></i></button>
																	</form>
																	<div class="comments-area">
																		<ul>
																			<li>
																				<figure><img alt="" src="images/resources/user1.jpg"></figure>
																				<div class="commenter">
																					<h5><a title="" href="#">Jack Carter</a></h5>
																					<span>2 hours ago</span>
																					<p>
																						i think that some how, we learn who we really are and then live with that decision, great post!
																					</p>
																					<span>you can view the more detail via link</span>
																					<a title="" href="#">https://www.youtube.com/watch?v=HpZgwHU1GcI</a>
																				</div>
																				<a title="Like" href="#"><i class="icofont-heart"></i></a>
																				<a title="Reply" href="#" class="reply-coment"><i class="icofont-reply"></i></a>
																			</li>
																			<li>
																				<figure><img alt="" src="images/resources/user2.jpg"></figure>
																				<div class="commenter">
																					<h5><a title="" href="#">Ching xang</a></h5>
																					<span>2 hours ago</span>
																					<p>
																						i think that some how, we learn who we really are and then live with that decision, great post!
																					</p>
																				</div>
																				<a title="Like" href="#"><i class="icofont-heart"></i></a>
																				<a title="Reply" href="#" class="reply-coment"><i class="icofont-reply"></i></a>
																			</li>
																		</ul>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div><!-- share image album -->
											<div class="main-wraper">
												<div class="user-post">
													<div class="friend-info">
														<figure>
															<img alt="" src="images/resources/user5.jpg">
														</figure>
														<div class="friend-name">
															<div class="more">
																<div class="more-post-optns">
																	<i class="">
			<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal"><circle cx="12" cy="12" r="1"></circle><circle cx="19" cy="12" r="1"></circle><circle cx="5" cy="12" r="1"></circle></svg></i>
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
															<ins><a title="" href="time-line.html">Andrew Jhon</a> Shared Link</ins>
															<span><i class="icofont-globe"></i> published: Sep,15 2020</span>
														</div>
														<div class="post-meta">
																<em><a href="https://themeforest.net/item/winku-social-network-toolkit-responsive-template/22363538" title="" target="_blank">https://themeforest.net/item/winku-social-network-toolkit-responsive-template/22363538</a></em>
															<figure>
																<span>fetched-image</span>
																<img src="images/resources/laptop.png" alt="">
															</figure>
															<a href="https://themeforest.net/item/winku-social-network-toolkit-responsive-template/22363538" class="post-title" target="_blank">Winku Social Network with Company Pages Theme</a>
															<p>
																“Winku” is a social community mobile app kit with features. user can use this app for sharing blog, posts, timeline, create Group, Create Pages, chat/Messages, Movies sharing, QA, and Much More.
															</p>
															<div class="we-video-info">
																<ul>
																	<li>
																		<span title="views" class="views">
																			<i>
			<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg></i>
																			<ins>1.2k</ins>
																		</span>
																	</li>
																	<li>
																		<span title="Comments" class="Recommend">
																			<i>
			<svg class="feather feather-message-square" stroke-linejoin="round" stroke-linecap="round" stroke-width="2" stroke="currentColor" fill="none" viewBox="0 0 24 24" height="16" width="16" xmlns="http://www.w3.org/2000/svg"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/></svg></i>
																			<ins>54</ins>
																		</span>

																	</li>
																	<li>
																		<span title="follow" class="Follow">
																			<i>
			<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg></i>
																		<ins>5k</ins>	
																		</span>
																	</li>
																	<li>
																		<span class="share-pst" title="Share">
																			<i>
			<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-share-2"><circle cx="18" cy="5" r="3"></circle><circle cx="6" cy="12" r="3"></circle><circle cx="18" cy="19" r="3"></circle><line x1="8.59" y1="13.51" x2="15.42" y2="17.49"></line><line x1="15.41" y1="6.51" x2="8.59" y2="10.49"></line></svg></i>
																		<ins>205</ins>
																		</span>	
																	</li>
																</ul>
																<a href="post-detail.html" title="" class="reply">Reply <i class="icofont-reply"></i></a>
															</div>
															<div class="stat-tools">
																<div class="box">
																  <div class="Like"><a class="Like__link"><i class="icofont-like"></i> Like</a>
																	<div class="Emojis">
																	  <div class="Emoji Emoji--like">
																		<div class="icon icon--like"></div>
																	  </div>
																	  <div class="Emoji Emoji--love">
																		<div class="icon icon--heart"></div>
																	  </div>
																	  <div class="Emoji Emoji--haha">
																		<div class="icon icon--haha"></div>
																	  </div>
																	  <div class="Emoji Emoji--wow">
																		<div class="icon icon--wow"></div>
																	  </div>
																	  <div class="Emoji Emoji--sad">
																		<div class="icon icon--sad"></div>
																	  </div>
																	  <div class="Emoji Emoji--angry">
																		<div class="icon icon--angry"></div>
																	  </div>
																	</div>
																  </div>
																</div>
																<div class="box">
																	<div class="Emojis">
																	  <div class="Emoji Emoji--like">
																		<div class="icon icon--like"></div>
																	  </div>
																	  <div class="Emoji Emoji--love">
																		<div class="icon icon--heart"></div>
																	  </div>
																	  <div class="Emoji Emoji--haha">
																		<div class="icon icon--haha"></div>
																	  </div>
																	  <div class="Emoji Emoji--wow">
																		<div class="icon icon--wow"></div>
																	  </div>
																	  <div class="Emoji Emoji--sad">
																		<div class="icon icon--sad"></div>
																	  </div>
																	  <div class="Emoji Emoji--angry">
																		<div class="icon icon--angry"></div>
																	  </div>
																	</div>
																  </div>
																<a title="" href="#" class="comment-to"><i class="icofont-comment"></i> Comment</a>
																<a title="" href="#" class="share-to"><i class="icofont-share-alt"></i> Share</a>
																<div class="emoji-state">
																	<div class="popover_wrapper">
																		<a class="popover_title" href="#" title=""><img alt="" src="images/smiles/thumb.png"></a>
																		<div class="popover_content">
																			<span><img alt="" src="images/smiles/thumb.png"> Likes</span>
																			<ul class="namelist">
																				<li>Jhon Doe</li>
																				<li>Amara Sin</li>
																				<li>Sarah K.</li>
																				<li><span>20+ more</span></li>
																			</ul>
																		</div>
																	</div>
																	<div class="popover_wrapper">
																		<a class="popover_title" href="#" title=""><img alt="" src="images/smiles/heart.png"></a>
																		<div class="popover_content">
																			<span><img alt="" src="images/smiles/heart.png"> Love</span>
																			<ul class="namelist">
																				<li>Amara Sin</li>
																				<li>Jhon Doe</li>
																				<li><span>10+ more</span></li>
																			</ul>
																		</div>
																	</div>
																	<div class="popover_wrapper">
																		<a class="popover_title" href="#" title=""><img alt="" src="images/smiles/smile.png"></a>
																		<div class="popover_content">
																			<span><img alt="" src="images/smiles/smile.png"> Happy</span>
																			<ul class="namelist">
																				<li>Sarah K.</li>
																				<li>Jhon Doe</li>
																				<li>Amara Sin</li>
																				<li><span>100+ more</span></li>
																			</ul>
																		</div>
																	</div>
																	<div class="popover_wrapper">
																		<a class="popover_title" href="#" title=""><img alt="" src="images/smiles/weep.png"></a>
																		<div class="popover_content">
																			<span><img alt="" src="images/smiles/weep.png"> Dislike</span>
																			<ul class="namelist">
																				<li>Danial Carbal</li>
																				<li>Amara Sin</li>
																				<li>Sarah K.</li>
																				<li><span>15+ more</span></li>
																			</ul>
																		</div>
																	</div>
																	<p>10+</p>
																</div>
																<div class="new-comment" style="display: block;">
																	<form method="post">
																		<input type="text" placeholder="write comment">
																		<button type="submit"><i class="icofont-paper-plane"></i></button>
																	</form>
																	<div class="comments-area">
																		<ul>
																			<li>
																				<figure><img alt="" src="images/resources/user1.jpg"></figure>
																				<div class="commenter">
																					<h5><a title="" href="#">Jack Carter</a></h5>
																					<span>2 hours ago</span>
																					<p>
																						i think that some how, we learn who we really are and then live with that decision, great post!
																					</p>
																					<span>you can view the more detail via link</span>
																					<a title="" href="#">https://www.youtube.com/watch?v=HpZgwHU1GcI</a>
																				</div>
																				<a title="Like" href="#"><i class="icofont-heart"></i></a>
																				<a title="Reply" href="#" class="reply-coment"><i class="icofont-reply"></i></a>
																			</li>
																			<li>
																				<figure><img alt="" src="images/resources/user2.jpg"></figure>
																				<div class="commenter">
																					<h5><a title="" href="#">Ching xang</a></h5>
																					<span>2 hours ago</span>
																					<p>
																						i think that some how, we learn who we really are and then live with that decision, great post!
																					</p>
																				</div>
																				<a title="Like" href="#"><i class="icofont-heart"></i></a>
																				<a title="Reply" href="#" class="reply-coment"><i class="icofont-reply"></i></a>
																			</li>
																		</ul>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div><!-- share link -->
											<div class="main-wraper">
												<div class="user-post">
													<div class="friend-info">
														<figure>
															<img alt="" src="images/resources/user2.jpg">
														</figure>
														<div class="friend-name">
															<div class="more">
																<div class="more-post-optns">
																	<i class="">
			<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal"><circle cx="12" cy="12" r="1"></circle><circle cx="19" cy="12" r="1"></circle><circle cx="5" cy="12" r="1"></circle></svg></i>
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
															<ins><a title="" href="time-line.html">Maria k.</a> Shared Link</ins>
															<span><i class="icofont-globe"></i> published: Sep,15 2020</span>
														</div>
														<div class="post-meta">
															<em><a href="https://www.youtube.com/embed/zdow47FQRfQ" title="" target="_blank">https://www.youtube.com/embed/zdow47FQRfQ</a>
															</em>
															<iframe height="285" src="https://www.youtube.com/embed/zdow47FQRfQ" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

															<p>
																Cookie? Biscuit? Bikkie? They all mean the same thing! Our lovely English teachers will quickly show you some pronunciation and vocabulary differences from Australia, America, and England!
															</p>
															<div class="we-video-info">
																<ul>
																	<li>
																		<span title="views" class="views">
																			<i>
			<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg></i>
																			<ins>1.2k</ins>
																		</span>
																	</li>
																	<li>
																		<span title="Comments" class="Recommend">
																			<i>
			<svg class="feather feather-message-square" stroke-linejoin="round" stroke-linecap="round" stroke-width="2" stroke="currentColor" fill="none" viewBox="0 0 24 24" height="16" width="16" xmlns="http://www.w3.org/2000/svg"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/></svg></i>
																			<ins>54</ins>
																		</span>

																	</li>
																	<li>
																		<span title="follow" class="Follow">
																			<i>
			<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg></i>
																		<ins>5k</ins>	
																		</span>
																	</li>
																	<li>
																		<span class="share-pst" title="Share">
																			<i>
			<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-share-2"><circle cx="18" cy="5" r="3"></circle><circle cx="6" cy="12" r="3"></circle><circle cx="18" cy="19" r="3"></circle><line x1="8.59" y1="13.51" x2="15.42" y2="17.49"></line><line x1="15.41" y1="6.51" x2="8.59" y2="10.49"></line></svg></i>
																		<ins>205</ins>
																		</span>	
																	</li>
																</ul>
																<a href="post-detail.html" title="" class="reply">Reply <i class="icofont-reply"></i></a>
															</div>
															<div class="stat-tools">
																<div class="box">
																  <div class="Like"><a class="Like__link"><i class="icofont-like"></i> Like</a>
																	<div class="Emojis">
																	  <div class="Emoji Emoji--like">
																		<div class="icon icon--like"></div>
																	  </div>
																	  <div class="Emoji Emoji--love">
																		<div class="icon icon--heart"></div>
																	  </div>
																	  <div class="Emoji Emoji--haha">
																		<div class="icon icon--haha"></div>
																	  </div>
																	  <div class="Emoji Emoji--wow">
																		<div class="icon icon--wow"></div>
																	  </div>
																	  <div class="Emoji Emoji--sad">
																		<div class="icon icon--sad"></div>
																	  </div>
																	  <div class="Emoji Emoji--angry">
																		<div class="icon icon--angry"></div>
																	  </div>
																	</div>
																  </div>
																</div>
																<div class="box">
																	<div class="Emojis">
																	  <div class="Emoji Emoji--like">
																		<div class="icon icon--like"></div>
																	  </div>
																	  <div class="Emoji Emoji--love">
																		<div class="icon icon--heart"></div>
																	  </div>
																	  <div class="Emoji Emoji--haha">
																		<div class="icon icon--haha"></div>
																	  </div>
																	  <div class="Emoji Emoji--wow">
																		<div class="icon icon--wow"></div>
																	  </div>
																	  <div class="Emoji Emoji--sad">
																		<div class="icon icon--sad"></div>
																	  </div>
																	  <div class="Emoji Emoji--angry">
																		<div class="icon icon--angry"></div>
																	  </div>
																	</div>
																  </div>
																<a title="" href="#" class="comment-to"><i class="icofont-comment"></i> Comment</a>
																<a title="" href="#" class="share-to"><i class="icofont-share-alt"></i> Share</a>
																<div class="emoji-state">
																	<div class="popover_wrapper">
																		<a class="popover_title" href="#" title=""><img alt="" src="images/smiles/thumb.png"></a>
																		<div class="popover_content">
																			<span><img alt="" src="images/smiles/thumb.png"> Likes</span>
																			<ul class="namelist">
																				<li>Jhon Doe</li>
																				<li>Amara Sin</li>
																				<li>Sarah K.</li>
																				<li><span>20+ more</span></li>
																			</ul>
																		</div>
																	</div>
																	<div class="popover_wrapper">
																		<a class="popover_title" href="#" title=""><img alt="" src="images/smiles/heart.png"></a>
																		<div class="popover_content">
																			<span><img alt="" src="images/smiles/heart.png"> Love</span>
																			<ul class="namelist">
																				<li>Amara Sin</li>
																				<li>Jhon Doe</li>
																				<li><span>10+ more</span></li>
																			</ul>
																		</div>
																	</div>
																	<div class="popover_wrapper">
																		<a class="popover_title" href="#" title=""><img alt="" src="images/smiles/smile.png"></a>
																		<div class="popover_content">
																			<span><img alt="" src="images/smiles/smile.png"> Happy</span>
																			<ul class="namelist">
																				<li>Sarah K.</li>
																				<li>Jhon Doe</li>
																				<li>Amara Sin</li>
																				<li><span>100+ more</span></li>
																			</ul>
																		</div>
																	</div>
																	<div class="popover_wrapper">
																		<a class="popover_title" href="#" title=""><img alt="" src="images/smiles/weep.png"></a>
																		<div class="popover_content">
																			<span><img alt="" src="images/smiles/weep.png"> Dislike</span>
																			<ul class="namelist">
																				<li>Danial Carbal</li>
																				<li>Amara Sin</li>
																				<li>Sarah K.</li>
																				<li><span>15+ more</span></li>
																			</ul>
																		</div>
																	</div>
																	<p>20+</p>
																</div>
																<div class="new-comment" style="display: none;">
																	<form method="post">
																		<input type="text" placeholder="write comment">
																		<button type="submit"><i class="icofont-paper-plane"></i></button>
																	</form>
																	<div class="comments-area">
																		<ul>
																			<li>
																				<figure><img alt="" src="images/resources/user1.jpg"></figure>
																				<div class="commenter">
																					<h5><a title="" href="#">Jack Carter</a></h5>
																					<span>2 hours ago</span>
																					<p>
																						i think that some how, we learn who we really are and then live with that decision, great post!
																					</p>
																					<span>you can view the more detail via link</span>
																					<a title="" href="#">https://www.youtube.com/watch?v=HpZgwHU1GcI</a>
																				</div>
																				<a title="Like" href="#"><i class="icofont-heart"></i></a>
																				<a title="Reply" href="#" class="reply-coment"><i class="icofont-reply"></i></a>
																			</li>
																			<li>
																				<figure><img alt="" src="images/resources/user2.jpg"></figure>
																				<div class="commenter">
																					<h5><a title="" href="#">Ching xang</a></h5>
																					<span>2 hours ago</span>
																					<p>
																						i think that some how, we learn who we really are and then live with that decision, great post!
																					</p>
																				</div>
																				<a title="Like" href="#"><i class="icofont-heart"></i></a>
																				<a title="Reply" href="#" class="reply-coment"><i class="icofont-reply"></i></a>
																			</li>
																		</ul>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div><!-- share video -->
											<div class="main-wraper">
												<div class="user-post">
													<div class="friend-info">
														<figure>
															<img alt="" src="images/resources/user2.jpg">
														</figure>
														<div class="friend-name">
															<div class="more">
																<div class="more-post-optns">
																	<i class="">
			<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal"><circle cx="12" cy="12" r="1"></circle><circle cx="19" cy="12" r="1"></circle><circle cx="5" cy="12" r="1"></circle></svg></i>
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
															<ins><a title="" href="time-line.html">Maria k.</a> Shared Link</ins>
															<span><i class="icofont-globe"></i> published: Sep,15 2020</span>
														</div>
														<div class="post-meta">
															<img class="gif" src="images/giphy.png" data-gif="images/giphy-sample.gif" alt="">
															<div class="we-video-info">
																<ul>
																	<li>
																		<span title="views" class="views">
																			<i>
			<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg></i>
																			<ins>1.2k</ins>
																		</span>
																	</li>
																	<li>
																		<span title="Comments" class="Recommend">
																			<i>
			<svg class="feather feather-message-square" stroke-linejoin="round" stroke-linecap="round" stroke-width="2" stroke="currentColor" fill="none" viewBox="0 0 24 24" height="16" width="16" xmlns="http://www.w3.org/2000/svg"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/></svg></i>
																			<ins>54</ins>
																		</span>

																	</li>
																	<li>
																		<span title="follow" class="Follow">
																			<i>
			<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg></i>
																		<ins>5k</ins>	
																		</span>
																	</li>
																	<li>
																		<span class="share-pst" title="Share">
																			<i>
			<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-share-2"><circle cx="18" cy="5" r="3"></circle><circle cx="6" cy="12" r="3"></circle><circle cx="18" cy="19" r="3"></circle><line x1="8.59" y1="13.51" x2="15.42" y2="17.49"></line><line x1="15.41" y1="6.51" x2="8.59" y2="10.49"></line></svg></i>
																		<ins>205</ins>
																		</span>	
																	</li>
																</ul>
																<a href="post-detail.html" title="" class="reply">Reply <i class="icofont-reply"></i></a>
															</div>
															<div class="stat-tools">
																<div class="box">
																  <div class="Like"><a class="Like__link"><i class="icofont-like"></i> Like</a>
																	<div class="Emojis">
																	  <div class="Emoji Emoji--like">
																		<div class="icon icon--like"></div>
																	  </div>
																	  <div class="Emoji Emoji--love">
																		<div class="icon icon--heart"></div>
																	  </div>
																	  <div class="Emoji Emoji--haha">
																		<div class="icon icon--haha"></div>
																	  </div>
																	  <div class="Emoji Emoji--wow">
																		<div class="icon icon--wow"></div>
																	  </div>
																	  <div class="Emoji Emoji--sad">
																		<div class="icon icon--sad"></div>
																	  </div>
																	  <div class="Emoji Emoji--angry">
																		<div class="icon icon--angry"></div>
																	  </div>
																	</div>
																  </div>
																</div>
																<div class="box">
																	<div class="Emojis">
																	  <div class="Emoji Emoji--like">
																		<div class="icon icon--like"></div>
																	  </div>
																	  <div class="Emoji Emoji--love">
																		<div class="icon icon--heart"></div>
																	  </div>
																	  <div class="Emoji Emoji--haha">
																		<div class="icon icon--haha"></div>
																	  </div>
																	  <div class="Emoji Emoji--wow">
																		<div class="icon icon--wow"></div>
																	  </div>
																	  <div class="Emoji Emoji--sad">
																		<div class="icon icon--sad"></div>
																	  </div>
																	  <div class="Emoji Emoji--angry">
																		<div class="icon icon--angry"></div>
																	  </div>
																	</div>
																  </div>
																<a title="" href="#" class="comment-to"><i class="icofont-comment"></i> Comment</a>
																<a title="" href="#" class="share-to"><i class="icofont-share-alt"></i> Share</a>
																<div class="emoji-state">
																	<div class="popover_wrapper">
																		<a class="popover_title" href="#" title=""><img alt="" src="images/smiles/thumb.png"></a>
																		<div class="popover_content">
																			<span><img alt="" src="images/smiles/thumb.png"> Likes</span>
																			<ul class="namelist">
																				<li>Jhon Doe</li>
																				<li>Amara Sin</li>
																				<li>Sarah K.</li>
																				<li><span>20+ more</span></li>
																			</ul>
																		</div>
																	</div>
																	<div class="popover_wrapper">
																		<a class="popover_title" href="#" title=""><img alt="" src="images/smiles/heart.png"></a>
																		<div class="popover_content">
																			<span><img alt="" src="images/smiles/heart.png"> Love</span>
																			<ul class="namelist">
																				<li>Amara Sin</li>
																				<li>Jhon Doe</li>
																				<li><span>10+ more</span></li>
																			</ul>
																		</div>
																	</div>
																	<div class="popover_wrapper">
																		<a class="popover_title" href="#" title=""><img alt="" src="images/smiles/smile.png"></a>
																		<div class="popover_content">
																			<span><img alt="" src="images/smiles/smile.png"> Happy</span>
																			<ul class="namelist">
																				<li>Sarah K.</li>
																				<li>Jhon Doe</li>
																				<li>Amara Sin</li>
																				<li><span>100+ more</span></li>
																			</ul>
																		</div>
																	</div>
																	<div class="popover_wrapper">
																		<a class="popover_title" href="#" title=""><img alt="" src="images/smiles/weep.png"></a>
																		<div class="popover_content">
																			<span><img alt="" src="images/smiles/weep.png"> Dislike</span>
																			<ul class="namelist">
																				<li>Danial Carbal</li>
																				<li>Amara Sin</li>
																				<li>Sarah K.</li>
																				<li><span>15+ more</span></li>
																			</ul>
																		</div>
																	</div>
																	<p>20+</p>
																</div>
																<div class="new-comment" style="display: none;">
																	<form method="post">
																		<input type="text" placeholder="write comment">
																		<button type="submit"><i class="icofont-paper-plane"></i></button>
																	</form>
																	<div class="comments-area">
																		<ul>
																			<li>
																				<figure><img alt="" src="images/resources/user1.jpg"></figure>
																				<div class="commenter">
																					<h5><a title="" href="#">Jack Carter</a></h5>
																					<span>2 hours ago</span>
																					<p>
																						i think that some how, we learn who we really are and then live with that decision, great post!
																					</p>
																					<span>you can view the more detail via link</span>
																					<a title="" href="#">https://www.youtube.com/watch?v=HpZgwHU1GcI</a>
																				</div>
																				<a title="Like" href="#"><i class="icofont-heart"></i></a>
																				<a title="Reply" href="#" class="reply-coment"><i class="icofont-reply"></i></a>
																			</li>
																			<li>
																				<figure><img alt="" src="images/resources/user2.jpg"></figure>
																				<div class="commenter">
																					<h5><a title="" href="#">Ching xang</a></h5>
																					<span>2 hours ago</span>
																					<p>
																						i think that some how, we learn who we really are and then live with that decision, great post!
																					</p>
																				</div>
																				<a title="Like" href="#"><i class="icofont-heart"></i></a>
																				<a title="Reply" href="#" class="reply-coment"><i class="icofont-reply"></i></a>
																			</li>
																		</ul>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div><!-- gif image post -->
											<div class="main-wraper">
												<div class="user-post">
													<div class="friend-info">
														<figure>
															<img alt="" src="images/resources/sponsor.png">
														</figure>
														<div class="friend-name">
															<div class="more">
																<div class="more-post-optns">
																	<i class="">
			<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal"><circle cx="12" cy="12" r="1"></circle><circle cx="19" cy="12" r="1"></circle><circle cx="5" cy="12" r="1"></circle></svg></i>
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
															<ins><a title="" href="time-line.html">Sponsors Ads</a></ins>
															<span><i class="icofont-globe"></i> Sponsor</span>
														</div>
														<div class="post-meta">
															<ul class="sponsored-caro">
																<li>
																	<figure><img src="images/resources/sponsor-prod1.jpg" alt=""></figure>
																	<div class="sponsor-prod-name">
																		<a href="#" title="">Aloevera Juice 1 liter</a>
																		<span>$24</span>
																	</div>
																	<a href="#" title="" class="shop-btn">Shop Now</a>
																	<div class="share-info">
																			<span>50 shares</span>
																			<span>20k Likes</span>
																		</div>
																	<div class="stat-tools">
																		<div class="box">
																		  <div class="Like"><a class="Like__link"><i class="icofont-like"></i> Like</a>
																			<div class="Emojis">
																			  <div class="Emoji Emoji--like">
																				<div class="icon icon--like"></div>
																			  </div>
																			  <div class="Emoji Emoji--love">
																				<div class="icon icon--heart"></div>
																			  </div>
																			</div>
																		  </div>
																		</div>
																		<div class="box">
																			<div class="Emojis">
																			  <div class="Emoji Emoji--like">
																				<div class="icon icon--like"></div>
																			  </div>
																			  <div class="Emoji Emoji--love">
																				<div class="icon icon--heart"></div>
																			  </div>
																			</div>
																		  </div>
																		<a title="" href="#" class="share-to"><i class="icofont-share-alt"></i> Share</a>
																	</div>
																</li>
																<li>
																	<figure><img src="images/resources/sponsor-prod5.jpg" alt=""></figure>
																	<div class="sponsor-prod-name">
																		<a href="#" title="">Beauty Cosmetics</a>
																		<span>$24</span>
																	</div>
																	<a href="#" title="" class="shop-btn">Shop Now</a>
																	<div class="share-info">
																			<span>50 shares</span>
																			<span>20k Likes</span>
																		</div>
																	<div class="stat-tools">
																		<div class="box">
																		  <div class="Like"><a class="Like__link"><i class="icofont-like"></i> Like</a>
																			<div class="Emojis">
																			  <div class="Emoji Emoji--like">
																				<div class="icon icon--like"></div>
																			  </div>
																			  <div class="Emoji Emoji--love">
																				<div class="icon icon--heart"></div>
																			  </div>
																			</div>
																		  </div>
																		</div>
																		<div class="box">
																			<div class="Emojis">
																			  <div class="Emoji Emoji--like">
																				<div class="icon icon--like"></div>
																			  </div>
																			  <div class="Emoji Emoji--love">
																				<div class="icon icon--heart"></div>
																			  </div>
																			</div>
																		  </div>
																		<a title="" href="#" class="share-to"><i class="icofont-share-alt"></i> Share</a>
																	</div>
																</li>
																<li>
																	<figure><img src="images/resources/sponsor-prod4.jpg" alt=""></figure>
																	<div class="sponsor-prod-name">
																		<a href="#" title="">Overtime For Men</a>
																		<span>$24</span>
																	</div>
																	<a href="#" title="" class="shop-btn">Shop Now</a>
																	<div class="share-info">
																			<span>50 shares</span>
																			<span>20k Likes</span>
																		</div>
																	<div class="stat-tools">
																		<div class="box">
																		  <div class="Like"><a class="Like__link"><i class="icofont-like"></i> Like</a>
																			<div class="Emojis">
																			  <div class="Emoji Emoji--like">
																				<div class="icon icon--like"></div>
																			  </div>
																			  <div class="Emoji Emoji--love">
																				<div class="icon icon--heart"></div>
																			  </div>
																			</div>
																		  </div>
																		</div>
																		<div class="box">
																			<div class="Emojis">
																			  <div class="Emoji Emoji--like">
																				<div class="icon icon--like"></div>
																			  </div>
																			  <div class="Emoji Emoji--love">
																				<div class="icon icon--heart"></div>
																			  </div>
																			</div>
																		  </div>
																		<a title="" href="#" class="share-to"><i class="icofont-share-alt"></i> Share</a>
																	</div>
																</li>
																<li>
																	<figure><img src="images/resources/sponsor-prod3.jpg" alt=""></figure>
																	<div class="sponsor-prod-name">
																		<a href="#" title="">Redish Baby Items</a>
																		<span>$24</span>
																	</div>
																	<a href="#" title="" class="shop-btn">Shop Now</a>
																	<div class="share-info">
																			<span>50 shares</span>
																			<span>20k Likes</span>
																		</div>
																	<div class="stat-tools">
																		<div class="box">
																		  <div class="Like"><a class="Like__link"><i class="icofont-like"></i> Like</a>
																			<div class="Emojis">
																			  <div class="Emoji Emoji--like">
																				<div class="icon icon--like"></div>
																			  </div>
																			  <div class="Emoji Emoji--love">
																				<div class="icon icon--heart"></div>
																			  </div>
																			</div>
																		  </div>
																		</div>
																		<div class="box">
																			<div class="Emojis">
																			  <div class="Emoji Emoji--like">
																				<div class="icon icon--like"></div>
																			  </div>
																			  <div class="Emoji Emoji--love">
																				<div class="icon icon--heart"></div>
																			  </div>
																			</div>
																		  </div>
																		<a title="" href="#" class="share-to"><i class="icofont-share-alt"></i> Share</a>
																	</div>
																</li>
																<li>
																	<figure><img src="images/resources/sponsor-prod2.jpg" alt=""></figure>
																	<div class="sponsor-prod-name">
																		<a href="#" title="">Potato Baby Fider</a>
																		<span>$24</span>
																	</div>
																	<a href="#" title="" class="shop-btn">Shop Now</a>
																	<div class="share-info">
																			<span>50 shares</span>
																			<span>20k Likes</span>
																		</div>
																	<div class="stat-tools">
																		<div class="box">
																		  <div class="Like"><a class="Like__link"><i class="icofont-like"></i> Like</a>
																			<div class="Emojis">
																			  <div class="Emoji Emoji--like">
																				<div class="icon icon--like"></div>
																			  </div>
																			  <div class="Emoji Emoji--love">
																				<div class="icon icon--heart"></div>
																			  </div>
																			</div>
																		  </div>
																		</div>
																		<div class="box">
																			<div class="Emojis">
																			  <div class="Emoji Emoji--like">
																				<div class="icon icon--like"></div>
																			  </div>
																			  <div class="Emoji Emoji--love">
																				<div class="icon icon--heart"></div>
																			  </div>
																			</div>
																		  </div>
																		<a title="" href="#" class="share-to"><i class="icofont-share-alt"></i> Share</a>
																	</div>
																</li>
																<li>
																	<figure><img src="images/resources/sponsor-prod3.jpg" alt=""></figure>
																	<div class="sponsor-prod-name">
																		<a href="#" title="">Baby items fider</a>
																		<span>$24</span>
																	</div>
																	<a href="#" title="" class="shop-btn">Shop Now</a>
																	<div class="share-info">
																			<span>50 shares</span>
																			<span>20k Likes</span>
																		</div>
																	<div class="stat-tools">
																		<div class="box">
																		  <div class="Like"><a class="Like__link"><i class="icofont-like"></i> Like</a>
																			<div class="Emojis">
																			  <div class="Emoji Emoji--like">
																				<div class="icon icon--like"></div>
																			  </div>
																			  <div class="Emoji Emoji--love">
																				<div class="icon icon--heart"></div>
																			  </div>
																			</div>
																		  </div>
																		</div>
																		<div class="box">
																			<div class="Emojis">
																			  <div class="Emoji Emoji--like">
																				<div class="icon icon--like"></div>
																			  </div>
																			  <div class="Emoji Emoji--love">
																				<div class="icon icon--heart"></div>
																			  </div>
																			</div>
																		  </div>
																		<a title="" href="#" class="share-to"><i class="icofont-share-alt"></i> Share</a>
																	</div>
																</li>
															</ul>
														</div>
													</div>
												</div>
											</div><!-- advertisment carousel -->
											<div class="loadmore">
												<div class="sp sp-bars"></div>
												<a href="#" title="" data-ripple="">Load More..</a>
											</div><!-- loadmore buttons -->
										</div>
										<div class="col-lg-4">
											<aside class="sidebar static left">
												<div class="advertisment-box">
													<h4 class=""><i class="icofont-info-circle"></i> advertisment</h4>
													<figure>
														<a href="#" title="Advertisment"><img src="images/resources/ad-widget2.gif" alt=""></a>
													</figure>
												</div>
												<div class="widget">
													<h4 class="widget-title">Members <a title="" href="#" class="see-all">See All</a></h4>
													<ul class="invitepage">
														<li>
															<figure>
																<img alt="" src="images/resources/friend-avatar.jpg">
																<a href="#">Jack carter</a>
															</figure>
															<button class="sug-like"><i class="invit">Follow</i><i class="icofont-check-alt"></i></button>
														</li>
														<li>
															<figure>
																<img alt="" src="images/resources/friend-avatar2.jpg">
																<a href="#">Emma watson</a>
															</figure>
															<button class="sug-like"><i class="invit">Follow</i><i class="icofont-check-alt"></i></button>
														</li>
														<li>
															<figure>
																<img alt="" src="images/resources/friend-avatar3.jpg">
																<a href="#">Andrew</a>
															</figure>
															<button class="sug-like"><i class="invit">Follow</i><i class="icofont-check-alt"></i></button>
														</li>
														<li>
															<figure>
																<img alt="" src="images/resources/friend-avatar4.jpg">
																<a href="#">Moona Singh</a>
															</figure>
															<button class="sug-like"><i class="invit">Follow</i><i class="icofont-check-alt"></i></button>
														</li>
														<li>
															<figure>
																<img alt="" src="images/resources/friend-avatar5.jpg">
																<a href="#">Harry pooter</a>
															</figure>
															<button class="sug-like"><i class="invit">Follow</i><i class="icofont-check-alt"></i></button>
														</li>
													</ul>
												</div>
												<div class="widget">
													<h4 class="widget-title">Recent Media</h4>
													<div class="recent-media">
														<figure>
															<img alt="" src="images/resources/course-3.jpg">
															<a href="https://www.youtube.com/watch?v=nOCXXHGMezU&amp;feature=emb_title" data-fancybox="" class="play-btn"><i class="icofont-play"></i></a>
															<span>Angular Js Tutorial</span>
														</figure>
														<figure>
															<img alt="" src="images/resources/course-4.jpg">
															<a href="https://www.youtube.com/watch?v=nOCXXHGMezU&amp;feature=emb_title" data-fancybox="" class="play-btn"><i class="icofont-play"></i></a>
															<span>Css3 2020 Tutorial</span>
														</figure>
													</div>
												</div>
												<div class="widget stick-widget">
													<h4 class="widget-title">You May Like Groups</h4>
													<ul class="suggestd">
														<li>
															<a class="sug-pic" href="#" title=""><img src="images/resources/sug-page-1.jpg" alt=""></a>
															<a class="sug-title" href="#" title="">Physics Shop</a>
															<button class="sug-like"><i class="icofont-like"></i><i class="icofont-check-alt"></i></button>
														</li>
														<li>
															<a class="sug-pic" href="#" title=""><img src="images/resources/sug-page-2.jpg" alt=""></a>
															<a class="sug-title" href="#" title="">Sun Rise</a>
															<button class="sug-like"><i class="icofont-like"></i><i class="icofont-check-alt"></i></button>
														</li>
														<li>
															<a class="sug-pic" href="#" title=""><img src="images/resources/sug-page-3.jpg" alt=""></a>
															<a class="sug-title" href="#" title="">Big Botny</a>
															<button class="sug-like"><i class="icofont-like"></i><i class="icofont-check-alt"></i></button>
														</li>
														<li>
															<a class="sug-pic" href="#" title=""><img src="images/resources/sug-page-4.jpg" alt=""></a>
															<a class="sug-title" href="#" title="">King Work</a>
															<button class="sug-like"><i class="icofont-like"></i><i class="icofont-check-alt"></i></button>
														</li>
														<li>
															<a class="sug-pic" href="#" title=""><img src="images/resources/sug-page-5.jpg" alt=""></a>
															<a class="sug-title" href="#" title="">18teen Guys</a>
															<button class="sug-like"><i class="icofont-like"></i><i class="icofont-check-alt"></i></button>
														</li>
													</ul>
												</div><!-- Suggested groups -->
											</aside>
										</div>
									</div>
								</div>	
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section><!-- content -->
	


	@endsection