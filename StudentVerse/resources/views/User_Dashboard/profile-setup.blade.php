<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <title>StudentVerse</title>
    <link rel="icon" href="images/fav.png" type="image/png" sizes="16x16">
    <link rel="stylesheet" href="css/main.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/color.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css" integrity="sha256-2XFplPlrFClt0bIdPgpz8H7ojnk10H69xRqd9+uTShA=" crossorigin="anonymous" />

</head>
<style>
    .center-form {
            margin: 0 auto;
            max-width: 400px; /* Optional: Set a maximum width for the form */
        }

        .c-form {
            text-align: center;
            padding: 20px;
        
        }

        .background-image {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-image:  url(images/b1.jpg); 
    background-size: cover; /* Adjust the background size */
    background-position: center center; /* Center the background image */
    opacity: 0.3;
    z-index: -1;
  }
</style>



<body class="nightview">
    {{-- <div class="page-loader" id="page-loader">
        <div class="loader"><span class="loader-item"></span><span class="loader-item"></span><span
                class="loader-item"></span><span class="loader-item"></span><span class="loader-item"></span><span
                class="loader-item"></span><span class="loader-item"></span><span class="loader-item"></span><span
                class="loader-item"></span><span class="loader-item"></span></div>
    </div> --}}


    <section >
        <div class="gap" >
          <div class="container">
            <div class="row justify-content-md-center">
              <div class="col-lg-6">
                <div class="main-wraper" style="background-color: rgb(26, 12, 69)">
                  <div class="feedback-form">
                  

<!-- Your profile setup form goes here -->

                    <h4 class="text-center"><i class="icofont-comment"></i> Complete Profile Setup</h4>
              
                        


                    <form class="mt-4" method="POST" action="/profileSetupPost" enctype="multipart/form-data">
                        @csrf
                        @if(isset($msg))
                            <div class="alert alert-warning">
                                {{ $msg }}
                            </div>
                        @endif
                    
                        @csrf
                    
                        <fieldset class="row">
                            <!-- Other form fields -->
                            <div class="mb-4 col-lg-12">
                            <input name="User_Name" class="uk-input" type="text" placeholder="User Name">
                        </div>
                            <!-- Other fields -->
                            <div class="mb-4 col-lg-6">
                                <input name="Email" class="uk-input" type="text" placeholder="Email Address">
                            </div>
                            @error('Email')
