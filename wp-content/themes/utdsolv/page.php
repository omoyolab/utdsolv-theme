<?php get_header(); ?>
<main>
    <div class="wrapper">
    <div class="wideblock">
                    <h1 class="headline"><?php the_title(); ?></h1>
                    <hr class="hr-rule">
                </div>
            <?php

        if (have_posts()) :
            while (have_posts()) : the_post();
           ?>

         <?php the_content(); ?>


        <?php
            endwhile;
        else :
            echo 'Post not found';
        endif;
        ?>

    </div>
</main>

<?php get_footer(); ?>