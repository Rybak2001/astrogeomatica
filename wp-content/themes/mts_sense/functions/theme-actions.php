<?php
$mts_options = get_option(MTS_THEME_NAME);
if ( ! function_exists( 'mts_meta' ) ) {
	/**
	 * Display necessary tags in the <head> section.
	 */
	function mts_meta(){
		global $mts_options, $post;
		?>

		<?php if ( !empty( $mts_options['mts_favicon'] ) ) { ?>
			<link rel="icon" href="<?php echo esc_url( $mts_options['mts_favicon'] ); ?>" type="image/x-icon" />
		<?php } elseif ( function_exists( 'has_site_icon' ) && has_site_icon() ) { ?>
			<?php printf( '<link rel="icon" href="%s" sizes="32x32" />', esc_url( get_site_icon_url( 32 ) ) ); ?>
			<?php sprintf( '<link rel="icon" href="%s" sizes="192x192" />', esc_url( get_site_icon_url( 192 ) ) ); ?>
		<?php } ?>

		<?php if ( !empty( $mts_options['mts_metro_icon'] ) ) { ?>
			<!-- IE10 Tile.-->
			<meta name="msapplication-TileColor" content="#FFFFFF">
			<meta name="msapplication-TileImage" content="<?php echo esc_url( $mts_options['mts_metro_icon'] ); ?>">
		<?php } elseif ( function_exists( 'has_site_icon' ) && has_site_icon( ) ) { ?>
			<?php printf( '<meta name="msapplication-TileImage" content="%s">', esc_url( get_site_icon_url( 270 ) ) ); ?>
		<?php } ?>

		<?php if ( !empty( $mts_options['mts_touch_icon'] ) ) { ?>
			<!--iOS/android/handheld specific -->
			<link rel="apple-touch-icon-precomposed" href="<?php echo esc_url( $mts_options['mts_touch_icon'] ); ?>" />
		<?php } elseif ( function_exists( 'has_site_icon' ) && has_site_icon() ) { ?>
			<?php printf( '<link rel="apple-touch-icon-precomposed" href="%s">', esc_url( get_site_icon_url( 180 ) ) ); ?>
		<?php } ?>

		<?php if ( ! empty( $mts_options['mts_responsive'] ) ) { ?>
			<meta name="viewport" content="width=device-width, initial-scale=1">
			<meta name="apple-mobile-web-app-capable" content="yes">
			<meta name="apple-mobile-web-app-status-bar-style" content="black">
		<?php } ?>

		<?php if($mts_options['mts_prefetching'] == '1') { ?>
			<?php if (is_front_page()) { ?>
				<?php $my_query = new WP_Query('posts_per_page=1'); while ($my_query->have_posts()) : $my_query->the_post(); ?>
				<link rel="prefetch" href="<?php the_permalink(); ?>">
				<link rel="prerender" href="<?php the_permalink(); ?>">
				<?php endwhile; wp_reset_postdata(); ?>
			<?php } elseif (is_singular()) { ?>
				<link rel="prefetch" href="<?php echo esc_url( home_url() ); ?>">
				<link rel="prerender" href="<?php echo esc_url( home_url() ); ?>">
			<?php } ?>
		<?php } ?>
<?php
	}
}

if ( ! function_exists( 'mts_head' ) ){
	/**
	 * Display header code from Theme Options.
	 */
	function mts_head() {
	global $mts_options;

	echo $mts_options['mts_header_code'];
	}
}
add_action('wp_head', 'mts_head');

if ( ! function_exists( 'mts_copyrights_credit' ) ) {
	/**
	 * Display the footer copyright.
	 */
	function mts_copyrights_credit() {
	global $mts_options;
?>
<!--start copyrights-->
<div class="row" id="copyright-note">
	<?php $copyright_text = 'Copyright &copy; ' . date("Y") . '  <a href=" ' . esc_url( trailingslashit( home_url() ) ). '" title=" ' . get_bloginfo('description') . '">' . get_bloginfo('name') . '</a>'; ?>
	<span><?php echo apply_filters( 'mts_copyright_content', $copyright_text ); ?></span>
	<div class="to-top"><?php echo $mts_options['mts_copyrights']; ?></div>
</div>
<!--end copyrights-->
<?php }
}

if ( ! function_exists( 'mts_footer' ) ) {
	/**
	 * Display the analytics code in the footer.
	 */
	function mts_footer() {
	global $mts_options;

	if ($mts_options['mts_analytics_code'] != '') { ?>
	<!--start footer code-->
		<?php echo $mts_options['mts_analytics_code']; ?>
	<!--end footer code-->
	<?php }
	}
}

