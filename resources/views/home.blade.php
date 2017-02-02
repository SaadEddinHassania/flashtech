
<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
	<title>Flash-Tech</title>
	<!-- mobile apps -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Willpower Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
	SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	<!-- //mobile apps -->
	<!-- Custom Theme files -->
	<link href="css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
	<link href="css/style.css" type="text/css" rel="stylesheet" media="all">
	<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />

	<link rel="shortcut icon" href="../favicon.ico">
	<link rel="stylesheet" type="text/css" href="css/demoo.css" />
	<link rel="stylesheet" type="text/css" href="css/component.css" />

	<link rel="stylesheet" href="css/font-awesome.css" type="text/css"/>
	<!-- //Custom Theme files -->
	<!-- font-awesome icons -->
	<!-- <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet"> -->
	<link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.css" rel="stylesheet">
	<!-- <link href="css/font-awesome.css" rel="stylesheet">  -->
	<!-- //font-awesome icons -->
	<!-- js -->
	<script src="js/jquery-2.2.3.min.js"></script>
	<!-- //js -->
	<!-- web-fonts -->
	<link href="https://fonts.googleapis.com/css?family=Cairo:200,300,400,600,700,900&amp;subset=arabic" rel="stylesheet">
	<!-- //web-fonts -->
	<!-- circle-chart -->
	<script src="js/jquery.circlechart.js"></script>
	<!-- //circle-chart -->
	<!-- start-smooth-scrolling -->
	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>
	<script type="text/javascript">
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event){
                event.preventDefault();

                $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
            });
        });
	</script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>
	<!-- //end-smooth-scrolling -->


	<link href="css/stylee.css" rel="stylesheet">
	<link rel="stylesheet" href="css/demo.css">
	<link rel="stylesheet" href="css/font-awesome.css">
	<link rel="stylesheet" href="css/sky-tabs.css">

</head>
<body dir="ltr">

<!-- banner -->
<div class="banner" style="background: url({{Voyager::image(Voyager::setting('home_image'))}})no-repeat center 0px;">
	<div class="header"><!-- header -->
		<div class="container">
			<nav class="navbar navbar-default">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div>
				<!-- navbar-header -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav nav-center">
						<li><a href="index.html" class="w3ls-hover active">Home</a></li>
						<li><a href="#about" class="btn w3ls-hover scroll">About-Us</a></li>
						<li><a href="#team" class="btn w3ls-hover scroll">Our-Products</a></li>
						<li><a href="#services" class="btn w3ls-hover scroll">Company-News</a></li>
						<li><a href="#contact" class="btn w3ls-hover scroll">Contact-Us</a></li>
					</ul>
					<div class="clearfix"> </div>
				</div>
			</nav>
		</div>
	</div>
	<!-- //header -->
	<!-- banner-text -->
	<div class="banner-text">
		<div class="logo"><img class="img-responsive" src="images/logo1.png"/>
			<center><h4>Flash-Tech for computers, electronics and Solar energy</h4></center>
		</div>
		<!--<h2>فلاش تك.Flash-Tech</h2>-->
		<div class="social-icons">
			<ul>
				<li><a href="#" class="fa fa-facebook icon icon-border facebook"> </a></li>
				<li><a href="#" class="fa fa-twitter icon icon-border twitter"> </a></li>
				<li><a href="#" class="fa fa-google-plus icon icon-border googleplus"> </a></li>
				<li><a href="#" class="fa fa-dribbble icon icon-border dribbble"> </a></li>
				<li><a href="#" class="fa fa-rss icon icon-border rss"> </a></li>
			</ul>
		</div>
	</div>
	<!-- //banner-text -->
</div>
<!-- //banner -->
<!-- about -->
<div id="aboutcomp" class="aboutcomp">
	<div id="about" class="about">
		<div class="col-md-6 about-left">
			<h3 class="agileits-title">About Us</h3>
			<h4>{{Voyager::Setting('about_us_title')}}</h4>
			<p>{{Voyager::Setting('about_us_small_disc')}}</p>
			<a href="#" class="sim-button button13" data-toggle="modal" data-target="#myModal"><span>More</span></a>
		</div>
		<!--<div class="col-md-6 about-right">
        </div>-->
		<div class="clearfix"> </div>
	</div>
	<!-- //about -->
	<!-- modal-about -->
	<div class="modal bnr-modal fade" id="myModal" tabindex="-1" role="dialog">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				</div>
				<div class="modal-body modal-spa">
					<h4>{{Voyager::Setting('about_us_title')}}</h4>
					<p>{{Voyager::Setting('about_us_disc')}}</p>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- //modal-about -->
