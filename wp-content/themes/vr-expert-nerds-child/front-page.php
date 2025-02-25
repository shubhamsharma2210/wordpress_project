<?php get_header(); ?>
<!-- Google requires section start -->
<section class="Google-requires">
  <div class="cst-container">
    <div class="sideWidth">
      <div class="left-Width">
        <div class="google-txtwrap">
          <?php wp_reset_postdata();
           $assign_latest_news= get_field('assign_latest_news'); 
          if($assign_latest_news){ 
            
            ?>
           <div class="guidecards-wrap Grids-13">
             <?php foreach($assign_latest_news as $latest_news){ 
              $news_thumbnail = get_the_post_thumbnail_url($latest_news); 
              $default_img = get_stylesheet_directory_uri().'/img/woocommerce-placeholder.png';
            $news_thumbnails = $news_thumbnail?$news_thumbnail:$default_img;

               ?>
                  
                  <div class="guide-vd-cards">
                    <a href="<?php echo get_permalink($latest_news); ?>" aria-label="Latest News">
                      <div class="guide-vd">
                        <img src="<?php echo $news_thumbnails; ?>" alt="<?php echo get_the_title($latest_news); ?>"/>
                      </div>
                   </a>
                      <div class="MobileV-div">
                        <div class="vr-reviewbuttons Podcasts-btn">
                          <?php $cat_news= get_the_category( $latest_news->ID );
                          $count = 1;
                         foreach($cat_news as $cd){
                          if($count<2){ ?>
                         <a href="<?php echo get_category_link($cd->term_id); ?>" class="font-16text"  aria-label="Cat Name"><?php echo $cd->cat_name; ?></a>
                         <?php
                          $count++; }
                          } ?>
                          
                         
                        </div>
                        <a href="<?php echo get_permalink($latest_news); ?>" aria-label="latest news">
                        <h3 class="font-20text "><?php echo mb_strimwidth(get_the_title($latest_news), 0, 80, '.....'); ?></h3>
                        <div class="head-txtgoogle">
                          <p class="font-20text"><?php $product_content = get_the_excerpt($latest_news);
                           if($product_content){                          
                            $content = html_cut($product_content, 250); // limit the word count of content
                            $point  = strlen($product_content) > 250?'...':'';
                            echo  strip_tags( $content. $point);  
                            }   ?>
                          </p>
                        </div>
                        <div class="guide-ul-wrap">
                          <ul>
                            <li class="pd-bottomli">
                              <svg id="Icon_ionic-md-time" data-name="Icon ionic-md-time"
                                xmlns="http://www.w3.org/2000/svg" width="16.91" height="16.91"
                                viewBox="0 0 16.91 16.91">
                                <path id="Path_1442" data-name="Path 1442"
                                  d="M11.822,3.375a8.455,8.455,0,1,0,8.463,8.455A8.452,8.452,0,0,0,11.822,3.375Zm.008,15.219a6.764,6.764,0,1,1,6.764-6.764A6.764,6.764,0,0,1,11.83,18.594Z"
                                  transform="translate(-3.375 -3.375)" fill="#1f1f1f" />
                                <path id="Path_1443" data-name="Path 1443"
                                  d="M17.806,10.688H16.538v5.073l4.439,2.663.634-1.041-3.8-2.256Z"
                                  transform="translate(-8.928 -6.46)" fill="#1f1f1f" />
                              </svg>
                              <span><?php
                                $date = get_the_date( get_option('date_format'), $latest_news->ID);
                                echo $date;
                              ?></span>
                            </li>
                            <li class="pd-bottomli">
                              <svg xmlns="http://www.w3.org/2000/svg" width="19.45" height="15.128"
                                viewBox="0 0 19.45 15.128">
                                <path id="Icon_awesome-comments" data-name="Icon awesome-comments"
                                  d="M14.047,7.653c0-2.985-3.144-5.4-7.023-5.4S0,4.668,0,7.653a4.581,4.581,0,0,0,1.283,3.107A7.6,7.6,0,0,1,.074,12.6a.268.268,0,0,0-.051.294.264.264,0,0,0,.246.162,5.945,5.945,0,0,0,3-.844,8.592,8.592,0,0,0,3.758.844C10.9,13.055,14.047,10.638,14.047,7.653Zm4.12,7.429a4.575,4.575,0,0,0,1.283-3.107c0-2.259-1.807-4.194-4.366-5a5.018,5.018,0,0,1,.044.679c0,3.576-3.637,6.483-8.1,6.483a10.124,10.124,0,0,1-1.07-.064,7.3,7.3,0,0,0,6.473,3.306,8.545,8.545,0,0,0,3.758-.844,5.945,5.945,0,0,0,3,.844.266.266,0,0,0,.246-.162.271.271,0,0,0-.051-.294A7.519,7.519,0,0,1,18.167,15.081Z"
                                  transform="translate(0 -2.25)" />
                              </svg>
                              <?php  $comment_text = get_sub_field('comment_text', 'option')?get_sub_field('comment_text','option'):"comment"; 
                              $comments_sec_text = get_sub_field('comments_sec_text','option')?get_sub_field('comments_sec_text','option'):"comments"; ?>
                              <span><?php echo $article_comment = $latest_news->comment_count;
                              echo '&nbsp';
                              if($article_comment<2){ echo $comment_text; }else{ echo $comments_sec_text; } ?></span>
                            </li>
                          </ul>
                        </div>
                        </a>
                      </div>
                   
                  </div>
              <?php } ?>
           </div>
          <?php } wp_reset_postdata();
          $all_article_button_text = get_field('all_article_button_text')?get_field('all_article_button_text'):'All Articles'; 
          $all_article_button_url = get_field('all_article_button_url')?get_field('all_article_button_url'):'javascript:void(0)'; 
          ?>
          <div class="PageBtn mt-42">
            <a href="<?php echo $all_article_button_url; ?>" class="knowledge-btn guide-clr" aria-label="Article Button"><?php echo $all_article_button_text; ?></a>
          </div>
        </div>
        <!-- Google requires section start -->
        <div class="xr-usdebider"></div>
        <!-- XR-device start -->
        <?php if(get_field('xr_database_repeater')){ $xr_head = get_field('xr_head')?get_field('xr_head'):'XR Database';
        $xr_database_heading = get_field('xr_database_heading')?get_field('xr_database_heading'):'Find your XR Device!'; 
        $about_xr_database = get_field('about_xr_database')?get_field('about_xr_database'):'Find your XR Device!';
        $visit_xr_database_url = get_field('visit_xr_database_url')?get_field('visit_xr_database_url'):'javascript:void(0)'; ?>
        <div class="Xr-index">
          <div class="Podcasts-btn tagsbtn xr_link">
            <a href="<?php echo $visit_xr_database_url; ?>" aria-label="Button">
              <svg xmlns="http://www.w3.org/2000/svg" width="18.666"
                height="17.568" viewBox="0 0 18.666 17.568">
                <path id="Icon_metro-library" data-name="Icon metro-library"
                  d="M20.14,20.1V19h-1.1V12.415h1.1v-1.1H16.846v1.1h1.1V19H14.65V12.415h1.1v-1.1H12.454v1.1h1.1V19H10.258V12.415h1.1v-1.1H8.062v1.1h1.1V19H5.866V12.415h1.1v-1.1H3.67v1.1h1.1V19H3.67v1.1h-1.1v1.1H21.238V20.1h-1.1ZM11.356,3.631h1.1l8.784,5.49v1.1H2.572v-1.1Z"
                  transform="translate(-2.572 -3.631)" />
              </svg>
              <?php echo $xr_head; ?>
           </a>
          </div>
          <div class="listentxt-mx-w ">
            <h3 class="HeadingH3-25-bold"><?php echo $xr_database_heading; ?></h3>
            <p class="font-18text "><?php echo  $about_xr_database; ?>
            </p>
          </div>
          <div class="indexXr position-relative">
            <div id="Xr-carousel" class="owl-arrow-top owl-carousel owl-theme">
              <?php 
                while(the_repeater_field('xr_database_repeater')){  
                $xr_database_image = get_sub_field('xr_database_image')?get_sub_field('xr_database_image'):get_stylesheet_directory_uri().'/img/woocommerce-placeholder.png';
              
                $xr_db_product_head = get_sub_field('xr_db_product_head')?get_sub_field('xr_db_product_head'):"";
                $xr_database_url = get_sub_field('xr_database_url')?get_sub_field('xr_database_url'):"";
                ?>
              <div class="item">
                <div class="XR-card">
                  <a href="<?php echo $xr_database_url; ?>" aria-label="Products Link">
                    <div class="blackBc">
                      <img src="<?php echo $xr_database_image; ?>"  alt="<?php echo $xr_db_product_head; ?>" />
                    </div>
                    <h3 class="font-20text"><?php echo $xr_db_product_head; ?></h3>
                  </a>
                </div>
              </div>
              <?php } 
              $visit_xr_database = get_field('visit_xr_database')?get_field('visit_xr_database'):'Visit XR Database'; 
              $visit_xr_database_url = get_field('visit_xr_database_url')?get_field('visit_xr_database_url'):'javascript:void(0)'; ?>
              <!-- items -->
            </div>
          </div>
          <div class="PageBtn mt-42">
            <a href="<?php echo $visit_xr_database_url; ?>" class="knowledge-btn guide-clr" aria-label="Xr Database"><?php echo $visit_xr_database; ?></a>
          </div>
        </div>
        <?php } wp_reset_postdata();
        $reviews = get_field('reviews')?get_field('reviews'):'Reviews';
        $popular_reviews_heading = get_field('popular_reviews_heading')?get_field('popular_reviews_heading'):'Popular Reviews';
        $popular_reviews_para = get_field('popular_reviews_para')?get_field('popular_reviews_para'):'Popular Reviews';
        ?>
        <!-- XR-device end -->
        <div class="xr-usdebider"></div>


  <!-- Reviews section Start -->
  <?php $assign_product_reviews = get_field('assign_product_reviews'); 
   $all_reviews_url = get_field('all_reviews_url')?get_field('all_reviews_url'):'javascript:void(0)';
          if($assign_product_reviews){  ?>
        <div class="Xr-index Review-index">
          <div class="Podcasts-btn tagsbtn">
              <a href="<?php echo $all_reviews_url; ?>" aria-label="Reviews Button">
              <svg xmlns="http://www.w3.org/2000/svg" width="19.236"
                height="19.067" viewBox="0 0 19.236 19.067">
                <path id="Icon_weather-stars" data-name="Icon weather-stars"
                  d="M6.444,17.011a2.441,2.441,0,0,0,2.327-2.427,2.423,2.423,0,0,0,2.317,2.427,2.423,2.423,0,0,0-2.317,2.427,2.307,2.307,0,0,0-.679-1.678A2.353,2.353,0,0,0,6.444,17.011ZM8.771,9.82a4.59,4.59,0,0,0,3.206-1.468A4.572,4.572,0,0,0,13.3,5.076a4.572,4.572,0,0,0,1.318,3.276A4.635,4.635,0,0,0,17.83,9.82a4.629,4.629,0,0,0-2.287.709,4.8,4.8,0,0,0-1.648,1.728,4.7,4.7,0,0,0-.6,2.327A4.6,4.6,0,0,0,11.977,11.3,4.56,4.56,0,0,0,8.771,9.82Zm3.316,10.757a3.568,3.568,0,0,0,3.406-3.566,3.568,3.568,0,0,0,3.4,3.566,3.568,3.568,0,0,0-3.4,3.566,3.44,3.44,0,0,0-.989-2.467A3.5,3.5,0,0,0,12.087,20.577Zm6.8-4.734a3.551,3.551,0,0,0,3.386-3.576,3.568,3.568,0,0,0,3.406,3.566A3.568,3.568,0,0,0,22.275,19.4a3.533,3.533,0,0,0-3.386-3.556Z"
                  transform="translate(-6.444 -5.076)"/>
              </svg>
              <?php echo $reviews; ?>
             </a>
          </div>
          <div class="listentxt-mx-w">
            <h3 class="HeadingH3-25-bold"><?php echo $popular_reviews_heading; ?></h3>
            <p class="font-18text"><?php echo $popular_reviews_para; ?>
            </p>
          </div>

         <!-- slider -->
          
          <div class="indexXr ReviewvR position-relative">
            <div id="Index-Review-carousel" class="owl-arrow-top owl-carousel owl-theme">
                <!-- items 1 -->
              <?php  foreach($assign_product_reviews as $product_reviews){ 
                  $reviews_thumbnails = get_the_post_thumbnail_url($product_reviews);  
                  $default_img = get_stylesheet_directory_uri().'/img/woocommerce-placeholder.png';
                  $reviews_thumbnail = $reviews_thumbnails?$reviews_thumbnails:$default_img;
                   ?>
                  
                <div class="item">
                  <div class="guide-vd-cards">
                  <a href="<?php echo get_the_permalink($product_reviews); ?>" aria-label="Products Reviews Button">
                    <div class="guide-vd">
                      <img src="<?php echo $reviews_thumbnail; ?>" alt="<?php echo get_the_title($product_reviews); ?>">
                    </div>
                  </a>
                  <div class="X-changes">
                    <div class="vr-reviewbuttons Podcasts-btn">
                       <?php
                        $category_detail = get_the_category($product_reviews->ID);
                        $count = 1;
                     
                          foreach($category_detail as $cd){
                              if($count<2){
                                                  ?>
                                                   
                                                   <a href="<?php echo get_category_link($category_detail[0]->term_id); ?>" class="font-16text" aria-label="Cat Button"><?php echo $category_detail[0]->cat_name; ?></a><?php
                                                  
                                               } $count++;  }  ?>
                      
                     
                    </div>

                    <a href="<?php echo get_the_permalink($product_reviews); ?>" aria-label="Products Reviews">
                    <h3 class="font-20text"><?php echo mb_strimwidth(get_the_title($product_reviews), 0, 60, '.....'); ?></h3>
                    <div class="guide-ul-wrap">
                      <ul>
                        <li class="pd-bottomli">
                          <svg id="Icon_ionic-md-time" data-name="Icon ionic-md-time" xmlns="http://www.w3.org/2000/svg" width="16.91" height="16.91" viewBox="0 0 16.91 16.91">
                            <path id="Path_1442" data-name="Path 1442" d="M11.822,3.375a8.455,8.455,0,1,0,8.463,8.455A8.452,8.452,0,0,0,11.822,3.375Zm.008,15.219a6.764,6.764,0,1,1,6.764-6.764A6.764,6.764,0,0,1,11.83,18.594Z" transform="translate(-3.375 -3.375)" fill="#1f1f1f"></path>
                            <path id="Path_1443" data-name="Path 1443" d="M17.806,10.688H16.538v5.073l4.439,2.663.634-1.041-3.8-2.256Z" transform="translate(-8.928 -6.46)" fill="#1f1f1f"></path>
                          </svg>
                          <span><?php $date = get_the_date( get_option('date_format'), $product_reviews->ID);
                                      echo $date; ?></span>
                        </li>
                        <li class="pd-bottomli">
                          <svg xmlns="http://www.w3.org/2000/svg" width="19.45" height="15.128" viewBox="0 0 19.45 15.128">
                            <path id="Icon_awesome-comments" data-name="Icon awesome-comments" d="M14.047,7.653c0-2.985-3.144-5.4-7.023-5.4S0,4.668,0,7.653a4.581,4.581,0,0,0,1.283,3.107A7.6,7.6,0,0,1,.074,12.6a.268.268,0,0,0-.051.294.264.264,0,0,0,.246.162,5.945,5.945,0,0,0,3-.844,8.592,8.592,0,0,0,3.758.844C10.9,13.055,14.047,10.638,14.047,7.653Zm4.12,7.429a4.575,4.575,0,0,0,1.283-3.107c0-2.259-1.807-4.194-4.366-5a5.018,5.018,0,0,1,.044.679c0,3.576-3.637,6.483-8.1,6.483a10.124,10.124,0,0,1-1.07-.064,7.3,7.3,0,0,0,6.473,3.306,8.545,8.545,0,0,0,3.758-.844,5.945,5.945,0,0,0,3,.844.266.266,0,0,0,.246-.162.271.271,0,0,0-.051-.294A7.519,7.519,0,0,1,18.167,15.081Z" transform="translate(0 -2.25)"></path>
                          </svg>
                          <?php  $comment_text = get_sub_field('comment_text', 'option')?get_sub_field('comment_text','option'):"comment"; 
                          $comments_sec_text = get_sub_field('comments_sec_text','option')?get_sub_field('comments_sec_text','option') 
                           :"comments"; ?>
                          <span><?php echo $article_comment = $product_reviews->comment_count;  echo '&nbsp';if($article_comment<2){ echo  $comment_text ; }else{ echo $comments_sec_text; } ?></span>
                        </li>
                      </ul>
                    </div>
                   </a>
                   </div>

                  </div>
                </div>
            <?php } 
            $all_reviews_text = get_field('all_reviews_text')?get_field('all_reviews_text'):'All Reviews';
            $all_reviews_url = get_field('all_reviews_url')?get_field('all_reviews_url'):'javascript:void(0)';
            ?>
                <!-- items 1 -->
                
             </div>
          </div>
            <!-- Position DIV END -->


              <div class="PageBtn mt-42">
                <a href="<?php echo $all_reviews_url; ?>" class="knowledge-btn guide-clr" aria-label="All Reviews"><?php echo $all_reviews_text; ?></a>
              </div>
        </div>
         <?php } wp_reset_postdata(); ?>
  <!-- Reviews section END -->
        <div class="xr-usdebider"></div>
        <!-- Guide section START -->
        <?php  $buyers_guide_heading = get_field('buyers_guide_heading')?get_field('buyers_guide_heading'):'Buyers Guide';
                $buyers_guide_para = get_field('buyers_guide_para')?get_field('buyers_guide_para'):'Buyers Guide'; 
                $buyers_guide_url= get_field('buyers_guide_url')?get_field('buyers_guide_url'):'javascript:void(0)';
                 ?>
       <div class="Xr-index Review-index">
          <div class="Podcasts-btn tagsbtn">
            <a href="<?php echo $buyers_guide_url; ?>" aria-label="Products Reviews">
            <svg xmlns="http://www.w3.org/2000/svg" width="18.083" height="18.083" viewBox="0 0 18.083 18.083">
              <path id="Icon_metro-target" data-name="Icon metro-target" d="M20.654,9.839H18.872A7.364,7.364,0,0,0,12.743,3.71V1.928h-2.26V3.71A7.364,7.364,0,0,0,4.353,9.839H2.571V12.1H4.353a7.364,7.364,0,0,0,6.129,6.129v1.782h2.26V18.229A7.364,7.364,0,0,0,18.872,12.1h1.782V9.839Zm-4.082,0H14.81a3.4,3.4,0,0,0-2.067-2.067V6.01A5.1,5.1,0,0,1,16.571,9.839ZM11.612,12.1a1.13,1.13,0,1,1,1.13-1.13A1.13,1.13,0,0,1,11.612,12.1ZM10.482,6.01V7.772A3.4,3.4,0,0,0,8.415,9.839H6.653A5.1,5.1,0,0,1,10.482,6.01ZM6.653,12.1H8.415a3.4,3.4,0,0,0,2.067,2.067v1.762A5.1,5.1,0,0,1,6.653,12.1Zm6.089,3.829V14.167A3.4,3.4,0,0,0,14.81,12.1h1.762A5.1,5.1,0,0,1,12.742,15.929Z" transform="translate(-2.571 -1.928)"></path>
            </svg>
            <?php echo $buyers_guide_heading; ?>
           </a>
          </div>
          <div class="listentxt-mx-w">
            <h3 class="HeadingH3-25-bold"><?php echo $buyers_guide_heading; ?></h3>
            <p class="font-18text"><?php echo $buyers_guide_para; ?>
            </p>
          </div> <?php 
        $assign_buyers_guide = get_field('assign_buyers_guide')?get_field('assign_buyers_guide'):'';
        if($assign_buyers_guide){
          ?>
        <div class="indexXr Guide ReviewvR position-relative">
          <div id="Index-guide-carousel" class="owl-arrow-top owl-carousel owl-theme">
            <!-- items 1 -->
            <?php foreach($assign_buyers_guide as $assign_guide){ 
               $buyers_guide_thumbnails = get_the_post_thumbnail_url($assign_guide); 
               $default_img = get_stylesheet_directory_uri().'/img/woocommerce-placeholder.png';
                  $buyers_guide_thumbnail = $buyers_guide_thumbnails?$buyers_guide_thumbnails:$default_img; ?>
              <div class="item">
              <div class="guide-vd-cards">
                <a href="<?php echo get_the_permalink($assign_guide); ?>" aria-label="Assign Guide">
                  <div class="guide-vd">
                    <img src="<?php echo $buyers_guide_thumbnail; ?>" alt="<?php echo get_the_title($assign_guide); ?>">
                  </div>
               </a>
                  <div class="vr-reviewbuttons Podcasts-btn">
                    <?php $category_detail = get_the_category($assign_guide->ID); ?>
                  <a href="<?php echo get_category_link($category_detail[0]->term_id); ?>" class="font-16text" aria-label="Products Cat"><?php 
                                                
                                                  echo $category_detail[0]->cat_name;
                                                  ?></a>
                    
                  </div>
                  <a href="<?php echo get_the_permalink($assign_guide); ?>" aria-label="Assign Guide">
                  <h3 class="font-20text"><?php echo get_the_title($assign_guide); ?></h3>
                  <div class="guide-ul-wrap">
                    <ul>
                      <li class="pd-bottomli">
                        <svg id="Icon_ionic-md-time" data-name="Icon ionic-md-time" xmlns="http://www.w3.org/2000/svg" width="16.91" height="16.91" viewBox="0 0 16.91 16.91">
                          <path id="Path_1442" data-name="Path 1442" d="M11.822,3.375a8.455,8.455,0,1,0,8.463,8.455A8.452,8.452,0,0,0,11.822,3.375Zm.008,15.219a6.764,6.764,0,1,1,6.764-6.764A6.764,6.764,0,0,1,11.83,18.594Z" transform="translate(-3.375 -3.375)" fill="#1f1f1f"></path>
                          <path id="Path_1443" data-name="Path 1443" d="M17.806,10.688H16.538v5.073l4.439,2.663.634-1.041-3.8-2.256Z" transform="translate(-8.928 -6.46)" fill="#1f1f1f"></path>
                        </svg>
                        <span><?php  $date = get_the_date( get_option('date_format'), $assign_guide->ID);
                                      echo $date;  ?></span>
                      </li>
                      <li class="pd-bottomli">
                        <svg xmlns="http://www.w3.org/2000/svg" width="19.45" height="15.128" viewBox="0 0 19.45 15.128">
                          <path id="Icon_awesome-comments" data-name="Icon awesome-comments" d="M14.047,7.653c0-2.985-3.144-5.4-7.023-5.4S0,4.668,0,7.653a4.581,4.581,0,0,0,1.283,3.107A7.6,7.6,0,0,1,.074,12.6a.268.268,0,0,0-.051.294.264.264,0,0,0,.246.162,5.945,5.945,0,0,0,3-.844,8.592,8.592,0,0,0,3.758.844C10.9,13.055,14.047,10.638,14.047,7.653Zm4.12,7.429a4.575,4.575,0,0,0,1.283-3.107c0-2.259-1.807-4.194-4.366-5a5.018,5.018,0,0,1,.044.679c0,3.576-3.637,6.483-8.1,6.483a10.124,10.124,0,0,1-1.07-.064,7.3,7.3,0,0,0,6.473,3.306,8.545,8.545,0,0,0,3.758-.844,5.945,5.945,0,0,0,3,.844.266.266,0,0,0,.246-.162.271.271,0,0,0-.051-.294A7.519,7.519,0,0,1,18.167,15.081Z" transform="translate(0 -2.25)"></path>
                        </svg>
                        <?php  $comment_text = get_sub_field('comment_text', 'option')?get_sub_field('comment_text','option'):"comment"; 
                            $comments_sec_text = get_sub_field('comments_sec_text','option')?get_sub_field('comments_sec_text','option'):"comments"; ?>
                        <span><?php echo $article_comment = $assign_guide->comment_count; echo '&nbsp'; 
                        if($article_comment<2){ echo $comment_text; }else{ echo $comments_sec_text; } ?></span>
                      </li>
                    </ul>
                  </div>
                </a>
              </div>
            </div>
            <?php
              } $buyers_guide_text= get_field('buyers_guide_text')?get_field('buyers_guide_text'):'Visit Buyers Guide'; 
               $buyers_guide_url= get_field('buyers_guide_url')?get_field('buyers_guide_url'):'javascript:void(0)'; ?>
            
          </div>
        </div>
        <!-- Position DIV END -->
         <div class="PageBtn mt-42">
            <a href="<?php echo $buyers_guide_url; ?>" class="knowledge-btn guide-clr" aria-label="Assign Guide Buy"><?php echo $buyers_guide_text; ?></a>
          </div>
        </div>
        <?php  }

              $trending_headsets_head = get_field('trending_headsets_head')?get_field('trending_headsets_head'):'Trending headsets';
              $assign_headset =  get_field('assign_headset');
              ?>
         <!-- slider -->
      </div>
    
      <!-- side bar start -->
      <div class="sideXbar">
      <?php dynamic_sidebar('homepage-sidebar');   ?>
       
        
      </div>
      
      <!-- side bar end -->
    </div>
