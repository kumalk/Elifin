<?php

get_header(); //load header
?>

<div id="content"> <!-- content starting here  -->

<main> <!-- marking main content of the page (usually without side bar) -->

<?php
if (have_posts()) { //check is there any posts  
    while (have_posts()) { //if availabel loop through them and load each one and ech content
        the_post(); ?>   
        <article>
            <h2><?php the_title(); ?></h2>   <!-- load title of the post -->
            
            <p><?php the_content(); ?></p> <!-- load content of the post previously used :the_content() that loads full contnet , but now use the_excerpt() to short part-->
        </article>
        <?php
    }
} else {
    echo '<p>No posts found</p>';
}

?>
</main>
<?php

get_sidebar(); //load sidebar
?>

</div> <!-- content closing here  -->

<?php

get_footer(); //load footer
?>

