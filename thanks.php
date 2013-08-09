<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>

	<!-- Basic Page Needs
  ================================================== -->
	<meta charset="utf-8">
	<title>Lanyap Creative</title>
	<meta name="description" content="">
	<meta name="author" content="">

	<!-- Mobile Specific Metas
  ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- Typekit
  ================================================== -->
 	<script type="text/javascript" src="//use.typekit.net/eid8qoz.js"></script>
	<script type="text/javascript">try{Typekit.load();}catch(e){}</script>

	<!-- CSS
  ================================================== -->
	<link rel="stylesheet" href="../css/skeleton.css">
	<link rel="stylesheet" href="../css/screen.css">
	<link rel="stylesheet" href="../css/component.css">

	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<!-- Favicons
	================================================= -->
	<link rel="shortcut icon" href="imgs/favicon.ico">
	<link rel="apple-touch-icon" href="imgs/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="imgs/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="imgs/apple-touch-icon-114x114.png">
</head>
<body>
	<section id="thanks">
		<div class="container">
			<div class="sixteen columns">
				<h2 class="page-header">Thanks</h2>
				<h3 class="serif sub">We appreciate you dropping us a line, we'll get back to you very soon.</h3>
				<div class="seven columns alpha">
					<hr class="hr-alpha">
				</div>
				<div class="two columns">
					<h2 class="ly-plus">&#10012;</h2>
				</div>
				<div class="seven columns omega">
					<hr class="hr-omega">
				</div>
			</div>
			<nav>
				<ul>
					<li class="four columns"><a href="../index.html">Home</a></li>
					<li class="four columns"><a href="../index.html#what">What</a></li>
					<li class="four columns"><a href="../index.html#who">Who</a></li>
					<li class="four columns"><a href="../index.html#latest">Latest</a></li>
				</ul>
			</nav>
		</div>
	</section>
<!-- JS
	================================================== -->
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function () {
		    //make sections *at least* as tall as the viewport
		    var winheight = $(window).height();
		    $('section').each(function(){
		        var $this = $(this);
		        if ($this.height() <= winheight) {
		            $this.css('min-height', winheight);
		        }
		    })
		});
	</script>
</body>
</html>