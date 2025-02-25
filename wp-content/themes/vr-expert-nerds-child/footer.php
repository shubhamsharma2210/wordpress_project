<?php
   $footer_logo = get_field('footer_logo','option');
   $first_menu_heading = get_field('first_menu_heading','option');
   $news_url = get_field('news_url','option');
   $second_menu_heading = get_field('second_menu_heading','option');
   $revies_url = get_field('revies_url','option');
   $third_menu_heading = get_field('third_menu_heading','option');
   $videos_url = get_field('videos_url','option');
   $fourth_menu_heading = get_field('fourth_menu_heading','option');
   $xr_database_url = get_field('xr_database_url','option');
   $fifth_menu_heading = get_field('fifth_menu_heading','option');
   $buyers_guide_url = get_field('buyers_guide_url','option');
   $copyright_text = get_field('copyright_text','option');
  $footer_first_row_repeater = get_field('footer_first_row_repeater', 'option');
   ?>
   
<footer class="footer">
<input type="hidden" id="url" value="<?php echo get_site_url(); ?>/wp-admin/admin-ajax.php"> 
    <!-- section 1 -->
<?php if($footer_first_row_repeater){  ?>
<section class="buyers-guidesec">
    
   <div class="byersguide-wrap">
    <?php while(the_repeater_field('footer_first_row_repeater','option')){ 
         $site_homepage_heading = get_sub_field('site_homepage_heading','option');
         $site_homepage_text = get_sub_field('site_homepage_text','option'); 
         $button_text = get_sub_field('button_text','option');
         $button_url = get_sub_field('button_url','option'); ?>
      <div class="buyers-txt">
         <div class="txt-w">
            <h3 class="HeadingH3-25-bold"><?php echo $site_homepage_heading; ?></h3>
            <p class="font-18text "><?php echo $site_homepage_text; ?></p>
            <div class="font-20text ">
               <a href="<?php echo $button_url; ?>" class="button-buyers" aria-label="Button Url">
                  <?php echo $button_text; ?>
                  <span>
                     <svg xmlns="http://www.w3.org/2000/svg" width="25" height="18" viewBox="0 0 25 18">
                        <path id="right-arrow"
                           d="M16.835,4.945a.868.868,0,0,0-1.26,0,.926.926,0,0,0,0,1.277l6.389,6.542H.882a.888.888,0,0,0-.882.9.9.9,0,0,0,.882.916H21.963l-6.389,6.529a.942.942,0,0,0,0,1.29.868.868,0,0,0,1.26,0l7.9-8.09a.9.9,0,0,0,0-1.277Z"
                           transform="translate(0 -4.674)" fill="#023047" />
                     </svg>
                  </span>
               </a>
            </div>
         </div>
      </div>
      <?php  } ?>
      <!-- items 1 -->
      
   </div>
   
</section>
<?php }

$social_connection_heading = get_field('social_connection_heading','option')?get_field('social_connection_heading','option'):'Follow VR NERDS';
$follow_vr_nerds_heading = get_field('follow_vr_nerds_heading','option')?get_field('follow_vr_nerds_heading','option'):'Follow VR NERDS';
$social_media_heading = get_field('social_media_heading','option')?get_field('social_media_heading','option'):'Follow VR NERDS on social media'; ?>
<!-- section 1 end  -->
<!-- icon section start  -->
<section class="Follow-NERDS">
   <div class="cst-container">
      <div class="mailchimp-form text-center">
         <div class="Flow-txt">
            <h4 class="HeadingH3-25-bold"><?php echo $social_connection_heading; ?></h4>
            <p><?php echo $follow_vr_nerds_heading; ?></p>
         </div>
         <div class="position-relative">
            <?php echo do_shortcode('[mc4wp_form id="252"]'); ?>
         </div>
      </div>
      <?php $social_media_repeater = get_field('social_media_repeater','option'); 
      if($social_media_repeater){?> 
      <div class="follow-nerds-icon">
         <h3 class=" font-20text"><?php echo $social_media_heading; ?></h3>
         <ul class="footer-Social">
            <?php while(the_repeater_field('social_media_repeater','option')){ 
                $social_media_icon = get_sub_field('social_media_icon','option')?get_sub_field('social_media_icon','option'):''; 
                $social_media_url = get_sub_field('social_media_url','option')?get_sub_field('social_media_url','option'):'#'; ?>
            <li>
               <a href="<?php echo $social_media_url; ?>" target="_blank" aria-label="Site Social logo"><img src="<?php echo $social_media_icon; ?>" alt="<?php echo $social_media_heading; ?>"/></a>
            </li>
           <?php } ?>
         </ul>
      </div>
      <?php } ?>
   </div>
   </div>
