<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<meta content="width=device-width,initial-scale=1.0,maximum-scale=1.0" name="viewport">
	<meta name="twitter:widgets:theme" content="light">
	<meta property="og:title" content="Your-Title-Here" />
	<meta property="og:type" content="website" />
	<meta property="og:image" content="Your-Image-Url" />
	<meta property="og:description" content="Your-Page-Description" />
	<title>Protectr</title>
	<link rel="shortcut icon" type="image/x-icon" href="images/theme-mountain-favicon.ico">

	<!-- Font -->
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:300,400,700%7CLato:300,400,700' rel='stylesheet' type='text/css'>
	
	<!-- Css -->
	<link rel="stylesheet" href="css/core.min.css" />
	<link rel="stylesheet" href="css/skin.css" />

	<!--[if lt IE 9]>
    	<script type="text/javascript" src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
	
	<style>
	.list>ul {
    margin: 0;
    padding: 0;
    list-style: none;
}
	.list>ul>li {
     margin: 0 0 1px;
	}
		.policy-list{
		padding: 1.3rem 0;
		border: none;
		font-weight: 400;
		background-color: transparent;
		border-bottom: 1px solid #eee;
		color: #666;
		}
	</style>

</head>
<body class="shop checkout">

	<!-- Side Navigation Menu -->
	<aside class="side-navigation-wrapper enter-right" data-no-scrollbar data-animation="push-in">
		<div class="side-navigation-scroll-pane">
			<div class="side-navigation-inner">
				<div class="side-navigation-header">
					<div class="navigation-hide side-nav-hide">
						<a href="#">
							<span class="icon-cancel medium"></span>
						</a>
					</div>
				</div>
				<nav class="side-navigation nav-block">
					<ul>
						<li>
							<a href="{{url('/')}}" class="contains-sub-menu">Home</a>
						</li>
						<li>
							<a href="{{url('/policy')}}" class="contains-sub-menu ">Policy</a>
						</li>
						<li>
							<a href="{{url('/contact')}}" class="contains-sub-menu">Contact Us</a>
						</li>
					</ul>
				</nav>
				
				<div class="side-navigation-footer">
					<p class="copyright no-margin-bottom">&copy; 2021 PROTECTR.</p>
				</div>
			</div>
		</div>
	</aside>
	<!-- Side Navigation Menu End -->

	<div class="wrapper reveal-side-navigation">
		<div class="wrapper-inner">

			<!-- Header -->
			<header class="header header-fixed header-fixed-on-mobile header-transparent" data-bkg-threshold="100" data-compact-threshold="100">
				<div class="header-inner">
					<div class="row nav-bar">
						<div class="column width-12 nav-bar-inner">
							<div class="logo">
								<div class="logo-inner">
									<a href="index.html"><img src="images/logo.png" alt=" Logo" /></a>
									<a href="index.html"><img src="images/logo.png" alt=" Logo" /></a>
								</div>
							</div>
							<nav class="navigation nav-block primary-navigation nav-right">
								<ul>
									<li>
										<a href="{{url('/')}}" class="contains-sub-menu">Home</a>
									</li>
									<li>
										<a href="{{url('/policy')}}" class="contains-sub-menu ">Policy</a>
									</li>
									<li>
										<a href="{{url('/contact')}}" class="contains-sub-menu">Contact Us</a>
									</li>
								</ul>
							</nav>
						</div>
					</div>
				</div>
			</header>
			<!-- Header End -->

			<!-- Content -->
			<div class="content clearfix">
                <form action="{{url('/payment_initiate_request')}}" method="post">
        <input type="hidden" name="qty" value="{{$qty}}">
        @csrf
				<!-- Checkout -->
				<div class="section-block cart-overview">
					<div class="row">
						<div class="column width-5 push-7">
							<div class="aux-details box large">
								<div class="accordion product-addtional-info style-2">
									<ul>
										<li class=" returning-customer">
											<a href="policy.html">Shipping and Return Policy</a>
										</li>
										<li class="returning-customer">
											<a href="policy.html">TERMS OF SERVICE</a>
										</li>
										<li class="returning-customer">
											<a href="policy.html">ONLINE STORE TERMS</a>
										</li>
										<li class="returning-customer">
											<a href="policy.html">MODIFICATIONS TO THE SERVICE AND PRICES</a>
										</li>
										<li class="returning-customer">
											<a href="policy.html">CONTACT INFORMATION</a>
										</li>
										
									</ul>
								</div>
								<h5>Need Assistance?</h5>
								<p>Experiencing an inssue and require help? <a href="contact.html">Contact Us</a></p>
							</div>
						</div>
						<div class="column width-7 pull-5">
							<div class="payment-details box large">
								<div class="tabs style-2">
									<ul class="tab-nav">
										<li class="active">
											<a href="#tabs-1-pane-1">Billing Address</a>
										</li>
									</ul>
									<div class="tab-panes">
										<div id="tabs-1-pane-1" class="active animate">
											<div class="tab-content">
												<div class="billing-form-container">
													<form class="billing-form" action="#" method="post" novalidate>
														<div class="row">
															@if(session('message'))
															<div class="alert alert-success text-center">
																{{ session('message') }}
															</div>
                       										 @endif
															<div class="column width-6">
															@if($errors->has('name'))
																<span class="" style="color:red">*{{ $errors->first('name') }}</span>
																@endif

																<input type="text" name="name" class="form-fname form-element large" placeholder="First Name*" tabindex="1" value="{{old('name')}}">
																
															</div>
															
															<div class="column width-6">
																@if($errors->has('lname'))
																<span class="" style="color:red">*{{ $errors->first('lname') }}</span>
																@endif
																<input type="text" name="lname" class="form-lname form-element large" placeholder="Last Name" tabindex="2" value="{{old('name')}}">
															</div>
															<div class="column width-6">
																@if($errors->has('email'))
																	<span class="" style="color:red">*{{ $errors->first('email') }}</span>
																@endif
																<input type="email" name="email" class="form-email form-element large" placeholder="Email Address*" tabindex="3" value="{{old('name')}}">
															</div>
															<div class="column width-6">
																@if($errors->has('mobile'))
																	<span class="" style="color:red">*{{ $errors->first('mobile') }}</span>
																@endif
																<input type="tel" name="mobile" class="form-telephone form-element large" placeholder="Phone*" tabindex="4" value="{{old('mobile')}}">
															</div>
															<div class="column width-12">
																@if($errors->has('country'))
																	<span class="" style="color:red">*{{ $errors->first('country') }}</span>
																@endif
																<div class="form-select form-element large">
																	<select name="country" required tabindex="5">
																		<option selected="selected" value="">Country</option>
																		<option value="india">India</option>
																	</select>
																</div>
															</div>
															<div class="column width-12">
																@if($errors->has('address'))
																	<span class="" style="color:red">*{{ $errors->first('address') }}</span>
																@endif
																<input type="text" name="address" class="form-billing-address form-element large" placeholder="Billing Address*" tabindex="6" required value="{{old('address')}}">
															</div>
															<div class="column width-12">
															@if($errors->has('billing_address_2'))
																	<span class="" style="color:red">*{{ $errors->first('billing_address_2') }}</span>
																@endif
																<input type="text" name="billing_address_2" class="form-billing-address-2 form-element large" placeholder="Billing Address 2*" tabindex="7" required value="{{old('billing_address_2')}}">
															</div>
															<div class="column width-6">
															@if($errors->has('city'))
																	<span class="" style="color:red">*{{ $errors->first('city') }}</span>
																@endif
																<input type="text" name="city" class="form-city form-element large" placeholder="City*" tabindex="8" required value="{{old('city')}}">
															</div>
															<div class="column width-6">
															@if($errors->has('state'))
																	<span class="" style="color:red">*{{ $errors->first('state') }}</span>
																@endif
																<input type="text" name="state" class="form-city form-element large" placeholder="State*" tabindex="9" required value="{{old('state')}}">
															</div>
															<div class="column width-6">
															@if($errors->has('pincode'))
																	<span class="" style="color:red">*{{ $errors->first('pincode') }}</span>
																@endif
																<input type="text" name="pincode" class="form-zip-code form-element large" placeholder="Zip Code*" tabindex="10" required value="{{old('pincode')}}">
															</div>
														</div>
													</form>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="column width-12">
							<hr>
							
							<div class="cart-actions right center-on-mobile">
								<button type="submit" class="button checkout no-margin-bottom">Place Your Order</button>
							</div>
						</div>
					</div>
					<!-- Checkout End -->
				</div>
				<!-- Order Overview End -->

			</div>
			</form>
			<!-- Content End -->

			<!-- Footer -->
			<footer class="footer">
				<div class="footer-bottom">
					<div class="row">
						<div class="column width-12">
							<div class="footer-bottom-inner center">
								<p class="copyright pull-left clear-float-on-mobile">
									&copy; 2021 PROTECTR. All Rights Reserved. <a href="#">Terms & Conditions</a> | <a href="#">Cookie policy</a>
								</p>
								<ul class="social-list list-horizontal pull-right clear-float-on-mobile">
									<li><a href="#"><span class="icon-twitter small"></span></a></li>
									<li><a href="#"><span class="icon-facebook small"></span></a></li>
									<li><a href="#"><span class="icon-youtube small"></span></a></li>
									<li><a href="#"><span class="icon-vimeo small"></span></a></li>
									<li><a href="#"><span class="icon-instagram small"></span></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</footer>
			<!-- Footer End -->

		</div>
	</div>

	<!-- Js -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="http://maps.googleapis.com/maps/api/js?v=3"></script>
	<script src="js/timber.master.min.js"></script>
</body>
</html>