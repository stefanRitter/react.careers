<?php
/**
 * The template part for displaying blog post headlines
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>

<?php the_title( sprintf( '<h2 class="entry-title" style="max-width:800px;margin: 1.5em auto;"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
