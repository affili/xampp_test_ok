<?php
/*
Template Name: Right saide navi
*/
 ?>
<!-- Right Navi -->
<div id="right-side">
    <div id="nav-category">
      <?php wp_nav_menu( array('theme_location' => 'header_navi')); ?>
    </div>

<div class="right-ad"></div>

<div id="saide-ranking">
  <ul>
  <?php
  //記事のPV情報を取得
  setPostViews(get_the_ID());
  //ループ開始
  query_posts('meta_key=post_views_count&orderby=meta_value_num&posts_per_page=5&order=DESC');while(have_posts()) : the_post();?>

    <li class="saide-ranking-li">
      <a href="<?php echo get_the_permalink(); ?>">
      <div class="saide-ranking-img"><?php if(has_post_thumbnail(array(90, 100))){the_post_thumbnail('post-thumbnail'); } ?></a></div>
      <p class="date"><?php the_time("Y/n/j"); ?></p>
      <p class="ranking-title">
        <a href="<?php the_permalink(); ?>">
        <?php the_title(); ?>
    </a>
  </p>
    </li>
    <?php endwhile; ?>
  </ul>
</div>
</div>