// Last item in the breadcrumbs
if ( ! function_exists( 'get_itemprop_3' ) ) {
	function get_itemprop_3( $title = '', $position = '2' ) {
		echo '<div itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">';
		echo '<span itemprop="name">' . $title . '</span>';
		echo '<meta itemprop="position" content="' . $position . '" />';
		echo '</div>';
	}
}
if ( ! function_exists( 'mts_the_breadcrumb' ) ) {
	/**
	 * Display the breadcrumbs.
	 */
	function mts_the_breadcrumb() {
		if ( is_front_page() ) {
				return;
		}
		if ( function_exists( 'rank_math_the_breadcrumbs' ) && RankMath\Helper::get_settings( 'general.breadcrumbs' ) ) {
			rank_math_the_breadcrumbs();
			return;
		}
		$seperator = '<div><i class="fa fa-caret-right"></i></div>';
		echo '<div class="breadcrumb" itemscope itemtype="https://schema.org/BreadcrumbList">';
		echo '<div itemprop="itemListElement" itemscope
	      itemtype="https://schema.org/ListItem" class="root"><a href="';
		echo esc_url( home_url() );
		echo '" itemprop="item"><span itemprop="name">' . esc_html__( 'Home', 'ad-sense' );
		echo '</span><meta itemprop="position" content="1" /></a></div>' . $seperator;
		if ( is_single() ) {
			$categories = get_the_category();
			if ( $categories ) {
				$level         = 0;
				$hierarchy_arr = array();
				foreach ( $categories as $cat ) {
					$anc       = get_ancestors( $cat->term_id, 'category' );
					$count_anc = count( $anc );
					if ( 0 < $count_anc && $level < $count_anc ) {
						$level         = $count_anc;
						$hierarchy_arr = array_reverse( $anc );
						array_push( $hierarchy_arr, $cat->term_id );
					}
				}
				if ( empty( $hierarchy_arr ) ) {
					$category = $categories[0];
					echo '<div itemprop="itemListElement" itemscope
				      itemtype="https://schema.org/ListItem"><a href="' . esc_url( get_category_link( $category->term_id ) ) . '" itemprop="item"><span itemprop="name">' . esc_html( $category->name ) . '</span><meta itemprop="position" content="2" /></a></div>' . $seperator;
				} else {
					foreach ( $hierarchy_arr as $cat_id ) {
						$category = get_term_by( 'id', $cat_id, 'category' );
						echo '<div itemprop="itemListElement" itemscope
					      itemtype="https://schema.org/ListItem"><a href="' . esc_url( get_category_link( $category->term_id ) ) . '" itemprop="item"><span itemprop="name">' . esc_html( $category->name ) . '</span><meta itemprop="position" content="2" /></a></div>' . $seperator;
					}
				}
				get_itemprop_3( get_the_title(), '3' );
			} else {
				get_itemprop_3( get_the_title() );
			}
		} elseif ( is_page() ) {
			$parent_id = wp_get_post_parent_id( get_the_ID() );
			if ( $parent_id ) {
				$breadcrumbs = array();
				while ( $parent_id ) {
					$page          = get_page( $parent_id );
					$breadcrumbs[] = '<div itemprop="itemListElement" itemscope
				      itemtype="https://schema.org/ListItem"><a href="' . esc_url( get_permalink( $page->ID ) ) . '" itemprop="item"><span itemprop="name">' . esc_html( get_the_title( $page->ID ) ) . '</span><meta itemprop="position" content="2" /></a></div>' . $seperator;
					$parent_id = $page->post_parent;
				}
				$breadcrumbs = array_reverse( $breadcrumbs );
				foreach ( $breadcrumbs as $crumb ) { echo $crumb; }
				get_itemprop_3( get_the_title(), 3 );
			} else {
				get_itemprop_3( get_the_title() );
			}
		} elseif ( is_category() ) {
			global $wp_query;
			$cat_obj       = $wp_query->get_queried_object();
			$this_cat_id   = $cat_obj->term_id;
			$hierarchy_arr = get_ancestors( $this_cat_id, 'category' );
			if ( $hierarchy_arr ) {
				$hierarchy_arr = array_reverse( $hierarchy_arr );
				foreach ( $hierarchy_arr as $cat_id ) {
					$category = get_term_by( 'id', $cat_id, 'category' );
					echo '<div itemprop="itemListElement" itemscope
				      itemtype="https://schema.org/ListItem"><a href="' . esc_url( get_category_link( $category->term_id ) ) . '" itemprop="item"><span itemprop="name">' . esc_html( $category->name ) . '</span><meta itemprop="position" content="2" /></a></div>' . $seperator;
				}
			}
			get_itemprop_3( single_cat_title( '', false ) );
		} elseif ( is_author() ) {
			if ( get_query_var( 'author_name' ) ) :
				$curauth = get_user_by( 'slug', get_query_var( 'author_name' ) );
			else :
				$curauth = get_userdata( get_query_var( 'author' ) );
			endif;
			get_itemprop_3( esc_html( $curauth->nickname ) );
		} elseif ( is_search() ) {
			get_itemprop_3( get_search_query() );
		} elseif ( is_tag() ) {
			get_itemprop_3( single_tag_title( '', false ) );
		}
		echo '</div>';
	}
}

/**
 * Display schema-compliant the_category()
 *
 * @param string $separator
 */
if( ! class_exists( 'mts_the_category' ) ) {
	function mts_the_category( $separator = ', ' ) {
		$categories = get_the_category();
		$count = count($categories);
		foreach ( $categories as $i => $category ) {
			echo '<a href="' . esc_url( get_category_link( $category->term_id ) ) . '" title="' . sprintf( __( "View all posts in %s", 'ad-sense' ), esc_attr( $category->name ) ) . '">' . esc_html( $category->name ).'</a>';
			if ( $i < $count - 1 )
				echo $separator;
		}
	}
}

/**
 * Display schema-compliant the_tags()
 *
 * @param string $before
 * @param string $sep
 * @param string $after
 */
if( ! class_exists( 'mts_the_tags' ) ) {
	function mts_the_tags($before = '', $sep = ' ', $after = '</div>') {
		if ( empty( $before ) ) {
			$before = '<div class="tags border-bottom">'.__('Tags: ', 'ad-sense' );
		}

		$tags = get_the_tags();
		if (empty( $tags ) || is_wp_error( $tags ) ) {
			return;
		}
		$tag_links = array();
		foreach ($tags as $tag) {
			$link = get_tag_link($tag->term_id);
			$tag_links[] = '<a href="' . esc_url( $link ) . '" rel="tag">' . $tag->name . '</a>';
		}
		echo $before.join($sep, $tag_links).$after;
	}
}

if (!function_exists('mts_pagination')) {
	/**
	 * Display the pagination.
	 *
	 * @param string $pages
	 * @param int $range
	 */
	function mts_pagination($pages = '', $range = 3) {
		$mts_options = get_option(MTS_THEME_NAME);
		if (isset($mts_options['mts_pagenavigation_type']) && $mts_options['mts_pagenavigation_type'] == '1' ) { // numeric pagination
			the_posts_pagination( array(
				'mid_size' => 3,
				'prev_text' => '<i class="fa fa-angle-left"></i> '. __( 'Prev', 'ad-sense' ),
				'next_text' => __( 'Next', 'ad-sense' ).' <i class="fa fa-angle-right"></i>',
			) );
		} else { // traditional or ajax pagination
			?>
			<div class="pagination pagination-previous-next">
				<ul>
					<li class="nav-previous"><?php next_posts_link( '<i class="fa fa-angle-left"></i> '. __( 'Prev', 'ad-sense' ) ); ?></li>
					<li class="nav-next"><?php previous_posts_link( __( 'Next', 'ad-sense' ).' <i class="fa fa-angle-right"></i>' ); ?></li>
				</ul>
			</div>
			<?php
		}
	}
}

