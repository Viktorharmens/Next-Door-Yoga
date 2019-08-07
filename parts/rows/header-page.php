<section class="page-row page-row--header-page">
    <div class="container">
        <div <?php echo (( isset($content['pillar']) && $content['pillar'] ) ? 'class="column__3-4 pull-right"' : '') ?>>
            <h1 class="heading heading--large">
                <span><?php echo $content['title']; ?></span>
            </h1>

            <div class="subheader">
                <nav class="breadcrumbs">
                    <?php the_breadcrumbs(); ?>
                </nav>

                <?php if( isset($content['pillar']) && $content['pillar'] && get_field('show_date', $content['postid']) ) { ?>
                <time datetime="<?php echo get_the_time('Y-m-d', $content['postid']); ?>"><?php _e('Laatste update: ', 'visualmasters');?><?php echo get_the_time('F Y', $content['postid']); ?></time>
                <?php } ?>
            </div>
        </div>
        
        <?php echo (( isset($content['content']) ) ? '<div class="content">' . apply_filters('the_content', $content['content']) . '</div>' : '') ?>
    </div>
</section>