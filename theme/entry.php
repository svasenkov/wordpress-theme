<main class="main-block single-post">
	<?php get_template_part( 'inc/subscribe' ); ?>
	<div class="content-wrapper">
		<div class="post-title">
			<h2><?php the_title(); ?></h2>
			<?php if (has_post_thumbnail() ): ?>
			<div class="post-picture">
				<img src="<?php the_post_thumbnail_url(); ?>">
			</div>
			<?php endif; ?>
		</div>
		<section class="content">
			<?php the_content(); ?>
		</section>
		<?php get_template_part( 'inc/post-nav' ); ?>
		<?php get_template_part( 'inc/telegram-comments' ); ?>
	</div>
	<?php get_template_part( 'inc/share' ); ?>
</main>