if ( ! function_exists( 'mts_related_posts' ) ) {
	/**
	 * Display the related posts.
	 */
	function mts_related_posts() {
		$post_id        = get_the_ID();
		$mts_options    = get_option( MTS_THEME_NAME );
		$empty_taxonomy = false;
		if ( empty( $mts_options['mts_related_posts_taxonomy'] ) || $mts_options['mts_related_posts_taxonomy'] == 'tags' ) {
			// related posts based on tags.
			$tags = get_the_tags( $post_id );
			if ( empty( $tags ) ) {
				$empty_taxonomy = true;
			} else {
				$tag_ids = array();
				foreach ( $tags as $individual_tag ) {
					$tag_ids[] = $individual_tag->term_id;
				}
				$args = array( 
					'tag__in'             => $tag_ids,
					'post__not_in'        => array( $post_id ),
					'posts_per_page'      => isset( $mts_options['mts_related_postsnum'] ) ? $mts_options['mts_related_postsnum'] : 3,
					'ignore_sticky_posts' => 1,
					'orderby'             => 'rand'
				);
			}
		} else {
			// related posts based on categories.
			$categories = get_the_category( $post_id );
			if ( empty( $categories ) ) {
				$empty_taxonomy = true;
			} else {
				$category_ids = array();
				foreach ( $categories as $individual_category ) {
					$category_ids[] = $individual_category->term_id;
					$args           = array(
						'category__in'        => $category_ids,
						'post__not_in'        => array( $post_id ),
						'posts_per_page'      => $mts_options['mts_related_postsnum'],
						'ignore_sticky_posts' => 1,
						'orderby'             => 'rand'
					);
				}
			}
		}
		if ( ! $empty_taxonomy ) {
			$my_query = new WP_Query(
				apply_filters(
					'mts_related_posts_query_args',
					$args,
					$mts_options['mts_related_posts_taxonomy']
				)
			);
			if ( $my_query->have_posts() ) {
				echo '<div class="related-posts">';
				echo '<h4>' . __( 'Related Articles', 'ad-sense' ) . '</h4>';
				echo '<div class="clear">';
				$posts_per_row = 2;

				$j = 0;
				while ( $my_query->have_posts() ) {
					$my_query->the_post();
					?>
					<article class="latestPost excerpt  <?php echo (++$j % $posts_per_row == 0) ? 'last' : ''; ?>">
						<a href="<?php echo esc_url( get_the_permalink() ); ?>" title="<?php echo esc_attr( get_the_title() ); ?>" class="post-image post-image-left">
							<?php
							$post_format = get_post_format();
							$icon_class  = 'thumb-tack';
							switch ( $post_format ) {
								case '':
									$icon_class = 'thumb-tack';
									break;

								case 'gallery':
									$icon_class = 'picture-o';
									break;

								case 'audio':
									$icon_class = 'music';
									break;

								case 'video':
									$icon_class = 'video-camera';
									break;

								default :
									$icon_class = 'picture-o';
									break;
							}

							if ( ! empty( $icon_class ) && ( $mts_options['mts_post_format_icons'] == '1' ) ) {
								echo '<div class="post-format-icons"><i class="fa fa-' . $icon_class . '"></i></div>';
							}

							$thecontent = get_the_content();

							empty( $thecontent ) ? $dc = 'feat-thumb' : $dc = '';

							$attr = array(
								'title'   => esc_attr( get_the_title() ),
								'alt'     => esc_attr( get_the_title() ),
								'loading' => 'lazy'
							);

							echo '<div class="featured-thumbnail ' . $dc . '">';
							the_post_thumbnail( 'ad-sense-featured', $attr );
							if ( '1' == $mts_options['mts_hover_effect'] ) { // phpcs:ignore
								?>
								<div class="front-view-content"><?php echo mts_excerpt(10); ?></div>
								<style>
									.featured-thumbnail:hover img {
										-webkit-transform: translate3d(0,-80px,0);
										transform: translate3d(0,-80px,0);
									}
								</style>
								<?php
							}
							echo '</div>';
							if ( function_exists( 'wp_review_show_total' ) ) wp_review_show_total( true, 'latestPost-review-wrapper' );
							?>
						</a>
						<header>
							<?php
							if ( '1' == $mts_options['mts_show_post_info_small'] ) { // phpcs:ignore
								?>
								<div class="post-info <?php echo ( $mts_options['mts_show_post_info_small'] == '1' ) ? 'default-post-info' : ''; ?>">
									<?php mts_the_postinfo(); ?>
								</div>
								<?php
							}
							?>
							<h2 class="title front-view-title"><a href="<?php echo esc_url( get_the_permalink() ); ?>" title="<?php echo esc_attr( get_the_title() ); ?>"><?php the_title(); ?></a></h2>
						</header>
					</article><!--.post.excerpt-->
					<?php
				}
				echo '</div></div>';
			}
		}
		wp_reset_postdata();
	}
}

/*------------[ Post Meta Info ]-------------*/
if ( ! function_exists( 'mts_the_postinfo' ) ) {
	/**
	 * Display the post info block.
	 *
	 * @param string $section
	 */
	function mts_the_postinfo( $section = 'home' ) {
		$mts_options = get_option( MTS_THEME_NAME );
		$opt_key     = 'mts_' . $section . '_headline_meta_info';

		if ( isset( $mts_options[ $opt_key ] ) && is_array( $mts_options[ $opt_key ] ) && array_key_exists( 'enabled', $mts_options[ $opt_key ] ) ) {
			$headline_meta_info = $mts_options[ $opt_key ]['enabled'];
		} else {
			$headline_meta_info = array();
		}
		if ( ! empty( $headline_meta_info ) ) {
			?>
			<div class="post-info">
				<?php
				foreach ( $headline_meta_info as $key => $meta ) { 
					mts_the_postinfo_item( $key );
				}
				?>
			</div>
		<?php }
	}
}
if ( ! function_exists( 'mts_the_postinfo_item' ) ) {
	/**
	 * Display information of an item.
	 * @param $item meta items.
	 */
	function mts_the_postinfo_item( $item ) {
		$mts_options = get_option( MTS_THEME_NAME );
		switch ( $item ) {
			case 'author':
				?>
				<span class="theauthor"><i class="fa fa-user"></i> <span><?php the_author_posts_link(); ?></span></span>
				<?php
				break;
			case 'date':
				?>
				<span class="thetime date updated"><span><?php the_time( get_option( 'date_format' ) ); ?></span></span>
				<?php
				break;
			case 'category':
				?>
				<span class="thecategory"><?php mts_the_category( ', ' ); ?></span>
				<?php
				break;
			case 'comment':
				if ( 'full-width' != $mts_options['mts_home_layout'] && ! is_home() ) { // phpcs:ignore
					?>
					<span class="thecomment"><a href="<?php echo esc_url( get_comments_link() ); ?>"><?php comments_number(); ?></a></span>
					<?php
				}
				break;
		}
	}
}

