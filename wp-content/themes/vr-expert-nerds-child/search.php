<?php
get_header();
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
<?php   

            $search_key = get_search_query();
            $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
            $post_per_page = get_field('posts_per_page','option') ? get_field('posts_per_page','option') : 9 ;
            $args = array(  
                'post_type' =>  array( 'post', 'database-xr') ,
                'post_status' => 'publish',
                'search_prod_title' => esc_attr($search_key),
               // 'meta_key' => 'post_views_count',
               // 'orderby' => 'meta_value_num', 
               // 'order' => 'DESC',
               'paged' => $paged,
               'posts_per_page' => $post_per_page , 
                
            );
            
            add_filter( 'posts_where', 'title_filter', 10, 2 );
            $loop = new WP_Query( $args );
            $sort_by_filter_heading = get_field('sort_by_filter_heading','option')?get_field('sort_by_filter_heading','option'):'Sort by';
            $most_popular = get_field('most_popular','option');
            $newest_heading = get_field('newest_heading','option');
            $oldest_heading = get_field('oldest_heading','option');
    ?>
<section class="News-sec newsSection">
<input type="hidden" id="search_query" value="<?php echo $search_key;?>">
   <div class="cst-container">
      <?php $results_for_your_search = get_field('results_for_your_search_of','option')?get_field('results_for_your_search_of','option'):'Results for your search of';
