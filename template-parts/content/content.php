<?php 
	$field = acf_get_field_group('group_62302abf659a8');
    $field_key = $field['title'];
	if($field_key) :?>
<section id="<?php echo strtolower(str_replace(': ','-', $field_key)); ?>" class="section about">
	<div class="container">
		<div class="row">
			<div class="col-lg-5 col-md-6 align-self-center">
				<div class="image-block two bg-about">
				<?php if (get_field('image')){ ?>
					<img class="img-fluid" src="<?php the_field('image'); ?>" alt="">
				<?php } ?>
				</div>
			</div>
			<div class="col-lg-6 col-md-6 align-self-center ml-lg-auto">
				<div class="content-block">
				<?php if (get_field('content_heading')){ ?>
					<h2><?php the_field('content_heading'); ?><span class="alternate"><?php the_field('content_span_heading'); ?></span></h2>
				<?php } ?>
				<?php if (have_rows('content_description')){ ?>
					<?php while(have_rows('content_description')){ the_row(); ?>
						<div class="<?php the_sub_field('content_class_name'); ?>">
							<p>
								<?php the_sub_field('content_description'); ?>
							</p>
						</div>
				    <?php } ?>
				<?php } ?>
					<ul class="list-inline">
					<?php if (have_rows('buttons')){ ?>
					    <?php while(have_rows('buttons')){ the_row(); ?>
							<li class="list-inline-item">
								<a href="<?php echo site_url(); ?>" class="<?php the_sub_field('button_class'); ?>"><?php the_sub_field('button_text'); ?></a>
							</li>
						<?php } ?>
					<?php } ?>
					</ul>
					
				</div>
			</div>
		</div>
	</div>
</section>
<?php endif; ?>