if ( ! function_exists( 'mts_social_buttons' ) ) {
	/**
	 * Display the social sharing buttons.
	 */
	function mts_social_buttons() {
		$mts_options = get_option( MTS_THEME_NAME );
		$buttons     = array();

		if ( isset( $mts_options['mts_social_buttons'] ) && is_array( $mts_options['mts_social_buttons'] ) && array_key_exists( 'enabled', $mts_options['mts_social_buttons'] ) ) {
			$buttons = $mts_options['mts_social_buttons']['enabled'];
		}

		if ( ! empty( $buttons ) && isset( $mts_options['mts_social_button_layout'] ) ) {
			if ( 'traditional' == $mts_options['mts_social_button_layout'] ) { // phpcs:ignore
				?>
				<div class="shareit share-traditional <?php echo $mts_options['mts_social_button_position']; ?>">
					<?php
					foreach ( $buttons as $key => $button ) {
						mts_traditional_social_button( $key );
					}
					?>
				</div>
				<?php
			} else {
				?>
				<div class="shareit share-modern <?php echo $mts_options['mts_social_button_position']; ?>">
					<?php
					foreach ( $buttons as $key => $button ) {
						mts_social_button( $key );
					}
					?>
				</div>
				<?php
			}
		}
	}
}

if ( ! function_exists( 'mts_social_button' ) ) {
	/**
	 * Social Share Buttons
	 * @param $button social buttons.
	 */
	function mts_social_button( $button ) {
		$mts_options = get_option( MTS_THEME_NAME );
		$text        = esc_html( get_the_title() );
		$link        = urlencode( get_permalink() );
		global $post;
		if ( is_single() ) {
			$imgUrl = $img = '';
			if ( has_post_thumbnail( $post->ID ) ) {
				$img    = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'ad-sense-featured' );
				$imgUrl = $img[0];
			}
		}
		switch ( $button ) {
			case 'facebookshare':
				?>
				<!-- Facebook -->
				<div class="share-item facebooksharebtn">
					<a href="//m.facebook.com/sharer.php?m2w&s=100&u=<?php echo urlencode( get_permalink() ); ?>&p[images][0]=<?php echo $imgUrl; ?>&t=<?php echo get_the_title(); ?>" class="single-social"><div class="social-btn"><?php _e( 'Share', 'ad-sense' ); ?></div><div class="social-icn"><i class="fa fa-facebook"></i></div></a>
				</div>
				<?php
				break;
			case 'twitter':
				?>
				<!-- Twitter -->
				<div class="share-item twitterbtn">
					<?php
					$via = '';
					if ( $mts_options['mts_twitter_username'] ) {
						$via = '&via=' . $mts_options['mts_twitter_username'];
					}
					?>
					<a href="https://twitter.com/intent/tweet?original_referer=<?php echo urlencode( get_permalink() ); ?>&text=<?php echo get_the_title(); ?>&url=<?php echo urlencode( get_permalink() ); ?><?php echo $via; ?>" class="single-social"><div class="social-btn"><?php _e( 'Tweet', 'ad-sense' ); ?></div><div class="social-icn"><i class="fa fa-twitter"></i></div></a>
				</div>
				<?php
				break;
			case 'pinterest':
				global $post;
				?>
				<!-- Pinterest -->
				<div class="share-item pinbtn">
					<a data-pin-do="none" href="//pinterest.com/pin/create/button/?url=<?php echo urlencode( get_permalink() ); ?> + '&media=<?php echo $imgUrl; ?>&description=<?php the_title(); ?>" class="single-social"><div class="social-btn"><?php _e( 'Pinterest', 'ad-sense' ); ?></div><div class="social-icn"><i class="fa fa-pinterest-p"></i></div></a>
				</div>
				<?php
				break;
			case 'linkedin':
				?>
				<!--Linkedin -->
				<div class="share-item linkedinbtn">
					<a href="//www.linkedin.com/shareArticle?mini=true&url=<?php echo urlencode( get_permalink() ); ?>&title=<?php echo get_the_title(); ?>&source=<?php echo 'url'; ?>" class="single-social"><div class="social-btn"><?php _e( 'Linkedin', 'ad-sense' ); ?></div><div class="social-icn"><i class="fa fa-linkedin"></i></div></a>
				</div>
				<?php
				break;
			case 'email':
				?>
				<!-- Email -->
				<div class="share-item emailbtn">
					<a href="mailto:?Subject=<?php the_title(); ?>&Body=I%20saw%20this%20and%20thought%20of%20you!%20 <?php echo urlencode( get_permalink() ); ?>" class="single-social"><div class="social-btn"><?php _e( 'Email', 'ad-sense' ); ?></div><div class="social-icn"><i class="fa fa-envelope"></i></div></a>
				</div>
				<?php
				break;
			case 'reddit':
				?>
				<!-- Reddit -->
				<div class="share-item reddit">
					<a href="//www.reddit.com/submit" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;" class="single-social"><div class="social-btn"><?php _e( 'Reddit', 'ad-sense' ); ?></div><div class="social-icn"><i class="fa fa-reddit-alien"></i></div></a>
				</div>
				<?php
				break;
			case 'whatsapp':
				?>
				<!-- Reddit -->
				<div class="share-item whatsapp">
					<a target="_blank" href="https://wa.me/?text=<?php echo $text . ' ' . $link; ?>" class="single-social"><div class="social-btn"><?php _e( 'Whatsapp', 'ad-sense' ); ?></div><div class="social-icn"><i class="fa fa-whatsapp"></i></div></a>
				</div>
				<?php
				break;
			case 'telegram':
				$telegram_url = 'https://t.me/share/url?url=' . $link . '&text=' . $text;
				?>
				<!-- Telegram -->
				<div class="share-item telegram">
					<a target="_blank" href="<?php echo $telegram_url; ?>" class="single-social"><div class="social-btn"><?php _e( 'Telegram', 'ad-sense' ); ?></div><div class="social-icn"><i class="fa fa-paper-plane"></i></div></a>
				</div>
				<?php
				break;
			case 'tumblr':
				?>
				<!-- Reddit -->
				<div class="share-item tumblr">
					<a target="_blank" href="https://www.tumblr.com/widgets/share/tool?canonicalUrl=<?php echo $link; ?>&title=<?php echo $text; ?>" class="single-social"><div class="social-btn"><?php _e( 'Tumblr', 'ad-sense' ); ?></div><div class="social-icn"><i class="fa fa-tumblr"></i></div></a>
				</div>
				<?php
				break;
			case 'pocket':
				?>
				<!-- Reddit -->
				<div class="share-item pocket">
					<a target="_blank" href="https://getpocket.com/save?url=<?php echo $link; ?>&title=<?php echo $text; ?>" class="single-social"><div class="social-btn"><?php _e( 'Pocket', 'ad-sense' ); ?></div><div class="social-icn"><i class="fa fa-get-pocket"></i></div></a>
				</div>
				<?php
				break;
			case 'buffer':
				?>
				<!-- Buffer -->
				<div class="share-item buffer">
					<a target="_blank" href="https://bufferapp.com/add?url=<?php echo $link; ?>&amp;text=<?php echo $text; ?>" class="single-social"><div class="social-btn"><?php _e( 'Buffer', 'ad-sense' ); ?></div><div class="social-icn"><svg height="20px" id="Layer_1" style="enable-background:new 0 0 512 512;" version="1.1" viewBox="0 0 512 512" width="20px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g><g><path d="M70.7,164.5l169.2,81.7c4.4,2.1,10.3,3.2,16.1,3.2s11.7-1.1,16.1-3.2l169.2-81.7c8.9-4.3,8.9-11.3,0-15.6L272.1,67.2    c-4.4-2.1-10.3-3.2-16.1-3.2s-11.7,1.1-16.1,3.2L70.7,148.9C61.8,153.2,61.8,160.2,70.7,164.5z"/><path d="M441.3,248.2c0,0-30.9-14.9-35-16.9s-5.2-1.9-9.5,0.1s-124.8,60.2-124.8,60.2c-4.5,2.1-10.3,3.2-16.1,3.2    s-11.7-1.1-16.1-3.2c0,0-117.3-56.6-122.8-59.3c-6-2.9-7.7-2.9-13.1-0.3c-5.6,2.7-33.4,16.1-33.4,16.1c-8.9,4.3-8.9,11.3,0,15.6    l169.2,81.7c4.4,2.1,10.3,3.2,16.1,3.2s11.7-1.1,16.1-3.2l169.2-81.7C450.2,259.5,450.2,252.5,441.3,248.2z"/></g><path d="M441.3,347.5c0,0-30.9-14.9-35-16.9s-5.2-1.9-9.5,0.1S272.1,391,272.1,391c-4.5,2.1-10.3,3.2-16.1,3.2s-11.7-1.1-16.1-3.2   c0,0-117.3-56.6-122.8-59.3c-6-2.9-7.7-2.9-13.1-0.3c-5.6,2.7-33.4,16.1-33.4,16.1c-8.9,4.3-8.9,11.3,0,15.6l169.2,81.7   c4.4,2.2,10.3,3.2,16.1,3.2s11.7-1.1,16.1-3.2l169.2-81.7C450.2,358.8,450.2,351.8,441.3,347.5z"/></g></svg></div></a>
				</div>
				<?php
				break;
			case 'vkontakte':
				?>
				<!-- Vkontakte -->
				<div class="share-item vkontakte">
					<a target="_blank" href="http://vk.com/share.php?url=<?php echo $link; ?>&title=<?php echo $text; ?>" class="single-social"><div class="social-btn"><?php _e( 'Vkontakte', 'ad-sense' ); ?></div><div class="social-icn"><i class="fa fa-vk"></i></div></a>
				</div>
				<?php
				break;
			case 'stumble':
				?>
				<!-- Mix -->
				<div class="share-item stumble">
					<a target="_blank" href="https://mix.com/add?url=<?php echo $link; ?>" class="single-social"><div class="social-btn"><?php _e( 'Stumble', 'ad-sense' ); ?></div><div class="social-icn"><svg height="30px" style="enable-background:new 0 0 512 512;" version="1.1" viewBox="0 0 512 512" width="20px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g id="comp_x5F_217-mix"><g><path d="M26.001,54.871v358.246c0,57.705,90.357,59.656,90.357,0V168.124c8.11-54.316,90.357-51.749,90.357,6.675v179.994    c0,59.453,98.57,59.556,98.57,0V235.584c5.44-56.166,90.357-53.906,90.357,4.415v24.44c0,61.503,90.355,58.114,90.355,0V54.871    H26.001z"/></g></g><g id="Layer_1"/></svg></div></a>
				</div>
				<?php
				break;
		}
	}
}

