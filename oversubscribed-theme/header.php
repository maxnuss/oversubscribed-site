<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        
        <link rel="shortcut icon" type="image/x-icon" href="<?php echo get_template_directory_uri(); ?>/img/favicon.ico">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<?php wp_head(); ?>
		<script>
        // conditionizr.com
        // configure environment tests
        conditionizr.config({
            assets: '<?php echo get_template_directory_uri(); ?>',
            tests: {}
        });
        </script>

	</head>
	<body <?php body_class(); ?>>

		<!-- header -->
		<header class="header clear" role="banner">

				<!-- logo -->
				<div class="logo">
					<a href="<?php echo home_url(); ?>">
						<img src="<?php echo get_template_directory_uri(); ?>/img/logotype.png" alt="Logo" class="logo-img">
					</a>
					<div class="logo-subhead">A weekly fundraising newsletter for early-stage founders.</div>
					<div class="logo-subhead buy-the-book"><a href="/book" class="btn btn-transparent">Buy the book&mdash;just $4.99</a></div>
				</div>
				<!-- /logo -->
				
		</header>
		
		<div class="logged-in-subhead">
			<div class="logged-in-subhead-inner">
				<?php global $current_user; wp_get_current_user(); ?>
				<?php if ( is_user_logged_in() ) { 
				 echo 'You are currently logged in as: ' . $current_user->user_login . "<a href=\"https://oversubscribed.club/wp-login.php?action=logout\" class=\"log-out-link\">Log Out</a>"; }  ?>
			</div>
		</div>


		<!-- wrapper -->
		<div class="wrapper">

