@extends("User_Dashboard.user_layout")
@section('main')
	
	<section>
		<div class="gap">
			<div class="container">
		<div class="row justify-content-md-center">
			<div class="col-lg-8">
				<div class="main-wraper">
					<div class="feedback-form">
						<h4 class="text-center"><i class="icofont-comment"></i> Send Feedback</h4>
						<form class="mt-4">
							<fieldset class="row">
								<div class="mb-4 col-lg-6">
									<input class="uk-input" type="text" placeholder="First Name">
								</div>
								<div class="mb-4 col-lg-6">
									<input class="uk-input" type="text" placeholder="Last Name">
								</div>
								<div class="mb-4 uk-margin col-lg-12">
									<select class="uk-select">
										<option>Select Country</option>
										<option>USA</option>
										<option>UK</option>
										<option>UAE</option>
									</select>
								</div>
								<div class="mb-4 col-lg-6">
									<input class="uk-input" type="text" placeholder="Email Address">
								</div>
								<div class="mb-4 col-lg-6">
									<input class="uk-input" type="text" placeholder="University">
								</div>
								
								<div class="mb-4 col-lg-12">
									<textarea class="uk-textarea" rows="4" placeholder="Textarea"></textarea>
								</div>
								<div class="mb-4 col-lg-12">
									<div class="form-group1 mt-30">
										<label for="file5">Add Screenshots</label>
										<div class="image-upload-wrap">
											<input type="file" accept="image/*" onchange="readURL(this);" id="file5" class="file-upload-input">
											<div class="drag-text">
											  <i class="icofont-cloud-upload"></i>
											  <h4>Select screenshots to upload</h4>
											  <p>or drag and drop screenshots</p>
											</div>
										</div>															
									</div>
								</div>
								<div class="mb-4 col-lg-12">
									<div class="feed-back-emojies">
										<span>How was your experience with Socimo</span>
										<ul>
											<li><a href="#" title=""><img src="images/smiles/happy.png" alt=""></a></li>
											<li><a href="#" title=""><img src="images/smiles/quiet.png" alt=""></a></li>
											<li><a class="selected" href="#" title=""><img src="images/smiles/in-love.png" alt=""></a></li>
											<li><a href="#" title=""><img src="images/smiles/unhappy.png" alt=""></a></li>
										</ul>
									</div>
								</div>
								<div class="mb-0 col-lg-12 text-center">
									<button type="submit" class="main-btn">Send Your Feedback</button>
								</div>	
							</fieldset>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
		</div>
	</section>
	
	

@endsection