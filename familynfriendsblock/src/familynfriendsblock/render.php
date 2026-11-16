<?php

$name = $attributes['name'] ?? 'Wakil';
$role = $attributes['role'] ?? 'WordPress Developer';

?>

<div <?php echo get_block_wrapper_attributes(); ?>>

	<div class="profile-card">

		<h2>
			<?php echo esc_html($name); ?>
		</h2>

		<p>
			<?php echo esc_html($role); ?>
		</p>

	</div>

</div>





