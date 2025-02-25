<?php
  /* template name: Videos Page */
  get_header();
  ?>
<section class="ComanBreadcrumb">
  <div class="cst-container">
    <div class="home-icon">
      <ul class="breadcrumb">
        <?php get_breadcrumb();
        $term = get_queried_object(); 
         $subcategories = get_terms(
          array(
              'taxonomy'   => 'category',
              'parent'     => $term->term_id,
              'hide_empty' => false
          )
        );
        
        ?>
          
      </ul>
    </div>
  </div>
</section>
<?php $most_popular_head = get_field('most_popular_head',$term)?get_field('most_popular_head',$term):''; 

$assign_most_popular = get_field('assign_most_popular',$term); ?>
<section class="ProcastSection with-videos">
  <div class="cst-container">
  <?php if($assign_most_popular){ ?>
    <div class="width-103">
      <h2 class="HeadingH2-30-bold"><?php echo $most_popular_head; ?></h2>
      <div  class="twohalf Procast-K owl-arrow-top owl-carousel owl-theme">
      <?php foreach($assign_most_popular as $most_popular){ 
        
            $most_popular_thumbnail = get_the_post_thumbnail_url($most_popular);
            $default_img = get_stylesheet_directory_uri().'/img/woocommerce-placeholder.png';
            $most_popular_thumbnails = $most_popular_thumbnail?$most_popular_thumbnail:$default_img; 
           
            $result_yts =  get_post_meta($most_popular->ID,'videos_url');
            $links = $result_yts[0];
            
            $video_id = explode("?v=", $links); // For videos like http://www.youtube.com/watch?v=...
            if (empty($video_id[1]))
                $video_id = explode("/v/", $links); // For videos like http://www.youtube.com/watch/v/..

            $video_id = explode("&", $video_id[1]); // Deleting any other params
            $video_id = $video_id[0];
           
         
         ?>
        <div class="item">
          <div class="listen-vd-cards topmost-card">
            <a href="<?php echo get_the_permalink($most_popular->ID); ?>">
              <div class="listen-vd">
                <img src="<?php echo $most_popular_thumbnails; ?>" alt="<?php echo get_the_title($most_popular); ?>"/>
              </div>
              <div class="listen-ul">
                <h3 class="font-20text"><?php echo get_the_title($most_popular); ?>
                </h3>
                <ul class="listing-svg">
                  <?php if($video_id){ ?>
                  <li class="timeline-li">
                    <img src="<?php echo get_stylesheet_directory_uri();?>/img/watch-icon-svg.svg" alt="<?php echo get_the_title($most_popular); ?>"/> 
                    <span calss="dayago font-16text"><?php echo getDuration($video_id); ?></span>
                  </li>
                  <?php } ?>
                  <li class="timeline-li">
                    <img src="<?php echo get_stylesheet_directory_uri();?>/img/play-video-icon.png" alt="<?php echo get_the_title($most_popular); ?>" />
                    <span calss="Timeago font-16text "><?php
                              $posted= get_post_time( 'U', false, $most_popular->ID, false );
                              $ago_text = get_sub_field('ago_text', 'option')?get_sub_field('ago_text','option'):"ago"; 
                              $date = $posted >= strtotime($most_popular->post_date) ? human_time_diff($posted) .'&nbsp'. $ago_text : date('d F Y', $posted);
                              echo $date; 
                            ?></span>
                  </li>
                </ul>
              </div>
            </a>
          </div>
        </div>
       <?php } ?>
      </div>
    </div>
    <?php } wp_reset_postdata(); foreach ($subcategories as $subcategory) { 
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
    <!-- top 1 End -->
    <div class="width-103">
      <h2 class="HeadingH2-30-bold"><?php echo $term_name; ?></h2>
      <div id ="MoreListen" class="moreTarget Procast-K owl-arrow-top owl-carousel owl-theme">
      <?php  while($loop->have_posts()){ $loop->the_post();
                
                $posts_id = get_the_ID($loop);
                $featuredurls = get_the_post_thumbnail_url($posts_id);
                $default_img = get_stylesheet_directory_uri().'/img/woocommerce-placeholder.png';
                $featuredurls = $featuredurls?$featuredurls:$default_img; 
             
                $result_yts =  get_post_meta($posts_id,'videos_url');
                $links = $result_yts[0];
                
                $video_id = explode("?v=", $links); // For videos like http://www.youtube.com/watch?v=...
                if (empty($video_id[1]))
                    $video_id = explode("/v/", $links); // For videos like http://www.youtube.com/watch/v/..

                $video_id = explode("&", $video_id[1]); // Deleting any other params
                $video_id = $video_id[0];
              
               
                
                ?>
        <div class="item">
          <div class="listen-vd-cards">
            <a href="<?php echo get_the_permalink($posts_id); ?>">
              <div class="listen-vd">
                <img src="<?php echo  $featuredurls; ?>" alt="<?php echo  get_the_title($posts_id); ?>"/>
              </div>
              <div class="listen-ul">
                <h3 class="font-20text listencard-w"><?php echo  get_the_title($posts_id); ?>
                </h3>
                <ul class="listing-svg">
                  <li class="timeline-li">
                    <img src="<?php echo get_stylesheet_directory_uri();?>/img/watch-icon-svg.svg" alt="<?php echo  get_the_title($posts_id); ?>"/> 
                    <span calss="dayago font-16text "><?php $posted= get_post_time( 'U', false, $posts_id, false );
                    $ago_text = get_sub_field('ago_text', 'option')?get_sub_field('ago_text','option'):"ago"; 
                                 $date = $posted >= strtotime($loop->post_date) ? human_time_diff($posted) .'&nbsp'. $ago_text : date('d F Y', $posted);
                                 echo $date; ?></span>
                  </li>
                  <?php if($video_id){ ?>
                  <li class="timeline-li">
                    <img src="<?php echo get_stylesheet_directory_uri();?>/img/play-video-icon.png" alt="<?php echo  get_the_title($posts_id); ?>" />
                    <span calss="Timeago font-16text "><?php echo getDuration($video_id); ?></span>
                  </li>
                  <?php } ?>
                </ul>
              </div>
            </a>
          </div>
        </div>
       <?php } ?>
      </div>
    </div>
    <?php }} wp_reset_postdata(); ?>
   
  </div>
