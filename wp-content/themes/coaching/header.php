<!DOCTYPE html>

<!--// OPEN HTML <?php language_attributes(); ?> //-->
<html lang="es-ES" prefix="og: http://ogp.me/ns#">

<!--// OPEN HEAD //-->
	
<head>
				
	<!--// SITE TITLE //-->
	<title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>
	
	<!--// SITE META //-->
	<meta charset="UTF-8" />	
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1">		
	
	<!--// PINGBACK & FAVICON //-->
	<link rel="pingback" href="xmlrpc.php" />
	<link rel="shortcut icon" type="image/x-icon" href="<?php bloginfo('template_url'); ?>/images/favicon.ico" />
	

<link rel='stylesheet' id='bootstrap-css'  href='<?php bloginfo('template_url'); ?>/neighborhood/css/bootstrap.min.css' type='text/css' media='screen' />
<link rel='stylesheet' id='bootstrap-responsive-css'  href='<?php bloginfo('template_url'); ?>/neighborhood/css/bootstrap-responsive.min.css' type='text/css' media='screen' />
<link rel='stylesheet' id='fontawesome-css-css'  href='<?php bloginfo('template_url'); ?>/neighborhood/css/font-awesome.min.css' type='text/css' media='screen' />	
<link rel='stylesheet' id='responsive-css-css'  href='<?php bloginfo('template_url'); ?>/neighborhood/css/responsive.css' type='text/css' media='screen' />

<link rel='stylesheet' href='<?php bloginfo('template_url'); ?>/neighborhood/style.css' type='text/css' media='screen' /> 
<link rel='stylesheet' id='main-css-css'  href='<?php bloginfo('template_url'); ?>/style.css' type='text/css' media='screen' /> 





<?php wp_head(); ?>	


	
<!--// CLOSE HEAD //-->	



</head>
	
<!--// OPEN BODY //-->

<body <?php body_class(); ?>>	

<!-- Google Tag Manager -->
<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-T9NXPF"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-T9NXPF');</script>
<!-- End Google Tag Manager -->
	
<!--// NO JS ALERT //-->
<noscript>
	<div class="no-js-alert">Active JavaScript en su navegador para poder ver esta web</div>
</noscript>	
		
<!--// OPEN #container //-->
	<div id="container">
					
						
				
			
			<!--// HEADER //-->
			<div class="header-wrap">
				
				<div id="header-section" class="header-4 ">
					<header id="header" class="clearfix">
					<div class="container">
					<div class="row">
					<div id="logo" class="span4 logo-left clearfix">
					<a href="<?php bloginfo('url'); ?>">
						<img class="standard" src="<?php bloginfo('template_url'); ?>/images/logo-coaching-deportivo-1x.png" alt="Coaching Deportivo - Diego Gutiérrez" />
						<img class="retina" src="<?php bloginfo('template_url'); ?>/images/logo-coaching-deportivo-2x.png" alt="Coaching Deportivo - Diego Gutiérrez" />
					</a>
					<a href="#" class="hidden-desktop show-main-nav"><i class="fa-align-justify"></i></a>
					<a href="#" class="hidden-desktop mobile-search-link"><i class="fa-search"></i></a>
					</div>
					<div class="header-right span8">
					<nav>
						<ul class="menu">
							<li class="menu-search no-hover"><a href="#"><i class="fa-search"></i></a>
								<ul class="sub-menu">
									<li><div class="ajax-search-wrap">
											<div class="ajax-loading"></div>
											<form method="get" class="ajax-search-form" action="<?php bloginfo('url'); ?>">
												<input type="text" placeholder=" " name="s" autocomplete="off" />
											</form>
											<div class="ajax-search-results"></div>
										</div>
									</li>
								</ul>
							</li>
						</ul>
					</nav>
					<nav id="main-navigation" class="clearfix">
						<div class="menu-menu-principal-container">
							<ul id="menu-menu-principal" class="menu">
								<?php echo simple_menu(); ?>
							</ul>
						</div>
					</nav>
					</div>
					</div> <!-- CLOSE .row -->
					</div> <!-- CLOSE .container -->

					<div class="social-header-box">
							<ul class="social-icons standard mono">
								<li class="facebook"><a target="_blank" href="http://www.facebook.com/diegocoaching">Facebook</a></li>
								<li class="twitter"><a target="_blank" href="https://twitter.com/diegocoaching">Twitter</a></li>
								<li class="youtube"><a target="_blank" href="http://www.youtube.com/user/diegocoaching">YouTube</a></li>

								<li class="linkedin"><a target="_blank" href="http://www.linkedin.com/pub/diego-guti%C3%A9rrez-del-pozo/45/7a5/3b7">LinkedIn</a></li>
								<li class="googleplus"><a target="_blank" href="https://plus.google.com/+diegocoaching">YouTube</a></li>
							</ul>
					</div>

				</header>
				
				<form method="get" class="mobile-search-form" action="<?php bloginfo('url'); ?>/"><input type="text" placeholder=" " name="s" autocomplete="off" /></form>				
				</div>
				<?php if (!is_page(1313)){ ?>				<div id="banner">					<div class="container">						<img src="<?php bloginfo('template_url'); ?>/images/eslogan-newsletter.png" alt="Suscríbete y te informaré de las últimas novedades de coaching deportivo" />					</div>				</div>				<?php 								} else {					include('inc/form-top-big.php');				}								?>							</div> <!-- CLOSE .header-wrap --><?php if (!is_page(1313))	{	echo form_subscription_top(); 	}?>
				
