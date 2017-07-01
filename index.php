<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * e.g., it puts together the home page when no home.php file exists.
 *
 * Learn more: {@link https://codex.wordpress.org/Template_Hierarchy}
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>

<div class="columns"> 
	<?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
	<div class="post">
		    <?php the_post_thumbnail(array(325));?>
        	<h2>
			<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?>
			</a>
			</h2>
    </div> <?php endwhile; ?> <?php endif; ?>			
	</div>
		
</div>


<!--
Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit voluptate ipsum, veniam ab alias aperiam magnam tempore ducimus cumque ut, adipisci minus assumenda dolorem! Voluptas optio nisi eius dignissimos ab.
-->

<?php get_footer(); ?>
