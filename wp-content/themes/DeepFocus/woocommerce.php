<?php get_header(); ?>
	
<div id="content-full">
	<div id="hr">
		<div id="hr-center">
			<div id="intro">
				<div class="center-highlight">
				
					<div class="container">
						
						<?php get_template_part('includes/breadcrumbs'); ?>
						
					</div> <!-- end .container -->	
				</div> <!-- end .center-highlight -->
			</div>	<!-- end #intro -->	
		</div> <!-- end #hr-center -->
	</div> <!-- end #hr -->
			
	<div class="center-highlight">
		<div class="container">
	
			<div id="content-area" class="clearfix">
				
				<div id="left-area">
					
					<?php if (get_option('deepfocus_integration_single_top') <> '' && get_option('deepfocus_integrate_singletop_enable') == 'on') echo(get_option('deepfocus_integration_single_top')); ?>
					
					<?php woocommerce_content(); ?>
					
					<?php if (get_option('deepfocus_integration_single_bottom') <> '' && get_option('deepfocus_integrate_singlebottom_enable') == 'on') echo(get_option('deepfocus_integration_single_bottom')); ?>
					
					<?php if (get_option('deepfocus_show_pagescomments') == 'on') comments_template('', true); ?>
					
				</div> <!-- end #left-area -->
				
				<?php get_sidebar(); ?>

			</div> <!-- end #content-area -->

		</div> <!-- end .container -->
					
		<?php get_footer(); ?>