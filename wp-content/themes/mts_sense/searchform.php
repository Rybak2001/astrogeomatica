<?php
/**
 * The template for displaying the search form.
 *
 * @package Ad-Sense
 */

$mts_options = get_option( MTS_THEME_NAME );

$ajax_search = ! empty( $mts_options['mts_ajax_search'] ) ? ' autocomplete="off"' : ''; ?>

<form method="get" id="searchform" class="search-form" action="<?php echo esc_attr( home_url() ); ?>" _lpchecked="1">
	<fieldset>
		<input type="search" name="s" id="s" value="<?php the_search_query(); ?>" <?php echo $ajax_search; ?> />
		<i id="search-image" class="sbutton fa fa-search"></i>
	</fieldset>
</form>
