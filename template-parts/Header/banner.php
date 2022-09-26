<?php 
	$field = acf_get_field_group('group_62301ef05c14a');
    $field_key = $field['title'];
	if($field_key) :?>
<section id="<?php echo strtolower(str_replace(': ','-', $field_key)); ?>" class="banner-two bg-banner-two overlay-white-slant text-overlay" 
<?php if (get_field('banner_background_image')){ ?>style = "background:url('<?php the_field('banner_background_image'); ?>') no-repeat;"
	<?php } ?>>
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<!-- Content Block -->
				<div class="block">
				<?php if( have_rows('banner_list') ): ?>
						<?php  while( have_rows('banner_list') ) : the_row(); ?>
					<<?php the_sub_field('list_item_tag'); ?>><?php the_sub_field('list_item_heading'); ?></<?php the_sub_field('list_item_tag'); ?>>
					<?php endwhile; ?>
                    <?php endif;?>
					<!-- Action Button -->
					<a href="<?php echo site_url(); ?>" class="btn btn-main-md"><?php the_field('banner_button_text'); ?></a>
				</div>
			</div>
		</div>
	</div>
</section>
<?php endif; ?>