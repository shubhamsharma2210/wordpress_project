<?php
// Enqueue and dequeue Style and script
function project_dequeue_unnecessary_styles()
{
    wp_dequeue_style("twenty-twenty-one-style");
    
    if (!is_admin()) {
        wp_dequeue_style('classic-theme-styles');
        wp_dequeue_style('wp-block-library');
       
    }
    
    wp_deregister_style("twenty-twenty-one-style");
}
add_action("wp_print_styles", "project_dequeue_unnecessary_styles");

add_action("wp_enqueue_scripts", "vrexpertnerds_enqueue_styles");
function vrexpertnerds_enqueue_styles()
{
    /* CSS */
    wp_enqueue_style(
        "vr-expert-nerds_customstyle_css",
        get_stylesheet_directory_uri() . "/css/customstyle.css",
        [],
        "1.0"
    );
    // wp_enqueue_style(
    //     "vr-expert-nerds_mainstyle_css",
    //     get_stylesheet_directory_uri() . "/css/mainstyle.css",
    //     [],
    //     "1.0"
    // );
    // wp_enqueue_style(
    //     "vr-expert-nerds_owl_css",
    //     get_stylesheet_directory_uri() . "/css/owl.carousel.min.css",
    //     [],
    //     "1.0"
    // );
    /* Js */
    if(is_single()){
        wp_enqueue_style(
            "xr_database_style_css",
            "https://vrexpert.z6.web.core.windows.net/vrx-productsheet/app/v1.0.0/index.css",
            [],
            "1.0"
        );

    }
    if(is_single()){
        wp_enqueue_script(
            "xr_database_style_js",
            "https://vrexpert.z6.web.core.windows.net/vrx-productsheet/app/v1.0.0/index.js",
            ["jquery"],
            time(),
            false
        ); 
    }
    wp_enqueue_script(
        "vr-expert-nerds_owl_js",
        get_stylesheet_directory_uri() . "/js/owl.carousel.min.js",
        ["jquery"],
        time(),
        false
    );
    wp_enqueue_script(
        "vr-expert-nerds_custom_js",
        get_stylesheet_directory_uri() . "/js/customjs.js",
        ["jquery"],
        time(),
        false
    );
    // wp_enqueue_script(
    //     "tinymce_button",
    //     get_stylesheet_directory_uri() . "/js/tinymce_button.js",
    //     ["jquery"],
    //     time(),
    //     false
    // );
    // wp_enqueue_script(
    //     "vr-expert-nerds_dev_js",
    //     get_stylesheet_directory_uri() . "/js/devjs.js",
    //     ["jquery"],
    //     time(),
    //     false
    // );

    wp_localize_script( 'vr-expert-nerds_custom_js', 'wordpressErrorMessage',
                    array(
                        'required_msg' => get_field('required','option')?get_field('required','option'):'Required',
                        'valid_email_message' => get_field('valid_email_message','option')?get_field('valid_email_message','option'):'Please enter a valid email address',
                        'details_not_match' => get_field('details_not_match','option')?get_field('details_not_match','option'):'Enter Recodes Does Not match',
                        'show_more_btn'=> get_field('show_more_btn','option')?get_field('show_more_btn','option'):'Show More',
                        'show_less'=> get_field('show_less','option')?get_field('show_less','option'):'Show Less',
                    ));

}
include "acf-functions.php";
// include "xr-db-functions.php";

//ACF Theme Setting
function my_acf_op_init()
{
    if (function_exists("acf_add_options_page")) {
        acf_add_options_page([
            "page_title" => "Theme Settings",

            "menu_title" => "Theme Settings",

            "menu_slug" => "theme-general-settings",

            "capability" => "edit_posts",

            "redirect" => false,
        ]);
    }
    if (function_exists("acf_add_options_sub_page")) {
        acf_add_options_sub_page([
            "page_title" => "Theme Header Settings",

            "menu_title" => "Header",

            "parent_slug" => "theme-general-settings",
        ]);
        acf_add_options_sub_page([
            "page_title" => "Theme Footer Settings",

            "menu_title" => "Footer",

            "parent_slug" => "theme-general-settings",
        ]);
        acf_add_options_sub_page([
            "page_title" => "Theme Single Page Settings",

            "menu_title" => "Single Page",

            "parent_slug" => "theme-general-settings",
        ]);
        acf_add_options_sub_page([
            "page_title" => "Theme Error Page Settings",

            "menu_title" => "Login Error Page",

            "parent_slug" => "theme-general-settings",
        ]);
        acf_add_options_sub_page([
            "page_title" => "Theme XR Database Settings",

            "menu_title" => "XR Database Page",

            "parent_slug" => "theme-general-settings",
        ]);
        acf_add_options_sub_page([
            "page_title" => "Theme Widgets Settings",

            "menu_title" => "Widgets Option",

            "parent_slug" => "theme-general-settings",
        ]);
        acf_add_options_sub_page([
            "page_title" => "Theme Search Sidebar Settings",

            "menu_title" => "Search Sidebar",

            "parent_slug" => "theme-general-settings",
        ]);
    }
}
add_action("init", "my_acf_op_init");

//Breadcrumb Function
$ddd =
    '<img src=" ' .
    get_stylesheet_directory_uri() .
    '/img/Home-artical-svg.svg" class="" alt="slx">';

function get_breadcrumb()
{
        $wp_the_query = $GLOBALS["wp_the_query"];
        $queried_object = $wp_the_query->get_queried_object();
    
    

    echo '<li class="nw-li font-18text"><a href="' .
        home_url() .
        '" rel="nofollow">' .
        ($ddd =
            '<img src=" ' .
            get_stylesheet_directory_uri() .
            '/img/Home-artical-svg.svg" class="" alt="slx">' .
            "</a></li>");
    if (is_category() || is_tax('databasexr_category') ) {
      
        $term_object = get_term($queried_object);
       
        $term_parent = $term_object->parent;
       
        if (0 !== $term_parent) {
            $term = get_term($term_parent);
            echo '<li class="nw-li font-18text">';
            $term_url = '';
           //$term_url = get_term_link($term);
           $term_url = home_url().'/'.$term->slug;
            
            $term_name = $term->name;
            echo '<a href="'.$term_url.'">'. $term_name .'</a>';
           echo "</li>";


            $subcat_name = $term_object->name;
            echo '<li class="nw-li font-18text"><a href="' .
                get_term_link($term_object) .
                '">';
            echo $subcat_name;
            echo "</a></li>";
        } 
        else {
            $subcat_name = $term_object->name;
           
            echo '<li class="nw-li font-18text"><a href="' .
                get_term_link($term_object) .
                '">';
            echo $subcat_name;
            echo "</a></li>";
        }
    } elseif (is_single()) {
       
        $post_object = sanitize_post($queried_object);
        
        $title = apply_filters("the_title", $post_object->post_title);
      
        $post_id = $post_object->ID;
        
        $post_link =
            '<li class="nw-li font-18text"><a href="">' . $title . "</a></li>";
             if($post_object->post_type === 'database-xr'){
               $category_detail = get_the_terms( $post_id, 'databasexr_category');  
               foreach($category_detail as $category_list) {
                if( get_post_meta($post_id, 'rank_math_primary_databasexr_category',true) == $category_list->term_id ) {
                   
                  $term_primary = '<li class="nw-li font-18text"><a href="">' .$category_list->name."</a></li>";
                }
                }
               }else{
                $category_detail = get_the_category($post_id);
                
                foreach($category_detail as $category_list) {

                    if( get_post_meta($post_id, 'rank_math_primary_category',true) == $category_list->term_id ) {
                       
                      $term_primary = '<li class="nw-li font-18text"><a href="'.get_term_link($category_list->term_id).'">' .$category_list->name."</a></li>";
                    }else{
                        $term_primary = '<li class="nw-li font-18text"><a href="'.get_term_link($category_list->term_id).'">' .$category_list->name."</a></li>";
                    }
                   
                    
                }
               }
           
        if ($category_detail) {
            
            
            if ($category_detail[0]->category_parent > 0 || $category_detail[0]->parent > 0) {
                
                if($category_detail[0]->taxonomy == 'databasexr_category' ){
                    $cat_parent_id = $category_detail[0]->parent;
                }else{
                    $cat_parent_id = $category_detail[0]->category_parent;
                }
                  
                $term_parent = get_term($cat_parent_id);
              
                echo '<li class="nw-li font-18text"><a href="' .
                    get_term_link($term_parent) .
                    '">' .
                    $term_parent->name .
                    "</a></li>";
                echo '<li class="nw-li font-18text"><a href="' .
                    get_term_link($category_detail[0]) .
                    '">' .
                    $category_detail[0]->name .
                    "</a></li>";
                echo $post_link;
            } else {
                echo $term_primary;
                echo $post_link;
            }
        }
    } elseif (is_page()) {
        $page_id = get_queried_object_id(); // Get the ID of the current page
        $title = get_the_title($page_id);   // Retrieve the title
        echo '<li class="nw-li font-18text">' . $title . '</li>';
    } elseif (is_search()) {
          echo '<li class="nw-li font-18text">';
          echo the_search_query();
          echo "</li>";
    }
}


// Post View Meta Keys

function gt_get_post_view()
{
    $count = get_post_meta(get_the_ID(), "post_views_count", true);

    return "$count views";
}

function gt_set_post_view()
{
    $key = "post_views_count";

    $post_id = get_the_ID();

    $count = (int) get_post_meta($post_id, $key, true);
    
    $count++;

    update_post_meta($post_id, $key, $count);
    $category_detail = get_the_category($post_id);

        $argms = array(  
            'post_type' => 'database-xr',
            'post_status' => 'publish',
        );
        $loop_query = new WP_Query( $argms );
        $database_id = get_the_ID($loop_query);
        $xrcount = (int) get_post_meta($database_id, $key, true);
        update_post_meta($database_id, $key, $xrcount);
        $xrcount++;

    $category_database = get_the_terms($database_id, 'databasexr_category');
    if ($category_detail) {
        foreach ($category_detail as $catData) {
            $count = (int) get_term_meta(
                $catData->term_id,
                "post_views_count",
                true
            );
            if ($count) {
                $count = $count + 1;
                update_term_meta($catData->term_id, "post_views_count", $count);
            } else {
                add_term_meta($catData->term_id, "post_views_count", "1");
            }
        }
    }else if($category_database){
        foreach ($category_database as $catDatadase) {
            $xrcount = (int) get_term_meta(
                $catDatadase->term_id,
                "post_views_count",
                true
            );
            if ($xrcount) {
                $xrcount = $xrcount + 1;
                update_term_meta($catDatadase->term_id, "post_views_count", $xrcount);
            } else {
                add_term_meta($catDatadase->term_id, "post_views_count", "1");
            }
        }

    }
}

function gt_posts_column_views($columns)
{
    $columns["post_views"] = "Views";

    return $columns;
}

function gt_posts_custom_column_views($column)
{ 
    if('post_type'=='databasexr'){

        if ($column === "post_views") {
            echo gt_get_post_view();
        }
    }else{
        if ($column === "post_views") {
            echo gt_get_post_view();
        }
    }
    
}

 


add_filter("manage_posts_columns", "gt_posts_column_views");

add_action("manage_posts_custom_column", "gt_posts_custom_column_views");



//Sort By Filter Code

