<?php get_header();
$term = get_queried_object();
$assign_template = get_field('assign_template' , $term);

if($assign_template === "temp1"){    

    get_template_part('template-news');

 } else if($assign_template === "temp2"){

    get_template_part('template-podcast');

 }
 else if($assign_template === "temp3"){

   get_template_part('template-videos');

 }

 ?>

<?php get_footer(); ?>