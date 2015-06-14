<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="Web Developer, Laravel Fanatic">
		<meta name="author" content="Gerhard Botha">
		<link rel="shortcut icon" href="images/favicon.png">
		<title>Gerhard Botha | Laravel Developer</title>
		<!-- Custom styles for this template -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="/css/main.css"/>
		<link rel="stylesheet" href="/css/prism.css"/>
		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->

		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
		<![endif]-->

		<!-- Google Fonts -->
		<script type="text/javascript">WebFontConfig={google:{families:['Open+Sans:300,400,700:latin','Lato:700,900:latin']}};(function(){var wf=document.createElement('script');wf.src=('https:'==document.location.protocol?'https':'http')+'://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';wf.type='text/javascript';wf.async='true';var s=document.getElementsByTagName('script')[0];s.parentNode.insertBefore(wf,s);})();</script>
	</head>
	<body>
	<!-- header -->
	<header class="header  push-down-45">
		<div class="container">
			<div class="logo  pull-left">
				<a href="index.html">
					<img src="images/logo.png.pagespeed.ce.9AC7oTjcgs.png" alt="Logo" width="352" height="140">
				</a>
			</div>
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#readable-navbar-collapse">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				</button>
			</div>
			<nav class="navbar  navbar-default" role="navigation">
				<div class="collapse  navbar-collapse" id="readable-navbar-collapse">
					<ul class="navigation">
						<li class="{{ Request::is('/') ? 'active' : '' }}">
							<a href="/">Home</a>
						</li>						
						<li class="{{ Request::is('/about') ? 'active' : '' }}">
							<a href="/about">About</a>
						</li>
						<li class="{{ Request::is('/contact') ? 'active' : '' }}">
							<a href="/contact">Contact</a>
						</li>
					</ul>
					</div>
				</nav>
				<div class="hidden-xs  hidden-sm">
					<a href="#" class="search__container  js--toggle-search-mode"> <span class="fa  fa-search"></span> </a>
					<div class="social">
						<a href="#" class="social__container"> <span class="fa  fa-heart"></span> </a>
						<ul class="social__dropdown">
							<li>
								<a href="https://www.facebook.com/W1R3d" target="_blank" class="social__container"> <span class="fa fa-facebook"></span> </a>
							</li>
							<li>
								<a href="https://twitter.com/Gerhardt0011" target="_blank" class="social__container"> <span class="fa fa-twitter"></span> </a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</header>
		<!-- Search - Open panel -->
		<div class="search-panel">
			<div class="container">
				<div class="row">
					<div class="col-xs-12">
						<form action="/search" method="get">
							<input type="text" class="search-panel__form  js--search-panel-text" placeholder="Begin typing for search">
							<p class="search-panel__text">Press enter to see results or esc to cancel.</p>
						</form>
					</div>
				</div>
			</div>
		</div>