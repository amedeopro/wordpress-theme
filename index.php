
<?php get_header(); ?>

<div class="container">
  <div class="row">
    <div class="col-8">
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <div class="post">
          <h2>
            <a href="<?php the_permalink(); ?>">
              <?php the_title(); ?>
            </a>
            <small>
              <?php the_time('j F Y'); ?>
            </small>
          </h2>
          <p><?php the_excerpt(); ?></p>
        </div>
      <?php endwhile; else: ?>
        <p><?php _e('Nessun articolo corrisponde ai criteri di ricerca.'); ?></p>
      <?php endif; ?>
    </div>
    <div class="col-4">
      <?php get_sidebar(); ?>
    </div>
  </div>
</div>


<?php get_footer(); ?>
