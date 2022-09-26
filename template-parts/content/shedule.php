<?php 
	$field = acf_get_field_group('group_6230649de1727');
    $field_key = $field['title'];
	if($field_key) :?>
<section id="<?php echo strtolower(str_replace(': ','-', $field_key)); ?>" class="section schedule two">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="section-title">
					<?php if (get_field('event_heading')){ ?>
					<h3><?php the_field('event_heading'); ?> <span class="alternate"><?php the_field('event_span_heading'); ?></span></h3>
					<?php } ?>
					<?php if (get_field('event_description')){ ?>
					<p><?php the_field('event_description'); ?></p>
					<?php } ?>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-2">
				<div class="schedule-tab">
					<ul class="nav nav-pills text-center">
					<?php if( have_rows('event_day_tab') ): ?>
                    <?php  while( have_rows('event_day_tab') ) : the_row(); ?>
					  <li class="nav-item">
					    <a class="nav-link" href="<?php the_sub_field('event_class'); ?>" data-toggle="pill">
						<?php the_sub_field('event_day'); ?>
					    	<span><?php the_sub_field('event_span'); ?></span>
					    </a>
					  </li>
					  <?php endwhile; ?>
              <?php endif;?>
					</ul>
				</div>
			</div>
			<div class="col-lg-10">
				<div class="schedule-contents">
					<div class="tab-content" id="pills-tabContent">
					<?php if( have_rows('event_tab_shedules') ): ?>
						<? $count = 1; ?>
                              	<?php  while( have_rows('event_tab_shedules') ) : the_row(); ?>
								  <?php $box= "";
									   if($count==1){
										   $box= "show active";
										   
									   }
									   else{
										    $box= "";
									       }  
								           ?>
					  <div class="tab-pane fade <?php echo $box; ?> schedule-item" id="<?php the_sub_field('event_tab_id'); ?>">
					  	<!-- Headings -->
					  	<ul class="m-0 p-0">
					  		<li class="headings text-center">
							  <?php if( have_rows('event_tab_pan_heading') ): ?>
                              	<?php  while( have_rows('event_tab_pan_heading') ) : the_row(); ?>
								  <?php if(get_sub_field('tab_name')){ ?>
					  				<div class="<?php the_sub_field('tab_class'); ?>"><?php the_sub_field('tab_name'); ?></div>
								  <?php }  ?>
							  	<?php endwhile; ?>
              				 <?php endif;?>
					  		</li>
					  		<!-- Schedule Details -->
							  <?php if( have_rows('event_tab_shedule') ): ?>
                              		<?php  while( have_rows('event_tab_shedule') ) : the_row(); ?>
										<li class="schedule-details">
											<div class="block">
												<!-- time -->
												<?php if(get_sub_field('event_shedule_time')){ ?>
												<div class="time">
													<span class="time"><?php the_sub_field('event_shedule_time'); ?></span>
												</div>
												<?php } ?>
												<!-- Speaker -->
												<?php if(get_sub_field('event_shedule_name')){ ?>
												<div class="speaker">
													<span class="name"><?php the_sub_field('event_shedule_name'); ?></span>
												</div>
												<?php } ?>
												<!-- Subject -->
												<?php if(get_sub_field('event_shedule_subject')){ ?>
												<div class="subject"><?php the_sub_field('event_shedule_subject'); ?></div>
												<?php } ?>
												<!-- Venue -->
												<?php if(get_sub_field('event_shedule_venue')){ ?>
												<div class="venue"><?php the_sub_field('event_shedule_venue'); ?></div>
												<?php } ?>
											</div>
										</li>
									<?php endwhile; ?>
              				  <?php endif;?>
					  	</ul>
					  </div>
					  <?php $count++;
					endwhile; ?>
					  <?php endif; ?>
					</div>
				</div>
			</div>
			</div>
		</div>
	</div>
</section>
<?php endif; ?>