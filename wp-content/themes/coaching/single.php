<?php get_header(); ?>




<div class="clearfix" id="main-container">
    <!--// OPEN .container //-->
    <div class="container">
        <!--// OPEN #page-wrap //-->
        <div id="page-wrap">
            <div class="inner-page-wrap has-right-sidebar has-one-sidebar row clearfix">
                <!-- OPEN article -->
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>                                                              
                <article class="post-8687 post type-post status-publish format-standard has-post-thumbnail hentry category-desarrollo-de-negocio category-marketing tag-emprendedores-2 tag-estrategias-de-marketing-online tag-laura-ribas tag-marketing-online tag-plan-de-marketing clearfix span8"
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
                                    <p><?php the_post_thumbnail( 'post-featured' ); ?></p>
                                <?php endif; ?>
								<p>&nbsp</p>
                                <?php the_content(); ?>                             
   
                            </div>



                            <section class="widget widget_text clearfix" id="text-31">
                                <div class="textwidget">
                                    <div id="formulario-post">
                                        <h2> ¿Quieres mejorar en el deporte? </h2>
                                        <p>
                                            Apúntate y recibe consejos y
                                            recursos - Es GRATIS:
                                        </p>
                                        <form accept-charset="UTF-8" action="http://coachingdeportivo.us9.list-manage1.com/subscribe/post" class="infusion-form" method="GET">

                                            <input type="hidden" name="u" value="ddf4c38a3ef23a5654f78c5e3">
                                            <input type="hidden" name="id" value="3e662d3cc3">                                                                 
                                            <div class="infusion-field">
                                                <label for="inf_field_FirstName">Nombre</label>
                                                <input id="MERGE1" name="MERGE1" type="text" />
                                            </div>
                                            <div class="infusion-field">
                                                <label for="inf_field_Email">Email</label>
                                                <input id="MERGE0" name="MERGE0" type="text" />
                                            </div>

                                            <div class="infusion-submit">
                                                <input type="submit" value="" id="btn-suscripcion-post">
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </section>




                            <div class="author-info-wrap clearfix">
                                <div class="author-avatar">
                                    <img alt='' class='avatar avatar-164 photo' height='164' src='<?php bloginfo('template_url'); ?>/images/foto-diego-guiterrez-avatar.jpg'
                                    width='164'>
                                </div>
                                <div class="post-info">
                                    <div class="author-name">
                                        <span>Acerca de</span><a href="#"><span>Diego Gutiérrez</span></a>
                                    </div>
                                    <div class="descripcion">
                                        <em>Coach de entrenadores y deportistas de élite. </em>
                                        <em>Director del Experto en Coaching Deportivo en la Universidad Camilo José Cela de Madrid</em>
                                        <em>Doctor en Ciencias de la Actividad Física y del Deporte</em>
                                    </div>
                                </div>
                            </div>



















                            <div class="tags-link-wrap clearfix">
                                <div class="tags-wrap">
                                    <div class="post-categories">
                                        Categorias: <?php the_category(', '); ?>
                                    </div>
                                    <div>
                                        Etiquetas:<span class="tags"><?php the_tags( __( 'Tags: ', 'html5blank' ), ', ', '<br>'); // Separated by commas with a line break at the end ?></span>
                                    </div>
                                </div>
                                <div class="comments-likes">
                                    
                                    <div class="fecha">
                                        <i class="icon-calendar"></i>
                                        25/11/2014
                                    </div>
                                </div>
                            </div>

                            <!-- share buttons -->
                            
                        </section>

                        <!-- comentarios -->
                        <?php comments_template( '', true );  ?>



                    </div><!-- CLOSE article -->
                </article>
                <?php endwhile; endif; ?> 



            <?php get_sidebar(); ?>
                
            </div><!--// WordPress Hook //-->
            <!--// CLOSE #page-wrap //-->
        </div><!--// CLOSE .container //-->
    </div><!--// CLOSE #main-container //-->
</div>




















<?php get_footer(); ?>