if ( ! function_exists( 'mts_traditional_social_button' ) ) {
	/**
	 * Display network-independent sharing buttons.
	 *
	 * @param $button social buttons.
	 */
	function mts_traditional_social_button( $button ) {
		$mts_options = get_option( MTS_THEME_NAME );

		$text = esc_html( get_the_title() );
		$link = rawurlencode( get_permalink() );

		switch ( $button ) {
			case 'facebookshare':
				?>
				<!-- Facebook Share-->
				<span class="share-item facebooksharebtn">
					<div class="fb-share-button" data-layout="button_count"></div>
				</span>
				<?php
				break;
			case 'twitter':
				?>
				<!-- Twitter -->
				<span class="share-item twitterbtn">
					<a href="https://twitter.com/share" class="twitter-share-button" data-via="<?php echo esc_attr( $mts_options['mts_twitter_username'] ); ?>"><?php esc_html_e( 'Tweet', 'ad-sense' ); ?></a>
				</span>
				<?php
				break;
			case 'facebook':
				?>
				<!-- Facebook -->
				<span class="share-item facebookbtn">
					<div id="fb-root"></div>
					<div class="fb-like" data-send="false" data-layout="button_count" data-width="150" data-show-faces="false"></div>
				</span>
				<?php
				break;
			case 'pinterest':
				?>
				<!-- Pinterest -->
				<span class="share-item pinbtn">
					<a href="http://pinterest.com/pin/create/button/?url=<?php the_permalink(); ?>&media=<?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID()), 'large' ); echo $thumb['0']; ?>&description=<?php the_title(); ?>" class="pin-it-button" count-layout="horizontal"><?php esc_html_e( 'Pin It', 'ad-sense' ); ?></a>
				</span>
				<?php
				break;
			case 'linkedin':
				?>
				<!--Linkedin -->
				<span class="share-item linkedinbtn">
					<script type="IN/Share" data-url="<?php echo esc_url( get_the_permalink() ); ?>"></script>
				</span>
				<?php
				break;
			case 'reddit':
				?>
				<!-- Reddit -->
				<span class="share-item reddit">
					<a href="//www.reddit.com/submit" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;"> <img src="<?php echo get_template_directory_uri().'/images/reddit.png' ?>" alt=<?php _e( 'submit to reddit', 'ad-sense' ); ?> border="0" /></a>
				</span>
				<?php
				break;
			case 'whatsapp':
				?>
				<!--WhatsApp -->
				<span class="share-item whatsapp">
					<a href="https://wa.me/?text=<?php echo $text . ' ' . $link; ?>" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;"><span class="icon"><i class="fa fa-whatsapp"></i></span><span class="social-text"><?php _e( 'WhatsApp', 'ad-sense' ); ?></span></a>
				</span>
				<?php
				break;
			case 'telegram':
				$telegram_url = 'https://t.me/share/url?url=' . $link . '&text=' . $text;
				?>
				<!-- Telegram -->
				<span class="share-item telegram">
					<a target="_blank" href="<?php echo $telegram_url; ?>"><span class="icon"><i class="fa fa-paper-plane"></i></span><span class="social-text"><?php _e( 'Telegram', 'ad-sense' ); ?></span></a>
				</span>
				<?php
				break;

			case 'tumblr':
				?>
				<!-- Tumblr -->
				<span class="share-item tumblr">
					<a target="_blank" href="https://www.tumblr.com/widgets/share/tool?canonicalUrl=<?php echo $link; ?>&title=<?php echo $text; ?>"><span class="icon"><i class="fa fa-tumblr"></i></span><span class="social-text"><?php _e( 'Tumblr', 'ad-sense' ); ?></span></a>
				</span>
				<?php
				break;
			case 'pocket':
				?>
				<!-- Pocket -->
				<span class="share-item pocket">
					<a target="_blank" href="https://getpocket.com/save?url=<?php echo $link; ?>&title=<?php echo $text; ?>"><span class="icon"><i class="fa fa-get-pocket"></i></span><span class="social-text"><?php _e( 'Pocket', 'ad-sense' ); ?></span></a>
				</span>
				<?php
				break;
			case 'email':
				?>
				<!-- Pocket -->
				<span class="share-item email">
					<a target="_blank" href="mailto:?Subject=<?php the_title(); ?>&Body=I%20saw%20this%20and%20thought%20of%20you!%20 <?php echo urlencode( get_permalink() ); ?>"><span class="icon"><i class="fa fa-envelope"></i></span><span class="social-text"><?php _e( 'Email', 'ad-sense' ); ?></span></a>
				</span>
				<?php
				break;
			case 'buffer':
				?>
				<!-- Buffer -->
				<span class="share-item buffer">
					<a target="_blank" href="https://bufferapp.com/add?url=<?php echo $link; ?>&amp;text=<?php echo $text; ?>"><span class="icon"><svg height="18px" id="Layer_1" style="enable-background:new 0 0 512 512;" version="1.1" viewBox="0 0 512 512" width="18px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g><g><path d="M70.7,164.5l169.2,81.7c4.4,2.1,10.3,3.2,16.1,3.2s11.7-1.1,16.1-3.2l169.2-81.7c8.9-4.3,8.9-11.3,0-15.6L272.1,67.2    c-4.4-2.1-10.3-3.2-16.1-3.2s-11.7,1.1-16.1,3.2L70.7,148.9C61.8,153.2,61.8,160.2,70.7,164.5z"/><path d="M441.3,248.2c0,0-30.9-14.9-35-16.9s-5.2-1.9-9.5,0.1s-124.8,60.2-124.8,60.2c-4.5,2.1-10.3,3.2-16.1,3.2    s-11.7-1.1-16.1-3.2c0,0-117.3-56.6-122.8-59.3c-6-2.9-7.7-2.9-13.1-0.3c-5.6,2.7-33.4,16.1-33.4,16.1c-8.9,4.3-8.9,11.3,0,15.6    l169.2,81.7c4.4,2.1,10.3,3.2,16.1,3.2s11.7-1.1,16.1-3.2l169.2-81.7C450.2,259.5,450.2,252.5,441.3,248.2z"/></g><path d="M441.3,347.5c0,0-30.9-14.9-35-16.9s-5.2-1.9-9.5,0.1S272.1,391,272.1,391c-4.5,2.1-10.3,3.2-16.1,3.2s-11.7-1.1-16.1-3.2   c0,0-117.3-56.6-122.8-59.3c-6-2.9-7.7-2.9-13.1-0.3c-5.6,2.7-33.4,16.1-33.4,16.1c-8.9,4.3-8.9,11.3,0,15.6l169.2,81.7   c4.4,2.2,10.3,3.2,16.1,3.2s11.7-1.1,16.1-3.2l169.2-81.7C450.2,358.8,450.2,351.8,441.3,347.5z"/></g></svg></span><span class="social-text"><?php _e( 'Buffer', 'ad-sense' ); ?></span></a>
				</span>
				<?php
				break;
			case 'vkontakte':
				?>
				<!-- Vkontakte -->
				<span class="share-item vkontakte">
					<a target="_blank" href="http://vk.com/share.php?url=<?php echo $link; ?>&title=<?php echo $text; ?>"><span class="icon"><i class="fa fa-vk"></i></span><span class="social-text"><?php _e( 'VK', 'ad-sense' ); ?></span></a>
				</span>
				<?php
				break;
			case 'stumble':
				?>
				<!-- Mix -->
				<span class="share-item stumble">
					<a target="_blank" href="https://mix.com/add?url=<?php echo $link; ?>"><span class="icon"><svg height="18px" style="enable-background:new 0 0 512 512;" version="1.1" viewBox="0 0 512 512" width="18px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g id="comp_x5F_217-mix"><g><path d="M26.001,54.871v358.246c0,57.705,90.357,59.656,90.357,0V168.124c8.11-54.316,90.357-51.749,90.357,6.675v179.994    c0,59.453,98.57,59.556,98.57,0V235.584c5.44-56.166,90.357-53.906,90.357,4.415v24.44c0,61.503,90.355,58.114,90.355,0V54.871    H26.001z"/></g></g><g id="Layer_1"/></svg></span><span class="social-text"><?php _e( 'Mix', 'ad-sense' ); ?></span></a>
				</span>
				<?php
				break;
		}
	}
}

