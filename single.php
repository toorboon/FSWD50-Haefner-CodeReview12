<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
This is the singlepage
  <h1 class="text-white text-center"><?php the_title(); ?></h1>
	<div class="col-8 offset-2 bg-secondary text-white text-center p-3 mb-4">
  		<?php the_content(); ?>
  		<?php wp_list_comments(); ?>
  	</div>

<?php endwhile;  endif;?>

<?php get_footer(); ?>