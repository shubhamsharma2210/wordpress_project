<?php
// ***********************************************************************************
// WordPress mein register_nav_menus function ko use karte hain taaki aap apne theme ke liye custom navigation menus register kar saken.
register_nav_menus(

    array("header-menu" => "header menu")
);
// ***********************************************************************************
// Allowed option featured image in admin panel
add_theme_support('post-thumbnails');

// *********************************************************************************
// Allowed option header logo image in admin panel
add_theme_support('custom-header');


//  **********************************************************************************
//add custom js 
function add_custom_script()
{
    wp_enqueue_script('header-script', get_template_directory_uri() . '/js/custom-header.js', array(), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'add_custom_script');




//************************************************************************************** 
// Add custom style
function add_custom_style()
{
    wp_enqueue_style('header-style', get_template_directory_uri() . '/css/custom-css.css', array(), false, 'all');
}
add_action('wp_enqueue_scripts', 'add_custom_style'); // Corrected hook


// remove wordpress top bar in website
add_filter('show_admin_bar', '__return_false');


// **********************************************************************************
// how to add excerpt (short desc.) in wp
function enable_page_excerpt()
{
    add_post_type_support('page', 'excerpt');
}
add_action('init', 'enable_page_excerpt');

// ***********************************************************************************
// add taxonomy using custom Post Type plugin
function display_news_posts()
{
    $args = array(
        'post_type' => 'news',
        'post_status' => 'publish', // Only show published posts
    );



    $wpQuery = new WP_Query($args);
    if ($wpQuery->have_posts()) {
        echo '<h1 class="blog_title">News</h1>';
        echo '<hr>';
        echo '<div>';
        echo '<div class="card-container">';
        while ($wpQuery->have_posts()) {
            $wpQuery->the_post();
            $image = wp_get_attachment_image_src(get_post_thumbnail_id(), 'large');
            echo '<div class="card">';
            echo '<img src="' . $image[0] . '">';
            echo '<h2>' . get_the_title() . '</h2>';
            echo '<p>' . get_the_excerpt() . '</p>';
            echo '<p>' . get_the_date() . '</p>';
            echo '<a href="' . get_permalink() . '"><button>Read More</button></a>';
            echo '</div>';
        }
        echo '</div>';
        echo '</div>';
    }
    wp_reset_postdata();
}

// ************************************************************************************
// add taxonomy using ACF plugin
function display_shopping_posts()
{
    $args = array(
        'post_type'      => 'shopping',
        'post_status'    => 'publish',
    );

    $wpQuery = new WP_Query($args);
    if ($wpQuery->have_posts()) {
        echo '<h1 class="blog_title">Shopping</h1>';
        echo '<hr>';
        echo '<div>';
        echo '<div class="card-container">';
        while ($wpQuery->have_posts()) {
            $wpQuery->the_post();
            $image = wp_get_attachment_image_src(get_post_thumbnail_id(), 'large');

            // ✅ ACF Fields Fetch Karna
            $price = get_field('addtocart'); // Price
            $rating = get_field('rating-type'); // Rating (1-5)
            // $product_image = get_field('shopping_product_image'); // Extra Product Image
            // $stock_status = get_field('shopping_stock_status'); // True/False
            // $product_link = get_field('shopping_product_link'); // Product Buy Link

            echo '<div class="card">';
            echo '<img src="' . esc_url($image[0]) . '" alt="Product Image">';
            echo '<h2>' . get_the_title() . '</h2>';
            echo '<p>' . get_the_excerpt() . '</p>';
            echo '<p>' . get_the_date() . '</p>';
            echo '<p class="rating">Rating: ' . str_repeat('⭐', intval($rating)) . '</p>';
            echo '<div class="bottom-details">';
            // ✅ Price Show Karna
            echo '<p class="price">Price: ₹' . esc_html($price) . '</p>';
            // $get_id = get_the_ID();
            // echo "id".$get_id;

            // ✅ Rating Show Karna (Stars)

            // ✅ Stock Status Show Karna
            // if ($stock_status) {
            //     echo '<p class="stock in-stock">In Stock ✅</p>';
            // } else {
            //     echo '<p class="stock out-of-stock">Out of Stock ❌</p>';
            // }

            // ✅ Product Link
            echo '<a href="' . get_permalink() . '" target="_blank"><button>Buy Now</button></a>';
            echo '</div>';
            echo '</div>';
        }
        echo '</div>';
        echo '</div>';
    }
    wp_reset_postdata();
}

// **********************************************************************************

// create a custom post type without using plugin
function create_restorant_post_type()
{
    $args = array(
        'label' => __('Restorant', 'textdomain'),
        'public' => true,
        'supports' => array('title', 'editor', 'thumbnail', 'excerpt'),
    );
    register_post_type('restorant', $args);
}

add_action('init', 'create_restorant_post_type', 0);


// ************************************************************************************
// disply restorant post type  without using plugin

function display_restorant_post_type()
{

    $args = array(
        'post_type' => 'restorant',
        'post_status' => 'publish'
    );

    $wpQuery = new WP_Query($args);
    if ($wpQuery->have_posts()) {
        echo '<h1 class="blog_title">Restorant</h1>';
        echo '<hr>';
        echo '<div>';
        echo '<div class="card-container">';
        while ($wpQuery->have_posts()) {
            $wpQuery->the_post();
            $image = wp_get_attachment_image_src(get_post_thumbnail_id(), 'large');
            echo '<div class="card">';
            echo '<img src="' . $image[0] . '">';
            echo '<h2>' . get_the_title() . '</h2>';
            echo '<p>' . get_the_excerpt() . '</p>';
            echo '<p>' . get_the_date() . '</p>';
            echo '<a href="' . get_permalink() . '"><button>Read More</button></a>';
            echo '</div>';
        }
        echo '</div>';
        echo '</div>';
    }

    wp_reset_postdata();
}


//  ************************************************************************
//  create a custom restorant taxonomies
function create_restorant_taxonomy()
{
    $labels = array(
        'name' => _x('Cuisines', 'taxonomy general name', 'textdomain'),
        'singular_name' => _x('Cuisine', 'taxonomy singular name', 'textdomain'),
        'search_items' => __('Search Cuisines', 'textdomain'),
        'all_items' => __('All Cuisines', 'textdomain'),
        'parent_item' => __('Parent Cuisine', 'textdomain'),
        'parent_item_colon' => __('Parent Cuisine:', 'textdomain'),
        'edit_item' => __('Edit Cuisine', 'textdomain'),
        'update_item' => __('Update Cuisine', 'textdomain'),
        'add_new_item' => __('Add New Cuisine', 'textdomain'),
        'new_item_name' => __('New Cuisine Name', 'textdomain'),
        'menu_name' => __('Cuisines', 'textdomain'),
    );

    $args = array(
        'hierarchical' => true,
        'labels' => $labels,
        'show_ui' => true,
        'show_admin_column' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'cuisine'),
    );

    register_taxonomy('cuisine', array('restorant'), $args);
}

