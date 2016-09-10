<?php
/**
 * The template part for displaying company headlines
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>


<a href="<?php the_permalink(); ?>" class="company">
    <?php the_post_thumbnail(); ?>
    <span>Search for React.js jobs at<br><?php the_title(); ?></span>
</a>
