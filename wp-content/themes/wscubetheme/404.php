<?php get_header(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?php bloginfo('template-directory'); ?>/style.css"/>
</head>
<body>
<div class="not_Found" style="display:flex;">
    <img src="<?php echo get_template_directory_uri(); ?> /assets/404_3.png" alt="">
    <img src="<?php echo get_template_directory_uri(); ?> /assets/404_1.png" alt="">
</div>
</body>
</html>


<?php get_footer(); ?>