<?php
$current_post_ID = get_the_ID(); // the post's id is assigned to $current_post_ID


$args = array(
	'post_type' => 'post',
	'orderby' => 'date',
	'order'   => 'DESC',
	'category_name' => 'news',
);

// the query
$the_query = new WP_Query( $args );
?>

<?php if ( $the_query->have_posts() ) : ?>

	<!-- pagination here -->

	<!-- the loop -->
	<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
			<?php if ( has_post_thumbnail() ) { ?>
				<div class="small-12 medium-4 columns">
				<?php echo '<a href="' . get_permalink() . '">';
					the_post_thumbnail('large');
					the_title( '<h1 class="entry-title">', '</h1>' );
					the_excerpt(); 
				echo '</a>';
				?>
				<?php get_template_part('template-parts/edit-post-link'); ?>
				</div>
				<?php }	?>




	<?php endwhile; ?>
	<!-- end of the loop -->

<?php else : ?>
	<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>


	<!-- pagination here -->

	<?php wp_reset_postdata();
