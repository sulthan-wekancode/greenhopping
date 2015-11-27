<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from templatecycle.com/demo/bootclassified-v1.2/signup.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 18 Nov 2015 12:51:30 GMT -->
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
 
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
<link rel="apple-touch-icon-precomposed" href="ico/apple-touch-icon-57-precomposed.html">
<link rel="shortcut icon" href="assets/ico/favicon.png">
<title>GreenHopping</title>
<link rel="stylesheet" href="{{ asset('/').('public/assets/bootstrap/css/bootstrap.css') }}"> 

 
<link rel="stylesheet" href="{{ asset('/').('public/assets/css/style.css') }}"> 
<link rel="stylesheet" href="{{ asset('/').('public/assets/css/owl.carousel.css') }}"> 
<link rel="stylesheet" href="{{ asset('/').('public/assets/css/owl.theme.css') }}"> 
 
 
 
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
<![endif]-->
 
<script>
    paceOptions = {
      elements: true
    };
</script>
<script src="{{ asset('/').('public/assets/js/pace.min.js') }}"></script>
<script src="{{ asset('/').('public/assets/js/jquery-1.9.1.min.js') }}"></script>
</head>
<body>
<div id="wrapper">
<div class="header">
<nav class="navbar   navbar-site navbar-default" role="navigation">
<div class="container">
<div class="navbar-header">
<button data-target=".navbar-collapse" data-toggle="collapse" class="navbar-toggle" type="button"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>

<a href="{{ URL::to('/') }}" class="navbar-brand logo logo-title">
<span class="logo-icon"><img src="{{asset('public/assets/img/logo.jpg')}}" style="max-height: 53px !important"></span> Green<span>Hopping</span> </a> </div>
<div class="navbar-collapse collapse">
<ul class="nav navbar-nav navbar-right">
<li><a href="{{ URL::to('login') }}">Login</a></li>
<li><a href="{{ URL::to('register') }}">Register</a></li>
<li class="postadd"><a class="btn btn-block   btn-border btn-post btn-danger" href="post-ads.html">Post Free</a></li>
</ul>
</div>
 
</div>
 
</nav>
</div>
@yield('body')
<div class="footer" id="footer">
<div class="container">
<ul class=" pull-left navbar-link footer-nav">
<li><a href="index-2.html"> Home </a> <a href="about-us.html"> About us </a> <a href="#"> Terms and Conditions </a> <a href="#"> Privacy Policy </a> <a href="contact.html"> Contact us </a> <a href="faq.html"> FAQ </a>
</ul>
<ul class=" pull-right navbar-link footer-nav">
<li> &copy; 2015 BootClassified </li>
</ul>
</div>
</div>
 
</div>
<script src="{{ ('http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js') }}"></script>
<script src="{{ asset('/').('public/assets/bootstrap/js/bootstrap.min.js') }}"></script>   

<script src="{{ asset('/').('public/assets/js/owl.carousel.min.js') }}"></script>    
<script src="{{ asset('/').('public/assets/js/jquery.matchHeight-min.js') }}"></script>    

<script src="{{ asset('/').('public/assets/js/hideMaxListItem.js') }}"></script>     
<script src="{{ asset('/').('public/assets/plugins/jquery.fs.scroller/jquery.fs.scroller.js') }}"></script>     
<script src="{{ asset('/').('public/assets/plugins/jquery.fs.selecter/jquery.fs.selecter.js') }}"></script>     
<script src="{{ asset('/').('public/assets/js/script.js') }}"></script>     

 
 

</body>

	
</html>
