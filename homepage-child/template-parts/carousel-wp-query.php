<?php
$current_post_ID = get_the_ID(); // the post's id is assigned to $current_post_ID


$args = array(
	'post_type' => 'post',
	'orderby' => 'date',
	'order'   => 'DESC',
	'category_name' => 'carousel',
);

// the query
$the_query = new WP_Query( $args );
?>

<?php if ( $the_query->have_posts() ) : ?>

	<!-- pagination here -->

	<!-- the loop -->
	<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
			<?php if ( has_post_thumbnail() ) { ?>
				<?php echo '<a href="' . get_permalink() . '">';
					the_post_thumbnail();
				echo '</a>'; ?>
				<?php }	?>




	<?php endwhile; ?>
	<!-- end of the loop -->

<?php else : ?>
	<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>


	<!-- pagination here -->

	<?php wp_reset_postdata();
