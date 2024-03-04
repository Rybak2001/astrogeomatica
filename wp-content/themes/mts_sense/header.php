<?php
/**
 * The template for displaying the header.
 *
 * Displays everything from the doctype declaration down to the navigation.
 *
 * @package Ad-Sense
 */

$mts_options = get_option( MTS_THEME_NAME );
?>
<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>

<head itemscope itemtype="http://schema.org/WebSite">
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame -->
	<!--[if IE ]>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<![endif]-->
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<?php mts_meta(); ?>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<?php wp_head(); ?>
</head>
<body id="blog" <?php body_class( 'main' ); ?> itemscope itemtype="http://schema.org/WebPage">
	<?php
	if ( $mts_options['mts_background_clickable'] && $mts_options['mts_background_link'] ) {
		?>
		<a href="<?php echo $mts_options['mts_background_link']; ?>" class="clickable-background" <?php if ( $mts_options['mts_background_link_new_tab'] ) echo 'target="_blank"'; ?>></a>
		<?php
	}
	?>
	<div class="main-container <?php if ( $mts_options['mts_detect_adblocker'] ) echo 'blocker-enabled-check '; echo $mts_options['mts_detect_adblocker_type']; ?>">
		<header id="site-header" role="banner" itemscope itemtype="http://schema.org/WPHeader">
			<div class="container">	
				<div id="header">
					<div class="logo-wrap">
						<?php
						if ( ! empty( $mts_options['mts_logo'] ) ) {
							$logo_id  = mts_get_image_id_from_url( $mts_options['mts_logo'] );
							$logo_w_h = '';
							if ( $logo_id ) {
								$logo     = wp_get_attachment_image_src( $logo_id, 'full' );
								$logo_w_h = ' width="'.$logo[1].'" height="' . $logo[2] . '"';
							}
							if ( is_front_page() || is_home() || is_404() ) {
								?>
								<h1 id="logo" class="image-logo" itemprop="headline">
									<a href="<?php echo esc_url( home_url() ); ?>"><img src="<?php echo esc_url( $mts_options['mts_logo'] ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>"<?php echo $logo_w_h; ?><?php if (!empty($mts_options['mts_logo2x'])) { echo ' data-at2x="'.esc_attr( $mts_options['mts_logo2x'] ).'"'; } ?>></a>
								</h1><!-- END #logo -->
								<?php
							} else {
								?>
								<h2 id="logo" class="image-logo" itemprop="headline">
									<a href="<?php echo esc_url( home_url() ); ?>"><img src="<?php echo esc_url( $mts_options['mts_logo'] ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>"<?php echo $logo_w_h; ?><?php if (!empty($mts_options['mts_logo2x'])) { echo ' data-at2x="'.esc_attr( $mts_options['mts_logo2x'] ).'"'; } ?>></a>
								</h2><!-- END #logo -->
								<?php
							}
						} else {
							if ( is_front_page() || is_home() || is_404() ) {
								?>
								<h1 id="logo" class="text-logo" itemprop="headline">
									<a href="<?php echo esc_url( home_url() ); ?>"><?php bloginfo( 'name' ); ?></a>
								</h1><!-- END #logo -->
								<?php
							} else {
								?>
								<h2 id="logo" class="text-logo" itemprop="headline">
									<a href="<?php echo esc_url( home_url() ); ?>"><?php bloginfo( 'name' ); ?></a>
								</h2><!-- END #logo -->
								<?php
							}
							?>
							<div class="site-description" itemprop="description">
								<?php bloginfo( 'description' ); ?>
							</div>
						<?php } ?>
					</div>
					<?php
					// Header Ad.
					if ( $mts_options['mts_header_ad'] && $mts_options['mts_header_adcode'] ) {
						if ( $mts_options['mts_header_ad_size'] != 0 ) {
							$style = 'float:right; max-width: 100%;';
						} else {
							$style = 'max-width: 100%;';
						}
						?>
						<div class="header-banner">
							<div style="<?php mts_ad_size_value( $mts_options['mts_header_ad_size'] ); ?> <?php echo $style; ?>">
								<?php echo $mts_options['mts_header_adcode']; ?>
							</div>
						</div>
						<?php
					} elseif ( ! empty( $mts_options['mts_header_social'] ) && is_array( $mts_options['mts_header_social'] ) && ! empty( $mts_options['mts_social_icon_head'] ) ) {
						?>
						<div class="header-social">
							<?php foreach ( $mts_options['mts_header_social'] as $header_icons ) : ?>
								<?php if ( ! empty( $header_icons['mts_header_icon'] ) && isset( $header_icons['mts_header_icon'] ) && ! empty( $header_icons['mts_header_icon_link'] ) ) : ?>
									<a style="background-color: <?php echo isset( $header_icons['mts_header_icon_color'] ) ? $header_icons['mts_header_icon_color'] : "#555555" ?>" href="<?php print $header_icons['mts_header_icon_link'] ?>" class="header-<?php print $header_icons['mts_header_icon'] ?>"><span class="fa fa-<?php print $header_icons['mts_header_icon'] ?>"></span></a>
								<?php endif; ?>
							<?php endforeach; ?>
						</div>
						<?php
					}
					?>
				</div><!--#header-->
				<?php
				if ( ! empty( $mts_options['mts_show_primary_nav'] ) || ! empty( $mts_options['mts_header_search'] ) ) {
					if ( $mts_options['mts_sticky_nav'] == '1' ) {
						?>
						<div class="clear" id="catcher"></div>
						<div class="navigation-wrap sticky-navigation">
						<?php
					} else {
						?>
						<div class="navigation-wrap">
						<?php
					}
					// Navigation Menu.
					if ( $mts_options['mts_show_primary_nav'] == '1' ) {
						?>
						<div id="primary-navigation" role="navigation" itemscope itemtype="http://schema.org/SiteNavigationElement">
							<a href="#" id="pull" class="toggle-mobile-menu"><?php _e( 'Menu', 'ad-sense' ); ?></a>
							<nav class="navigation clearfix mobile-menu-wrapper">
								<?php
								if ( has_nav_menu( 'primary-menu' ) ) {
									wp_nav_menu(
										array(
											'theme_location' => 'primary-menu',
											'menu_class' => 'menu clearfix',
											'container' => '',
											'walker' => new mts_menu_walker
										)
									);
								} else {
									?>
									<ul class="menu clearfix">
										<?php wp_list_categories( 'title_li=' ); ?>
									</ul>
									<?php
								}
								?>
							</nav>
						</div>
						<?php
					}
					// Header Search.
					if( ! empty( $mts_options['mts_header_search'] ) ) {
						?>
						<div id="search-6" class="widget widget_search">
							<?php get_search_form(); ?>
						</div><!-- END #search-6 -->
						<?php
					}
					echo '</div>';
				}
				// Navigation Ad.
				if ( $mts_options['mts_navigation_ad'] && $mts_options['mts_navigation_adcode'] ) {
					?>
					<div class="navigation-banner">
						<div style="<?php mts_ad_size_value( $mts_options['mts_navigation_ad_size'] ); ?>">
							<?php echo $mts_options['mts_navigation_adcode']; ?>
						</div>
					</div>
					<?php
				}
				// Call to action.
				$call_to_action = $mts_options['mts_call_to_action'];
				$cta_heading    = $mts_options['mts_call_to_action_heading'];
				$button_url     = $mts_options['mts_call_to_action_button_url'];
				$button_text    = $mts_options['mts_call_to_action_button'];
				if ( isset( $call_to_action ) && '1' == $call_to_action ) { // phpcs:ignore
					?>
					<div class="text-info">
						<h3 class="text"><?php echo ! empty( $cta_heading ) ? $cta_heading : ''; ?></h3>
						<?php
						if ( ! empty( $button_url ) ) {
							?>
							<div class="readMore">
								<a href="<?php echo $button_url; ?>" title="<?php echo ! empty( $button_text ) ? $button_text : ''; ?>"><?php echo ! empty( $button_text ) ? $button_text : ''; ?></a>
							</div>
							<?php
						}
						?>
					</div>
					<?php
				}
				?>
			</div>
		</header>
