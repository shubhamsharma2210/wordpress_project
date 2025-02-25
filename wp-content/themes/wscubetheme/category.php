<?php get_header(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Card Design</title>
    <!-- <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?> /style.css"> -->


</head>

<body>
    <h1 class="blog_title">Blog List</h1>
    <hr>
    <div>
        <div class="card-container">
            <?php while (have_posts()) {
                the_post();
                $image = wp_get_attachment_image_src(get_post_thumbnail_id(), 'large');
            ?>
                <div class="card">
                    <img src="<?php echo $image[0] ?>">
                    <h2><?php the_title(); ?></h2>
                    <p><?php the_excerpt(); ?></p>
                    <p><?php the_date() ?></p>
                    <a href="<?php the_permalink(); ?>"><button>Read More</button></a>
                </div>
            <?php } ?>


        </div>
        <!-- this is a paginary plugin -->
        <div style="text-align: center; margin-bottom: 10px;"><?php echo wp_pagenavi(); ?></div>
    </div>

</body>

</html>
<?php get_footer(); ?>