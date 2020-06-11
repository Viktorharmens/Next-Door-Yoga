<div class="slider slider-review js-slider-review">
    <?php 

        $args = array(
        'post_type' => 'recensies',
        'posts_per_page' => -1,
        'tax_query' => array(
            array(
                'taxonomy' => 'custom_cat', //double check your taxonomy name in you dd 
                'field'    => 'id',
                'terms'    => 10
            ),
        ),
        );
        $loop = new WP_Query($args);


        if ($loop -> have_posts() ) : ?>
        <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>


            <div class="slide">
                <div class="content">
                    <?php the_content();?>
                    <span><?php echo get_field('name');?></span>
                </div>
            </div>
            

    <?php endwhile; ?><?php endif; wp_reset_query(); ?>
</div>