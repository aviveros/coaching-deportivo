<?php

	/* SHORTCODE FIX
	================================================== */
	
	function sf_shortcode_fix($content){   
	    $array = array (
	        '<p>[' => '[', 
	        ']</p>' => ']', 
	        ']<br />' => ']'
	    );
	
	    $content = strtr($content, $array);
	    return $content;
	}
	add_filter('the_content', 'sf_shortcode_fix');
	
	
	//function shortcode_botones() {
	 //return '<a class="sf-button medium accent slightlyroundedarrow " target="_self" href="#"><span>Medium button</span><span class="arrow"></span></a>';
	//}
	
	function shortcode_botones( $atts , $content) {
		if($atts['linkid']){
			return '<a class="sf-button medium accent slightlyroundedarrow " target="_self" href="'.get_permalink($atts['linkid']).'"><span>'.$content.'</span><span class="arrow"></span></a>';
		}
		else {
			return '<a class="sf-button medium accent slightlyroundedarrow " target="_self" href="'.$atts['link'].'"><span>'.$content.'</span><span class="arrow"></span></a>';
		}
	}

	add_shortcode('botones', 'shortcode_botones');




	add_filter('wp_handle_upload_prefilter','tc_handle_upload_prefilter');
	function tc_handle_upload_prefilter($file)
	{

		if (preg_match('/jpg|JPG|jpeg|JPEG|png|PNG|bmp|BMP|gif|GIF/',$file['tmp_name'])) {
		
		$img=getimagesize($file['tmp_name']);
		$minimum = array('width' => '770', 'height' => '350');
		$width= $img[0];
		$height =$img[1];

		if ($width < $minimum['width'] )
			return array("error"=>"La imagen es muy peque. Las medidas mínimas deben ser: Ancho {$minimum['width']}px  y alto {$minimum['height']}px. La imagen subida tiene un ancho de $width px");

		elseif ($height <  $minimum['height'])
			return array("error"=>"La imagen es muy peque.Las medidas mínimas deben ser: Ancho {$minimum['width']}px  y alto {$minimum['height']}px. La imagen subida tiene un alto de $height px");
		else
			return $file;
		}
		else {
			return $file;
		}
	}	


	function gallery_fix( ) {
		return '<style type="text/css">
					#gallery-1 {
					margin: auto;
					}
					#gallery-1 .gallery-item {
					float: left;
					margin-top: 10px;
					text-align: center;
					width: 29%;
					}
					#gallery-1 img {
					border: 2px solid #cfcfcf;
					}
					#gallery-1 .gallery-caption {
					margin-left: 0;
					}
					/* see gallery_shortcode() in wp-includes/media.php */
					</style>';
	}

	add_shortcode('galleryfix', 'gallery_fix');

function simple_menu() {
return '
	<li class="'.is_page_active(1313).'"><a href="'.get_page_link(1313).'">'. get_the_title(1313) .'</a></li>
	<li class="'.is_page_active(1174).'"><a href="'.get_page_link(1174).'">Diego Gutiérrez</a></li>
	<li class="'.is_page_active(1309).'"><a href="'.get_page_link(1309).'">Servicios</a></li>		
	<li class="'.is_page_active(1307).'"><a href="'.get_page_link(1307).'">Cursos y formación</a></li>
	<li class="'.is_page_active(1311).'"><a href="'.get_page_link(1311).'">Recursos</a></li>
	<li class="'.is_page_active(1356).'"><a href="'.get_page_link(1356).'">Blog y eventos</a></li>
	<li class="'.is_page_active(499).'"><a href="'.get_page_link(499).'">Contacto</a></li>
';
}


function form_subscription_top() {
return '
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
                                <input type="submit" id="btn-suscripcion-top" value="" />
                            </div>
                        </form>

                        </div>
                    </div>
                </div>
            </section>  
	';
}


//Custom login Logo
function custom_login() {
echo '
	<style type="text/css">
	h1 a {
	background:url('.get_bloginfo('template_directory').'/images/logo-diego-gutierrez-coaching-deportivo.png) 0 0 no-repeat;
	width:325px;
	height:100px;
	}
	</style>';
}
add_action('login_head', 'custom_login');




