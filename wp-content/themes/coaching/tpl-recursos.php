<?php
/**
 * Template Name: recursos
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
            <div class="inner-page-wrap has-right-sidebar has-one-sidebar row clearfix">








               <aside class="sidebar right-sidebar span4"> 

                    <?php if( get_field('columna1') ): ?>
                        <?php the_field('columna1'); ?>
                    <?php endif; ?>

                </aside>

               <aside class="sidebar right-sidebar span4"> 

                    <?php if( get_field('columna2') ): ?>
                        <?php the_field('columna2'); ?>
                    <?php endif; ?>

                </aside>


               <aside class="sidebar right-sidebar span4"> 

                    <?php if( get_field('columna3') ): ?>
                        <?php the_field('columna3'); ?>
                    <?php endif; ?>

                </aside>                







            </div><!--// WordPress Hook //-->
            <!--// CLOSE #page-wrap //-->
        </div><!--// CLOSE .container //-->
    </div><!--// CLOSE #main-container //-->
</div>

<?php  
endwhile; endif; 
?> 




<?php get_footer(); ?>