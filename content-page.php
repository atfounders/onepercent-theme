<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package 1% Pledge
 * @since 1% Pledge 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<h1 class="entry-title"><?php the_title(); ?></h1>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>
		<?php wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:', '1_pledge' ), 'after' => '</div>' ) ); ?>
		<?php edit_post_link( __( 'Edit', '1_pledge' ), '<span class="edit-link">', '</span>' ); ?>
	</div><!-- .entry-content -->
</article><!-- #post-<?php the_ID(); ?> -->
