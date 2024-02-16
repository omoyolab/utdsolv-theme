<?php get_header(); ?>
<main>
    <div class="wrapper">
        <div class="page-section">
            <h4 class="page-section__title">Search Results</h4>
            <div class="featured-projects">
                <div class="row row--gutters">
                    <?php
                    if (have_posts()) :
                        while (have_posts()) : the_post();
                    ?>
                            <div class="row__large-33">
                                <div class="featured-projects-box">
                                    <h5 class="featured-projects-box__header"><?php the_title(); ?></h5>
                                    <p class="featured-projects-box__text"><?php echo wp_trim_words(get_the_excerpt(), 45); ?></p>
                                    <a href="<?php the_permalink(); ?>" class="btn btn-sm btn-orange">Read More</a>
                                </div>
                            </div>
                    <?php
                        endwhile;
                    else :
                        echo 'No projects found';
                    endif;
                    ?>
                </div>
            </div>
        </div>
    </div>
</main>
<?php get_footer(); ?>
