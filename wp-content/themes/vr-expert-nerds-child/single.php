<?php 
    get_header();
    wp_reset_postdata();
    gt_set_post_view(); 
  
     
  

  $featuredurls = get_the_post_thumbnail_url();
  $default_img = get_stylesheet_directory_uri().'/img/woocommerce-placeholder.png';
  $featuredurl = $featuredurls?$featuredurls:$default_img;
   $current_id = get_the_ID();
  ?>
<section class="ComanBreadcrumb">
  <div class="cst-container">
    <div class="home-icon">
      <ul class="breadcrumb">
        <?php get_breadcrumb();
        
     ?>
       
      </ul>
    </div>
  </div>
</section>
<!-- Google requires section start -->
<section class="Artical-requires">
  <div class="cst-container">
  <div class="sideWidth">
    <div class="left-Width">
     

    
      <!-- end -->
      <!--
      <div class="callShortcode">

            <div class="width-48 lf-sec-imd">
              <img src="<?php echo $featuredurl; ?>"  alt="<?php echo get_the_title(); ?>" />  
            </div>

            <div class="width-48 rt-sec-imd">
            In 2020, Magic Leap pivoted to enterprises and away from consumers, restructuring itself and bringing a new CEO onboard. Since then, numerous eyes have been on the AR legacy company, on how this pivot would reflect its new AR headset: Magic Leap 2. The question at hand is if it would win enterprises over other premium AR headsets like Microsoft HoloLens 2.
              <p>In 2020, Magic Leap pivoted to enterprises and away from consumers, restructuring itself and bringing a new CEO onboard. Since then, numerous eyes have been on the AR legacy company, on how this pivot would reflect its new AR headset: Magic Leap 2. The question at hand is if it would win enterprises over other premium AR headsets like Microsoft HoloLens 2.</p>
              <p>When you receive your new <a href="https://vr-expert.com/ar-headsets/buy-magic-leap-2/">Magic Leap 2</a>, it is neatly tucked in a matte black interior box with all its parts subdivided into symmetric squares.</p>
            
             <div class="call-to-act">
             <a class="knowledge-btn" href="#">Magic Leap 2</a>
             </div>

            </div>
          
     

      </div>
      -->