<span class="text-danger">{{ $message }}</span>
@enderror

                            <div class="mb-4 col-lg-6">
                                <input name="Current_work" class="uk-input" type="text" placeholder="Current designation">
                            </div>
                            @error('Current_work')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                        
                            <div class="mb-4 uk-margin col-lg-12">
                                <select class="uk-select" name="interestId" required>
                                    <option value="">Select Interest</option>
                                    @foreach($interests as $interest)
                                        <option value="{{ $interest->id }}">{{ $interest->Name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            
                            @error('interestId')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                            
                            <div class="mb-4 col-lg-12">
                                <textarea name="Bio" class="uk-textarea" rows="2" placeholder="bio"></textarea>
                            </div>
                            @error('Bio')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                            <!-- Image upload field -->
                            <div class="mb-4 col-lg-12">
                                <label for="file5">Add Profile Photo</label>
                                <div class="image-upload-wrap">
                                    <input name="Image" type="file" id="file5" class="file-upload-input">
                                    <div class="drag-text">
                                        <i class="icofont-cloud-upload"></i>
                                        <h4>Select Profile to upload</h4>
                                        <p>or drag and drop image</p>
                                    </div>
                                </div>
                            </div>
                    
                            <!-- Submit button -->
                            <div class="mb-0 col-lg-12 text-center">
                                <button type="submit" class="main-btn">Complete</button>
                            </div>
                        </fieldset>
                    </form>
                    
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="background-image"></div> <!-- Add the background image overlay here -->
      </section>
	

	
	
   


    <figure class="bottom-mockup"><img src="images/footer.png" alt=""></figure>
    <div class="bottombar">
        <div class="container">
            <div class="row">
                <div class="col-lg-12"> <span class="">&copy; copyright All rights reserved by socimo 2020</span>
                </div>
            </div>
        </div>
    </div>
    <div class="wraper-invite">
        <div class="popup"> <span class="popup-closed"><i class="icofont-close"></i></span>
            <div class="popup-meta">
                <div class="popup-head">
                    <h5><i> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-mail">
                                <path
                                    d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z">
                                </path>
                                <polyline points="22,6 12,13 2,6"></polyline>
                            </svg></i> Invite Colleagues</h5>
                </div>
                <div class="invitation-meta">
                    <p> Enter an email address to invite a colleague or co-author to join you on socimo. They will
                        receive an email and, in some cases, up to two reminders.</p>
                    <form method="post" class="c-form"> <input type="text" placeholder="Enter Email"> <button
                            type="submit" class="main-btn">Invite</button></form>
                </div>
            </div>
        </div>
    </div>
    <div class="popup-wraper">
        <div class="popup"> <span class="popup-closed"><i class="icofont-close"></i></span>
            <div class="popup-meta">
                <div class="popup-head">
                    <h5><i> <svg class="feather feather-message-square" stroke-linejoin="round"
                                stroke-linecap="round" stroke-width="2" stroke="currentColor" fill="none"
                                viewBox="0 0 24 24" height="24" width="24" xmlns="http://www.w3.org/2000/svg">
                                <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z" />
                            </svg></i> Send Message</h5>
                </div>
                <div class="send-message">
                    <form method="post" class="c-form"> <input type="text" placeholder="Enter Name.."> <input
                            type="text" placeholder="Subject"><textarea placeholder="Write Message"></textarea>
                        <div class="uploadimage"> <i class="icofont-file-jpg"></i> <label class="fileContainer">
                                <input type="file">Attach file </label></div> <button type="submit"
                            class="main-btn">Send</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="side-slide"> <span class="popup-closed"><i class="icofont-close"></i></span>
        <div class="slide-meta">
            <ul class="nav nav-tabs slide-btns">
                <li class="nav-item"><a class="active" href="#messages" data-toggle="tab">Messages</a></li>
                <li class="nav-item"><a class="" href="#notifications" data-toggle="tab">Notifications</a></li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane active fade show" id="messages">
                    <h4><i class="icofont-envelope"></i> messages</h4> <a href="#" class="send-mesg"
                        title="New Message" data-toggle="tooltip"><i class="icofont-edit"></i></a>
                    <ul class="new-messages">
                        <li>
                            <figure><img src="images/resources/user1.jpg" alt=""></figure>
                            <div class="mesg-info"> <span>Ibrahim Ahmed</span> <a href="#" title="">Helo dear i
                                    wanna talk to you</a></div>
                        </li>
                        <li>
                            <figure><img src="images/resources/user2.jpg" alt=""></figure>
                            <div class="mesg-info"> <span>Fatima J.</span> <a href="#" title="">Helo dear i wanna
                                    talk to you</a></div>
                        </li>
                        <li>
                            <figure><img src="images/resources/user3.jpg" alt=""></figure>
                            <div class="mesg-info"> <span>Fawad Ahmed</span> <a href="#" title="">Helo dear i wanna
                                    talk to you</a></div>
                        </li>
                        <li>
                            <figure><img src="images/resources/user4.jpg" alt=""></figure>
                            <div class="mesg-info"> <span>Saim Turan</span> <a href="#" title="">Helo dear i wanna
                                    talk to you</a></div>
                        </li>
                        <li>
                            <figure><img src="images/resources/user5.jpg" alt=""></figure>
                            <div class="mesg-info"> <span>Alis wells</span> <a href="#" title="">Helo dear i wanna
                                    talk to you</a></div>
                        </li>
                    </ul> <a href="#" title="" class="main-btn" data-ripple="">view all</a>
                </div>
                <div class="tab-pane fade" id="notifications">
                    <h4><i class="icofont-bell-alt"></i> notifications</h4>
                    <ul class="notificationz">
                        <li>
                            <figure><img src="images/resources/user5.jpg" alt=""></figure>
                            <div class="mesg-info"> <span>Alis wells</span> <a href="#" title="">recommend your
                                    post</a></div>
                        </li>
                        <li>
                            <figure><img src="images/resources/user4.jpg" alt=""></figure>
                            <div class="mesg-info"> <span>Alis wells</span> <a href="#" title="">share your post
                                    <strong>a good time today!</strong></a></div>
                        </li>
                        <li>
                            <figure><img src="images/resources/user2.jpg" alt=""></figure>
                            <div class="mesg-info"> <span>Alis wells</span> <a href="#" title="">recommend your
                                    post</a></div>
                        </li>
                        <li>
                            <figure><img src="images/resources/user1.jpg" alt=""></figure>
                            <div class="mesg-info"> <span>Alis wells</span> <a href="#" title="">share your post
                                    <strong>a good time today!</strong></a></div>
                        </li>
                        <li>
                            <figure><img src="images/resources/user3.jpg" alt=""></figure>
                            <div class="mesg-info"> <span>Alis wells</span> <a href="#" title="">recommend your
                                    post</a></div>
                        </li>
                    </ul> <a href="#" title="" class="main-btn" data-ripple="">view all</a>
                </div>
            </div>
        </div>
    </div>
    <div class="post-new-popup">
        <div class="popup" style="width: 800px;"> <span class="popup-closed"><i class="icofont-close"></i></span>
            <div class="popup-meta">
                <div class="popup-head">
                    <h5><i> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-plus">
                                <line x1="12" y1="5" x2="12" y2="19"></line>
                                <line x1="5" y1="12" x2="19" y2="12"></line>
                            </svg></i>Create New Post</h5>
                </div>
                <div class="post-new">
                    <div class="post-newmeta">
                        <ul class="post-categoroes">
                            <li><i class="icofont-camera"></i> Photo / Video</li>
                            <li><i class="icofont-google-map"></i> Post Location</li>
                            <li><i class="icofont-file-gif"></i> Post Gif</li>
                            <li><i class="icofont-ui-tag"></i> Tag to Friend</li>
                            <li><i class="icofont-users"></i> Share in Group</li>
                            <li><i class="icofont-link"></i> Share Link</li>
                            <li><i class="icofont-video-cam"></i> Go Live</li>
                            <li><i class="icofont-sale-discount"></i> Post Online Course</li>
                            <li><i class="icofont-read-book"></i> Post A Book</li>
                            <li><i class="icofont-globe"></i> Post an Ad</li>
                        </ul>
                        <form method="post" class="dropzone" action="https://wpkixx.com/upload-target">
                            <div class="fallback"> <input name="file" type="file" multiple /></div>
                        </form>
                    </div>
                    <form method="post" class="c-form"><textarea id="emojionearea1"
                            placeholder="What's On Your Mind?"></textarea>
                        <div class="activity-post">
                            <div class="checkbox"> <input type="checkbox" id="checkbox" checked> <label
                                    for="checkbox"><span>Activity Feed</span></label></div>
                            <div class="checkbox"> <input type="checkbox" id="checkbox2" checked> <label
                                    for="checkbox2"><span>My Story</span></label></div>
                        </div>
                        <div class="select-box">
                            <div class="select-box__current" tabindex="1">
                                <div class="select-box__value"><input class="select-box__input" type="radio" id="0"
                                        value="1" name="Ben" checked="checked" />
                                    <p class="select-box__input-text"><i class="icofont-globe-alt"></i> Public</p>
                                </div>
                                <div class="select-box__value"><input class="select-box__input" type="radio" id="1"
                                        value="2" name="Ben" checked="checked" />
                                    <p class="select-box__input-text"><i class="icofont-lock"></i> Private</p>
                                </div>
                                <div class="select-box__value"><input class="select-box__input" type="radio" id="2"
                                        value="3" name="Ben" checked="checked" />
                                    <p class="select-box__input-text"><i class="icofont-user"></i> Specific Friend
                                    </p>
                                </div>
                                <div class="select-box__value"><input class="select-box__input" type="radio" id="3"
                                        value="4" name="Ben" checked="checked" />
                                    <p class="select-box__input-text"><i class="icofont-star"></i> Only Friends</p>
                                </div>
                                <div class="select-box__value"><input class="select-box__input" type="radio" id="4"
                                        value="5" name="Ben" checked="checked" />
                                    <p class="select-box__input-text"><i class="icofont-users-alt-3"></i> Joined
                                        Groups</p>
                                </div> <img class="select-box__icon" src="images/arrow-down.svg" alt="Arrow Icon"
                                    aria-hidden="true" />
                            </div>
                            <ul class="select-box__list">
                                <li><label class="select-box__option" for="0"><i class="icofont-globe-alt"></i>
                                        Public</label></li>
                                <li><label class="select-box__option" for="1"><i class="icofont-lock"></i>
                                        Private</label></li>
                                <li><label class="select-box__option" for="2"><i class="icofont-user"></i> Specific
                                        Friend</label></li>
                                <li><label class="select-box__option" for="3"><i class="icofont-star"></i> Only
                                        Friends</label></li>
                                <li><label class="select-box__option" for="4"><i class="icofont-users-alt-3"></i>
                                        Joined Groups</label></li>
                            </ul>
                        </div> <input class="schedule-btn" type="text" id="datetimepicker" readonly> <input
                            type="text" placeholder="https://www.youtube.com/watch?v=vgvsuiFlA-Y&amp;t=56s"> <button
                            type="submit" class="main-btn">Publish</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="new-question-popup">
        <div class="popup"> <span class="popup-closed"><i class="icofont-close"></i></span>
            <div class="popup-meta">
                <div class="popup-head">
                    <h5><i> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-help-circle">
                                <circle cx="12" cy="12" r="10"></circle>
                                <path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"></path>
                                <line x1="12" y1="17" x2="12.01" y2="17"></line>
                            </svg></i> Ask Question</h5>
                </div>
                <div class="post-new">
                    <form method="post" class="c-form"> <input type="text" placeholder="Question Title"><textarea
                            placeholder="Write Question"></textarea><select>
                            <option>Select Your Question Type</option>
                            <option>Article</option>
                            <option>Book</option>
                            <option>Chapter</option>
                            <option>Code</option>
                            <option>conference Paper</option>
                            <option>Cover Page</option>
                            <option>Data</option>
                            <option>Exprement Finding</option>
                            <option>Method</option>
                            <option>Poster</option>
                            <option>Preprint</option>
                            <option>Technicial Report</option>
                            <option>Thesis</option>
                            <option>Research</option>
                        </select>
                        <div class="uploadimage"> <i class="icofont-eye-alt-alt"></i> <label class="fileContainer">
                                <input type="file">Upload File </label></div> <button type="submit"
                            class="main-btn">Post</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="auto-popup">
        <div class="popup-innner">
            <div class="popup-head">
                <h4>We want to hear from you!</h4>
            </div>
            <div class="popup-meta"> <span>What are you struggling with right now? what we can help you with?</span>
                <form method="post" class="inquiry-about"> <input type="text" placeholder="Your Answer">
                    <h5>How did you hear about us?</h5> <label><input type="radio" name="hear"> Facebook</label>
                    <label><input type="radio" name="hear"> instagram</label> <label><input type="radio"
                            name="hear"> Google Search</label> <label><input type="radio" name="hear">
                        Twitter</label> <label><input type="radio" name="hear"> Whatsapp</label> <label><input
                            type="radio" name="hear"> Other</label> <input type="text" placeholder="Writh Other">
                    <button type="submit" class="primary button">Submit</button> <button
                        class="canceled button outline-primary" type="button">Cancel</button>
                </form>
            </div>
        </div>
    </div>
    <div class="share-wraper">
        <div class="share-options"> <span class="close-btn"><i class="icofont-close-circled"></i></span>
            <h5><i> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="feather feather-share">
                        <path d="M4 12v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-8"></path>
                        <polyline points="16 6 12 2 8 6"></polyline>
                        <line x1="12" y1="2" x2="12" y2="15"></line>
                    </svg></i>Share To!</h5>
            <form method="post"><textarea placeholder="Write Something"></textarea></form>
            <ul>
                <li><a title="" href="#">Your Timeline</a></li>
                <li class="friends"><a title="" href="#">To Friends</a></li>
                <li class="socialz"><a class="active" title="" href="#">Social Media</a></li>
            </ul>
            <div style="display: block;" class="social-media">
                <ul>
                    <li><a title="" href="#" class="facebook"><i class="icofont-facebook"></i></a></li>
                    <li><a title="" href="#" class="twitter"><i class="icofont-twitter"></i></a></li>
                    <li><a title="" href="#" class="instagram"><i class="icofont-instagram"></i></a></li>
                    <li><a title="" href="#" class="pinterest"><i class="icofont-pinterest"></i></a></li>
                    <li><a title="" href="#" class="youtube"><i class="icofont-youtube"></i></a></li>
                    <li><a title="" href="#" class="dribble"><i class="icofont-dribbble"></i></a></li>
                    <li><a title="" href="#" class="behance"><i class="icofont-behance-original"></i></a></li>
                </ul>
            </div>
            <div style="display: none;" class="friends-to"> 
                <div class="follow-men">
                    <figure><img class="mCS_img_loaded" src="images/resources/user1.jpg" alt=""></figure>
                    <div class="follow-meta">
                        <h5><a href="#" title="">Jack Carter</a></h5> <span>family member</span>
                    </div> <a href="#" title="">Share</a>
                </div>
                <div class="follow-men">
                    <figure><img class="mCS_img_loaded" src="images/resources/user2.jpg" alt=""></figure>
                    <div class="follow-meta">
                        <h5><a href="#" title="">Xang Ching</a></h5> <span>Close Friend</span>
                    </div> <a href="#" title="">Share</a>
                </div>
                <div class="follow-men">
                    <figure><img class="mCS_img_loaded" src="images/resources/user3.jpg" alt=""></figure>
                    <div class="follow-meta">
                        <h5><a href="#" title="">Emma Watson</a></h5> <span>Matul Friend</span>
                    </div> <a href="#" title="">Share</a>
                </div>
            </div> <button type="submit" class="main-btn">Publish</button>
        </div>
    </div>
    <div class="cart-product"> <a href="product-cart.html" title="View Cart" data-toggle="tooltip"><i
                class="icofont-cart-alt"></i></a> <span>03</span></div>
    <div class="chat-live"> <a class="chat-btn" href="#" title="Start Live Chat" data-toggle="tooltip"><i
                class="icofont-facebook-messenger"></i></a> <span>07</span></div>
    <div class="chat-box">
        <div class="chat-head">
            <h4>New Messages</h4> <span class="clozed"><i class="icofont-close-circled"></i></span>
            <form Method="post"> <input type="text" placeholder="To.."></form>
        </div>
        <div class="user-tabs">
            <ul class="nav nav-tabs">
                <li class="nav-item"><a class="active" href="#link1" data-toggle="tab">All Friends</a></li>
                <li class="nav-item"><a class="" href="#link2" data-toggle="tab">Active</a><em>3</em></li>
                <li class="nav-item"><a class="" href="#link3" data-toggle="tab">Groups</a></li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane active fade show " id="link1">
                    <div class="friend"> <a href="#" title="">
                            <figure> <img src="images/resources/user1.jpg" alt=""> <span
                                    class="status online"></span> </figure> <span>Oliver</span> <i class=""><img
                                    src="images/resources/user1.jpg" alt=""></i>
                        </a> <a href="#" title="">
                            <figure> <img src="images/resources/user2.jpg" alt=""> <span class="status away"></span>
                            </figure> <span>Amelia</span> <i class="icofont-check-circled"></i>
                        </a> <a href="#" title="">
                            <figure> <img src="images/resources/user3.jpg" alt=""> <span
                                    class="status offline"></span> </figure> <span>George</span> <i class=""><img
                                    src="images/resources/user3.jpg" alt=""></i>
                        </a> <a href="#" title="">
                            <figure> <img src="images/resources/user4.jpg" alt=""> <span
                                    class="status online"></span> </figure> <span>Jacob</span> <i
                                class="icofont-check-circled"></i>
                        </a> <a href="#" title="">
                            <figure> <img src="images/resources/user5.jpg" alt=""> <span class="status away"></span>
                            </figure> <span>Poppy</span> <i class="icofont-check-circled"></i>
                        </a> <a href="#" title="">
                            <figure> <img src="images/resources/user6.jpg" alt=""> <span
                                    class="status online"></span> </figure> <span>Sophia</span> <i class=""><img
                                    src="images/resources/user6.jpg" alt=""></i>
                        </a> <a href="#" title="">
                            <figure> <img src="images/resources/user7.jpg" alt=""> <span class="status away"></span>
                            </figure> <span>Leo king</span> <i class=""><img src="images/resources/user7.jpg"
                                    alt=""></i>
                        </a></div>
                </div>
                <div class="tab-pane fade" id="link2">
                    <div class="friend"> <a href="#" title="">
                            <figure> <img src="images/resources/user1.jpg" alt=""> <span
                                    class="status online"></span> </figure> <span>Samu Jane</span> <i class=""><img
                                    src="images/resources/user1.jpg" alt=""></i>
                        </a> <a href="#" title="">
                            <figure> <img src="images/resources/user6.jpg" alt=""> <span
                                    class="status online"></span> </figure> <span>Tina Mark</span> <i class=""><img
                                    src="images/resources/user6.jpg" alt=""></i>
                        </a> <a href="#" title="">
                            <figure> <img src="images/resources/user7.jpg" alt=""> <span
                                    class="status online"></span> </figure> <span>Ak William</span> <i class=""><img
                                    src="images/resources/user7.jpg" alt=""></i>
                        </a></div>
                </div>
                <div class="tab-pane fade" id="link3">
                    <div class="friend"> <a href="#" title="">
                            <figure class="group-chat"> <img src="images/resources/user5.jpg" alt=""> <img
                                    class="two" src="images/resources/user3.jpg" alt=""> <span
                                    class="status online"></span> </figure> <span>Boys World</span> <i
                                class="icofont-check-circled"></i>
                        </a> <a href="#" title="">
                            <figure class="group-chat"> <img src="images/resources/user2.jpg" alt=""> <img
                                    class="two" src="images/resources/user3.jpg" alt=""> <span
                                    class="status online"></span> </figure> <span>KK university Fellows</span> <i
                                class="icofont-check-circled"></i>
                        </a> <a href="#" title="">
                            <figure class="group-chat"> <img src="images/resources/user3.jpg" alt=""> <img
                                    class="two" src="images/resources/user2.jpg" alt=""> <span
                                    class="status away"></span> </figure> <span>Education World</span> <i
                                class="icofont-check-circled"></i>
                        </a></div>
                </div>
            </div>
        </div>
        <div class="chat-card">
            <div class="chat-card-head"> <img src="images/resources/user13.jpg" alt="">
                <h6>George Floyd</h6>
                <div class="frnd-opt">
                    <div class="more">
                        <div class="more-post-optns"> <i class=""> <svg xmlns="http://www.w3.org/2000/svg"
                                    width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                    class="feather feather-more-horizontal">
                                    <circle cx="12" cy="12" r="1"></circle>
                                    <circle cx="19" cy="12" r="1"></circle>
                                    <circle cx="5" cy="12" r="1"></circle>
                                </svg></i>
                            <ul>
                                <li> <i class="icofont-pen-alt-1"></i>Edit Post <span>Edit This Post within a
                                        Hour</span></li>
                                <li> <i class="icofont-ban"></i>Hide Chat <span>Hide This Post</span></li>
                                <li> <i class="icofont-ui-delete"></i>Delete Chat <span>If inappropriate Post By
                                        Mistake</span></li>
                                <li> <i class="icofont-flag"></i>Report <span>Inappropriate Chat</span></li>
                            </ul>
                        </div>
                    </div> <span class="close-mesage"><i class="icofont-close"></i></span>
                </div>
            </div>
            <div class="chat-list">
                <ul>
                    <li class="me">
                        <div class="chat-thumb"><img src="images/resources/chatlist1.jpg" alt=""></div>
                        <div class="notification-event">
                            <div class="chat-message-item">
                                <figure><img src="images/resources/album5.jpg" alt=""></figure>
                                <div class="caption">4.5kb <i class="icofont-download" title="Download"></i></div>
                            </div> <span class="notification-date"> <time datetime="2004-07-24T18:18"
                                    class="entry-date updated">Yesterday at 8:10pm</time> <i><img
                                        src="images/d-tick.png" alt=""></i> </span>
                        </div>
                    </li>
                    <li class="me">
                        <div class="chat-thumb"><img src="images/resources/chatlist1.jpg" alt=""></div>
                        <div class="notification-event"> <span class="chat-message-item"> Hi James! Please remember
                                to buy the food for tomorrow! I’m gonna be handling the gifts and Jake’s gonna get
                                the drinks </span> <span class="notification-date"> <time
                                    datetime="2004-07-24T18:18" class="entry-date updated">Yesterday at
                                    8:10pm</time> <i><img src="images/d-tick.png" alt=""></i> </span></div>
                    </li>
                    <li class="you">
                        <div class="chat-thumb"><img src="images/resources/chatlist2.jpg" alt=""></div>
                        <div class="notification-event"> <span class="chat-message-item"> Hi James! Please remember
                                to buy the food for tomorrow! I’m gonna be handling the gifts and Jake’s gonna get
                                the drinks </span> <span class="notification-date"> <time
                                    datetime="2004-07-24T18:18" class="entry-date updated">Yesterday at
                                    8:10pm</time> <i><img src="images/d-tick.png" alt=""></i> </span></div>
                    </li>
                    <li class="me">
                        <div class="chat-thumb"><img src="images/resources/chatlist1.jpg" alt=""></div>
                        <div class="notification-event"> <span class="chat-message-item"> Hi James! Please remember
                                to buy the food for tomorrow! I’m gonna be handling the gifts and Jake’s gonna get
                                the drinks </span> <span class="notification-date"> <time
                                    datetime="2004-07-24T18:18" class="entry-date updated">Yesterday at
                                    8:10pm</time> <i><img src="images/d-tick.png" alt=""></i> </span></div>
                    </li>
                </ul>
                <form class="text-box"><textarea placeholder="Write Mesage..."></textarea>
                    <div class="add-smiles"> <span><img src="images/smiles/happy-3.png" alt=""></span></div>
                    <div class="smiles-bunch"> <i><img src="images/smiles/thumb.png" alt=""></i> <i><img
                                src="images/smiles/angry-1.png" alt=""></i> <i><img src="images/smiles/angry.png"
                                alt=""></i> <i><img src="images/smiles/bored-1.png" alt=""></i> <i><img
                                src="images/smiles/confused-1.png" alt=""></i> <i><img src="images/smiles/wink.png"
                                alt=""></i> <i><img src="images/smiles/weep.png" alt=""></i> <i><img
                                src="images/smiles/tongue-out.png" alt=""></i> <i><img
                                src="images/smiles/suspicious.png" alt=""></i> <i><img
                                src="images/smiles/crying-1.png" alt=""></i> <i><img src="images/smiles/crying.png"
                                alt=""></i> <i><img src="images/smiles/embarrassed.png" alt=""></i> <i><img
                                src="images/smiles/emoticons.png" alt=""></i> <i><img
                                src="images/smiles/happy-2.png" alt=""></i></div> <button type="submit"><i
                            class="icofont-paper-plane"></i></button>
                </form>
            </div>
        </div>
    </div>
    <div class="createroom-popup">
        <div class="popup"> <span class="popup-closed"><i class="icofont-close"></i></span>
            <div class="popup-meta">
                <div class="popup-head text-center">
                    <h5 class="only-icon"><i class="icofont-video-cam"></i></h5>
                </div>
                <div class="room-meta">
                    <h4>Create Your Room</h4>
                    <ul>
                        <li> <i class="icofont-hand"></i>
                            <div>
                                <h6>Room Activity</h6> <span>Jack's Room</span>
                            </div>
                            <div class="checkbox"> <input type="checkbox" id="checkbox3"> <label
                                    for="checkbox3"></label></div>
                        </li>
                        <li> <i class="icofont-clock-time"></i>
                            <div>
                                <h6>Start Time</h6> <span>Now</span>
                            </div>
                            <div class="checkbox"> <input type="checkbox" id="checkbox4"> <label
                                    for="checkbox4"></label></div>
                        </li>
                        <li> <i class="icofont-users-alt-4"></i>
                            <div>
                                <h6>Invite to All Friends</h6> <span>Allow All friends to see this room</span>
                            </div>
                            <div class="checkbox"> <input type="checkbox" id="checkbox5"> <label
                                    for="checkbox5"></label></div>
                        </li>
                    </ul> <span>Your room isn't visible until you invite people after you've created it.</span> <a
                        href="#" title="" class="main-btn full-width">Create Room</a>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="img-comt">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header"> <button type="button" class="close" data-dismiss="modal">×</button></div>
                <div class="modal-body">
                    <div class="row merged">
                        <div class="col-lg-9">
                            <div class="pop-image">
                                <div class="pop-item">
                                    <div class="action-block"> <a class="action-button"> <svg
                                                xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-tag">
                                                <path
                                                    d="M20.59 13.41l-7.17 7.17a2 2 0 0 1-2.83 0L2 12V2h10l8.59 8.59a2 2 0 0 1 0 2.82z" />
                                                <line x1="7" y1="7" x2="7.01" y2="7" />
                                            </svg> </a> <a class="action-button"> <svg
                                                xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-map-pin">
                                                <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z" />
                                                <circle cx="12" cy="10" r="3" />
                                            </svg> </a> <a class="action-button"> <svg
                                                xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-arrow-down">
                                                <line x1="12" y1="5" x2="12" y2="19" />
                                                <polyline points="19 12 12 19 5 12" />
                                            </svg> </a> <a class="action-button"> <svg
                                                xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-more-vertical">
                                                <circle cx="12" cy="12" r="1" />
                                                <circle cx="12" cy="5" r="1" />
                                                <circle cx="12" cy="19" r="1" />
                                            </svg> </a></div>
                                    <figure><img src="images/resources/blog-detail.jpg" alt=""></figure>
                                    <div class="stat-tools">
                                        <div class="box">
                                            <div class="Like"><a class="Like__link"><i class="icofont-like"></i>
                                                    Like</a>
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
                                        </div> <a title="" href="#" class="share-to"><i
                                                class="icofont-share-alt"></i> Share</a>
                                        <div class="emoji-state">
                                            <div class="popover_wrapper"> <a class="popover_title" href="#"
                                                    title=""><img alt="" src="images/smiles/thumb.png"></a>
                                                <div class="popover_content"> <span><img alt=""
                                                            src="images/smiles/thumb.png"> Likes</span>
                                                    <ul class="namelist">
                                                        <li>Jhon Doe</li>
                                                        <li>Amara Sin</li>
                                                        <li>Sarah K.</li>
                                                        <li><span>20+ more</span></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="popover_wrapper"> <a class="popover_title" href="#"
                                                    title=""><img alt="" src="images/smiles/heart.png"></a>
                                                <div class="popover_content"> <span><img alt=""
                                                            src="images/smiles/heart.png"> Love</span>
                                                    <ul class="namelist">
                                                        <li>Amara Sin</li>
                                                        <li>Jhon Doe</li>
                                                        <li><span>10+ more</span></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="popover_wrapper"> <a class="popover_title" href="#"
                                                    title=""><img alt="" src="images/smiles/smile.png"></a>
                                                <div class="popover_content"> <span><img alt=""
                                                            src="images/smiles/smile.png"> Happy</span>
                                                    <ul class="namelist">
                                                        <li>Sarah K.</li>
                                                        <li>Jhon Doe</li>
                                                        <li>Amara Sin</li>
                                                        <li><span>100+ more</span></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="popover_wrapper"> <a class="popover_title" href="#"
                                                    title=""><img alt="" src="images/smiles/weep.png"></a>
                                                <div class="popover_content"> <span><img alt=""
                                                            src="images/smiles/weep.png"> Dislike</span>
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
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="commentbar">
                                <div class="user">
                                    <figure><img src="images/resources/user1.jpg" alt=""></figure>
                                    <div class="user-information">
                                        <h4><a href="#" title="">Danile Walker</a></h4> <span>2 hours ago</span>
                                    </div> <a href="#" title="Follow" data-ripple="">Follow</a>
                                </div>
                                <div class="we-video-info">
                                    <ul>
                                        <li> <span title="Comments" class="liked"> <i> <svg
                                                        xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round" class="feather feather-thumbs-up">
                                                        <path
                                                            d="M14 9V5a3 3 0 0 0-3-3l-4 9v11h11.28a2 2 0 0 0 2-1.7l1.38-9a2 2 0 0 0-2-2.3zM7 22H4a2 2 0 0 1-2-2v-7a2 2 0 0 1 2-2h3">
                                                        </path>
                                                    </svg></i> <ins>52</ins> </span></li>
                                        <li> <span title="Comments" class="comment"> <i> <svg
                                                        xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round"
                                                        class="feather feather-message-square">
                                                        <path
                                                            d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z">
                                                        </path>
                                                    </svg></i> <ins>52</ins> </span></li>
                                        <li> <span> <a title="Share" href="#" class=""> <i> <svg
                                                            xmlns="http://www.w3.org/2000/svg" width="16"
                                                            height="16" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round"
                                                            class="feather feather-share-2">
                                                            <circle cx="18" cy="5" r="3"></circle>
                                                            <circle cx="6" cy="12" r="3"></circle>
                                                            <circle cx="18" cy="19" r="3"></circle>
                                                            <line x1="8.59" y1="13.51" x2="15.42" y2="17.49"></line>
                                                            <line x1="15.41" y1="6.51" x2="8.59" y2="10.49"></line>
                                                        </svg></i> </a> <ins>20</ins> </span></li>
                                    </ul>
                                    <div class="users-thumb-list"> <a href="#" title="" data-toggle="tooltip"
                                            data-original-title="Anderw"> <img src="images/resources/userlist-1.jpg"
                                                alt=""> </a> <a href="#" title="" data-toggle="tooltip"
                                            data-original-title="frank"> <img src="images/resources/userlist-2.jpg"
                                                alt=""> </a> <a href="#" title="" data-toggle="tooltip"
                                            data-original-title="Sara"> <img src="images/resources/userlist-1.jpg"
                                                alt=""> </a> <a href="#" title="" data-toggle="tooltip"
                                            data-original-title="Amy"> <img src="images/resources/userlist-2.jpg"
                                                alt=""> </a> <span><strong>You</strong>, <b>Sarah</b> and <a
                                                title="" href="#">24+ more</a> liked</span></div>
                                </div>
                                <div class="new-comment" style="display: block;"> 
                                    <form method="post"> <input type="text" placeholder="write comment"> <button
                                            type="submit"><i class="icofont-paper-plane"></i></button></form>
                                    <div class="comments-area">
                                        <ul>
                                            <li>
                                                <figure><img alt="" src="images/resources/user1.jpg"></figure>
                                                <div class="commenter">
                                                    <h5><a title="" href="#">Jack Carter</a></h5> <span>2 hours
                                                        ago</span>
                                                    <p> i think that some how, we learn who we really are and then
                                                        live with that decision, great post!</p> <span>you can view
                                                        the more detail via link</span> <a title=""
                                                        href="#">https://www.youtube.com/watch?v=HpZgwHU1GcI</a>
                                                </div> <a title="Like" href="#"><i class="icofont-heart"></i></a> <a
                                                    title="Reply" href="#" class="reply-coment"><i
                                                        class="icofont-reply"></i></a>
                                            </li>
                                            <li>
                                                <figure><img alt="" src="images/resources/user2.jpg"></figure>
                                                <div class="commenter">
                                                    <h5><a title="" href="#">Ching xang</a></h5> <span>2 hours
                                                        ago</span>
                                                    <p> i think that some how, we learn who we really are and then
                                                        live with that decision, great post!</p>
                                                </div> <a title="Like" href="#"><i class="icofont-heart"></i></a> <a
                                                    title="Reply" href="#" class="reply-coment"><i
                                                        class="icofont-reply"></i></a>
                                            </li>
                                            <li>
                                                <figure><img alt="" src="images/resources/user3.jpg"></figure>
                                                <div class="commenter">
                                                    <h5><a title="" href="#">Danial Comb</a></h5> <span>2 hours
                                                        ago</span>
                                                    <p> i think that some how, we learn who we really are and then
                                                        live with that decision, great post!</p>
                                                </div> <a title="Like" href="#"><i class="icofont-heart"></i></a> <a
                                                    title="Reply" href="#" class="reply-coment"><i
                                                        class="icofont-reply"></i></a>
                                            </li>
                                            <li>
                                                <figure><img alt="" src="images/resources/user4.jpg"></figure>
                                                <div class="commenter">
                                                    <h5><a title="" href="#">Jack Carter</a></h5> <span>2 hours
                                                        ago</span>
                                                    <p> i think that some how, we learn who we really are and then
                                                        live with that decision, great post!</p>
                                                </div> <a title="Like" href="#"><i class="icofont-heart"></i></a> <a
                                                    title="Reply" href="#" class="reply-coment"><i
                                                        class="icofont-reply"></i></a>
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
</div>
<script src="js/main.min.js"></script>
<script src="js/date-time.js"></script>
<script src="js/script.js"></script>
</body>
<!-- Mirrored from wpkixx.com/html/socimo-dark/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 28 Jul 2023 11:27:51 GMT -->

</html>