<!-- team -->
<div id="team" class="team" >
	<div class="container">
		<div class="row">
			<h3 class="agileits-title">Our Products</h3>

			<div class="sky-tabs sky-tabs-pos-left sky-tabs-anim-flip sky-tabs-response-to-icons">
				@foreach($mainCategories as $key=> $mainCategory)
					<input type="radio" name="sky-tabs" checked id="sky-tab{{$key+1}}" value="{{$mainCategory->id}}" class="sky-tab-content-{{$key+1}}">
					<label for="sky-tab{{$key+1}}"><span><span><i class="fa fa-bolt"></i>{{ $mainCategory->name}}</span></span></label>
				@endforeach
				<ul>
				@foreach($mainCategories as $key=> $mainCategory)

					<li class="sky-tab-content-{{$mainCategory->id}}">
						<div class="typography">
							<div class="container">
								<div id="tabs" class="tabs">
									<nav>
										<ul id="sub-categories">
										</ul>
									</nav>
									<div class="content products">
									</div><!-- /content -->
								</div><!-- /tabs -->
							</div>
							<script src="js/cbpFWTabs.js"></script>
							<script>
                                new CBPFWTabs( document.getElementById( 'tabs' ) );
							</script>

							<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
							<script>
								$(document).ready(function() {
									getSubCats = function ($val){
										$.get(window.location.origin+'/sub_categories/'+$val
												,function(data){
													$('.sky-tab-content-'+$val).find( '#sub-categories').html(data);
													$('.sky-tab-content-'+$val).find( "div #tabs").on('click','input[name=sub-cats-'+$val+']',function (evt){ getProds ($val,$(this).val())});
													$('.sky-tab-content-'+$val).find( "div #tabs").find('input[name=sub-cats-'+$val+']:first').click()
												})
									};

									getProds = function ($main,$val){
										$.get(window.location.origin+'/category_products/'+$val
												,function(data){
													$('.sky-tab-content-'+$main).find( '.products').html(data);
													$('.sky-tab-content-'+$main).find("ul.pagination a").on('click',function (evt){ getPage ($main,$(this).data('url'))});
													$("div.view-caption a").on('click',function (evt){
														getProductModal ($(this).data('id'))});
										})
									};

									getPage = function ($main,$val){
										$.get($val
												,function(data){
													$('.sky-tab-content-'+$main).find( '.products').html(data);
													$('.sky-tab-content-'+$main).find("ul.pagination a").on('click',function (evt){getPage ($main,$(this).data('url'))});
												})
									};

									getProductModal = function ($val){
										$.get(window.location.origin+'/product_modal/'+$val
												,function(data){
													$('#fill').html(data);
												})
									};
									$("div.container").on('click','input[name=sky-tabs]',function (evt){ getSubCats($(this).val())});
									$("div.container").find('input[name=sky-tabs]:first').click();
								});

							</script>

						</div>
					</li>
					@endforeach
				</ul>
			</div>
		</div>
		<div class="modal bnr-modal fade" id="fill" role="dialog">

		</div>
		{{--<div class="modal bnr-modal fade" id="fill" role="dialog">--}}
			{{--<div class="modal-dialog" role="document">--}}
				{{--<div class="modal-content col-md-8">--}}
					{{--<div class="modal-header">--}}
						{{--<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>--}}
					{{--</div>--}}
					{{--<div class="modal-body modal-spa">--}}
						{{--<div class="col-md-6"><img src="images/g1.jpg" alt=" " class="img-responsive" style="padding-top: 93px;"/></div>--}}
						{{--<div class="col-md-6">--}}
							{{--<p><label>Price</label><label>-</label></p>--}}
							{{--<p><label>Screen</label><label>-</label></p>--}}
							{{--<p><label>Memory</label><label>-</label></p>--}}
							{{--<p><label>Processor</label><label>-</label></p>--}}
							{{--<p><label>Model</label><label>-</label></p>--}}
						{{--</div>--}}
					{{--</div>--}}
				{{--</div>--}}
			{{--</div>--}}
		{{--</div>--}}
		{{--<div class="modal bnr-modal fade" id="fill2" role="dialog">--}}
			{{--<div class="modal-dialog" role="document">--}}
				{{--<div class="modal-content col-md-8">--}}
					{{--<div class="modal-header">--}}
						{{--<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>--}}
					{{--</div>--}}
					{{--<div class="modal-body modal-spa">--}}
						{{--<div class="col-md-6"><img src="images/g1.jpg" alt=" " class="img-responsive" style="padding-top: 93px;"/></div>--}}
						{{--<div class="col-md-6">--}}
							{{--<p><label>Price</label><label>-</label></p>--}}
							{{--<p><label>Screen</label><label>-</label></p>--}}
							{{--<p><label>Memory</label><label>-</label></p>--}}
							{{--<p><label>Processor</label><label>-</label></p>--}}
							{{--<p><label>Model</label><label>-</label></p>--}}
						{{--</div>--}}
					{{--</div>--}}
				{{--</div>--}}
			{{--</div>--}}
		{{--</div>--}}
		{{--<div class="modal bnr-modal fade" id="fill3" role="dialog">--}}
			{{--<div class="modal-dialog" role="document">--}}
				{{--<div class="modal-content col-md-8">--}}
					{{--<div class="modal-header">--}}
						{{--<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>--}}
					{{--</div>--}}
					{{--<div class="modal-body modal-spa">--}}
						{{--<div class="col-md-6"><img src="images/g1.jpg" alt=" " class="img-responsive" style="padding-top: 93px;"/></div>--}}
						{{--<div class="col-md-6">--}}
							{{--<p><label>Price</label><label>-</label></p>--}}
							{{--<p><label>Screen</label><label>-</label></p>--}}
							{{--<p><label>Memory</label><label>-</label></p>--}}
							{{--<p><label>Processor</label><label>-</label></p>--}}
							{{--<p><label>Model</label><label>-</label></p>--}}
						{{--</div>--}}
					{{--</div>--}}
				{{--</div>--}}
			{{--</div>--}}
		{{--</div>--}}
		{{--<div class="modal bnr-modal fade" id="fill4" role="dialog">--}}
			{{--<div class="modal-dialog" role="document">--}}
				{{--<div class="modal-content col-md-8">--}}
					{{--<div class="modal-header">--}}
						{{--<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>--}}
					{{--</div>--}}
					{{--<div class="modal-body modal-spa">--}}
						{{--<div class="col-md-6"><img src="images/g1.jpg" alt=" " class="img-responsive" style="padding-top: 93px;"/></div>--}}
						{{--<div class="col-md-6">--}}
							{{--<p><label>Price</label><label>-</label></p>--}}
							{{--<p><label>Screen</label><label>-</label></p>--}}
							{{--<p><label>Memory</label><label>-</label></p>--}}
							{{--<p><label>Processor</label><label>-</label></p>--}}
							{{--<p><label>Model</label><label>-</label></p>--}}
						{{--</div>--}}
					{{--</div>--}}
				{{--</div>--}}
			{{--</div>--}}
		{{--</div>--}}
		{{--<div class="modal bnr-modal fade" id="fill5" role="dialog">--}}
			{{--<div class="modal-dialog" role="document">--}}
				{{--<div class="modal-content col-md-8">--}}
					{{--<div class="modal-header">--}}
						{{--<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>--}}
					{{--</div>--}}
					{{--<div class="modal-body modal-spa">--}}
						{{--<div class="col-md-6"><img src="images/g1.jpg" alt=" " class="img-responsive" style="padding-top: 93px;"/></div>--}}
						{{--<div class="col-md-6">--}}
							{{--<p><label>Price</label><label>-</label></p>--}}
							{{--<p><label>Screen</label><label>-</label></p>--}}
							{{--<p><label>Memory</label><label>-</label></p>--}}
							{{--<p><label>Processor</label><label>-</label></p>--}}
							{{--<p><label>Model</label><label>-</label></p>--}}
						{{--</div>--}}
					{{--</div>--}}
				{{--</div>--}}
			{{--</div>--}}
		{{--</div>--}}
		{{--<div class="modal bnr-modal fade" id="fill6" role="dialog">--}}
			{{--<div class="modal-dialog" role="document">--}}
				{{--<div class="modal-content col-md-8">--}}
					{{--<div class="modal-header">--}}
						{{--<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>--}}
					{{--</div>--}}
					{{--<div class="modal-body modal-spa">--}}
						{{--<div class="col-md-6"><img src="images/g1.jpg" alt=" " class="img-responsive" style="padding-top: 93px;"/></div>--}}
						{{--<div class="col-md-6">--}}
							{{--<p><label>Price</label><label>-</label></p>--}}
							{{--<p><label>Screen</label><label>-</label></p>--}}
							{{--<p><label>Memory</label><label>-</label></p>--}}
							{{--<p><label>Processor</label><label>-</label></p>--}}
							{{--<p><label>Model</label><label>-</label></p>--}}
						{{--</div>--}}
					{{--</div>--}}
				{{--</div>--}}
			{{--</div>--}}
		{{--</div>--}}
		{{--<div class="modal bnr-modal fade" id="fill7" role="dialog">--}}
			{{--<div class="modal-dialog" role="document">--}}
				{{--<div class="modal-content col-md-8">--}}
					{{--<div class="modal-header">--}}
						{{--<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>--}}
					{{--</div>--}}
					{{--<div class="modal-body modal-spa">--}}
						{{--<div class="col-md-6"><img src="images/g1.jpg" alt=" " class="img-responsive" style="padding-top: 93px;"/></div>--}}
						{{--<div class="col-md-6">--}}
							{{--<p><label>Price</label><label>-</label></p>--}}
							{{--<p><label>Screen</label><label>-</label></p>--}}
							{{--<p><label>Memory</label><label>-</label></p>--}}
							{{--<p><label>Processor</label><label>-</label></p>--}}
							{{--<p><label>Model</label><label>-</label></p>--}}
						{{--</div>--}}
					{{--</div>--}}
				{{--</div>--}}
			{{--</div>--}}
		{{--</div>--}}
		{{--<div class="modal bnr-modal fade" id="fill8" role="dialog">--}}
			{{--<div class="modal-dialog" role="document">--}}
				{{--<div class="modal-content col-md-8">--}}
					{{--<div class="modal-header">--}}
						{{--<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>--}}
					{{--</div>--}}
					{{--<div class="modal-body modal-spa">--}}
						{{--<div class="col-md-6"><img src="images/g1.jpg" alt=" " class="img-responsive" style="padding-top: 93px;"/></div>--}}
						{{--<div class="col-md-6">--}}
							{{--<p><label>Price</label><label>-</label></p>--}}
							{{--<p><label>Screen</label><label>-</label></p>--}}
							{{--<p><label>Memory</label><label>-</label></p>--}}
							{{--<p><label>Processor</label><label>-</label></p>--}}
							{{--<p><label>Model</label><label>-</label></p>--}}
						{{--</div>--}}
					{{--</div>--}}
				{{--</div>--}}
			{{--</div>--}}
		{{--</div>--}}
		{{--<div class="modal bnr-modal fade" id="fill9" role="dialog">--}}
			{{--<div class="modal-dialog" role="document">--}}
				{{--<div class="modal-content col-md-8">--}}
					{{--<div class="modal-header">--}}
						{{--<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>--}}
					{{--</div>--}}
					{{--<div class="modal-body modal-spa">--}}
						{{--<div class="col-md-6"><img src="images/g1.jpg" alt=" " class="img-responsive" style="padding-top: 93px;"/></div>--}}
						{{--<div class="col-md-6">--}}
							{{--<p><label>Price</label><label>-</label></p>--}}
							{{--<p><label>Screen</label><label>-</label></p>--}}
							{{--<p><label>Memory</label><label>-</label></p>--}}
							{{--<p><label>Processor</label><label>-</label></p>--}}
							{{--<p><label>Model</label><label>-</label></p>--}}
						{{--</div>--}}
					{{--</div>--}}
				{{--</div>--}}
			{{--</div>--}}
		{{--</div>--}}
		{{--<div class="modal bnr-modal fade" id="fill-10" role="dialog">--}}
			{{--<div class="modal-dialog" role="document">--}}
				{{--<div class="modal-content col-md-8">--}}
					{{--<div class="modal-header">--}}
						{{--<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>--}}
					{{--</div>--}}
					{{--<div class="modal-body modal-spa">--}}
						{{--<div class="col-md-6"><img src="images/g1.jpg" alt=" " class="img-responsive" style="padding-top: 93px;"/></div>--}}
						{{--<div class="col-md-6">--}}
							{{--<p><label>Price</label><label>-</label></p>--}}
							{{--<p><label>Screen</label><label>-</label></p>--}}
							{{--<p><label>Memory</label><label>-</label></p>--}}
							{{--<p><label>Processor</label><label>-</label></p>--}}
							{{--<p><label>Model</label><label>-</label></p>--}}
						{{--</div>--}}
					{{--</div>--}}
				{{--</div>--}}
			{{--</div>--}}
		{{--</div>--}}
		{{--<div class="modal bnr-modal fade" id="fill-11" role="dialog">--}}
			{{--<div class="modal-dialog" role="document">--}}
				{{--<div class="modal-content col-md-8">--}}
					{{--<div class="modal-header">--}}
						{{--<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>--}}
					{{--</div>--}}
					{{--<div class="modal-body modal-spa">--}}
						{{--<div class="col-md-6"><img src="images/g1.jpg" alt=" " class="img-responsive" style="padding-top: 93px;"/></div>--}}
						{{--<div class="col-md-6">--}}
							{{--<p><label>Price</label><label>-</label></p>--}}
							{{--<p><label>Screen</label><label>-</label></p>--}}
							{{--<p><label>Memory</label><label>-</label></p>--}}
							{{--<p><label>Processor</label><label>-</label></p>--}}
							{{--<p><label>Model</label><label>-</label></p>--}}
						{{--</div>--}}
					{{--</div>--}}
				{{--</div>--}}
			{{--</div>--}}
		{{--</div>--}}
		{{--<div class="modal bnr-modal fade" id="fill-12" role="dialog">--}}
			{{--<div class="modal-dialog" role="document">--}}
				{{--<div class="modal-content col-md-8">--}}
					{{--<div class="modal-header">--}}
						{{--<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>--}}
					{{--</div>--}}
					{{--<div class="modal-body modal-spa">--}}
						{{--<div class="col-md-6"><img src="images/g1.jpg" alt=" " class="img-responsive" style="padding-top: 93px;"/></div>--}}
						{{--<div class="col-md-6">--}}
							{{--<p><label>Price</label><label>-</label></p>--}}
							{{--<p><label>Screen</label><label>-</label></p>--}}
							{{--<p><label>Memory</label><label>-</label></p>--}}
							{{--<p><label>Processor</label><label>-</label></p>--}}
							{{--<p><label>Model</label><label>-</label></p>--}}
						{{--</div>--}}
					{{--</div>--}}
				{{--</div>--}}
			{{--</div>--}}
		{{--</div>--}}
		{{--<div class="modal bnr-modal fade" id="fill-13" role="dialog">--}}
			{{--<div class="modal-dialog" role="document">--}}
				{{--<div class="modal-content col-md-8">--}}
					{{--<div class="modal-header">--}}
						{{--<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>--}}
					{{--</div>--}}
					{{--<div class="modal-body modal-spa">--}}
						{{--<div class="col-md-6"><img src="images/g1.jpg" alt=" " class="img-responsive" style="padding-top: 93px;"/></div>--}}
						{{--<div class="col-md-6">--}}
							{{--<p><label>Price</label><label>-</label></p>--}}
							{{--<p><label>Screen</label><label>-</label></p>--}}
							{{--<p><label>Memory</label><label>-</label></p>--}}
							{{--<p><label>Processor</label><label>-</label></p>--}}
							{{--<p><label>Model</label><label>-</label></p>--}}
						{{--</div>--}}
					{{--</div>--}}
				{{--</div>--}}
			{{--</div>--}}
		{{--</div>--}}
		{{--<div class="modal bnr-modal fade" id="fill-14" role="dialog">--}}
			{{--<div class="modal-dialog" role="document">--}}
				{{--<div class="modal-content col-md-8">--}}
					{{--<div class="modal-header">--}}
						{{--<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>--}}
					{{--</div>--}}
					{{--<div class="modal-body modal-spa">--}}
						{{--<div class="col-md-6"><img src="images/g1.jpg" alt=" " class="img-responsive" style="padding-top: 93px;"/></div>--}}
						{{--<div class="col-md-6">--}}
							{{--<p><label>Price</label><label>-</label></p>--}}
							{{--<p><label>Screen</label><label>-</label></p>--}}
							{{--<p><label>Memory</label><label>-</label></p>--}}
							{{--<p><label>Processor</label><label>-</label></p>--}}
							{{--<p><label>Model</label><label>-</label></p>--}}
						{{--</div>--}}
					{{--</div>--}}
				{{--</div>--}}
			{{--</div>--}}
		{{--</div>--}}
		{{--<div class="modal bnr-modal fade" id="fill-15" role="dialog">--}}
			{{--<div class="modal-dialog" role="document">--}}
				{{--<div class="modal-content col-md-8">--}}
					{{--<div class="modal-header">--}}
						{{--<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>--}}
					{{--</div>--}}
					{{--<div class="modal-body modal-spa">--}}
						{{--<div class="col-md-6"><img src="images/g1.jpg" alt=" " class="img-responsive" style="padding-top: 93px;"/></div>--}}
						{{--<div class="col-md-6">--}}
							{{--<p><label>Price</label><label>-</label></p>--}}
							{{--<p><label>Screen</label><label>-</label></p>--}}
							{{--<p><label>Memory</label><label>-</label></p>--}}
							{{--<p><label>Processor</label><label>-</label></p>--}}
							{{--<p><label>Model</label><label>-</label></p>--}}
						{{--</div>--}}
					{{--</div>--}}
				{{--</div>--}}
			{{--</div>--}}
		{{--</div>--}}
		{{--<div class="modal bnr-modal fade" id="fill-16" role="dialog">--}}
			{{--<div class="modal-dialog" role="document">--}}
				{{--<div class="modal-content col-md-8">--}}
					{{--<div class="modal-header">--}}
						{{--<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>--}}
					{{--</div>--}}
					{{--<div class="modal-body modal-spa">--}}
						{{--<div class="col-md-6"><img src="images/g1.jpg" alt=" " class="img-responsive" style="padding-top: 93px;"/></div>--}}
						{{--<div class="col-md-6">--}}
							{{--<p><label>Price</label><label>-</label></p>--}}
							{{--<p><label>Screen</label><label>-</label></p>--}}
							{{--<p><label>Memory</label><label>-</label></p>--}}
							{{--<p><label>Processor</label><label>-</label></p>--}}
							{{--<p><label>Model</label><label>-</label></p>--}}
						{{--</div>--}}
					{{--</div>--}}
				{{--</div>--}}
			{{--</div>--}}
		{{--</div>--}}
		{{--<div class="modal bnr-modal fade" id="fill-17" role="dialog">--}}
			{{--<div class="modal-dialog" role="document">--}}
				{{--<div class="modal-content col-md-8">--}}
					{{--<div class="modal-header">--}}
						{{--<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>--}}
					{{--</div>--}}
					{{--<div class="modal-body modal-spa">--}}
						{{--<div class="col-md-6"><img src="images/g1.jpg" alt=" " class="img-responsive" style="padding-top: 93px;"/></div>--}}
						{{--<div class="col-md-6">--}}
							{{--<p><label>Price</label><label>-</label></p>--}}
							{{--<p><label>Screen</label><label>-</label></p>--}}
							{{--<p><label>Memory</label><label>-</label></p>--}}
							{{--<p><label>Processor</label><label>-</label></p>--}}
							{{--<p><label>Model</label><label>-</label></p>--}}
						{{--</div>--}}
					{{--</div>--}}
				{{--</div>--}}
			{{--</div>--}}
		{{--</div>--}}
		{{--<div class="modal bnr-modal fade" id="fill-18" role="dialog">--}}
			{{--<div class="modal-dialog" role="document">--}}
				{{--<div class="modal-content col-md-8">--}}
					{{--<div class="modal-header">--}}
						{{--<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>--}}
					{{--</div>--}}
					{{--<div class="modal-body modal-spa">--}}
						{{--<div class="col-md-6"><img src="images/g1.jpg" alt=" " class="img-responsive" style="padding-top: 93px;"/></div>--}}
						{{--<div class="col-md-6">--}}
							{{--<p><label>Price</label><label>-</label></p>--}}
							{{--<p><label>Screen</label><label>-</label></p>--}}
							{{--<p><label>Memory</label><label>-</label></p>--}}
							{{--<p><label>Processor</label><label>-</label></p>--}}
							{{--<p><label>Model</label><label>-</label></p>--}}
						{{--</div>--}}
					{{--</div>--}}
				{{--</div>--}}
			{{--</div>--}}
		{{--</div>--}}
		{{--<div class="modal bnr-modal fade" id="fill-19" role="dialog">--}}
			{{--<div class="modal-dialog" role="document">--}}
				{{--<div class="modal-content col-md-8">--}}
					{{--<div class="modal-header">--}}
						{{--<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>--}}
					{{--</div>--}}
					{{--<div class="modal-body modal-spa">--}}
						{{--<div class="col-md-6"><img src="images/g1.jpg" alt=" " class="img-responsive" style="padding-top: 93px;"/></div>--}}
						{{--<div class="col-md-6">--}}
							{{--<p><label>Price</label><label>-</label></p>--}}
							{{--<p><label>Screen</label><label>-</label></p>--}}
							{{--<p><label>Memory</label><label>-</label></p>--}}
							{{--<p><label>Processor</label><label>-</label></p>--}}
							{{--<p><label>Model</label><label>-</label></p>--}}
						{{--</div>--}}
					{{--</div>--}}
				{{--</div>--}}
			{{--</div>--}}
		{{--</div>--}}
		{{--<div class="modal bnr-modal fade" id="fill-20" role="dialog">--}}
			{{--<div class="modal-dialog" role="document">--}}
				{{--<div class="modal-content col-md-8">--}}
					{{--<div class="modal-header">--}}
						{{--<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>--}}
					{{--</div>--}}
					{{--<div class="modal-body modal-spa">--}}
						{{--<div class="col-md-6"><img src="images/g1.jpg" alt=" " class="img-responsive" style="padding-top: 93px;"/></div>--}}
						{{--<div class="col-md-6">--}}
							{{--<p><label>Price</label><label>-</label></p>--}}
							{{--<p><label>Screen</label><label>-</label></p>--}}
							{{--<p><label>Memory</label><label>-</label></p>--}}
							{{--<p><label>Processor</label><label>-</label></p>--}}
							{{--<p><label>Model</label><label>-</label></p>--}}
						{{--</div>--}}
					{{--</div>--}}
				{{--</div>--}}
			{{--</div>--}}
		{{--</div>--}}
		{{--<div class="modal bnr-modal fade" id="fill-21" role="dialog">--}}
			{{--<div class="modal-dialog" role="document">--}}
				{{--<div class="modal-content col-md-8">--}}
					{{--<div class="modal-header">--}}
						{{--<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>--}}
					{{--</div>--}}
					{{--<div class="modal-body modal-spa">--}}
						{{--<div class="col-md-6"><img src="images/g1.jpg" alt=" " class="img-responsive" style="padding-top: 93px;"/></div>--}}
						{{--<div class="col-md-6">--}}
							{{--<p><label>Price</label><label>-</label></p>--}}
							{{--<p><label>Screen</label><label>-</label></p>--}}
							{{--<p><label>Memory</label><label>-</label></p>--}}
							{{--<p><label>Processor</label><label>-</label></p>--}}
							{{--<p><label>Model</label><label>-</label></p>--}}
						{{--</div>--}}
					{{--</div>--}}
				{{--</div>--}}
			{{--</div>--}}
		{{--</div>--}}
		{{--<div class="modal bnr-modal fade" id="fill-22" role="dialog">--}}
			{{--<div class="modal-dialog" role="document">--}}
				{{--<div class="modal-content col-md-8">--}}
					{{--<div class="modal-header">--}}
						{{--<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>--}}
					{{--</div>--}}
					{{--<div class="modal-body modal-spa">--}}
						{{--<div class="col-md-6"><img src="images/g1.jpg" alt=" " class="img-responsive" style="padding-top: 93px;"/></div>--}}
						{{--<div class="col-md-6">--}}
							{{--<p><label>Price</label><label>-</label></p>--}}
							{{--<p><label>Screen</label><label>-</label></p>--}}
							{{--<p><label>Memory</label><label>-</label></p>--}}
							{{--<p><label>Processor</label><label>-</label></p>--}}
							{{--<p><label>Model</label><label>-</label></p>--}}
						{{--</div>--}}
					{{--</div>--}}
				{{--</div>--}}
			{{--</div>--}}
		{{--</div>--}}
		{{--<div class="modal bnr-modal fade" id="fill-23" role="dialog">--}}
			{{--<div class="modal-dialog" role="document">--}}
				{{--<div class="modal-content col-md-8">--}}
					{{--<div class="modal-header">--}}
						{{--<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>--}}
					{{--</div>--}}
					{{--<div class="modal-body modal-spa">--}}
						{{--<div class="col-md-6"><img src="images/g1.jpg" alt=" " class="img-responsive" style="padding-top: 93px;"/></div>--}}
						{{--<div class="col-md-6">--}}
							{{--<p><label>Price</label><label>-</label></p>--}}
							{{--<p><label>Screen</label><label>-</label></p>--}}
							{{--<p><label>Memory</label><label>-</label></p>--}}
							{{--<p><label>Processor</label><label>-</label></p>--}}
							{{--<p><label>Model</label><label>-</label></p>--}}
						{{--</div>--}}
					{{--</div>--}}
				{{--</div>--}}
			{{--</div>--}}
		{{--</div>--}}
	</div>
