<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
 
<div class="default-template-wrapper">
	<!-- Hero SH -->

	
	<!-- Content SH -->
	<section class="content-sec">
        <div class="container">
            <div class="row align-items-center">
               	<div class="col-lg-12 col-md-12 col-sm-12">
               	    <h1><?php the_title(); ?></h1>
					<div class="content">
						<?php the_content(); ?>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>      
        
<?php endwhile; endif; ?>
<?php get_footer(); ?>