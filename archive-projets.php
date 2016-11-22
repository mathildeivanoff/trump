<?php get_header(); ?>
		<aside class="all-projets">
		</aside>
		<div id="main2" role="main" class="mod pam">
			<h4>Tous les projets</h4>
			<div class="total">
		<div class="recent-post" >
<?php if ( have_posts() ) : ?>
<?php while ( have_posts() ) : the_post(); ?>

        <div class="projets" >
        <div class="details">
        <h2><?php the_title(); ?></h2>
        <?php the_content(); ?>
        </div>
        <div class="photo-pro">
           <a  data-toggle="modal" data-target="<?php the_permalink(); ?>" href="<?php the_permalink(); ?>">
           <?php the_post_thumbnail( '400x200', array( 'class' => 'left' )  );?>
           </a>
        </div>

        <div class="type">
        <?php the_terms( $post->ID, 'type', 'Type : ' ); ?><br> 

        </div> 
       <a href="<?php the_permalink(); ?>"> Voir le projet</a>
      
          
	<?php endwhile; ?>
	<?php endif; ?>
            
                    
                                 </div>
							</div> 


		</div>
	
<?php get_footer(); ?>

