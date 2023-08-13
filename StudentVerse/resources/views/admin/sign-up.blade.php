<!DOCTYPE html>
<html lang="en" >
    <!--begin::Head-->
    
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
        <title>StudentVerse</title>
        <meta charset="utf-8"/>
        <meta name="description" content="
            The most advanced Bootstrap 5 Admin Theme with 40 unique prebuilt layouts on Themeforest trusted by 100,000 beginners and professionals. Multi-demo, 
            Dark Mode, RTL support and complete React, Angular, Vue, Asp.Net Core, Rails, Spring, Blazor, Django, Express.js, Node.js, Flask, Symfony & Laravel versions. 
            Grab your copy now and get life-time updates for free.
        "/>
        <meta name="keywords" content="
            metronic, bootstrap, bootstrap 5, angular, VueJs, React, Asp.Net Core, Rails, Spring, Blazor, Django, Express.js, 
            Node.js, Flask, Symfony & Laravel starter kits, admin themes, web design, figma, web development, free templates, 
            free admin themes, bootstrap theme, bootstrap template, bootstrap dashboard, bootstrap dak mode, bootstrap button, 
            bootstrap datepicker, bootstrap timepicker, fullcalendar, datatables, flaticon
        "/>
        <meta name="viewport" content="width=device-width, initial-scale=1"/>      
        <meta property="og:locale" content="en_US" />
        <meta property="og:type" content="article" />
        <meta property="og:title" content="
            Metronic - Bootstrap Admin Template, HTML, VueJS, React, Angular. Laravel, Asp.Net Core, Ruby on Rails, 
            Spring Boot, Blazor, Django, Express.js, Node.js, Flask Admin Dashboard Theme & Template
        " />
     

        <!--begin::Fonts(mandatory for all pages)-->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700"/>        <!--end::Fonts-->

        
        
                            <link href="../../../assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css"/>
                            <link href="../../../assets/css/style.bundle.css" rel="stylesheet" type="text/css"/>
                        <!--end::Global Stylesheets Bundle-->
        
         
        
        <!--begin::Main-->
	<!--begin::Root-->
	<div class="d-flex flex-column flex-root">
		
<!--begin::Authentication - Sign-up -->
<div class="d-flex flex-column flex-lg-row flex-column-fluid">    
    <!--begin::Body-->
    <div class="d-flex flex-column flex-lg-row-fluid w-lg-50 p-10 order-2 order-lg-1">
        <!--begin::Form-->
        <div class="d-flex flex-center flex-column flex-lg-row-fluid">
            <!--begin::Wrapper-->
            <div class="w-lg-500px p-10">
                
<!--begin::Form-->
<form  method="POST" action="/AdminSignupPost" enctype="multipart-formdata" class="form w-100"   id="">
    @csrf
    <!--begin::Heading-->
    <div class="text-center mb-11">
        <!--begin::Title-->
        <h1 class="text-dark fw-bolder mb-3">
