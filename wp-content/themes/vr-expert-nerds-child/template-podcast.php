<?php
   /* template name: Podcast Page */
   get_header();
   $term = get_queried_object(); 
   $most_popular_head = get_field('most_popular_head',$term)?get_field('most_popular_head',$term):'';
   $more_listen_head = get_field('more_listen_head',$term)?get_field('more_listen_head',$term):'';
   $all_podcasts_heading = get_field('all_podcasts_heading',$term)?get_field('all_podcasts_heading',$term):'';
   $assign_most_popular = get_field('assign_most_popular',$term);
   $assign_most_listen = get_field('assign_most_listen',$term);
   $subcategories = get_terms(
    array(
        'taxonomy'   => 'category',
        'parent'     => $term->term_id,
        'hide_empty' => false
    )
  );

   
   ?>
<section class="ComanBreadcrumb">
   <div class="cst-container">
      <div class="home-icon">
         <ul class="breadcrumb">
            <?php get_breadcrumb(); ?>
         </ul>
      </div>
   </div>
</section>

<section class="ProcastSection">
   <div class="cst-container">
   <?php if($assign_most_popular){ ?>
      <div class="width-103">
         <h2 class="HeadingH2-30-bold"><?php echo $most_popular_head; ?></h2>
         <div id ="listencards" class="twohalf Procast-K owl-arrow-top owl-carousel owl-theme">
          <?php foreach($assign_most_popular as $most_popular){ 
            
              $result_yts =  get_post_meta($most_popular->ID,'videos_url');
              $links = $result_yts[0];
              
              $video_id = explode("?v=", $links); // For videos like http://www.youtube.com/watch?v=...
              if (empty($video_id[1]))
                  $video_id = explode("/v/", $links); // For videos like http://www.youtube.com/watch/v/..

              $video_id = explode("&", $video_id[1]); // Deleting any other params
              $video_id = $video_id[0];
              $most_popular_thumbnails = get_the_post_thumbnail_url($most_popular); 
          $default_img = get_stylesheet_directory_uri().'/img/woocommerce-placeholder.png';
                  $most_popular_thumbnails = $most_popular_thumbnails?$most_popular_thumbnails:$default_img;
           
           ?>
            <div class="item">
               <div class="listen-vd-cards">
                  <a href="<?php echo get_the_permalink($most_popular);?>">
                     <div class="listen-vd">
                        <img src="<?php echo $most_popular_thumbnails; ?>" alt="<?php echo get_the_title($most_popular); ?>"/>
                     </div>
                     <div class="listen-ul">
                        <h3 class="font-20text listencard-w"><?php echo get_the_title($most_popular); ?>
                        </h3>
                        <ul class="listing-svg">
                           <li class="timeline-li">
                              <img src="<?php echo get_stylesheet_directory_uri();?>/img/watch-icon-svg.svg" alt="<?php echo get_the_title($most_popular); ?>"/> 
                              <span calss="dayago font-16text "><?php
                              $posted= get_post_time( 'U', false, $most_popular->ID, false );
                              $ago_text = get_sub_field('ago_text', 'option')?get_sub_field('ago_text','option'):"ago";
                              $date = $posted >= strtotime($most_popular->post_date) ? human_time_diff($posted) .'&nbsp'. $ago_text : date('d F Y', $posted);
                              echo $date; 
                            ?> </span>
                           </li>
                           <?php if($video_id){ ?>
                           <li class="timeline-li">
                              <img src="<?php echo get_stylesheet_directory_uri();?>/img/cardwave-sound-icon-svg.svg" alt="<?php echo get_the_title($most_popular); ?>" />
                              <span calss="Timeago font-16text "><?php echo getDuration($video_id); ?></span>
                           </li>
                           <?php } ?>
                        </ul>
                     </div>
                  </a>
               </div>
            </div>
            <?php } ?>
            <!-- items -->
           
         
         </div>
      </div>
      <?php } ?>
      <!-- top 1 End -->
      <?php if($assign_most_listen){ ?>
      <div class="width-103">
         <h2 class="HeadingH2-30-bold"><?php echo $more_listen_head; ?></h2>
         <div id ="MoreListen" class="moreTarget Procast-K owl-arrow-top owl-carousel owl-theme">
         <?php foreach($assign_most_listen as $most_listen){ 
              $most_listen_thumbnails = get_the_post_thumbnail_url($most_listen); 
              $default_img = get_stylesheet_directory_uri().'/img/woocommerce-placeholder.png';
               $most_listen_thumbnails = $most_listen_thumbnails?$most_listen_thumbnails:$default_img;
             $result_yts =  get_post_meta($most_popular->ID,'videos_url');
             $links = $result_yts[0];
             
             $video_id = explode("?v=", $links); // For videos like http://www.youtube.com/watch?v=...
             if (empty($video_id[1]))
                 $video_id = explode("/v/", $links); // For videos like http://www.youtube.com/watch/v/..

             $video_id = explode("&", $video_id[1]); // Deleting any other params
             $video_id = $video_id[0];
              ?>
            <div class="item">
               <div class="listen-vd-cards">
                  <a href="<?php echo get_the_permalink($most_listen); ?>">
                     <div class="listen-vd">
                        <img src="<?php echo $most_listen_thumbnails; ?>" alt="<?php echo get_the_title($most_listen); ?>"/>
                     </div>
                     <div class="listen-ul">
                        <h3 class="font-20text listencard-w"><?php echo get_the_title($most_listen); ?>
                        </h3>
                        <ul class="listing-svg">
                           <li class="timeline-li">
                              <img src="<?php echo get_stylesheet_directory_uri();?>/img/watch-icon-svg.svg" alt="<?php echo get_the_title($most_listen); ?>"/> 
                              <span calss="dayago font-16text "><?php
                              $posted= get_post_time( 'U', false, $most_listen->ID, false );
                              $ago_text = get_sub_field('ago_text', 'option')?get_sub_field('ago_text','option'):"ago";
                              $date = $posted >= strtotime($most_listen->post_date) ? human_time_diff($posted) .'&nbsp'. $ago_text : date('d F Y', $posted);
                              echo $date; 
                            ?></span>
                           </li>
                           <?php if($video_id){ ?>
                           <li class="timeline-li">
                              <img src="<?php echo get_stylesheet_directory_uri();?>/img/cardwave-sound-icon-svg.svg" alt="<?php echo get_the_title($most_listen); ?>" />
                              <span calss="Timeago font-16text "><?php echo getDuration($video_id); ?></span>
                           </li>
                           <?php } ?>
                        </ul>
                     </div>
                  </a>
               </div>
            </div>
            <!-- items -->
            <?php } ?>
           
         </div>
      </div>
      <?php } ?>
      <!-- top 2 End -->
      
     
   </div>
