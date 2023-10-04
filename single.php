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
        
        <!-- Gallery Section -->
        <div class="product-gallery">
            <?php
            $images = acf_photo_gallery('gallery', $post->ID);
            if (count($images)) :
            ?>
            <div class="gallery">
                <?php foreach ($images as $image) : ?>
                    <div class="gallery-item">
                        <a href="<?php echo esc_url($image['full_image_url']); ?>" class="gallery-link">
                            <img src="<?php echo esc_url($image['thumbnail_image_url']); ?>" alt="<?php echo esc_attr($image['title']); ?>">
                        </a>
                    </div>
                <?php endforeach; ?>
            </div>
            <?php endif; ?>
        </div>
    </div>
</section>

<script>
jQuery(document).ready(function($) {
    $('.gallery').magnificPopup({
        delegate: 'a',
        type: 'image',
        gallery: {
            enabled: true
        }
    });
});
</script>

<?php get_footer(); ?>
