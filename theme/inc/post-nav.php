<div class="post-navigation">
	<div class="left">
<?php
$prev_post = get_previous_post();
if ( ! empty( $prev_post ) ): ?>
	<a href="<?php echo get_permalink( $prev_post->ID ); ?>" title="<?php echo apply_filters( 'the_title', $prev_post->post_title ); ?>">
		Предыдущий пост
	</a>
<?php endif; ?>
	</div>
	<div class="center">
		<a href="<?php echo get_site_url();?>">На главную</a>
	</div>
	<div class="right">
<?php
$next_post = get_next_post();
if ( ! empty( $next_post ) ): ?>
	<a href="<?php echo get_permalink( $next_post->ID ); ?>" title="<?php echo apply_filters( 'the_title', $next_post->post_title ); ?>">
		Следующий пост
	</a>
<?php endif; ?>
	</div>
</div>