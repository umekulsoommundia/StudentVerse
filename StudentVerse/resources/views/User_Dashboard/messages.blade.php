@extends("User_Dashboard.user_layout")
@section('main')
	
	<section>
		<div class="gap">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div id="page-contents" class="row merged20">
							<div class="col-lg-8">
								<div class="main-wraper">
									<h3 class="main-title">Messages</h3>
									<div class="message-box">
										<div class="message-header">
											<div class="useravatar active">
												<img src="images/resources/friend-avatar.jpg" alt="">
												<span>Oliver</span>
												<div class="status away"></div>
											</div>
											<div class="useravatar">
												<img src="images/resources/friend-avatar2.jpg" alt="">
												<span>Sarah</span>
												<div class="status online"></div>
											</div>
											<div class="useravatar">
												<img src="images/resources/friend-avatar3.jpg" alt="">
												<span>Andrew</span>
												<div class="status offline"></div>
											</div>
											<div class="useravatar">
												<img src="images/resources/friend-avatar4.jpg" alt="">
												<span>Mikaly</span>
												<div class="status online"></div>
											</div>
											<div class="useravatar">
												<img src="images/resources/friend-avatar5.jpg" alt="">
												<span>Bumsy</span>
												<div class="status away"></div>
											</div>
											<div class="useravatar">
												<img src="images/resources/friend-avatar.jpg" alt="">
												<span>Harry</span>
												<div class="status offline"></div>
											</div>
											<div class="useravatar">
												<img src="images/resources/friend-avatar2.jpg" alt="">
												<span>Laila</span>
												<div class="status offline"></div>
											</div>
											<div class="useravatar">
												<img src="images/resources/friend-avatar3.jpg" alt="">
												<span>Noah</span>
												<div class="status offline"></div>
											</div>
											<div class="useravatar">
												<img src="images/resources/friend-avatar4.jpg" alt="">
												<span>Maria</span>
												<div class="status offline"></div>
											</div>
											<div class="useravatar">
												<img src="images/resources/friend-avatar5.jpg" alt="">
												<span>Ellie</span>
												<div class="status offline"></div>
											</div>
										</div>
										<div class="message-content">
											<div class="chat-header">
												<div class="status online"></div>
												<h6>last seen on today at 12:39</h6>
												<div class="corss">
													<span class="report"><i class="icofont-flag"></i></span>
													<span class="options"><i class="icofont-brand-flikr"></i></span>
												</div>
											</div>
											<div class="chat-content">
												<div class="date">Wednesday 25, March</div>
												<ul class="chatting-area">
													<li class="you">
														<figure><img src="images/resources/userlist-2.jpg" alt=""></figure>
														<p>what's liz short for? :)</p>
													</li>
													<li class="me">
														<figure><img src="images/resources/userlist-1.jpg" alt=""></figure>
														<p>Elizabeth lol</p>
													</li>
													<li class="me">
														<figure><img src="images/resources/userlist-1.jpg" alt=""></figure>
														<p>wanna know whats my second guess was?</p>
													</li>
													<li class="you">
														<figure><img src="images/resources/userlist-2.jpg" alt=""></figure>
														<p>yes</p>
													</li>
													<li class="me">
														<figure><img src="images/resources/userlist-1.jpg" alt=""></figure>
														<p>Disney's the lizard king</p>
													</li>
													<li class="me">
														<figure><img src="images/resources/userlist-1.jpg" alt=""></figure>
														<p>i know him 5 years ago</p>
													</li>
													<li class="you">
														<figure><img src="images/resources/userlist-2.jpg" alt=""></figure>
														<p>coooooooooool dude ;)</p>
													</li>
												</ul>
												<div class="message-text-container">
													<div class="more-attachments">
														<i class="icofont-plus"></i>
													</div>
													<div class="attach-options">
														<a href="#" title=""><i class="icofont-camera"></i> Open Camera</a>
														<a href="#" title=""><i class="icofont-video-cam"></i> Photo & video Library</a>
														<a href="#" title=""><i class="icofont-paper-clip"></i> Attach Document</a>
														<a href="#" title=""><i class="icofont-location-pin"></i> Share Location</a>
														<a href="#" title=""><i class="icofont-contact-add"></i> Share Contact</a>
													</div>
													<form method="post">
														<span class="emojie"><img src="images/smiles/happy.png" alt=""></span>
														<textarea rows="1" placeholder="say someting..."></textarea>
														<button title="send"><i class="icofont-paper-plane"></i></button>
														<div class="smiles-bunch">
															<i><img src="images/smiles/angry-1.png" alt=""></i>
															<i><img src="images/smiles/angry.png" alt=""></i>
															<i><img src="images/smiles/bored-1.png" alt=""></i>
															<i><img src="images/smiles/bored-2.png" alt=""></i>
															<i><img src="images/smiles/bored.png" alt=""></i>
															<i><img src="images/smiles/confused-1.png" alt=""></i>
															<i><img src="images/smiles/confused.png" alt=""></i>
															<i><img src="images/smiles/crying-1.png" alt=""></i>
															<i><img src="images/smiles/crying.png" alt=""></i>
															<i><img src="images/smiles/tongue-out.png" alt=""></i>
															<i><img src="images/smiles/wink.png" alt=""></i>
															<i><img src="images/smiles/suspicious.png" alt=""></i>
														</div>
													</form>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-4">
								<div class="profile-short">
								<div class="chating-head">
									<div class="s-left">
										<h5>Sarah Martin</h5>
										<p>United States</p>
									</div>
									<div class="s-right">
										<span title="Call Video">
<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-video"><polygon points="23 7 16 12 23 17 23 7"></polygon><rect x="1" y="5" width="15" height="14" rx="2" ry="2"></rect></svg></span>
										<span title="Call Audio">
											
<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-phone-call"><path d="M15.05 5A5 5 0 0 1 19 8.95M15.05 1A9 9 0 0 1 23 8.94m-1 7.98v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
										</span>
									</div>
								</div>
								<div class="short-intro">
									<figure><img src="images/resources/album1.jpg" alt=""></figure>
									<ul>
										<li>
											<span>Display Name</span>
											<p>Harry</p>
										</li>
										<li>
											<span>Local time</span>
											<p>3:40AM</p>
										</li>
										<li>
											<span>Email Address</span>
											<p><a href="https://wpkixx.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="d586b4b8a5b9b095b2b8b4bcb9fbb6bab8">[email&#160;protected]</a></p>
										</li>
										<li>
											<span>Phone Number</span>
											<p>+1 223 509309</p>
										</li>
										<li>
											<span>Skype Id</span>
											<p>Sarah22</p>
										</li>
									</ul>
									<a class="button primary circle" href="#" title="">view Profile</a>
									<a class="button primary circle danger" href="#" title="">Block Chat</a>
								</div>
							</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
@endsection