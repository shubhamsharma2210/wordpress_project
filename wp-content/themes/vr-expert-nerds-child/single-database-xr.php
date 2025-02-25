<?php
  
  get_header();
  wp_reset_postdata();
  gt_set_post_view();
  $default_img = get_stylesheet_directory_uri().'/img/woocommerce-placeholder.png';
 
  
  $meta = get_post_meta( get_the_ID());
  //print_r($meta);
 
  // echo "<pre>";
  // print_r($meta);
  // if(is_array($meta['post_content'])){
  //   $post_content = $meta['post_content'][0];
  // }else{
  //   $post_content = $meta['post_content'];
  // }
  if(is_array($meta['post_title'])){
    $post_title = $meta['post_title'][0];
  }else{
    $post_title = $meta['post_title'];
  }


  $product_id = get_post_meta(get_the_ID(), 'product_id', true );
  $category_data = get_the_terms(get_the_ID() ,'databasexr_category');
  $Optics = get_post_meta(get_the_ID(), 'Optics', true );
  $Display = get_post_meta(get_the_ID(), 'Display', true );
  $Device = get_post_meta(get_the_ID(), 'Device', true );
  $Sounds_Audio = get_post_meta(get_the_ID(), 'Sounds_Audio', true );
  $Battery = get_post_meta(get_the_ID(), 'Battery', true );
  $Tracking = get_post_meta(get_the_ID(), 'Tracking', true );
  $Connectivity = get_post_meta(get_the_ID(), 'Connectivity', true );
  $General = get_post_meta(get_the_ID(), 'General', true );
  $Fov_Image = get_post_meta(get_the_ID(), 'Fov_Image', true );
  $System = get_post_meta(get_the_ID(), 'System_Type', true);
  $media = get_post_meta(get_the_ID(), 'Media', true);
  $featuredurls = $media['data'][0]['attributes']['formats']['thumbnail']['url'];
  $search_placeholder = get_field('search_placeholder','option')?get_field('search_placeholder','option'):'Search for specifications'; 
  if(is_array($System)){
    $System = $System[0];
  }else{
    $System = $System;
  }
  
  $Storage = get_post_meta(get_the_ID(), 'Storage', true);
  $Software = get_post_meta(get_the_ID(), 'Software', true);

  $catID_parent = $category_data[0]->parent;
if($catID_parent){ 
  $parentCatName = get_the_category_by_ID($catID_parent);
}else{
  $parentCatName = '';
}
 

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

