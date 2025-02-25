<?php
  /* template name: Search Page */
  get_header();
  ?>
<section class="ComanBreadcrumb">
  <div class="cst-container">
    <div class="home-icon">
      <ul class="breadcrumb">
        <?php get_breadcrumb(); 
        $most_popular_searches_heading= get_field('most_popular_searches_heading')?get_field('most_popular_searches_heading'):'Most popular searches';
        $assign_most_popular_searchs  = get_field('assign_most_popular_searchs');
        $post_per_page = get_field('search_posts_per_page') ? get_field('search_posts_per_page') : 9;
        $placeholder_text = get_field('search_placeholder_text') ? get_field('search_placeholder_text') : 'Search on VR Nerds';
        ?>
      </ul>
    </div>
  </div>
</section>
<!-- Search -->
<section class="top-Search">
  <div class="cst-container">
   
    <form action="<?php echo home_url(); ?>">
      <div class="searchK font-18text">
        <input type="text" class="input-grey-rounded"  autocomplete="off" placeholder="<?php echo $placeholder_text; ?>"  value="<?php echo get_search_query(); ?>" name="s" id="Inputarticle" onkeyup="fetchResults()" >
        <div class="e-search" style="display:none;">
              <ul id="article-fetchresult">
              </ul>   
            </div>
      </div>
       
    </form>
    <?php if(get_field('most_popular_searches_keywords')){
      while(the_repeater_field('most_popular_searches_keywords')){
        if(get_sub_field('popular_searches_keywords')){ ?>
          <li><a href="<?php echo site_url().'/?s='.get_sub_field('popular_searches_keywords'); ?>"><?php the_sub_field('popular_searches_keywords'); ?></a>  </li>
        <?php }
      }
    }

    if($assign_most_popular_searchs){ ?>
      <div class="Most-viewsElemeny">
      <div class="mbArView">
        <h2 class="HeadingH3-25-bold pb-27"><?php echo $most_popular_searches_heading; ?> <span class="moveAr"><img src="<?php echo get_stylesheet_directory_uri();?>/img/black-aw.png" alt="<?php echo $most_popular_searches_heading; ?>"/></span></h2>
      </div>
      <div class="GridsFlex font-20text mbActive">
       
        <div class="MostProducts w-100">
          <ul>
            <?php  foreach($assign_most_popular_searchs as $assign_most_searchs){
          
             $mst_pop_title = mb_strimwidth(get_the_title($assign_most_searchs), 0, 30, '....'); ?>
            <li><a href="<?php echo get_the_permalink($assign_most_searchs); ?>"><?php echo strip_tags($mst_pop_title);  ?></a></li>
            <?php } ?>
           
          </ul>
        </div>
        
      </div>
    </div>
    <?php   }else{
      $args = array(
        "post_type" => "post",
        "post_status" => "publish",
        "posts_per_page" => $post_per_page,
        "meta_key" => "post_views_count",
        "orderby"=> "meta_value_num",
        "order" => "DESC"
        ); $loop = new WP_Query($args);
        if ($loop->have_posts()) {
        ?>
      <div class="Most-viewsElemeny">
        <div class="mbArView">
          <h2 class="HeadingH3-25-bold pb-27"><?php echo $most_popular_searches_heading; ?> <span class="moveAr"><img src="<?php echo get_stylesheet_directory_uri();?>/img/black-aw.png" alt="<?php echo $most_popular_searches_heading; ?>"/></span></h2>
        </div>
        <div class="GridsFlex font-20text mbActive">
         
          <div class="MostProducts w-100">
            <ul>
              <?php  while ($loop->have_posts()) {
              $loop->the_post();
            
               $posts_id = get_the_ID($loop);
               $mst_pop_title = mb_strimwidth(get_the_title($posts_id), 0, 30, '....'); ?>
              <li><a href="<?php echo get_the_permalink($posts_id); ?>"><?php echo strip_tags($mst_pop_title);  ?></a></li>
              <?php } ?>
             
            </ul>
          </div>
          
        </div>
      </div>
      <?php }  } ?>
   
    
  </div>
</section>

<!-- Search Section END -->
<?php wp_reset_postdata(); 
 $assign_categories_thumb = get_field('assign_categories_thumb');
