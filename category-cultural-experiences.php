<?php

get_header(); //load header
?>

<div id="content"> <!-- content starting here  -->

<main> <!-- marking main content of the page (usually without side bar) -->
    <h2><?php echo get_queried_object()->name ?></h2> <!-- Display the name of the current category or taxonomy being queried -->
    <p><?php echo get_queried_object()->description ?></p> <!-- Display the description of the current category or taxonomy being queried -->

    <div id="sub-cat-box"> <!-- Container for sub-categories -->
        <?php
            $id = get_queried_object()->term_id; // Get the term ID of the queried category or taxonomy
            $type = get_queried_object()->taxonomy; // Get the taxonomy type of the queried object
            $subcats = get_term_children($id, $type); // Get the child terms of the current term
            foreach($subcats as $cat){ // Loop through each sub-category
                $cat_object = get_term_by('id', $cat, $type); // Get the term object for each sub-category
                ?>
                <section> <!-- Section for each sub-category -->
                    <h3><a href="<?php echo get_term_link($cat, $type); ?>"><?php echo $cat_object->name; ?></a></h3> <!-- Display the name of the sub-category as a link to its archive page -->
                    <p><?php echo $cat_object->description; ?></p> <!-- Display the description of the sub-category -->
                </section>
           <?php
            } // End of the sub-category loop
            ?>
        
    </div> <!-- End of sub-cat-box -->
</main> <!-- End of main content area -->

<?php

get_sidebar(); //load sidebar
?>

</div> <!-- content closing here  -->

<?php

get_footer(); //load footer
?>
