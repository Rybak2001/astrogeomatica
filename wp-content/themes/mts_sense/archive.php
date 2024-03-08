<?php
/**
 * The template for displaying archive pages.
 *
 * Used for displaying archive-type pages. These views can be further customized by
 * creating a separate template for each one.
 *
 * - author.php (Author archive)
 * - category.php (Category archive)
 * - date.php (Date archive)
 * - tag.php (Tag archive)
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
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
				<span><?php the_archive_title(); ?></span>
			</h1>
			<p><?php the_archive_description(); ?></p>
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
