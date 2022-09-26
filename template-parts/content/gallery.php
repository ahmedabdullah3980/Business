<?php 	$field = acf_get_field_group( 'group_6230deeeb52e7'); 
		$field_key = $field['title'];
		if($field_key): ?>
<section id="<?php echo strtolower(str_replace(':','',$field_key)) ?>" class="gallery-full section pb-0">
	<div class="container-fluid p-0">
		<div class="row">
			<div class="col-12">
				<div class="section-title">
					<h3><?php the_field('gallery_heading'); ?> <span class="alternate"><?php the_field('gallery_span_heading'); ?></span></h3>
					<p><?php the_field('gallery_description'); ?></p>
				</div>
			</div>
		</div>
		<div class="row no-gutters">
			<!-- Gallery Image -->
			<?php if( have_rows('gallery_image') ): ?>
                    <?php  while( have_rows('gallery_image') ) : the_row(); ?>
			<div class="col-lg-3 col-md-4">
				<div class="image">
					<img src="<?php the_sub_field('image'); ?>" alt="gallery-image" class="img-fluid">
					<div class="primary-overlay">
        				<a class="image-popup" data-effect="mfp-with-zoom" href="<?php the_sub_field('image_2'); ?>"><i class="fa fa-picture-o"></i></a>
        			</div>
				</div>
			</div>
			<?php endwhile; ?>
              <?php endif;?>
			<!-- Gallery Image -->
		</div>
	</div>
</section>
<?php endif; ?>