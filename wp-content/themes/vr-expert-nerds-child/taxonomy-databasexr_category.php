<?php wp_reset_postdata();
  get_header();
  $term = get_queried_object(); 
  
                $assign_xrtemplate = get_field('assign_xrbrand' , $term);
               
                 if($assign_xrtemplate[0] === "yes"){
                    get_template_part('template-xr-brands');
                 
                  }else{
                    get_template_part('template-xr-database');
  ?>

<?php  } get_footer();?>