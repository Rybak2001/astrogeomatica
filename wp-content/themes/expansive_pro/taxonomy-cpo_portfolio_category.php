<?php get_header(); ?>

<div id="main" class="main">
	<div class="container">
		<section id="content" class="content">
			<?php do_action('cpotheme_before_content'); ?>
			
			<?php $description = term_description(); ?>
			<?php if($description != ''): ?>
			<div class="page-content">
				<?php echo $description; ?>
			</div>
			<?php endif; ?>
			
			<?php do_action('cpotheme_after_content'); ?>
		</section>
		<?php get_sidebar(); ?>
		<div class="clear"></div>
	</div>
	
	<?php cpotheme_secondary_menu('cpo_portfolio_category', 'menu-portfolio'); ?>
				
	<?php if(have_posts()): $feature_count = 0; ?>
	<?php $columns = cpotheme_get_option('portfolio_columns'); ?>
	<div id="portfolio" class="portfolio">
		<?php cpotheme_grid(null, 'element', 'portfolio', $columns, array('class' => 'column-fit')); ?>
	</div>
	<?php endif; ?>
	<?php cpotheme_numbered_pagination(); ?>
	
</div>

<?php get_footer(); ?>