add_action("wp_ajax_filter_sortby", "filter_sortby");
add_action("wp_ajax_nopriv_filter_sortby", "filter_sortby");
function filter_sortby()
{
    $termid = $_POST["termid"] ? $_POST["termid"] : "";
    $paged = $_POST["paged"];
    $sortbybest = $_POST["sortbybest"] ? $_POST["sortbybest"] : "";
    $meta_key = $_POST["meta_key"] ? $_POST["meta_key"] : "";
    $post_per_page = get_field('posts_per_page','option') ? get_field('posts_per_page','option') : 3 ;
    $args = [
        "post_type" => "post",
        "post_status" => "publish",
        "posts_per_page" => $post_per_page,
        "paged" => $paged,
        "meta_key" => $meta_key,
        "tax_query" => [
            "relation" => "OR",
            [
                "taxonomy" => "category",
                "field" => "term_id",
                "terms" => $termid,
            ],
        ],
    ];
    
    if ($sortbybest == "mostpopular") {
        $args["meta_key"] = "post_views_count";
        $args["orderby"] = "meta_value_num";
        $args["order"] = "DESC";
    } elseif ($sortbybest == "newest") {
        $args["orderby"] = "date";
        $args["order"] = "DESC";
    } elseif ($sortbybest == "oldest") {
        $args["orderby"] = "date";
        $args["order"] = "ASC";
    }
    $loop = new WP_Query($args);

    if ($loop->have_posts()) {
        echo '<div class="newsItems">';
        while ($loop->have_posts()) {
            $loop->the_post();

            $posts_id = get_the_ID($loop);
            $featuredurl = get_the_post_thumbnail_url($posts_id);
            $default_img =
                get_stylesheet_directory_uri() .
                "/img/woocommerce-placeholder.png";
            $featuredurls = $featuredurl ? $featuredurl : $default_img;
            echo '<div class="News-Allcards">
              
							<div class="newscards-img">
                            <a href="'.get_the_permalink($posts_id).'">
								<img src="' .
                            $featuredurls .
                            '" alt="slx" />
                            </a>
							</div>
                            
							 <div class="nwcard-content">
									<div class="news-buttons">';
            $cat_news = get_the_category($posts_id);
            foreach ($cat_news as $cd) {
                echo '	<div class="newsbtn">
											<a href="'.get_category_link($cd->term_id).'" class="font-16text" >' .
                    $cd->cat_name .
                    '</a>
										</div>';
            }
            echo '	
									</div>
                                    <a href="'.get_the_permalink($posts_id).'">
									<p class=" font-20text">' .
                                get_the_title($posts_id) .
                                '</p>
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
											</svg><span>';
                                            $date = get_the_date( get_option('date_format'), $posts_id);
                                            
                                            echo $date;
                                            echo '</span>
										</li>
										<li>
											<svg xmlns="http://www.w3.org/2000/svg" width="19.45" height="15.128"
												viewBox="0 0 19.45 15.128">
												<path id="Icon_awesome-comments" data-name="Icon awesome-comments"
													d="M14.047,7.653c0-2.985-3.144-5.4-7.023-5.4S0,4.668,0,7.653a4.581,4.581,0,0,0,1.283,3.107A7.6,7.6,0,0,1,.074,12.6a.268.268,0,0,0-.051.294.264.264,0,0,0,.246.162,5.945,5.945,0,0,0,3-.844,8.592,8.592,0,0,0,3.758.844C10.9,13.055,14.047,10.638,14.047,7.653Zm4.12,7.429a4.575,4.575,0,0,0,1.283-3.107c0-2.259-1.807-4.194-4.366-5a5.018,5.018,0,0,1,.044.679c0,3.576-3.637,6.483-8.1,6.483a10.124,10.124,0,0,1-1.07-.064,7.3,7.3,0,0,0,6.473,3.306,8.545,8.545,0,0,0,3.758-.844,5.945,5.945,0,0,0,3,.844.266.266,0,0,0,.246-.162.271.271,0,0,0-.051-.294A7.519,7.519,0,0,1,18.167,15.081Z"
													transform="translate(0 -2.25)" />
											</svg>
											<span>';
                                                echo $article_comment = get_comments_number( $posts_id ).' ';
                                                if ($article_comment < 2) {
                                                    $comment_text = get_field('comment_text', 'option')?get_field('comment_text','option'):"comment";
                                                    echo $comment_text;
                                                } else {
                                                    $comments_sec_text = get_field('comments_sec_text','option')?get_field('comments_sec_text','option'):"comments";
                                                    echo $comments_sec_text;
                                                }
                                                echo '</span>
										</li>
									
									</ul>
                                    </a>
							 </div>
                 	 </div>';
        }

        echo " </div>";
    }

    exit();
}

//XR Database Filter
add_action("wp_ajax_filter_catsort", "filter_catsort");
add_action("wp_ajax_nopriv_filter_catsort", "filter_catsort");
function filter_catsort()
{
    $termsid = $_POST["termsid"] ? $_POST["termsid"] : "";
    $default_img = get_stylesheet_directory_uri().'/img/woocommerce-placeholder.png';
    $paged = $_POST["paged"];
    $sortcatbybest = $_POST["sortcatbybest"] ? $_POST["sortcatbybest"] : "";

    $subcategories = get_terms([
        "taxonomy" => "databasexr_category",
        "parent" => $termsid,
        "hide_empty" => false,
    ]);

    $newArray = [];
    if ($sortcatbybest == "mostpopular") {
        foreach ($subcategories as $subcategory) {
            $array["term_id"] = $subcategory->term_id;
            $array["name"] = $subcategory->name;
            $array["slug"] = $subcategory->slug;
            $array["count"] = $subcategory->count;
            $logo_array  = get_term_meta( $subcategory->term_id, 'Logo_url', true );
           $subcat_logo = $logo_array['data']['attributes']['url'];
           if($subcat_logo){
            $array['subcat_logo'] = 'https://database.vr-expert.com'.$subcat_logo;
        }else{
            $array['subcat_logo'] = $default_img; 
        }
            $viewscount = get_term_meta(
                $subcategory->term_id,
                "post_views_count",
                true
            );
            if ($viewscount) {
                $array["views"] = $viewscount;
            } else {
                $array["views"] = 0;
            }
            array_push($newArray, $array);
        }
        $views = [];
        foreach ($newArray as $key => $row) {
            $views[$key] = $row["views"];
        }

       
        
        array_multisort($views, SORT_DESC, $newArray);
    }
  //  print_r($newArray);
      if($sortcatbybest == 'newest'){
       foreach ( $subcategories as $subcategory ) {
          $array['term_id'] = $subcategory->term_id;
          $array['name'] = $subcategory->name;
          $array['slug'] = $subcategory->slug;
          $array['count'] = $subcategory->count;
          $datecount  =  get_term_meta($subcategory->term_id, 'published_date', true );
          $logo_array  = get_term_meta( $subcategory->term_id, 'Logo_url', true );
          $subcat_logo = $logo_array['data']['attributes']['url'];
          if($subcat_logo){
            $array['subcat_logo'] = 'https://database.vr-expert.com'.$subcat_logo;
        }else{
            $array['subcat_logo'] = $default_img; 
        }
      
         
          if( $datecount ){
             $array['date'] = $datecount;
          }else{
             $array['date'] = 0;
          }
          array_push( $newArray , $array);

       }
       $dates = array();
       foreach ($newArray as $key => $row)
       {
          $dates[$key] = $row['date'];
       }
       array_multisort($dates , SORT_DESC, $newArray);

      }
      if($sortcatbybest == 'oldest'){
        foreach ( $subcategories as $subcategory ) {
           $array['term_id'] = $subcategory->term_id;
           $array['name'] = $subcategory->name;
           $array['slug'] = $subcategory->slug;
           $array['count'] = $subcategory->count;
           $datecount  =  get_term_meta($subcategory->term_id, 'published_date', true );
           $logo_array  = get_term_meta( $subcategory->term_id, 'Logo_url', true );
           //print_r($logo_array);
          
           $subcat_logo = $logo_array['data']['attributes']['url'];
            if($subcat_logo){
                $array['subcat_logo'] = 'https://database.vr-expert.com'.$subcat_logo;
            }else{
                $array['subcat_logo'] = $default_img; 
            }
           
          
          
           if( $datecount ){
              $array['date'] = $datecount;
           }else{
              $array['date'] = 0;
           }
           array_push( $newArray , $array);
 
        }
        $dates = array();
        foreach ($newArray as $key => $row)
        {
           $dates[$key] = $row['date'];
        }
        array_multisort($dates , SORT_ASC, $newArray);
 
       }
   
    echo '<div class="XR-data">';

    foreach ($newArray as $new_post) {
        echo ' <a href="' .
            $new_post["slug"] .
            '"><div class="All-data"><div class="cstmbrandname"> 
           
             <h2 class="HeadingH3-25-bold">' .
            $new_post["name"] .
            '</h2>
             <p class="font-20text">' .
            $new_post["count"] .
            ' devices</p>
           </div>';
           echo'<div class="cstmbrandlogo">';
          if($new_post['subcat_logo']){ 
            echo ' <img src="'.$new_post['subcat_logo'].'" alt="'. $new_post["name"].'"/>';
           }else{
            echo '<img src="'.$default_img.'" alt="'.  $new_post["name"].'"/>';
            } 
            echo '</div></div>
         </a>';
    }
    echo "</div>";
    exit();
}
// Function to get the client IP address

//Register Widget Code
function wpb_widgets_init()
{
    if (function_exists("register_sidebar")) {
        register_sidebar([
            "name" => "Homepage Sidebar",
            "id" => "homepage-sidebar",
        ]);

        register_sidebar([
            "name" => "Category Page Sidebar",
            "id" => "categorypage-sidebar",
        ]);

        register_sidebar([
            "name" => "Single Page Sidebar",
            "id" => "newpage-sidebar",
        ]);

        register_sidebar([
            "name" => "Search Page Sidebar",
            "id" => "searchpage-sidebar",
        ]);
        
    }
}
add_action("widgets_init", "wpb_widgets_init");

//Register HomePage Widget Trending Headsets
class wpb_widget extends WP_Widget
{
    function __construct()
    {
        parent::__construct(
            // Base ID of your widget
            "wpb_widget",

            // Widget name will appear in UI
            __("Trending Headsets", "wpb_widget_domain"),

            // Widget description
            [
                "description" => __(
                    "Trending Headsets Widget",
                    "wpb_widget_domain"
                ),
            ]
        );
    }

    // Creating widget front-end
    public function widget($args, $instance)
    {

        $trending_headsets_head = get_field('trending_headsets_head','option')? get_field('trending_headsets_head','option'):'';
        $field_assign_headsets = get_field('field_assign_headsets','option');
        $all_headsets_head = get_field('all_headsets_head','option')? get_field('all_headsets_head','option'):'View all headsets';
       $headsets_url = get_field('headsets_url','option')?get_field('headsets_url','option'):'';

        if($field_assign_headsets){
        ?>
	        <div class="popular-menu">
               <h3 class="HeadingH3-25-bold"><?php echo $trending_headsets_head; ?></h3>
               <div class="popularul-li">
                  <ul class="gap-ullist">
                      <?php foreach($field_assign_headsets as $assign_headsets_id){ ?>
                     <li class="Headingmenu-22-bold"><a href="<?php echo get_the_permalink($assign_headsets_id); ?>"><?php echo get_the_title($assign_headsets_id); ?></a></li>
                     <?php } ?>
                   
                  </ul>
                  <div class="PageBtn mt-42 text-center">
                     <a href="<?php echo $headsets_url; ?>" class="knowledge-btn guide-clr"><?php echo $all_headsets_head; ?></a>
                  </div>
               </div>
            </div>
            <!-- popular Div END -->  
	<?php
    }
   }

    // Updating widget replacing old instances with new
    public function update($new_instance, $old_instance)
    {
        $instance = [];
        $instance["title"] = !empty($new_instance["title"])
            ? strip_tags($new_instance["title"])
            : "";
        return $instance;
    }

    
}
// trending Headsets End Here

