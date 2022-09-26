<?php 	$field = acf_get_field_group( 'group_6230eb62894f4'); 
		$field_key = $field['title'];
		if($field_key): ?>
<section id="<?php echo strtolower(str_replace(':','',$field_key)) ?>" class="section pricing two">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="section-title">
					<?php if(get_field('price_table_heading')){ ?>
					<h3><?php the_field('price_table_heading'); ?> <span class="alternate"><?php the_field('price_table_span_heading'); ?></span></h3>
					<?php } ?>
					<?php if(get_field('price_table_description')){ ?>
					<p><?php the_field('price_table_description'); ?></p>
					<?php } ?>
				</div>
			</div>
		</div>
		<div class="row">
		<?php if( have_rows('price_table') ): 
			   $count = 1;
			?>
                    <?php  while( have_rows('price_table') ) : the_row(); 
					if($count == 1){
						$box = '';
						$box2 = 'btn-transparent-md';
				   }
				   elseif($count % 2 == 0){
					   $box = 'featured';
					   $box2 = 'btn-main-md';
				  }
				  else{
				   $box = '';
				   $box2 = 'btn-transparent-md';
			  }
			  ?>
			<div class="col-lg-4 col-md-6">
				<!-- Pricing Item -->
				<div class="pricing-item <?php echo $box; ?>">
					<div class="pricing-heading text-center">
						<!-- Title -->
						<?php if(get_sub_field('heading')){ ?>
						<div class="title">
							<h6><?php the_sub_field('heading'); ?></h6>
						</div>
						<?php } ?>
						<!-- Price -->
						<?php if(get_sub_field('price')){ ?>
						<div class="price">
							<h2><?php the_sub_field('price'); ?></h2>
						</div>
						<?php } ?>
					</div>
					<div class="pricing-body">
						<!-- Feature List -->
						<?php if( have_rows('price_list') ): ?>
                    <?php  while( have_rows('price_list') ) : the_row(); ?>
						<ul class="feature-list m-0 p-0">
						<?php if(get_sub_field('icon_class_name')){ ?>
							<li><p><span class="<?php the_sub_field('icon_class_name'); ?>"></span><?php the_sub_field('list'); ?></p></li>
						<?php } ?>
						</ul>
						<?php endwhile; ?>
              <?php endif;?>
					</div>
					<div class="pricing-footer text-center">
					<?php if(get_sub_field('price_button_text')){ ?>
						<a href="<?php echo site_url(); ?>" class="btn <?php echo $box2; ?>"><?php the_sub_field('price_button_text'); ?></a>
					<?php } ?>
					</div>
				</div>
			</div>
			<?php $count++;
		endwhile; ?>
              <?php endif;?>
		</div>
	</div>
</section>
<?php endif; ?>