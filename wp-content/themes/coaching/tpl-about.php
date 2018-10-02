<?php
/**
 * Template Name: about
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
                        <div class="row">
                            <div class="spb_content_element span12 centrado spb_text_column">
                            <div class="spb_wrapper clearfix">
                                    <h1 class="spb_heading spb_text_heading"> <span><?php the_title(); ?></span> </h1>

 									<!--<p class="impact-text">-->
                                    <?php the_field('caja_1'); ?>                                    
                                    


                                </div>
                            </div>
                        </div>
                        

                        <div class="row">
                            <div class="spb_content_element span4 spb_text_column">
                                <div class="spb_wrapper clearfix">
                                    <?php the_field('caja_2'); ?>
                                </div>
                            </div>
                            <div class="spb_content_element span4 spb_text_column">
                                <div class="spb_wrapper clearfix">
                                    <?php the_field('caja_3'); ?>
                                </div>
                            </div>
                            <div class=
                            "spb_content_element span4 spb_text_column">
                                <div class="spb_wrapper clearfix">
                                    
                                    <?php the_field('caja_4'); ?>
                                </div>
                            </div>
                        </div>

                        <div class="blank_spacer span12" style="height:60px;"></div>


                        <div class="row">
                            <div class=
                            "spb_content_element span12 titulo spb_text_column pb-margin-bottom">
                            <div class="spb_wrapper clearfix">
                                    <h4 class="spb_heading spb_text_heading">
                                        <span>Filosofía</span>
                                    </h4>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class=
                            "spb_content_element span4 spb_text_column">
                                <div class="spb_wrapper clearfix">
                                    <?php the_field('caja_5'); ?>
                                </div>
                            </div>
                            <div class=
                            "spb_content_element span4 spb_text_column pb-margin-bottom">
                            <div class="spb_wrapper clearfix">
                                    <?php the_field('caja_6'); ?>
                                </div>
                            </div>
                            <div class=
                            "spb_content_element span4 spb_text_column pb-margin-bottom">
                            <div class="spb_wrapper clearfix">
                                    <?php the_field('caja_7'); ?>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class=
                            "spb_divider thin spb_content_element alt-bg span12">
                            </div>
                        </div>

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