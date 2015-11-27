<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from templatecycle.com/demo/bootclassified-v1.2/index-v-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 18 Nov 2015 12:50:13 GMT -->
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
 
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="public/assets/ico/apple-touch-icon-144-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="public/assets/ico/apple-touch-icon-114-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="public/assets/ico/apple-touch-icon-72-precomposed.png">
<link rel="apple-touch-icon-precomposed" href="ico/apple-touch-icon-57-precomposed.html">
<link rel="shortcut icon" href="public/assets/ico/favicon.png">
<title>Green Hopping</title>
 
<link href="public/assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
 
<link href="public/assets/css/style.css" rel="stylesheet">
 
<link href="public/assets/css/owl.carousel.css" rel="stylesheet">
<link href="public/assets/css/owl.theme.css" rel="stylesheet">
 
 
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
<![endif]-->
 
<script>
    paceOptions = {
      elements: true
    };
</script>
<script src="public/assets/js/pace.min.js"></script>
</head>
<body>
<div id="wrapper">
<div class="header">
<nav class="navbar   navbar-site navbar-default" role="navigation">
<div class="container">
<div class="navbar-header">
<button data-target=".navbar-collapse" data-toggle="collapse" class="navbar-toggle" type="button"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
<a href="#/dashboard" class="navbar-brand logo logo-title">
<span class="logo-icon"><img  src='public/images/logo.jpg' style="max-height: 53px !important"></span> Green<span>Hopping</span> </a>  </div>
<div class="navbar-collapse collapse">
<ul class="nav navbar-nav navbar-right">

<li class="dropdown"> <a  class="dropdown-toggle" data-toggle="dropdown"> <span class='username'></span> <i class="icon-user fa"></i> <i class=" icon-down-open-big fa"></i></a>
<ul class="dropdown-menu user-menu">
<li class="active"><a href="#/profile"><i class="icon-home"></i> My Profile </a></li>
<li><a href="#/settings"><i class="icon-th-thumb"></i> Settings	 </a></li>
<li><a href="account-favourite-ads.html"><i class="icon-heart"></i> Favourite Juice </a></li>
<li><a href="account-saved-search.html"><i class="icon-star-circled"></i> Favorite Store </a></li>
<li><a href="statements.html"><i class=" icon-money "></i> My Orders </a></li>
</ul>
</li>
<li><a href="#/logout">Signout <i class="glyphicon glyphicon-off"></i> </a></li>
</ul>
</div>
 
</div>
 
</nav>
</div>


<script type="text/javascript">
	$( document ).ready(function() 
{
	var userName = localStorage.getItem("ghUserName");
$('.username').html(userName);
	});
</script>