if ( ! function_exists( 'mts_article_class' ) ) {
	/**
	 * Custom `<article>` class name.
	 */
	function mts_article_class() {
		$mts_options = get_option( MTS_THEME_NAME );
		$class       = 'article';

		// sidebar or full width.
		if ( mts_custom_sidebar() == 'mts_nosidebar' ) {
			$class = 'ss-full-width';
		}

		echo $class;
	}
}

if ( ! function_exists( 'mts_single_page_class' ) ) {
	/**
	 * Custom `#page` class name.
	 */
	function mts_single_page_class() {
		$class = '';
		if ( is_single() || is_page() ) {
			$class = 'single';

			$header_animation = mts_get_post_header_effect();
			if ( ! empty( $header_animation ) ) {
				$class .= ' ' . $header_animation;
			}
		}

		echo $class;
	}
}

if ( ! function_exists( 'mts_archive_post' ) ) {
	/**
	 * Display a post of specific layout.
	 *
	 * @param string $layout
	 */
	function mts_archive_post( $layout = '' ) {

		$mts_options     = get_option( MTS_THEME_NAME );
		$mts_home_layout = $mts_options['mts_home_layout'];
		$thumb           = 'ad-sense-featured';

		switch ( $mts_home_layout ) {
			case 'full-width':
				$thumb = 'ad-sense-featuredfull';
				break;

			case 'blog-width':
				$thumb = 'ad-sense-featuredblog';
				break;

			case 'traditional':
				$thumb = 'ad-sense-traditional';
				break;

			case 'traditional-with-full-thumb':
				$thumb = 'ad-sense-traditionalfull';
				break;

			case 'featured-width':
			case 'isotope-width':
			case 'grid-width-sidebar':
				$thumb = 'ad-sense-featured';
				break;

			default:
				$thumb = 'ad-sense-featured';
				break;
		}
		?>

		<a href="<?php echo esc_url( get_the_permalink() ); ?>" title="<?php echo esc_attr( get_the_title() ); ?>" class="post-image post-image-left">
			<?php
			$post_format = get_post_format();
			$icon_class  = 'thumb-tack';
			switch ( $post_format ) {
				case '':
					$icon_class = 'thumb-tack';
					break;

				case 'gallery':
					$icon_class = 'picture-o';
					break;

				case 'audio':
					$icon_class = 'music';
					break;

				case 'video':
					$icon_class = 'video-camera';
					break;

				default :
					$icon_class = 'picture-o';
					break;			
			}

			if ( ! empty( $icon_class ) && ! empty( $mts_options['mts_post_format_icons'] ) ) {
				echo '<div class="post-format-icons"><i class="fa fa-' . $icon_class . '"></i></div>';
			}

			$thecontent = get_the_content();

			empty( $thecontent ) ? $dc = 'feat-thumb' : $dc = '';

			$attr = array(
				'title'   => esc_attr( get_the_title() ),
				'alt'     => esc_attr( get_the_title() ),
				'loading' => 'lazy'
			);

			echo '<div class="featured-thumbnail ' . $dc . '">'; 
			the_post_thumbnail( $thumb, $attr );

			if ( 'full-width' != $mts_options['mts_home_layout'] && 'traditional' != $mts_options['mts_home_layout'] && 'traditional-with-full-thumb' != $mts_options['mts_home_layout'] && '1' == $mts_options['mts_hover_effect'] ) { // phpcs:ignore
				?>
				<div class="front-view-content"><?php echo mts_excerpt(13); ?></div>
				<style>
					.featured-thumbnail:hover img {
						-webkit-transform: translate3d(0,-80px,0);
						transform: translate3d(0,-80px,0);
					}
				</style>
				<?php
			}
			echo '</div>'; ?>
			<?php if ( function_exists('wp_review_show_total') ) wp_review_show_total( true, 'latestPost-review-wrapper' ); ?>
		</a>
		<header>
			<?php
			if ( $mts_options['mts_show_post_info_small'] == '1') {
				?>
				<div class="post-info <?php echo ($mts_options['mts_show_post_info_small'] == '1') ? 'default-post-info' : ''; ?>">
					<?php mts_the_postinfo(); ?>
				</div>
				<?php
			}
			?>
			<h2 class="title front-view-title"><a href="<?php echo esc_url( get_the_permalink() ); ?>" title="<?php echo esc_attr( get_the_title() ); ?>"><?php the_title(); ?></a></h2>
			<?php
			if ( 'full-width' == $mts_options['mts_home_layout'] || 'traditional' == $mts_options['mts_home_layout'] || 'traditional-with-full-thumb' == $mts_options['mts_home_layout'] ) { // phpcs:ignore
				?>
				<div class="front-view-content">
					<?php
					if ( 'traditional' == $mts_options['mts_home_layout'] ) { // phpcs:ignore
						echo mts_excerpt(46);
					} else {
						echo mts_excerpt(60);
					}
					?>
				</div>
			<?php } ?>
		</header>
		<?php
		if ( 'full-width' == $mts_options['mts_home_layout'] || 'traditional' == $mts_options['mts_home_layout'] || 'traditional-with-full-thumb' == $mts_options['mts_home_layout'] ) { // phpcs:ignore
			?>
			<div class="latestPost-buttons">
				<?php
				mts_readmore();
				if ( '1' == $mts_options['mts_show_comment_full'] ) { // phpcs:ignore
					?>
					<div class="thecomment">
						<a href="<?php echo esc_url( get_comments_link() ); ?>"><?php comments_number(); ?></a>
					</div>
					<?php
				}
				?>
			</div>
			<?php
		}
	}
}

