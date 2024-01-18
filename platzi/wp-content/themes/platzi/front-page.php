<?php get_header(); ?>

<main class="container">

    <!-- Basic loop for the main page:-->

    <?php
if(have_posts()){
    the_post(); ?>
    <h1 class='my-3'><?php the_title(); ?>
        <?php the_content(); ?>

    </h1>

    <?php
}

?>

</main>

<?php get_footer(); ?>