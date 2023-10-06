<?php get_header(); ?>

<section class="frontpage">
    <div class="container">
        <h1>Welcome to E-Commerce Store</h1>

        <!-- Bootstrap Carousel Slider -->
        <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <?php
                $images = acf_photo_gallery('sliderimages', $post->ID);
                if (count($images)) :
                    $active = 'active';
                    foreach ($images as $image) :
                ?>
                        <div class="carousel-item <?php echo $active; ?>">
                            <img src="<?php echo esc_url($image['full_image_url']); ?>" class="d-block w-100" alt="<?php echo esc_attr($image['title']); ?>">
                        </div>
                <?php
                        $active = ''; // Remove 'active' class after the first slide
                    endforeach;
                endif;
                ?>
            </div>
            <a class="carousel-control-prev" href="#carouselExample" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExample" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </a>
        </div>
        
        <!-- Men's Items -->
        <div class="product-category">
            <h2>Men's Collection</h2>
            <div class="product-list row">
                <?php
                $men_args = array(
                    'post_type' => 'post',          
                    'category_name' => 'men',      
                    'posts_per_page' => 6,         
                );

                $men_query = new WP_Query($men_args);

                if ($men_query->have_posts()) :
                    while ($men_query->have_posts()) : $men_query->the_post();
                ?>
                        <div class="col-md-4">
                            <div class="product-card">
                                <?php if (has_post_thumbnail()) : ?>
                                    <img src="<?php the_post_thumbnail_url('thumbnail'); ?>" alt="<?php the_title(); ?>" class="img-fluid">
                                <?php endif; ?>
                                <a href="<?php the_permalink(); ?>" style="text-decoration: none; color: #333;">
                                    <h3><?php the_title(); ?></h3>
                                </a>
                            </div>
                        </div>
                <?php
                    endwhile;
                    wp_reset_postdata();
                else :
                    echo '<p>No Men\'s items found.</p>';
                endif;
                ?>
            </div>
        </div>

        
        <!-- Women's Items -->
        <div class="product-category">
            <h2>Women's Collection</h2>
            <div class="product-list row">
                <?php
                $women_args = array(
                    'post_type' => 'post',          
                    'category_name' => 'women',      
                    'posts_per_page' => 6,         
                );

                $women_query = new WP_Query($women_args);

                if ($women_query->have_posts()) :
                    while ($women_query->have_posts()) : $women_query->the_post();
                ?>
                        <div class="col-md-4">
                            <div class="product-card">
                                <?php if (has_post_thumbnail()) : ?>
                                    <img src="<?php the_post_thumbnail_url('thumbnail'); ?>" alt="<?php the_title(); ?>" class="img-fluid">
                                <?php endif; ?>
                                <a href="<?php the_permalink(); ?>" style="text-decoration: none; color: #333;">
                                    <h3><?php the_title(); ?></h3>
                                </a>
                            </div>
                        </div>
                <?php
                    endwhile;
                    wp_reset_postdata();
                else :
                    echo '<p>No Women\'s items found.</p>';
                endif;
                ?>
            </div>
        </div>
        
        <!-- Children's Items -->
        <div class="product-category">
            <h2>Children's Collection</h2>
            <div class="product-list row">
                <?php
                $children_args = array(
                    'post_type' => 'post',          
                    'category_name' => 'children',      
                    'posts_per_page' => 6,         
                );

                $children_query = new WP_Query($children_args);

                if ($children_query->have_posts()) :
                    while ($children_query->have_posts()) : $children_query->the_post();
                ?>
                        <div class="col-md-4">
                            <div class="product-card">
                                <?php if (has_post_thumbnail()) : ?>
                                    <img src="<?php the_post_thumbnail_url('thumbnail'); ?>" alt="<?php the_title(); ?>" class="img-fluid">
                                <?php endif; ?>
                                <a href="<?php the_permalink(); ?>" style="text-decoration: none; color: #333;">
                                    <h3><?php the_title(); ?></h3>
                                </a>
                            </div>
                        </div>
                <?php
                    endwhile;
                    wp_reset_postdata();
                else :
                    echo '<p>No Children\'s items found.</p>';
                endif;
                ?>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
