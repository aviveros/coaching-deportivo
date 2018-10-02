<?php
/**
 * Template Name: full-width
 *
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
                <div class="post-19 page type-page status-publish hentry clearfix" id="19">
                    <div class="page-content clearfix">

                        

						                                                            

									<div class="heading-text">
										<h1 class="spb_heading"><?php the_title(); ?></h1>
									</div>


											<?php if ( function_exists('has_post_thumbnail') and has_post_thumbnail() ): ?>
												<p><?php the_post_thumbnail( 'size-full' ); ?></p>
											<?php endif; ?>

											<?php the_content(); ?>                             
			   

		



                    </div><!-- CLOSE page -->
                </div>
            </div><!--// WordPress Hook //-->
            <!--// CLOSE #page-wrap //-->
        </div><!--// CLOSE .container //-->
    </div><!--// CLOSE #main-container //-->
</div>

<?php  
endwhile; endif; 
?> 




<?php get_footer(); ?>