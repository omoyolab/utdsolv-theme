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

<div class="wrapper wrapper--narrow">
				<div class="news-section">
					<p><?php the_excerpt();  ?></p>
					<div class="news-section__metadata">
						<div>
                        <p class="news-section__author">By <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author(); ?></a></p>
						</div>
						<p class="news-section__date"><?php echo date('F j, Y'); ?></p>
					</div>
				</div>
 </div>

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