// New products Widgets for homepage
class Foo_Widget extends WP_Widget
{
    /**
     * Register widget with WordPress.
     */
    function __construct()
    {
        parent::__construct(
            "foo_widget", // Base ID
            esc_html__("New Headset", "text_domain"), // Name
            ["description" => esc_html__("New Headset Widget", "text_domain")] // Args
        );
    }

    /**
     * Front-end display of widget.
     *
     * @see WP_Widget::widget()
     *
     * @param array $args     Widget arguments.
     * @param array $instance Saved values from database.
     */
    public function widget($args, $instance)
    {
        $new_prod_head = get_field('new_prod_head','option')?get_field('new_prod_head','option'):'New product';
        $post_per_page =  10 ;
        $args = array(  
            'post_type' => 'database-xr',
            'post_status' => 'publish',
            'orderby' => 'date', 
            'order' => 'desc',
            'paged' => $paged,
            "posts_per_page" => $post_per_page,
         );
         
         $loop = new WP_Query( $args );
         if($loop->have_posts()){ $i=1;
        ?>
		<!-- popular Div END -->
            <div class="NumList">
               <div class="popular-menu">
                  <h3 class="HeadingH3-25-bold text-center"><?php echo $new_prod_head; ?></h3>
                  <div class="popularul-li">
                     <ul class="gap-ullist">
                     <?php while($loop->have_posts()){ $loop->the_post(); 
                        $prod_id = get_the_ID($loop);
                        $post_meta_id = get_post_meta($prod_id, 'product_id', true );
                        $prod_title = get_the_title($prod_id);
                        $category_detail = get_the_terms( $prod_id , 'databasexr_category' );

                          ?>
                        <li class="Headingmenu-22-bold">
                           <a href="<?php echo get_the_permalink($prod_id);  ?>">
                              <span class="numb">
                             <?php if($i<14){ echo $i; }  ?>
                              </span>
                              <span class="Txt-Bold">
                            <?php  foreach($category_detail as $cd){                   
                                echo ' <p class="boldProduct">'. $cd->name.'</p>';
                                } ?>
                                 <p class="normalProduct"><?php echo $prod_title; ?></p>
                              </span>
                           </a>
                        </li>
                        <!-- items 1 -->
                        <?php $i++;  } ?>
                     </ul>
                  </div>
               </div>
            </div>
             <?php }
       
        
    }

    /**
     * Sanitize widget form values as they are saved.
     *
     * @see WP_Widget::update()
     *
     * @param array $new_instance Values just sent to be saved.
     * @param array $old_instance Previously saved values from database.
     *
     * @return array Updated safe values to be saved.
     */
    public function update($new_instance, $old_instance)
    {
        $instance = [];
        $instance["title"] = !empty($new_instance["title"])
            ? sanitize_text_field($new_instance["title"])
            : "";

        return $instance;
    }
} 

// New products Widgets for homepage End

class My_Widget extends WP_Widget
{
    /**
     * Sets up the widgets name etc
     */
    public function __construct()
    {
        parent::__construct(
            "my_widget", // Base ID
            esc_html__("Popular Comparison", "text_domain"), // Name
            ["description" => esc_html__("Popular Comparison Widget", "text_domain")] // Args
        );
    }

    /**
     * Outputs the content of the widget
     *
     * @param array $args
     * @param array $instance
     */
    public function widget($args, $instance)
    {
        // outputs the content of the widget
        $comarison_head = get_field('comarison_head','option')?get_field('comarison_head','option'):'Popular Comparisons';
        $field_popular_comparison = get_field('field_popular_comparison','option');
        $all_comparison_text = get_field('all_comparison_text','option')? get_field('all_comparison_text','option'):'View all comparisons';
        $all_comparison_url = get_field('all_comparison_url','option')?get_field('all_comparison_url','option'):'';
        if($field_popular_comparison){
        ?>
            <!-- popular Div END -->
            <div class="popular-menu">
               <h3 class="HeadingH3-25-bold"><?php echo $comarison_head; ?></h3>
               <div class="popularul-li">
                  <ul class="gap-ullist">
                  
                     <?php foreach($field_popular_comparison as $comparison_id){ ?>
                     <li class="Headingmenu-22-bold"><a href="<?php echo get_the_permalink($comparison_id); ?>"><?php echo get_the_title($comparison_id); ?></a></li>
                     <?php } ?>
                  </ul>
               </div>
               <div class="PageBtn mt-42 text-center">
                  <a href="<?php echo $all_comparison_url; ?>" class="knowledge-btn guide-clr"><?php echo $all_comparison_text; ?></a>
               </div>
            </div>
            <!-- popular Div END --><?php
    }

        }
   

    /**
     * Processing widget options on save
     *
     * @param array $new_instance The new options
     * @param array $old_instance The previous options
     *
     * @return array
     */
    public function update($new_instance, $old_instance)
    {
        $instance = [];
        $instance["title"] = !empty($new_instance["title"])
            ? sanitize_text_field($new_instance["title"])
            : "";

        return $instance;
    }
}
//Popular Comparison Widget ended

//Top 10 Seller widget started


class Sellers_Widget extends WP_Widget
{
    /**
     * Sets up the widgets name etc
     */
    public function __construct()
    {
        parent::__construct(
            "sellers_widget", // Base ID
            esc_html__("Top 10 Sellers", "text_domain"), // Name
            ["description" => esc_html__("Top 10 Sellers Widget", "text_domain")] // Args
        );
    }

    /**
     * Outputs the content of the widget
     *
     * @param array $args
     * @param array $instance
     */
    public function widget($args, $instance)
    {
        
        $top_sellers_text = get_field('top_sellers_text','option')?get_field('top_sellers_text','option'):'Top 10 Sellers';
        $top_sellers = get_field('top_sellers','option');
       
        if($top_sellers){
        ?>
            <!-- popular Div END -->
     <div class="NumList">
        <div class="popular-menu">
          <h3 class="HeadingH3-25-bold text-center"><?php echo $top_sellers_text; ?></h3>
          <div class="popularul-li">
            <ul class="gap-ullist">
                <?php $i=1; foreach($top_sellers as $top_sellers_id){
                   
                    $prod_title = get_the_title($top_sellers_id);
                    $category_detail = get_the_terms( $top_sellers_id->ID , 'databasexr_category' );

                      ?>
                   
              <li class="Headingmenu-22-bold">
                <a href="<?php echo get_the_permalink($top_sellers_id);  ?>">
                  <span class="numb">
                  <?php if($i<14){ echo $i; }  ?>
                  </span>
                  <span class="Txt-Bold">
                  <?php  foreach($category_detail as $cd){                   
                            echo ' <p class="boldProduct">'. $cd->name.'</p>';
                            } ?>
                    <p class="normalProduct"><?php echo $prod_title; ?></p>
                  </span>
                </a>
              </li>
            <?php $i++; } ?>
              
            </ul>
          </div>
        </div>
      </div>
   
    <?php
        }
    }

    
   

    /**
     * Processing widget options on save
     *
     * @param array $new_instance The new options
     * @param array $old_instance The previous options
     *
     * @return array
     */
    public function update($new_instance, $old_instance)
    {
        $instance = [];
        $instance["title"] = !empty($new_instance["title"])
            ? sanitize_text_field($new_instance["title"])
            : "";

        return $instance;
    }
}

//Top 10 Seller widget ended

// XR Database Widgets started

class Database_Widget extends WP_Widget
{
    /**
     * Sets up the widgets name etc
     */
    public function __construct()
    {
        parent::__construct(
            "databse_widget", // Base ID
            esc_html__("XR Dtabase", "text_domain"), // Name
            ["description" => esc_html__("XR Dtabase Widget", "text_domain")] // Args
        );
    }

    /**
     * Outputs the content of the widget
     *
     * @param array $args
     * @param array $instance
     */
    public function widget($args, $instance)
    {
        $xr_database_text = get_field('xr_database_text','option')?get_field('xr_database_text','option'):'XR Database';
        $assign_xr_db = get_field('assign_xr_db','option');
        $vist_xr_button = get_field('vist_xr_button','option')? get_field('vist_xr_button','option'):'Visit XR Database';
        $visit_xr_button_url = get_field('visit_xr_button_url','option')?get_field('visit_xr_button_url','option'):'';
        if(is_singular('database-xr')){
           
            $product_id = get_the_ID();
            $terms = get_the_terms( get_the_ID(), 'databasexr_category' );  
            $termsId = array();			
            foreach($terms as $term){
                 $termId =  $term->term_id;
                 array_push($termsId, $termId);
            }
                 $args = array(
                    'post_type' => 'database-xr',
                    'post__not_in' => array(get_the_ID()),
                      'tax_query' =>
                       array(
                            'relation' => 'OR',
                            array(
                              'taxonomy' => 'databasexr_category',
                              'field' => 'term_id', 
                              'terms' => $termsId,
                              'operator'=>'IN'
                            ),
                          ),
                  );
                  $wp_query= new WP_Query($args);
                  if($wp_query->have_posts()){ ?>

                <div class="popular-menu">
                    <h3 class="HeadingH3-25-bold"><?php echo $xr_database_text; ?></h3>
                    <div class="popularul-li">
                    <ul class="gap-ullist">
                        <?php  while($wp_query->have_posts()){
                                $wp_query->the_post();
                                $post_id = get_the_ID(); 
                        ?>
                        <li class="Headingmenu-22-bold"><a href="<?php echo get_the_permalink($post_id); ?>"><?php echo get_the_title($post_id); ?></a></li>
                        <?php  } ?>
                    </ul>
                    <div class="PageBtn mt-42 text-center">
                        <a href="<?php echo $visit_xr_button_url; ?>" class="knowledge-btn guide-clr"><?php echo $vist_xr_button; ?></a>
                    </div>
                    </div>
                </div>
                    
              <?php    }
             }else{
               // if($assign_xr_db){
        ?>
            <!-- popular Div END -->
      <div class="popular-menu">
        <h3 class="HeadingH3-25-bold"><?php echo $xr_database_text; ?></h3>
        <div class="popularul-li">
          <ul class="gap-ullist">
              <?php  foreach($assign_xr_db as $assign_xr_id){ ?>
            <li class="Headingmenu-22-bold"><a href="<?php echo get_the_permalink($assign_xr_id); ?>"><?php echo get_the_title($assign_xr_id); ?></a></li>
             <?php  } ?>
          </ul>
          <div class="PageBtn mt-42 text-center">
            <a href="<?php echo $visit_xr_button_url; ?>" class="knowledge-btn guide-clr"><?php echo $vist_xr_button; ?></a>
          </div>
        </div>
      </div>
   
    <?php //}
        }
    }

    
   

    /**
     * Processing widget options on save
     *
     * @param array $new_instance The new options
     * @param array $old_instance The previous options
     *
     * @return array
     */
    public function update($new_instance, $old_instance)
    {
        $instance = [];
        $instance["title"] = !empty($new_instance["title"])
            ? sanitize_text_field($new_instance["title"])
            : "";

        return $instance;
    }
}
//XR database ended
//Latest Reviews Started
class Reviews_Widget extends WP_Widget
{
    /**
     * Sets up the widgets name etc
     */
    public function __construct()
    {
        parent::__construct(
            "reviews_widget", // Base ID
            esc_html__("Reviews", "text_domain"), // Name
            ["description" => esc_html__("Reviews Widget", "text_domain")] // Args
        );
    }

