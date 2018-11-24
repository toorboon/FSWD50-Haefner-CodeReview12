<?php get_header(); ?>

<div class="container">
	<div class="row">
		<div class="col-12">
		  	<h1 class="text-white text-center"><?php the_title(); ?></h1>
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post();?>
				<div class="row">	
				 	<div class="col-md-8">
					 	<nav aria-label="breadcrumb">
							 <ol class="breadcrumb">
							    <li class="breadcrumb-item"><a href="<?php echo site_url(); ?>">Home</a></li>
							    <li class="breadcrumb-item active" aria-current="page"><?php the_title(); ?></li>
							 </ol>
						</nav>
						<div class="jumbotron mx-3"><?php the_content(); ?></div>
				  		
					</div>
				  	
				  	<?php get_sidebar();?>
				  	
				</div>
			<?php endwhile;  endif;?>
		</div>
	</div>
</div>

<?php get_footer(); ?>