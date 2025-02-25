<?php
/*
Template Name: shopping
*/
get_header();
?>


<div class="news-categories">

    <?php

    $books = get_terms(['taxonomy' => 'books', 'hide_empty' => false, 'orderby' => 'name', 'order' => 'ASC']);

    foreach ($books as $getNewsCatData) {
    ?>
        <div class="categories">
            <a class="categories_chips" href="<?php echo (get_category_link($getNewsCatData->term_id)); ?>"><?php echo esc_html($getNewsCatData->name); ?></a>
        </div>
    <?php } ?>
</div>
<?php display_shopping_posts(); ?>


// get new category
<div class="news-categories">
    <?php
    $cuisine = get_terms(['taxonomy' => 'cuisine', 'hide_empty' => false, 'orderby' => 'name', 'order' => 'ASC']);
    foreach ($cuisine as $getCuisinData) {
    ?>
        <div class="categories">
            <a class="categories_chips" href="<?php echo (get_category_link($getCuisinData->term_id)); ?>"><?php echo esc_html($getCuisinData->name); ?></a>
        </div>
    <?php } ?>
</div>

<?php display_restorant_post_type(); ?>




<?php get_footer(); ?>