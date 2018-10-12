<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package uri-modern
 */

get_header();
?>

	<main id="main" class="site-main" role="main">
		
		<section class="error-404 not-found">
			<div id="rhody404"></div>
			<div class="content-404">
				<header class="page-header">
					<h1 class="page-title super"><?php esc_html_e( 'It looks like you&rsquo;ve rammed into our 404 page.', 'uri' ); ?></h1>
				</header><!-- .page-header -->

				<div class="page-content">
					<p><?php esc_html_e( 'We can&rsquo;t seem to find what you&rsquo;re looking for.', 'uri' ); ?></p>
					
					<div id="searchbox" role="search">
						<form id="sb" method="get" action="https://www.uri.edu/search" name="global_general_search_form">
							<input type="hidden" name="cx" value="016863979916529535900:17qai8akniu" />
							<input type="hidden" name="cof" value="FORID:11" />
							<input role="searchbox" name="q" id="sb-query" value="<?php print ( isset( $_GET['q'] ) ) ? htmlentities( $_GET['q'] ) : ''; ?>" type="text" placeholder="Search uri.edu" />
							<input type="submit" id="sb-submit" class="searchsubmit" name="searchsubmit" value="Search" />
						</form>
					</div>
					
				</div><!-- .page-content -->
			</div>
		</section><!-- .error-404 -->

	</main><!-- #main -->

<?php
get_footer();
