<?php
if(!defined('ABSPATH')){
    exit;
}

$service_title = isset($attributes['serviceTitle']) ? $attributes['serviceTitle'] : 'Web development';
$description = isset($attributes['description']) ? $attributes['description'] : 'We build modren and responsive website for your business.';
$icon = isset($attributes['icon']) ? $attributes['icon'] : '💻';
$button_text = isset($attributes['buttonText']) ? $attributes['buttonText'] : 'Learn More';
$button_url = isset($attributes['buttonUrl']) ? $attributes['buttonUrl'] : '#';
$card_background = isset($attributes['cardBackground']) ? sanitize_hex_color($attributes['buttonText']) : '#ffffff';


if( ! $card_background ){
    $card_background = '#ffffff';
}
?>
<div <?php echo get_block_wrapper_attributes(
    array(
        'class'=> 'service-card-wrapper',
    )
); ?>>

<div 
class="service-card"
style=<?php echo esc_attr('background-color :' .$card_background. ';'); ?>
>
<div class="service-card-icon">
    <?php echo esc_html($icon); ?>
</div>
<h3 class="service-card-title">
    <?php echo esc_html($service_title); ?>
</h3>
<p class="service-card-description">
    <?php echo esc_html($description); ?>
</p>
<a href="<?php echo esc_url($button_url); ?> ?>" class="service-card-button">
    <?php echo esc_html($button_text); ?>
</a>

</div>


</div>

<?php




