<?php

$text  = $attributes['text'] ?? 'Parent Block';
$color = $attributes['color'] ?? '#ff0000';

?>

<div
    <?php echo get_block_wrapper_attributes(
        array(
            'style' => 'border: 3px solid ' . esc_attr($color) . '; padding: 20px;'
        )
    ); ?>
>

    <h2>
        <?php echo esc_html($text); ?>
    </h2>

    <?php echo $content; ?>

</div>


