<?php
/**
 * The template used for displaying page content
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?><section id="page" class="page">
<div class="page-header"><?php the_title( '<h1 class="page-title txt-center">', '</h1>' ); ?></div>

    
<style>
    .page-header {
    	content: "";
    	background-image: url('<?php $feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); echo $feat_image;?>');
		background-size: 100%;
		background-position: center;

<?php 
if ( has_post_thumbnail() ) {
	echo "color: white;
		  text-shadow: 2px 2px #000;
		  height: 400px;
		  line-height: 400px;";}

else {echo "color: black;
			line-height: 300px;
			height: auto;";}
	?>

background-repeat: no-repeat;

}
	</style>    
	
  
	

    
        <hr class="content-devider" />
       
          <div class="page-content">
		<?php the_content(); ?>
	
	</div><!-- .entry-content -->

	<?php edit_post_link( __( 'Bewerken', 'vera-theme' ), '<footer class="entry-footer"><span class="edit-link">', '</span></footer><!-- .entry-footer -->' ); ?>
           
       
        
    </section>


	

<!-- #post-## -->