?>
     <div class="ResultS-items">
      <p class="result-search"><?php echo $results_for_your_search;?> "<?php echo $search_key; ?>" </p>
      </div>

      <div class="wrap-alltext sideWidth ">
         <div class="Left-news left-Width">
            <div class="News-content">
               
               <?php if($loop->have_posts()){ ?>
               <div class="popular-leftmenu">
                  <span class="font-18text"><?php echo $sort_by_filter_heading; ?></span> 
                  <div class="select-dropdown">
                     <button href="#" role="button" data-value="" class="select-dropdown__button">
                        <span><?php echo $most_popular; ?></span> 
                        <svg xmlns="http://www.w3.org/2000/svg" width="23" height="9" viewBox="0 0 23 9">
                           <text id="_" data-name=">" transform="translate(23) rotate(90)" fill="#000" font-size="16" font-family="Poppins-Regular, Poppins">
                              <tspan x="0" y="17">&gt;</tspan>
                           </text>
                        </svg>
                     </button>
                     
                     <ul class="select-dropdown__list search_class">
                        <?php if($most_popular){ ?>
                           <li data-value="mostpopular" id ="mostpopular" class="select-dropdown__list-item active"  ><?php echo $most_popular; ?></li>
                        <?php } ?>
                        <?php if($newest_heading){ ?>
                        <li data-value="newest" id = "newest" class="select-dropdown__list-item"   ><?php echo $newest_heading; ?></li>
                        <?php } ?>
                        <?php if($oldest_heading){ ?>
                        <li data-value="oldest" id = "oldest" class="select-dropdown__list-item" ><?php echo $oldest_heading; ?></li>
                        <?php } ?>
                     </ul>
                     <input type="hidden" id ="sortBy" data-id="<?php echo $term->term_id;  ?>" value="mostpopular"/>
                     <input type="hidden" id ="paged" value="<?php echo $paged;  ?>"/>
                  </div>
               </div>
               <?php } ?>
            </div>
            <!-- filter -->
            <?php if($loop->have_posts()){ ?>
            <div class="news-usdevider"></div>
              <div id="sortbyfilter">
               <div class="newsItems">
                  <?php while($loop->have_posts()){ $loop->the_post();
                
                        $posts_id = get_the_ID($loop);
                     
                        $featuredurls = get_the_post_thumbnail_url($posts_id);
                       
                        $default_img = get_stylesheet_directory_uri().'/img/woocommerce-placeholder.png';
                        $featuredurl = $featuredurls?$featuredurls:$default_img;
                        ?>
                  <div class="News-Allcards">
                     <div class="newscards-img">
                        <a href="<?php echo get_the_permalink($posts_id); ?>">
                        <img src="<?php echo $featuredurl; ?>" />
                       </a>
                     </div>
                     <div class="nwcard-content">
                        <div class="news-buttons">
                           
                              <?php $cat_news= get_the_category( $posts_id);
                              $count = 0;
                           foreach($cat_news as $cd){ 
                              if($count<=2){ ?>
                           <div class="newsbtn">
                              <a href="<?php echo get_category_link($cd->term_id); ?>" class="font-16text" ><?php echo $cd->cat_name; ?></a>
                              </div>
                              <?php $count++; }} ?>       
                        </div>
                        <a href="<?php echo get_the_permalink($posts_id); ?>">
                        <p class=" font-20text"><?php echo get_the_title($posts_id);  ?>
                        </p>
                        <ul class="font-16tex">
                           <li>
                              <svg id="Icon_ionic-md-time" data-name="Icon ionic-md-time"
                                 xmlns="http://www.w3.org/2000/svg" width="16.91" height="16.91"
                                 viewBox="0 0 16.91 16.91">
                                 <path id="Path_1442" data-name="Path 1442"
                                    d="M11.822,3.375a8.455,8.455,0,1,0,8.463,8.455A8.452,8.452,0,0,0,11.822,3.375Zm.008,15.219a6.764,6.764,0,1,1,6.764-6.764A6.764,6.764,0,0,1,11.83,18.594Z"
                                    transform="translate(-3.375 -3.375)" fill="#1f1f1f" />
                                 <path id="Path_1443" data-name="Path 1443"
                                    d="M17.806,10.688H16.538v5.073l4.439,2.663.634-1.041-3.8-2.256Z"
                                    transform="translate(-8.928 -6.46)" fill="#1f1f1f" />
                              </svg><span>
                              <?php $date = get_the_date( get_option('date_format'), $posts_id);
                                       echo $date; ?>
                              </span>
                           </li>
                           <li>
                              <svg xmlns="http://www.w3.org/2000/svg" width="19.45" height="15.128"
                                 viewBox="0 0 19.45 15.128">
                                 <path id="Icon_awesome-comments" data-name="Icon awesome-comments"
                                    d="M14.047,7.653c0-2.985-3.144-5.4-7.023-5.4S0,4.668,0,7.653a4.581,4.581,0,0,0,1.283,3.107A7.6,7.6,0,0,1,.074,12.6a.268.268,0,0,0-.051.294.264.264,0,0,0,.246.162,5.945,5.945,0,0,0,3-.844,8.592,8.592,0,0,0,3.758.844C10.9,13.055,14.047,10.638,14.047,7.653Zm4.12,7.429a4.575,4.575,0,0,0,1.283-3.107c0-2.259-1.807-4.194-4.366-5a5.018,5.018,0,0,1,.044.679c0,3.576-3.637,6.483-8.1,6.483a10.124,10.124,0,0,1-1.07-.064,7.3,7.3,0,0,0,6.473,3.306,8.545,8.545,0,0,0,3.758-.844,5.945,5.945,0,0,0,3,.844.266.266,0,0,0,.246-.162.271.271,0,0,0-.051-.294A7.519,7.519,0,0,1,18.167,15.081Z"
                                    transform="translate(0 -2.25)" />
                              </svg>
                              <?php  $comment_text = get_field('comment_text', 'option')?get_field('comment_text','option'):"comment"; 
                            $comments_sec_text = get_field('comments_sec_text','option')?get_field('comments_sec_text','option'):"comments";
                            $article_comment = get_comments_number( $posts_id ); ?>
                              <span><?php echo $article_comment;  echo '&nbsp';if($article_comment<2){ echo  $comment_text; }else{ echo $comments_sec_text; } ?></span>
                           </li>
                        
                        </ul>
                        </a>
                     </div>
                  </div>
                  <?php } ?>
                  <!-- items -->
               </div>
            </div>
            
           
            <div class="PageBtn mt-125">
            <?php $more_button_text = get_field('more_button_text', 'option')?get_field('more_button_text','option'):"Load More"; ?>
               <a href="javascript:void(0)" id="more_posts" data-max-page="<?php echo $loop->max_num_pages; ?>" class="knowledge-btn guide-clr" onclick="searchmore_func()"><?php echo $more_button_text; ?></a>
            </div>
            <?php  remove_filter( 'posts_where', 'title_filter', 10, 2 );
          }wp_reset_postdata(); ?>
         </div>
         <!-- news left Div END -->
         <!-- side bar start -->
         <div class="sideXbar">
         <?php  dynamic_sidebar('searchpage-sidebar');  ?>
         </div>
         <!-- side bar end -->
      </div>
   </div>
</section>
<?php get_footer();?>