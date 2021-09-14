<?php
/*
Template Name: Main page
*/
?>

<?php get_header(); ?>
	<main class="main-block category home" role="main">
		<?php get_template_part( 'inc/subscribe' ); ?>
			<div class="content-wrapper">
				<div class="section-title">
					<h2><?php echo get_the_title(); ?></h2>
				</div>
			<section class="posts">
				<?php
				$query = new WP_Query( 'cat=2&nopaging=1' ); 
				if( $query->have_posts() ){
				while( $query->have_posts() ){
				$query->the_post();
				?>
				<?php get_template_part( 'article' ); ?>
				<?php } wp_reset_postdata(); } 
				else echo 'Записей нет.'; ?>
			</section>
			</div>
		<?php get_template_part( 'inc/share' ); ?>
	</main>
<?php get_footer(); ?>