</section>
<!-- guide section start -->
<!-- knoledge section start -->
<?php wp_reset_postdata();
$knowledgebase_logo = get_field('knowledgebase_logo'); 
$knowledgebase_heading = get_field('knowledgebase_heading')?get_field('knowledgebase_heading'):'Knowledge Base';
$about_knowledgebase = get_field('about_knowledgebase')?get_field('about_knowledgebase'):'Knowledge Base'; 
$kb_articles_repeater = get_field('kb_articles_repeater'); 
if($kb_articles_repeater){ ?>
<section class="knowledge-basesec">
   <div class="cst-container">
      <div class="Knowl-txt">
         <img src="<?php echo $knowledgebase_logo; ?>" alt="<?php echo $knowledgebase_heading; ?>"/>
         <h3 class="HeadingH3-25-bold"><?php echo $knowledgebase_heading; ?></h3>
         <p class="font-18text"><?php echo $about_knowledgebase; ?>
         </p>
      </div>
      <div class="KnowlegeBaseMobile position-relative">
         <div id ="KnowlegeBase" class="owl-arrow-top wrap-cards owl-carousel owl-theme">
          <?php while(the_repeater_field('kb_articles_repeater')){ 
            $kb_article_image = get_sub_field('kb_article_image')?get_sub_field('kb_article_image'):get_stylesheet_directory_uri().'/img/woocommerce-placeholder.png';
            $kb_article_title = get_sub_field('kb_article_title')?get_sub_field('kb_article_title'):'Knowledge Base';
            $kb_article_text = get_sub_field('kb_article_text')?get_sub_field('kb_article_text'):'Knowledge Base';
            $kb_article_url = get_sub_field('kb_article_url')?get_sub_field('kb_article_url'):'javascript:void(0)';  ?>
            <div class="item">
               <a href="<?php echo $kb_article_url; ?>" aria-label="Article Title">
                  <div class="knowledge-base-img">
                     <div class="all-cardsknowledge">
                        <img src="<?php echo $kb_article_image; ?>" alt="<?php echo $kb_article_title; ?>"/>
                     </div>
                     <div class="vr-reviewbuttons Podcasts-btn">
                        <span class="font-16text clr-white"><?php echo $knowledgebase_heading; ?></span>
                     </div>
                     <h3 class="font-20text"><?php echo $kb_article_title; ?></h3>
                  </div>
               </a>
            </div>
           <?php } 
           $visit_knowledgebase_cta = get_field('visit_knowledgebase_cta')?get_field('visit_knowledgebase_cta'):'Visit Knowledge Base';
           $visit_knowledgebase_url = get_field('visit_knowledgebase_url')?get_field('visit_knowledgebase_url'):'javascript:void(0)'; ?>
         </div>
      </div>
      <!-- end Grids -->
      <div class="center-btn">
         <a href="<?php echo $visit_knowledgebase_url; ?>" class="knowledge-btnW" aria-label="KnowledgeBase Title">
            <?php echo $visit_knowledgebase_cta; ?>
            <span>
               <svg xmlns="http://www.w3.org/2000/svg" width="25" height="18" viewBox="0 0 25 18">
                  <path id="right-arrow"
                     d="M16.835,4.945a.868.868,0,0,0-1.26,0,.926.926,0,0,0,0,1.277l6.389,6.542H.882a.888.888,0,0,0-.882.9.9.9,0,0,0,.882.916H21.963l-6.389,6.529a.942.942,0,0,0,0,1.29.868.868,0,0,0,1.26,0l7.9-8.09a.9.9,0,0,0,0-1.277Z"
                     transform="translate(0 -4.674)" fill="#76b4aa" />
               </svg>
            </span>
         </a>
      </div>
   </div>
</section>
<?php } wp_reset_postdata();
$podcasts = get_field('podcasts')?get_field('podcasts'):'Podcasts';
$xr_podcast_heading = get_field('xr_podcast_heading')?get_field('xr_podcast_heading'):'Listen to the XR podcast!';
$about_xr_podcast = get_field('about_xr_podcast')?get_field('about_xr_podcast'):'Listen to the XR podcast!';
$assign_xr_podcast = get_field('assign_xr_podcast');
if($assign_xr_podcast){ 
$all_podcasts_url = get_field('all_podcasts_url')?get_field('all_podcasts_url'):'javascript:void(0)'; ?>
<!-- knoledge section start -->
<!-- listen sec start -->
<section class="listen-sec">
   <div class="cst-container">
      <div class="Podcasts-btn tagsbtn">
         <a href="<?php echo $all_podcasts_url; ?>" aria-label="Podcasts Title">
            <svg xmlns="http://www.w3.org/2000/svg" width="16.344" height="17.252" viewBox="0 0 16.344 17.252">
               <path id="Icon_material-headset" data-name="Icon material-headset" d="M12.672,1.5A8.173,8.173,0,0,0,4.5,9.672v6.356a2.72,2.72,0,0,0,2.724,2.724H9.948V11.488H6.316V9.672a6.356,6.356,0,1,1,12.712,0v1.816H15.4v7.264H18.12a2.72,2.72,0,0,0,2.724-2.724V9.672A8.173,8.173,0,0,0,12.672,1.5Z" transform="translate(-4.5 -1.5)"/>
            </svg>
            <?php echo $podcasts; ?>
         </a>
      </div>
      <div class="listentxt-mx-w">
         <h3 class="HeadingH3-25-bold"><?php echo $xr_podcast_heading; ?></h3>
         <p class="font-18text "><?php echo $about_xr_podcast; ?></p>
      </div>
      <div  id ="listencards" class="istencards-wrap owl-arrow-top  owl-carousel owl-theme">
        <?php foreach($assign_xr_podcast as $assign_xr){ 
          $assign_xr_thumbnails = get_the_post_thumbnail_url($assign_xr); 
          $default_img = get_stylesheet_directory_uri().'/img/woocommerce-placeholder.png';
                  $assign_xr_thumbnail = $assign_xr_thumbnails?$assign_xr_thumbnails:$default_img;
                  
                  $result_yts =  get_post_meta($assign_xr->ID,'videos_url');
                
            $links = $result_yts[0];
            
            $video_id = explode("?v=", $links); // For videos like http://www.youtube.com/watch?v=...
            if (empty($video_id[1]))
                $video_id = explode("/v/", $links); // For videos like http://www.youtube.com/watch/v/..

            $video_id = explode("&", $video_id[1]); // Deleting any other params
            $video_id = $video_id[0];
                  
                  ?>
         <div class="item">
            <div class="listen-vd-cards">
               <a href="<?php echo get_the_permalink($assign_xr->ID); ?>" aria-label="Podcasts Title">
                  <div class="listen-vd">
                     <img src="<?php echo $assign_xr_thumbnail; ?>"  alt="<?php echo get_the_title($assign_xr); ?>"/>
                  </div>
                  <div class="listen-ul">
                     <h3 class="font-20text listencard-w"><?php echo get_the_title($assign_xr); ?>
                     </h3>
                     <ul class="listing-svg">
                        <li class="timeline-li">
                           <img src="<?php echo get_stylesheet_directory_uri();?>/img/watch-icon-svg.svg" alt="<?php echo get_the_title($assign_xr); ?>"/> 
                           <span calss="dayago font-16text "><?php $date = get_the_date( get_option('date_format'), $assign_xr->ID);
                                      echo $date; ?></span>
                        </li>
                        <!-- <li class="timeline-li">
                           <img src="</?php echo get_stylesheet_directory_uri();?>/img/cardwave-sound-icon-svg.svg" alt="</?php echo get_the_title($assign_xr); ?>" />
                           <span calss="Timeago font-16text "></?php echo getDuration($video_id); ?></span>
                           
                        </li> -->
                     </ul>
                  </div>
               </a>
            </div>
         </div>
        
         <?php } 
         $all_podcasts_text = get_field('all_podcasts_text')?get_field('all_podcasts_text'):'All Podcasts';
         $all_podcasts_url = get_field('all_podcasts_url')?get_field('all_podcasts_url'):'javascript:void(0)';
         ?>
         <!-- items -->
      </div>
      <div class="PageBtn mt-42">
         <a href="<?php echo $all_podcasts_url; ?>" class="knowledge-btn guide-clr" aria-label="All Podcasts Title"><?php echo $all_podcasts_text; ?></a>
      </div>
   </div>
</section>
<?php } ?>
<!-- listen sec end -->

<?php get_footer();?>