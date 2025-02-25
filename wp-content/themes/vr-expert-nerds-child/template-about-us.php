<?php
  /* template name: About us */
  get_header();
  $default_img = get_stylesheet_directory_uri().'/img/woocommerce-placeholder.png';
  wp_reset_postdata(); 
  ?>
<section class="ComanBreadcrumb">
    <div class="cst-container">
        <div class="home-icon">
            <ul class="breadcrumb">
                <?php get_breadcrumb(); ?>
            </ul>
        </div>
    </div>
</section>

<!-- top 1 -->
<?php 
    $contact_btn_txt = get_field('contact_btn_txt'); ?>

<section class="makeAbout">
    <div class="cst-container">

        <div class="max-836 midcm txt-center">
            <!-- <h1 class="HeadingH2-40-bold"></?php echo get_the_title(); ?></h1> -->
            <div class="editor-Xiv midcm Google-Buy Editor-class font-18text">
                <?php echo get_the_content(); ?>
            </div>
            <?php if($contact_btn_txt){ ?>
            <a href="#" class="knowledge-btn guide-clr" aria-label="Contact Us"><?php echo $contact_btn_txt; ?></a>
            <?php } ?>
        </div>
        <?php  $featuredurls = get_the_post_thumbnail_url(get_the_ID());
               
               $featuredurl = $featuredurls?$featuredurls:$default_img; 
                if($featuredurl){
         ?>
        <div class="aboutImg">
            <img src="<?php echo $featuredurl; ?>" class="about-img" loading="lazy" alt="About Us">
        </div>
        <?php }
        $keys_repeater = get_field('keys_repeater'); 
        if($keys_repeater){ ?>

        <div class="makeCount">
            <?php while(the_repeater_field('keys_repeater')){
                $keys_head_txt = get_sub_field('keys_head_txt');
                $keys_val_txt = get_sub_field('keys_val_txt'); ?>
            <div class="itemscount">
                <?php if($keys_head_txt){ ?>
                <h2 class="HeadingH2-70"><?php echo $keys_head_txt; ?></h2>
                <?php } if($keys_val_txt){ ?>
                <p class="HeadingH2-30-bold"><?php echo $keys_val_txt; ?></p>
                <?php } ?>
            </div>
            <?php } ?>
        </div>
        <?php } ?>

    </div>
</section>
<!-- section 2 -->
<?php $founding_image = get_field('founding_image')?get_field('founding_image'):$default_img; 
      $founding_txt = get_field('founding_txt');
      $foundingeditor = get_field('foundingeditor'); 
      if($foundingeditor || $founding_image){ ?>
<section class="makeAbout-story">
    <div class="cst-container">
        <div class="storyDiv">
            <div class="storyImg">
                <img src="<?php echo $founding_image; ?>" class="about-img" loading="lazy"
                    alt="<?php echo $founding_txt; ?>">
            </div>
            <div class="storyTxt ">
                <?php if($founding_txt){ ?>
                <h2 class="HeadingH2-30-bold"><?php echo $founding_txt; ?></h2>
                <?php } ?>
                <div class="Google-Buy Editor-class">
                    <?php echo $foundingeditor; ?>
                </div>
            </div>
        </div>
    </div>
</section>
<?php }
$section_head_txt = get_field('section_head_txt'); 
$section_textarea = get_field('section_textarea'); 
$section_image = get_field('section_image'); 
$platform_content_repeater = get_field('platform_content_repeater');
if($platform_content_repeater){ ?>
    <section class="pf-section">
        <div class="cst-container">

            <div class="w-685 midcm">
                <?php if($section_head_txt){ ?>
                <h2 class="HeadingH2-40-bold"><?php echo $section_head_txt; ?></h2>
                <?php }if($section_textarea){ ?>
                <div class="wd-649 midcm midcm Google-Buy Editor-class font-18text">
                    <?php echo $section_textarea; ?>
                </div>
            <?php } ?>
            </div>

            <div class="News-pf">
                    <?php if($section_image){ ?>
                <div class="news-itemLeft">
                    <img src="<?php echo $section_image; ?>" class="news-Q" loading="lazy" alt="About Us Story">
                </div>
                <?php } ?>
                <div class="news-itemRight">
                    <?php while(the_repeater_field('platform_content_repeater')){
                        $content_head_txt = get_sub_field('content_head_txt');
                        $content_image = get_sub_field('content_image'); 
                        $content_textarea = get_sub_field('content_textarea'); ?>
                    <!-- items 11 -->
                    <div class="itemsVerX">
                        <a href="#" class="dmlink-F">
                            <?php if($content_image){ ?>
                            <img src="<?php echo $content_image; ?>" class="news-Q" loading="lazy" alt="About Us Story">
                            <?php } if($content_head_txt){ ?>
                            <h3 class="font-18text-bold"><?php echo $content_head_txt; ?></h3>
                            <?php } if($content_textarea){ ?>
                            <p class="font-18text">
                            <?php echo $content_textarea; ?>
                            </p>
                            <?php } ?>
                        </a>
                    </div>
                    <?php } ?>
                    <!-- items 11 -->
                </div>


            </div>

        </div>
    </section>
<?php } 

