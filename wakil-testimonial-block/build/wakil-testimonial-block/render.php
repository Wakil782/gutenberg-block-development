
<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

$client_name = $attributes['clientName'] ?? 'Rahim Ahmed';
$designation = $attributes['designation'] ?? 'Founder & CEO';
$company     = $attributes['company'] ?? 'Creative Solutions';
$testimonial = $attributes['testimonial'] ?? 'Working with this team was a great experience.';
$image_url   = $attributes['imageUrl'] ?? '';

$rating = isset( $attributes['rating'] ) ? absint( $attributes['rating'] ) : 5;
$rating = max( 1, min( 5, $rating ) );

$card_background = $attributes['cardBackground'] ?? '#ffffff';
$text_color      = $attributes['textColor'] ?? '#333333';
$accent_color    = $attributes['accentColor'] ?? '#e0a526';

$wrapper_attributes = get_block_wrapper_attributes(
    array(
        'class' => 'wakil-testimonial-wrapper',
        'style' => '--testimonial-bg: ' . esc_attr( $card_background ) . '; --testimonial-text: ' . esc_attr( $text_color ) . '; --testimonial-accent: ' . esc_attr( $accent_color ) . ';',
    )
);
?>

<div <?php echo $wrapper_attributes; ?>>
    <article class="wakil-testimonial-card">

        <div class="wakil-testimonial-stars"
             role="img"
             aria-label="<?php echo esc_attr( sprintf( __( '%d out of 5 stars', 'wakil-testimonial-block' ), $rating ) ); ?>">

            <?php for ( $i = 1; $i <= 5; $i++ ) : ?>
                <span class="<?php echo $i <= $rating ? 'is-filled' : 'is-empty'; ?>">
                    <?php echo $i <= $rating ? '★' : '☆'; ?>
                </span>
            <?php endfor; ?>

        </div>

        <div class="wakil-testimonial-content">
            <?php echo wp_kses_post( $testimonial ); ?>
        </div>

        <div class="wakil-testimonial-profile">

            <?php if ( ! empty( $image_url ) ) : ?>
                <img
                    class="wakil-testimonial-avatar"
                    loading="lazy"
                    src="<?php echo esc_url( $image_url ); ?>"
                    alt="<?php echo esc_attr( $client_name ); ?>"
                >
            <?php endif; ?>

            <div class="wakil-testimonial-details">
                <h3><?php echo esc_html( $client_name ); ?></h3>

                <?php if ( ! empty( $designation ) ) : ?>
                    <p><?php echo esc_html( $designation ); ?></p>
                <?php endif; ?>

                <?php if ( ! empty( $company ) ) : ?>
                    <p class="wakil-testimonial-company">
                        <?php echo esc_html( $company ); ?>
                    </p>
                <?php endif; ?>
            </div>

        </div>

    </article>
</div>
