<?php

$title = $attributes['title'] ?? 'Child Block';

$parent_color = $block->context['amar/color'] ?? '#ff0000';

?>

<div
    <?php echo get_block_wrapper_attributes(
        array(
            'style' => 'background-color: ' . esc_attr($parent_color) . '; padding: 20px; margin-top: 20px;'
        )
    ); ?>
>

    <p>
        <?php echo esc_html($title); ?>
    </p>

    <small>
        Parent Color:
        <?php echo esc_html($parent_color); ?>
    </small>

</div>