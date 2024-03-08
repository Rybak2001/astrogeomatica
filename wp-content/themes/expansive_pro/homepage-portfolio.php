<?php $query = new WP_Query('post_type=cpo_portfolio&order=ASC&orderby=menu_order&meta_key=portfolio_featured&meta_value=1&numberposts=-1&posts_per_page=-1'); ?>
<?php if($query->posts): ?>
<div id="portfolio" class="portfolio primary-color-bg">
	<div class="row">
		<?php $columns = cpotheme_get_option('portfolio_columns'); if($columns == 0) $columns = 4; ?>
		<?php $feature_count = 0; ?>
		<?php foreach($query->posts as $post): setup_postdata($post); ?>
		<?php $feature_count++; ?>
		
		<?php if($feature_count == 1 && cpotheme_get_option('home_portfolio') != ''): $feature_count++; ?>
		<div class="column column-fit col<?php echo $columns; ?>">
			<?php cpotheme_block('home_portfolio', 'portfolio-heading dark'); ?>
		</div>
		<?php endif; ?>
		
		<div class="column column-fit col<?php echo $columns; ?>">
			<?php get_template_part('element', 'portfolio'); ?>
		</div>
		<?php if($feature_count % $columns == 0) echo '</div><div class="row">'; ?>
		
		<?php endforeach; ?>
	</div>
	<div class='clear'></div>
</div>
<?php endif; ?>