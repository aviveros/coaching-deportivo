<?php

//echo 'padre'.$post->post_parent;
//echo 'actual'.$post->ID;	
echo '<style>




	</style>';

if (is_page() and !is_page('blog')){
	echo '<aside class="sidebar left-sidebar span4">';
	echo '	<section class="widget widget_text clearfix widget_archive" id="text-999">
									<div class="widget-heading clearfix">
										<h4>
											<span><a href="'.get_permalink($post->post_parent).'" >'.get_the_title($post->post_parent).'</a></span>
										</h4>
									</div>
									<ul>
									';
									
									

  if($post->post_parent)
	$children = wp_list_pages("title_li=&child_of=".$post->post_parent."&echo=0&depth=1");
  else 
	$children = wp_list_pages("title_li=&child_of=".$post->ID."&echo=0");
	if ($children) {
	  echo '<ul>';
	  echo $children;
	  echo '</ul>';
	}

  



	echo '										</ul>
								</section>';
echo '</aside>';									
}
else {
?>
<aside class="sidebar right-sidebar span4">	

<?php
	/* When we call the dynamic_sidebar() function, it'll spit out
	 * the widgets for that widget area. If it instead returns false,
	 * then the sidebar simply doesn't exist, so we'll hard-code in
	 * some default sidebar stuff just in case.
	 */

	if ( ! dynamic_sidebar( 'sidebar-1' ) ) : ?>
	


<?php endif; // end primary widget area ?>




<?php //echo  wp_get_archives( array( 'type' => 'yearly', 'limit' => 12 ) ); 
/*
echo '								<section class="widget widget_text clearfix widget_archive" id="text-999">
									<div class="widget-heading clearfix">
										<h4>
											<span>Archivo</span>
										</h4>
									</div>

										<ul>
											<li>
												<a href="'.get_bloginfo('url').'/2014/">2014</a>
											</li>
											<li>
												<a href="'.get_bloginfo('url').'/2013/">2013</a>
											</li>
											<li>
												<a href="'.get_bloginfo('url').'/2012/">2012</a>
											</li>
										</ul>
								</section>';
*/

?>



</aside>
<?php } ?>
