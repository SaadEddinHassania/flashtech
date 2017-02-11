<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Flash Tach</title>
<meta name="description" content="">
<meta name="author" content="">

<!-- Favicons
    ================================================== -->
<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
<link rel="apple-touch-icon" href="img/apple-touch-icon.png">
<link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-114x114.png">

<!-- Bootstrap -->
<link rel="stylesheet" type="text/css"  href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="fonts/font-awesome/css/font-awesome.css">

<!-- Stylesheet
    ================================================== -->
<link rel="stylesheet" type="text/css"  href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/nivo-lightbox/nivo-lightbox.css">
<link rel="stylesheet" type="text/css" href="css/nivo-lightbox/default.css">
<link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,600,700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Dancing+Script:400,700" rel="stylesheet">

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top" dir="{{App::isLocale('ar')?'rtl':'ltr'}}">
<!-- Navigation
    ==========================================-->
<nav id="menu" class="navbar navbar-default navbar-fixed-top">
  <div class="container"> 
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      <a class="navbar-brand page-scroll" href="#page-top"><img class="img-responsive" src="images/logo1.png" width="200px" height="200px"/></a>
    </div>
    
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
          <li><a href="#about" class="page-scroll">@lang('home.about')</a></li>
          <li><a href="#news" class="page-scroll">@lang('home.news')</a></li>
          <li><a href="#products" class="page-scroll">@lang('home.products')</a></li>
          <li><a href="#call-reservation" class="page-scroll">@lang('home.contacts')</a></li>

      </ul>
    </div>
    <!-- /.navbar-collapse -->
  </div>
</nav>
<!-- Header -->
<header id="header">
  <div class="intro">
    <div class="overlay">
      <div class="container">
        <div class="row">
          <div class="intro-text">
            <a href="#about" class="btn btn-custom btn-lg page-scroll">Discover Story</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</header>
<!-- About Section -->
<div id="about">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-md-12">
        <div class="about-text">
          <h2>@lang('home.about')</h2>
          <hr>
          @if(App::isLocale('ar'))
          <h3>{{Voyager::setting('about_us_title_ar')}}</h3>
          <p>{{Voyager::setting('about_us_disc_ar')}}</p>
            @else
            <h3>{{Voyager::setting('about_us_title')}}</h3>
            <p>{{Voyager::setting('about_us_disc')}}</p>
            @endif
          </div>
      </div>
    </div>
  </div>
</div>
<!-- Restaurant Menu Section -->
<div id="news">
  <div class="section-title text-center center">
    <div class="overlay">
      <h2>@lang('home.news')</h2>
      <hr>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-sm-6" >
        <div class="news-section">
          <h2 class="news-section-title">@lang('home.news')</h2>
          <hr>
          @if(App::isLocale('ar'))
            @foreach($news as $new)
              <div class="news-item" >
                <div class="news-item-name"> {{$new->translations()->where('key','title')->first()->value}} </div>
                <div class="news-item-description"> {{$new->translations()->where('key','details')->first()->value}} </div>
              </div>
            @endforeach
          @else
            @foreach($news as $new)
              <div class="news-item">
                <div class="news-item-name"> {{$new->title}} </div>
                <div class="news-item-description"> {{$new->details}} </div>
              </div>
            @endforeach
          @endif
        </div>
      </div>
      <div class="col-xs-12 col-sm-6">
        <div class="news-section">
          <h2 class="news-section-title">Facebook Posts</h2>
          <hr>
          @foreach($feeds as $feed)
          <div class="news-item" style="height: 80px;">
            @if(isset($feed->picture))
              <img src="{{$feed->picture}}" class="img-responsive" style="float: left; width: 80px;">
            @endif
              @if(isset($feed->story))

            <div class="news-item-name"> {{$feed->story}} </div>
              @endif
            <div class="news-item-description"> {{@$feed->message}} <a target="_blank" href="https://facebook.com/{{$feed->id}}">More</a></div>
          </div>
          @endforeach
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Products Section -->
<div id="products" dir="ltr">
  <div class="section-title text-center center">
    <div class="overlay">
      <h2>@lang('home.products')</h2>
      <hr>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="categories">
        <ul class="cat">
          <li>
            <ol class="type">
              <li><a href="#" data-filter="*" class="active">@lang('home.all')</a></li>
              @foreach($mainCategories as $mainCategory)
                <li><a href="#" data-id="{{$mainCategory->id}}" >{{$mainCategory->name}}</a></li>
              @endforeach
            </ol>
          </li>
        </ul>
        <div class="clearfix"></div>
      </div>
    </div>
    <div class="row">
      <div class="sub-categories">
        <ul class="sub-cat">
          <li>
            <ol class="sub-type">
              <?php echo $viewSub ?>
            </ol>
          </li>
        </ul>
        <div class="clearfix"></div>
      </div>
    </div>
    <div class="row">
      {{--<div class="products">--}}
        <?php echo $viewProducts ?>
      {{--</div>--}}
    </div>
  </div>
