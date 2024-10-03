<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package alaska_blog
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('grid-item'); ?>>
	<div class="blog-post-item">
		<header class="entry-header">
			<?php
			if ( is_singular() ) :
				the_title( '<h1 class="entry-title">', '</h1>' );
			else :
				the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
			endif; ?>
		</header><!-- .entry-header -->

		<div class="entry-meta">
			<?php
				alaska_blog_posted_on();
				alaska_blog_entry_footer();
			?>
		</div><!-- .entry-meta -->

		<?php if ( has_post_thumbnail() ) : ?>
			<div class="featured-image">
				<?php alaska_blog_post_thumbnail(); ?>
			</div><!-- .featured-image -->
        <?php endif; ?>

		<?php $excerpt = get_the_excerpt();
		
		if ( !empty($excerpt) ) { ?>
			<div class="entry-content">
				<?php the_excerpt(); ?>
			</div><!-- .entry-content -->
		<?php } ?>
	</div><!-- .blog-post-item -->
</article><!-- #post-<?php the_ID(); ?> -->