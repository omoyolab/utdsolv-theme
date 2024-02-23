<?php get_header(); ?>

<!-- Hero Images -->
<div class="hero">
            <picture class="hero__image">
                <source
                    srcset="<?php echo get_template_directory_uri(); ?>/assets/images/utdsolv-hero-large.jpg 1920w"
                    media="(min-width: 1380px)">
                <source
                    srcset="<?php echo get_template_directory_uri(); ?>/assets/images/utdsolv-hero-medium.jpg  1380w"
                    media=" (min-width: 990px)">
                <source
                    srcset="<?php echo get_template_directory_uri(); ?>/assets/images/utdsolv-hero-small.jpg 990w"
                    media="(min-width: 640px)">
                <img
                    srcset="<?php echo get_template_directory_uri(); ?>/assets/images/utdsolv-hero-smaller.jpg 640w"
                    alt="Image of a man's hand working on a project board">
            </picture>
            <!-- Hero Text -->
            <div class="hero__text-content">
                <h1 class="hero__title">UTDsolv connects companies
                    with talented undergraduate business students
                    and future entrepreneurs and leaders</h1>
            </div>

            <!-- Hero Box Section -->
            <div class="hero__boxes">
                <div class="wrapper">
                    <div class="row row--gutters">
                        <div
                            class="row__large-33">
                            <div
                                class="content-box hero__box content-box__information--green">
                                <h3 class="content-box__header">Companies</h3>
                                <p class="content-box__text">Reduce or eliminate
                                    your use of internal resources and connect
                                    to
                                    the future entrepreneurs and leaders by
                                    submitting your project to UTDsolv.</p>
                                <a class="content-box__link--white">Learn
                                    More</a>
                            </div>
                        </div>
                        <div class="row__large-33">
                            <div
                                class="content-box  content-box__information--orange">
                                <h3 class="content-box__header">Students</h3>
                                <p class="content-box__text">Enroll in UTDsolv,
                                    your
                                    senior capstone project, and apply your
                                    academic
                                    knowledge in a business setting while
                                    working
                                    with industry professionals</p>
                                <a class="content-box__link">Learn More</a>
                            </div>
                        </div>
                        <div class="row__large-33">
                            <div
                                class="content-box  content-box__information--light-green">
                                <h3 class="content-box__header">FAQ</h3>
                                <p class="content-box__text">Get the answers to
                                    the
                                    frequently asked questions about UTDsolv at
                                    the
                                    UT Dallas Jindal School including how to
                                    contact
                                    UTDsolv and submit a project.</p>
                                <a class="content-box__link ">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="wrapper">
            <div class="program-information">
                <h3>
                    UTDsolv, the senior capstone project at the UT Dallas Jindal
                    School of Management, provides companies with the ability to
                    develop innovative solutions to their business problems,
                    particularly when companies have no available time and
                    resources. Students work on projects throughout the semester
                    in small groups under the guidance of our faculty and
                    company advisors.
                </h3>
            </div>

            <div class="page-section">
                <h4 class="page-section__title">Key Stats</h4>
                <div class="keystats">
                    <div class="row row--gutters">
                        <div class="row__medium-33">
                            <h5
                                class="keystats__stats-number keystats__stats-number--orange">263</h5>
                            <p class="keystats__stats-text">Companies</p>
                        </div>
                        <div class="row__medium-33">
                            <h5
                                class="keystats__stats-number keystats__stats-number--orange">2,493</h5>
                            <p class="keystats__stats-text">Students</p>
                        </div>
                        <div class="row__medium-33">
                            <h5
                                class="keystats__stats-number keystats__stats-number--orange">342</h5>
                            <p class="keystats__stats-text">Projects</p>
                        </div>
                        <div class="row__medium-33">
                            <h5
                                class="keystats__stats-number keystats__stats-number--green">$7M+</h5>
                            <p class="keystats__stats-text">Economic Valye</p>
                        </div>
                        <div class="row__medium-33">
                            <h5
                                class="keystats__stats-number keystats__stats-number--green">247,760</h5>
                            <p class="keystats__stats-text">Hours</p>
                        </div>
                        <div class="row__medium-33">
                            <h5
                                class="keystats__stats-number keystats__stats-number--green">594</h5>
                            <p class="keystats__stats-text">Project Teams</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="page-section">
    <h4 class="page-section__title">Featured Projects</h4>
    <div class="featured-projects">
        <div class="row row--gutters row--equal-height-medium">
            <?php
            $args = array(
                'post_type' => 'project',
                'posts_per_page' => 3,
                'orderby' => 'rand'
            );
            $query = new WP_Query($args);
            if ($query->have_posts()) :
                while ($query->have_posts()) : $query->the_post();
            ?>
                    <div class="row__large-33">
                        <div class="featured-projects-box">
                            <h5 class="featured-projects-box__header"><?php the_title(); ?></h5>
                            <p class="featured-projects-box__text"><?php echo wp_trim_words(get_the_excerpt(), 45); ?></p>
                            <p class="featured-projects-box__category"><?php echo get_field('project_industry'); ?></p>
                            <a href="<?php the_permalink(); ?>" class="btn btn-sm btn-green btn-bottom">Read More</a>
                        </div>
                    </div>
            <?php
                endwhile;
                wp_reset_postdata(); // Reset the query
            else :
                echo 'No projects found';
            endif;
            ?>
        </div>
    </div>
</div>

     
<!-- News Section -->
<div class="page-section">
    <h4 class="page-section__title">Latest News</h4>

    <div class="featured-news">
            <?php
            $args = array(
                'post_type'      => 'post',
                'posts_per_page' => 1,
                'post_status' => 'publish',
                'orderby'        => 'date', // Order by date (latest post first)
                'order'          => 'DESC',
            );
            $query = new WP_Query($args);
            if ($query->have_posts()) :
                while ($query->have_posts()) : $query->the_post();
                    // Get the post thumbnail source URL
                    $thumbnail_src = wp_get_attachment_image_src(get_post_thumbnail_id(), 'custom-thumbnail');
            ?>
                        <div class="featured-news-box">
                            <h5 class="featured-news-box__headline"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
                            <div class="featured-news-box__image">
                                <img src="<?php echo esc_url($thumbnail_src[0]); ?>" alt="<?php the_title_attribute(); ?>">
                            </div>
                            <div class="featured-news-box__content">
                                <p class="featured-news-box__text"><?php the_excerpt(); ?></p>
                                <p class="news-section__date"><?php echo date('F j, Y'); ?></p>
                            </div>
                        </div>
            <?php
                endwhile;
                wp_reset_postdata(); // Reset the query
            else :
                echo 'No posts found';
            endif;
            ?>
        </div>
    </div>



        </div>


<?php get_footer(); ?>