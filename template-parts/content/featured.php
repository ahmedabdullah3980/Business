<?php 	$field = acf_get_field_group( 'group_6230cc446d97a'); 
		$field_key = $field['title'];
		if($field_key): ?>
<section id="<?php echo strtolower(str_replace(':','',$field_key)) ?>" class="ticket-feature">
	<div class="container-fluid m-0 p-0">
		<div class="row p-0 m-0">
			<div class="col-lg-7 p-0 m-0">
				<div class="block bg-timer overlay-dark text-center" style = "background:url('<?php the_field('featured_bg'); ?>') no-repeat;">
					<div class="section-title white m-0">
						<?php if(get_field('featured_heading')){ ?>
						<h3><?php the_field('featured_heading'); ?> <span class="alternate"><?php the_field('featured_span_heading'); ?></span></h3>
						<?php } ?>
						<?php if(get_field('featured_description')){ ?>
						<p><?php the_field('featured_description'); ?></p>
						<?php } ?>
					</div>
					<!-- Coundown Timer -->
					<div class="timer"></div>
					<?php if(get_field('featutred_button_text')){ ?>
					<a href="<?php echo site_url(); ?>" class="btn btn-main-md"><?php the_field('featutred_button_text'); ?></a>
					<?php } ?>
				</div>
			</div>
			<div class="col-lg-5 p-0">
				<div class="block-2">
				<?php if( have_rows('featured') ): ?>
					<div class="row no-gutters">
                    <?php  while( have_rows('featured') ) : the_row(); ?>
						<div class="col-6">
							<!-- Service item -->
							<div class="service-item">
								<?php if(get_sub_field('heading')){ ?>
								<i class="<?php the_sub_field('icon_name'); ?>"></i>
								<h5><?php the_sub_field('heading'); ?></h5>
								<?php } ?>
							</div>
						</div>
						<?php endwhile; ?>
					</div>
				<?php endif;?>
				</div>
			</div>
		</div>
	</div>
</section>
<?php endif; ?>