<?php
/**
* Template Name: Test Page
**/
get_header(); 
?>

<?php if( have_rows('banner') ): ?>
    <?php while( have_rows('banner') ): the_row(); ?>
        <?php if( get_row_layout() == 'column_banner' ): ?>
              <?php get_template_part( 'template-parts/header/banner','banner' ); ?> 
        <!--====  End of Banner  ====-->
        <?php endif; ?>
		<?php if( get_row_layout() == 'column_featured' ): ?>
              <?php get_template_part( 'template-parts/content/featured','featured' ); ?> 
        <!--====  End of Banner  ====-->
        <?php endif; ?>
    <?php endwhile; ?>
<?php endif; ?>

<!--================================
=            Google Map            =
=================================-->
<?php 	$field = acf_get_field_group( 'group_6230f7b04a098'); 
		$field_key = $field['title'];
		if($field_key): ?>
<section id="<?php echo strtolower(str_replace(': ','-', $field_key)); ?>" class="map new">
	<!-- Google Map -->
	<div id="map"></div>
	<div class="address-block">
		<h4><?php the_field('map_heading'); ?></h4>
		<?php if( have_rows('map_list') ): ?>
                    <?php  while( have_rows('map_list') ) : the_row(); ?>
		<ul class="address-list p-0 m-0">
			<li><i class="<?php the_sub_field('icon_class'); ?>"></i><span><?php the_sub_field('list'); ?></span></li>
		</ul>
		<?php endwhile; ?>
              <?php endif;?>
		<a href="<?php echo site_url(); ?>" class="btn btn-white-md"><?php the_field('map_button_text'); ?></a>
	</div>
	<div class="register overlay-dark bg-registration-two">
		<div class="block">
			<div class="title text-center">
				<h3><?php the_field('contact_heading'); ?> <span class="alternate"><?php the_field('contact_span_heading'); ?></span></h3>
				<p><?php the_field('contact_description'); ?></p>
			</div>
			<form action="#" class="row">
				<?php the_field('contact_form'); ?>
		    </form>
		</div>
	</div>
</section>
<?php endif; ?>
<!--====  End of Google Map  ====-->
<?php
get_footer();
?>