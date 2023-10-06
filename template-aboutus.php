<?php
/*
Template Name: About Us
*/
get_header();
?>
<section class= "page-wrap">
    <section class="about-us">
        <div class="container">
            <div class="about-content">
                <h2>About Us</h2>
                <p><?php if( have_posts() ): while (have_posts() ): the_post();?>
                     <?php the_content();?>
                    <?php endwhile; else:endif;?>
                </p>
            </div>
        </div>
    </section>
</section>

<?php get_footer(); ?>