if ( function_exists( 'add_image_size' ) ) add_theme_support( 'post-thumbnails' );
if ( function_exists( 'add_image_size' ) ) { 
	//add_image_size( 'home_slides', 960, 336, true );
	//add_image_size( 'home_box', 232, 117, true );
	//add_image_size( 'inner_slides', 335, 197, true );
	//add_image_size( 'inner_header', 960, 264, true );

	add_image_size( 'post-featured', 770, 350, true );
	add_image_size( 'size-list', 290, 0, true );
	add_image_size( 'sidebar', 350, 0, true );
	add_image_size( 'thumb_testimonials', 126, 126, true );
	add_image_size( 'thumb_home', 350, 195, true );
	add_image_size( 'medium', 770, 0, true );
	add_image_size( 'newsletter', 563, 218, true );
}


function is_page_active ($id) {
	if (is_page($id)){
	return 'current-menu-item';
	}
}

 function coaching_widgets_init() {
    register_sidebar( array(
        'name' => __( 'Columna derecha', 'coaching' ),
        'id' => 'sidebar-1',
		'class'         => 'algo',
			'before_widget' => '<section id="%1$s" class="widget widget_text clearfix %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<div class="widget-heading clearfix"><h4><span>',
			'after_title'   => '</span></h4></div>'
    ) );
}
add_action( 'widgets_init', 'coaching_widgets_init' );

/*
<?php $args = array(
	'type'            => 'monthly',
	'limit'           => '',
	'format'          => 'html', 
	'before'          => '',
	'after'           => '',
	'show_post_count' => false,
	'echo'            => 1,
	'order'           => 'DESC'
); ?>
*/




// Custom Comments Callback
function html5blankcomments($comment, $args, $depth)
{
	$GLOBALS['comment'] = $comment;
	extract($args, EXTR_SKIP);

	if ( 'div' == $args['style'] ) {
		$tag = 'div';
		$add_below = 'comment';
	} else {
		$tag = 'li';
		$add_below = 'div-comment';
	}
?>
    <!-- heads up: starting < for the html tag (li or div) in the next line: -->
    <<?php echo $tag ?> <?php comment_class(empty( $args['has_children'] ) ? '' : 'parent') ?> id="comment-<?php comment_ID() ?>">
	<?php if ( 'div' != $args['style'] ) : ?>
	<div id="div-comment-<?php comment_ID() ?>" class="comment-body">
	<?php endif; ?>

	<div class="comment-wrap clearfix">
	<div class="comment-avatar">
	<?php //if ($args['avatar_size'] != 0) echo get_avatar( $comment, $args['180'] ); ?>
	<?php echo get_avatar( $comment, $args['100'] ); ?>

	<?php printf(__('<cite class="fn">%s</cite> <span class="says">says:</span>'), get_comment_author_link()) ?>
	</div>
	</div>
<?php if ($comment->comment_approved == '0') : ?>
	<em class="comment-awaiting-moderation"><?php _e('Your comment is awaiting moderation.') ?></em>
	<br />
<?php endif; ?>

	<div class="comment-meta commentmetadata"><a href="<?php echo htmlspecialchars( get_comment_link( $comment->comment_ID ) ) ?>">
		<?php
			printf( __('%1$s at %2$s'), get_comment_date(),  get_comment_time()) ?></a><?php edit_comment_link(__('(Edit)'),'  ','' );
		?>
	</div>

	<?php comment_text() ?>

	<div class="reply">
	<?php comment_reply_link(array_merge( $args, array('add_below' => $add_below, 'depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
	</div>
	<?php if ( 'div' != $args['style'] ) : ?>
	</div>
	<?php endif; ?>
<?php }



add_filter( 'body_class', 'coaching_class' );
function coaching_class( $classes ) {

	if (is_home() || is_page(1313) ) { $classes[] = 'home'; }
	if (is_page(1356) ) { $classes[] = 'blog'; }
	$classes[] = 'responsive-fluid';
	return $classes;
}



?>