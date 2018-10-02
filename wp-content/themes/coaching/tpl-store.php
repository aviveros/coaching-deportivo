<?php
/**
 * Template Name: store
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

                    <section id="text-2" class="widget widget_text clearfix widget_text">
                        
                        <div class="widget-heading clearfix">
                            <h4><span>Libros y Guías</span></h4>
                        </div>           
                        
                        <div class="textwidget">
                            <a href="<?php echo get_page_link(1438); ?>"><img src="<?php bloginfo('template_url'); ?>/images/recursos/libro.png" width="350" height="195" alt="Libro Coaching Deportivo" ></a>
                        </div>
                        <div class="textwidget" style="margin:20px 0 0 0; height:75px">
                            <p>Si eres coach, éste es tu libro. Si eres entrenador deportivo, éste es tu libro. Si eres deportista amateur o profesional, éste es tu libro.</p>
                            <p><a href="<?php echo get_page_link(1438); ?>">Más información</a></p>
                        
                        </div>        

                    </section>

                    <section id="categories-3" class="widget widget_text clearfix widget_categories">

                        <div class="widget-heading clearfix">
                            <h4><span>Guías</span></h4>
                        </div>
                        <ul>
			    <li class="cat-item"><a href="<?php echo get_page_link(1438); ?>">Libro de Coaching Deportivo</a></li>
                            <li class="cat-item"><a href="<?php echo get_page_link(1677); ?>"><?php echo get_the_title(1677); ?></a></li>
			    <li class="cat-item"><a href="<?php echo get_page_link(1675); ?>"><?php echo get_the_title(1675); ?></a></li>
			    <li class="cat-item"><a href="<?php echo get_page_link(1217); ?>"><?php echo get_the_title(1217); ?></a></li>

                        </ul>
                    </section>

                </aside>








                <aside class="sidebar right-sidebar span4"> 

                    <section id="text-2" class="widget widget_text clearfix widget_text">
                        
                        <div class="widget-heading clearfix">
                            <h4><span>Audio y Música</span></h4>
                        </div>           
                        
                        <div class="textwidget">
                            <a href="<?php echo get_page_link(1125); ?>"><img src="<?php bloginfo('template_url'); ?>/images/recursos/audio.jpg" width="350" height="195" alt="Audios Coaching Deportivo" ></a>
                        </div>
                        <div class="textwidget" style="margin:20px 0 0 0; height:75px">
                            <p>Música de relajación Deportiva. Cuando fue la última vez que rendiste al 100% y divirtiéndote? Consigue los audios que te ayudará a relajar tu mente.</p>

                        </div>        

                    </section>

                    <section class="widget widget_text clearfix widget_categories">

                        <div class="widget-heading clearfix">
                            <h4><span>Audio de relajación deportiva</span></h4>
                        </div>
                        <ul>
                            <li class="cat-item"><a href="<?php echo get_page_link(1125); ?>" >El Juego interior deportivo</a></li>
                            <li class="cat-item"><a href="<?php echo get_page_link(1211); ?>" >Un paseo por el río</a></li>
                            <li class="cat-item"><a href="<?php echo get_page_link(1216); ?>" >Un paseo por la playa</a></li>     

                        </ul>




                    </section>

                </aside>









                <aside class="sidebar right-sidebar span4"> 

                    <section id="text-2" class="widget widget_text clearfix widget_text">
                        
                        <div class="widget-heading clearfix">
                            <h4><span>Videos</span></h4>
                        </div>           
                        
                        <div class="textwidget">
                            <a href="https://www.youtube.com/watch?v=Th16Au-BnxM"><img src="<?php bloginfo('template_url'); ?>/images/recursos/video.jpg" width="350" height="195" alt="Videos de Coaching Deportivo" ></a>
                        </div>
                        <div class="textwidget" style="margin:20px 0 0 0; height:75px">
                            <p>Te explicamos en 2 minutos los conceptos básicos del coaching deportivo.</p>
                        </div>        

                    </section>

                    <section class="widget widget_text clearfix widget_categories">

                        <div class="widget-heading clearfix">
                            <h4><span>Videos</span></h4>
                        </div>
                        <ul>
                            <li class="cat-item"><a href="https://www.youtube.com/watch?v=401F-Ii9GSY">Entrevista Teledeporte: Motivación en el deporte </a></li>

<li class="cat-item"><a href="https://www.youtube.com/watch?v=1_75PWB4iiE">Expocoaching 2014: Las claves del éxito </a></li>

<li class="cat-item"><a href="https://www.youtube.com/watch?v=iD1iVeNkLTU">Coaching Deportivo. I Congreso Internacional de Fútbol Ciudad de Valencia </a></li>

                            <li class="cat-item"><a href="https://www.youtube.com/watch?v=xaygOBsjXLk">Entrevista Teledeporte: Coaching deportivo para deportista de élite </a></li>
                            
                            <li class="cat-item"><a href="https://www.youtube.com/watch?v=VcfOf0F5IOY">Entrevista en Telepacífico deportes (Colombia)</a></li>
                            

                        </ul>
                    </section>

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