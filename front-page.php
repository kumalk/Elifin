<?php

get_header(); //load header
?>

<div id="content"> <!-- content starting here  -->

<main> <!-- marking main content of the page (usually without side bar) -->
<div id="home-content-box">
<?php

$the_query=new WP_Query(array(
    'category_name'=>'Cultural Experiences',
    'orderby'=>'date',
    'order'=>'desc',
    'posts_per_page'=>'3'
));

if ($the_query->have_posts()) { //check is there any posts  
    while ($the_query->have_posts()) { //if availabel loop through them and load each one and ech content
        $the_query->the_post(); ?>   
        <div class="home-content">
            <h2><?php the_title(); ?></h2>   <!-- load title of the post -->
            <p class="date-category"><?php echo get_the_date() ?> | <?php echo get_the_category_list(" ,") ?></p>  <!-- load and print date and category , we can use the_date() but some times issues so use this one. Also can use the_category() but the are load like point list lie by line, so use this get_category_list() and echo it to print them inline  -->
            <p><?php the_content(); ?></p> <!-- load content of the post previously used :the_content() that loads full contnet , but now use the_excerpt() to short part-->
        </div>
        <?php
    }
} else {
    echo '<p>No posts found</p>';
}

?>
</div> <!-- home-content-box -->
</main>
<?php

get_sidebar(); //load sidebar
?>

</div> <!-- content closing here  -->

<?php

get_footer(); //load footer
?>

