<!doctype html>
<html lang="tr">
<head>
<title><?php { echo wp_title(" | ", false, right); } ?></title>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
<meta name="theme-color" content="#14334f">
<?php if(is_home()) { echo "<meta name=\"description\" content=\"35pixel, İzmir' de web tasarım ve mobil site tasarım hizmetleriyle potansiyel müşterilerinize her platformdan etkili biçimde ulaşmanızı sağlıyor.\">";} ?>
<!--[if IE 6]><link rel="stylesheet" type="text/css" media="screen, projection" href="//universal-ie6-css.googlecode.com/files/ie6.0.3.css" /><![endif]-->
<!--[if lt IE 9]><script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
<link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,400italic&amp;subset=latin,latin-ext" rel="stylesheet" type="text/css">
<link href="//fonts.googleapis.com/css?family=Titillium+Web:400,300,400italic,700&amp;subset=latin,latin-ext" rel="stylesheet" type="text/css">
<link href="<?php print temaDizin; ?>css/bootstrap.css" rel="stylesheet" type="text/css">
<link href="<?php print temaDizin; ?>css/bootstrap-responsive.css" rel="stylesheet" type="text/css">
<link href="<?php print temaDizin; ?>style.css" rel="stylesheet" type="text/css">
<script src="//code.jquery.com/jquery-latest.js"></script>
<script src="<?php print temaDizin; ?>js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php print temaDizin; ?>js/jquery-ui.js"></script>
<script type="text/javascript" src="<?php print temaDizin; ?>js/back-to-top.min.js"></script>
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<script type="text/javascript">

  var _gaq = _gaq || [];

var pluginUrl = 
 '//www.google-analytics.com/plugins/ga/inpage_linkid.js';
_gaq.push(['_require', 'inpage_linkid', pluginUrl]);

  _gaq.push(['_setAccount', 'UA-41865929-2']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://' : '//') + 'stats.g.doubleclick.net/dc.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
 <!-- Quantcast Tag, part 1 --> 
<script type="text/javascript">
  var _qevents = _qevents || [];

  (function() {
   var elem = document.createElement('script');

   elem.src = (document.location.protocol == "https:" ? "https://secure" : "//edge") + 
              ".quantserve.com/quant.js";
   elem.async = true;
   elem.type = "text/javascript";
   var scpt = document.getElementsByTagName('script')[0];
   scpt.parentNode.insertBefore(elem, scpt);  
  })();
</script>
<!-- Quantcast Tag, part 1 -->
<!-- Start Alexa Certify Javascript -->
<script type="text/javascript">
_atrk_opts = { atrk_acct:"ZVMji1aUCm008W", domain:"35pixel.com",dynamic: true};
(function() { var as = document.createElement('script'); as.type = 'text/javascript'; as.async = true; as.src = "https://d31qbv1cthcecs.cloudfront.net/atrk.js"; var s = document.getElementsByTagName('script')[0];s.parentNode.insertBefore(as, s); })();
</script><!--
<noscript>
	<img src="https://d5nxst8fruw4z.cloudfront.net/atrk.gif?account=ZVMji1aUCm008W" style="display:none" height="1" width="1" alt="" />
</noscript>-->
<!-- End Alexa Certify Javascript -->
<?php wp_head(); ?>
</head>
<body>
	<div id="wrap">
		<div class="container" id="giris-butonu">
			<a href="#" rel="nofollow">
			<!--<a href="//musteri.35pixel.com/" rel="nofollow">-->
				<img src="//www.35pixel.com/wp/wp-content/themes/35px/img/musteri-girisi.png" alt="Musteri Girişi" id="musteri-girisi" class="visible-desktop" draggable="false">
			</a>
		</div>
		<header class="navbar navbar-fixed-top">
			<nav class="navbar-inner">
				<div class="container">
					<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse" onclick="">
			            <span>Menü</span>
			        </a>
		        	<strong id="logo" class="brand">
		        		<a href="<?php bloginfo('siteurl'); ?>" title="35pixel Web Tasarım ve Mobil Site Tasarım">
			        	</a>
					</strong>
			        <div class="nav-collapse">
<?php wp_nav_menu( array( 
  	'container'       => '', /*nav ya da div*/
	'theme_location' => 'primary',
    'items_wrap'      => '<ul class="nav pull-right">%3$s</ul>',
	'walker' => new Bootstrap_Walker(),									
	) );
?>

			        </div><!--nav-collapse-->
				</div>
			</nav>
		</header>
		<div id="icerik">