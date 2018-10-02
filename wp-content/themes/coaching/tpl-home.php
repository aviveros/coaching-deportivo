
<?php
/**
 * Template Name: home
 *
 */ get_header(); ?>







						
							
			<!--// OPEN #main-container //-->
			<div id="main-container" class="clearfix" >
				
				
								
				<!--// OPEN .container //-->
				<div class="container" >
				
					<!--// OPEN #page-wrap //-->
					<div id="page-wrap" >	


						<div class="inner-page-wrap has-right-sidebar has-one-sidebar row clearfix" style="margin-top:10px">
								
							
							<!-- OPEN page -->
								<div class="post-279 page type-page status-publish hentry clearfix" id="279">
								
										
								<div class="page-content clearfix">

									
									<div class="row">
										<div class="spb_clients_widget spb_content_element span12 clientes-home">
											<div class="spb_wrapper clients-wrap">
												<h4 class="spb_heading spb_text_heading"><span>Avalado por...</span></h4> 
												






													<ul class="clients-items clearfix">
														<li class="clearfix client-item">
																<figure>
																	<a href="<?php echo get_page_link(531); ?>"><img itemprop="image" src="<?php bloginfo('template_url'); ?>/images/testimonio-vicente-del-bosque.png" width="91" height="91" /></a>
																</figure>
																<h4 class="team-member-name"><a href="<?php echo get_page_link(531); ?>">Vicente del Bosque</a></h4>
																<h4 class="team-member-position">Entrenador Profesional de Fútbol </h4>																
														</li>
														<li class="clearfix client-item">
																<figure>
																	<a href="<?php echo get_page_link(531); ?>"><img itemprop="image" src="<?php bloginfo('template_url'); ?>/images/testimonio-andres-iniesta.png" width="91" height="91" /></a>
																</figure>
																<h4 class="team-member-name"><a href="<?php echo get_page_link(531); ?>">Andrés Iniesta</a></h4>
																<h4 class="team-member-position">Jugador Profesional de Fútbol.</h4>																
														</li>
														<li class="clearfix client-item">
																<figure>
																	<a href="<?php echo get_page_link(531); ?>"><img itemprop="image" src="<?php bloginfo('template_url'); ?>/images/testimonio-j-hombrados.png" width="91" height="91" /></a>
																</figure>
																<h4 class="team-member-name"><a href="<?php echo get_page_link(531); ?>">J Hombrados</a></h4>
																<h4 class="team-member-position">Jugador Profesional de Balonmano</h4>																
														</li>
														<li class="clearfix client-item">
																<figure>
																	<a href="<?php echo get_page_link(531); ?>"><img itemprop="image" src="<?php bloginfo('template_url'); ?>/images/testimonio-xavi-arnau.png" width="91" height="91" /></a>
																</figure>
																<h4 class="team-member-name"><a href="<?php echo get_page_link(531); ?>">Xavi Arnau</a></h4>
																<h4 class="team-member-position">Entrenador Profesional de Hockey Hierba</h4>																
														</li>
														<li class="clearfix client-item">
																<figure>
																	<a href="<?php echo get_page_link(531); ?>"><img itemprop="image" src="<?php bloginfo('template_url'); ?>/images/testimonio-xavi-rabaseda.png" width="91" height="91" /></a>
																</figure>
																<h4 class="team-member-name"><a href="<?php echo get_page_link(531); ?>">Xavi Rabaseda</a></h4>
																<h4 class="team-member-position">Jugador Profesional de Baloncesto</h4>																
														</li>
														<li class="clearfix client-item">
																<figure>
																	<a href="<?php echo get_page_link(531); ?>"><img itemprop="image" src="<?php bloginfo('template_url'); ?>/images/mas-testimonios.png" width="91" height="91" /></a>
																</figure>
																<h4 class="team-member-name"><a href="<?php echo get_page_link(531); ?>">Ver todos ></a></h4>
														</li>																																																								
													</ul>



											</div> 
										</div> 
									</div>


					               <aside class="sidebar right-sidebar span4 home-block"> 
					                    <section id="text-2" class="widget widget_text clearfix widget_text home-block">					                        
					                        <div class="widget-heading clearfix">
					                            <h4><span>Recursos</span></h4>
					                        </div>           
					                        
					                        <div class="textwidget">
					                            <a href="<?php echo get_page_link(1311); ?>"><img src="http://www.coachingdeportivo.com/wp-content/uploads/2016/11/icono-recursos-1.png" width="350" height="195" alt="Recrusos" ></a>
					                        </div>
					                        <div class="textwidget" style="margin:20px 0 0 0;">
					                            <p>Libros, audios, manuales y mucho más en esta sección.</p>                            
					                        </div>        
					                    </section>
					                </aside>
					               <aside class="sidebar right-sidebar span4 home-block"> 
					                    <section id="text-2" class="widget widget_text clearfix widget_text home-block">					                        
					                        <div class="widget-heading clearfix">
					                            <h4><span>Servicios</span></h4>
					                        </div>           
					                        
					                        <div class="textwidget">
					                            <a href="<?php echo get_page_link(1307); ?>"><img src="<?php bloginfo('template_url'); ?>/images/recursos/servicios.png" width="350" height="195" alt="Recrusos" ></a>
					                        </div>
					                        <div class="textwidget" style="margin:20px 0 0 0;">
					                            <p>Procesos personalizados de Coaching para deportistas y entrenadores de élite.</p>                            
					                        </div>        
					                    </section>
					                </aside>
									<?php
										$args = array(
														'post_status'=>'publish',
														'post_type'=>array(TribeEvents::POSTTYPE),
														'posts_per_page'=>1,
														//order by startdate from newest to oldest
														'meta_key'=>'_EventStartDate',
														'orderby'=>'_EventStartDate',
														'order'=>'DESC',
														//required in 3.x
														'eventDisplay'=>'custom'
													);
										$get_posts = null;
										$get_posts = new WP_Query();
										$get_posts->query($args);

										if($get_posts->have_posts()) : while($get_posts->have_posts()) : $get_posts->the_post();
										?>
											   <aside class="sidebar right-sidebar span4 home-block"> 
													<section id="text-2" class="widget widget_text clearfix widget_text home-block">					                        
														<div class="widget-heading clearfix">
															<h4><span>Próximo evento</span></h4>
														</div>           
														
														<div class="textwidget">					                        																	
														<?php
															if(has_post_thumbnail()) {
																echo '<a class="" href="'.get_permalink().'">';
																the_post_thumbnail('thumb_home');
																echo '</a>';                                    
															}
															else {
															   echo '<a class="link-to-post" href="'.get_permalink ().'"><img src="'.get_bloginfo('template_url').'/images/recursos/sin-foto.png" width="350" height="150" alt="'.get_the_title().'"></a>';
															} 
														?>
														</div>
														<div class="textwidget" style="margin:20px 0 0 0;">
															<p><?php echo get_the_title(); ?></p>                            
														</div>        
													</section>
												</aside>
										<?php							
										endwhile;
										endif;
										wp_reset_postdata();
									?>