</section>
<!-- icon section end -->
   <div class="about-usdebider"></div>
   <div class="cst-container">
   <div class="footer-row">
   <div class="footer-logo col-catagory">
      <?php if($footer_logo){?>
      <a href="<?php echo get_site_url(); ?>" aria-label="Site footer logo"><img src="<?php echo $footer_logo; ?>" alt="footer_logo" /></a>
      <?php }?>    
     
      <div class="bottom-Lng position-relative">
         <span class="Lang-footer">
             <?php $language_selected= get_field('language_selected','option')?get_field('language_selected','option'):'English';
            echo $language_selected;  ?>
            <svg xmlns="http://www.w3.org/2000/svg" width="23" height="9" viewBox="0 0 23 9">
               <text id="_" data-name=">" transform="translate(23) rotate(90)" fill="#000000" font-size="16" font-family="Poppins-Regular, Poppins">
                  <tspan x="0" y="17">&gt;</tspan>
               </text>
            </svg>
         </span>
         <?php  $page_id = get_queried_object_id();
                if(is_page() || is_search() || is_single()){
                   
                   
                   if(get_field("language_switcher",'option')){
                    $option_array = array(); 
                     foreach(get_field("language_switcher",'option') as $data){
                          array_push($option_array, $data);
                      }
                    }
                    if(get_field("language_switcher_page",$page_id)){
                      $page_array = array();
                     foreach(get_field("language_switcher_page",$page_id) as $pagedata){
                      array_push($page_array, $pagedata);
                     
                    }
                  }
              
              ?>
              <ul class="FooterLng-list">
                <?php 
               $splitValuesngl = array();
                if($page_array){ 
                    $PerPagearr = array();
                  foreach($option_array as $defaultdata){ 
                    foreach($page_array as $currPagedata){ 
                      if($currPagedata['language_code'] == $defaultdata['language_code']){
                        array_push($splitValuesngl,$currPagedata['language_code']);
                        $DataNewPage['language_code'] = $currPagedata['language_code'];
                        $DataNewPage['site_name'] = $defaultdata['site_name'];
                        $DataNewPage['page_url'] = $currPagedata['page_url'];
                      
                        array_push($PerPagearr, $DataNewPage);
                      }
                    }
                 
                  }
                  if(count($PerPagearr) < 3){ 
                    foreach($option_array as $defaultdata){
                      if(!in_array($defaultdata['language_code'],$splitValuesngl)){
                        $DataNewPage['language_code'] = $defaultdata['language_code'];
                        $DataNewPage['site_name'] = $defaultdata['site_name'];
                        $DataNewPage['page_url'] = $defaultdata['site_url'];

                        array_push($PerPagearr, $DataNewPage);
                      }
                    }
                  }
       
                  foreach($PerPagearr as $data){ 
                    ?>
                    <li><a href="<?php echo $data['page_url']; ?>" aria-label="Site Page Title"><?php echo $data['site_name']; ?></a></li>
                   <?php } }else{
                    foreach($option_array as $constdata){ 
                      ?>
                   <li><a href="<?php echo $constdata['site_url']; ?>" aria-label="Site Url Title" ><?php echo $constdata['site_name']; ?></a></li>
                    <?php }
                   } ?>
              </ul>
                <?php } if(is_category()){ 
                    if(get_field("language_switcher",'option')){
                     $option_array = array(); 
                      foreach(get_field("language_switcher",'option') as $data){
                           array_push($option_array, $data);
                       }
                     }
                     if(get_field("language_switcher_page",'category_'.$page_id)){
                       $page_array = array();
                      foreach(get_field("language_switcher_page",'category_'.$page_id) as $pagedata){
                       array_push($page_array, $pagedata);
                      
                     }
                   }
               
               ?>
               <ul class="FooterLng-list">
                 <?php 
                $splitValuesngl = array();
                 if($page_array){ 
                     $PerPagearr = array();
                   foreach($option_array as $defaultdata){ 
                     foreach($page_array as $currPagedata){ 
                       if($currPagedata['language_code'] == $defaultdata['language_code']){
                         array_push($splitValuesngl,$currPagedata['language_code']);
                         $DataNewPage['language_code'] = $currPagedata['language_code'];
                         $DataNewPage['site_name'] = $defaultdata['site_name'];
                         $DataNewPage['page_url'] = $currPagedata['page_url'];
                       
                         array_push($PerPagearr, $DataNewPage);
                       }
                     }
                  
                   }
                   if(count($PerPagearr) < 3){ 
                     foreach($option_array as $defaultdata){
                       if(!in_array($defaultdata['language_code'],$splitValuesngl)){
                         $DataNewPage['language_code'] = $defaultdata['language_code'];
                         $DataNewPage['site_name'] = $defaultdata['site_name'];
                         $DataNewPage['page_url'] = $defaultdata['site_url'];
 
                         array_push($PerPagearr, $DataNewPage);
                       }
                     }
                   }
        
                   foreach($PerPagearr as $data){ 
                     ?>
                     <li><a href="<?php echo $data['page_url']; ?>" aria-label="Site Page Title"><?php echo $data['site_name']; ?></a></li>
                    <?php } }else{
                     foreach($option_array as $constdata){ 
                       ?>
                    <li><a href="<?php echo $constdata['site_url']; ?>" aria-label="Site Url Title"><?php echo $constdata['site_name']; ?></a></li>
                     <?php }
                    } ?>
               </ul>
                  
                  <?php } ?>

                          
      </div>
   </div>
   <div class="five-footer-catagory">
      <div class="footer-vrnews-catagory  col-catagory">
         <?php if($first_menu_heading){?>
         <h3 class="heading font-18text-bold"><?php echo $first_menu_heading;?></h3>
         <?php }
            wp_nav_menu(array(
              'menu' => 'Footer Col 1',
              'depth' => 3,
              'container' => false,
              'menu_class' => 'vrnews-ul common-clor'
                  )
              ); ?>   
      </div>
      <div class="footer-Reviews-catagory  col-catagory">
         <?php if($second_menu_heading){?>
         <h3 class="heading font-18text-bold"><?php echo $second_menu_heading;?></h3>
         <?php }
            wp_nav_menu(array(
               'menu' => 'Footer Col 2',
               'depth' => 3,
               'container' => false,
               'menu_class' => 'Reviews-ul li common-clor'
                   )
               ); ?> 
      </div>
      <div class="footer-Videos-catagory  col-catagory">
         <?php if($third_menu_heading){?>
         <h3 class="heading font-18text-bold"><?php echo $third_menu_heading;?></h3>
         <?php }
            wp_nav_menu(array(
                'menu' => 'Footer Col 3',
                'depth' => 3,
                'container' => false,
                'menu_class' => 'Videos-ul li common-clor'
                    )
                ); ?> 
      </div>
      <div class="footer-XR-Database-catagory  col-catagory">
         <?php if($fourth_menu_heading){?>
         <h3 class="heading font-18text-bold"><?php echo $fourth_menu_heading;?></h3>
         <?php }
            wp_nav_menu(array(
                'menu' => 'Footer Col 4',
                'depth' => 3,
                'container' => false,
                'menu_class' => 'XR-Database-ul li common-clor'
                    )
                ); ?> 
      </div>
      <div class="footer-Buyers-guide-catagory  col-catagory">
         <?php if($fifth_menu_heading){?>
         <h3 class="heading font-18text-bold"><?php echo $fifth_menu_heading;?></h3>
         <?php } 
            wp_nav_menu(array(
               'menu' => 'Footer Col 5',
               'depth' => 3,
               'container' => false,
               'menu_class' => 'Buyers-guide-ul li common-clor'
                   )
               ); ?> 
      </div>
   </div>
</footer>
<?php if($copyright_text){?>
<div class="footer-last">
   <p class="font-16text"><?php echo $copyright_text;?></p>
</div>
<?php } wp_footer(); ?>
<div id="gobal-loder" class="one-loder">
	<div class="loader_child">
		<div id="loading-bar-spinner" class="spinner">
			<div class="spinner-icon"></div>
		</div>
	</div>
</div>
</body>
</html>