</div>
<!-- Call Reservation Section -->
<div id="call-reservation" class="text-center">
  <div class="container">
    <h2>@lang('home.support') </h2><br><h2><strong>08 286 1991</strong></h2>
  </div>
</div>
<!-- Contact Section -->
<div id="contact" class="text-center">
  <div class="container">
    <div class="section-title text-center">
      <h2>@lang('home.contact')</h2>
      <hr>
    </div>
    <div class="col-md-10 col-md-offset-1">
      <form name="sentMessage" id="contactForm" novalidate action="{{route('contact_us')}}" method="post">
        {{csrf_field()}}
        <div class="row" >
          <div class="col-md-6" style="float: {{App::isLocale('ar')?'right':'left'}};">
            <div class="form-group">
              <input type="text" id="name" class="form-control" placeholder="@lang('home.name')" name="name" required="required">
              <p class="help-block text-danger"></p>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <input type="email" id="email" name="email" class="form-control" placeholder="@lang('home.email')" required="required">
              <p class="help-block text-danger"></p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="form-group">
              <input type="text" id="subject" class="form-control" placeholder="@lang('home.subject')" name="subject" required="required">
              <p class="help-block text-danger"></p>
            </div>
          </div>
        </div>
        <div class="form-group">
          <textarea name="message" id="message" class="form-control" rows="4" placeholder="@lang('home.message')" required></textarea>
          <p class="help-block text-danger"></p>
        </div>
        <div id="success"></div>
        <button type="submit" class="btn btn-custom btn-lg">@lang('home.send_message')</button>
      </form>
    </div>
  </div>
</div>
<div id="footer">
  <div class="container text-center">
    <div class="col-md-6">
      <h3>@lang('home.address')</h3>
      <div class="contact-item">
        <p>@lang('home.city')</p>
        <p>@lang('home.street')</p>
      </div>
    </div>
    <div class="col-md-6">
      <h3>@lang('home.contact_info')</h3>
      <div class="contact-item">
        <p>Phone: 08 286 1991</p>
        <p>Email: info@flashtech-it.com
        </p>
      </div>
    </div>
  </div>
  <div class="container-fluid text-center copyrights">
    <div class="col-md-8 col-md-offset-2">
      <div class="social">
        <ul>
          <li><a href="https://www.facebook.com/flashtechco/"><i class="fa fa-facebook"></i></a></li>
          <li><a href="#"><i class="fa fa-twitter"></i></a></li>
          <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
        </ul>
      </div>
      <p>&copy; 2017 Flash Tech. All rights reserved.</p>
    </div>
  </div>
</div>
<script type="text/javascript" src="js/jquery.1.11.1.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript" src="js/SmoothScroll.js"></script>
<script type="text/javascript" src="js/nivo-lightbox.js"></script>
<script type="text/javascript" src="js/jquery.isotope.js"></script>
<script type="text/javascript" src="js/jqBootstrapValidation.js"></script>
<script type="text/javascript" src="js/contact_me.js"></script> 
<script type="text/javascript" src="js/main.js"></script>
</body>
</html>
