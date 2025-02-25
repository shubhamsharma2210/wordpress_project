<?php
//Template Name: home
?>


<?php



get_header();


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create custom theme</title>
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?> /style.css">


</head>

<body>
    <div class="container">
        <!-- hero page -->
        <div class="hero">
            <div class="hero_title">
                <div class="hero_title_subtite">
                    <h1>LET’S
                        EXPLORE
                        <span> UN</span>IQUE
                        CLOTHES.
                    </h1>
                </div>
                <div class="hero_title_btn">
                    <p>Live for Influential and Innovative fashion!</p>
                   <a href="<?php echo get_permalink(10) ?>"> <button>shop Now</button></a>
                </div>

            </div>
            <div class="img">
                <img src="<?php bloginfo("template_directory") ?> /assets/hero_2.png " alt="">
            </div>
        </div>
        <!-- logo page -->
        <div class="logo_page">
            <img src="<?php bloginfo("template_directory") ?> /assets/logo_img1.png" alt="logo_1">
            <img src="<?php bloginfo("template_directory") ?> /assets/img_logo_2.png" alt="logo_1">
            <img src="<?php bloginfo("template_directory") ?> /assets/logo_img_3.png" alt="logo_1">
            <img src="<?php bloginfo("template_directory") ?> /assets/img_logo_2.png" alt="logo_1">
            <img src="<?php bloginfo("template_directory") ?> /assets/logo_img1.png" alt="logo_1">
            <img src="<?php bloginfo("template_directory") ?> /assets/logo_img_3.png" alt="logo_1">

        </div>

        <!-- New Arrival page -->

        <!-- Community section -->
        <section>
            <div class="community_page">
                <h2>JOIN SHOPPING COMMUNITY TO</h2>
                <h2>GET MONTHLY PROMO</h2>
                <p>Type your email down below and be young wild generation</p>
                <div class="input">
                    <input type="text" placeholder="Type your Email">
                    <button>send</button>
                </div>

            </div>
        </section>
    </div>

<!-- news section -->
<div class="news-categories">

<?php
$getBookCat = get_terms(['taxonomy' => 'book_categories']);
$getNewsCat = get_terms(['taxonomy' => 'news_category', 'hide_empty' => false, 'orderby' => 'name', 'order' => 'ASC']);

foreach ($getNewsCat as $getNewsCatData) {
    ?>
        <div class="categories">
            <a class="categories_chips" href="<?php echo (get_category_link($getNewsCatData->term_id)); ?>"><?php echo esc_html($getNewsCatData->name); ?></a>
        </div>
<?php } ?>

</div>

    <?php display_news_posts(); ?>






</body>

</html>

<?php get_footer(); ?>