</div>
<!-- //team -->
<!-- services -->
<div id="services" class="services">
	<h3 class="agileits-title">Company News</h3>
	<div class="sky-tabs sky-tabs-pos-top-center sky-tabs-anim-flip sky-tabs-response-to-icons">
		<input type="radio" name="sky-tab" checked id="sky-tab5" class="sky-tab-content-5">
		<label for="sky-tab5"><span><span><i class="fa fa-bolt"></i>Company News</span></span></label>

		<input type="radio" name="sky-tab" id="sky-tab6" class="sky-tab-content-6">
		<label for="sky-tab6"><span><span><i class="fa fa-picture-o"></i>Facebook Posts</span></span></label>
		<ul style="width: 75%;display: block;margin-right: auto;margin-left: auto;">
			<li class="sky-tab-content-5">
				<div class="typography">
					<div class="page padding-bottom">
						<div class="content_wrap">
							<div class="left-panel">
								@foreach($news as $newss)
								<div class="panel">
									<div class="content">
										<p>{{$newss->title}} <a data-toggle="modal" data-target="#more{{$newss->id}}">More</a></p>
									</div>
								</div>
									@endforeach


							</div>
							<!-- end of BOX WRAPPER -->
						</div>
					</div>
				</div>
			</li>
			<li class="sky-tab-content-6">
				<div class="typography">
					<div class="page padding-bottom">
						<div class="content_wrap">
							<div class="left-panel">
								<div class="panel">
									@foreach($feeds as $feed)
									<div class="content">
										<div class="clearfix">
											<img src="{{@$feed->full_picture}}" alt=" " class="pull-left gap" width="80px" height="80px" style="margin-right:10px">
											<p><b>{{@$feed->story}}</b></b><br>{{@$feed->message}} <a target="_blank" href="https://facebook.com/{{$feed->id}}">More</a></p>
										</div>
									</div>
										@endforeach
								</div>

							</div>
							<!-- end of BOX WRAPPER -->
						</div>
					</div>
				</div>
			</li>
		</ul>
	</div>
	@foreach($news as $newss)
	<div class="modal bnr-modal fade" id="more{{$newss->id}}" role="dialog">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				</div>
				<div class="modal-body modal-spa">
					<h4>{{$newss->title}}</h4>
					<p>{{$newss->details}}</p>
				</div>
			</div>
		</div>
	</div>
		@endforeach
