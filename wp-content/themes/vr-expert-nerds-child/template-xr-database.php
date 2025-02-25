<?php 
  /* template name: XR Database Page */
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

<?php      $parent_term = term_exists( 'xr-database', 'databasexr_category' );
          $parent_term_id = $parent_term['term_id'];
                 $args = array(  
                   'post_type' => 'database-xr',
                   'post_status' => 'publish',
                      'tax_query' => array(
                                  'relation' => 'OR',
                                  array(
                                      'taxonomy' => 'databasexr_category',
                                      'field' => 'term_id', 
                                      'terms' => $parent_term_id,
                                  ),
                      )
              );
           
            $loop = new WP_Query( $args );
         
           
              $subcategories = get_terms(
                array(
                    'taxonomy'   => 'databasexr_category',
                    'parent'     => $parent_term_id,
                    'hide_empty' => false
                )
              );
              $term_name = get_term( $parent_term_id )->name;
         
            $sort_by_filter_heading = get_field('sort_by_heading','option')?get_field('sort_by_heading','option'):'Sort by';
            $most_popular = get_field('most_popular_head','option');
            $newest_heading = get_field('newest_head','option');
            $oldest_heading = get_field('oldest_head','option');
            $all_brands_heading = get_field('all_brands_heading','option')?get_field('all_brands_heading','option'):'';
            $devices_sec_for_brand = get_field('devices_sec_for_brand','option')?get_field('devices_sec_for_brand','option'):'';
    ?>
<section class="News-sec newsSection xrDb">
  <div class="cst-container">
  <h1 class="HeadingH2-40-bold"><?php echo $term_name.' : ' .$all_brands_heading; ?></h1>
  <div class="review-alltext sideWidth gap-xr">
    <div class="Left-news left-Width">
      <div class="News-content mxwth-p">
        <p class="font-18text"><?php echo $term->description; ?>
        </p>
        <?php if( $subcategories ){  ?>
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
            <ul class="select-dropdown__list cat_sortby">
              <li data-value="mostpopular" class="select-dropdown__list-item active" ><?php echo $most_popular; ?>  </li>
              <li data-value="newest" class="select-dropdown__list-item"><?php echo $newest_heading; ?></li>
              <li data-value="oldest" class="select-dropdown__list-item"><?php echo $oldest_heading; ?></li>
            </ul>
            <input type="hidden" id ="sortBy" data-id="<?php echo $parent_term_id;  ?>" value="mostpopular"/>
          </div>
        </div>
        <?php } ?>
      </div>
      <?php if( $subcategories ){ 
      
        ?>
      <div class="news-usdevider"></div>
      <div id="sortbycategory">
      <div class="XR-data">
       <?php   
                     foreach ( $subcategories as $subcategory ) {
                    
                     $subcat_name = $subcategory->name;
                     $subcat_id   = $subcategory->term_id;
                     $subcat_count = $subcategory->count;
                     $subcat_slug = $subcategory->slug;
                     $counter = 0;
                     $subcat_posts = get_posts('cat=' . $subcat_id);
                     foreach ($subcat_posts as  $subcat_post){
                     $views=  absint( get_post_meta($subcat_post->ID, 'post_views_count', true ) );
                     $counter += $views;
                      }
                     
                    $logo_array  = get_term_meta( $subcat_id, 'Logo_url', true );
                   
                    
                   $subcat_logo = $logo_array['data']['attributes']['url'];
                   $default_img = get_stylesheet_directory_uri().'/img/woocommerce-placeholder.png';
                     ?>
              
            <a href="<?php echo get_category_link($subcat_id); ?>">
              <div class="All-data">
              
                <div class="cstmbrandname"> 
                <h2 class="HeadingH3-25-bold"><?php echo $subcat_name; ?></h2>
                <p class="font-20text"><?php echo $subcat_count.' '.$devices_sec_for_brand; ?></p>
                </div>
                <div class="cstmbrandlogo"> 
                  <?php if($subcat_logo){ ?>
                  <img src="https://database.vr-expert.com<?php echo $subcat_logo; ?>" alt="<?php echo $subcat_name; ?>"/>
                  <?php }else{ ?>
                    <img src="<?php echo $default_img; ?>" alt="<?php echo $subcat_name; ?>"/>
                  <?php } ?>
                </div>
              </div>
            </a>
         <?php } ?>
       </div>
      </div>
      <?php } ?>
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