    /**
     * Outputs the content of the widget
     *
     * @param array $args
     * @param array $instance
     */
    public function widget($args, $instance)
    {
         $latest_reviews_head = get_field('latest_reviews_head','option')?get_field('latest_reviews_head','option'):'Latest reviews';
        $assign_latest_reviews = get_field('assign_latest_reviews','option');
        $vist_reviews_text = get_field('vist_reviews_text','option')? get_field('vist_reviews_text','option'):'View all Reviews';
        $vist_reviews_url = get_field('vist_reviews_url','option')?get_field('vist_reviews_url','option'):'';
        if($assign_latest_reviews){
        ?>
            <!-- popular Div END -->
        <div class="popular-menu">
            <h3 class="HeadingH3-25-bold"><?php echo $latest_reviews_head; ?></h3>
            <div class="popularul-li">
            <ul class="gap-ullist">
               <?php foreach($assign_latest_reviews as $assign_reviews_id){ ?>
                
                <li class="Headingmenu-22-bold"><a href="<?php echo get_the_permalink($assign_reviews_id); ?>"><?php echo get_the_title($assign_reviews_id); ?></a></li>
              <?php } ?>
            </ul>
            </div>
           
            <div class="PageBtn mt-42 text-center">
            <a href="<?php echo $vist_reviews_url; ?>" class="knowledge-btn guide-clr"><?php echo $vist_reviews_text; ?></a>
            </div>
           
        </div>
   
    <?php
    } }

    
   

    /**
     * Processing widget options on save
     *
     * @param array $new_instance The new options
     * @param array $old_instance The previous options
     *
     * @return array
     */
    public function update($new_instance, $old_instance)
    {
        $instance = [];
        $instance["title"] = !empty($new_instance["title"])
            ? sanitize_text_field($new_instance["title"])
            : "";

        return $instance;
    }
}
//Latest Reviews Ended

// Search page Widgets
class Discord_Widget extends WP_Widget
{
    /**
     * Register widget with WordPress.
     */
    function __construct()
    {
        parent::__construct(
            "discord_widget", // Base ID
            esc_html__("Discord", "text_domain"), // Name
            ["description" => esc_html__("Discord Widget", "text_domain")] // Args
        );
    }

    /**
     * Front-end display of widget.
     *
     * @see WP_Widget::widget()
     *
     * @param array $args     Widget arguments.
     * @param array $instance Saved values from database.
     */
    public function widget($args, $instance)
    {
        $discord_icon_svg = get_field('discord_icon_svg','option');
        $discord_text = get_field('discord_text','option');
        $join_our_community_button_url = get_field('join_our_community_button_url','option')?get_field('join_our_community_button_url','option'):'javascript:void(0)';
        ?>
            <div class="clicktofllow">
                    <a  target="_blank" href="<?php echo $join_our_community_button_url; ?>">
                        <div class="dmTop-discord">
                       <?php  if($discord_icon_svg){ echo $discord_icon_svg; } if($discord_text){ ?>

                        <span><?php echo $discord_text; ?></span>
                        <?php }  ?>
                        </div>
                        <?php if(get_field('join_our_community','option')){ ?>
                        <div class="content-bm">
                        <?php echo get_field('join_our_community','option'); ?>
                        </div>
                        <?php } ?>
                </a>
            </div>
        <?php
       
        
    }

    /**
     * Sanitize widget form values as they are saved.
     *
     * @see WP_Widget::update()
     *
     * @param array $new_instance Values just sent to be saved.
     * @param array $old_instance Previously saved values from database.
     *
     * @return array Updated safe values to be saved.
     */
    public function update($new_instance, $old_instance)
    {
        $instance = [];
        $instance["title"] = !empty($new_instance["title"])
            ? sanitize_text_field($new_instance["title"])
            : "";

        return $instance;
    }
} 
// Search Page widgets

// Register and load the widget
function wpb_load_widget()
{
    register_widget("wpb_widget");
    register_widget("Foo_Widget");
    register_widget("My_Widget");
    register_widget("Sellers_Widget");
    register_widget("Database_Widget");
    register_widget("Reviews_Widget");
    register_widget("Discord_Widget");
}
add_action("widgets_init", "wpb_load_widget");



// Function to customize the comment template and add like button

if (!function_exists("comments_custom")):
    function comments_custom($comment, $args, $depth)
    {
       session_start();
       $_SESSION["favcolor"] = $args['paged'];
        $like_data= get_comment_meta( $comment->comment_ID,'comment_like',true);
        $dislike_data= get_comment_meta( $comment->comment_ID,'comment_cstdislike',true);
       if($like_data){
        $get_like_count = count($like_data);
       }else{
           $get_like_count = 0 ;
       }
       if($dislike_data){
        $get_dislike_count = count($dislike_data) ;
       }else{
           $get_dislike_count = 0 ;
       }

        ?>
      <li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>">
           <div class="comment-block cst-commentblock">
                   <?php if ($comment->comment_approved == "0"): ?>
                       <em><?php  $comment_moderation = get_field('comment_moderation','option')?get_field('comment_moderation','option'):'Your comment is awaiting moderation';
                       esc_html_e(
                        $comment_moderation
                       ); ?></em>
                       
                   <?php endif; ?>
                        <div class="comment-by cst-comment-by">
                            
                            <span class="pro-auth"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/author_profile.png " alt="author_profile"/></span>
                            <span class="pro-authName"><?php echo get_comment_author(); ?></span>
                            <span class="cstcmt-dot">•</span>
                            <span class="date float-right"><?php printf(
                                esc_html__('%1$s'),
                                get_comment_date(),
                                ""
                            ); ?></span>
                            </div>
                     <div class="cst-commentcomment">   
                          <div class="cst-commenttext"> <?php comment_text(); ?></div>
                   
                   <?php if (is_user_logged_in()) { ?>
                   <div class="cst-likereply">
                      <input type="hidden" value="<?php echo get_current_user_id(); ?>" id="cst_userid"/>	
                       <?php
                       $user_id = get_current_user_id();
                       $commentid_article = $comment->comment_ID;
                       $get_like_user = get_comment_meta(
                           $comment->comment_ID,
                           "current_user_id"
                       );
                       
                       $published_comment_author_id = $comment->user_id;

                       if ($user_id == $published_comment_author_id) {
                        $reply_field = get_field('reply','option')?get_field('reply','option'):'Reply';

                           echo "<span class='cst-reply'>".$reply_field."</span>"; ?>
                        <span class="cstcmt-dot">•</span>
                        <a href="javascript:void(0)" class="cst-likeup">
                          <svg xmlns="http://www.w3.org/2000/svg" width="22.711" height="23.057" viewBox="0 0 22.711 23.057">
                              <path id="Icon_feather-thumbs-up" data-name="Icon feather-thumbs-up" d="M16.234,10.72V6.308A3.308,3.308,0,0,0,12.925,3L8.514,12.925V25.057h12.44a2.206,2.206,0,0,0,2.206-1.875l1.522-9.925a2.206,2.206,0,0,0-2.206-2.537ZM8.514,25.057H5.206A2.206,2.206,0,0,1,3,22.851v-7.72a2.206,2.206,0,0,1,2.206-2.206H8.514" transform="translate(-2.5 -2.5)" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="1" opacity="0.651"/>
                          </svg>
                       </a>

                         <span class="LikeNo font-20Medium like<?php echo $comment->comment_ID;?>"><?php echo $get_like_count; ?></span>
                         <a href="javascript:void(0)" class="cst-likedown">
                         <svg xmlns="http://www.w3.org/2000/svg" width="22.711" height="23.057" viewBox="0 0 22.711 23.057">
                           <path id="Icon_feather-thumbs-down" data-name="Icon feather-thumbs-down" d="M11.949,17.337v4.411a3.308,3.308,0,0,0,3.308,3.308l4.411-9.925V3H7.229A2.206,2.206,0,0,0,5.023,4.875L3.5,14.8a2.206,2.206,0,0,0,2.206,2.536ZM19.668,3h2.945a2.548,2.548,0,0,1,2.57,2.206v7.72a2.548,2.548,0,0,1-2.57,2.206H19.668" transform="translate(-2.972 -2.499)" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="1" opacity="0.651"/>
                           </svg>
                         </a>
                 
                           <span class="LikeNo font-20Medium dislike<?php echo $comment->comment_ID;?>"><?php echo $get_dislike_count; ?></span>
                           <span class="cstcmt-dot">•</span>
                           <?php $share = get_sub_field('share', 'option')?get_sub_field('share','option'):"Share";
                           if($share ){?>
                           <a href=""><span class="share-cmmnt"><?php echo $share ;?></span></a>
                           <?php }?>
                         <?php
                       } else {
                            ?>
                        <span class="float-right">
                           <span class="cst-reply"> <?php comment_reply_link(
                               array_merge($args, [
                                   "depth" => $depth,
                                   "max_depth" => $args["max_depth"],
                               ])
                            ); ?>
                            </span>
                          
                        </span>
                        <span class="cstcmt-dot">•</span>
                        <?php if (in_array($user_id, $get_like_user)) { ?>
                              <a href="javascript:void(0);" onclick="commentlike_fetch('<?php echo $comment->comment_ID; ?>')" value="<?php echo $comment->comment_ID; ?>" id="comment_id"> 
                               <svg xmlns="http://www.w3.org/2000/svg" width="22.711" height="23.057" viewBox="0 0 22.711 23.057">
                                 <path id="Icon_feather-thumbs-up" data-name="Icon feather-thumbs-up" d="M16.234,10.72V6.308A3.308,3.308,0,0,0,12.925,3L8.514,12.925V25.057h12.44a2.206,2.206,0,0,0,2.206-1.875l1.522-9.925a2.206,2.206,0,0,0-2.206-2.537ZM8.514,25.057H5.206A2.206,2.206,0,0,1,3,22.851v-7.72a2.206,2.206,0,0,1,2.206-2.206H8.514" transform="translate(-2.5 -2.5)" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="1" opacity="0.651"/>
                                 </svg>

                              </a>
                              <span class="LikeNo font-20Medium like<?php echo $comment->comment_ID;?>"><?php echo $get_like_count; ?></span>
                              <a href="javascript:void(0);" class="max-lf" onclick="commentdislike_fetch('<?php echo $comment->comment_ID; ?>')" value="<?php echo $comment->comment_ID; ?>" id="comment_id"> 	
                              <svg xmlns="http://www.w3.org/2000/svg" width="22.711" height="23.057" viewBox="0 0 22.711 23.057">
                              <path id="Icon_feather-thumbs-down" data-name="Icon feather-thumbs-down" d="M11.949,17.337v4.411a3.308,3.308,0,0,0,3.308,3.308l4.411-9.925V3H7.229A2.206,2.206,0,0,0,5.023,4.875L3.5,14.8a2.206,2.206,0,0,0,2.206,2.536ZM19.668,3h2.945a2.548,2.548,0,0,1,2.57,2.206v7.72a2.548,2.548,0,0,1-2.57,2.206H19.668" transform="translate(-2.972 -2.499)" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="1" opacity="0.651"/>
                              </svg>


                           </a>	
                           <span class="LikeNo font-20Medium dislike<?php echo $comment->comment_ID;?>"><?php echo $get_dislike_count; ?></span>
                           <span class="cstcmt-dot">•</span>
                           <?php $share = get_sub_field('share', 'option')?get_sub_field('share','option'):"Share";
                           if($share ){?>
                           <a href=""><span class="share-cmmnt"><?php echo $share; ?></span></a>
                           <?php }?>
                            <?php } else { ?>
                           <a href="javascript:void(0);" onclick="commentlike_fetch('<?php echo $comment->comment_ID; ?>')" value="<?php echo $comment->comment_ID; ?>" id="comment_id"> 
                             <svg xmlns="http://www.w3.org/2000/svg" width="22.711" height="23.057" viewBox="0 0 22.711 23.057">
                              <path id="Icon_feather-thumbs-up" data-name="Icon feather-thumbs-up" d="M16.234,10.72V6.308A3.308,3.308,0,0,0,12.925,3L8.514,12.925V25.057h12.44a2.206,2.206,0,0,0,2.206-1.875l1.522-9.925a2.206,2.206,0,0,0-2.206-2.537ZM8.514,25.057H5.206A2.206,2.206,0,0,1,3,22.851v-7.72a2.206,2.206,0,0,1,2.206-2.206H8.514" transform="translate(-2.5 -2.5)" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="1" opacity="0.651"/>
                              </svg>

                           </a>
                           <span class="LikeNo font-20Medium like<?php echo $comment->comment_ID;?>"><?php echo $get_like_count; ?></span>
                           <a href="javascript:void(0);"  class="max-lf" onclick="commentdislike_fetch('<?php echo $comment->comment_ID; ?>')" value="<?php echo $comment->comment_ID; ?>" id="comment_id"> 	
                            <svg xmlns="http://www.w3.org/2000/svg" width="22.711" height="23.057" viewBox="0 0 22.711 23.057">
                              <path id="Icon_feather-thumbs-down" data-name="Icon feather-thumbs-down" d="M11.949,17.337v4.411a3.308,3.308,0,0,0,3.308,3.308l4.411-9.925V3H7.229A2.206,2.206,0,0,0,5.023,4.875L3.5,14.8a2.206,2.206,0,0,0,2.206,2.536ZM19.668,3h2.945a2.548,2.548,0,0,1,2.57,2.206v7.72a2.548,2.548,0,0,1-2.57,2.206H19.668" transform="translate(-2.972 -2.499)" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="1" opacity="0.651"/>
                            </svg>

                           </a>	
                           <span class="LikeNo font-20Medium dislike<?php echo $comment->comment_ID;?>"><?php echo $get_dislike_count; ?></span>
                           <span class="cstcmt-dot">•</span>
                           <?php $share = get_sub_field('share', 'option')?get_sub_field('share','option'):"Share";
                           if($share ){?>
                           <a href=""><span class="share-cmmnt"><?php echo $share; ?></span></a>
                           <?php } }?>
                              
                           <?php
                       }
                       ?>
                    </div>   
                   <?php } ?>
                           </div>    
               </div>
        </li>
   <?php
    }
