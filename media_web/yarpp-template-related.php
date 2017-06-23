<?php
/*
YARPP Template: related
Description: This is related post template
Author: Isshin ando
*/ ?>
<h2>おすすめ記事</h2>

<?php if (have_posts()):?>
        <?php while (have_posts()) : the_post(); ?>
          <div class="reco-content">
            <a href="<?php the_permalink(); ?>">
            <div class="reco-content-img"><?php the_post_thumbnail(array(140, 100)); ?></div>
            <p class="date"><?php the_time("Y/n/j"); ?></p>
            <h3 class="title"><?php the_title(); ?></h3>
          </a>
        </div>
        <?php endwhile; ?>
<?php else: ?>
    <p>関連する記事がありません。</p>
<?php endif; ?>
