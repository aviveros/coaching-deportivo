<?php get_header(); ?>




       
 









                                              






























<div class="clearfix" id="main-container">
    <!--// OPEN .container //-->
    <div class="container">
        <!--// OPEN #page-wrap //-->
        <div id="page-wrap">
            <div class=
            "inner-page-wrap has-right-sidebar has-one-sidebar row clearfix">
                <!-- OPEN article -->
				<?php get_sidebar(); ?>
				
				
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>                                                              
                <article class=
                "post-8687 post type-post status-publish format-standard has-post-thumbnail hentry category-desarrollo-de-negocio category-marketing tag-emprendedores-2 tag-estrategias-de-marketing-online tag-laura-ribas tag-marketing-online tag-plan-de-marketing clearfix span8"
                id="8687">
                    <div class="page-content clearfix">
                        <div class="heading-text">
                            <h1 class="spb_heading"><?php the_title(); ?></h1>
                        </div>
                        <section class="article-body-wrap">
                            <div class="body-text clearfix">
                                <!--<p>
                                    <a href="http://www.lauraribas.com/wp-content/uploads/2014/11/12propositos.jpg">
                                    <img alt="12propositos" class="alignnone size-full wp-image-8688" height="256" src="http://www.lauraribas.com/wp-content/uploads/2014/11/12propositos.jpg"width="645"></a>
                                </p>-->

                                <?php if ( function_exists('has_post_thumbnail') and has_post_thumbnail() ): ?>
                                    <p><?php the_post_thumbnail( 'size-full' ); ?></p>
                                <?php endif; ?>

                                <?php the_content(); ?>                             
   
                            </div>


                            <!-- share buttons -->
                            
                        </section>





                    </div><!-- CLOSE article -->
                </article>
                <?php endwhile; endif; ?> 



            
                
            </div><!--// WordPress Hook //-->
            <!--// CLOSE #page-wrap //-->
        </div><!--// CLOSE .container //-->
    </div><!--// CLOSE #main-container //-->
</div>




















<?php get_footer(); ?>