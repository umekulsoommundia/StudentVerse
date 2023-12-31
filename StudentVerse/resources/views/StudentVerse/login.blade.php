@extends("StudentVerse.layout2")
@section('main')

    <!-- ================> login section start here <================== -->
    <section class="log-reg">
        <div class="top-menu-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-7">
                        <div class="logo">
                            <a href="home"><img src="assets/images/logo/logo.png" alt="logo"></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-5">
                        <a href="home" class="backto-home"><i class="fas fa-chevron-left"></i> Back to Home</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="image image-log"></div>
                <div class="col-lg-7">
                    <div class="log-reg-inner">
                        <div class="section-header inloginp">
                            <h2 class="title">Welcome to Ollya</h2>
                        </div>
                        <div class="main-content inloginp">
                            <form action="#">
                                <div class="form-group">
                                    <label >Your Address</label>
                                    <input type="email" class="my-form-control" placeholder="Enter Your Email">
                                </div>
                                <div class="form-group">
                                    <label >Password</label>
                                    <input type="password" class="my-form-control" placeholder="Enter Your Password">
                                </div>
                                <p class="f-pass">Forgot your password? <a href="#">recover password</a></p>
                                <div class="text-center">
                                    <button type="submit" class="default-btn"><span>Sign IN</span></button>
                                </div>
                                <div class="or">
                                    <p>OR</p>
                                </div>
                                <div class="or-content">
                                    <p>Sign up with your email</p>
                                    <a href="#" class="default-btn reverse"><img src="assets/images/login/google.png" alt="google"> <span>Sign Up with Google</span></a>
                                    <p class="or-signup"> Don't have an account? <a href="register.html">Sign up here</a></p>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ================> login section end here <================== -->

	@endsection