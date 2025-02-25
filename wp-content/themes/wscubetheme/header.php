 




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title(); ?></title>
    <?php wp_head(); ?>
</head>
<body>
    <div class="header_container">
       <nav>
        <?php $logoImg = get_header_image(); ?>
       <div class="img_logo">
            <a href="<?php echo site_url(); ?>"><img src="<?php echo $logoImg ?> "  alt="logo.png"/></a>
        </div>
        <div class="nav_items">
            <?php wp_nav_menu(array('theme_location'=>'header-menu')); ?>
        </div>
        <div id="loading" style="display: none;">Loading...</div>
      
            <div class="menu-icons">
            <i class="fa-solid fa-bars"> </i>
            </div>
       </nav>
        
    </div>
    <script src="https://kit.fontawesome.com/7e473e065e.js" crossorigin="anonymous"></script>
    <script src="<?php bloginfo('template_directory'); ?>../js/custom-header.js"></script>
  
</body>
</html>