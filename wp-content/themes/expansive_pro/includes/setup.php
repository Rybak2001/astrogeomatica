<?php 

add_action('wp_head', 'cpotheme_styling_custom', 19);
function cpotheme_styling_custom(){
	$primary_color = cpotheme_get_option('primary_color'); ?>
	<style type="text/css">
		<?php if($primary_color != ''): ?>
		.menu-main .current_page_ancestor > a,
		.menu-main .current-menu-item > a { color:<?php echo $primary_color; ?>; }
		.header.header-sticky-active,
		.header-sticky-active .menu-main li ul,
		.slider-pages a:before,
		.menu-portfolio .current-cat a,
		.pagination .current { background-color:<?php echo $primary_color; ?>; }
		<?php endif; ?>
    </style>
	<?php
}


//set settings defaults
add_filter('cpotheme_customizer_controls', 'cpotheme_customizer_controls');
function cpotheme_customizer_controls($data){ 
	//Layout
	$data['home_order']['default'] = 'slider,tagline,features,portfolio,content';
	$data['slider_height']['default'] = 650;
	$data['slider_speed']['default'] = 500;
	$data['layout_subfooter_columns']['default'] = 4;
	$data['features_columns']['default'] = 2;
	$data['portfolio_columns']['default'] = 4;
	//Typography
	$data['type_headings']['default'] = 'Roboto:300';
	$data['type_nav']['default'] = 'Roboto:300';
	$data['type_body']['default'] = 'Roboto';
	//Content
	unset($data['home_features']);
	//Colors
	$data['primary_color']['default'] = '#313e4f';
	$data['secondary_color']['default'] = '#ebeff4';
	$data['type_headings_color']['default'] = '#555555';
	$data['type_widgets_color']['default'] = '#555555';
	$data['type_nav_color']['default'] = '#ffffff';
	$data['type_body_color']['default'] = '#666666';
	$data['type_link_color']['default'] = '#2a3b6d';
	
	return $data;
}

add_action('after_setup_theme', 'cpotheme_theme_images');
if(!function_exists('cpotheme_theme_images')){
	function cpotheme_theme_images(){
		add_image_size('portfolio_large', 800, 400, true);
	}
}

//set settings defaults
add_action('wp_enqueue_scripts', 'cpotheme_theme_scripts');
function cpotheme_theme_scripts($data){ 
	wp_enqueue_script('cpotheme_general', get_template_directory_uri().'/scripts/general.js', array('jquery'), false, true);
}