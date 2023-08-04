@extends("StudentVerse.layout2")
@section('main')

    <!-- ================> login section start here <================== -->
    <section class="log-reg">
        <div class="top-menu-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-7">
                        <div class="logo">
                            <a href="index.html"><img src="assets/images/logo/logo.png" alt="logo"></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-5">
                        <a href="index.html" class="backto-home"><i class="fas fa-chevron-left"></i> Back to Home</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="image">
                </div>
                <div class="col-lg-7">
                    <div class="log-reg-inner">
                        <div class="section-header">
                            <h2 class="title">Welcome to Ollya </h2>
                            <p>Let's create your profile! Just fill in the fields below, and we’ll get a new account. </p>
                        </div>
                        <div class="main-content">
                            <form action="#">
                                <h4 class="content-title">Acount Details</h4>
                                <div class="form-group">
                                    <label>Username*</label>
                                    <input type="text" class="my-form-control" placeholder="Enter Your Usewrname">
                                </div>
                                <div class="form-group">
                                    <label>Email Address*</label>
                                    <input type="email" class="my-form-control" placeholder="Enter Your Email">
                                </div>
                                <div class="form-group">
                                    <label>Password*</label>
                                    <input type="text" class="my-form-control" placeholder="Enter Your Password">
                                </div>
                                <div class="form-group">
                                    <label>Confirm Password*</label>
                                    <input type="text" class="my-form-control" placeholder="Enter Your Password">
                                </div>
                                <h4 class="content-title mt-5">Profile Details</h4>
                                <div class="form-group">
                                    <label>Name*</label>
                                    <input type="text" class="my-form-control" placeholder="Enter Your Full Name">
                                </div>
                                <div class="form-group">
                                    <label>Birthday*</label>
                                    <input type="date" class="my-form-control">
                                </div>
                                <div class="form-group">
                                    <label>I am a*</label>
                                    <div class="banner__inputlist">
                                        <div class="s-input me-3">
                                            <input type="radio" name="gender1" id="males1"><label for="males1">Man</label>
                                        </div>
                                        <div class="s-input">
                                            <input type="radio" name="gender1" id="females1"><label
                                                for="females1">Woman</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Looking for a*</label>
                                    <div class="banner__inputlist">
                                        <div class="s-input me-3">
                                            <input type="radio" name="gender2" id="males"><label for="males">Man</label>
                                        </div>
                                        <div class="s-input">
                                            <input type="radio" name="gender2" id="females"><label
                                                for="females">Woman</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Marial status*</label>
                                    <div class="banner__inputlist">
                                        <select>
                                            <option value="Single" selected>Single</option>
                                            <option value="Marid">Marid</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>City*</label>
                                    <input type="text" class="my-form-control" placeholder="Enter Your City">
                                </div>
                                <button class="default-btn reverse" data-toggle="modal" data-target="#email-confirm"><span>Create Your Profile</span></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ================> login section end here <================== -->

	
	@endsection