</section>

 <!-- products --> 
<section class="ProcastSection-au">
<div class="cst-container">
 <div class="productscast">
         <h2 class="HeadingH2-30-bold pb-44"><?php echo $all_podcasts_heading; ?></h2>
         <div class="width-890">
         <?php foreach ($subcategories as $subcategory) { 
                    $term_cat_id = $subcategory->term_id; 
                    $term_name = $subcategory->name;
                    $args = array(  
                      'post_type' => 'post',
                      'post_status' => 'publish',
                          'tax_query' => array(
                                      'relation' => 'OR',
                                      array(
                                          'taxonomy' => 'category',
                                          'field' => 'term_id', 
                                          'terms' => $term_cat_id,
                                      ),
                                    ),
                  );
                  
                  
                  $loop = new WP_Query( $args );   if($loop->have_posts()){ ?>
            <div class="PodcastLoop">
           
               <h4 class="font-20text"><?php echo $term_name; ?></h4>
               <div class="Grids-2 Podcast-each">
                  <!-- items each -->
                  <?php  while($loop->have_posts()){ $loop->the_post();
                
                $posts_id = get_the_ID($loop);
                $featuredurls = get_the_post_thumbnail_url($posts_id); 
                $default_img = get_stylesheet_directory_uri().'/img/woocommerce-placeholder.png';
                        $featuredurls = $featuredurls?$featuredurls:$default_img;
             
                $video_embed = get_field('videos_url',$posts_id);
                $result_yt =  get_post_meta($posts_id,'videos_url');
                $link = $result_yt[0];
                $video_id = explode("?v=", $link);
                $video_id = $video_id[1];
               //  $featuredurls ="http://img.youtube.com/vi/".$video_id."/maxresdefault.jpg";
               
                
                ?>
                  <div class="Podcast-each-Loop">
                     <div class="pod-Img">
                        <img src="<?php echo  $featuredurls; ?>" alt="<?php echo get_the_title($loop); ?>" />
                     </div>
                     <div class="pod-rtdata">
                        <p><?php echo  get_the_title($posts_id); ?></p>
                        <ul class="Ul-dmK">
                           <li class="pd-bottomli">
                              <svg id="Icon_ionic-md-time" data-name="Icon ionic-md-time" xmlns="http://www.w3.org/2000/svg" width="16.91" height="16.91" viewBox="0 0 16.91 16.91">
                                 <path id="Path_1442" data-name="Path 1442" d="M11.822,3.375a8.455,8.455,0,1,0,8.463,8.455A8.452,8.452,0,0,0,11.822,3.375Zm.008,15.219a6.764,6.764,0,1,1,6.764-6.764A6.764,6.764,0,0,1,11.83,18.594Z" transform="translate(-3.375 -3.375)" fill="#1f1f1f"></path>
                                 <path id="Path_1443" data-name="Path 1443" d="M17.806,10.688H16.538v5.073l4.439,2.663.634-1.041-3.8-2.256Z" transform="translate(-8.928 -6.46)" fill="#1f1f1f"></path>
                              </svg>
                              <span class="cstV-Date"><?php $posted= get_post_time( 'U', false, $posts_id, false );
                               $ago_text = get_sub_field('ago_text', 'option')?get_sub_field('ago_text','option'):"ago";
                                 $date = $posted >= strtotime($loop->post_date) ? human_time_diff($posted) .'&nbsp'. $ago_text : date('d F Y', $posted);
                                 echo $date; ?></span>
                           </li>
                           <?php if($video_id){ ?>
                           <li class="pd-bottomli">
                           <img  src="<?php echo get_stylesheet_directory_uri();?>/img/cardwave-sound-icon-svg.svg" alt="<?php echo get_the_title($posts_id); ?>" />

                           <span class="cstV-Dur"><?php echo getDuration($video_id); ?></span>
                           </li>
                           <?php } ?>
                        </ul>
                     </div>
                  </div>
                  <?php }  ?>
                 
               </div>
               
            </div>
            <?php } } ?>
            <!-- 1 top -->
         </div>
      </div>
    
      
      </div>
   </section>
<!-- products -->


<?php get_footer();?>