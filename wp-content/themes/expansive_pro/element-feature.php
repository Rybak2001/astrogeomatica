<div class="feature">
	<?php $feature_url = get_post_meta(get_the_ID(), 'feature_url', true); $feature_tag = 'div'; ?>
	<?php if($feature_url != ''){ $feature_url = ' href="'.$feature_url.'"'; $feature_tag = 'a'; }?>
	
	<?php if(has_post_thumbnail()): ?>
	<<?php echo $feature_tag; ?> class="feature-image secondary-color-bg dark"<?php echo $feature_url; ?>>
		<?php the_post_thumbnail('portfolio'); ?>
		<?php cpotheme_icon(get_post_meta(get_the_ID(), 'feature_icon', true), 'feature-icon'); ?>
	</<?php echo $feature_tag; ?>>
	<?php endif; ?>
	
	<div class="feature-body">
		<h3 class="feature-title">
			<?php if($feature_url != '') echo '<a'.$feature_url.'>'; ?>
			<?php the_title(); ?>
			<?php if($feature_url != '') echo '</a>'; ?>
		</h3>
		<div class="feature-content"><?php the_content(); ?><?php cpotheme_edit(); ?></div>
	</div>
</div>