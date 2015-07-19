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
				<div class="row">
          <div class="col-sm-8">
            <div class="logo_footer">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-footer.png">
              </div>

              <div class="list_social_footer">
                <ul class="list-unstyled">
                  <li><small>5 rue Saint-Augustin</small></li>
                  <li><small>75002 Paris</small></li>
                  <li><small><i class="fa fa-phone"></i> +33 (0)1 00 00 00 00</small></li>
                  <li><small><i class="fa fa-envelope"></i> krilltonic@gmail.com</small></li>
                </ul>
              </div>
          </div>

          <div class="col-sm-4">
              <ul class="list-unstyled list-inline social-list">
                <li>
                  <a href="">
                    <i class="fa fa-facebook"></i><br/>
                    <p>facebook</p>
                  </a>
                </li> 
                <li>
                  <a href="">
                    <i class="fa fa-twitter"></i><br/>
                    <p>facebook</p>
                  </a>
                </li>
                <li>
                  <a href="">
                    <i class="fa fa-youtube"></i><br/>
                    <p>Youtube</p>
                  </a>
                </li>      
              </ul>
          </div>
        </div>
			</div>
      <hr/>
      <div class="container">
        <div class="row">
          <div class="col-sm-8 col-sm-offset-2 text-center">
            <?php echo wp_nav_menu( array( 'theme_location' => 'secondary' )); ?>
            <p>Pour votre santé, évitez de grignoter entre les repas - <a href="http://www.mangerbouger.fr">www.mangerbouger.fr</a></p>
          </div>
        </div>
      </div>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

<script src="<?php echo get_template_directory_uri(); ?>/js/modernizr-2.7.2.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/headroom.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.dualSlider.0.3.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.timers-1.2.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.easing.1.3.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery-1.3.2.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/nlform.js"></script>


<script>
    var nlform = new NLForm( document.getElementById( 'nl-form' ) );
</script>
<script> 
$(document).ready(function(){
    $("#animate").click(function(){
        $("#formulaire").css({display: 'block'});
        $("#formulaire").animate({left: '20px'});
    });
});
</script> 
<script> 
$(document).ready(function(){
    $("#animate-inscri").click(function(){
        $("#formulaire").css({display: 'block'});
        $("#formulaire").animate({left: '20px'});
    });
});
</script> 
<script type="text/javascript">
  
  $(document).ready(function() {
    
    $(".carousel").dualSlider({
      auto:false,
      autoDelay: 6000,
      easingCarousel: "swing",
      easingDetails: "easeOutBack",
      durationCarousel: 1000,
      durationDetails: 500
    });
    
  });

</script>
<script type="text/javascript">
  // grab an element
  var myElement = document.querySelector("header");
  // construct an instance of Headroom, passing the element
  var headroom  = new Headroom(myElement);
  // initialise
  headroom.init(); 
</script>

<script>
	$(function() {

  var $window           = $(window),
      win_height_padded = $window.height() * 1.1,
      isTouch           = Modernizr.touch;

  if (isTouch) { $('.revealOnScroll').addClass('animated'); }

  $window.on('scroll', revealOnScroll);

  function revealOnScroll() {
    var scrolled = $window.scrollTop(),
        win_height_padded = $window.height() * 1.1;

    // Showed...
    $(".revealOnScroll:not(.animated)").each(function () {
      var $this     = $(this),
          offsetTop = $this.offset().top;

      if (scrolled + win_height_padded > offsetTop) {
        if ($this.data('timeout')) {
          window.setTimeout(function(){
            $this.addClass('animated ' + $this.data('animation'));
          }, parseInt($this.data('timeout'),10));
        } else {
          $this.addClass('animated ' + $this.data('animation'));
        }
      }
    });
    // Hidden...
   $(".revealOnScroll.animated").each(function (index) {
      var $this     = $(this),
          offsetTop = $this.offset().top;
      if (scrolled + win_height_padded < offsetTop) {
        $(this).removeClass('animated fadeIn fadeInUp fadeInLeft fadeInRight rotateInUpLeft')
      }
    });
  }

  revealOnScroll();
});
  
</script>

</body>
</html>
