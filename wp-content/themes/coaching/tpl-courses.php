<?php
/**
 * Template Name: courses
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
                            <h4><span>Formación Universitaria</span></h4>
                        </div>           
                        
                        <div class="textwidget">
                            <a href="<?php echo get_page_link(1409); ?>"><img src="<?php bloginfo('template_url'); ?>/images/recursos/master.jpg" width="350" height="195" alt="Máster Coaching Deportivo" ></a>
                        </div>
                        <div class="textwidget" style="margin:20px 0 0 0; height:177px;">
                            <p>Postgrado universitario de Experto en Coaching Deportivo en la modalidad PRESENCIAL y ONLINE (a distancia) en la Universidad Camilo José Cela. Infórmate ya!</p>                            
                            <p>
                                <a class="sf-button medium accent slightlyroundedarrow " target="_self" href="<?php echo get_page_link(1409); ?>">
                                    <span>Más información de los cursos</span>
                                    <span class="arrow"></span>
                                </a>
                            </p>                            
                        </div>        


                    </section>

                    <section id="categories-3" class="widget widget_text clearfix widget_categories">

                        <div class="widget-heading clearfix">
                            <h4><span>Formaciones realizadas</span></h4>
                        </div>
                        <ul>
                            <li class="cat-item"><a href="<?php echo get_page_link(1656); ?>" >Universidades</a></li>
                            <li class="cat-item"><a href="<?php echo get_page_link(1658); ?>" >Clubes</a></li>
                            <li class="cat-item"><a href="<?php echo get_page_link(1660); ?>" >Empresas</a></li>
                        </ul>
                    </section>
					

                </aside>








                <aside class="sidebar right-sidebar span4"> 

                    <section id="text-2" class="widget widget_text clearfix widget_text">
                        
                        <div class="widget-heading clearfix">
                            <h4><span>Talleres Coaching Deportivo</span></h4>
                        </div>           
                        
                        <div class="textwidget">
                            <a href="<?php echo get_page_link(1417); ?>"><img src="<?php bloginfo('template_url'); ?>/images/recursos/cursos.jpg" width="350" height="195" alt="Cursos Coaching Deportivo" ></a>
                        </div>
                        <div class="textwidget" style="margin:20px 0 0 0; height:177px;">
                            <p>Diego Gutiérrez, estudiando los objetivos del cliente, ofrece talleres y seminarios creados a la medida del Club, Federación o empresa.<br><br></p>
                            <p>
                                <a class="sf-button medium accent slightlyroundedarrow " target="_self" href="<?php echo get_page_link(1417); ?>">
                                    <span>Más información de los talleres</span>
                                    <span class="arrow"></span>
                                </a>
                            </p>                               
                        </div>        

                    </section>
                    <section id="categories-3" class="widget widget_text clearfix widget_categories">

                        <div class="widget-heading clearfix">
                            <h4><span>Talleres</span></h4>
                        </div>
                        <ul>
                            <li class="cat-item"><a href="<?php echo get_page_link(1549); ?>" >Motivando a mi empresa, mi empresa gana y yo disfruto en mi empresa</a></li>
                            <li class="cat-item"><a href="<?php echo get_page_link(1550); ?>" >Trabajando en equipo</a></li>
                            <li class="cat-item"><a href="<?php echo get_page_link(1551); ?>" >Taller vivencial para aumentar mi inteligencia emocional y social en mi equipo deportivo o empresa.</a></li>
                            <li class="cat-item"><a href="<?php echo get_page_link(1552); ?>" >Liderando equipos</a></li>      
                        </ul>
                    </section>                    


                </aside>









                <aside class="sidebar right-sidebar span4"> 

                    <section id="text-2" class="widget widget_text clearfix widget_text">
                        
                        <div class="widget-heading clearfix">
                            <h4><span>Eventos Coaching Deportivo</span></h4>
                        </div>           
                        
                        <div class="textwidget">
                            <a href="/eventos/"><img src="<?php bloginfo('template_url'); ?>/images/recursos/conferencias.jpg" width="350" height="195" alt="Conferencias Coaching Deportivo" ></a>
                        </div>
                        <div class="textwidget" style="margin:20px 0 0 0; height:177px;">
                            <p>Diego Gutiérrez ha participado como ponente en infinidad de Congresos Nacionales e Internacionales, Clinics Deportivos y Másters Universitarios.<br><br></p>
                            <p>
                                <a class="sf-button medium accent slightlyroundedarrow " target="_self" href="/eventos/">
                                    <span>Próximos eventos <?php echo date('Y'); ?></span>
                                    <span class="arrow"></span>
                                </a>
                            </p>                             
                        </div>        

                    </section>

                    <section id="categories-3" class="widget widget_text clearfix widget_categories">

                        <div class="widget-heading clearfix">
                            <h4><span>Conferencias </span></h4>
                        </div>
                        <ul>
                            <li class="cat-item"><a href="<?php echo get_page_link(1557); ?>" >La fórmula del éxito</a></li>
                            <li class="cat-item"><a href="<?php echo get_page_link(1558); ?>" >Cómo establecer mis metas y alcanzar la excelencia deportiva y profesional</a></li>
                            <li class="cat-item"><a href="<?php echo get_page_link(1559); ?>" >Cambia tus creencias y cambia tu vida. </a></li>
                            <li class="cat-item"><a href="<?php echo get_page_link(1560); ?>" >El Coaching Deportivo: una herramienta para aumentar mi rendimiento</a></li>
                            <li class="cat-item"><a href="<?php echo get_page_link(1561); ?>" >Cómo optimizar mis recursos mentales para conseguir mis metas</a></li>    
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