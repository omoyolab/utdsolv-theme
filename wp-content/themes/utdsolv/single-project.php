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
        
            <div class="featured-projects-box">             
                <div class="featured-projects-box__content">
                    <h3 class="headline headline--center">Project Description</h3>
                    <?php the_content(); ?>
                </div>

                <div class="featured-projects-box__info bg-gray-secondary">
                <h3 class="headline headline--small">Project Details</h3>
                <ul>
                            <li>
                                Summary
                                <ul>
                                    <li><?php echo get_field('project_summary'); ?></li>
                                </ul>
                            </li>
                            <li>
                                Sponsor
                                <ul>
                                    <li><?php echo get_field('project_sponsor_name'); ?></li>
                                </ul>
                            </li>
                            <li>
                                Semester
                                <ul>
                                    <li><?php echo get_field('project_semester'); ?></li>
                                </ul>
                            </li>
                            <li>
                                Academic Area
                                <ul>
                                    <li><?php echo get_field('project_academic_area'); ?></li>
                                </ul>
                            </li>
                        </ul>
                <p class="featured-projects-box__category"><?php echo get_field('project_industry'); ?></p>
               </div>
            </div>

<?php
    endwhile;
else :
    echo 'No project found';
endif;
?>

    </div>
</main>

<?php get_footer(); ?>