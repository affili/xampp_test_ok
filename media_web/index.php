<?php get_header(); ?>
    <div id="container">

<?php get_sidebar(); ?>

      <div id="contents-list">
        <?php if(have_posts()):while(have_posts()):the_post(); ?>
        <div class="post">
            <a href="<?php the_permalink(); ?>"><div class="post-img"><?php the_post_thumbnail(array(210, 155)); ?></div></a>
          <div class="post-text">
            <a href="<?php the_permalink(); ?>">
              <h3><?php the_title(); ?></h3>
              <p><?php the_excerpt();?></p>
            </a>
          </div><!--class="post-text" -->
        </div><!--class="post" -->
      <?php endwhile;endif; ?>
    </div>

<?php get_footer(); ?>
