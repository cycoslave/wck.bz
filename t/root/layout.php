<!DOCTYPE html>
<html style="height:100%;">
<head>
	<meta charset="UTF-8">
	<title>Wbz</title>
	<meta name="description" content="WBZ Suite" >
	<meta name="author" content="loco" >

	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->

	<!-- Bootstrap  -->
	<link href="http://test.b.wck.bz/css/bootstrap.min.css" rel="stylesheet">

	<!-- icon fonts font Awesome -->
	<link href="http://test.b.wck.bz/css/font-awesome-pb.min.css" rel="stylesheet">

	<!-- Custom Styles -->
	<link href="http://test.b.wck.bz/css/common.css" rel="stylesheet">

	<!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<![endif]-->

</head>
<body onload="initPastebin()">


	<!-- Preloader -->
	<div id="preloader">
		<div id="loader">
			<div class="dot"></div>
			<div class="dot"></div>
			<div class="dot"></div>
			<div class="dot"></div>
			<div class="dot"></div>
			<div class="dot"></div>
			<div class="dot"></div>
			<div class="dot"></div>
			<div class="lading"></div>
		</div>
	</div><!-- /#preloader -->
	<!-- Preloader End-->


	<!-- Main Menu -->
	<div id="main-menu" class="navbar navbar-default navbar-fixed-top" role="navigation">

		<div class="navbar-header">
			<!-- responsive navigation -->
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				<span class="sr-only">Toggle navigation</span>
				<i class="fa fa-bars"></i>
			</button> <!-- /.navbar-toggle -->

		</div> <!-- /.navbar-header -->

		<nav class="collapse navbar-collapse" style='margin-top:50px;'>
			<!-- Main navigation -->
			<ul id="headernavigation" class="nav navbar-nav">
				<li><a href="http://b.wck.bz">URL Shortener</a></li>	
				<li class="active"><a href="http://t.b.wck.bz">Text bin</a></li>
				<li><a href="http://i.b.wck.bz">Information</a></li>
				<li><a href="http://test.b.wck.bz">Test skin</a></li>     <!-- This is not on the wck.bz site, only on b.wck.bz -->
				<li><a href="http://a.b.wck.bz">Admin</a></li>		
			</ul> <!-- /.nav .navbar-nav -->
		</nav> <!-- /.navbar-collapse  -->
	</div><!-- /#main-menu -->
	<!-- Main Menu End -->
	

	<!-- Page Top Section -->
	<section id="page-top" class="section-style" >
		<div class="pattern height-resize">
			<div class="container">
				<h1 class="site-title">WBZ</h1>
				<div class="subsite">

<?php require_once("/web/wbz/t/src/includes.php"); ?>

				</div>
			</div><!-- /.container -->
		</div><!-- /.pattern -->		
	</section><!-- /#page-top -->
	<!-- Page Top Section  End -->


		<!-- Footer Section -->
		<footer id="footer-section">
			<p class="copyright"><span class="copyright">
				&copy; Wbz 2013-2017, All Rights Reserved. <a href="http://wcksoft.com">Wicked Software</a>
			</span></p>
		</footer>
		<!-- Footer Section End -->


		<!-- jQuery Library -->
		<script type="text/javascript" src="http://test.b.wck.bz/js/jquery-2.1.0.min.js"></script>
		<!-- Modernizr js -->
		<script type="text/javascript" src="http://test.b.wck.bz/js/modernizr-2.8.0.min.js"></script>
		<!-- Plugins -->
		<script type="text/javascript" src="http://test.b.wck.bz/js/bootstrap.min.js"></script>
		<!--<script type="text/javascript" src="js/jquery.scrollTo.js"></script>-->
		<script type="text/javascript" src="http://test.b.wck.bz/js/skrollr.min.js"></script>
		<script type="text/javascript" src="http://test.b.wck.bz/js/jquery.easing.js"></script>
		<!-- <script type="text/javascript" src="http://test.b.wck.bz/js/jquery.lwtCountdown.js"></script> -->
		<script type="text/javascript" src="http://test.b.wck.bz/js/jquery.nav.js"></script>
		<!-- Custom JavaScript Functions -->
		<script type="text/javascript" src="http://test.b.wck.bz/js/functions.js"></script>
		<!-- Custom JavaScript Functions -->
		<script type="text/javascript" src="http://test.b.wck.bz/js/jquery.ajaxchimp.min.js"></script>
		<!-- PasteBin stuff -->
		<script type="text/javascript" src="http://test.b.wck.bz/js/pastebin.js"></script>

	</body>
</html>