add_action('init', 'create_restorant_taxonomy', 0);


function modify_menu_items($items, $args) {
    if (is_user_logged_in()) {
        // Current user info
        $current_user = wp_get_current_user();
        $logout_url = wp_logout_url(home_url());

        // "Login" aur "Register" buttons remove karein
        foreach ($items as $key => $item) {
            if ($item->title == 'Login' || $item->title == 'Register') {
                unset($items[$key]);
            }
        }

        // "Logout" button dynamically add karein
        $logout_item = new stdClass();
        $logout_item->ID = 9999; // Unique ID (just a random high number)
        $logout_item->db_id = 9999; // Required to avoid error
        $logout_item->title = 'Logout';
        $logout_item->menu_item_parent = 0;
        $logout_item->url = $logout_url;
        $logout_item->current = false; // Avoids "Undefined property" error
        $logout_item->classes = []; // Required for WP compatibility

        $items[] = $logout_item;
    } else {
        // Agar user logged out hai, "Logout" button remove karein
        foreach ($items as $key => $item) {
            if ($item->title == 'Logout') {
                unset($items[$key]);
            }
        }
    }

    return $items;
}

// Hook karein WordPress ke menu filter ko
add_filter('wp_nav_menu_objects', 'modify_menu_items', 10, 2);


function restrict_menu_access_for_guests() {
    if (!is_user_logged_in() && !is_page('login') && !is_page('register')) {
        // Agar user logged in nahi hai aur login/register page par bhi nahi hai to redirect karein
        wp_redirect(home_url('/login'));
        exit;
    }
}
add_action('template_redirect', 'restrict_menu_access_for_guests');