Admin Register
        </h1>
        <!--end::Title-->

        <!--begin::Subtitle-->
        <div class="text-gray-500 fw-semibold fs-6">
            Your Social Campaigns
        </div>
        <!--end::Subtitle--->
    </div>
    <!--begin::Heading-->

    <!--begin::Login options-->
    <div class="row g-3 mb-9">
        <!--begin::Col-->
        <div class="col-md-6">
            <!--begin::Google link--->
            <a href="#" class="btn btn-flex btn-outline btn-text-gray-700 btn-active-color-primary bg-state-light flex-center text-nowrap w-100">
                <img alt="Logo" src="../../../assets/media/svg/brand-logos/google-icon.svg" class="h-15px me-3"/>   
                Sign in with Google
            </a>
            <!--end::Google link--->
        </div>
        <!--end::Col-->

        <!--begin::Col-->
        <div class="col-md-6">
            <!--begin::Google link--->
            <a href="#" class="btn btn-flex btn-outline btn-text-gray-700 btn-active-color-primary bg-state-light flex-center text-nowrap w-100">
                <img alt="Logo" src="../../../assets/media/svg/brand-logos/apple-black.svg" class="theme-light-show h-15px me-3"/>  
                <img alt="Logo" src="../../../assets/media/svg/brand-logos/apple-black-dark.svg" class="theme-dark-show h-15px me-3"/>     
                Sign in with Apple
            </a>
            <!--end::Google link--->
        </div>
        <!--end::Col-->
    </div>
    <!--end::Login options-->

    <!--begin::Separator-->
    <div class="separator separator-content my-14"><span class="w-125px text-gray-500 fw-semibold fs-7">Or with email</span></div>
    <!--end::Separator-->

    <div class="fv-row mb-8">
        <!--begin::Email-->
        <input type="text" placeholder="User Name" required name="username" autocomplete="off" class="form-control bg-transparent"/> 
        <!--end::Email-->
    </div>

    <!--begin::Input group--->
    <div class="fv-row mb-8">
        <!--begin::Email-->
        <input type="text" required placeholder="Email"  value="{{ old('email') }}" name="email" autocomplete="off" class="form-control bg-transparent"/> 
        <!--end::Email-->
@if($errors->has('email'))
    <span class="error" style="color: red">{{ $errors->first('email') }}</span>
@endif

    </div>

    <!--begin::Input group-->
    <div class="fv-row mb-8" data-kt-password-meter="true">
        <!--begin::Wrapper-->
        <div class="mb-1">
            <!--begin::Input wrapper-->
            <div class="position-relative mb-3">    
                <input class="form-control bg-transparent" required type="password" placeholder="Password" name="password" autocomplete="off"/>

             
            </div>
            <!--end::Input wrapper-->

            <!--begin::Meter-->
            <div class="d-flex align-items-center mb-3" data-kt-password-meter-control="highlight">
                <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
                <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
                <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
                <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px"></div>
            </div>
            <!--end::Meter-->
        </div>
        <!--end::Wrapper-->

        <!--begin::Hint-->
        <div class="text-muted">
            Use 8 or more characters with a mix of letters, numbers & symbols.
        </div>
        <!--end::Hint-->
    </div>
    <!--end::Input group--->

   




    <!--begin::Submit button-->
    <div class="d-grid mb-10">
        <button type="submit" id="kt_sign_up_submit" class="btn btn-primary">
            
<!--begin::Indicator label-->
<span class="indicator-label">
    Register</span>
<!--end::Indicator label-->

<!--begin::Indicator progress-->
<span class="indicator-progress">
    Please wait...    <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
</span>
<!--end::Indicator progress-->        </button>
    </div>
    <!--end::Submit button-->
   
    <!--begin::Sign up-->
    <div class="text-gray-500 text-center fw-semibold fs-6">
        Already have an Account?

        <a href="login" class="link-primary fw-semibold">
            Sign in
        </a>
    </div>
    <!--end::Sign up-->
</form>
<!--end::Form--> 

            </div>
            <!--end::Wrapper-->
        </div>
        <!--end::Form-->       

   
    </div>
    <!--end::Body-->
    

</div>
<!--end::Authentication - Sign-up-->
                         


                         	</div>
	<!--end::Root-->
<!--end::Main-->

        
        <!--begin::Javascript-->
        <script>
            var hostUrl = "../../../assets/index.html";        </script>

                    <!--begin::Global Javascript Bundle(mandatory for all pages)-->
                            <script src="../../../assets/plugins/global/plugins.bundle.js"></script>
                            <script src="../../../assets/js/scripts.bundle.js"></script>
                        <!--end::Global Javascript Bundle-->
        
        
                    <!--begin::Custom Javascript(used for this page only)-->
                            <script src="../../../assets/js/custom/authentication/sign-up/general.js"></script>
                        <!--end::Custom Javascript-->
                <!--end::Javascript-->
        
            </body>
    <!--end::Body-->

</html>