<?php get_header(); ?>

<section class="product-page">
    <div class="container">
        <h1 class="product-title"><?php the_title(); ?></h1>

        <?php if (has_post_thumbnail()) : ?>
            <div class="product-image">
                <a href="<?php the_post_thumbnail_url('blog-large'); ?>">
                    <img src="<?php the_post_thumbnail_url('blog-large'); ?>" alt="<?php the_title(); ?>" class="img-fluid product-thumbnail">
                </a>
            </div>
        <?php endif; ?>

        <div class="product-details row">
            <div class="col-lg-6">
                <?php get_template_part('includes/section', 'items'); ?>
                <?php wp_link_pages(); ?>
            </div>

            <div class="col-lg-6">
                <ul class="product-info">
                    <li>
                        <span class="info-label">Color:</span>
                        <span class="info-value"><?php the_field('colour'); ?></span>
                    </li>
                    <li>
                        <span class="info-label">Value:</span>
                        <span class="info-value"><?php the_field('value'); ?></span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
