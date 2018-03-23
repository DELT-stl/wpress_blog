<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Creative_Feeds
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'creative-feeds' ); ?></a>

	<header id="masthead" class="site-header">
<div class="mainmenu">
		<div class="container">
			<div class="logo">
				<a href="/">
					<svg enable-background="new 0 0 219 254" version="1.1" viewBox="0 0 219 254" xml:space="preserve" xmlns="http://www.w3.org/2000/svg">
						<style type="text/css">
							.st0{fill:#03FC96;stroke:#000000;stroke-width:6.96;stroke-linecap:round;stroke-linejoin:round;}
							.st1{enable-background:new    ;}
						</style>
						<path class="st0" d="M109.9,6l104,206H5L109.9,6z"/>
						<path d="m106.9 82.8l3.2-7.6 45.6 92.5-6 2.9-42.8-87.8z"/>
						<path d="M107.1,88h6.6v124h-6.6V88z"/>
						<path d="m86.2 129.9l3.6-5.6 63.9 41-3.6 5.6-63.9-41z"/>
						<path d="M72.4,171l-3.3-5.8l43.9-24.8l3.3,5.8L72.4,171z"/>
						<path d="M67,170.1l1.8-6.6l83.1-0.1v6.6H67z"/>
						<path d="m111.8 192.1l-3.7 5.5-43.5-28.6 3.7-5.5 43.5 28.6z"/>
						<path d="m155.8 168l-3.7-5.6-44 29.8 3.7 5.6 44-29.8z"/>
						<path d="m65.1 168.1l5.9 2.9 42.7-87.7-3.8-6.7-44.8 91.5z"/>
						<g class="st1">
							<path d="m6.9 253c-1.7 0-2.9-0.4-3.6-1.1s-1-1.9-1-3.5v-21.5c0-1.2 0.3-2.1 1-2.7s1.5-0.9 2.5-0.9h7.8l1 5.5h-5.7c-0.4 0-0.5 0.2-0.5 0.6v17.5c0 0.4 0.2 0.6 0.5 0.6h5.7l-1.1 5.5h-6.6z"/>
							<path d="m33.8 240.9c0 0.7-0.2 1.3-0.7 1.8s-1.1 0.8-2 0.8l3.1 9.5h-6.1l-2.9-9.5h-0.8v9.5h-5.9v-29.7h11.3c1.4 0 2.4 0.3 3.1 1 0.6 0.7 1 1.6 1 2.8v13.8zm-9.3-12.4v10.3h2.9c0.4 0 0.6-0.2 0.6-0.6v-9c0-0.4-0.2-0.6-0.6-0.6h-2.9z"/>
							<path d="M38.2,223.3h11.6l1,5.5h-6.5v7.1h4.9v5.1h-4.9v6.5h6.2l-1,5.5H38.2V223.3z"/>
							<path d="m60.2 249.3l-0.5 3.7h-6l5.4-29.7h6.4l5.4 29.7h-6l-0.5-3.7h-4.2zm0.7-4.7h2.7l-1.4-10.5-1.3 10.5z"/>
							<path d="M83.6,223.3l1.5,5.5h-4V253H75v-24.2h-4l1.6-5.5H83.6z"/>
							<path d="M88.6,223.3h5.9V253h-5.9V223.3z"/>
							<path d="m109.2 223.3h6l-5.5 29.7h-6.2l-5.5-29.7h6l0.5 3.8 2 15.4 2-15.5 0.7-3.7z"/>
							<path d="m118.8 223.3h11.6l1 5.5h-6.5v7.1h4.9v5.1h-4.9v6.5h6.2l-1 5.5h-11.3v-29.7z"/>
							<path d="m136.8 253l-1.1-5.5h6.4c0.5 0 0.7-0.2 0.7-0.6v-5.4c0-0.4-0.1-0.7-0.2-0.7s-0.5-0.1-0.9-0.1h-3.1c-0.4 0-0.9 0-1.3-0.1s-0.8-0.2-1.1-0.5c-0.3-0.2-0.6-0.6-0.7-1-0.2-0.4-0.3-1-0.3-1.8v-10.1c0-1.2 0.3-2.1 1-2.8 0.6-0.7 1.7-1 3.1-1h8.2l1 5.5h-6.7c-0.5 0-0.7 0.2-0.7 0.7v5.4c0 0.3 0.1 0.5 0.2 0.6s0.4 0.2 0.7 0.2h3.7c1 0 1.7 0.2 2.2 0.7s0.8 1.2 0.8 2.4v9.8c0 1.6-0.3 2.8-1 3.5s-1.9 1-3.5 1h-7.4z"/>
							<path d="M153,223.3h11.6l1,5.5h-6.5v7.1h4.9v5.1h-4.9v12H153V223.3z"/>
							<path d="m169.3 223.3h11.6l1 5.5h-6.5v7.1h4.9v5.1h-4.9v6.5h6.2l-1 5.5h-11.3v-29.7z"/>
							<path d="m185.8 223.3h11.6l1 5.5h-6.5v7.1h4.9v5.1h-4.9v6.5h6.2l-1 5.5h-11.3v-29.7z"/>
							<path d="m217.5 248.4c0 1.6-0.3 2.8-1 3.5s-1.9 1.1-3.6 1.1h-10.5v-29.7h11.6c1.2 0 2.1 0.3 2.6 1s0.9 1.5 0.9 2.6v21.5zm-9.2-19.9v19.3h2.8c0.2 0 0.4 0 0.5-0.1s0.1-0.3 0.1-0.5v-18.1c0-0.4-0.2-0.6-0.5-0.6h-2.9z"/>
						</g>
					</svg>
				</a>
			</div>

			<div class="menumid">
				<li><a href="#">categories</a></li>
				<li><a href="#">inspiration</a></li>
				<li><a href="#">case studies</a></li>
				<li><a href="#">snippets</a></li>
				<li><a href="#">mockups</a></li>
				<li><a href="#">products</a></li>
				<li><a href="#">directory</a></li>
				<li><a href="#">submit</a></li>
			</div>
			<div class="socialsvg">
				<li class="socialsvg"><a href="https://www.facebook.com/CreativesFeed/" itemprop="sameAs" target="_blank" class="newpage"><svg viewBox="0 0 512 512"><path d="M211.9 197.4h-36.7v59.9h36.7V433.1h70.5V256.5h49.2l5.2-59.1h-54.4c0 0 0-22.1 0-33.7 0-13.9 2.8-19.5 16.3-19.5 10.9 0 38.2 0 38.2 0V82.9c0 0-40.2 0-48.8 0 -52.5 0-76.1 23.1-76.1 67.3C211.9 188.8 211.9 197.4 211.9 197.4z"></path></svg><!--[if lt IE 9]><em>Facebook</em><![endif]--></a></li>
				<li class="socialsvg"><a href="https://twitter.com/creativesfeed" target="_blank" itemprop="sameAs" class="newpage"><svg viewBox="0 0 512 512"><path d="M419.6 168.6c-11.7 5.2-24.2 8.7-37.4 10.2 13.4-8.1 23.8-20.8 28.6-36 -12.6 7.5-26.5 12.9-41.3 15.8 -11.9-12.6-28.8-20.6-47.5-20.6 -42 0-72.9 39.2-63.4 79.9 -54.1-2.7-102.1-28.6-134.2-68 -17 29.2-8.8 67.5 20.1 86.9 -10.7-0.3-20.7-3.3-29.5-8.1 -0.7 30.2 20.9 58.4 52.2 64.6 -9.2 2.5-19.2 3.1-29.4 1.1 8.3 25.9 32.3 44.7 60.8 45.2 -27.4 21.4-61.8 31-96.4 27 28.8 18.5 63 29.2 99.8 29.2 120.8 0 189.1-102.1 185-193.6C399.9 193.1 410.9 181.7 419.6 168.6z"></path></svg><!--[if lt IE 9]><em>Twitter</em><![endif]--></a></li>
				<li class="socialsvg"><a href="https://www.instagram.com/creativesfeed/" itemprop="sameAs" target="_blank" class="newpage"><svg viewBox="0 0 512 512"><g><path d="M256 109.3c47.8 0 53.4 0.2 72.3 1 17.4 0.8 26.9 3.7 33.2 6.2 8.4 3.2 14.3 7.1 20.6 13.4 6.3 6.3 10.1 12.2 13.4 20.6 2.5 6.3 5.4 15.8 6.2 33.2 0.9 18.9 1 24.5 1 72.3s-0.2 53.4-1 72.3c-0.8 17.4-3.7 26.9-6.2 33.2 -3.2 8.4-7.1 14.3-13.4 20.6 -6.3 6.3-12.2 10.1-20.6 13.4 -6.3 2.5-15.8 5.4-33.2 6.2 -18.9 0.9-24.5 1-72.3 1s-53.4-0.2-72.3-1c-17.4-0.8-26.9-3.7-33.2-6.2 -8.4-3.2-14.3-7.1-20.6-13.4 -6.3-6.3-10.1-12.2-13.4-20.6 -2.5-6.3-5.4-15.8-6.2-33.2 -0.9-18.9-1-24.5-1-72.3s0.2-53.4 1-72.3c0.8-17.4 3.7-26.9 6.2-33.2 3.2-8.4 7.1-14.3 13.4-20.6 6.3-6.3 12.2-10.1 20.6-13.4 6.3-2.5 15.8-5.4 33.2-6.2C202.6 109.5 208.2 109.3 256 109.3M256 77.1c-48.6 0-54.7 0.2-73.8 1.1 -19 0.9-32.1 3.9-43.4 8.3 -11.8 4.6-21.7 10.7-31.7 20.6 -9.9 9.9-16.1 19.9-20.6 31.7 -4.4 11.4-7.4 24.4-8.3 43.4 -0.9 19.1-1.1 25.2-1.1 73.8 0 48.6 0.2 54.7 1.1 73.8 0.9 19 3.9 32.1 8.3 43.4 4.6 11.8 10.7 21.7 20.6 31.7 9.9 9.9 19.9 16.1 31.7 20.6 11.4 4.4 24.4 7.4 43.4 8.3 19.1 0.9 25.2 1.1 73.8 1.1s54.7-0.2 73.8-1.1c19-0.9 32.1-3.9 43.4-8.3 11.8-4.6 21.7-10.7 31.7-20.6 9.9-9.9 16.1-19.9 20.6-31.7 4.4-11.4 7.4-24.4 8.3-43.4 0.9-19.1 1.1-25.2 1.1-73.8s-0.2-54.7-1.1-73.8c-0.9-19-3.9-32.1-8.3-43.4 -4.6-11.8-10.7-21.7-20.6-31.7 -9.9-9.9-19.9-16.1-31.7-20.6 -11.4-4.4-24.4-7.4-43.4-8.3C310.7 77.3 304.6 77.1 256 77.1L256 77.1z"></path><path d="M256 164.1c-50.7 0-91.9 41.1-91.9 91.9s41.1 91.9 91.9 91.9 91.9-41.1 91.9-91.9S306.7 164.1 256 164.1zM256 315.6c-32.9 0-59.6-26.7-59.6-59.6s26.7-59.6 59.6-59.6 59.6 26.7 59.6 59.6S288.9 315.6 256 315.6z"></path><circle cx="351.5" cy="160.5" r="21.5"></circle></g></svg><!--[if lt IE 9]><em>Instagram</em><![endif]--></a></li>
			</div>
		</div>
    </div><!-- end of .mainmenu -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
