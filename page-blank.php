<?php
/*
Template name: Page - Full Width
*/
get_header(); ?>

<?php do_action( 'flatsome_before_page' ); ?>

<div id="content" role="main" class="content-area">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php the_content(); ?>
		
		<?php endwhile; // end of the loop. ?>
		
</div>

<?php do_action( 'flatsome_after_page' ); ?>

<?php get_footer();
if (is_page( 744 )) { ?>

<script async>
jQuery( document ).ready( function() {
	jQuery(document).on( 'nfFormReady', function() {
    jQuery(".nf-form-content input[type=text]").on('change', function(){
		  const address = jQuery('#nf-field-17').val();
		  const zip = jQuery('#nf-field-48').val();
		  const city = jQuery('#nf-field-46').val();
		  const newValue = address +' '+ zip +' '+ city;
		  jQuery('#nf-field-56').val(newValue);
    })
});

});
</script>

<style>#nf-form-3-cont #nf-field-56-container { display: none }</style>

<?php } ?>
