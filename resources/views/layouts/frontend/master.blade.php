<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" type="image/x-icon" />
    <title>গণগ্রন্থাগার অধিদপ্তর</title>
	<!-- Mobile Specific Metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
	<!-- =============== tt canonical start =============================== -->
    <link rel="canonical" href="index.html">
    <!-- =============== tt canonical End =============================== -->

	<link type="text/css" rel="stylesheet" href="{{ asset('themes/responsive_npf/stylesheets/base.css') }}" />
	<link type="text/css" rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}" />
	<link type="text/css" rel="stylesheet" href="{{ asset('themes/responsive_npf/stylesheets/skeleton.css') }}" />
	<link type="text/css" rel="stylesheet" href="{{ asset('themes/responsive_npf/stylesheets/style.css') }}" />
	<link type="text/css" rel="stylesheet" href="{{ asset('themes/responsive_npf/stylesheets/meganizr.css') }}" />
	<link type="text/css" rel="stylesheet" href="{{ asset('themes/responsive_npf/stylesheets/demo.css') }}" />
	<link type="text/css" rel="stylesheet" href="{{ asset('npfadmin/public/css/flaticon/flaticon.css') }}" />
	<link type="text/css" rel="stylesheet" href="{{ asset('themes/responsive_npf/templates/ministry/style.css') }}" />
	<link href="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />

    <script type="text/javascript"
    	src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>

	<!-- include the jquery-accessibleMegaMenu plugin script -->
    <script src="{{ asset('themes/responsive_npf/js/jquery-accessibleMegaMenu.js') }}"></script>

    <link rel="stylesheet" href="{{ asset('themes/responsive_npf/stylesheets/responsiveslides.css') }}">

	<link rel="stylesheet"	href="{{ asset('themes/responsive_npf/templates/ministry/responsive.css') }}">
	<link rel="stylesheet"	href="{{ asset('themes/responsive_npf/templates/ministry/accessibility.css') }}">
	<script src="{{ asset('themes/responsive_npf/js/responsiveslides.min.js') }}"></script>
	<script src="{{ asset('themes/responsive_npf/js/domain_selector.js') }}" type="text/javascript"></script>
	<script src="{{ asset('themes/responsive_npf/js/utils.js') }}" type="text/javascript"></script>

	<link rel="stylesheet"	href="{{ asset('css/site.css') }}">
	<script type="text/javascript" src="{{ asset('js/site.js') }}"></script>
	<style>
		.btn-template-main {
		    color: #4caf50;
		    background-color: #ffffff;
		    border-color: #4caf50;
		    font-size: 1.1em;
		    transition: all .8s;
		}
		.btn-template-main:hover {
		    color: #4caf50;
		    background-color: #ffffff;
		    border-color: #327334;
		}
		.rslides li { margin-bottom: 0px; }
		.rslides li img { position: relative; height: 250px; }
		.rslides .caption {
		  position: absolute;
		  display: block;
		  bottom: 0;
		  left: 0;
		  right: 0;
		  padding: 6px;
		  font-size: 1em;
		  text-align: center;
		  background-color: rgba(0,0,0, .3);
		  color: #fff;
		}
	</style>
	@yield('style')
</head>

