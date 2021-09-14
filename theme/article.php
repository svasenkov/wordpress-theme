					<article class="simple">
						<a class="post-link" href="<?php the_permalink(); ?>" title="Открыть статью"></a>
						<div class="post-picture">
							<?php if (has_post_thumbnail() ): ?>
							<img src="<?php the_post_thumbnail_url(); ?>">
							<?php else: ?>
							<img src="<?php echo get_template_directory_uri(); ?>/images/no-img.png">
							<?php endif; ?>
						</div>
						<div class="content">
							<h3><?php the_title(); ?></h3>
							<p><?php the_content(); ?></p>
						</div>
					</article>
