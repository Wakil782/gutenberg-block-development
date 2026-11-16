<?php
$block_props = get_block_wrapper_attributes();
$text = $attributes['text'] ?? '';
$bgColor = $attributes['bgColor'] ?? '#f0f0f0';
?>
<div <?php echo $block_props; ?> style="background-color: <?php echo esc_attr($bgColor); ?>; padding: 15px; border-radius: 8px; margin-top: 10px; border: 1px solid #ddd;">
    <p style="margin:0;"><?php echo esc_html($text); ?></p>
</div>