/*Author Social-Icons*/

if ( ! function_exists( 'add_extra_social_links' ) ) {
	/**
	 * Extra Contact fields for User Profile
	 * @param $user_contact
	 */
	function add_extra_social_links( $user_contact ) {
		$user_contact['facebook']    = __( 'Facebook URL', 'ad-sense' );
		$user_contact['twitter']     = __( 'Twitter URL', 'ad-sense' );
		$user_contact['pinterest']   = __( 'Pinterest URL', 'ad-sense' );
		$user_contact['linkedin']    = __( 'Linkedin URL', 'ad-sense' );
		$user_contact['stumbleupon'] = __( 'StumbleUpon URL', 'ad-sense' );

		return $user_contact;
	}
	add_filter( 'user_contactmethods', 'add_extra_social_links' );
}

function mts_theme_action( $action = null ) {
    update_option( 'mts__thl', '1' );
    update_option( 'mts__pl', '1' );
}

function mts_theme_activation( $oldtheme_name = null, $oldtheme = null ) {
	// Check for Connect plugin version > 1.4
	if ( class_exists('mts_connection') && defined('MTS_CONNECT_ACTIVE') && MTS_CONNECT_ACTIVE ) {
		return;
	}
		$plugin_path = 'mythemeshop-connect/mythemeshop-connect.php';

	// Check if plugin exists.
	if ( ! function_exists( 'get_plugins' ) ) {
		require_once ABSPATH . 'wp-admin/includes/plugin.php';
	}
	$plugins = get_plugins();
	if ( ! array_key_exists( $plugin_path, $plugins ) ) {
		// auto-install it
		include_once( ABSPATH . 'wp-admin/includes/misc.php' );
		include_once( ABSPATH . 'wp-admin/includes/file.php' );
		include_once( ABSPATH . 'wp-admin/includes/class-wp-upgrader.php' );
		include_once( ABSPATH . 'wp-admin/includes/plugin-install.php' );
		$skin     = new Automatic_Upgrader_Skin();
		$upgrader = new Plugin_Upgrader( $skin );
		$plugin_file = 'https://www.mythemeshop.com/mythemeshop-connect.zip';
		$result = $upgrader->install( $plugin_file );
		// If install fails then revert to previous theme
		if ( is_null( $result ) || is_wp_error( $result ) || is_wp_error( $skin->result ) ) {
			switch_theme( $oldtheme->stylesheet );
			return false;
		}
	} else {
		// Plugin is already installed, check version
		$ver = isset( $plugins[$plugin_path]['Version'] ) ? $plugins[$plugin_path]['Version'] : '1.0';
			if ( version_compare( $ver, '1.3' ) === -1 ) {
			// Update if < 1.3 (do not change this value)
			include_once( ABSPATH . 'wp-admin/includes/misc.php' );
			include_once( ABSPATH . 'wp-admin/includes/file.php' );
			include_once( ABSPATH . 'wp-admin/includes/class-wp-upgrader.php' );
			include_once( ABSPATH . 'wp-admin/includes/plugin-install.php' );
			$skin     = new Automatic_Upgrader_Skin();
			$upgrader = new Plugin_Upgrader( $skin );

			add_filter( 'pre_site_transient_update_plugins',  'mts_inject_connect_repo', 10, 2 );
			$result = $upgrader->upgrade( $plugin_path );
			remove_filter( 'pre_site_transient_update_plugins', 'mts_inject_connect_repo' );

			// If update fails then revert to previous theme
			if ( is_null( $result ) || is_wp_error( $result ) || is_wp_error( $skin->result ) ) {
				switch_theme( $oldtheme->stylesheet );
				return false;
			}
		}
	}
	$activate = activate_plugin( $plugin_path );
}

