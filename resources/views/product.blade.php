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
	<link rel="shortcut icon" type="image/x-icon" href="">

	<!-- Font -->
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:300,400,700%7CLato:300,400,700' rel='stylesheet' type='text/css'>
	
	<!-- Css -->
	<link rel="stylesheet" href="css/core.min.css" />
	<link rel="stylesheet" href="css/skin.css" />

</head>
<body class="shop single-product">

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
				<nav class="side-navigation">
					<ul>
						<li>
							<a href="{{url('/')}}" class="contains-sub-menu current">Home</a>
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
					<ul class="social-list list-horizontal">
						<li><a href="#"><span class="icon-twitter small"></span></a></li>
						<li><a href="#"><span class="icon-facebook small"></span></a></li>
						<li><a href="#"><span class="icon-instagram small"></span></a></li>
					</ul>
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
										<a href="{{url('/')}}" class="contains-sub-menu current">Home</a>
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

				<div class="section-block replicable-content">
					<!-- Product Details -->
					<div class="row product">
						<div class="column width-6">
							<div class="product-images">
								<div class="thumbnail product-thumbnail img-scale-in" data-hover-easing="easeInOut" data-hover-speed="700" data-hover-bkg-color="#ffffff" data-hover-bkg-opacity="0.9">
									<a class="overlay-link lightbox-link" data-group="product-lightbox-gallery" href="images/1.png">
										<img src="images/1.png" alt=""/>
										<span class="overlay-info">
											<span>
												<span>
													Enlarge
												</span>
											</span>
										</span>
									</a>
								</div>
								<div class="hide">
									<a class="lightbox-link" data-group="product-lightbox-gallery" href="images/2.png"></a>
									<a class="lightbox-link" data-group="product-lightbox-gallery" href="images/3.png"></a>
									<a class="lightbox-link" data-group="product-lightbox-gallery" href="images/4.png"></a>
								</div>
							</div>
						</div>
						<div class="column width-5 offset-1">
							<div class="product-summary">
								<h1 class="product-title">Face Shield Range</h1>
								<div class="product-price price"><ins><span class="amount">Rs 599.00</span></ins></div>
								<div class="product-description">
									<div class="accordion product-addtional-info style-2">
										<ul>
											<li>
											Description <br/>
											<p>Available Sizes
												- Free Size: 160 x 138mm
												- 65Gms
											<br/>
												Master Carton: Pack of 10pcs
											<br/>
											
												Material: Polycarbonate
											<br/>
												Thickness: 1.6mm
											</p>
											</li>
										</ul>
									</div>
								</div>
								<form method="get" action="{{url('/form')}}">
									@csrf
								<div class="product-cart">
									<label>Quantity</label>
									<input type="number" step="1" min="1" max="5" name="quantity" value="1" title="Qty" class="form-element quantity" size="4">
									<button type="submit" class="button add-to-cart-button" >Add To Cart</button>
								</div>
								</form>
								<hr>
								<div class="product-meta">
									<span class="sku-container">The PROTECTR Advantage: </span>
									<span class="posted-in">Clear Visibility, Re-useable, Snug fit with nose support, Rotate neck in any position, Protects eyes from dust, Protects from smoke, Mask compatible, Clear Visibility, High grade PC material, Anti-fog and Anti-exhaust</span>
								</div>
								<hr>
								<ul class="social-list list-horizontal">
									<li><a href="#"><span class="icon-twitter small"></span></a><li>
									<li><a href="#"><span class="icon-facebook small"></span></a></li>
								</ul>
								<hr class="hide show-on-mobile">
							</div>
						</div>
					</div>
					<!-- Product Details End -->
				</div>
			</div>
			<!-- Content End -->

			<!-- Footer -->
			<footer class="footer">
				
				<div class="footer-bottom">
					<div class="row">
						<div class="column width-12">
							<div class="footer-bottom-inner center">
								<p class="copyright pull-left clear-float-on-mobile">
									&copy; PROTECTR. All Rights Reserved</a>
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
	<script src="js/timber.master.min.js"></script>
</body>
</html>