$ourteam_head_txt = get_field('ourteam_head_txt'); 
$ourteam_textarea = get_field('ourteam_textarea');
$ourteam_repeater = get_field('ourteam_repeater');
if($ourteam_repeater){ ?>
<!-- team section -->

<section class="VrX-team">
    <div class="cst-container">
        <div class="width-793 midcm">
            <?php if($ourteam_head_txt){ ?>
            <h2 class="HeadingH2-40-bold"><?php echo $ourteam_head_txt; ?></h2>
            <?php } if($ourteam_textarea){ ?>
            <div class="div83 font-18text">
                <p><?php echo $ourteam_textarea; ?></p>
            </div>
            <?php } ?>
        </div>



        <div class="KmGrids-3">
            <?php while(the_repeater_field('ourteam_repeater')){ 
                $team_name = get_sub_field('team_name');
                $team_position = get_sub_field('team_position');
                $team_image = get_sub_field('team_image');
                $team_linkedin = get_sub_field('team_linkedin');
                $team_linkedin_url = get_sub_field('team_linkedin_url');
                ?>
            <div class="g-itemsTeam">
                <?php if($team_image ){ ?>
                <img src="<?php echo $team_image; ?>" class="" loading="lazy"  alt="About Us Story">
                <?php }if($team_position ||  $team_name || $team_linkedin_url ){ ?>
                <div class="team-Dsc">
                    <h2 class="font-18text-bold"><?php echo $team_name; ?></h2>
                    <h3 class="font-14text"><?php echo $team_position; ?></h3>
                    <a class="font-14text" href="<?php echo $team_linkedin_url; ?>" target="_blank" class="dmlindin">
                    <?php echo $team_linkedin; ?>
                    </a>
                </div>
                <?php } ?>
            </div>
            <?php } ?>
        </div>
    </div>
</section>
<?php } 
$lets_connect_head = get_field('lets_connect_head'); 
$lets_connect_textarea = get_field('lets_connect_textarea'); 
$privacy_text = get_field('privacy_text');
$privacy_policy = get_field('privacy_policy'); 
$privacy_policy_url = get_field('privacy_policy_url'); 
?>
<section class="about-contact">
    <div class="cst-container">

        <div class="width-628 ">
            <?php if($lets_connect_head ){ ?>
            <h2 class="HeadingH2-40-bold"><?php echo $lets_connect_head; ?></h2>
            <?php } if($lets_connect_textarea){ ?>
            <div class="font-18text">
                <?php echo $lets_connect_textarea; ?>
            </div>
            <?php } ?>
        </div>

        <div class="G-fm-750">

    <?php echo do_shortcode('[gravityform id="1" title="false" description="false" ajax="true" tabindex="49" field_values="check=First Choice,Second Choice"]'); 
      if($privacy_text){ ?>

            <div class="Fm-ststement font-18text"><?php echo $privacy_text; ?>
           <?php if($privacy_policy){ ?><a href="<?php $privacy_policy_url; ?>"
                    class="dmGrow" target="_blank" aria-label="privacy policy"><?php echo $privacy_policy; ?></a>
                    <?php } ?>
            </div><?php } ?>

        </div>


    </div>
</section>

<?php get_footer();?>