</div>
<div id="contact" class="contact">
	<div class="container">
		<h3 class="agileits-title">اتصل بنا</h3>
		<div class="contact-w3lsrow">
			<div class="col-md-6 contact-left">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3023.9503398796587!2d-73.9940307!3d40.719109700000004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25a27e2f24131%3A0x64ffc98d24069f02!2sCANADA!5e0!3m2!1sen!2sin!4v1441710758555" allowfullscreen></iframe>
			</div>

			<div class="col-md-6 contact-right">
				@if (count($errors) > 0)
					<div class="alert alert-danger">
						<ul>
							@foreach ($errors->all() as $error)
								<li>{{ $error }}</li>
							@endforeach
						</ul>
					</div>
				@endif
				<form action="{{route('contact_us')}}" method="post">
					{{csrf_field()}}
					<div class="styled-input agile-styled-input-top">
						<input type="text" name="name" required="">
						<label>Name</label>
						<span></span>
					</div>
					<div class="styled-input">
						<input type="text" name="email" required="">
						<label>Email</label>
						<span></span>
					</div>
					<div class="styled-input">
						<input type="text" name="subject" required="">
						<label>Subject</label>
						<span></span>
					</div>
					<div class="styled-input">
						<textarea name="message" required=""></textarea>
						<label>Text Message</label>
						<span></span>
					</div>
					<input type="submit" value="Send">
				</form>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
