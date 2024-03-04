<?php
/**
 * The main template file.
 *
 * Used to display the homepage when home.php doesn't exist.
 *
 * @package Ad-Sense
 */

$mts_options     = get_option( MTS_THEME_NAME );
$mts_home_layout = $mts_options['mts_home_layout'];

get_header();

switch ( $mts_home_layout ) {
	case 'full-width':
		$pclass = 'page-featuredfull';
		$thumb  = 'ad-sense-featuredfull';
		break;

	case 'blog-width':
		$pclass = 'page-featuredblog';
		$thumb  = 'ad-sense-traditionalfull';
		break;

	case 'isotope-width':
		$pclass = 'page-featuredisotope';
		$thumb  = 'ad-sense-featuredfull';
		break;

	case 'grid-width-sidebar':
		$pclass = 'page-featuredgridsidebar';
		$thumb  = 'ad-sense-traditionalfull';
		break;

	case 'traditional':
		$pclass = 'page-traditional';
		$thumb  = 'ad-sense-traditionalfull';
		break;

	case 'traditional-with-full-thumb':
		$pclass = 'page-traditional-full-thumb';
		$thumb  = 'ad-sense-traditionalfull';
		break;

	default:
		$pclass = 'page-featured-default';
		$thumb  = 'ad-sense-featuredfull';
		break;
}

// if ( 'full-width' == $mts_home_layout ) {
// 	$pclass	= 'page-featuredfull';
// 	$thumb 	= 'ad-sense-featuredfull';
// } elseif ( 'blog-width' == $mts_home_layout ) {
// 	$pclass	= 'page-featuredblog';
// 	$thumb 	= 'ad-sense-traditionalfull';
// } elseif ( 'isotope-width' == $mts_home_layout ) {
// 	$pclass	= 'page-featuredisotope';
// 	$thumb 	= 'ad-sense-featuredfull';
// } 

// elseif ( 'grid-width-sidebar' == $mts_home_layout ) {
// 	$pclass	= 'page-featuredgridsidebar';
// 	$thumb 	= 'ad-sense-traditionalfull';
// } 
// elseif ( 'traditional' == $mts_home_layout ) {
// 	$pclass	= 'page-traditional';
// 	$thumb 	= 'ad-sense-traditionalfull';
// } elseif ( 'traditional-with-full-thumb' == $mts_home_layout ) {
// 	$pclass	= 'page-traditional-full-thumb';
// 	$thumb 	= 'ad-sense-traditionalfull';
// } else { 
// 	$pclass = 'page-featured-default';
// 	$thumb 	= 'ad-sense-featuredfull';
// } ?>

<div id="page" class="<?php echo $pclass; ?>">
	<div class="article">
		<div id="content_box">
			<?php
			if ( ! is_paged() ) {
				if ( is_home() && '1' == $mts_options['mts_featured_slider'] ) { // phpcs:ignore
					?>
					<div class="primary-slider-container clearfix loading">
						<div id="slider" class="primary-slider">
						<?php
						if ( empty( $mts_options['mts_custom_slider'] ) ) {
							// prevent implode error.
							if ( empty( $mts_options['mts_featured_slider_cat'] ) || ! is_array( $mts_options['mts_featured_slider_cat'] ) ) {
								$mts_options['mts_featured_slider_cat'] = array('0');
							}

							$slider_cat   = implode( ',', $mts_options['mts_featured_slider_cat'] );
							$slider_query = new WP_Query( 'cat=' . $slider_cat . '&posts_per_page=' . $mts_options['mts_featured_slider_num'] );
							while ( $slider_query->have_posts() ) :
								$slider_query->the_post();
								?>
								<div class="primary-slider-item"> 
									<a href="<?php echo esc_url( get_the_permalink() ); ?>">
										<?php
										$attr = array(
											'title'   => esc_attr( get_the_title() ),
											'alt'     => esc_attr( get_the_title() ),
											'loading' => 'lazy'
										);
										the_post_thumbnail( $thumb, $attr );
										?>
										<div class="slide-caption">
											<h2 class="slide-title"><?php the_title(); ?></h2>
										</div>
									</a> 
								</div>
								<?php
							endwhile;
							wp_reset_postdata();
						} else {
							foreach ( $mts_options['mts_custom_slider'] as $slide ) :
								?>
								<div class="primary-slider-item">
									<a href="<?php echo esc_url( $slide['mts_custom_slider_link'] ); ?>">
										<?php echo wp_get_attachment_image( $slide['mts_custom_slider_image'], $thumb, false, array('title' => '') ); ?>
										<div class="slide-caption">
											<h2 class="slide-title"><?php echo esc_html( $slide['mts_custom_slider_title'] ); ?></h2>
										</div>
									</a>
								</div>
								<?php
							endforeach;
						}
						?>
						</div><!-- .primary-slider -->
					</div><!-- .primary-slider-container -->
					<?php
				}

				$featured_categories = array();
				if ( ! empty( $mts_options['mts_featured_categories'] ) ) {
					foreach ( $mts_options['mts_featured_categories'] as $section ) {
						$category_id           = $section['mts_featured_category'];
						$featured_categories[] = $category_id;
						$posts_num             = $section['mts_featured_category_postsnum'];
						if ( 'latest' == $category_id ) {
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
									</article>
									<?php
								endwhile;
							endif;
							if ( 'isotope-width' == $mts_options['mts_home_layout'] ) { // phpcs:ignore
								echo '</div>';
							}

							if ( 0 !== $j ) { // No pagination if there is no posts.
								mts_pagination();
							}
						} else { // if $category_id != 'latest':
							?>
							<div class="latestPost-category-options">
								<h3 class="featured-category-title"><a href="<?php echo esc_url( get_category_link( $category_id ) ); ?>" title="<?php echo esc_attr( get_cat_name( $category_id ) ); ?>"><?php echo esc_html( get_cat_name( $category_id ) ); ?></a></h3>
								<?php
								if ( 'isotope-width' == $mts_options['mts_home_layout'] ) { // phpcs:ignore
									echo '<div class="content_wrap">';
								}

								$j = 0;

								$cat_query = new WP_Query( 'cat=' . $category_id . '&posts_per_page=' . $posts_num );
								if ( $cat_query->have_posts() ) :
									while ( $cat_query->have_posts() ) :
										$cat_query->the_post();
										?>
										<article class="latestPost excerpt <?php echo (++$j % 3 == 0) ? 'last' : ''; ?>">
											<?php mts_archive_post(); ?>
										</article>
										<?php
									endwhile;
								endif;

								if ( 'isotope-width' == $mts_options['mts_home_layout'] ) { // phpcs:ignore
									echo '</div>';
								}
								?>
							</div>
							<?php
							wp_reset_postdata();
						}
					}
				}
			} else { // Paged.
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
						</article>
						<?php
					endwhile;
				endif;

				if ( 'isotope-width' == $mts_options['mts_home_layout'] ) { // phpcs:ignore
					echo '</div>';
				}

				if ( 0 !== $j ) { // No pagination if there is no posts.
					mts_pagination();
				}
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