</section>
<!-- Video Section END -->
<?php
$videos_logo = get_field('videos_logo',$term)?get_field('videos_logo',$term):''; 
$view_more_videos_text = get_field('view_more_videos_text',$term)?get_field('view_more_videos_text',$term):''; 
$view_more_videos_assign = get_field('view_more_videos_assign',$term);
$visit_youtube_text = get_field('visit_youtube_text',$term)?get_field('visit_youtube_text',$term):"";
$visit_button_url = get_field('visit_button_url',$term)?get_field('visit_button_url',$term):"";

if($view_more_videos_assign ){
?>
<section class="YouTube background7">
  <div class="cst-container">
    <div class="listen-VrLogo HeadingH2-30-bold">
      <img src="<?php echo $videos_logo ; ?>" alt="<?php echo $view_more_videos_text; ?>"/>
      <p>
        <?php echo $view_more_videos_text; ?>
      </p>
    </div>
    <div class="Grids-3k VrGridsk">
      <div id="v-youtube" class="owl-arrow-top Grids-3 VrGrids owl-carousel owl-theme">
      <?php foreach($view_more_videos_assign as $view_more_videos){ 
        $video_url = get_field('videos_url', $view_more_videos);
        $result_yts =  get_post_meta($view_more_videos,'videos_url');
        $links = $result_yts[0];
        
        $video_id = explode("?v=", $links); // For videos like http://www.youtube.com/watch?v=...
        if (empty($video_id[1]))
            $video_id = explode("/v/", $links); // For videos like http://www.youtube.com/watch/v/..
        
        $video_id = explode("&", $video_id[1]); // Deleting any other params
        $video_id = $video_id[0]; ?>
        <div class="item">
          <div class="YouTubsUrl">
            <div class="v-height">
              <iframe width="100%" height="193" src="<?php echo  $video_url; ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <p class="font-20text"><?php echo get_the_title($view_more_videos); ?></p>
            <div class="youTubs-Views font-18text">
              <?php  $view_text = get_sub_field('$view_text', 'option')?get_sub_field('$view_text','option'):" views"; 
               echo get_viewscount($video_id).' '.$view_text;  ?>
              <?php $posted= get_post_time( 'U', false, $view_more_videos->ID, false );
                $ago_text = get_sub_field('ago_text', 'option')?get_sub_field('ago_text','option'):"ago"; 
                $date = $posted >= strtotime($view_more_videos->post_date) ? human_time_diff($posted) .'&nbsp'. $ago_text : date('d F Y', $posted);
                echo $date; ?>
            </div>
          </div>
        </div>
        <?php } ?>
        <!-- items -->
        
      </div>
    </div>
    <!-- grids end -->
    <div class="center-btn">
      <a href="<?php echo $visit_button_url; ?>" class="knowledge-btnW">
        <?php echo $visit_youtube_text; ?>
        <span>
          <svg xmlns="http://www.w3.org/2000/svg" width="25" height="18" viewBox="0 0 25 18">
            <path id="right-arrow" d="M16.835,4.945a.868.868,0,0,0-1.26,0,.926.926,0,0,0,0,1.277l6.389,6.542H.882a.888.888,0,0,0-.882.9.9.9,0,0,0,.882.916H21.963l-6.389,6.529a.942.942,0,0,0,0,1.29.868.868,0,0,0,1.26,0l7.9-8.09a.9.9,0,0,0,0-1.277Z" transform="translate(0 -4.674)" fill="#76b4aa"></path>
          </svg>
        </span>
      </a>
    </div>
  </div>
</section>
<?php } wp_reset_postdata();
$unboxing_videos= get_field('unboxing_videos',$term)?get_field('unboxing_videos',$term):'';
$asign_unboxing_videos = get_field('asign_unboxing_videos', $term);
if($asign_unboxing_videos ){
  ?>
<!-- Youtube Section END -->
<section class=" Unboxing">
  <div class="cst-container">
    <div class="width-103">
      <h2 class="HeadingH2-30-bold"><?php echo $unboxing_videos; ?></h2>
      <div id ="MoreListen" class="moreTarget Procast-K owl-arrow-top owl-carousel owl-theme">
      <?php foreach($asign_unboxing_videos as $unboxing_videos){ 
        $unboxing_thumbnails = get_the_post_thumbnail_url($unboxing_videos);
        $default_img = get_stylesheet_directory_uri().'/img/woocommerce-placeholder.png';
        $unboxing_thumbnails = $unboxing_thumbnails?$unboxing_thumbnails:$default_img; 

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
            <a href="<?php echo get_the_permalink( $unboxing_videos->ID); ?>">
              <div class="listen-vd">
                <img src="<?php echo $unboxing_thumbnails ?>" alt="<?php echo get_the_title($unboxing_videos); ?>"/>
              </div>
              <div class="listen-ul">
                <h3 class="font-20text listencard-w"><?php echo get_the_title($unboxing_videos); ?>
                </h3>
                <ul class="listing-svg">
                  <li class="timeline-li">
                    <img src="<?php echo get_stylesheet_directory_uri();?>/img/watch-icon-svg.svg" alt="<?php echo get_the_title($unboxing_videos); ?>"/> 
                    <span calss="dayago font-16text "> <?php $posted= get_post_time( 'U', false, $unboxing_videos->ID, false );
                    $ago_text = get_sub_field('ago_text', 'option')?get_sub_field('ago_text','option'):"ago"; 
                                 $date = $posted >= strtotime($unboxing_videos->post_date) ? human_time_diff($posted) .'&nbsp'. $ago_text : date('d F Y', $posted);
                                 echo $date; ?> </span>
                  </li>
                  <?php if($video_id){ ?>
                  <li class="timeline-li">
                    <img src="<?php echo get_stylesheet_directory_uri();?>/img/play-video-icon.png" alt="<?php echo get_the_title($unboxing_videos); ?>" />
                    <span calss="Timeago font-16text "><?php echo getDuration($video_id); ?></span>
                  </li>
                  <?php } ?>
                </ul>
              </div>
            </a>
          </div>
        </div>
       <?php } ?>
      </div>
    </div>
    <!-- top 2 End -->
  </div>
</section>
<?php } ?>
<?php get_footer();?>