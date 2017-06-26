<?php
/**
*Template Name: none */
?>

<?php get_header(); ?>
<div id="main-content">
  <div id="container">

    <?php get_sidebar(); ?>

    <div id="contents-list">
      <?php
      $paged = (int) get_query_var('paged');
      $args = array(
        'posts_per_page' => 4,
        'paged' => $paged,
        'orderby' => 'post_date',
        'order' => 'DESC',
        'post_type' => 'post',
        'post_status' => 'publish'
      );
      $the_query = new WP_Query($args);
      if ( $the_query->have_posts() ) :
        while ( $the_query->have_posts() ) : $the_query->the_post();
        ?>
        <div class="post">
          <a href="<?php the_permalink(); ?>"><div class="post-img"><?php the_post_thumbnail(array(210, 155)); ?></div></a>
          <div class="post-text">
            <div class="time"><?php the_time('Y/m/d'); ?></div>
            <a href="<?php the_permalink(); ?>">
              <h3><?php the_title(); ?></h3>
              <!--<p><?php the_excerpt();?></p>-->
            </a>
          </div><!--class="post-text" -->
        </div><!--class="post" -->
      <?php endwhile;endif; ?>

      <!--AD挿入場所-->
      <div class="ad">
        <div class="ad-box"></div>
        <div class="ad-box2"></div>
      </div><!--class="post" -->

      <!--５記事めから表示する-->
      <?php query_posts('offset=5'); ?>
      <?php if(have_posts()):while(have_posts()):the_post(); ?>
        <div class="post">
          <a href="<?php the_permalink(); ?>"><div class="post-img"><?php the_post_thumbnail(array(210, 155)); ?></div></a>
          <div class="post-text">
            <div class="time"><?php the_time(); ?></div>
            <a href="<?php the_permalink(); ?>">

              <h3><?php the_title(); ?></h3>

              <!--<p><?php the_excerpt();?></p>-->
            </a>
          </div><!--class="post-text" -->
        </div><!--class="post" -->
      <?php endwhile;endif; ?>

      <?php if ($wp_query -> max_num_pages > 1) : ?>
        <div class="navigation">
          <div class="alignleft"><?php next_posts_link('<< PREV'); ?></div>
          <div class="alignright"><?php previous_posts_link('NEXT >>'); ?></div>
        </div>
      <?php endif; ?>
    </div>
  </div>
</div>

<?php get_footer(); ?>