endif;

// Comments Like
add_action("wp_ajax_comment_fetch_like", "comment_fetch_like");
add_action("wp_ajax_nopriv_comment_fetch_like", "comment_fetch_like");
function comment_fetch_like()
{
    $user_id = $_POST["user_id"];
    $comment_id = $_POST["comment_id"];

    $likeData = get_comment_meta($comment_id,'comment_like',true);
    $dislikeData = get_comment_meta($comment_id, 'comment_cstdislike',true);
    if(is_array($likeData)){
    if(in_array($user_id, $likeData)){
        $likekeys = array_search($user_id, $likeData, true);
        if($likekeys !== FALSE){
                unset($likeData[$likekeys]);
                update_comment_meta($comment_id,'comment_like',$likeData);
                update_comment_meta($comment_id,'total_like',count($likeData));
            }else{
                  
            }
    }else{
   if(in_array($user_id, $dislikeData)){
        $keys = array_search($user_id, $dislikeData, true);
        if($keys !== FALSE){
                unset($dislikeData[$keys]);
                update_comment_meta($comment_id,'comment_cstdislike',$dislikeData);
            }else{
                  
            }

    }

    
        if($likeData){
            array_push($likeData,$user_id);
            update_comment_meta($comment_id,'comment_like',$likeData);
            update_comment_meta($comment_id,'total_like',count($likeData));
        }else{
    
          //  $arrayData = array();
            array_push($likeData,$user_id);
            update_comment_meta($comment_id,'comment_like',$likeData);
            update_comment_meta($comment_id,'total_like',count($likeData));
        }
    }
}else{
    if(in_array($user_id, $dislikeData)){
        $keys = array_search($user_id, $dislikeData, true);
        if($keys !== FALSE){
                unset($dislikeData[$keys]);
                update_comment_meta($comment_id,'comment_cstdislike',$dislikeData);
            }else{
                  
            }

    }
    $arrayData = array();
    array_push($arrayData,$user_id);
    add_comment_meta($comment_id,'comment_like',$arrayData);
    add_comment_meta($comment_id,'total_like',count($arrayData));
}
if(get_comment_meta($comment_id,'comment_like',true)){
    $countLike = count(get_comment_meta($comment_id,'comment_like',true));
}else{
    $countLike = 0;
}
if(get_comment_meta($comment_id,'comment_cstdislike',true)){
    $countdisLike = count(get_comment_meta($comment_id,'comment_cstdislike',true));
}else{
    $countdisLike = 0;
}
$array = array(
'liked'=> $countLike,
'dislike' => $countdisLike,
); 
echo json_encode($array);

    exit();
}

// Comments Dislike
add_action("wp_ajax_comment_fetch_dislike", "comment_fetch_dislike");
add_action("wp_ajax_nopriv_comment_fetch_dislike", "comment_fetch_dislike");
function comment_fetch_dislike()
{
    $user_id = $_POST["user_id"];
    $comment_id = $_POST["comment_id"];
    $likeData = get_comment_meta($comment_id,'comment_like',true);
    $dislikeData = get_comment_meta($comment_id, 'comment_cstdislike',true);
      
        if(is_array($dislikeData)){
            if(in_array($user_id, $dislikeData)){
                $dislikekey = array_search($user_id, $dislikeData, true);
                if($dislikekey !== FALSE){
                    unset($dislikeData[$dislikekey]);
                    update_comment_meta($comment_id,'comment_cstdislike',$dislikeData);
                }else{
                    
                }
            }else{
                if(in_array($user_id, $likeData)){
                    $key = array_search($user_id, $likeData, true);
                 
                    if($key !== FALSE){
                            unset($likeData[$key]);
                            update_comment_meta($comment_id,'comment_like',$likeData);
                        }else{
                            
                        }
        
                }
                if($dislikeData){
                    array_push($dislikeData, $user_id);
                    update_comment_meta($comment_id,'comment_cstdislike',$dislikeData);
                }else{
                 
                    array_push($dislikeData, $user_id);
                    update_comment_meta($comment_id,'comment_cstdislike',$dislikeData);
                }    
            }
        }else{
            if(in_array($user_id, $likeData)){
                $key = array_search($user_id, $likeData, true);
                if($key !== FALSE){
                        unset($likeData[$key]);
                        update_comment_meta($comment_id,'comment_like',$likeData);
                    }else{
                        
                    }
    
            }
            $arrayDatas = array();
            array_push($arrayDatas, $user_id);
            add_comment_meta($comment_id,'comment_cstdislike',$arrayDatas);
        }

        
        if(get_comment_meta($comment_id,'comment_like',true)){
            $countLike = count(get_comment_meta($comment_id,'comment_like',true));
        }else{
            $countLike = 0;
        }
        if(get_comment_meta($comment_id,'comment_cstdislike',true)){
            $countdisLike = count(get_comment_meta($comment_id,'comment_cstdislike',true));
        }else{
            $countdisLike = 0;
        }
     $array = array(
        'liked'=> $countLike,
        'dislike' => $countdisLike,
     ); 
    echo json_encode($array);
        
    exit();
}


// Post Like and Dislike
add_action("wp_ajax_post_like_dislike", "post_like_dislike");
add_action("wp_ajax_nopriv_post_like_dislike", "post_like_dislike");
function post_like_dislike()
{
    $user_id = $_POST["curnt_userid"];
    $post_id = $_POST["post_id"];
    $likeData = get_post_meta($post_id, "post_cstlike",true);
    $dislikeData = get_post_meta($post_id, "post_cstdislike",true);

    if(is_array($likeData)){
        if(in_array($user_id, $likeData)){
            $likekeys = array_search($user_id, $likeData, true);
            if($likekeys !== FALSE){
                    unset($likeData[$likekeys]);
                    update_post_meta($post_id,'post_cstlike',$likeData);
                }else{
                    
                }
        
        }else{
        if(in_array($user_id, $dislikeData)){
                $keys = array_search($user_id, $dislikeData, true);
                if($keys !== FALSE){
                        unset($dislikeData[$keys]);
                        update_post_meta($post_id,'post_cstdislike',$dislikeData);
                    }else{
                        
                    }

            }

            
                if($likeData){
                    array_push($likeData,$user_id);
                    update_post_meta($post_id,'post_cstlike',$likeData);
                }else{
            
                    array_push($likeData,$user_id);
                    update_post_meta($post_id,'post_cstlike',$likeData);
                }
            }
        }else{
            if(in_array($user_id, $dislikeData)){
                $keys = array_search($user_id, $dislikeData, true);
                if($keys !== FALSE){
                        unset($dislikeData[$keys]);
                        update_post_meta($post_id,'post_cstdislike',$dislikeData);
                    }else{
                        
                    }

            }
            $arrayData = array();
            array_push($arrayData,$user_id);
            add_post_meta($post_id,'post_cstlike',$arrayData);
        }

        if(get_post_meta($post_id,'post_cstlike',true)){
            $countpostLike = count(get_post_meta($post_id,'post_cstlike',true));
        }else{
            $countpostLike = 0;
        }
        if(get_post_meta($post_id,'post_cstdislike',true)){
            $countpostdisLike = count(get_post_meta($post_id,'post_cstdislike',true));
        }else{
            $countpostdisLike = 0;
        }
     $array = array(
        'liked'=> $countpostLike,
        'dislike' => $countpostdisLike,
     ); 
    echo json_encode($array);

    exit();
}
add_action("wp_ajax_post_dislike", "post_dislike");
add_action("wp_ajax_nopriv_post_dislike", "post_dislike");
function post_dislike()
{
    $user_id = $_POST["curnt_userid"];
    $post_id = $_POST["post_id"];
    $likeData = get_post_meta($post_id, "post_cstlike", true);
    $dislikeData = get_post_meta($post_id, "post_cstdislike", true);
    

    if(is_array($dislikeData)){
        if(in_array($user_id, $dislikeData)){
        
            $dislikekey = array_search($user_id, $dislikeData, true);
                if($dislikekey !== FALSE){
                    unset($dislikeData[$dislikekey]);
                    update_post_meta($post_id,'post_cstdislike',$dislikeData);
                }else{
                    
                }

        }else{
            if(in_array($user_id, $likeData)){
                    $keys = array_search($user_id, $likeData, true);
                    if($keys !== FALSE){
                            unset($likeData[$keys]);
                            update_post_meta($post_id,'post_cstlike',$likeData);
                        }else{
                            
                        }

                }

                
                    if($dislikeData){
                        array_push($dislikeData,$user_id);
                        update_post_meta($post_id,'post_cstdislike',$dislikeData);
                    }else{
                
                        array_push($dislikeData,$user_id);
                        update_post_meta($post_id,'post_cstdislike',$dislikeData);
                    }
                }
        }else{
            if(in_array($user_id, $likeData)){
                $keys = array_search($user_id, $likeData, true);
                if($keys !== FALSE){
                        unset($likeData[$keys]);
                        update_post_meta($post_id,'post_cstlike',$likeData);
                    }else{
                        
                    }

            }
            $arrayDatas = array();
            array_push($arrayDatas,$user_id);
            add_post_meta($post_id,'post_cstdislike',$arrayDatas);
            
        }
        if(get_post_meta($post_id,'post_cstlike',true)){
            $countpostLike = count(get_post_meta($post_id,'post_cstlike',true));
        }else{
            $countpostLike = 0;
        }
        if(get_post_meta($post_id,'post_cstdislike',true)){
            $countpostdisLike = count(get_post_meta($post_id,'post_cstdislike',true));
        }else{
            $countpostdisLike = 0;
        }
     $array = array(
        'liked'=> $countpostLike,
        'dislike' => $countpostdisLike,
     ); 
    echo json_encode($array);


    exit();
}

