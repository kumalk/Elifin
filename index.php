<?php

get_header(); //load header

if (have_posts()) { //check is there any posts  
    while (have_posts()) { //if availabel loop through them and load each one and ech content
        the_post(); ?>   
        <h2><?php the_title(); ?></h2>   <!-- load title of the post -->
        <p><?php echo get_the_date() ?> | <?php echo get_the_category_list(" ,") ?></p>  <!-- load and print date and category , we can use the_date() but some times issues so use this one. Also can use the_category() but the are load like point list lie by line, so use this get_category_list() and echo it to print them inline  -->
        <p><?php the_content(); ?></p> <!-- load content of the post -->
        <?php
    }
} else {
    echo '<p>No posts found</p>';
}

get_sidebar(); //load sidebar

get_footer(); //load footer
?>


<?php /*
if(have_posts()){
    while(have_posts()){
        
    }

}else{


}*/

?>