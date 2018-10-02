<?php


get_header(); ?>




                         




<div class="clearfix" id="main-container">
    <!--// OPEN .container //-->
    <div class="container">
        <!--// OPEN #page-wrap //-->
        <div id="page-wrap">
            <div class="inner-page-wrap has-right-sidebar has-one-sidebar row clearfix">
                <!-- OPEN article -->


                <!-- OPEN page -->
                <div class="archive-page span8 clearfix">                                                                       
                    <div class="page-content clearfix">                                                                                             
                            <div class="blog-wrap">                                             
                                <!-- OPEN .blog-items -->
                                <ul class="blog-items row mini-items clearfix"> 


                                    <?php

                                    // set the "paged" parameter (use 'page' if the query is on a static front page)
                                    $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;

                                    // the query
                                    $the_query = new WP_Query( 'cat=&paged=' . $paged ); 
                                    ?>

                                    <?php if ( $the_query->have_posts() ) : ?>

                                    <?php
                                    // the loop
                                    while ( $the_query->have_posts() ) : $the_query->the_post(); 
                                    ?>



                                    <li class="blog-item span8 format-standard">
                                    <figure>
                                    <?php
                                        if(has_post_thumbnail()) {
                                            echo '<a class="link-to-post" href="'.get_permalink().'">';
                                            the_post_thumbnail('size-list');
                                            echo '</a>';                                    
                                        }
                                        else {
                                           echo '<a class="link-to-post" href="'.get_permalink ().'"><img src="'.get_bloginfo('template_url').'/images/sin-foto.png" alt=""></a>';
                                        }                                                               
                                    ?>
                                    </figure>


                                    <div class="blog-details-wrap">
                                        <h3 itemprop="name headline">
                                            <a href="<?php echo get_permalink (); ?>"><?php echo get_the_title(); ?></a>
                                        </h3>
                                        <div class="blog-item-details">
                                            Escrito por <?php the_author_meta( 'display_name' ); ?> el <?php echo get_the_time('j/m/Y'); ?> - <a href="<?php echo get_permalink (); ?>#comment-area"><i class="fa-comments"></i><span> <?php comments_popup_link( __( 'Comentar', 'coaching' ) , __( '1 comentario', 'coaching' ), __( '% comentarios', 'coaching' ) ); ?></span></a>
                                        </div>

                                        <div class="excerpt">
                                        <p><?php echo get_the_excerpt() ?></p>
                                        </div><a class="read-more" href="<?php echo get_permalink (); ?>">Continuar leyendo<i class="fa-angle-right"></i></a>
                                    </div>
                                    </li>







                                    

                                    <?php

                                    // next_posts_link() usage with max_num_pages
                                    
                                    
                                    ?>

                                    





<?php endwhile; ?>



                            <!-- CLOSE .blog-items -->
                                </ul>
                                
                            </div>


                        
                                        
                        <div class="pagination-wrap">
                            <ul class="pagenavi">
                                <li><?php next_posts_link( '<span class="">Artículos anteriores</span>', $the_query->max_num_pages ); ?></li>
                                <li><?php previous_posts_link( '<span class="">Artículos recientes</span>' ); ?></li>

                            </ul>
                        </div>
                        
                        <?php 
                        // clean up after the query and pagination
                        wp_reset_postdata(); 
                        ?>

                        <?php else:  ?>
                        <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
                        <?php endif; ?>



                    </div>                                                                                                              
                </div><!-- CLOSE page -->


                                      
 


            <?php get_sidebar(); ?>
                
            </div><!--// WordPress Hook //-->
            <!--// CLOSE #page-wrap //-->
        </div><!--// CLOSE .container //-->
    </div><!--// CLOSE #main-container //-->
</div>




















<?php get_footer(); ?>