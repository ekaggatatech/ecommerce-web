<div class="blog-grid">
    <?php if (have_posts()) : ?>
        <div class="row">
            <?php while (have_posts()) : the_post(); ?>
                <div class="col-md-4">
                    <div class="card mb-4">
                        <?php if (has_post_thumbnail()) : ?>
                            <img src="<?php the_post_thumbnail_url('blog-small'); ?>" alt="<?php the_title(); ?>" class="card-img-top">
                        <?php endif; ?>
                        <div class="card-body">
                            <a href="<?php the_permalink(); ?>" style="text-decoration: none; color: #333;">
                                <h5 class="card-title mb-2"><?php the_title(); ?></h5>
                            </a>
                            <p class="card-text text-muted"> $<?php the_field('value');?></p>
                            <a href="<?php the_permalink(); ?>" class="btn btn-primary">View Details</a>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
        </div>
    <?php else : ?>
        <p>No items found</p>
    <?php endif; ?>
</div>
