<?php get_header(); ?>

<main class="container">
    <?php if(have_posts()){
        //If I have posts available to show
        while(have_posts()){
            //While I have some content
            the_post();
            //Bring the content
            ?>

    <!--bring the featured image to the left and content to the right -->

    <h1 class='my-3'>
        <?php the_title(); ?>
    </h1>
    <div class="row">
        <div class="col-6">
            <?php 
                    //brings the featured image
                    the_post_thumbnail( 'large');
                    ?>
        </div>
        <div class="col-6">
            <?php the_content(); ?>
        </div>
    </div>

    <?php
        }
    }
    ?>
</main>

<?php get_footer(); ?>