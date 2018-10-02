<?php
/**
 * Template Name: left 1 column
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





            <div class="inner-page-wrap has-left-sidebar has-one-sidebar row clearfix">
      
                <!-- OPEN page -->
                <div class="post-xxx page type-page status-publish hentry clearfix span8" id="xxx">
                                
                    <div class="page-content clearfix">
                        <h1 class="spb_heading spb_text_heading"><span>Privacy policy</span></h1>      
                        <p>All information provided by you is only used to ensure the best possible shopping experience. All information is strictly confidential. Your personal information will not be shared, circulated, nor modified in any way without your previous consent.</p>
                        <p>If you place an order with us, we request certain personal information. You must provide contact information (such as name, email and delivery address) and financial information (such as credit card number, expiration date and the 3 digit security code). We use this information for billing purposes and to complete your order. If we have trouble processing an order, we will use your contact information. Your telephone number is required for shipping purposes in case UPS needs to contact you regarding the delivery.</p>
                        <p>We use third-party web beacons (Google Analytics) from Google to help analyze where visitors go and what they do while visiting our website. We reserve the right to modify this privacy policy at any time, so please review it frequently. If we make significant changes to this policy, we will notify you here and by a notice on the website in general.</p>
                        <p>This was last updated on May 15 2012.</p>
                        <div class="blank_spacer span8 " style="height:40px;"></div>         
                    </div>                        
              
                <!-- CLOSE page -->
                </div>

        
          
                <aside class="sidebar left-sidebar span4">
                    <section id="nav_menu-5" class="widget widget_nav_menu clearfix">
                        <div class="widget-heading clearfix">
                            <h4><span>Online Shopping</span></h4>
                        </div>
                        <div class="menu-online-shopping-container">
                            <ul id="menu-online-shopping" class="menu">
                                <li id="menu-item-9279" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-9279 "><a href="http://neighborhood.swiftideas.net/shop/">Shop</a></li>
                                <li id="menu-item-9281" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-9281 "><a href="http://neighborhood.swiftideas.net/my-account/">My Account</a></li>
                                <li id="menu-item-9280" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-9280 "><a href="http://neighborhood.swiftideas.net/order-tracking/">Order Tracking</a></li>
                            </ul>
                        </div>
                    </section>   
                </aside> 

            </div><!--// WordPress Hook //-->
        </div><!--// CLOSE #page-wrap //-->
    </div><!--// CLOSE .container //-->
</div><!--// CLOSE #main-container //-->


<?php  
endwhile; endif; 
?> 




<?php get_footer(); ?>