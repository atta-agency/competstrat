<?php
/*
Template Name: CMS
*/

get_header();?>

<div class="container">
	<div class="row">
		<div class="col-sm-12">
			<a class="btn btn-primary backto" href="http://krill-tonic.com">Revenir à l'accueil</a>
		</div>
	</div>
</div>


<section role="main" class="content">

	<div class="container">
		<div class="row">
			<div class="col-sm-8">
				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'content', 'page' ); ?>

				<?php endwhile; // end of the loop. ?>
			</div>
		</div>
	</div>	

</section>
	

<?php get_footer(); ?>