function get_the_user_ip()
{
    if (!empty($_SERVER["HTTP_CLIENT_IP"])) {
        //check ip from share internet

        $ip = $_SERVER["HTTP_CLIENT_IP"];
    } elseif (!empty($_SERVER["HTTP_X_FORWARDED_FOR"])) {
        //to check ip is pass from proxy

        $ip = $_SERVER["HTTP_X_FORWARDED_FOR"];
    } else {
        $ip = $_SERVER["REMOTE_ADDR"];
    }

    return apply_filters("wpb_get_ip", $ip);
}

add_shortcode("display_ip", "get_the_user_ip");


//Verify EMAIL Address from CSV sheet
add_action("wp_ajax_nopriv_email_signup_verify", "email_signup_verify");
function email_signup_verify()
{
    $user_email = $_POST["email"];

    $result = [];

    if (email_exists($user_email)) {
        $email_already_exists = get_sub_field('email_already_exists', 'option')?get_sub_field('email_already_exists','option'):"Email already exists";
        $result["status"] = "fail";
        $result["message"] = $email_already_exists;
    } else {
        global $wpdb;
        $result = [];
        $args = [
            "role" => "subscriber",
            "orderby" => "registered",
            "order" => "DESC",
            "number" => 1,
        ];
        $users = get_users($args);
        $last_user_registered = $users[0];

        $username_e = explode("@", $user_email);
        $username = $username_e[0];
        if (username_exists($username)) {
            $username = $username . "-" . $last_user_registered->ID;
        }

        $userdata = [
            "user_login" => $username,
            "user_email" => $user_email,
            "user_pass" => trim($password),

            "user_registered" => current_time("mysql"),
            "role" => "subscriber",
        ];
        if (username_exists($username)) {
            $username_already_exists = get_sub_field('username_already_exists', 'option')?get_sub_field('username_already_exists','option'):"username already exists";
            $result["status"] = "error";
            $result["message"] = $username_already_exists;
        } else {
            $user_id = wp_insert_user($userdata);
            $unique = uniqid();
            $get_key = get_user_meta($user_id, "activation_pass_key", true);
            if ($get_key) {
                update_user_meta($user_id, "activation_pass_key", $unique);
            } else {
                add_user_meta($user_id, "activation_pass_key", $unique);
            }

            $url =
                site_url() .
                "/create-password/?data=create_pass_" .
                $user_id .
                "&key=" .
                $unique;
            $contact_url = site_url();
            $to = $user_email;
            $activate_password_message = get_field('activate_password_message','option')?get_field('activate_password_message','option'):'Activate Your Account';
            $subject = $activate_password_message;
            $pattern = '/{url}/i';
            $replacements = $url;
            $body = get_field('email_template_section','option');
            $msg =  preg_replace($pattern, $replacements, $body);
            

            // $body =
            //     '<p>Please click the link below to create your password and complete activation:</p><p><a href="' .
            //     $url .
            //     '" target="_blank">' .
            //     $url .
            //     '</a></p><p>If you have any questions or difficulty please <a href="' .
            //     $contact_url .
            //     '">contact us</a>.</p><br><br><p>-- The Development Team</p>';
            $headers = [];
            $admin_email = get_option("admin_email");
            $headers[] = "Content-Type: text/html; charset=UTF-8";
            // $headers[] = 'From: Hands On Motor Development <'.$admin_email.'>';
            wp_mail($to, $subject, $msg, $headers);
            $thank_you_message = get_field('thank_you_message','option')?get_field('thank_you_message','option'):'';
            $thank_you_fields = get_field('thank_you_fields','option')?get_field('thank_you_fields','option'):'';
            $result["status"] = "success";
            $result["message"] = $thank_you_message.'<br/><br/><em>'.$thank_you_fields.'</em>';
            $result["user_id"] = $user_id;
            $result["username"] = $username;
            $result["user_pass"] = $password;
        }
    }

    echo json_encode($result);
    exit();
}

///Create password code
add_action("wp_ajax_createPassword", "createPassword");
add_action("wp_ajax_nopriv_createPassword", "createPassword");
function createPassword()
{
    $result = [];
    $user_id = $_POST["userid"];
    $password = $_POST["pass"];
    $data = get_userdata($user_id);
    $url = site_url();
    if ($data) {
        wp_set_password($password, $user_id);
        $result["status"] = "updated";
        $result["message"] =
            'Password successfully created, click here to <a href="' .
            $url .
            '">sign in</a>';
        delete_user_meta($user_id, "activation_pass_key", "");
        $get_key = get_user_meta($user_id, "ftime_profile_set", true);
        $ft_p_s = 6;
        if ($get_key) {
            update_user_meta($user_id, "ftime_profile_set", $ft_p_s);
        } else {
            add_user_meta($user_id, "ftime_profile_set", $ft_p_s);
        }
    } else {
        $user_not_exist = get_sub_field('user_not_exist', 'option')?get_sub_field('user_not_exist','option'):"username already exists";
        $result["status"] = "error";
        $result["message"] = $user_not_exist;
    }
    echo json_encode($result);
    exit();
}

//Login Form Code
add_action("wp_ajax_user_login", "user_login");
add_action("wp_ajax_nopriv_user_login", "user_login");
function user_login()
{
    global $wpdb;
    $result = [];
    $email = email_exists($_POST["email"]);
    if ($email) {
        $user_data = get_user_by("email", $_POST["email"]);
        $main_user = $user_data->data;
        $user_ID = $user_data->ID;
        
        $username = $main_user->user_login;
        $info["user_login"] = $username;
        $info["user_password"] = $_POST["password"];
        $info["remember"] = "forever";
        $user_signon = wp_signon($info, false);
        if (is_wp_error($user_signon)) {
            $password_not_match =  get_field('password_not_match')?get_field('password_not_match'):'Password Does Not Match';
            $result["status"] = "error";
            $result["message"] = $password_not_match;
            $result['error_login'] = $user_signon->get_error_message();
        } else {
            $logged_in =  get_field('logged_in')?get_field('logged_in'):'Logged In';
            $result["status"] = "success";
            $result["message"] = $logged_in;
            //User information for Tracking

            //R2-97
            $result["avatarUrl"] = get_user_meta(
                $user_data->data->ID,
                "profile_picture",
                true
            );
        }
    } else {
        $email_not_match =  get_field('email_not_match')?get_field('email_not_match'):'"Email-id  does not  exist"';
        $result["status"] = "error_email";
        $result["message"] = $email_not_match;
    }
    echo json_encode($result);
    exit();
}

//Forgot Pass
add_action("wp_ajax_nopriv_user_forgotpass", "user_forgotpass");
function user_forgotpass()
{
    global $wpdb;
    $result = [];
    $email = email_exists($_POST["email"]);
    if ($email) {
        $user_data = get_user_by("email", $_POST["email"]);
        $user_id = $user_data->ID;
        $unique = uniqid();
        $get_key = get_user_meta($user_id, "forgot_pass_key", true);
        if ($get_key) {
            update_user_meta($user_id, "forgot_pass_key", $unique);
        } else {
            add_user_meta($user_id, "forgot_pass_key", $unique);
        }
        $url =
            site_url() .
            "/reset-password/?data=reset_pass_" .
            $user_id .
            "&key=" .
            $unique;
        $contact_url = site_url() . "/contact-us";
        $to = $_POST["email"];
        $reset_password_message = get_field('reset_password_message','option')?get_field('reset_password_message','option'):'Reset Your Password';
        $subject = $reset_password_message;
        $pattern = '/{url}/i';
        $replacements = $url;
        $body = get_field('email_template_reset_password','option');
        $msg =  preg_replace($pattern, $replacements, $body);
        $headers = [];
        $admin_email = get_option("admin_email");
        $headers[] = "Content-Type: text/html; charset=UTF-8";
        // $headers[] = 'From: Hands On Motor Development <'.$admin_email.'>';
        wp_mail($to, $subject,  $msg, $headers);
        $success_message = get_field('success_message','option')?get_field('success_message','option'):'Please check your mail for further instructions.';

        $result["status"] = "success";
        $result["message"] = $success_message;
    } else {
        $email_not_exist = get_field('email_not_exist','option')?get_field('email_not_exist','option'):'Email-id  does not exist';
        $result["status"] = "error_email";
        $result["message"] = $email_not_exist;
    }
    echo json_encode($result);
    exit();
}

add_action('after_setup_theme', 'remove_admin_bar');

function remove_admin_bar() {
if (!current_user_can('administrator') && !is_admin()) {
  show_admin_bar(false);
}
}

