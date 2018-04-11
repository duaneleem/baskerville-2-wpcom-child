<?php
/**
 * This template is used for displaying PRIVATE pages.
 *
 * Template Name: Private: Full Width
 */

get_header(); ?>

<div class="wrapper section medium-padding">
	<main class="section-inner clear" role="main">

		<?php
			$content_class = is_active_sidebar( 'sidebar-1' ) ? "fleft" : "center";
		?>
		<div class="content clear <?php echo $content_class; // WPCS: XSS OK. ?>" id="content">
			<?php
        if (!is_user_logged_in()) {
          echo "
            <h1 style='font-size: 2em; font-weight: bold;'>Unauthorized Access</h1>
            <p style='margin-top: 40px;'>You must be signed in to view this content!</p>
          ";
        } else {
          if ( have_posts() ) : while ( have_posts() ) : the_post();
            get_template_part( 'content', 'page' );
          endwhile; else :
            get_template_part( 'content', 'none' );
          endif;
        }
      ?>
		</div> <!-- /content -->

		<?php get_sidebar(); ?>

	</main> <!-- /section-inner -->
</div> <!-- /wrapper -->

<?php get_footer(); ?>
