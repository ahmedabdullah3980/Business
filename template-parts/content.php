<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Codenators
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php codenators_post_thumbnail(); ?>

	<header class="entry-header">
		<?php
		if ( is_singular() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		if ( 'post' === get_post_type() ) :
			?>
			<div class="entry-meta">
				<?php
				codenators_posted_on();

//                $post_date = get_the_date( 'F j, Y' ); echo $post_date;
				codenators_posted_by();
				?>
			</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php
        if (is_single()) {
            the_content(sprintf(
                wp_kses(
                /* translators: %s: Name of current post. Only visible to screen readers */
                    __('Continue reading<span class="screen-reader-text"> "%s"</span>', 'codenators'),
                    array(
                        'span' => array(
                            'class' => array(),
                        ),
                    )
                ),
                get_the_title()
            ));
        }
        else{
            the_excerpt();
			?><p><a class="read-more" href="<?php the_permalink();?>">Read More</a></p><?php
        }

		wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'codenators' ),
			'after'  => '</div>',
		) );
		?>
	</div>
    <!-- .entry-content -->

<!--	<footer class="entry-footer">-->
<!--		--><?php //codenators_entry_footer(); ?>
<!--	</footer>-->
    <!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
