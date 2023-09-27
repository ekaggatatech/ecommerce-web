<?php get_header(); ?>

<section class="frontpage">
    <div class="container">
        <h1>Welcome to E-Commerce Store</h1>
        
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
                $men_args = array(
                    'post_type' => 'post',          
                    'category_name' => 'women',      
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
        
        <!-- children's Items -->
        <div class="product-category">
            <h2>Children's Collection</h2>
            <div class="product-list row">
                <?php
                $men_args = array(
                    'post_type' => 'post',          
                    'category_name' => 'children',      
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
    </div>
</section>

<?php get_footer(); ?>
