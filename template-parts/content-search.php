<?php
/**
 * Template part for displaying results in search pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Screenr
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

		<?php if ( 'post' === get_post_type() ) : ?>
		<div class="entry-meta">
			<?php screenr_posted_on(); ?>
		</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php echo wp_trim_words( get_the_content(), 50, '...' ); ?>
	</div><!-- .entry-summary -->

	<div class="entry-more">
		<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="btn btn-theme-primary"><?php esc_html_e( 'read more', 'screenr' ); ?><i aria-hidden="true" class="fa fa-chevron-right"></i></a>
	</div>

</article><!-- #post-## -->
