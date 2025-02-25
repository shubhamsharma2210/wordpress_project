<?php get_header(); ?>
<style>
    .buy_now_page {
        display: flex;
        /* justify-content: space-around; */
        justify-content: center;
        gap: 50px;
        align-items: center;
        margin-top: 8%;
        box-shadow: 4px 5px 5px black;

    }

    .image_page,
    .details_page,
    .price_details {
        height: 100vh;
        width: 44vh;
    }

    .image_page img {
        width: 300px;
        height: 400px;
        box-shadow: 10px 10px 20px rgba(0, 0, 0, 0.5);
        border-radius: 20px;
        margin-right: 20px;
    }

    .details_page {
        display: flex;
        flex-direction: column;
        gap: 14px;
    }

    .details_page .title {
        font-size: 23px;

    }

    .details_page .excerpt {
        font-size: 22px;
        color: gray;
        letter-spacing: 2px;


    }

    .details_page .description {
        line-height: 30px;
        letter-spacing: 2px;
        font-size: 19px;
    }

    .price_details {
        display: flex;
        justify-content: flex-start;
        flex-direction: column;
        gap: 25px;
    }

    .price_details .price {
        text-align: start;
        font-size: 35px;
        font-weight: 900;
    }

    .price_details .stock {
        font-size: 25px;
    }

    .price_details .btn {
        width: 50%;
        font-size: 18px;

        color: white;
        background-color: #00339A;
        border-radius: 10px;
        border: none;
        padding: 10px;
        text-align: center;
        cursor: pointer;
        text-transform: uppercase;
    }

    .price_details .btn:hover {
        background-color:rgb(12, 78, 230);
        transition: all ease 1s;
     
    }
</style>
<main>
    <div class="buy_now_page">
        <div class="image_page">
            <?php $img = wp_get_attachment_image_src(get_post_thumbnail_id(), 'large') ?>
            <img src="<?php echo $img[0]; ?> " />

        </div>
        <div class="details_page">
            <h3 class="title"><?php the_title(); ?></h3>
            <p class="excerpt"><?php the_excerpt(); ?></p>
            <p class="description"><?php the_content(); ?></p>
        </div>
        <div class="price_details">
            <h2 class="price">$<?php echo get_field('addtocart'); ?>/-</h2>
            <?php $rating = get_field('rating-type'); // Rating (1-5) ?>
            <p class="rating">Rating: <?php echo str_repeat('⭐', intval($rating)); ?></p>

            <h6 class="stock">Stock Available: <span>✔</span> </h6>
            <button class="btn">Add to Cart</button>
            <div class="share_product">
                <h4>Share this Product with your Friends....</h4>
            </div>
        </div>
    </div>
</main>

<?php get_footer(); ?>