<?php get_header(); ?>

<?php the_post_thumbnail(); ?>

<div class="container entry">
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <h1><?php the_title(); ?></h1>
    <?php the_content(); ?>
  <?php endwhile; else : ?>
    <h1>Oops!</h1>
    <p>
      There is no content to display
    </p>
  <?php endif; ?>
</div>

<?php get_footer(); ?>
