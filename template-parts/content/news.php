<?php 	$field = acf_get_field_group( 'group_6230d4bf5d24f '); 
		$field_key = $field['title'];
		if($field_key): ?>
		<section id="<?php echo strtolower(str_replace(':','',$field_key)) ?>" class="news-hr section mb-0">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="section-title">
							<?php if(get_field('news_heading')): ?>
								<h3>
									<?php the_field('news_heading'); ?> 
									<span class="alternate"><?php the_field('news_span_heading'); ?></span>
								</h3>
							<?php endif; ?>
							<?php if(get_field('news_description')): ?>
								<p><?php the_field('news_description'); ?></p>
							<?php endif; ?>
						</div>
					</div>
				</div>
				<?php if( have_rows('news_posts') ): ?>
					<div class="row no-gutters">
								<?php  while( have_rows('news_posts') ) : the_row(); ?>
						<div class="col-lg-6">
							<article class="news-post-hr">
								<div class="post-thumb">
									<a href="news-single.html">
										<img src="<?php the_sub_field('post_image'); ?>" alt="post-image" class="img-fluid">
									</a>
								</div>
								<div class="post-contents border-top">
									<div class="post-title"><h6><a href="<?php echo get_the_permalink($parent); ?>"><?php the_sub_field('post_heading'); ?></a></h6></div>
									<div class="post-exerpts">
										<p><?php the_sub_field('post_description'); ?></p>
									</div>
									<div class="date">
										<h4><?php the_sub_field('post_day'); ?><span><?php the_sub_field('post_month'); ?></span></h4>
									</div>
									<div class="more">
										<a href="<?php echo get_the_permalink($parent); ?>"><?php the_sub_field('post_button_text'); ?></a>
									</div>
								</div>
							</article>
						</div>
						<?php endwhile; ?>
					</div>
				<?php endif;?>
			</div>
		</section>
<?php endif; ?>