<div class="clearfix"></div>
									
									
					               <aside class="sidebar right-sidebar span4 home-block"> 
					                    <section id="text-2" class="widget widget_text clearfix widget_text home-block">					                        
					                        <div class="widget-heading clearfix">
					                            <h4><span>Formación</span></h4>
					                        </div>           
					                        
					                        <div class="textwidget">
					                            <a href="<?php echo get_page_link(1307); ?>"><img src="<?php bloginfo('template_url'); ?>/images/recursos/formacion.png" width="350" height="195" alt="Recrusos" ></a>
					                        </div>
					                        <div class="textwidget" style="margin:20px 0 0 0;">
					                            <p>Postgrados Universitarios y cursos de Coaching Deportivo</p>                            
					                        </div>        
					                    </section>
					                </aside>
					               <aside class="sidebar right-sidebar span4 home-block"> 
					                    <section id="text-3" class="widget widget_text clearfix widget_text home-block">					                        
					                        <div class="widget-heading clearfix">
					                            <h4><span>Videos</span></h4>
					                        </div>           
					                        
					                        <div class="textwidget">
					                            <a href="<?php echo get_page_link(1311); ?>"><img src="<?php bloginfo('template_url'); ?>/images/recursos/video.jpg" width="350" height="195" alt="Recrusos" ></a>
					                        </div>
					                        <div class="textwidget" style="margin:20px 0 0 0;">
					                            <p>Los últimos videos de Coaching Deportivo</p>                            
					                        </div>        
					                    </section>
					                </aside>

									<?php
									$my_query = new WP_Query( "posts_per_page=1" );
									if ( $my_query->have_posts() ) { 
									   while ( $my_query->have_posts() ) { 
										   $my_query->the_post();										
									?>
										   <aside class="sidebar right-sidebar span4 home-block"> 
												<section id="text-2" class="widget widget_text clearfix widget_text home-block">					                        
													<div class="widget-heading clearfix">
														<h4><span>Novedades</span></h4>
													</div>           
													
													<div class="textwidget">					                        																	
													<?php
														if(has_post_thumbnail()) {
															echo '<a class="" href="'.get_permalink().'">';
															the_post_thumbnail('thumb_home');
															echo '</a>';                                    
														}
														else {
														   echo '<a class="link-to-post" href="'.get_permalink ().'"><img src="'.get_bloginfo('template_url').'/images/recursos/sin-foto.png" width="350" height="150" alt="'.get_the_title().'"></a>';
														} 
													?>
													</div>
													<div class="textwidget" style="margin:20px 0 0 0;">
														<p><?php echo get_the_title(); ?></p>                            
													</div>        
												</section>
											</aside>
									<?php

									   }
									}                           
									wp_reset_postdata(); 						   						
									?>						   







									

									
								</div>
								
									
							
							<!-- CLOSE page -->
							</div>

								
							
						</div>
						<!--// WordPress Hook //-->
          
					<!--// CLOSE #page-wrap //-->      
					</div>
        
				<!--// CLOSE .container //-->
				</div>

			<!--// CLOSE #main-container //-->
			</div>
      

	<?php //get_sidebar(); ?>
	

<?php get_footer(); ?>