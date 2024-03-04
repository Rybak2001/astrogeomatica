<?php
/**
 * The template for displaying search results pages.
 *
 * @package Ad-Sense
 */

$mts_options     = get_option( MTS_THEME_NAME );
$mts_home_layout = $mts_options['mts_home_layout'];

get_header();

switch ( $mts_home_layout ) {
	case 'full-width':
		$pclass = 'page-featuredfull';
		break;

	case 'blog-width':
		$pclass = 'page-featuredblog';
		break;

	case 'isotope-width':
		$pclass = 'page-featuredisotope';
		break;

	case 'grid-width-sidebar':
		$pclass = 'page-featuredgridsidebar';
		break;

	case 'traditional':
		$pclass = 'page-traditional';
		break;

	case 'traditional-with-full-thumb':
		$pclass = 'page-traditional-full-thumb';
		break;

	default:
		$pclass = 'page-featured-default';
		break;
}

?>

<div id="page" class="<?php echo $pclass; ?>">
	<div class="article">
		<div id="content_box">
			<h1 class="postsby">
				<span><?php _e( 'Search Results for:', 'ad-sense' ); ?></span> <?php the_search_query(); ?>
			</h1>
			<?php
			if ( 'isotope-width' == $mts_options['mts_home_layout'] ) { // phpcs:ignore
				echo '<div class="content_wrap">';
			}

			$j = 0;
			if ( have_posts() ) :
				while ( have_posts() ) :
					the_post();
					?>
					<article class="latestPost excerpt <?php echo (++$j % 3 == 0) ? 'last' : ''; ?>">
						<?php mts_archive_post(); ?>
					</article><!--.post excerpt-->
					<?php
				endwhile;
			else :
				?>
				<div class="no-results">
					<h2><?php _e( 'We apologize for any inconvenience, please hit back on your browser or use the search form below.', 'ad-sense' ); ?></h2>
					<?php get_search_form(); ?>
				</div><!--noResults-->
				<?php
			endif;

			if ( 'isotope-width' == $mts_options['mts_home_layout'] ) { // phpcs:ignore
				echo '</div>';
			}

			if ( 0 !== $j ) { // No pagination if there is no posts.
				mts_pagination();
			}
			?>
		</div>
	</div>
	<?php
	if ( $mts_home_layout != 'featured-width'  && $mts_home_layout != 'isotope-width' && $mts_home_layout != 'full-width' ) { // phpcs:ignore
		get_sidebar();
	}

	get_footer();
	?>