add_action("wp_ajax_comment_filter", "comment_filter");
add_action("wp_ajax_nopriv_comment_filter", "comment_filter");
function comment_filter( $comment_id, $depth = 0 ){
    $pageid = $_POST["pageid"] ? $_POST["pageid"] : "";
    $sortbybest = $_POST["sortbybest"] ? $_POST["sortbybest"] : "";
    $paged = $_POST["paged"] ? $_POST["paged"] : "1";
   
    $argms = array (
        'post_id'  => $pageid,
        'post_type' => array( 'post'),
        'status' => 'approve',
        'avatar_size' => 60,
        'style'       => 'ul',
		'short_ping'  => true,
		'callback' => 'comment_filter',

        'number' => 2,
        'paged' => $paged
    );

    if ($sortbybest == "mostpopular") {
       $argms["meta_key"] = "total_like";
        $argms["orderby"] = "meta_value_num";
        $argms["order"] = "DESC";
    } elseif ($sortbybest == "newest") {
        $argms["orderby"] = "date";
        $argms["order"] = "DESC";
    } elseif ($sortbybest == "oldest") {
        $argms["orderby"] = "date";
        $argms["order"] = "ASC";
    }
   
    $comments = get_comments($argms);
    foreach($comments as $comment) {
    // print_r($comment);
       $like_data= get_comment_meta( $comment->comment_ID,'comment_like',true);
        $dislike_data= get_comment_meta( $comment->comment_ID,'comment_cstdislike',true);
       if($like_data){
        $get_like_count = count($like_data) ;
       }else{
           $get_like_count = 0 ;
       }
       if($dislike_data){
        $get_dislike_count = count($dislike_data) ;
       }else{
           $get_dislike_count = 0 ;
       }
       $comment_class = get_comment_class( $css_class ,$comment->comment_ID, $comment, $pageid , true );
    //    global $comment_alt, $comment_depth, $comment_thread_alt;
    //    $classes = array();
        ?>
      <li class="<?php echo implode( ' ', $comment_class ); ?>" id="li-comment-<?php echo $comment->comment_ID; ?>">
     
           <div class="comment-block cst-commentblock">
                   <?php if ($comment->comment_approved == "0"): ?>
                       <em><?php  $comment_moderation = get_field('comment_moderation','option')?get_field('comment_moderation','option'):'Your comment is awaiting moderation';
                       esc_html_e(
                        $comment_moderation
                       ); ?></em>
                       
                   <?php endif; ?>
                        <div class="comment-by cst-comment-by">
                            
                            <span class="pro-auth"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/author_profile.png " alt="author_profile"/></span>
                            <span class="pro-authName"><?php echo $comment->comment_author;  ?></span>
                            <span class="cstcmt-dot">•</span>
                            <span class="date float-right"><?php 
                              $date_format = get_option( 'date_format' ); printf(
                                esc_html__('%1$s'),
                                get_comment_date( $date_format , $comment->comment_ID),
                                ""
                            ); ?></span>
                            </div>
                     <div class="cst-commentcomment">   
                          <div class="cst-commenttext"> <?php echo $comment->comment_content; ?></div>
                   
                   <?php if (is_user_logged_in()) { ?>
                   <div class="cst-likereply">
                      <input type="hidden" value="<?php echo get_current_user_id(); ?>" id="cst_userid"/>	
                       <?php
                       $user_id = get_current_user_id();
                       $commentid_article = $comment->comment_ID;
                       $get_like_user = get_comment_meta(
                           $comment->comment_ID,
                           "current_user_id"
                       );
                       
                       $published_comment_author_id = $comment->user_id;

                       if ($user_id == $published_comment_author_id) {
                        $reply_field = get_field('reply','option')?get_field('reply','option'):'Reply';

                           echo "<span class='cst-reply'>".$reply_field."</span>"; ?>
                        <span class="cstcmt-dot">•</span>
                        <a href="javascript:void(0)" class="cst-likeup">
                          <svg xmlns="http://www.w3.org/2000/svg" width="22.711" height="23.057" viewBox="0 0 22.711 23.057">
                              <path id="Icon_feather-thumbs-up" data-name="Icon feather-thumbs-up" d="M16.234,10.72V6.308A3.308,3.308,0,0,0,12.925,3L8.514,12.925V25.057h12.44a2.206,2.206,0,0,0,2.206-1.875l1.522-9.925a2.206,2.206,0,0,0-2.206-2.537ZM8.514,25.057H5.206A2.206,2.206,0,0,1,3,22.851v-7.72a2.206,2.206,0,0,1,2.206-2.206H8.514" transform="translate(-2.5 -2.5)" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="1" opacity="0.651"/>
                          </svg>
                       </a>

                         <span class="LikeNo font-20Medium like<?php echo $comment->comment_ID;?>"><?php echo $get_like_count; ?></span>
                         <a href="javascript:void(0)" class="cst-likedown">
                         <svg xmlns="http://www.w3.org/2000/svg" width="22.711" height="23.057" viewBox="0 0 22.711 23.057">
                           <path id="Icon_feather-thumbs-down" data-name="Icon feather-thumbs-down" d="M11.949,17.337v4.411a3.308,3.308,0,0,0,3.308,3.308l4.411-9.925V3H7.229A2.206,2.206,0,0,0,5.023,4.875L3.5,14.8a2.206,2.206,0,0,0,2.206,2.536ZM19.668,3h2.945a2.548,2.548,0,0,1,2.57,2.206v7.72a2.548,2.548,0,0,1-2.57,2.206H19.668" transform="translate(-2.972 -2.499)" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="1" opacity="0.651"/>
                           </svg>
                         </a>
                 
                           <span class="LikeNo font-20Medium dislike<?php echo $comment->comment_ID;?>"><?php echo $get_dislike_count; ?></span>
                           <span class="cstcmt-dot">•</span>
                           <?php $share = get_sub_field('share', 'option')?get_sub_field('share','option'):"Share";
                           if($share ){?>
                           <a href=""><span class="share-cmmnt"><?php echo $share ; ?></span></a>
                           <?php }?>
                         <?php
                       } else {
                            ?>
                        <span class="float-right">
                           <span class="cst-reply"> <?php 
                  
                   // $depth = 1;
                    $defaults = array(
                        'add_below'     => 'comment',
                        'respond_id'    => 'respond',
                        'reply_text'    => __( 'Reply' ),
                          'depth'     =>0 ,
                         'max_depth' => 6,
                        'reply_to_text' => __( 'Reply to %s' ),
                        'login_text'    => __( 'Log in to Reply' ),
                        'before'        => '',
                        'after'         =>'', 
                        'hierarchical' => true,
                    );
                    $args = wp_parse_args( $args, $defaults);
                    // $args = array(
                    //     'child' =>$comment->comment_ID,
                    //     'hierarchical' => true,
                    //    );
                    $comment_reply_link = get_comment_reply_link(
                        array_merge($args, [
                            "depth" =>$args["depth"],
                            "max_depth" => $args["max_depth"],
                        ]),  $comment->comment_ID, $pageid
                     	                );
                                     
                                      //  $child_comments = get_comments($args);
                                    
                      
                      //  $questions = get_comments($comment_reply_link );
                      echo  $comment_reply_link ;
    
                        ?>
                            </span>
                          
                        </span>
                        <span class="cstcmt-dot">•</span>
                        <?php if (in_array($user_id, $get_like_user)) { ?>
                              <a href="javascript:void(0);" class="liked_svg" onclick="commentlike_fetch('<?php echo $comment->comment_ID; ?>')" value="<?php echo $comment->comment_ID; ?>" id="comment_id"> 
                               <svg xmlns="http://www.w3.org/2000/svg" width="22.711" height="23.057" viewBox="0 0 22.711 23.057">
                                 <path id="Icon_feather-thumbs-up" data-name="Icon feather-thumbs-up" d="M16.234,10.72V6.308A3.308,3.308,0,0,0,12.925,3L8.514,12.925V25.057h12.44a2.206,2.206,0,0,0,2.206-1.875l1.522-9.925a2.206,2.206,0,0,0-2.206-2.537ZM8.514,25.057H5.206A2.206,2.206,0,0,1,3,22.851v-7.72a2.206,2.206,0,0,1,2.206-2.206H8.514" transform="translate(-2.5 -2.5)" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="1" opacity="0.651"/>
                                 </svg>

                              </a>
                              <span class="LikeNo font-20Medium like<?php echo $comment->comment_ID;?>"><?php echo $get_like_count; ?></span>
                              <a href="javascript:void(0);" class="max-lf dilike_svg" onclick="commentdislike_fetch('<?php echo $comment->comment_ID; ?>')" value="<?php echo $comment->comment_ID; ?>" id="comment_id"> 	
                              <svg xmlns="http://www.w3.org/2000/svg" width="22.711" height="23.057" viewBox="0 0 22.711 23.057">
                              <path id="Icon_feather-thumbs-down" data-name="Icon feather-thumbs-down" d="M11.949,17.337v4.411a3.308,3.308,0,0,0,3.308,3.308l4.411-9.925V3H7.229A2.206,2.206,0,0,0,5.023,4.875L3.5,14.8a2.206,2.206,0,0,0,2.206,2.536ZM19.668,3h2.945a2.548,2.548,0,0,1,2.57,2.206v7.72a2.548,2.548,0,0,1-2.57,2.206H19.668" transform="translate(-2.972 -2.499)" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="1" opacity="0.651"/>
                              </svg>


                           </a>	
                           <span class="LikeNo font-20Medium dislike<?php echo $comment->comment_ID;?>"><?php echo $get_dislike_count; ?></span>
                           <span class="cstcmt-dot">•</span>
                           <?php $share = get_sub_field('share', 'option')?get_sub_field('share','option'):"Share";
                           if($share ){?>
                           <a href=""><span class="share-cmmnt"><?php echo $share; ?></span></a>
                           <?php }?>
                            <?php } else { ?>
                           <a href="javascript:void(0);" onclick="commentlike_fetch('<?php echo $comment->comment_ID; ?>')" value="<?php echo $comment->comment_ID; ?>" id="comment_id"> 
                             <svg xmlns="http://www.w3.org/2000/svg" width="22.711" height="23.057" viewBox="0 0 22.711 23.057">
                              <path id="Icon_feather-thumbs-up" data-name="Icon feather-thumbs-up" d="M16.234,10.72V6.308A3.308,3.308,0,0,0,12.925,3L8.514,12.925V25.057h12.44a2.206,2.206,0,0,0,2.206-1.875l1.522-9.925a2.206,2.206,0,0,0-2.206-2.537ZM8.514,25.057H5.206A2.206,2.206,0,0,1,3,22.851v-7.72a2.206,2.206,0,0,1,2.206-2.206H8.514" transform="translate(-2.5 -2.5)" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="1" opacity="0.651"/>
                              </svg>

                           </a>
                           <span class="LikeNo font-20Medium like<?php echo $comment->comment_ID;?>"><?php echo $get_like_count; ?></span>
                           <a href="javascript:void(0);"  class="max-lf" onclick="commentdislike_fetch('<?php echo $comment->comment_ID; ?>')" value="<?php echo $comment->comment_ID; ?>" id="comment_id"> 	
                            <svg xmlns="http://www.w3.org/2000/svg" width="22.711" height="23.057" viewBox="0 0 22.711 23.057">
                              <path id="Icon_feather-thumbs-down" data-name="Icon feather-thumbs-down" d="M11.949,17.337v4.411a3.308,3.308,0,0,0,3.308,3.308l4.411-9.925V3H7.229A2.206,2.206,0,0,0,5.023,4.875L3.5,14.8a2.206,2.206,0,0,0,2.206,2.536ZM19.668,3h2.945a2.548,2.548,0,0,1,2.57,2.206v7.72a2.548,2.548,0,0,1-2.57,2.206H19.668" transform="translate(-2.972 -2.499)" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="1" opacity="0.651"/>
                            </svg>

                           </a>	
                           <span class="LikeNo font-20Medium dislike<?php echo $comment->comment_ID;?>"><?php echo $get_dislike_count; ?></span>
                           <span class="cstcmt-dot">•</span>
                           <?php $share = get_sub_field('share', 'option')?get_sub_field('share','option'):"Share";
                           if($share ){?>
                           <a href=""><span class="share-cmmnt"><?php echo $share;?></span></a>
                           <?php } }?>
                              
                           <?php
                       }
                       ?>
                    </div>   
                   <?php } ?>
                           </div>    
               </div>
        </li>

        <?php
            }
        

    exit();
}

//pagination code ended
function html_cut($text, $max_length) {
    $tags = array();
    $result = "";
    $is_open = false;
    $grab_open = false;
    $is_close = false;
    $in_double_quotes = false;
    $in_single_quotes = false;
    $tag = "";
    $i = 0;
    $stripped = 0;
    $stripped_text = strip_tags($text);
    while ($i < strlen($text) && $stripped < strlen($stripped_text) && $stripped < $max_length) {
        $symbol = $text[$i];
        $result .= $symbol;
        switch ($symbol) {
            case '<':
                $is_open = true;
                $grab_open = true;
                break;
            case '"':
                if ($in_double_quotes)
                    $in_double_quotes = false;
                else
                    $in_double_quotes = true;
                break;
            case "'":
                if ($in_single_quotes)
                    $in_single_quotes = false;
                else
                    $in_single_quotes = true;
                break;
            case '/':
                if ($is_open && !$in_double_quotes && !$in_single_quotes) {
                    $is_close = true;
                    $is_open = false;
                    $grab_open = false;
                }
                break;
            case ' ':
                if ($is_open)
                    $grab_open = false;
                else
                    $stripped++;
                break;
            case '>':
                if ($is_open) {
                    $is_open = false;
                    $grab_open = false;
                    array_push($tags, $tag);
                    $tag = "";
                } else if ($is_close) {
                    $is_close = false;
                    array_pop($tags);
                    $tag = "";
                }
                break;
            default:
                if ($grab_open || $is_close)
                    $tag .= $symbol;
                if (!$is_open && !$is_close)
                    $stripped++;
        }
        $i++;
    }
    while ($tags)
        $result .= "</" . array_pop($tags) . ">";
    return $result;
}

