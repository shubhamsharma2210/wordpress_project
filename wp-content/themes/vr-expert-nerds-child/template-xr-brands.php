<?php
  get_header();
  ?>

  <?php

$terms = get_queried_object();
$founding_year = get_field('founding_year','option')?get_field('founding_year','option' ): 'Founding year';
$employees_count = get_field('employees_count','option' )?get_field('employees_count','option' ): 'Employees';
$url_sec= get_field('url_sec','option')?get_field('url_sec','option'): 'URL';
$locations_sec = get_field('locations_sec','option')?get_field('locations_sec','option' ): 'Locations';
$devices_sec_for_brand = get_field('devices_sec_for_brand','option' )?get_field('devices_sec_for_brand','option' ): 'device';
$brand_heading_section = get_field('brand_heading_section','option' )?get_field('brand_heading_section','option' ): 'Brand';
?>
<section class="ComanBreadcrumb">
  <div class="cst-container">
    <div class="home-icon">
      <ul class="breadcrumb">
         <?php get_breadcrumb();
          $term = get_queried_object();
          $term_vals = get_term_meta( $term->term_id);
        // print_r($term_vals);
         if(is_array($term_vals['post_category_foundingyear'])){
          $term_vals['post_category_foundingyear'] = $term_vals['post_category_foundingyear'][0];
          }else{
            $term_vals['post_category_foundingyear'] = $term_vals['post_category_foundingyear'];
          }
          
          if(is_array( $term_vals['post_category_employeesamount'])){
            $term_vals['post_category_employeesamount'] = $term_vals['post_category_employeesamount'][0];
            }else{
              $term_vals['post_category_employeesamount'] = $term_vals['post_category_employeesamount'];
            }

            if(is_array( $term_vals['post_category_foundingurl'])){
              $term_vals['post_category_foundingurl'] = $term_vals['post_category_foundingurl'][0];
              }else{
                $term_vals['post_category_foundingurl'] = $term_vals['post_category_foundingurl'];
              }
              if(is_array( $term_vals['post_category_foundinglocation'])){
                $term_vals['post_category_foundinglocation'] = $term_vals['post_category_foundinglocation'][0];
                }else{
                  $term_vals['post_category_foundinglocation'] = $term_vals['post_category_foundinglocation'];
                }
          $args = array(  
            'post_type' => 'database-xr',
            'post_status' => 'publish',
               'tax_query' => array(
                           'relation' => 'OR',
                           array(
                               'taxonomy' => 'databasexr_category',
                               'field' => 'term_id', 
                               'terms' => $term->term_id,
                           ),
               )
       );
       $loop = new WP_Query( $args );
       $parent_id = $term->parent;
       if($parent_id){
        $parentTerm = get_term( $parent_id , 'databasexr_category' );
        $term_name = $parentTerm->name;
     }else{
        $term_name = '';
     }
           ?>
      </ul>
    </div>
  </div>
</section>
<section class="News-sec xrd-single">
  <div class="cst-container">
  <h1 class="HeadingH2-40-bold"><?php echo  $term_name.' : '.$term->name; ?> <?php echo $devices_sec_for_brand; ?></h1>
  <div class="sideWidth">
    <div class="left-Width">
          <div class="flex-product-info">
                <div class="unset-400 font-18text">
                    <h3 class="HeadingH3-25-bold">
                    <?php echo $brand_heading_section;?>: <?php echo $term->name; ?>
                    </h3>
                    <p><?php echo category_description(); ?></p>

                </div>
                <div class="list-285">

                  <ul class="list-information">
                    
                    <li class="List-Li-Info font-18text">
                          <div class="SvgIcons">
                          <img src="<?php echo get_stylesheet_directory_uri();?>/img/ionic-ios-calendar.png" alt="" />
                          </div>
                          <div class="Svg-TxtUrl">
                            <?php if($founding_year){?>
                               <span class="m-title"><?php echo $founding_year;?>: </span> <span><?php echo $term_vals['post_category_foundingyear']; ?></span>
                            <?php }?>
                          </div>
                    </li>
                    <li class="List-Li-Info font-18text">
                          <div class="SvgIcons">
                          <img src="<?php echo get_stylesheet_directory_uri();?>/img/ionic-ios-people.png" alt="" />
                          </div>
                          <div class="Svg-TxtUrl">
                            <?php if($employees_count){?>
                               <span class="m-title"><?php echo $employees_count;?>: </span><span><?php echo $term_vals['post_category_employeesamount']; ?></span>
                            <?php }?>
                          </div>
                    </li>
                    
                    <li class="List-Li-Info font-18text">
                          <div class="SvgIcons">
                          <img src="<?php echo get_stylesheet_directory_uri();?>/img/world-wide-web.png" alt="" />
                          </div>
                          <div class="Svg-TxtUrl">
                            <?php if($url_sec){?>
                               <span class="m-title"><?php echo $url_sec;?>: </span><span><?php echo $term_vals['post_category_foundingurl']; ?></span>
                               <?php }?>
                          </div>
                    </li>
                    <li class="List-Li-Info font-18text">
                          <div class="SvgIcons">
                          <img src="<?php echo get_stylesheet_directory_uri();?>/img/material-location-on.png" alt="" />
                          </div>
                          <div class="Svg-TxtUrl">
                          <?php if($locations_sec){?>
                               <span class="m-title"><?php echo $locations_sec;?>: </span> <span><?php echo $term_vals['post_category_foundinglocation']; ?></span>
                               <?php }?>
                          </div>
                    </li>
                  </ul>

                </div>

          </div>
          <?php if($loop->have_posts()){ ?>
          <!-- div product info end -->
          <div class="Grids-3 Xr-3">
            <?php while($loop->have_posts()){ $loop->the_post();
            
              $media = get_post_meta(get_the_ID($loop), 'Media', true);
            
             $featuredurls = $media['data'][0]['attributes']['formats']['thumbnail']['url'];
              // $featuredurls = get_the_post_thumbnail_url($loop->ID);
                       
               $default_img = get_stylesheet_directory_uri().'/img/woocommerce-placeholder.png';
             //  $featuredurl = $featuredurls?$featuredurls:$default_img; ?>
              <a href="<?php echo get_the_permalink($loop->ID); ?>">
                <div class="Pd-dataXr">
                  <?php if($featuredurls){ ?>
                  <img src="https://database.vr-expert.com<?php echo $featuredurls; ?>" alt="" />
                  <?php }else{ ?>
                    <img src="<?php echo $default_img; ?>" alt="" />
                  <?php } ?>
                  <p class="font-20text">
                    <?php echo get_the_title($loop->ID); ?>
                  </p>
                </div>
              </a>
              <?php } ?>


          </div>
          <?php } ?>
    </div>
    <!-- news left Div END -->
    <!-- side bar start -->
    <div class="sideXbar">
    <?php dynamic_sidebar('categorypage-sidebar');  ?>

  </div>
</section>
<?php get_footer();?>