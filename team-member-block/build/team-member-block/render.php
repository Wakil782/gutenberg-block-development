
<?php

/*
 * Dynamic Team Member Block Attributes
 */

$name = $attributes['name'] ?? 'Wakil';

$designation = $attributes['designation'] ?? 'Web Developer';

$description = $attributes['description'] ?? 'Passionate developer creating modern websites.';

$image_url = $attributes['imageUrl'] ?? '';

$image_id = absint($attributes['imageId'] ?? 0);

$facebook_url = $attributes['facebookUrl'] ?? '';

$linkedin_url = $attributes['linkedinUrl'] ?? '';

$twitter_url = $attributes['twitterUrl'] ?? '';

$button_text = $attributes['buttonText'] ?? 'View Profile';

$button_url = $attributes['buttonUrl'] ?? '#';

$show_social = $attributes['showSocial'] ?? true;

$card_background = $attributes['cardBackground'] ?? '#ffffff';

$name_color = $attributes['nameColor'] ?? '#111827';

$designation_color = $attributes['designationColor'] ?? '#64748b';

$button_color = $attributes['buttonColor'] ?? '#0073aa';

$button_text_color = $attributes['buttonTextColor'] ?? '#ffffff';

$image_size = absint($attributes['imageSize'] ?? 150);

$image_size = min(250, max(80, $image_size));


/*
 * Sanitize Colors
 */

$card_background = sanitize_hex_color($card_background) ?: '#ffffff';

$name_color = sanitize_hex_color($name_color) ?: '#111827';

$designation_color = sanitize_hex_color($designation_color) ?: '#64748b';

$button_color = sanitize_hex_color($button_color) ?: '#0073aa';

$button_text_color = sanitize_hex_color($button_text_color) ?: '#ffffff';


/*
 * CSS Styles
 */

$card_css = sprintf(
    'text-align:center;padding:30px;border-radius:12px;background-color:%s;',
    $card_background
);

$image_css = sprintf(
    'width:%1$dpx;height:%1$dpx;object-fit:cover;border-radius:50%%;',
    $image_size
);

$name_css = sprintf('color:%s;', $name_color);

$designation_css = sprintf('color:%s;', $designation_color);

$button_css = sprintf(
    'background-color:%1$s;color:%2$s;',
    $button_color,
    $button_text_color
);

?>

<div <?php echo get_block_wrapper_attributes(); ?>>

    <div
        class="team-member-card"
        style="<?php echo esc_attr($card_css); ?>"
    >

        <?php if ($image_id) : ?>

            <?php
            echo wp_get_attachment_image(
                $image_id,
                'medium',
                false,
                [
                    'class' => 'team-member-image',
                    'alt' => $name,
                    'style' => $image_css,
                    'loading' => 'lazy',
                ]
            );
            ?>

        <?php elseif ($image_url) : ?>

            <img
                class="team-member-image"
                src="<?php echo esc_url($image_url); ?>"
                alt="<?php echo esc_attr($name); ?>"
                style="<?php echo esc_attr($image_css); ?>"
                loading="lazy"
            >

        <?php endif; ?>


        <h3
            class="team-member-name"
            style="<?php echo esc_attr($name_css); ?>"
        >
            <?php echo esc_html($name); ?>
        </h3>


        <p
            class="team-member-designation"
            style="<?php echo esc_attr($designation_css); ?>"
        >
            <?php echo esc_html($designation); ?>
        </p>


        <div class="team-member-description">
            <?php echo wp_kses_post($description); ?>
        </div>


        <?php if ($show_social) : ?>

            <div class="team-member-social">

                <?php if ($facebook_url) : ?>
                    <a
                        href="<?php echo esc_url($facebook_url); ?>"
                        target="_blank"
                        rel="noopener noreferrer"
                    >
                        Facebook
                    </a>
                <?php endif; ?>


                <?php if ($linkedin_url) : ?>
                    <a
                        href="<?php echo esc_url($linkedin_url); ?>"
                        target="_blank"
                        rel="noopener noreferrer"
                    >
                        LinkedIn
                    </a>
                <?php endif; ?>


                <?php if ($twitter_url) : ?>
                    <a
                        href="<?php echo esc_url($twitter_url); ?>"
                        target="_blank"
                        rel="noopener noreferrer"
                    >
                        Twitter
                    </a>
                <?php endif; ?>

            </div>

        <?php endif; ?>


        <a
            class="team-member-button"
            href="<?php echo esc_url($button_url ?: '#'); ?>"
            style="<?php echo esc_attr($button_css); ?>"
        >
            <?php echo esc_html($button_text ?: 'View Profile'); ?>
        </a>

    </div>

</div>
