<?php

if(!defined('ABSPATH')){
    exit;
}

$post_to_show = isset($attributes['postToShow']) ? absint($attributes['postToShow']): 5;
$post_to_show = max(1, min(10, $post_to_show));
$display_date = isset($attributes['displayDate']) ? (bool) $attributes['displayDate'] : true;
$display_excerpt = isset($attributes['displayExcerpt']) ? (bool) $attributes['displayExcerpt'] : false;

$latest_posts = new WP_Query(array(
    'post_type'      => 'post',
    'post_status'    => 'publish',
    'posts_per_page' => $post_to_show,
    'order'          => 'DESC',
    'orderby'        => 'date',
    'ignore_sticky_posts' => true
));
?>

<div <?php echo get_block_wrapper_attributes(array(
    'class'=> 'latest-posts-block'
));?>>

<h2 class="latest-posts-heading">
    <?php  esc_html_e( 'Latest posts', 'latest-post-block'); ?>
</h2>

<?php if($latest_posts->have_posts(  )): ?>
    <ul class="latest-posts-list">
        <?php while($latest_posts->have_posts()): ?>
            <?php $latest_posts->the_post(); ?>
            <li class="latest-post-item">
                <h3 class="latest-post-title">
                    <a href="<?php echo esc_url(get_permalink()); ?>">
                        <?php echo esc_html(get_the_title()); ?>
                    </a>
                </h3>
                <?php if($display_date): ?>
                    <p class="latest-posts-date">
                        <?php echo esc_html(get_the_date()); ?>
                    </p>
                <?php endif; ?>
                <?php if($display_excerpt) : ?>
                    <div class="latest-post-excerpt">
                        <?php
                        echo wp_kses_post(wpautop(
                            wp_trim_words(get_the_excerpt(), 25)
                        ));

                        ?>
                    </div>

                <?php endif; ?>    
            </li>
            <?php endwhile; ?>
    </ul>
    <?php else : ?>

        <p>
            <?php echo esc_html_e('No posts found.', 'latest-post-block'); ?>
        </p>

    <?php endif; ?>


</div>