function mts_inject_connect_repo( $pre, $transient ) {
	$plugin_file = 'https://www.mythemeshop.com/mythemeshop-connect.zip';

	$return = new stdClass();
	$return->response = array();
	$return->response['mythemeshop-connect/mythemeshop-connect.php'] = new stdClass();
	$return->response['mythemeshop-connect/mythemeshop-connect.php']->package = $plugin_file;

	return $return;
}

add_action( 'wp_loaded', 'mts_maybe_set_constants' );
function mts_maybe_set_constants() {
	if ( ! defined( 'MTS_THEME_S' ) ) {
		mts_set_theme_constants();
	}
}

add_action( 'init', 'mts_nhp_sections_override', -11 );
function mts_nhp_sections_override() {
	define( 'MTS_THEME_INIT', 1 );
	if ( class_exists( 'mts_connection' ) && defined( 'MTS_CONNECT_ACTIVE' ) && MTS_CONNECT_ACTIVE ) {
		return;
	}
	if ( ! get_option( MTS_THEME_NAME, false ) ) {
		return;
	}
	add_filter( 'nhp-opts-sections', '__return_empty_array' );
	add_filter( 'nhp-opts-sections', 'mts_nhp_section_placeholder' );
	add_filter( 'nhp-opts-args', 'mts_nhp_opts_override' );
	add_filter( 'nhp-opts-extra-tabs', '__return_empty_array', 11, 1 );
}

function mts_nhp_section_placeholder( $sections ) {
	$sections[] = array(
		'icon'   => 'fa fa-cogs',
		'title'  => __( 'Not Connected', 'ad-sense' ),
		'desc'   => '<p class="description">' . __( 'You will find all the theme options here after connecting with your MyThemeShop account.', 'ad-sense' ) . '</p>',
		'fields' => array()
	);
	return $sections;
}

function mts_nhp_opts_override( $opts ) {
	$opts['show_import_export']    = false;
	$opts['show_typography']       = false;
	$opts['show_translate']        = false;
	$opts['show_child_theme_opts'] = false;
	$opts['last_tab']              = 0;
	return $opts;
}