<section class="News-sec xrd-single">
  <div class="cst-container">
    <?php if($parentCatName){ ?>
  <h1 class="HeadingH2-40-bold"><?php  echo $parentCatName .' : ' .get_the_title(get_the_ID()); ?></h1>
  <?php } ?>
  <div class="sideWidth">
    <div class="left-Width">

       <div class="flexbst">
        <?php if($featuredurls){ ?>
      <div class="pico-img">
        <img src="https://database.vr-expert.com<?php  echo $featuredurls; ?>" alt="" />
      </div>
      <?php }else{ ?>
        <div class="pico-img">
          <img src="<?php  echo $default_img; ?>" alt="" />
        </div>
        <?php } ?>
      <div class="if-btn-have">

      
      <a href="" class="knowledge-btn com-btn">Read Review</a>
      <a href="" class="knowledge-btn com-btn">Visit Product Page</a>
      <a href="" class="knowledge-btn com-btn">Rent Product </a>

      </div>
      </div>
      <!-- table end -->
    
 <!-- end text more -->
  
      <div class="TableDiv">
      
        <div class="showmoreTxt font-18text Ktext show-more-height">
            <p><?php the_content(); ?><p>
          </div>
          <?php $show_more = get_field('show_more','option')?get_field('show_more','option'):'Show more';
             if($show_more){ ?>
          <div class="UsesBox UsesBox-active">
          <button class="show-more showmor-less"><?php echo $show_more; ?></button>
          </div>
          <?php  } ?>

        <!-- se -->
        </div>
        <div class="wrapSr">
          <div class="searchK font-18text">
            <input type="text" class="searchTerm" placeholder="<?php echo $search_placeholder; ?>" id="search_field">
            <button type="submit" class="searchButton">
            <img src="<?php echo get_stylesheet_directory_uri();?>/img/color-change.png" alt="" />
            </button>
          </div>
        </div>
  <div class="shortcode-tab">
        <?php $shortcode_txt = get_field('xr-db-spec-table'); 
             echo $shortcode_txt;
      ?>
      </div>
        <?php wp_reset_postdata(); $related_article = get_field('related_article_head', 'option')?get_field('related_article_head', 'option'):'Related Articles';
               $assign_article = get_field('assignxr_article');
               if($assign_article){
               ?>
               <!-- Related Articles -->
               <div class="Related-articles single-Rl">
                  <h2 class="HeadingH3-25-bold"><?php echo $related_article; ?></h2>
                  <div class="newsItems">
                     <?php foreach($assign_article as $asn_article_id){
                        $assign_article_thumbnails = get_the_post_thumbnail_url($asn_article_id);
                       
                         $assign_article_thumbnails = $assign_article_thumbnails?$assign_article_thumbnails:$default_img; ?>
                     <div class="News-Allcards">
                        
                        <div class="newscards-img">
                          <a href="<?php echo get_the_permalink($asn_article_id->ID); ?>">
                           <img src="<?php echo $assign_article_thumbnails; ?>"  alt="<?php echo get_the_title($asn_article_id);  ?>"/>
                           </a>
                        </div>
                        
                        <div class="nwcard-content">
                           <div class="news-buttons">
                             <?php $cat_news= get_the_category( $asn_article_id->ID );
                               foreach($cat_news as $cd){ ?>
                              <div class="newsbtn">
                                 <a href="<?php echo get_category_link($cd->term_id); ?>" class="font-16text"><?php echo $cd->cat_name; ?></a>
                              </div>
                              <?php } ?>
                              
                           </div>
                           <a href="<?php echo get_the_permalink($asn_article_id->ID); ?>">
                           <p class=" font-20text">
                             <?php echo get_the_title($asn_article_id);  ?>
                           </p>
                           <ul class="font-16tex">
                              <li>
                                 <svg id="Icon_ionic-md-time" data-name="Icon ionic-md-time" xmlns="http://www.w3.org/2000/svg" width="16.91" height="16.91" viewBox="0 0 16.91 16.91">
                                    <path id="Path_1442" data-name="Path 1442" d="M11.822,3.375a8.455,8.455,0,1,0,8.463,8.455A8.452,8.452,0,0,0,11.822,3.375Zm.008,15.219a6.764,6.764,0,1,1,6.764-6.764A6.764,6.764,0,0,1,11.83,18.594Z" transform="translate(-3.375 -3.375)" fill="#1f1f1f" />
                                    <path id="Path_1443" data-name="Path 1443" d="M17.806,10.688H16.538v5.073l4.439,2.663.634-1.041-3.8-2.256Z" transform="translate(-8.928 -6.46)" fill="#1f1f1f" />
                                 </svg>
                                 <span><?php $posted= get_post_time( 'U', false, $asn_article_id, false );
                                     $ago_text = get_sub_field('ago_text', 'option')?get_sub_field('ago_text','option'):"ago"; 
                                     $date = $posted >= strtotime($loop->post_date) ? human_time_diff($posted) .'&nbsp'. $ago_text : date('d F Y', $posted);
                                     echo $date; ?>
                                 </span>
                              </li>
                              <li>
                                 <svg xmlns="http://www.w3.org/2000/svg" width="19.45" height="15.128" viewBox="0 0 19.45 15.128">
                                    <path id="Icon_awesome-comments" data-name="Icon awesome-comments" d="M14.047,7.653c0-2.985-3.144-5.4-7.023-5.4S0,4.668,0,7.653a4.581,4.581,0,0,0,1.283,3.107A7.6,7.6,0,0,1,.074,12.6a.268.268,0,0,0-.051.294.264.264,0,0,0,.246.162,5.945,5.945,0,0,0,3-.844,8.592,8.592,0,0,0,3.758.844C10.9,13.055,14.047,10.638,14.047,7.653Zm4.12,7.429a4.575,4.575,0,0,0,1.283-3.107c0-2.259-1.807-4.194-4.366-5a5.018,5.018,0,0,1,.044.679c0,3.576-3.637,6.483-8.1,6.483a10.124,10.124,0,0,1-1.07-.064,7.3,7.3,0,0,0,6.473,3.306,8.545,8.545,0,0,0,3.758-.844,5.945,5.945,0,0,0,3,.844.266.266,0,0,0,.246-.162.271.271,0,0,0-.051-.294A7.519,7.519,0,0,1,18.167,15.081Z" transform="translate(0 -2.25)" />
                                 </svg>
                                 <?php  $comment_text = get_sub_field('comment_text', 'option')?get_sub_field('comment_text','option'):"comment"; 
                                        $comments_sec_text = get_sub_field('comments_sec_text','option')?get_sub_field('comments_sec_text','option'):"comments"; 
                                        $article_comment = get_comments_number( $asn_article_id ); ?>
                                 <span><?php if($article_comment>0){ echo $article_comment; }else{ echo '0'; }  echo '&nbsp'; if($article_comment<2){ echo $comment_text; }else{ echo $comments_sec_text; } ?></span>
                              </li>
                           </ul>
                           </a>
                        </div>
                     </div>
                     <?php } ?>
                     <!-- items -->
                     
                  </div>
               </div>
               <?php }else{ wp_reset_postdata();
                 //  $post_per_page = get_field('posts_per_page','option') ? get_field('posts_per_page','option') : 3 ;
                        $args = array(  
                           'post_type' => 'post',
                           'post_status' => 'publish',
                           'orderby' => 'date', 
                           'order' => 'desc',
                           'paged' => $paged,
                           "posts_per_page" =>3,
                        );
                        
                        $loop = new WP_Query( $args );
                        if($loop->have_posts()){
                           
                        ?>
                  <div class="Related-articles single-Rl">
                    <h2 class="HeadingH3-25-bold"><?php echo $related_article; ?></h2>
                    <div class="newsItems">
                      <?php while($loop->have_posts()){ $loop->the_post(); 
                        $asn_article_id = $loop->ID;
                        $assign_article_thumbnails = get_the_post_thumbnail_url($asn_article_id);
                        $assign_article_thumbnails = $assign_article_thumbnails?$assign_article_thumbnails:$default_img;
                          ?>
                      <div class="News-Allcards">
                     
                          <div class="newscards-img">
                           <a href="<?php echo get_the_permalink($asn_article_id->ID); ?>">
                            <img src="<?php echo $assign_article_thumbnails; ?>" <?php echo get_the_title($asn_article_id);  ?> />
                            </a>
                          </div>
                      
                          <div class="nwcard-content">
                            <div class="news-buttons">
                              <?php $cat_news= get_the_category( $asn_article_id );
                                foreach($cat_news as $cd){ ?>
                                <div class="newsbtn">
                                  <a href="<?php echo get_category_link($cd->term_id); ?>" class="font-16text"><?php echo $cd->cat_name; ?></a>
                                </div>
                                <?php } ?>
                                
                            </div>
                            <a href="<?php echo get_the_permalink($asn_article_id); ?>">
                            <p class=" font-20text">
                              <?php echo get_the_title($asn_article_id);  ?>
                            </p>
                            <ul class="font-16tex">
                                <li>
                                  <svg id="Icon_ionic-md-time" data-name="Icon ionic-md-time" xmlns="http://www.w3.org/2000/svg" width="16.91" height="16.91" viewBox="0 0 16.91 16.91">
                                      <path id="Path_1442" data-name="Path 1442" d="M11.822,3.375a8.455,8.455,0,1,0,8.463,8.455A8.452,8.452,0,0,0,11.822,3.375Zm.008,15.219a6.764,6.764,0,1,1,6.764-6.764A6.764,6.764,0,0,1,11.83,18.594Z" transform="translate(-3.375 -3.375)" fill="#1f1f1f" />
                                      <path id="Path_1443" data-name="Path 1443" d="M17.806,10.688H16.538v5.073l4.439,2.663.634-1.041-3.8-2.256Z" transform="translate(-8.928 -6.46)" fill="#1f1f1f" />
                                  </svg>
                                  <span><?php $date = get_the_date( get_option('date_format'), $asn_article_id);
                                                         echo $date; ?>
                                  </span>
                                </li>
                                <li>
                                  <svg xmlns="http://www.w3.org/2000/svg" width="19.45" height="15.128" viewBox="0 0 19.45 15.128">
                                      <path id="Icon_awesome-comments" data-name="Icon awesome-comments" d="M14.047,7.653c0-2.985-3.144-5.4-7.023-5.4S0,4.668,0,7.653a4.581,4.581,0,0,0,1.283,3.107A7.6,7.6,0,0,1,.074,12.6a.268.268,0,0,0-.051.294.264.264,0,0,0,.246.162,5.945,5.945,0,0,0,3-.844,8.592,8.592,0,0,0,3.758.844C10.9,13.055,14.047,10.638,14.047,7.653Zm4.12,7.429a4.575,4.575,0,0,0,1.283-3.107c0-2.259-1.807-4.194-4.366-5a5.018,5.018,0,0,1,.044.679c0,3.576-3.637,6.483-8.1,6.483a10.124,10.124,0,0,1-1.07-.064,7.3,7.3,0,0,0,6.473,3.306,8.545,8.545,0,0,0,3.758-.844,5.945,5.945,0,0,0,3,.844.266.266,0,0,0,.246-.162.271.271,0,0,0-.051-.294A7.519,7.519,0,0,1,18.167,15.081Z" transform="translate(0 -2.25)" />
                                  </svg>
                                  <?php  $comment_text = get_sub_field('comment_text', 'option')?get_sub_field('comment_text','option'):"comment"; 
                                          $comments_sec_text = get_sub_field('comments_sec_text','option')?get_sub_field('comments_sec_text','option'):"comments"; ?>
                                  <span><?php echo $article_comment = $loop->comment_count; echo '&nbsp'; if($article_comment<2){ echo $comment_text; }else{ echo $comments_sec_text; } ?></span>
                                </li>
                            </ul>
                            </a>
                          </div>
                      </div>
                      <?php } ?>
                      <!-- items -->
                      
                    </div>
                </div>
               <?php } } wp_reset_postdata();
               $related_prod_head = get_field('related_prod_head','option')?get_field('related_prod_head','option'):'Related products';
               $assignxr_product = get_field('assignxr_product');
               if($assignxr_product){
               ?>
      <!-- news xR End -->
      <div class="Last-Related">
        <h3 class="HeadingH3-25-bold"><?php echo $related_prod_head; ?></h3>
        <div class="Grids-3 Xr-3">
            <?php foreach($assignxr_product as $assignxr_product_id){
                        $assignxr_product_thumbnails = get_the_post_thumbnail_url($assignxr_product_id->ID);
                       
                         $assignxr_product_thumbnails = $assignxr_product_thumbnails?$assignxr_product_thumbnails:$default_img; ?>
          <a href="<?php echo  get_the_permalink($assignxr_product_id); ?>">
            <div class="Pd-dataXr">
              <img src="<?php echo $assignxr_product_thumbnails; ?>" alt="" />
              <p class="font-20text"><?php echo get_the_title($assignxr_product_id); ?></p>
            </div>
          </a>
          <?php } ?>
        
        </div>
      </div>
      <?php }else{ wp_reset_postdata();
     
          $post_per_page = get_field('posts_per_page','option') ? get_field('posts_per_page','option') : 3 ;

          $termsId = array();
          if($category_data){
              foreach($category_data as $category_id){
                  $termId =  $category_id->term_id;
                  array_push($termsId,$termId);
                }
          }
         
                              $args = array(
                                'post_type' => 'database-xr',
                                'post_status' => 'publish',
                                'orderby' => 'date', 
                                'order' => 'desc',
                                'post__not_in'  => array(get_the_ID()),
                                'paged' => $paged,
                             
                                'posts_per_page' => $post_per_page,
                                      'tax_query' => array(
                                                  'relation' => 'OR',
                                                  array(
                                                      'taxonomy' => 'databasexr_category',
                                                      'field' => 'term_id',
                                                      'terms' => $termsId,
                                                      'operator'=>'IN'
                                                  ),
                                              ),
                              );


         $loop = new WP_Query( $args );
         if($loop->have_posts()){ ?>
        <div class="Last-Related">
            <h3 class="HeadingH3-25-bold"><?php echo $related_prod_head; ?></h3>
            <div class="Grids-3 Xr-3">
                <?php  while($loop->have_posts()){ $loop->the_post(); 
                    $assignxr_product_id = get_the_ID();
                            $assignxr_product_thumbnails = get_the_post_thumbnail_url($assignxr_product_id);
                            
                            $assignxr_product_thumbnails = $assignxr_product_thumbnails?$assignxr_product_thumbnails:$default_img; ?>
            <a href="<?php echo  get_the_permalink($assignxr_product_id); ?>">
                <div class="Pd-dataXr">
                <img src="<?php echo $assignxr_product_thumbnails; ?>" alt="" />
                <p class="font-20text"><?php echo get_the_title($assignxr_product_id); ?></p>
                </div>
            </a>
            <?php } ?>
            
            </div>
      </div>
        
        <?php } } ?>
    </div>
    <!-- news left Div END -->
    <!-- side bar start -->
    <div class="sideXbar">
    <?php dynamic_sidebar('categorypage-sidebar');  ?>
    </div>
    <!-- side bar End -->
  </div>
</section>
<?php get_footer();?>