<!-- end -->

      <div class="Artical-long">
        <div class="Article-image">
          <img src="<?php echo $featuredurl; ?>"  alt="<?php echo get_the_title(); ?>" />
        </div>
        <div class=" Artical-pd">
          <h1 class="HeadingH2-30-bold"><?php echo get_the_title(); ?>
          </h1>
          <!-- <div class="head-txtgoogle font-20text Editor-class">
            </?php echo get_the_content(); ?>
          </div> -->
        </div>
      </div>
      <!-- auth -->
      <?php 
        $get_author_gravatar = get_avatar_url(get_the_author_meta( 'ID' ), array('size' => 450))?get_avatar_url(get_the_author_meta( 'ID' ), array('size' => 450)):$default_img;
        $author_id= $post->post_author;
        $author_name = get_the_author_meta('display_name', $author_id)?get_the_author_meta('display_name', $author_id):'Mark Cowles';
        $post_bytext = get_field('post_bytext','option')?get_field('post_bytext','option'):'By';
        $published_text  = get_field('published_text','option')?get_field('published_text','option'):'Published';
        $updated_text = get_field('updated_text','option')?get_field('updated_text','option'):'Updated';
        $did_you_like_article = get_field('did_you_like_article','option')?get_field('did_you_like_article','option'):'';
          ?>
                  
      
      <div class="Author-details font-18text">
        <div class="author-txt">
          
          <div class="author-img">
            <img src="<?php echo $get_author_gravatar; ?>" alt="<?php echo $author_name; ?>" />
          </div>
          <div class="author-name font-18text">
            <span><?php echo $post_bytext; ?> </span><span class="mark-under"><?php echo $author_name; ?></span>
          </div>
        </div>
        <div class="publised-content">
          <div class="published-img pd-img">
            <svg xmlns="http://www.w3.org/2000/svg" width="22.5" height="20.769" viewBox="0 0 22.5 20.769">
              <g id="Icon_ionic-ios-calendar" data-name="Icon ionic-ios-calendar" transform="translate(-3.375 -4.5)">
                <path id="Path_5126" data-name="Path 5126" d="M23.712,6.75H21.548v1.3a.434.434,0,0,1-.433.433H20.25a.434.434,0,0,1-.433-.433V6.75H9.433v1.3A.434.434,0,0,1,9,8.481H8.135A.434.434,0,0,1,7.7,8.048V6.75H5.538A2.17,2.17,0,0,0,3.375,8.913V23.625a2.17,2.17,0,0,0,2.163,2.163H23.712a2.17,2.17,0,0,0,2.163-2.163V8.913A2.17,2.17,0,0,0,23.712,6.75Zm.433,16.226a1.085,1.085,0,0,1-1.082,1.082H6.188a1.085,1.085,0,0,1-1.082-1.082V13.24a.434.434,0,0,1,.433-.433H23.712a.434.434,0,0,1,.433.433Z" transform="translate(0 -0.519)"/>
                <path id="Path_5127" data-name="Path 5127" d="M10.731,4.933A.434.434,0,0,0,10.3,4.5H9.433A.434.434,0,0,0,9,4.933v1.3h1.731Z" transform="translate(-1.298)"/>
                <path id="Path_5128" data-name="Path 5128" d="M26.481,4.933a.434.434,0,0,0-.433-.433h-.865a.434.434,0,0,0-.433.433v1.3h1.731Z" transform="translate(-4.933)"/>
              </g>
            </svg>
          </div>
          <div class="published-date">
            <span><?php echo $published_text; ?>: <?php echo get_the_date( 'd-m-Y' ); ?></span>
          </div>
        </div>
        <div class="publised-content">
          <div class="published-img pd-img">
            <svg id="Icon_ionic-md-time" data-name="Icon ionic-md-time" xmlns="http://www.w3.org/2000/svg" width="16.91" height="16.91" viewBox="0 0 16.91 16.91">
              <path id="Path_1442" data-name="Path 1442" d="M11.822,3.375a8.455,8.455,0,1,0,8.463,8.455A8.452,8.452,0,0,0,11.822,3.375Zm.008,15.219a6.764,6.764,0,1,1,6.764-6.764A6.764,6.764,0,0,1,11.83,18.594Z" transform="translate(-3.375 -3.375)" fill="#1f1f1f"></path>
              <path id="Path_1443" data-name="Path 1443" d="M17.806,10.688H16.538v5.073l4.439,2.663.634-1.041-3.8-2.256Z" transform="translate(-8.928 -6.46)" fill="#1f1f1f"></path>
            </svg>
          </div>
          <div class="published-date">
            <span><?php echo $updated_text; ?>: <?php echo get_the_modified_date('d-m-Y'); ?> </span>
          </div>
        </div>
      </div>
      <?php 
         $facebook_url = get_field('facebook_url','option')?get_field('facebook_url','option'):'https://www.facebook.com/sharer.php?u='; 
         $facebook_image = get_field('facebook_image','option')?get_field('facebook_image','option'):'';
         $twitter_url = get_field('twitter_url','option')?get_field('twitter_url','option'):'https://twitter.com/intent/tweet?url=';
         $twitter_image = get_field('twitter_image','option')?get_field('twitter_image','option'):'';
         $email_url = 'info@example.com?&subject=&cc=&bcc=&body='; 
         $email_image = get_field('email_image','option')?get_field('email_image','option'):'';  
         $rss_image = get_field('rss_image','option')?get_field('rss_image','option'):''; 
      if(wp_is_mobile()){ ?>
         <ul class="social-media-Icons">
             <?php if($facebook_url){ ?>
         <li class="blog-share-li slinks">
          <a href="<?php echo $facebook_url;  echo urlencode(get_permalink(get_the_ID())); ?>&t=<?php echo urlencode(get_the_title()); ?>" target="_blank" class="blog-share-box">
            <img src="<?php echo $facebook_image; ?>" alt="<?php echo get_the_title(); ?>"/>
          </a>
 
         </li>
        <?php } if($twitter_url){
			?>
         <li class="blog-share-li">
          <a href="<?php echo $twitter_url; echo urlencode(get_permalink(get_the_ID())); ?>&text=<?php echo urlencode(get_the_title()); ?>" target="_blank" class="blog-share-box">
                 <img src="<?php echo $twitter_image; ?>" alt="<?php echo get_the_title(); ?>"/>
            </a>
         </li>
         <?php } if($email_url){ ?>
         <li class="blog-share-li">
            <a href="mailto:<?php echo $email_url; echo urlencode(get_permalink(get_the_ID())); ?>"  class="blog-share-box">
               <img src="<?php echo $email_image; ?>" alt="<?php echo get_the_title(); ?>"/>
            </a>
        </li>
         <?php }if($rss_image){ ?>
            <li class="blog-share-li">


           

            <div class="copy-text">
		<input type="text" class="text" type="hidden" value="<?php echo get_the_permalink(get_the_ID()); ?>"/>
       
		<button data-tooltip="Copied wert krt"><img src="<?php echo $rss_image; ?>" alt="<?php echo get_the_title(); ?>"/></button>
	</div>

        </li>
        <?php } ?>
      </ul>
      <?php }else{ ?> 
      <ul class="social-media-Icons">
       <?php if($facebook_url){ ?>
        <li class="blog-share-li">
            <a href="javascript:void(0);" target="popup" onclick="window.open('<?php echo $facebook_url;  echo urlencode(get_permalink(get_the_ID())); ?>&t=<?php echo urlencode(get_the_title()); ?>','name',`top=${(screen.height - 540)/2}, left=${(screen.width - 540)/2}, width=600, 
            height=500`);" class="blog-share-box">
                <img src="<?php echo $facebook_image; ?>" alt="<?php echo get_the_title(); ?>"/>
            </a>
  
        </li>
        <?php } if($twitter_url){
			?>
         <li class="blog-share-li">
            <a href="javascript:void(0);" target="popup" onclick="window.open('<?php echo $twitter_url; echo urlencode(get_permalink(get_the_ID())); ?>&text=<?php echo urlencode(get_the_title()); ?>','name',`top=${(screen.height - 540)/2}, left=${(screen.width - 540)/2}, width=600, 
            height=500`);" class="blog-share-box">
                 <img src="<?php echo $twitter_image; ?>" alt="<?php echo get_the_title(); ?>"/>
            </a>
         </li>
         <?php } if($email_url){ ?>
         <li class="blog-share-li">
            <a href="mailto:<?php echo $email_url; echo urlencode(get_permalink(get_the_ID())); ?>"  class="blog-share-box">
               <img src="<?php echo $email_image; ?>" alt="<?php echo get_the_title(); ?>"/>
            </a>
        </li>
        <?php }if($rss_image){
          $copied_tooltip = get_field('copied_tooltip','option')?get_field('copied_tooltip','option'):"Copied"; ?>
            <li class="blog-share-li">

        

            <div class="copy-text">
		<input type="text" class="text" type="hidden" value="<?php echo get_the_permalink(get_the_ID()); ?>"    />
		<button data-tooltip="<?php echo $copied_tooltip; ?>"><img src="<?php echo $rss_image; ?>" alt="<?php echo get_the_title(); ?>"/></button>
	</div>

            
            
            
        </li>
        <?php } ?>
      </ul>
      <?php } 
      $table_of_content_heading = get_field('table_of_content_heading','option')?get_field('table_of_content_heading','option'):'';
      $assign_posts_in_table_of_content = get_field('assign_posts_in_table_of_content');   
     
      ?>
    
      <div class="Google-Buy Editor-class" id="G-buy">
      
       <?php echo the_content();  ?>
      </div>
    
      <!-- Txt 3 -->
      <div class="LikeDislike">
        <h4 class="font-20Medium"><?php echo $did_you_like_article; ?></h4>
        <div class="likeit">
          <?php 
                   $like_datas= get_post_meta(get_the_ID(),'post_cstlike',true);
                   
                  $dislike_datas=  get_post_meta(get_the_ID(),'post_cstdislike',true);
                  if($like_datas){
                  $get_like_counts = count($like_datas) ;
                  
                  }else{
                     $get_like_counts = 0 ;
                  }
                  if($dislike_datas){
                  $get_dislike_counts = count($dislike_datas) ;
                 
                  }else{
                     $get_dislike_counts = 0 ;
                  }
                ?>
          <input type="hidden" value="<?php echo get_the_user_ip(); ?>" id="curnt_userid"/>	

          <ul>
            <li>
              <a href="javascript:void(0)" onclick="postlike_fetch('<?php echo  get_the_ID(); ?>')" value="<?php echo get_the_ID(); ?>" id="posts_id">
                <svg xmlns="http://www.w3.org/2000/svg" width="35.007" height="35.517" viewBox="0 0 35.007 35.517">
                  <g id="Icon_feather-thumbs-up" data-name="Icon feather-thumbs-up" transform="translate(1.5 1.5)">
                    <path id="Icon_feather-thumbs-up-2" data-name="Icon feather-thumbs-up" d="M22.51,14.381v-6.5A4.877,4.877,0,0,0,17.632,3l-6.5,14.632V35.516H29.468a3.252,3.252,0,0,0,3.252-2.764L34.963,18.12a3.252,3.252,0,0,0-3.252-3.739ZM11.129,35.516H6.252A3.252,3.252,0,0,1,3,32.264V20.884a3.252,3.252,0,0,1,3.252-3.252h4.877" transform="translate(-3 -3)" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="3"/>
                  </g>
                </svg>
              </a>
              <div class="flexyes">
               <?php $yes_field = get_sub_field('yes_field', 'option')?get_sub_field('yes_field','option'):"Yes"; 
               if($yes_field){?>
                <span class="YesK font-20text"><?php echo $yes_field;?></span>
                <?php }?>
                <span class="LikeNo font-20Medium likes<?php echo  get_the_ID(); ?>"><?php echo $get_like_counts; ?></span>
              </div>
            </li>
            <li>
              <a href="javascript:void(0)" onclick="postdislike_fetch('<?php echo get_the_ID(); ?>')" value="<?php echo get_the_ID(); ?>" id="posts_ids">
                <svg xmlns="http://www.w3.org/2000/svg" width="33.527" height="34.143" viewBox="0 0 33.527 34.143">
                  <g id="Icon_feather-thumbs-down" data-name="Icon feather-thumbs-down" transform="translate(1.507 1.501)">
                    <path id="Icon_feather-thumbs-down-2" data-name="Icon feather-thumbs-down" d="M15.389,23.242V29.47a4.662,4.662,0,0,0,4.652,4.671l6.2-14.014V3H8.752a3.105,3.105,0,0,0-3.1,2.647L3.511,19.661a3.11,3.11,0,0,0,3.1,3.581ZM26.243,3h4.14A3.587,3.587,0,0,1,34,6.114v10.9a3.587,3.587,0,0,1-3.613,3.114h-4.14" transform="translate(-3.476 -2.999)" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="3"/>
                  </g>
                </svg>
              </a>
              <div class="flexyes">
              <?php $no_field = get_sub_field('no_field', 'option')?get_sub_field('no_field','option'):"No"; 
               if($yes_field){?>
                <span class="YesK font-20text"><?php echo $no_field;?></span>
                <?php }?>
                <span class="LikeNo font-20Medium dislikes<?php echo get_the_ID();?>"><?php echo $get_dislike_counts; ?></span>
              </div>
            </li>
          </ul>
        </div>

        <!-- Prachi COde -->
          <?php  $user_description = get_the_author_meta( 'user_description',   $author_id );
               $written_by = get_field('written_by','option')?get_field('written_by','option'):'Written By';
               $the_latest_articles_from = get_field('the_latest_articles_from','option')?get_field('the_latest_articles_from','option'):'The latest articles from'; 
               
               $argms = array(
                  'author'        =>  $author_id,
                  'orderby'       =>  'post_date',
                  'order'         =>  'desc',
                  'post__not_in'  => array(get_the_ID()),
                  'posts_per_page' => 3
                  ); 
                
                  $the_query = new WP_Query( $argms );
                  $get_author_gravatar = get_avatar_url(get_the_author_meta( 'ID' ), array('size' => 450))?get_avatar_url(get_the_author_meta( 'ID' ), array('size' => 450)):$default_img; ?>
               <div class="Writtenbymark">
                  <div class="Writtenbymark-img">
                    
                     <img src="<?php echo $get_author_gravatar;  ?>" alt="<?php echo $author_name; ?>" />
                    
                  </div>
                  <div class="Writtenbymark-content">
                     <h3 class="HeadingH3-25-bold"><?php echo $written_by.' '.$author_name; ?></h3>
                     <p class="font-18text"><?php echo $user_description; ?></p>
                     <div class="table-contentlist">
                        <h2 class="font-20Medium "><?php echo $the_latest_articles_from.' '.$author_name; ?>:</h2>
                        <ul class="font-18text table-content-Questions">
                           <?php if($the_query->have_posts()){
                              while($the_query->have_posts()){ $the_query->the_post(); ?>
                           <li><a href="<?php echo get_the_permalink($current_user_posts->ID); ?>"> <?php echo get_the_title($current_user_posts->ID); ?></a></li>
                           <?php } } ?>
                    
                           
                        </ul>
                     </div>
                     <div class="wrap-iconbtn">
                        <div class="news-buttons">
                           <?php $cat_news= get_the_category( get_the_ID() );
                                 $count = 0;
                               foreach($cat_news as $cd){
                                 if($count<=2){  ?>
                              <div class="newsbtn">
                                 <a href="<?php echo get_category_link($cd->term_id); ?>" class="font-16text"><?php echo $cd->cat_name; ?></a>
                              </div>
                              <?php $count++; } } ?>
                          
                        </div>
                        <?php if(get_field('social_media_icons_repeater','option')){ ?>
                        <div class="writtenIcons">
                           <?php while(the_repeater_field('social_media_icons_repeater','option')){
                                 $social_media_icons_image = get_sub_field('social_media_icons_image','option')?get_sub_field('social_media_icons_image','option'):$default_img;
                                 $social_media_urls = get_sub_field('social_media_urls','option')?get_sub_field('social_media_urls','option'):''; ?>
                                 <a href="<?php echo $social_media_urls; ?>" target="_blank"><img src="<?php echo $social_media_icons_image; ?>" alt="slx" /></a>
                           <?php } ?>
                           <?php 
                           $facebook_url = get_field('facebook_url','option')?get_field('facebook_url','option'):'https://www.facebook.com/sharer.php?u='; 
                           $facebook_image = get_field('facebook_image','option')?get_field('facebook_image','option'):'';
                           $twitter_url = get_field('twitter_url','option')?get_field('twitter_url','option'):'https://twitter.com/intent/tweet?url=';
                           $twitter_image = get_field('twitter_image','option')?get_field('twitter_image','option'):'';
                           $email_url = 'info@example.com?&subject=&cc=&bcc=&body='; 
                           $email_image = get_field('email_image','option')?get_field('email_image','option'):'';  
                           $rss_image = get_field('rss_image','option')?get_field('rss_image','option'):''; 
                          if(wp_is_mobile()){ ?>
                           
                               <?php if($facebook_url){ ?>
                           
                            <a href="<?php echo $facebook_url;  echo urlencode(get_permalink(get_the_ID())); ?>&t=<?php echo urlencode(get_the_title()); ?>" target="_blank" class="blog-share-box">
                              <img src="<?php echo $facebook_image; ?>" alt="<?php echo get_the_title(); ?>"/>
                            </a>
                   
                           
                          <?php } if($twitter_url){
                           ?>
                        
                            <a href="<?php echo $twitter_url; echo urlencode(get_permalink(get_the_ID())); ?>&text=<?php echo urlencode(get_the_title()); ?>" target="_blank" class="blog-share-box">
                                   <img src="<?php echo $twitter_image; ?>" alt="<?php echo get_the_title(); ?>"/>
                              </a>
                           
                           <?php } if($email_url){ ?>
                           
                              <a href="mailto:<?php echo $email_url; echo urlencode(get_permalink(get_the_ID())); ?>"  class="blog-share-box">
                                 <img src="<?php echo $email_image; ?>" alt="<?php echo get_the_title(); ?>"/>
                              </a>
                         
                           <?php }if($rss_image){ ?>                           
                           <div class="copy-text">
                              <input type="text" class="text" type="hidden" value="<?php echo get_the_permalink($current_id); ?>"/>
                              
                              <button data-tooltip="Copied wert krt"><img src="<?php echo $rss_image; ?>" alt="<?php echo get_the_title(); ?>"/></button>
                           </div>
                          <?php } ?>
                       
                        <?php }else{ ?> 
                        
                         <?php if($facebook_url){ ?>
                         
                              <a href="javascript:void(0);" target="popup" onclick="window.open('<?php echo $facebook_url;  echo urlencode(get_permalink(get_the_ID())); ?>&t=<?php echo urlencode(get_the_title()); ?>','name',`top=${(screen.height - 540)/2}, left=${(screen.width - 540)/2}, width=600, 
                              height=500`);" class="blog-share-box">
                                  <img src="<?php echo $facebook_image; ?>" alt="<?php echo get_the_title(); ?>"/>
                              </a>
                    
                      
                          <?php } if($twitter_url){
                           ?>
                        
                              <a href="javascript:void(0);" target="popup" onclick="window.open('<?php echo $twitter_url; echo urlencode(get_permalink(get_the_ID())); ?>&text=<?php echo urlencode(get_the_title()); ?>','name',`top=${(screen.height - 540)/2}, left=${(screen.width - 540)/2}, width=600, 
                              height=500`);" class="blog-share-box">
                                   <img src="<?php echo $twitter_image; ?>" alt="<?php echo get_the_title(); ?>"/>
                              </a>
                         
                           <?php } if($email_url){ ?>
                           
                              <a href="mailto:<?php echo $email_url; echo urlencode(get_permalink(get_the_ID())); ?>"  class="blog-share-box">
                                 <img src="<?php echo $email_image; ?>" alt="<?php echo get_the_title(); ?>"/>
                              </a>
                          
                          <?php }if($rss_image){
                            $copied_tooltip = get_field('copied_tooltip','option')?get_field('copied_tooltip','option'):"Copied"; ?>
                              <div class="copy-text">
                                 <input type="text" class="text" type="hidden" value="<?php echo get_the_permalink(get_the_ID()); ?>"    />
                                 <button data-tooltip="<?php echo $copied_tooltip; ?>"><img src="<?php echo $rss_image; ?>" alt="<?php echo get_the_title(); ?>"/></button>
                              </div>
                          <?php } ?>
                        </ul>
                        <?php } 
                        ?>
                        </div>
                        <?php } ?>
                     </div>
                  </div>
               </div>
               <?php wp_reset_postdata(); $related_article = get_field('related_article', 'option')?get_field('related_article', 'option'):'Related Articles';
               $assign_article = get_field('assign_article');
               if($assign_article){
               ?>
               <!-- Related Articles -->
               <div class="Related-articles single-Rl">
                  <h2 class="HeadingH3-25-bold"><?php echo $related_article; ?></h2>
                  <div class="newsItems">
                     <?php foreach($assign_article as $asn_article_id){
                        $assign_article_thumbnails = get_the_post_thumbnail_url($asn_article_id);
                        $default_img = get_stylesheet_directory_uri().'/img/woocommerce-placeholder.png';
                         $assign_article_thumbnails = $assign_article_thumbnails?$assign_article_thumbnails:$default_img; ?>
                     <div class="News-Allcards">
                       
                        <div class="newscards-img">
                        <a href="<?php echo get_the_permalink($asn_article_id->ID); ?>">
                           <img src="<?php echo $assign_article_thumbnails; ?>"  alt="<?php echo get_the_title($asn_article_id);  ?>"/>
                        </a>
                        </div>
                        
                        <div class="nwcard-content">
                           <div class="news-buttons">
                             <?php $cat_news= get_the_category( $asn_article_id->ID );
                              $count = 0;
                               foreach($cat_news as $cd){ 
                                 if($count<=2){ ?>
                              <div class="newsbtn">
                                 <a href="<?php echo get_category_link($cd->term_id); ?>" class="font-16text"><?php echo $cd->cat_name; ?></a>
                              </div>
                              <?php $count++; } } ?>
                              
                           </div>
                           <a href="<?php echo get_the_permalink($asn_article_id->ID); ?>">
                           <p class=" font-20text">
                             <?php echo get_the_title($asn_article_id);  ?>
                           </p>
                           <ul class="font-16tex">
                              <li>
                                 <svg id="Icon_ionic-md-time" data-name="Icon ionic-md-time" xmlns="http://www.w3.org/2000/svg" width="16.91" height="16.91" viewBox="0 0 16.91 16.91">
                                    <path id="Path_1442" data-name="Path 1442" d="M11.822,3.375a8.455,8.455,0,1,0,8.463,8.455A8.452,8.452,0,0,0,11.822,3.375Zm.008,15.219a6.764,6.764,0,1,1,6.764-6.764A6.764,6.764,0,0,1,11.83,18.594Z" transform="translate(-3.375 -3.375)" fill="#1f1f1f" />
                                    <path id="Path_1443" data-name="Path 1443" d="M17.806,10.688H16.538v5.073l4.439,2.663.634-1.041-3.8-2.256Z" transform="translate(-8.928 -6.46)" fill="#1f1f1f" />
                                 </svg>
                                 <span class="cst-postime"><?php $date = get_the_date( get_option('date_format'), $asn_article_id->ID);
                                            
                                            echo $date; ?>
                                 </span>
                              </li>
                              <li>
                                 <svg xmlns="http://www.w3.org/2000/svg" width="19.45" height="15.128" viewBox="0 0 19.45 15.128">
                                    <path id="Icon_awesome-comments" data-name="Icon awesome-comments" d="M14.047,7.653c0-2.985-3.144-5.4-7.023-5.4S0,4.668,0,7.653a4.581,4.581,0,0,0,1.283,3.107A7.6,7.6,0,0,1,.074,12.6a.268.268,0,0,0-.051.294.264.264,0,0,0,.246.162,5.945,5.945,0,0,0,3-.844,8.592,8.592,0,0,0,3.758.844C10.9,13.055,14.047,10.638,14.047,7.653Zm4.12,7.429a4.575,4.575,0,0,0,1.283-3.107c0-2.259-1.807-4.194-4.366-5a5.018,5.018,0,0,1,.044.679c0,3.576-3.637,6.483-8.1,6.483a10.124,10.124,0,0,1-1.07-.064,7.3,7.3,0,0,0,6.473,3.306,8.545,8.545,0,0,0,3.758-.844,5.945,5.945,0,0,0,3,.844.266.266,0,0,0,.246-.162.271.271,0,0,0-.051-.294A7.519,7.519,0,0,1,18.167,15.081Z" transform="translate(0 -2.25)" />
                                 </svg>
                                 <?php  $comment_text = get_sub_field('comment_text', 'option')?get_sub_field('comment_text','option'):"comment"; 
                                        $comments_sec_text = get_sub_field('comments_sec_text','option')?get_sub_field('comments_sec_text','option'):"comments"; 
                                        $article_comment = get_comments_number( $asn_article_id ); ?>
                                 <span><?php if($article_comment>0){ echo $article_comment; }else{ echo '0'; }  echo '&nbsp'; if($article_comment<2){ echo $comment_text; }else{ echo $comments_sec_text; } ?></span>
                              </li>
                           </ul>
                           </a>
                        </div>
                     </div>
                     <?php } ?>
                     <!-- items -->
                     
                  </div>
               </div>
               <?php }else{ wp_reset_postdata();
                //   $post_per_page = get_field('posts_per_page','option') ? get_field('posts_per_page','option') : 3 ;
                   $args = array(  
                           'post_type' => 'post',
                           'post_status' => 'publish',
                           'orderby' => 'date', 
                           'order' => 'desc',
                           'post__not_in'  => array(get_the_ID()),
                           'paged' => $paged,
                           'posts_per_page' => 3 , 
                        );
                        
                        $loop = new WP_Query( $args );
                        if($loop->have_posts()){
                          
                        ?>
                  <div class="Related-articles single-Rl">
                  <h2 class="HeadingH3-25-bold"><?php echo $related_article; ?></h2>
                  <div class="newsItems">
                     <?php while($loop->have_posts()){ $loop->the_post(); 
                      $asn_article_id = $loop->ID;
                      $assign_article_thumbnails = get_the_post_thumbnail_url($asn_article_id);
                      $default_img = get_stylesheet_directory_uri().'/img/woocommerce-placeholder.png';
                       $assign_article_thumbnails = $assign_article_thumbnails?$assign_article_thumbnails:$default_img;
                        ?>
                     <div class="News-Allcards">
                     
                        <div class="newscards-img">
                        <a href="<?php echo get_the_permalink($asn_article_id->ID); ?>">
                           <img src="<?php echo $assign_article_thumbnails; ?>" <?php echo get_the_title($asn_article_id);  ?> />
                           </a>
                        </div>
                    
                        <div class="nwcard-content">
                           <div class="news-buttons">
                             <?php $cat_news= get_the_category( $asn_article_id );
                             $count = 0;
                               foreach($cat_news as $cd){ 
                                 if($count<=2){ ?>
                              <div class="newsbtn">
                                 <a href="<?php echo get_category_link($cd->term_id); ?>" class="font-16text"><?php echo $cd->cat_name; ?></a>
                              </div>
                              <?php $count++; }} ?>
                              
                           </div>
                           <a href="<?php echo get_the_permalink($asn_article_id); ?>">
                           <p class=" font-20text">
                             <?php echo get_the_title($asn_article_id);  ?>
                           </p>
                           <ul class="font-16tex">
                              <li>
                                 <svg id="Icon_ionic-md-time" data-name="Icon ionic-md-time" xmlns="http://www.w3.org/2000/svg" width="16.91" height="16.91" viewBox="0 0 16.91 16.91">
                                    <path id="Path_1442" data-name="Path 1442" d="M11.822,3.375a8.455,8.455,0,1,0,8.463,8.455A8.452,8.452,0,0,0,11.822,3.375Zm.008,15.219a6.764,6.764,0,1,1,6.764-6.764A6.764,6.764,0,0,1,11.83,18.594Z" transform="translate(-3.375 -3.375)" fill="#1f1f1f" />
                                    <path id="Path_1443" data-name="Path 1443" d="M17.806,10.688H16.538v5.073l4.439,2.663.634-1.041-3.8-2.256Z" transform="translate(-8.928 -6.46)" fill="#1f1f1f" />
                                 </svg>
                                 <span><?php $date = get_the_date( get_option('date_format'), $asn_article_id);
                                            
                                            echo $date; ?>
                                 </span>
                              </li>
                              <li>
                                 <svg xmlns="http://www.w3.org/2000/svg" width="19.45" height="15.128" viewBox="0 0 19.45 15.128">
                                    <path id="Icon_awesome-comments" data-name="Icon awesome-comments" d="M14.047,7.653c0-2.985-3.144-5.4-7.023-5.4S0,4.668,0,7.653a4.581,4.581,0,0,0,1.283,3.107A7.6,7.6,0,0,1,.074,12.6a.268.268,0,0,0-.051.294.264.264,0,0,0,.246.162,5.945,5.945,0,0,0,3-.844,8.592,8.592,0,0,0,3.758.844C10.9,13.055,14.047,10.638,14.047,7.653Zm4.12,7.429a4.575,4.575,0,0,0,1.283-3.107c0-2.259-1.807-4.194-4.366-5a5.018,5.018,0,0,1,.044.679c0,3.576-3.637,6.483-8.1,6.483a10.124,10.124,0,0,1-1.07-.064,7.3,7.3,0,0,0,6.473,3.306,8.545,8.545,0,0,0,3.758-.844,5.945,5.945,0,0,0,3,.844.266.266,0,0,0,.246-.162.271.271,0,0,0-.051-.294A7.519,7.519,0,0,1,18.167,15.081Z" transform="translate(0 -2.25)" />
                                 </svg>
                                 <?php  $comment_text = get_field('comment_text', 'option')?get_field('comment_text','option'):"comment"; 
                                        $comments_sec_text = get_field('comments_sec_text','option')?get_field('comments_sec_text','option'):"comments"; ?>
                                 <span><?php echo $article_comment = $loop->comment_count; echo '&nbsp'; if($article_comment<2){ echo $comment_text; }else{ echo $comments_sec_text; } ?></span>
                              </li>
                           </ul>
                           </a>
                        </div>
                     </div>
                     <?php } ?>
                     <!-- items -->
                     
                  </div>
               </div>
               <?php } } wp_reset_postdata(); ?>
               <!--  -->
               <div class="Leave-comment">
               <?php $loop = get_post(get_the_ID()); if($loop->comment_count){
                  $comment_text = get_field('comment_text', 'option')?get_field('comment_text','option'):"comment"; 
                  $comments_sec_text = get_field('comments_sec_text','option')?get_field('comments_sec_text','option'):"comments";
                  $sort_by_filter_heading = get_field('sort_by_filter_heading','option')?get_field('sort_by_filter_heading','option'):'Sort by';
                  $most_popular = get_field('most_popular','option');
                  $newest_heading = get_field('newest_heading','option');
                  $oldest_heading = get_field('oldest_heading','option');
                  $leave_comment = get_field('leave_comment','option')?get_field('leave_comment','option'):'Leave a comment';
                 if(!is_user_logged_in()){  ?>
                  <div class="leaveartical">
                    
                     <h2 class="HeadingH3-25-bold"><?php echo  $leave_comment; ?></h2>
                     
                     <p class="font-18text"><span><?php echo $article_comment = $loop->comment_count; echo '&nbsp'; if($article_comment<2){ echo $comment_text; }else{ echo $comments_sec_text; } ?></span></p>
                  </div>
                  <?php } ?>
                  <div class="articalmenu">
                     <div class="popular-leftmenu">
                        <span class="font-18text"><?php echo $sort_by_filter_heading; ?></span>
                        <div class="select-dropdown">
                           <button href="#" role="button" data-value="" class="select-dropdown__button">
                              <span><?php echo $most_popular; ?></span>
                              <svg xmlns="http://www.w3.org/2000/svg" width="23" height="9" viewBox="0 0 23 9">
                                 <text id="_" data-name=">" transform="translate(23) rotate(90)" fill="#000" font-size="16" font-family="Poppins-Regular, Poppins">
                                    <tspan x="0" y="17">&gt;</tspan>
                                 </text>
                              </svg>
                           </button>
                           <ul class="select-dropdown__list comment_sort">
                              <li data-value="mostpopular" class="select-dropdown__list-item active"><?php echo $most_popular; ?></li>
                              <li data-value="newest" class="select-dropdown__list-item"><?php echo $newest_heading; ?></li>
                              <li data-value="oldest" class="select-dropdown__list-item"><?php echo $oldest_heading; ?></li>
                           </ul>
                           <input type="hidden" id ="sortBy" data-id="<?php echo get_the_ID();  ?>" value="mostpopular"/>
                           
                        </div>
                     </div>
                  </div>
                  <?php } ?>
               </div>
               <div class="Artical-devider"></div>
               <div class="loginsec">
                  <?php if(!is_user_logged_in()){ ?>
                  <ul>
                     <?php $login = get_field('login','option') ? get_field('login','option') : 'Log in' ; ?>
                     <li class="font-18text"><span><a href="<?php echo home_url().'/account'; ?>"> <?php echo $login; ?></a></span></li>
                     <li class="pd-lf-rt"><span>|</span></li>
                     <?php $sign_up = get_field('sign_up','option') ? get_field('sign_up','option') : 'Sign Up' ; ?>
                     <li class="font-18text"><span><a href="<?php echo home_url().'/account'; ?>"><?php echo $sign_up; ?></a></span></li>
                  </ul>
                  <?php } ?>
                  <div class="Art-comment">
                  <div id="filter_comment" >
                     <?php
                           comments_template();
                           $paged = $_SESSION["favcolor"];
                           
                           
                     ?>
                     <input type="hidden" id ="paged" value="<?php echo $paged;  ?>"/>
                 </div>
                 <!-- </?php $show_more_field = get_field("show_more_field",'option')? get_field("show_more_field",'option'):'Show More Comments';?> -->
                 <!-- <div class="PageBtn">

                     <a href="javascript:void(0)" class="knowledge-btn guide-clr" onclick="show_more_commnets()" ></?php echo $show_more_field; ?></a>
                 </div> -->
                </div>
                

               </div>
                    

          <!-- Prachi COde -->
      </div>
      
    </div>
    <!-- side bar start -->
    <div class="sideXbar">
      <?php dynamic_sidebar('newpage-sidebar'); 
  ?>
    </div>
    <!-- side bar end -->
    
  </div>
</section>

<script>
   /* clickboard js */
   let copyText = document.querySelector(".copy-text");
   copyText.querySelector("button").addEventListener("click", function () {
   let input = copyText.querySelector("input.text");
   input.select();
   document.execCommand("copy");
   copyText.classList.add("active");
   window.getSelection().removeAllRanges();
   setTimeout(function () {
   copyText.classList.remove("active");
   }, 2500);
   });

   let copyTexts = document.querySelector(".writtenIcons .copy-text");
   copyTexts.querySelector(".writtenIcons button").addEventListener("click", function () {
   let input = copyTexts.querySelector(".writtenIcons input.text");
   input.select();
   document.execCommand("copy");
   copyTexts.classList.add("active");
   window.getSelection().removeAllRanges();
   setTimeout(function () {
   copyTexts.classList.remove("active");
   }, 2500);
   });
</script>
<!-- guide section start -->
<?php  get_footer();?>