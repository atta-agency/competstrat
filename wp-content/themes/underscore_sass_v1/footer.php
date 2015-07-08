<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package underscore_sass
 */
?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<div class="container">
				
				<div class="col-sm-12 text-center">
					<ul class="list-inline">
						<li><p>Pour votre santé, évitez de grignoter entre les repas - <a href="http://www.mangerbouger.fr">www.mangerbouger.fr</a></p></li>
						<li><p>© KRILL-TONIC - 2015 / </p></li>
						<li><?php echo wp_nav_menu( array( 'theme_location' => 'secondary' )); ?></li>
					</ul>
					
					
				</div>
				<!--<div class="col-sm-4 text-right">
					<ul class="social-list list-unstyled list-inline">
						<li><a href="#"><i class="fa fa-facebook"></i></a></li>
						<li><a href="#"><i class="fa fa-twitter"></i></a></li>
						<li><a href="#"><i class="fa fa-google"></i></a></li>
					</ul>
				</div>-->
			</div>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>

</body>
</html>
