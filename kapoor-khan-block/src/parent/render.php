<?php
$block_props = get_block_wrapper_attributes(['style' => 'border: 2px dashed #2271b1; padding: 20px; background: #f6f7f7;']);
$title = $attributes['title'] ?? '';
?>
<div <?php echo $block_props; ?>>
    <?php if($title): ?>
        <h2 style="margin-top:0; color:#2271b1;"><?php echo esc_html($title); ?></h2>
    <?php endif; ?>
    
    <div class="parent-content">
        <?php echo $content; // Child block er content ekhane print hobe ?>
    </div>
</div>