$read_more_button_text = get_field('read_more_button_text'); 
if($assign_categories_thumb){ ?>
<!--  Section END -->
<section class="cat-Click">
  <div class="cst-container">
    <div class="Grids-4 On4grids">
      <?php foreach($assign_categories_thumb as $assign_catid){ 
      
        $assign_catid_thumbnail = get_field('category_thumbnail', 'category_'.$assign_catid->term_id ); 
        
        $default_img = get_stylesheet_directory_uri().'/img/woocommerce-placeholder.png';
           $assign_catid_thumbnail = $assign_catid_thumbnail?$assign_catid_thumbnail:$default_img; 
          ?>
      <div class="catItems position-relative">
        <a href="<?php echo get_category_link($assign_catid->term_id); ?>">
          <img src="<?php echo $assign_catid_thumbnail; ?>" alt="<?php echo $assign_catid->name; ?>"/> 
          <div class="overDiv">
            <p class="font-18text"><?php echo $assign_catid->name; ?></p>
            <span class="mhide-mb"><?php echo $read_more_button_text ; ?></span>
          </div>
        </a>
      </div>
      <?php } ?>
    
     
    
    </div>
  </div>
</section>
<?php } wp_reset_postdata(); $most_popular_podcasts = get_field('most_popular_podcasts'); 
$most_popular_podcasts_head = get_field('most_popular_podcasts_head')?get_field('most_popular_podcasts_head'):'Most popular podcasts';
if($most_popular_podcasts){ ?>
<!-- Section END -->
<section class="most-podcasts background7">
  <div class="cst-container">
    <h3 class="HeadingH2-30-bold pb-38"><?php echo $most_popular_podcasts_head ; ?></h3>
    <div id ="MoreListenV" class="m-most-Vid owl-arrow-top owl-arrow-top owl-carousel owl-theme">
      <?php foreach($most_popular_podcasts as $most_popular_podcastsid){ 
        $most_popular_podcast_thumbnail = get_the_post_thumbnail_url($most_popular_podcastsid); 
        $default_img = get_stylesheet_directory_uri().'/img/woocommerce-placeholder.png';
           $most_popular_podcast_thumbnail = $most_popular_podcast_thumbnail?$most_popular_podcast_thumbnail:$default_img; ?>
      <div class="item">
        <div class="listen-vd-cards topmost-card">
          <a href="<?php echo get_the_permalink($most_popular_podcastsid); ?>">
            <div class="listen-vd">
              <img src="<?php echo $most_popular_podcast_thumbnail; ?>" alt="<?php echo get_the_title($most_popular_podcastsid); ?>"/>
            </div>
            <div class="listen-ul">
            <?php $popular_podcaststitle = mb_strimwidth(get_the_title($most_popular_podcastsid), 0, 60, '....');  ?>
              <h3 class="font-20text"><?php echo $popular_podcaststitle; ?>
              </h3>
              <p class="font-18text"><?php echo get_the_content($most_popular_podcastsid); ?></p>
              <ul class="listing-svg">
                <li class="timeline-li">
                  <img src="<?php echo get_stylesheet_directory_uri();?>/img/cardwave-sound-icon-svg.svg" alt="<?php echo get_the_title($most_popular_podcastsid); ?>" />
                  <span calss="Timeago font-16text ">00:16:01</span>
                </li>
                <li class="timeline-li">
                  <img src="<?php echo get_stylesheet_directory_uri();?>/img/watch-icon-svg.svg" alt="<?php echo get_the_title($most_popular_podcastsid); ?>"/> 
                  <span calss="dayago font-16text "><?php $date = get_the_date( get_option('date_format'), $most_popular_podcastsid);
                                       echo $date; ?></span>
                </li>
              </ul>
            </div>
          </a>
        </div>
      </div>
      <!-- items -->
      <?php } ?>
     
    </div>
  </div>
</section>
<?php }  wp_reset_postdata(); $assign_all_categories_title = get_field('assign_all_categories_title');
$assign_categories_title = get_field('assign_categories_title'); 
if($assign_all_categories_title){ ?>
<!--  Section END -->
<section class="CatBottom">
  <div class="cst-container">
    <div class="Most-viewsElemeny">
      <h2 class="HeadingH3-25-bold pb-27"><?php echo $assign_categories_title; ?></h2>
      <div class="GridsFlex font-20text">
        <div class="MostProducts w-100">
          <ul>
            <?php foreach($assign_all_categories_title as $assign_categories_id){ ?>
            <li><a href="<?php echo get_category_link($assign_categories_id->term_id); ?>"><?php echo $assign_categories_id->name; ?></a></li>
            <?php } ?>
          </ul>
        </div>
        <!-- items 1 -->
        
      </div>
    </div>
  </div>
</section>
<?php } ?>
<?php get_footer();?>