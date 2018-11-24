<?php get_header(); ?>

<div class="container-fluid">
	<div class="row">
		<div class="col-12">
			<h1 class="text-center text-white">The Blog Dings</h1>
				<div class="row">
					<div class="col-md-9">   
						<div class="card-deck">

							<?php if ( have_posts() ) : while ( have_posts() ) : the_post();?>
						      	<div class="card text-center">
						              <?php the_post_thumbnail('medium', array('class' => 'card-img-top, p-2, img-fluid')); ?>
						              <div class="card-body">
							          	    <div class="card-header">
							          	    	<h6><?php the_title(); ?></h6>
							          	    </div>
								            <ul class="list-group list-group-flush">
								              	<li class="list-group-item"><?php the_excerpt(); ?></li>
								              	<li class="list-group-item"><a href="<?php the_permalink(); ?>">Read More</a></li>
								              	
								            </ul>
								            
						              </div>
					            </div>
						    <?php endwhile;  endif;?>
			      		</div>
			  		</div>
					
		    		<?php get_sidebar();?>

		    	</div> 
	 	</div>
	</div>
</div>

<?php get_footer(); ?>