<?php
/**
 * Template Name: testimonials
 */ get_header(); ?>






		
<?php 
if (have_posts()) : while (have_posts()) : the_post(); 
?>


<div class="clearfix" id="main-container">
    <!--// OPEN .container //-->
    <div class="container">
        <!--// OPEN #page-wrap //-->
        <div id="page-wrap">





            <div class="inner-page-wrap has-no-sidebar clearfix">
      
                <!-- OPEN page -->
                <div class="post-1333 page type-page status-publish hentry clearfix" id="xxx">
                                
                    <div class="page-content clearfix">
  







 <div class="row">
    <div class="spb_content_element span12 spb_text_column">
        <div class="spb_wrapper clearfix">

    
        <h3 style="text-align: center;">Testimonios</h3>
        <p style="text-align: center;">
            <div class="horizontal-break"> </div>
        </p>
        </div> 
    </div>
</div>



<style>
.circular {
    border-radius: 59px;
}
</style>
<?php 

	if( have_rows('bloque_testimonio') ): 
		$i=0;
		while( have_rows('bloque_testimonio') ): the_row(); 
	
			$imagen = get_sub_field('imagen');
			$contenido_principal = get_sub_field('contenido_principal');
			$aplicar_en_home = get_sub_field('aplicar_en_home');
			$titulo_home = get_sub_field('titulo_home');
			
			if($i%2) { $html_row_top = ''; $html_row_bot = '</div>'; }
			else { $html_row_top = '<div class="row">'; $html_row_bot = ''; } 

			echo $html_row_top;
?>
			<div class="spb_content_element span6 spb_text_column">
					<div class="spb_wrapper clearfix">
						
						<div class="one_fourth">
							<?php if($imagen) :?>					
							<p><img class="alignnone size-full wp-image-9849 circular" alt="<?php echo $imagen['alt']; ?>" src="<?php echo $imagen['url']; ?>" width="126" height="126" /></p>
							<?php else:?>					
							<p></p>
							<?php endif;?>
						</div>
			
						<div class="three_fourth last"><?php echo $contenido_principal; ?></div>
			
						<div class="clearboth"></div>
						<p>&nbsp;</p>
			
					</div> 
			</div>
<?php
			echo $html_row_bot;
			 

		$i++;
		endwhile;
	endif;

?>










                    </div>                        
              
                <!-- CLOSE page -->
                </div>

        
          


            </div><!--// WordPress Hook //-->
        </div><!--// CLOSE #page-wrap //-->
    </div><!--// CLOSE .container //-->
</div><!--// CLOSE #main-container //-->


<?php  
endwhile; endif; 
?> 




<?php get_footer(); ?>