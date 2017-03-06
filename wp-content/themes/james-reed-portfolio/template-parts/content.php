<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package James_Reed_Portfolio
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
        <p class="article-date"><?php the_date();?></p>
        <?php the_title( '<h1 class="post-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php
            the_post_thumbnail();
            the_content();
		?>
	</div><!-- .entry-content -->
</article><!-- #post-## -->
