@extends("StudentVerse.layout2")
@section('main')

    <!-- ================> header section start here <================== -->
    <header class="header" id="navbar">
        <div class="header__top d-none d-lg-block">
			<div class="container">
				<div class="header__top--area">
					<div class="header__top--left">
						<ul>
                            <li>
                                <i class="fa-solid fa-phone"></i> <span>+800-123-4567 6587</span>
                            </li>
                            <li>
                                <i class="fa-solid fa-location-dot"></i> Beverley, New York 224 USA
                            </li>
                        </ul>
					</div>
					<div class="header__top--right">
						<ul>
                            <li><a href="#"><i class="fa-brands fa-facebook-f"></i> Facebook</a></li>
                            <li><a href="#"><i class="fa-brands fa-instagram"></i> Instagram</a></li>
                            <li><a href="#"><i class="fa-brands fa-youtube"></i> Youtube</a></li>
                        </ul>
					</div>
				</div>
			</div>
		</div>
		<div class="header__bottom">
			<div class="container">
				<nav class="navbar navbar-expand-lg">
					<a class="navbar-brand" href="index.html"><img src="assets/images/logo/logo.png" alt="logo"></a>
					<button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse"
						data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false"
						aria-label="Toggle navigation">
						<span class="navbar-toggler--icon"></span>
					</button>
					<div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
						<div class="navbar-nav mainmenu">
							<ul>
								<li>
									<a href="#0">Home</a>
									<ul>
										<li><a href="index.html">Home Page One</a></li>
										<li><a href="index-2.html">Home Page Two</a></li>
										<li><a href="index-3.html">Home Page Three</a></li>
									</ul>
								</li>
								<li>
									<a href="#0">Pages</a>
									<ul>
										<li><a href="about.html">About Us</a></li>
                                        <li><a href="membership.html">Membership</a></li>
                                        <li><a href="comingsoon.html">comingsoon</a></li>
                                        <li><a href="404.html">404</a></li>
									</ul>
								</li>
								<li class="active">
									<a href="#0">Community</a>
									<ul>
										<li><a href="community.html">Community</a></li>
										<li><a href="group.html">All Group</a></li>
										<li><a href="members.html" class="active">All Members</a></li>
										<li><a href="activity.html">Activity</a></li>
									</ul>
								</li>
								<li>
									<a href="#0">Shops</a>
									<ul>
										<li><a href="shop.html">Product</a></li>
										<li><a href="shop-single.html">Product Details</a></li>
										<li><a href="shop-cart.html">Product Cart</a></li>
									</ul>
								</li>
								<li>
									<a href="#0">Blogs</a>
									<ul>
										<li><a href="blog.html">Blog</a></li>
										<li><a href="blog-2.html">Blog Style Two</a></li>
										<li><a href="blog-single.html">Blog Details</a></li>
									</ul>
								</li>
								<li><a href="contact.html">contact</a></li>
							</ul>
						</div>
						<div class="header__more">
                            <button class="default-btn dropdown-toggle" type="button" id="moreoption" data-bs-toggle="dropdown" aria-expanded="false">My Account</button>
                            <ul class="dropdown-menu" aria-labelledby="moreoption">
                                <li><a class="dropdown-item" href="login.html">Log In</a></li>
                                <li><a class="dropdown-item" href="register.html">Sign Up</a></li>
                            </ul>
						</div>
					</div>
				</nav>
			</div>
		</div>
    </header>
    <!-- ================> header section end here <================== -->



    <!-- ================> Page Header section start here <================== -->
    <div class="pageheader bg_img" style="background-image: url(assets/images/bg-img/pageheader.jpg);">
        <div class="container">
            <div class="pageheader__content text-center">
                <h2>Ollya All Members</h2>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center mb-0">
                      <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                      <li class="breadcrumb-item"><a href="#">Community</a></li>
                      <li class="breadcrumb-item active" aria-current="page">All Members</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- ================> Page Header section end here <================== -->



    <!-- ================> About section start here <================== -->
	<div class="about about--style3 padding-top pt-xl-0">
		<div class="container">
			<div class="section__wrapper">
				<form action="#">
					<div class="banner__list">
						<div class="row align-items-center row-cols-xl-5 row-cols-lg-3 row-cols-sm-2 row-cols-1">
							<div class="col-6">
								<label>I am a</label>
								<div class="banner__inputlist">
									<select>
										<option>Select Gender</option>
										<option value="male" selected>Male</option>
										<option value="female">Female</option>
										<option value="others">Others</option>
									</select>
								</div>
							</div>
							<div class="col-6">
								<label>Looking for</label>
								<div class="banner__inputlist">
									<select>
										<option>Select Gender</option>
										<option value="male">Male</option>
										<option value="female" selected>Female</option>
										<option value="others">Others</option>
									</select>
								</div>
							</div>
							<div class="col">
								<label>Age</label>
								<div class="row g-3">
									<div class="col-6">
										<div class="banner__inputlist">
											<select>
												<option value="18" selected>18</option>
												<option value="19">19</option>
												<option value="20">20</option>
												<option value="21">21</option>
												<option value="22">22</option>
												<option value="23">23</option>
												<option value="24">24</option>
												<option value="25">25</option>
												<option value="26">26</option>
												<option value="27">27</option>
												<option value="28">28</option>
												<option value="29">29</option>
												<option value="30">30</option>
												<option value="31">31</option>
												<option value="32">32</option>
												<option value="33">33</option>
												<option value="34">34</option>
												<option value="35">35</option>
												<option value="36">36</option>
												<option value="37">37</option>
												<option value="38">38</option>
												<option value="39">39</option>
												<option value="40">40</option>
											</select>
										</div>
									</div>
									<div class="col-6">
										<div class="banner__inputlist">
											<select>
												<option value="18">18</option>
												<option value="19">19</option>
												<option value="20">20</option>
												<option value="21">21</option>
												<option value="22">22</option>
												<option value="23">23</option>
												<option value="24">24</option>
												<option value="25" selected>25</option>
												<option value="26">26</option>
												<option value="27">27</option>
												<option value="28">28</option>
												<option value="29">29</option>
												<option value="30">30</option>
												<option value="31">31</option>
												<option value="32">32</option>
												<option value="33">33</option>
												<option value="34">34</option>
												<option value="35">35</option>
												<option value="36">36</option>
												<option value="37">37</option>
												<option value="38">38</option>
												<option value="39">39</option>
												<option value="40">40</option>
											</select>
										</div>
									</div>
								</div>
							</div>
							<div class="col">
								<label>Country</label>
								<div class="banner__inputlist">
									<select id="country" name="country">
										<option value="Afganistan">Afghanistan</option>
										<option value="Albania">Albania</option>
										<option value="Algeria">Algeria</option>
										<option value="American Samoa">American Samoa</option>
										<option value="Andorra">Andorra</option>
										<option value="Angola">Angola</option>
										<option value="Anguilla">Anguilla</option>
										<option value="Antigua & Barbuda">Antigua & Barbuda</option>
										<option value="Argentina">Argentina</option>
										<option value="Armenia">Armenia</option>
										<option value="Aruba">Aruba</option>
										<option value="Australia">Australia</option>
										<option value="Austria">Austria</option>
										<option value="Azerbaijan">Azerbaijan</option>
										<option value="Bahamas">Bahamas</option>
										<option value="Bahrain">Bahrain</option>
										<option value="Bangladesh" selected>Bangladesh</option>
										<option value="Barbados">Barbados</option>
										<option value="Belarus">Belarus</option>
										<option value="Belgium">Belgium</option>
										<option value="Belize">Belize</option>
										<option value="Benin">Benin</option>
										<option value="Bermuda">Bermuda</option>
										<option value="Bhutan">Bhutan</option>
										<option value="Bolivia">Bolivia</option>
										<option value="Bonaire">Bonaire</option>
										<option value="Bosnia & Herzegovina">Bosnia & Herzegovina</option>
										<option value="Botswana">Botswana</option>
										<option value="Brazil">Brazil</option>
										<option value="British Indian Ocean Ter">British Indian Ocean Ter</option>
										<option value="Brunei">Brunei</option>
										<option value="Bulgaria">Bulgaria</option>
										<option value="Burkina Faso">Burkina Faso</option>
										<option value="Burundi">Burundi</option>
										<option value="Cambodia">Cambodia</option>
										<option value="Cameroon">Cameroon</option>
										<option value="Canada">Canada</option>
										<option value="Canary Islands">Canary Islands</option>
										<option value="Cape Verde">Cape Verde</option>
										<option value="Cayman Islands">Cayman Islands</option>
										<option value="Central African Republic">Central African Republic</option>
										<option value="Chad">Chad</option>
										<option value="Channel Islands">Channel Islands</option>
										<option value="Chile">Chile</option>
										<option value="China">China</option>
										<option value="Christmas Island">Christmas Island</option>
										<option value="Cocos Island">Cocos Island</option>
										<option value="Colombia">Colombia</option>
										<option value="Comoros">Comoros</option>
										<option value="Congo">Congo</option>
										<option value="Cook Islands">Cook Islands</option>
										<option value="Costa Rica">Costa Rica</option>
										<option value="Cote DIvoire">Cote DIvoire</option>
										<option value="Croatia">Croatia</option>
										<option value="Cuba">Cuba</option>
										<option value="Curaco">Curacao</option>
										<option value="Cyprus">Cyprus</option>
										<option value="Czech Republic">Czech Republic</option>
										<option value="Denmark">Denmark</option>
										<option value="Djibouti">Djibouti</option>
										<option value="Dominica">Dominica</option>
										<option value="Dominican Republic">Dominican Republic</option>
										<option value="East Timor">East Timor</option>
										<option value="Ecuador">Ecuador</option>
										<option value="Egypt">Egypt</option>
										<option value="El Salvador">El Salvador</option>
										<option value="Equatorial Guinea">Equatorial Guinea</option>
										<option value="Eritrea">Eritrea</option>
										<option value="Estonia">Estonia</option>
										<option value="Ethiopia">Ethiopia</option>
										<option value="Falkland Islands">Falkland Islands</option>
										<option value="Faroe Islands">Faroe Islands</option>
										<option value="Fiji">Fiji</option>
										<option value="Finland">Finland</option>
										<option value="France">France</option>
										<option value="French Guiana">French Guiana</option>
										<option value="French Polynesia">French Polynesia</option>
										<option value="French Southern Ter">French Southern Ter</option>
										<option value="Gabon">Gabon</option>
										<option value="Gambia">Gambia</option>
										<option value="Georgia">Georgia</option>
										<option value="Germany">Germany</option>
										<option value="Ghana">Ghana</option>
										<option value="Gibraltar">Gibraltar</option>
										<option value="Great Britain">Great Britain</option>
										<option value="Greece">Greece</option>
										<option value="Greenland">Greenland</option>
										<option value="Grenada">Grenada</option>
										<option value="Guadeloupe">Guadeloupe</option>
										<option value="Guam">Guam</option>
										<option value="Guatemala">Guatemala</option>
										<option value="Guinea">Guinea</option>
										<option value="Guyana">Guyana</option>
										<option value="Haiti">Haiti</option>
										<option value="Hawaii">Hawaii</option>
										<option value="Honduras">Honduras</option>
										<option value="Hong Kong">Hong Kong</option>
										<option value="Hungary">Hungary</option>
										<option value="Iceland">Iceland</option>
										<option value="Indonesia">Indonesia</option>
										<option value="India">India</option>
										<option value="Iran">Iran</option>
										<option value="Iraq">Iraq</option>
										<option value="Ireland">Ireland</option>
										<option value="Isle of Man">Isle of Man</option>
										<option value="Israel">Israel</option>
										<option value="Italy">Italy</option>
										<option value="Jamaica">Jamaica</option>
										<option value="Japan">Japan</option>
										<option value="Jordan">Jordan</option>
										<option value="Kazakhstan">Kazakhstan</option>
										<option value="Kenya">Kenya</option>
										<option value="Kiribati">Kiribati</option>
										<option value="Korea North">Korea North</option>
										<option value="Korea Sout">Korea South</option>
										<option value="Kuwait">Kuwait</option>
										<option value="Kyrgyzstan">Kyrgyzstan</option>
										<option value="Laos">Laos</option>
										<option value="Latvia">Latvia</option>
										<option value="Lebanon">Lebanon</option>
										<option value="Lesotho">Lesotho</option>
										<option value="Liberia">Liberia</option>
										<option value="Libya">Libya</option>
										<option value="Liechtenstein">Liechtenstein</option>
										<option value="Lithuania">Lithuania</option>
										<option value="Luxembourg">Luxembourg</option>
										<option value="Macau">Macau</option>
										<option value="Macedonia">Macedonia</option>
										<option value="Madagascar">Madagascar</option>
										<option value="Malaysia">Malaysia</option>
										<option value="Malawi">Malawi</option>
										<option value="Maldives">Maldives</option>
										<option value="Mali">Mali</option>
										<option value="Malta">Malta</option>
										<option value="Marshall Islands">Marshall Islands</option>
										<option value="Martinique">Martinique</option>
										<option value="Mauritania">Mauritania</option>
										<option value="Mauritius">Mauritius</option>
										<option value="Mayotte">Mayotte</option>
										<option value="Mexico">Mexico</option>
										<option value="Midway Islands">Midway Islands</option>
										<option value="Moldova">Moldova</option>
										<option value="Monaco">Monaco</option>
										<option value="Mongolia">Mongolia</option>
										<option value="Montserrat">Montserrat</option>
										<option value="Morocco">Morocco</option>
										<option value="Mozambique">Mozambique</option>
										<option value="Myanmar">Myanmar</option>
										<option value="Nambia">Nambia</option>
										<option value="Nauru">Nauru</option>
										<option value="Nepal">Nepal</option>
										<option value="Netherland Antilles">Netherland Antilles</option>
										<option value="Netherlands">Netherlands (Holland, Europe)</option>
										<option value="Nevis">Nevis</option>
										<option value="New Caledonia">New Caledonia</option>
										<option value="New Zealand">New Zealand</option>
										<option value="Nicaragua">Nicaragua</option>
										<option value="Niger">Niger</option>
										<option value="Nigeria">Nigeria</option>
										<option value="Niue">Niue</option>
										<option value="Norfolk Island">Norfolk Island</option>
										<option value="Norway">Norway</option>
										<option value="Oman">Oman</option>
										<option value="Pakistan">Pakistan</option>
										<option value="Palau Island">Palau Island</option>
										<option value="Palestine">Palestine</option>
										<option value="Panama">Panama</option>
										<option value="Papua New Guinea">Papua New Guinea</option>
										<option value="Paraguay">Paraguay</option>
										<option value="Peru">Peru</option>
										<option value="Phillipines">Philippines</option>
										<option value="Pitcairn Island">Pitcairn Island</option>
										<option value="Poland">Poland</option>
										<option value="Portugal">Portugal</option>
										<option value="Puerto Rico">Puerto Rico</option>
										<option value="Qatar">Qatar</option>
										<option value="Republic of Montenegro">Republic of Montenegro</option>
										<option value="Republic of Serbia">Republic of Serbia</option>
										<option value="Reunion">Reunion</option>
										<option value="Romania">Romania</option>
										<option value="Russia">Russia</option>
										<option value="Rwanda">Rwanda</option>
										<option value="St Barthelemy">St Barthelemy</option>
										<option value="St Eustatius">St Eustatius</option>
										<option value="St Helena">St Helena</option>
										<option value="St Kitts-Nevis">St Kitts-Nevis</option>
										<option value="St Lucia">St Lucia</option>
										<option value="St Maarten">St Maarten</option>
										<option value="St Pierre & Miquelon">St Pierre & Miquelon</option>
										<option value="St Vincent & Grenadines">St Vincent & Grenadines</option>
										<option value="Saipan">Saipan</option>
										<option value="Samoa">Samoa</option>
										<option value="Samoa American">Samoa American</option>
										<option value="San Marino">San Marino</option>
										<option value="Sao Tome & Principe">Sao Tome & Principe</option>
										<option value="Saudi Arabia">Saudi Arabia</option>
										<option value="Senegal">Senegal</option>
										<option value="Seychelles">Seychelles</option>
										<option value="Sierra Leone">Sierra Leone</option>
										<option value="Singapore">Singapore</option>
										<option value="Slovakia">Slovakia</option>
										<option value="Slovenia">Slovenia</option>
										<option value="Solomon Islands">Solomon Islands</option>
										<option value="Somalia">Somalia</option>
										<option value="South Africa">South Africa</option>
										<option value="Spain">Spain</option>
										<option value="Sri Lanka">Sri Lanka</option>
										<option value="Sudan">Sudan</option>
										<option value="Suriname">Suriname</option>
										<option value="Swaziland">Swaziland</option>
										<option value="Sweden">Sweden</option>
										<option value="Switzerland">Switzerland</option>
										<option value="Syria">Syria</option>
										<option value="Tahiti">Tahiti</option>
										<option value="Taiwan">Taiwan</option>
										<option value="Tajikistan">Tajikistan</option>
										<option value="Tanzania">Tanzania</option>
										<option value="Thailand">Thailand</option>
										<option value="Togo">Togo</option>
										<option value="Tokelau">Tokelau</option>
										<option value="Tonga">Tonga</option>
										<option value="Trinidad & Tobago">Trinidad & Tobago</option>
										<option value="Tunisia">Tunisia</option>
										<option value="Turkey">Turkey</option>
										<option value="Turkmenistan">Turkmenistan</option>
										<option value="Turks & Caicos Is">Turks & Caicos Is</option>
										<option value="Tuvalu">Tuvalu</option>
										<option value="Uganda">Uganda</option>
										<option value="United Kingdom">United Kingdom</option>
										<option value="Ukraine">Ukraine</option>
										<option value="United Arab Erimates">United Arab Emirates</option>
										<option value="United States of America">United States of America</option>
										<option value="Uraguay">Uruguay</option>
										<option value="Uzbekistan">Uzbekistan</option>
										<option value="Vanuatu">Vanuatu</option>
										<option value="Vatican City State">Vatican City State</option>
										<option value="Venezuela">Venezuela</option>
										<option value="Vietnam">Vietnam</option>
										<option value="Virgin Islands (Brit)">Virgin Islands (Brit)</option>
										<option value="Virgin Islands (USA)">Virgin Islands (USA)</option>
										<option value="Wake Island">Wake Island</option>
										<option value="Wallis & Futana Is">Wallis & Futana Is</option>
										<option value="Yemen">Yemen</option>
										<option value="Zaire">Zaire</option>
										<option value="Zambia">Zambia</option>
										<option value="Zimbabwe">Zimbabwe</option>
										</select>
								</div>
							</div>
							<div class="col">
								<button type="submit" class="default-btn reverse d-block"><span>Find Your Partner</span></button>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
    <!-- ================> About section end here <================== -->



	<!-- ================> Member section start here <================== -->
	<div class="member member--style2 padding-top padding-bottom">
		<div class="container">
			<div class="section__wrapper">
				<div class="member__info mb-4">
					<div class="member__info--left">
						<div class="member__info--filter">
							<div class="default-btn" data-bs-toggle="modal" data-bs-target="#exampleModal"><span>Filter Your Search <i class="fa-solid fa-sliders"></i></span></div>
						</div>
						<div class="member__info--count">
							<div class="default-btn"><span>All Members</span></div>
							<p>20365587</p>
						</div>
					</div>
					<div class="member__info--right">
						<div class="member__info--customselect right w-100">
							<div class="default-btn"><span>Order By:</span></div>
							<div class="banner__inputlist">
								<select>
									<option value="0">Last Active </option>
									<option value="1">Oldest</option>
									<option value="2">Popular</option>
									<option value="3">Most Active</option>
								</select>
							</div>
						</div>
					</div>
                </div>
				<div class="row g-0 justify-content-center mx-12-none">
					<div class="member__item">
						<div class="member__inner">
							<div class="member__thumb">
								<img src="assets/images/member/home2/01.jpg" alt="member-img">
								<span class="member__activity"></span>
							</div>
							<div class="member__content">
								<a href="member-single.html"><h5>Kim Knudsen</h5></a>
								<p>Active</p>
							</div>
						</div>
					</div>
					<div class="member__item">
						<div class="member__inner">
							<div class="member__thumb">
								<img src="assets/images/member/home2/02.jpg" alt="member-img">
								<span class="member__activity member__activity--ofline"></span>
							</div>
							<div class="member__content">
								<a href="member-single.html"><h5>Petrine Jensen</h5></a>
								<p>20 Minutes Ago</p>
							</div>
						</div>
					</div>
					<div class="member__item">
						<div class="member__inner">
							<div class="member__thumb">
								<img src="assets/images/member/home2/03.jpg" alt="member-img">
								<span class="member__activity"></span>
							</div>
							<div class="member__content">
								<a href="member-single.html"><h5>Karl Nielsen</h5></a>
								<p>Active</p>
							</div>
						</div>
					</div>
					<div class="member__item">
						<div class="member__inner">
							<div class="member__thumb">
								<img src="assets/images/member/home2/04.jpg" alt="member-img">
								<span class="member__activity member__activity--ofline"></span>
							</div>
							<div class="member__content">
								<a href="member-single.html"><h5>Juliane Pedersen</h5></a>
								<p>25 Minutes Ago</p>
							</div>
						</div>
					</div>
					<div class="member__item">
						<div class="member__inner">
							<div class="member__thumb">
								<img src="assets/images/member/home2/05.jpg" alt="member-img">
								<span class="member__activity"></span>
							</div>
							<div class="member__content">
								<a href="member-single.html"><h5>David Lynge</h5></a>
								<p>Active</p>
							</div>
						</div>
					</div>
					<div class="member__item">
						<div class="member__inner">
							<div class="member__thumb">
								<img src="assets/images/member/home2/06.jpg" alt="member-img">
								<span class="member__activity"></span>
							</div>
							<div class="member__content">
								<a href="member-single.html"><h5>Laila Heilmann</h5></a>
								<p>Active</p>
							</div>
						</div>
					</div>
					<div class="member__item">
						<div class="member__inner">
							<div class="member__thumb">
								<img src="assets/images/member/home2/07.jpg" alt="member-img">
								<span class="member__activity member__activity--ofline"></span>
							</div>
							<div class="member__content">
								<a href="member-single.html"><h5>Andreas Brandt</h5></a>
								<p>10 Minutes Ago</p>
							</div>
						</div>
					</div>
					<div class="member__item">
						<div class="member__inner">
							<div class="member__thumb">
								<img src="assets/images/member/home2/08.jpg" alt="member-img">
								<span class="member__activity"></span>
							</div>
							<div class="member__content">
								<a href="member-single.html"><h5>Marie Zeeb</h5></a>
								<p>Active</p>
							</div>
						</div>
					</div>
					<div class="member__item">
						<div class="member__inner">
							<div class="member__thumb">
								<img src="assets/images/member/home2/09.jpg" alt="member-img">
								<span class="member__activity member__activity--ofline"></span>
							</div>
							<div class="member__content">
								<a href="member-single.html"><h5>Minik Lyberth</h5></a>
								<p>55 Minutes Ago</p>
							</div>
						</div>
					</div>
					<div class="member__item">
						<div class="member__inner">
							<div class="member__thumb">
								<img src="assets/images/member/home2/02.jpg" alt="member-img">
								<span class="member__activity"></span>
							</div>
							<div class="member__content">
								<a href="member-single.html"><h5>Julie Johansen</h5></a>
								<p>Active</p>
							</div>
						</div>
					</div>
					<div class="member__item">
						<div class="member__inner">
							<div class="member__thumb">
								<img src="assets/images/member/home2/01.jpg" alt="member-img">
								<span class="member__activity"></span>
							</div>
							<div class="member__content">
								<a href="member-single.html"><h5>Martin Geisler</h5></a>
								<p>Active</p>
							</div>
						</div>
					</div>
					<div class="member__item">
						<div class="member__inner">
							<div class="member__thumb">
								<img src="assets/images/member/home2/02.jpg" alt="member-img">
								<span class="member__activity member__activity--ofline"></span>
							</div>
							<div class="member__content">
								<a href="member-single.html"><h5>Julie Egede</h5></a>
								<p>20 Minutes Ago</p>
							</div>
						</div>
					</div>
					<div class="member__item">
						<div class="member__inner">
							<div class="member__thumb">
								<img src="assets/images/member/home2/03.jpg" alt="member-img">
								<span class="member__activity"></span>
							</div>
							<div class="member__content">
								<a href="member-single.html"><h5>Per Kristensen</h5></a>
								<p>Active</p>
							</div>
						</div>
					</div>
					<div class="member__item">
						<div class="member__inner">
							<div class="member__thumb">
								<img src="assets/images/member/home2/04.jpg" alt="member-img">
								<span class="member__activity member__activity--ofline"></span>
							</div>
							<div class="member__content">
								<a href="member-single.html"><h5>Amalie Lennert</h5></a>
								<p>25 Minutes Ago</p>
							</div>
						</div>
					</div>
					<div class="member__item">
						<div class="member__inner">
							<div class="member__thumb">
								<img src="assets/images/member/home2/05.jpg" alt="member-img">
								<span class="member__activity"></span>
							</div>
							<div class="member__content">
								<a href="member-single.html"><h5>Johan Poulsen</h5></a>
								<p>Active</p>
							</div>
						</div>
					</div>
				</div>
				<div class="member__pagination mt-4">
					<div class="member__pagination--left">
						<p>Viewing 1 - 20 of 12,345 Members</p>
					</div>
					<div class="member__pagination--right">
						<ul class="default-pagination">
                            <li>
                                <a href="#"><i class="fas fa-chevron-left"></i></a>
                            </li>
                            <li>
                                <a href="#">01</a>
                            </li>
                            <li>
                                <a href="#" class="active">02</a>
                            </li>
                            <li>
                                <a href="#">03</a>
                            </li>
                            <li>
                                <a href="#"><i class="fas fa-chevron-right"></i></a>
                            </li>
                        </ul>
					</div>
				</div>
			</div>
		</div>
	</div>
    <!-- ================> Member section end here <================== -->


	<!-- Modal -->
	<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered">
		<div class="modal-content">
			<div class="modal-header">
			<h5 class="modal-title" id="exampleModalLabel">Filter your search</h5>
			<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				<form action="#">
					<div class="banner__list">
						<div class="row align-items-center row-cols-1">
							<div class="col">
								<label>I am a</label>
								<div class="banner__inputlist">
									<select>
										<option>Select Gender</option>
										<option value="male" selected>Male</option>
										<option value="female">Female</option>
										<option value="others">Others</option>
									</select>
								</div>
							</div>
							<div class="col">
								<label>Looking for</label>
								<div class="banner__inputlist">
									<select>
										<option>Select Gender</option>
										<option value="male">Male</option>
										<option value="female" selected>Female</option>
										<option value="others">Others</option>
									</select>
								</div>
							</div>
							<div class="col">
								<label>Age</label>
								<div class="row g-3">
									<div class="col-6">
										<div class="banner__inputlist">
											<select>
												<option value="18" selected>18</option>
												<option value="19">19</option>
												<option value="20">20</option>
												<option value="21">21</option>
												<option value="22">22</option>
												<option value="23">23</option>
												<option value="24">24</option>
												<option value="25">25</option>
												<option value="26">26</option>
												<option value="27">27</option>
												<option value="28">28</option>
												<option value="29">29</option>
												<option value="30">30</option>
												<option value="31">31</option>
												<option value="32">32</option>
												<option value="33">33</option>
												<option value="34">34</option>
												<option value="35">35</option>
												<option value="36">36</option>
												<option value="37">37</option>
												<option value="38">38</option>
												<option value="39">39</option>
												<option value="40">40</option>
											</select>
										</div>
									</div>
									<div class="col-6">
										<div class="banner__inputlist">
											<select>
												<option value="18">18</option>
												<option value="19">19</option>
												<option value="20">20</option>
												<option value="21">21</option>
												<option value="22">22</option>
												<option value="23">23</option>
												<option value="24">24</option>
												<option value="25" selected>25</option>
												<option value="26">26</option>
												<option value="27">27</option>
												<option value="28">28</option>
												<option value="29">29</option>
												<option value="30">30</option>
												<option value="31">31</option>
												<option value="32">32</option>
												<option value="33">33</option>
												<option value="34">34</option>
												<option value="35">35</option>
												<option value="36">36</option>
												<option value="37">37</option>
												<option value="38">38</option>
												<option value="39">39</option>
												<option value="40">40</option>
											</select>
										</div>
									</div>
								</div>
							</div>
							<div class="col">
								<label>Country</label>
								<div class="banner__inputlist">
									<select id="country2" name="country2">
										<option value="Afganistan">Afghanistan</option>
										<option value="Albania">Albania</option>
										<option value="Algeria">Algeria</option>
										<option value="American Samoa">American Samoa</option>
										<option value="Andorra">Andorra</option>
										<option value="Angola">Angola</option>
										<option value="Anguilla">Anguilla</option>
										<option value="Antigua & Barbuda">Antigua & Barbuda</option>
										<option value="Argentina">Argentina</option>
										<option value="Armenia">Armenia</option>
										<option value="Aruba">Aruba</option>
										<option value="Australia">Australia</option>
										<option value="Austria">Austria</option>
										<option value="Azerbaijan">Azerbaijan</option>
										<option value="Bahamas">Bahamas</option>
										<option value="Bahrain">Bahrain</option>
										<option value="Bangladesh" selected>Bangladesh</option>
										<option value="Barbados">Barbados</option>
										<option value="Belarus">Belarus</option>
										<option value="Belgium">Belgium</option>
										<option value="Belize">Belize</option>
										<option value="Benin">Benin</option>
										<option value="Bermuda">Bermuda</option>
										<option value="Bhutan">Bhutan</option>
										<option value="Bolivia">Bolivia</option>
										<option value="Bonaire">Bonaire</option>
										<option value="Bosnia & Herzegovina">Bosnia & Herzegovina</option>
										<option value="Botswana">Botswana</option>
										<option value="Brazil">Brazil</option>
										<option value="British Indian Ocean Ter">British Indian Ocean Ter</option>
										<option value="Brunei">Brunei</option>
										<option value="Bulgaria">Bulgaria</option>
										<option value="Burkina Faso">Burkina Faso</option>
										<option value="Burundi">Burundi</option>
										<option value="Cambodia">Cambodia</option>
										<option value="Cameroon">Cameroon</option>
										<option value="Canada">Canada</option>
										<option value="Canary Islands">Canary Islands</option>
										<option value="Cape Verde">Cape Verde</option>
										<option value="Cayman Islands">Cayman Islands</option>
										<option value="Central African Republic">Central African Republic</option>
										<option value="Chad">Chad</option>
										<option value="Channel Islands">Channel Islands</option>
										<option value="Chile">Chile</option>
										<option value="China">China</option>
										<option value="Christmas Island">Christmas Island</option>
										<option value="Cocos Island">Cocos Island</option>
										<option value="Colombia">Colombia</option>
										<option value="Comoros">Comoros</option>
										<option value="Congo">Congo</option>
										<option value="Cook Islands">Cook Islands</option>
										<option value="Costa Rica">Costa Rica</option>
										<option value="Cote DIvoire">Cote DIvoire</option>
										<option value="Croatia">Croatia</option>
										<option value="Cuba">Cuba</option>
										<option value="Curaco">Curacao</option>
										<option value="Cyprus">Cyprus</option>
										<option value="Czech Republic">Czech Republic</option>
										<option value="Denmark">Denmark</option>
										<option value="Djibouti">Djibouti</option>
										<option value="Dominica">Dominica</option>
										<option value="Dominican Republic">Dominican Republic</option>
										<option value="East Timor">East Timor</option>
										<option value="Ecuador">Ecuador</option>
										<option value="Egypt">Egypt</option>
										<option value="El Salvador">El Salvador</option>
										<option value="Equatorial Guinea">Equatorial Guinea</option>
										<option value="Eritrea">Eritrea</option>
										<option value="Estonia">Estonia</option>
										<option value="Ethiopia">Ethiopia</option>
										<option value="Falkland Islands">Falkland Islands</option>
										<option value="Faroe Islands">Faroe Islands</option>
										<option value="Fiji">Fiji</option>
										<option value="Finland">Finland</option>
										<option value="France">France</option>
										<option value="French Guiana">French Guiana</option>
										<option value="French Polynesia">French Polynesia</option>
										<option value="French Southern Ter">French Southern Ter</option>
										<option value="Gabon">Gabon</option>
										<option value="Gambia">Gambia</option>
										<option value="Georgia">Georgia</option>
										<option value="Germany">Germany</option>
										<option value="Ghana">Ghana</option>
										<option value="Gibraltar">Gibraltar</option>
										<option value="Great Britain">Great Britain</option>
										<option value="Greece">Greece</option>
										<option value="Greenland">Greenland</option>
										<option value="Grenada">Grenada</option>
										<option value="Guadeloupe">Guadeloupe</option>
										<option value="Guam">Guam</option>
										<option value="Guatemala">Guatemala</option>
										<option value="Guinea">Guinea</option>
										<option value="Guyana">Guyana</option>
										<option value="Haiti">Haiti</option>
										<option value="Hawaii">Hawaii</option>
										<option value="Honduras">Honduras</option>
										<option value="Hong Kong">Hong Kong</option>
										<option value="Hungary">Hungary</option>
										<option value="Iceland">Iceland</option>
										<option value="Indonesia">Indonesia</option>
										<option value="India">India</option>
										<option value="Iran">Iran</option>
										<option value="Iraq">Iraq</option>
										<option value="Ireland">Ireland</option>
										<option value="Isle of Man">Isle of Man</option>
										<option value="Israel">Israel</option>
										<option value="Italy">Italy</option>
										<option value="Jamaica">Jamaica</option>
										<option value="Japan">Japan</option>
										<option value="Jordan">Jordan</option>
										<option value="Kazakhstan">Kazakhstan</option>
										<option value="Kenya">Kenya</option>
										<option value="Kiribati">Kiribati</option>
										<option value="Korea North">Korea North</option>
										<option value="Korea Sout">Korea South</option>
										<option value="Kuwait">Kuwait</option>
										<option value="Kyrgyzstan">Kyrgyzstan</option>
										<option value="Laos">Laos</option>
										<option value="Latvia">Latvia</option>
										<option value="Lebanon">Lebanon</option>
										<option value="Lesotho">Lesotho</option>
										<option value="Liberia">Liberia</option>
										<option value="Libya">Libya</option>
										<option value="Liechtenstein">Liechtenstein</option>
										<option value="Lithuania">Lithuania</option>
										<option value="Luxembourg">Luxembourg</option>
										<option value="Macau">Macau</option>
										<option value="Macedonia">Macedonia</option>
										<option value="Madagascar">Madagascar</option>
										<option value="Malaysia">Malaysia</option>
										<option value="Malawi">Malawi</option>
										<option value="Maldives">Maldives</option>
										<option value="Mali">Mali</option>
										<option value="Malta">Malta</option>
										<option value="Marshall Islands">Marshall Islands</option>
										<option value="Martinique">Martinique</option>
										<option value="Mauritania">Mauritania</option>
										<option value="Mauritius">Mauritius</option>
										<option value="Mayotte">Mayotte</option>
										<option value="Mexico">Mexico</option>
										<option value="Midway Islands">Midway Islands</option>
										<option value="Moldova">Moldova</option>
										<option value="Monaco">Monaco</option>
										<option value="Mongolia">Mongolia</option>
										<option value="Montserrat">Montserrat</option>
										<option value="Morocco">Morocco</option>
										<option value="Mozambique">Mozambique</option>
										<option value="Myanmar">Myanmar</option>
										<option value="Nambia">Nambia</option>
										<option value="Nauru">Nauru</option>
										<option value="Nepal">Nepal</option>
										<option value="Netherland Antilles">Netherland Antilles</option>
										<option value="Netherlands">Netherlands (Holland, Europe)</option>
										<option value="Nevis">Nevis</option>
										<option value="New Caledonia">New Caledonia</option>
										<option value="New Zealand">New Zealand</option>
										<option value="Nicaragua">Nicaragua</option>
										<option value="Niger">Niger</option>
										<option value="Nigeria">Nigeria</option>
										<option value="Niue">Niue</option>
										<option value="Norfolk Island">Norfolk Island</option>
										<option value="Norway">Norway</option>
										<option value="Oman">Oman</option>
										<option value="Pakistan">Pakistan</option>
										<option value="Palau Island">Palau Island</option>
										<option value="Palestine">Palestine</option>
										<option value="Panama">Panama</option>
										<option value="Papua New Guinea">Papua New Guinea</option>
										<option value="Paraguay">Paraguay</option>
										<option value="Peru">Peru</option>
										<option value="Phillipines">Philippines</option>
										<option value="Pitcairn Island">Pitcairn Island</option>
										<option value="Poland">Poland</option>
										<option value="Portugal">Portugal</option>
										<option value="Puerto Rico">Puerto Rico</option>
										<option value="Qatar">Qatar</option>
										<option value="Republic of Montenegro">Republic of Montenegro</option>
										<option value="Republic of Serbia">Republic of Serbia</option>
										<option value="Reunion">Reunion</option>
										<option value="Romania">Romania</option>
										<option value="Russia">Russia</option>
										<option value="Rwanda">Rwanda</option>
										<option value="St Barthelemy">St Barthelemy</option>
										<option value="St Eustatius">St Eustatius</option>
										<option value="St Helena">St Helena</option>
										<option value="St Kitts-Nevis">St Kitts-Nevis</option>
										<option value="St Lucia">St Lucia</option>
										<option value="St Maarten">St Maarten</option>
										<option value="St Pierre & Miquelon">St Pierre & Miquelon</option>
										<option value="St Vincent & Grenadines">St Vincent & Grenadines</option>
										<option value="Saipan">Saipan</option>
										<option value="Samoa">Samoa</option>
										<option value="Samoa American">Samoa American</option>
										<option value="San Marino">San Marino</option>
										<option value="Sao Tome & Principe">Sao Tome & Principe</option>
										<option value="Saudi Arabia">Saudi Arabia</option>
										<option value="Senegal">Senegal</option>
										<option value="Seychelles">Seychelles</option>
										<option value="Sierra Leone">Sierra Leone</option>
										<option value="Singapore">Singapore</option>
										<option value="Slovakia">Slovakia</option>
										<option value="Slovenia">Slovenia</option>
										<option value="Solomon Islands">Solomon Islands</option>
										<option value="Somalia">Somalia</option>
										<option value="South Africa">South Africa</option>
										<option value="Spain">Spain</option>
										<option value="Sri Lanka">Sri Lanka</option>
										<option value="Sudan">Sudan</option>
										<option value="Suriname">Suriname</option>
										<option value="Swaziland">Swaziland</option>
										<option value="Sweden">Sweden</option>
										<option value="Switzerland">Switzerland</option>
										<option value="Syria">Syria</option>
										<option value="Tahiti">Tahiti</option>
										<option value="Taiwan">Taiwan</option>
										<option value="Tajikistan">Tajikistan</option>
										<option value="Tanzania">Tanzania</option>
										<option value="Thailand">Thailand</option>
										<option value="Togo">Togo</option>
										<option value="Tokelau">Tokelau</option>
										<option value="Tonga">Tonga</option>
										<option value="Trinidad & Tobago">Trinidad & Tobago</option>
										<option value="Tunisia">Tunisia</option>
										<option value="Turkey">Turkey</option>
										<option value="Turkmenistan">Turkmenistan</option>
										<option value="Turks & Caicos Is">Turks & Caicos Is</option>
										<option value="Tuvalu">Tuvalu</option>
										<option value="Uganda">Uganda</option>
										<option value="United Kingdom">United Kingdom</option>
										<option value="Ukraine">Ukraine</option>
										<option value="United Arab Erimates">United Arab Emirates</option>
										<option value="United States of America">United States of America</option>
										<option value="Uraguay">Uruguay</option>
										<option value="Uzbekistan">Uzbekistan</option>
										<option value="Vanuatu">Vanuatu</option>
										<option value="Vatican City State">Vatican City State</option>
										<option value="Venezuela">Venezuela</option>
										<option value="Vietnam">Vietnam</option>
										<option value="Virgin Islands (Brit)">Virgin Islands (Brit)</option>
										<option value="Virgin Islands (USA)">Virgin Islands (USA)</option>
										<option value="Wake Island">Wake Island</option>
										<option value="Wallis & Futana Is">Wallis & Futana Is</option>
										<option value="Yemen">Yemen</option>
										<option value="Zaire">Zaire</option>
										<option value="Zambia">Zambia</option>
										<option value="Zimbabwe">Zimbabwe</option>
									</select>
								</div>
							</div>
							<div class="col">
								<button type="submit" class="default-btn reverse d-block"><span>Find Your Partner</span></button>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
		</div>
	</div>
	<!-- modal -->
@endsection