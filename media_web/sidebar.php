<!-- Right Navi -->
<div id="right-side">
<div id="nav-category">
  <ul>
    <li class="nav-top"><a href="#">ガジェット</a></li>
    <li class="nav"><a href="#">おもちゃ</a></li>
    <li class="nav"><a href="#">ゲーム</a></li>
    <li class="nav"><a href="#">趣味</a></li>
    <li class="nav"><a href="#">ライフスタイル</a></li>
    <li class="nav"><a href="#">ワークスペース</a></li>
  </ul>
</div>

<div id="saide-ranking">
  <ul>
  <?php
  //記事のPV情報を取得
  setPostViews(get_the_ID());
  //ループ開始
  query_posts('meta_key=post_views_count&orderby=meta_value_num&posts_per_page=5&order=DESC');while(have_posts()) : the_post();?>

    <li class="saide-ranking-li"><a href="<?php the_permalink(); ?>">
      <div class="saide-ranking-img"><?php the_post_thumbnail(array(90, 80)); ?></div>
      <p class="date"><?php the_time("Y/n/j"); ?></p>
      <p class="ranking-title"> <?php the_title(); ?></p>
    </a>
    </li>
    <?php endwhile; ?>
  </ul>
</div>
</div>
