<?php get_header(); ?>


    <div id="banner">
        <div class="container">
            <img src="<?php bloginfo('template_url'); ?>/images/eslogan-newsletter.png" alt="Suscríbete y te informaré de las últimas novedades de coaching deportivo" />
        </div>
    </div>


 </div> <!-- CLOSE .header-wrap -->






            <section id="text-34" class="widget widget_text clearfix">
                <div class="textwidget">
                    <div id="formulario-horizontal">
                        <div class="container"> 

                        <form accept-charset="UTF-8" action="http://coachingdeportivo.us9.list-manage1.com/subscribe/post" method="GET">

                            <input type="hidden" name="u" value="ddf4c38a3ef23a5654f78c5e3">
                            <input type="hidden" name="id" value="3e662d3cc3">

                            <div class="texto"><h2>¿Quieres mejorar en el deporte?</h2><p>Suscríbete y te informaré de las últimas novedades de coaching deportivo</p></div>
                            
                            <div class="infusion-field">
                                <label for="inf_field_FirstName">Nombre</label>
                                <input id="MERGE1" name="MERGE1" type="text" />
                            </div>
                            <div class="infusion-field">
                                <label for="inf_field_Email">Email</label>
                                <input id="MERGE0" name="MERGE0" type="text" />
                            </div>
                            <div class="infusion-submit">
                                <input type="submit" value="" />
                            </div>
                        </form>

                        </div>
                    </div>
                </div>
            </section>        
 









                                              






























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
								   $i = 0;
		                           $my_query = new WP_Query( "posts_per_page=10" );
		                           if ( $my_query->have_posts() ) { 
		                               while ( $my_query->have_posts() ) { 
		                                   $my_query->the_post();	
											$i ++;								
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

                               			}
                           			}
									wp_reset_postdata();
                           		?>										
							<!-- CLOSE .blog-items -->
								</ul>
								
							</div>
						
										
						<div class="pagination-wrap">
							<ul class="pagenavi">
								<li><span class="current">1</span></li>
							</ul>
											
						</div>
						
					</div>																												
				</div><!-- CLOSE page -->


						              
 


			<?php get_sidebar(); ?>
                
            </div><!--// WordPress Hook //-->
            <!--// CLOSE #page-wrap //-->
        </div><!--// CLOSE .container //-->
    </div><!--// CLOSE #main-container //-->
</div>




















<?php get_footer(); ?>