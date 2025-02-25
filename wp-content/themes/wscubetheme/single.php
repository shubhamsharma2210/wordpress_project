<?php get_header();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?> /style.css">

</head>

<body>
    <div class="page-container">
        <div class="page">
            <?php $image = wp_get_attachment_image_src(get_post_thumbnail_id(), 'large'); ?>
            <img class="page-image" src="<?php echo $image[0] ?>" alt="" width="100%" height="400px">
            <h1><?php the_title(); ?></h1>
            <p class="date"><?php echo get_the_date(); ?></p>
            <p class="description"><?php the_content(); ?></p>
            <?php comments_template(); ?>

        </div>
    </div>
</body>

</html>



<?php get_footer(); ?>

<!--  single.php ek WordPress theme template file hoti hai jo individual blog post ko display karne ke liye use hoti hai. Jab koi visitor kisi single blog post ko open karta hai, toh WordPress single.php file ka use karke us post ka content show karta hai. -->