</div>
<!-- //contact -->
<!-- footer -->
<div class="footer">
	<div class="container">
		<div class="address">
			<ul>
				<li><i class="fa fa-map-marker" aria-hidden="true"></i>Palestine.Gaza Al-Wehda street newr shawwa & Hosari tower</li>
				<li><i class="fa fa-phone" aria-hidden="true"> </i>  +01 111 222 3333</li>
				<li><i class="fa fa-envelope" aria-hidden="true"></i><a href="mailto:info@example.com"> mail@example.com</a></li>
			</ul>
		</div>
		<div class="copy-right">
			<p> ©2016 Flash-Tech company. All Rights reserved</p>
		</div>
	</div>
</div>
<div class="clearfix"> </div>
<!-- //footer -->
<!-- smooth-scrolling-of-move-up -->
<script type="text/javascript">
    $(document).ready(function() {
		/*
		 var defaults = {
		 containerID: 'toTop', // fading element id
		 containerHoverID: 'toTopHover', // fading element hover id
		 scrollSpeed: 1200,
		 easingType: 'linear'
		 };
		 */

        $().UItoTop({ easingType: 'easeOutQuart' });

    });
</script>
<!-- //smooth-scrolling-of-move-up -->
<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="js/bootstrap.js"></script>
</body>
</html>