<div id="breadcrumbs">
		
	<?php if(function_exists('bcn_display')) { bcn_display(); } 
		  else { ?>
				<a href="<?php echo home_url(); ?>"><?php esc_html_e('Home','DeepFocus') ?></a> <span class="raquo">&raquo;</span>
				
				<?php if( is_tag() ) { ?>
					<?php esc_html_e('Posts Tagged ','DeepFocus') ?><span class="raquo">&quot;</span><?php single_tag_title(); echo('&quot;'); ?>
				<?php } elseif (is_day()) { ?>
					<?php esc_html_e('Posts made in','DeepFocus') ?> <?php the_time('F jS, Y'); ?>
				<?php } elseif (is_month()) { ?>
					<?php esc_html_e('Posts made in','DeepFocus') ?> <?php the_time('F, Y'); ?>
				<?php } elseif (is_year()) { ?>
					<?php esc_html_e('Posts made in','DeepFocus') ?> <?php the_time('Y'); ?>
				<?php } elseif (is_search()) { ?>
					<?php esc_html_e('Search results for','DeepFocus') ?> <?php the_search_query() ?>
				<?php } elseif (is_single()) { ?>
					<?php $category = get_the_category();
						  $catlink = get_category_link( $category[0]->cat_ID );
						  echo ('<a href="'.esc_url($catlink).'">'.esc_html($category[0]->cat_name).'</a> '.'<span class="raquo">&raquo;</span> '.get_the_title()); ?>
				<?php } elseif (is_category()) { ?>
					<?php single_cat_title(); ?>
				<?php } elseif (is_author()) { ?>
					<?php $curauth = get_userdata($post->post_author); ?>
					<?php esc_html_e('Posts by ','DeepFocus'); echo ' ',$curauth->nickname; ?>
				<?php } elseif (is_page()) { ?>
					<?php wp_title(''); ?>
				<?php }; ?>
<a href= "http://www.linkedin.com/pub/diego-guti%C3%A9rrez-del-pozo/45/7a5/3b7"><img align= "right" src="http://coachingdeportivo.com.mialias.net/wp-content/uploads/2013/02/linkedin-logo.png"></img></a>					
<a href= "http://www.youtube.com/user/diegocoaching"><img align= "right" src="http://coachingdeportivo.com.mialias.net/wp-content/uploads/2013/02/logo_youtube.png"></img></a>
<a href= "https://twitter.com/diegocoaching"><img align= "right" src="http://coachingdeportivo.com.mialias.net/wp-content/uploads/2013/02/png_twitter-logo-button-e1361875494851.png"></img></a>
<a href= "http://www.facebook.com/diegocoaching"><img align= "right" src="http://coachingdeportivo.com.mialias.net/wp-content/uploads/2013/02/logo_facebook.png"></img></a>
	<?php }; ?>

</div> <!-- end #breadcrumbs -->