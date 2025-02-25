<?php
// Template Name:about


get_header();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="about_container">
        <div class="section">
            <div class="image_section">
                <img src="<?php echo get_template_directory_uri(); ?> /assets/image.png" alt="">
                <img class="second_img" src="<?php echo get_template_directory_uri(); ?> /assets/image.png" alt="">
            </div>
            <div class="title_section">
                <h2>ABOUT US</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. In tenetur sed quaerat omnis harum voluptates nostrum blanditiis nobis a nesciunt cumque quisquam cupiditate earum fugit minus deleniti delectus dolorem vero ea repudiandae, pariatur recusandae non. At culpa minus tenetur corrupti eveniet enim mollitia quis rem?</p>
                <button>Explore More</button>
            </div>
        </div>
    </div>
</body>
</html>












<?php get_footer(); ?>