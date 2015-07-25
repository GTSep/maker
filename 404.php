<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @package Primer
 */

get_header(); ?>

<div id="main" class="site-main" role="main">
	<div id="content" class="site-content">
		<div id="primary" class="content-area">

			<section class="error-404 not-found">
				<header class="page-header">
					<h1 class="page-title"><?php _e( 'Oops! That page can&rsquo;t be found.', 'primer' ); ?></h1>
				</header><!-- .page-header -->

				<div class="page-content">
					<p><?php _e( 'Looks like the page you are looking for has been moved or does not exist. But there are still couple of things you can do. Click on the site logo to go to the homepage or try searching.', 'primer' ); ?></p>
					<p><?php get_search_form(); ?></p>
				</div><!-- .page-content -->
			</section><!-- .error-404 -->

		</div><!-- #primary -->
	</div><!-- #content -->
</div><!-- #main -->

<?php get_footer(); ?>