<body class="publiclibrary-portal-gov-bd">
	<div class="container">
		<div class="sixteen columns" style="background-color: #333; box-shadow: 0 1px 5px #999999;">
			<div style="color: #eee; font-size: .7em; padding: 0 10px; height: 30px">
				<div class="slide-panel-btns" style="float: left">
                    <div class="slide-panel-button" style="display: block;">
						<i class="flaticon-menu10"></i> <a style="color: white"
							href="http://www.bangladesh.gov.bd/" target="_blank">গণগ্রন্থাগার অধিদপ্তর</a>
					</div>
					<div class="slide-panel-button" id="close-button"
						style="display: none;">
						<i class="flaticon-cross5"></i>বাংলাদেশ জাতীয় তথ্য বাতায়ন
					</div>
                </div>
				<div id="div-lang"
					style="padding: 0; position: absolute; right: 0; top: 0; margin-top: 1px; width: 405px;">
					<form action=""
						style="margin: 0; padding: 0; width: 345px; float: left">
						<!-- tt responsive 11-08-2015 -->
						<input style="width: 290px" id="search" name="key" value="" />
						<!-- tt end -->
						<button class="search-btn" type="submit"
							style="margin: 0; padding: 2px 10px" />
						Go
						</button>
					</form>
					<div id="div-lang-sel">

						<form id="lang_form" action="{{ url('language/switcher') }}" method="post">
							{{ csrf_field() }}
							@if( \Session::has('locale') && \Session::get('locale') == 'en' )
                            <input type="hidden" name="lang" id="lang"
								value="bd" />
							@else
							<input type="hidden" name="lang" id="lang"
								value="en" />
							@endif
							<button type="submit" style="height: 26px; padding: 4px;">
								{{ (\Session::has('locale') && \Session::get('locale') == 'en' ) ? 'বাংলা' : 'English' }}
							</button>
                        </form>

					</div>
					<style>
						#div-lang-sel {
							font-size: 18px;
							font-weight: bold;
							float: right;
						}

						#div-lang-sel span {
							text-decoration: none;
							background-color: #609513;
							padding: 0 5px;
							color: #fff;
							margin: 0;
						}

						#div-lang-sel a {
							text-decoration: none;
							padding: 0 5px;
							color: #fff;
							margin: 0;
						}

						#div-lang-sel a:hover {
							background-color: #34740E;
						}
					</style>
				</div>
			</div>
		</div>

		<div class="sixteen columns">
			<div class="callbacks_container"
				style="box-shadow: 0 1px 5px #999999;">
				<ul class="rslides" id="front-image-slider">
					<li>
						<img src="{{ asset('images/banner1.jpg') }}" alt="" width="960" height="220"/>
						<p class="caption">গণগ্রন্থাগার অধিদপ্তর - পাঠকক্ষ</p>
					</li>
					<li>
						<img src="{{ asset('images/banner2.jpg') }}" alt="" width="960" height="220"/>
						<p class="caption">গণগ্রন্থাগার অধিদপ্তর - পাঠকক্ষ</p>
					</li>
					<li>
						<img src="{{ asset('images/banner3.jpg') }}" alt="" width="960" height="220"/>
						<p class="caption">গণগ্রন্থাগার অধিদপ্তর - পাঠকক্ষ</p>
					</li>
				</ul>
			</div>


			<div class="header-site-info" id="header-site-info">
				<div>
					<div id="logo">
                        <a title="Home" href="{{ url('/') }}"><img alt="Home"
							src="{{ asset('themes/responsive_npf/img/logo/logo.png') }}"></a>
					</div>
					<style>
					@media screen and (min-width: 800px) {
						#logo {
							display: inline-block !important;
							float: left
						}
						#site-name-wrapper {
							line-height: 2
						}
					}
					</style>
					<div class="clearfix" id="site-name-wrapper">
						<span id="site-name"><a title="Home" href="{{ url('/') }}">গণগ্রন্থাগার অধিদপ্তর</a></span>
						<span id="slogan"></span>
					</div>
					<!-- /site-name-wrapper -->

				</div>
				<!-- /header-site-info-inner -->

			</div>

		</div>

		<div class="sixteen columns" id="jmenu">
			<a href="#" class="show-menu menu-head"> মেনু নির্বাচন করুন</a>
			<div role="navigation" id="dawgdrops">
				<ul class="meganizr mzr-slide mzr-responsive">
					<li class="col0">
						<a href="#" class="submenu">অনুদানের আবেদনপত্র</a>
					</li>
				</ul>
			</div>
		</div>

		<div id="contents" class="sixteen columns">
			<div class="row mainwrapper">
				<div class="row" id="notice-board">
					@yield('main-content')
				</div>
			</div>
		</div>
	</div>
	<!-- /container -->

	<!-- Footer -->
	<div class="sixteen columns" s>
		<div class="footer-artwork" id="footer-artwork">&nbsp;</div>
		<div class="footer-wrapper full-width" id="footer-wrapper">
			<div id="footer-menu">

	        <ul>
	        	@if(Session::has('locale') && Session::get('locale') == 'en')
	        		<li><a href="#">Site Map</a></li>
	        		<li><a href="#">Communication</a></li>
	        		<li><a href="{{ url('login') }}">Admin Login</a></li>
	        	@else
	        		<li><a href="#">সাইট ম্যাপ</a></li>
	        		<li><a href="#">যোগাযোগ</a></li>
	        		<li><a href="{{ url('login') }}">এডমিন লগইন</a></li>
	        	@endif
	        </ul>
	        <div style="float: left; font-size: .9em;">
					<a href="https://www.facebook.com/dpldhaka.bd/" target="_blank">
						<img src="{{ asset('images/facebook.jpg') }}" height="35" alt="">
					</a>
				</div>
	        </div>

			<div class="footer-credit" id="footer">
	                <p>
					পরিকল্পনা ও বাস্তবায়নে:&nbsp;<a href="http://www.cabinet.gov.bd/">মন্ত্রিপরিষদ
						বিভাগ</a>,&nbsp;<a href="http://www.a2i.pmo.gov.bd/">এটুআই</a>,&nbsp;<a
						href="http://www.bcc.net.bd/">বিসিসি</a>&nbsp;ও&nbsp;<a
						href="http://www.basis.org.bd/">বেসিস</a>।
				</p>

				<p>
					কারিগরি সহায়তায়:<a href="http://www.a2i.pmo.gov.bd/"><img
						style="height: 45px; vertical-align: middle; width: 150px"
						src="{{ asset('/images/pmologo.png') }}"
						alt=""></a>
				</p>
			</div>
			<!-- /footer -->
		</div>
	</div>
	@yield('script')
	<script type="text/javascript">
		$(document).ready(function() {
			$('select').select2();
		});
	</script>
</body>
</html>
