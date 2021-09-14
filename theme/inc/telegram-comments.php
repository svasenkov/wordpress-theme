<?php if( get_field('telegram_url') ): ?>
	<div class="comments">
		<script async src="https://telegram.org/js/telegram-widget.js?15" data-telegram-discussion="<?php the_field('telegram_url');?>" data-comments-limit="5" data-color="54B3F8"></script>
	</div>
<?php endif; ?>