function getDuration($video_id){
    $api_key = 'AIzaSyB47PTfHLl6dxcbyd2JsGvlFqjITZWlkE4'; // Like this AIcvSyBsLA8znZn-i-aPLWFrsPOlWMkEyVaXAcv
    $dur = file_get_contents("https://www.googleapis.com/youtube/v3/videos?part=contentDetails&id=".$video_id."&key=".$api_key);
    $VidDuration =json_decode($dur, true);           
    foreach ($VidDuration['items'] as $vidTime)
    {
        $VidDuration= $vidTime['contentDetails']['duration'];
    }
   
    $video_duration = preg_match_all('/(\d+)/',$VidDuration,$parts);
    return $parts[0][0]. ":" .
           $parts[0][1] . ":".
           $parts[0][2]; // Return 1:11:46 (i.e.) HH:MM:SS
   }

   function get_viewscount($video_id){
    $api_key = 'AIzaSyB47PTfHLl6dxcbyd2JsGvlFqjITZWlkE4';
    $JSON = file_get_contents("https://www.googleapis.com/youtube/v3/videos?part=statistics&id=" . $video_id . "&key=".$api_key);

    $JSON_Data = json_decode($JSON);
    $views = $JSON_Data->items[0]->statistics->viewCount;
    return $views;
   }


   add_filter( 'comment_form_defaults', function( $fields ) {
    $user_must_be_login = get_field('user_must_be_login','option')?get_field('user_must_be_login','option'):'User must be logged in';
    
    $fields['must_log_in'] = $user_must_be_login;
    return $fields;
});
add_filter( 'comment_form_logged_in', '__return_empty_string' );

// Article search for single page
add_action('wp_ajax_article_fetch' , 'article_fetch');
add_action('wp_ajax_nopriv_article_fetch','article_fetch');
function article_fetch(){
    
    $article_value = $_POST['article_value']?$_POST['article_value']:'';

  $args = array(
    'post_type' => array( 'post', 'database-xr') ,
    'posts_per_page' => -1,
    's' => esc_attr($article_value),
  );
  $query_article = new WP_Query( $args );

        if( $query_article->have_posts() ) { 
            
            
            while ( $query_article->have_posts() ) : $query_article->the_post(); 
           
            

            $cat_news = get_the_category(get_the_ID());
            $default_img = get_stylesheet_directory_uri().'/img/woocommerce-placeholder.png';
            if(get_post_type() === "database-xr"){
              
                $media = get_post_meta(get_the_ID(), 'Media', true);
                $featuredurls = $media['data'][0]['attributes']['formats']['thumbnail']['url']; 
                if($featuredurls){
                $featuredurl = '<img src="https://database.vr-expert.com'.$featuredurls.'" alt="'.get_the_title().'" />';
                }else{
                    $featuredurl  = '<img src="'.$default_img.'" loading="lazy" alt="'.get_the_title().'"/>';
                }
        }else{
            $featuredurls = get_the_post_thumbnail_url(get_the_ID());
            // $featuredurls = $featuredurl?$featuredurl:$default_img;
            if($featuredurls){
                $featuredurl = '<img src="'.$featuredurls.'" loading="lazy" alt="'.get_the_title().'"/>';
            }else{
                $featuredurl  = '<img src="'.$default_img.'" loading="lazy" alt="'.get_the_title().'"/>';
            }
            
            
        }
            
            
            ?>
            <div class="create-pagi">
                <a class="search-Klink" href="<?php the_permalink(); ?>">
               <?php if($featuredurl){ ?>
                    <div class="simg">
                        <?php echo $featuredurl; ?>
                    </div>
                    <?php } ?>
                    <div class="dm-F9">

                            <div class="wm-401">
                            <?php  if($cat_news){
                                 $i= 1; foreach($cat_news as $cd){ 
                                    if($i<2){ 
                                echo'
                                <div class="VrQ">
                                  <span>'.$cd->cat_name.'</span>
                                </div>';
                                  } $i++; }}
                                //   else if($category_database){
                                //     $i= 1; foreach($category_database as $cd_name){ 
                                //         if($i<2){ 
                                //     echo'
                                //     <div class="VrQ">
                                //       <span>'.$cd_name->name.'</span>
                                //     </div>';
                                //       } $i++; }

                                // }
                                $title = html_cut(get_the_title(), 30); // limit the word count of content
                                $points  = strlen(get_the_title()) > 30?'...':'';
                              
                                echo '<h2 class="HeadingH3-25-bold">'.strip_tags($title. $points).'</h2>';
                                if(get_post_type() == "database-xr"){

                                    $post_content = get_post_meta(get_the_ID(), 'post_content', true);
                                 ?>
                                
                                <p class="font-18text"><?php if($post_content){ ?>
                                    <?php
                                            $content2 = html_cut($post_content, 30); // limit the word count of content
                                            $point2  = strlen($post_content) > 30?'...':'';
                                            echo  strip_tags( '<p>'.$content2. $point2.'</p>');
                                    ?> 
                            <?php  }  ?></p> <?php } ?>
                            </div>
                    </div>
                </a>
                <div class="bottom-dividerx"></div>
            </div>
           
            <?php  endwhile; 
          echo ' <a class="clickQnk HeadingH3-25-bold" href="'.site_url().'/?s='.$article_value.'">'.get_field('view_all_results','option').' ></a>';
        }else{ 
        echo '<p>'.get_field('no_result_found','option').'</p>';
         } exit(); wp_reset_postdata();
        
        } 



//Search Code

add_action("wp_ajax_search_fetch", "search_fetch");
add_action("wp_ajax_nopriv_search_fetch", "search_fetch");
function search_fetch()
{
    $search_key = $_POST["search_value"] ? $_POST["search_value"] : "";
    $paged = $_POST['paged'];
    $sortbybest = $_POST["sortbybest"] ? $_POST["sortbybest"] : "";
    $meta_key = $_POST["meta_key"] ? $_POST["meta_key"] : "";
  
    $args = [
        "post_type" => "post",
        "post_status" => "publish",
        "posts_per_page" => 2,
        's' => esc_attr($search_key),
        "paged" => $paged,
        "meta_key" => $meta_key,
    ];
    if ($sortbybest == "mostpopular") {
        $args["meta_key"] = "post_views_count";
        $args["orderby"] = "meta_value_num";
        $args["order"] = "DESC";
    } elseif ($sortbybest == "newest") {
        $args["orderby"] = "date";
        $args["order"] = "DESC";
    } elseif ($sortbybest == "oldest") {
        $args["orderby"] = "date";
        $args["order"] = "ASC";
    }
    $loop = new WP_Query($args);
  
   add_filter( 'posts_where', 'title_filter', 10, 2 );
    if ($loop->have_posts()) {
        echo '<div class="newsItems">';
        while ($loop->have_posts()) {
            $loop->the_post();
          
             $posts_id = get_the_ID($loop);
            $featuredurl = get_the_post_thumbnail_url($posts_id);
            $default_img = get_stylesheet_directory_uri().'/img/woocommerce-placeholder.png';
            $featuredurls = $featuredurl?$featuredurl:$default_img;
            echo '<div class="News-Allcards">
							<div class="newscards-img">
                             <a href="'.get_the_permalink($posts_id).'">
								<img src="' .$featuredurls.'" />
                                </a>
							</div>
							 <div class="nwcard-content">
									<div class="news-buttons">';
                           $cat_news= get_the_category( $posts_id);
                           foreach($cat_news as $cd){ 
									echo'	<div class="newsbtn">
											<a href="'.get_category_link($cd->term_id).'" class="font-16text" >'.$cd->cat_name.'</a>
										</div>'; } 
										echo'	
									</div>
                                    <a href="'.get_the_permalink($posts_id).'">
									<p class=" font-20text">'.get_the_title($posts_id) . '</p>
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
											</svg><span>';
                                                $date = get_the_date( get_option('date_format'), $posts_id);
                                                
                                                echo $date;
                                                echo '</span>
										</li>
										<li>
											<svg xmlns="http://www.w3.org/2000/svg" width="19.45" height="15.128"
												viewBox="0 0 19.45 15.128">
												<path id="Icon_awesome-comments" data-name="Icon awesome-comments"
													d="M14.047,7.653c0-2.985-3.144-5.4-7.023-5.4S0,4.668,0,7.653a4.581,4.581,0,0,0,1.283,3.107A7.6,7.6,0,0,1,.074,12.6a.268.268,0,0,0-.051.294.264.264,0,0,0,.246.162,5.945,5.945,0,0,0,3-.844,8.592,8.592,0,0,0,3.758.844C10.9,13.055,14.047,10.638,14.047,7.653Zm4.12,7.429a4.575,4.575,0,0,0,1.283-3.107c0-2.259-1.807-4.194-4.366-5a5.018,5.018,0,0,1,.044.679c0,3.576-3.637,6.483-8.1,6.483a10.124,10.124,0,0,1-1.07-.064,7.3,7.3,0,0,0,6.473,3.306,8.545,8.545,0,0,0,3.758-.844,5.945,5.945,0,0,0,3,.844.266.266,0,0,0,.246-.162.271.271,0,0,0-.051-.294A7.519,7.519,0,0,1,18.167,15.081Z"
													transform="translate(0 -2.25)" />
											</svg>
											<span>';
                                                    echo $article_comment = $loop->comment_count.' ';
                                                    if ($article_comment < 2) {
                                                        $comment_text = get_field('comment_text', 'option')?get_field('comment_text','option'):"comment";
                                                        echo $comment_text;
                                                    } else {
                                                        $comments_sec_text = get_field('comments_sec_text','option')?get_field('comments_sec_text','option'):"comments";
                                                        echo $comments_sec_text;
                                                    }
                                             echo '</span>
										</li>
									
									</ul>
                                    </a>
							 </div>
                 	 </div>';
        }


        echo " </div>";

        
    }
    die();
   remove_filter( 'posts_where', 'title_filter', 10, 2 );
}
function title_filter( $where, &$wp_query ){
    global $wpdb;
    if ( $search_term = $wp_query->get( 'search_prod_title' ) ) {
        $where .= ' AND ' . $wpdb->posts . '.post_title LIKE \'%' . esc_sql( like_escape( $search_term ) ) . '%\'';
    }
    return $where;
}


add_shortcode('singlepage_shortcode', 'singleshortcode');
function singleshortcode(){ 
  $html = '';
  $img_id = get_field('custom_banner_img', get_the_ID());
  $custom_banner_editor = get_field('custom_banner_editor', get_the_ID());
  $btn_text = get_field('banner_button_text', get_the_ID());
  $cta_url = get_field('banner_button_url', get_the_ID());
  if($custom_banner_editor){
    $html .='<div class="callShortcode">';
   $html .='<div class="width-48 lf-sec-imd">';
   $html .='<img src="'.$img_id.'"  alt="" />';  
   $html .='</div>';
  
   $html .='<div class="width-48 rt-sec-imd">'.$custom_banner_editor.'
                <div class="call-to-act">
                    <a class="knowledge-btn" href="'.$cta_url.'">'.$btn_text.'</a>
                </div> 
            </div>';
    $html .='</div>';
   }
  
 
   return $html;

}
//create shortcode for product specification table for  single xr-database page
function xrDatabase_table_shortcode($atts) {
    // Extract the attributes
    $attributes = shortcode_atts(array(
        'config-urls' => "default_value1",
        'api-id' => 'default_value2',
        'document-id' =>'default_value3',
        'language' =>'default_value4',
        
    ), $atts);
    // Retrieve attribute values
    $attribute1_value = esc_attr($attributes['config-urls']);
    $attribute2_value = esc_attr($attributes[ 'api-id']);
    $attribute3_value = esc_attr($attributes[ 'document-id']);
    $attribute4_value = esc_attr($attributes[ 'language']);

    // Perform desired logic with the attributes

    $output  = '<c-vrx config-urls ="['.$attribute1_value.']" api-id= "'.$attribute2_value.'" document-id= "'.$attribute3_value.'" language= "'.$attribute4_value.'"></c-vrx>';
   
    return $output;
}
add_shortcode('xr_table_specification_shortcode', 'xrDatabase_table_shortcode');