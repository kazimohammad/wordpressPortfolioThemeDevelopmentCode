<?php global $kaziportfolio; ?>

<!DOCTYPE HTML>
<html>
	<head <?php language_attributes(  ); ?>>
	<meta charset="<?php bloginfo('charset'); ?> ">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="author" content="" />

  <!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="favicon.ico">

<style>
	p.pull-right {
    color: <?php echo $kaziportfolio['ftext_color'] ?> !important;
}
</style>
	
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
	</head>
	<body <?php body_class(  ); ?>>
	<div id="colorlib-page">
		<div class="container-wrap">
		<a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"><i></i></a>
		<aside id="colorlib-aside" role="complementary" class="border js-fullheight">
			<div class="text-center">
				<div class="author-img" style="background-image: url('<?php echo $kaziportfolio['header_author_img']['url'] ?>');"></div>
				<h1 id="colorlib-logo"><a href="index.html"><?php echo $kaziportfolio['author_name'] ?></a></h1>
				<span class="position"><a href="#"><?php echo $kaziportfolio['a_designation'] ?></a> in Bangladesh</span>
			</div>
			<nav id="colorlib-main-menu" role="navigation" class="navbar">
				<div id="navbar" class="collapse">
					<ul>
						<li class="active"><a href="#" data-nav-section="home">Home</a></li>
						<li><a href="#" data-nav-section="about">About</a></li>
						<li><a href="#" data-nav-section="services">Services</a></li>
						<li><a href="#" data-nav-section="skills">Skills</a></li>
						<li><a href="#" data-nav-section="education">Education</a></li>
						<li><a href="#" data-nav-section="experience">Experience</a></li>
						<li><a href="#" data-nav-section="work">Work</a></li>
						<li><a href="#" data-nav-section="blog">Blog</a></li>
						<li><a href="#" data-nav-section="contact">Contact</a></li>
					</ul>
						
				</div>
			</nav>

			<div class="colorlib-footer">
				<p class="pull-right"><?php echo $kaziportfolio['copyright_text']?></p>
					<ul id="social-icon">
					<?php if($kaziportfolio['fb']): ?>
					<li><a href=" <?php echo esc_url($kaziportfolio['fb']) ?>"><i class="icon-facebook2"></i></a></li>
					<?php endif; ?>
					<?php if($kaziportfolio['tw']): ?>
					<li><a href="<?php echo esc_url($kaziportfolio['tw']) ?>"><i class="icon-twitter2"></i></a></li>
					<?php endif; ?>
					<?php if($kaziportfolio['insta']): ?>
					<li><a href="<?php echo esc_url($kaziportfolio['insta']) ?>"><i class="icon-instagram"></i></a></li>
					<?php endif; ?>
					<?php if($kaziportfolio['link']): ?>
					<li><a href="<?php echo esc_url($kaziportfolio['link']) ?>"><i class="icon-linkedin2"></i></a></li>
					<?php endif; ?>
				</ul>
			</div>

		</aside>