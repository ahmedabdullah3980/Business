<?php 
	$field = acf_get_field_group('group_6230321e5bcab');
    $field_key = $field['title'];
	if($field_key) :?>
<section id="<?php echo strtolower(str_replace(': ','-', $field_key)); ?>" class="speakers-full-width">
	<div class="container-fluid p-0">
		<div class="row">
			<div class="col-12">
				<!-- Speaker Slider -->
				<div class="speaker-slider">
				    <?php if( have_rows('speaker_carousel') ): ?>
						<?php  while( have_rows('speaker_carousel') ) : the_row(); ?>
							<div class="speaker-image">
								<img src="<?php the_sub_field('speaker_image'); ?>" alt="speaker" class="img-fluid">
								<div class="primary-overlay text-center">
									<h5><?php the_sub_field('speaker_heading'); ?></h5>
									    <p><?php the_sub_field('speaker_description'); ?></p>
											<ul class="list-inline">
													<?php if( have_rows('speakers_media')){ ?>
														<?php while( have_rows('speakers_media')){ the_row(); ?>
																<li class="list-inline-item"><a href="<?php the_sub_field('speaker_media_link'); ?>"><i class="<?php the_sub_field('speaker_media_class'); ?>"></i></a></li>
														<?php } ?>
													<?php } ?>
											</ul>
											
								</div>
							</div>
						<?php endwhile; ?>
                    <?php endif;?>
				</div>
			</div>
		</div>
	</div>
</section>
<?php endif; ?>