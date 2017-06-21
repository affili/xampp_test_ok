<!DOCTYPE html>
<!--
Hello Welcome view this source code
if you want to job? Come on my company
http://mediaxis.jp/

           oooooo
          oooooooo         oooooo     ooooooo   ooooooo     oooooooo
         oooo  oooo         oooooo   ooooooo    ooooooo    oooo  oooo
        oooo    oooo         oooooo ooooooo               oooo
       oooooooooooooo         oooooooooooo      ooooooo  ooooooooooooo
      oooooooooooooooo       oooooo ooooooo     ooooooo           ooooo
     oooooo      oooooo     oooooo   ooooooo    ooooooo    oooo  ooooo
    oooooo        oooooo   oooooo     ooooooo   ooooooo     oooooooo
-->
<html lang="ja">
<head>
<meta charset="utf-8" />
<title>simple media</title>
<link rel="stylesheet" href="<?php bloginfo('template_directory');?>/css/page.css" media="screen" />
<link href="http://fonts.googleapis.com/css?family=Josefin+Sans:400,600,700" rel="stylesheet">
<!--ビューボードの設置-->
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>

  <!-- Header -->
  <div id="header" class="header">
    <div id="logo">
      <h3 href="#" class="top-name"><span>simple media</span></h3>
    </div>
  </div>
  <div id="container">

  <!-- Right Navi -->
<?php get_sidebar(); ?>
<!-- page-contents -->
<div id="page-main-content">
  <div class="page-content">
    <?php query_posts('posts_per_page=1'); ?>
    <?php if(have_posts()):while(have_posts()):the_post(); ?>
    <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <h2><?php the_title(); ?></h2>
    <div class="page-category">カテゴリー:<a href=""><?php the_category(); ?></a></div>
    <p class="page-date"><?php the_time("Y/n/j"); ?></p>
    <div class="page-content-img">
    <?php the_post_thumbnail(); ?>
  </div>
  <div class="page-content-p">
    <?php the_content(); ?>
  </div>
    </div>
<?php endwhile;endif; ?>
    <!--AD挿入場所-->
    <div class="adsence">
      <div class="page-right-ad"></div>
      <div class="page-left-ad"></div>
    </div>

    <!--おすすめ記事-->
        <div id="recommended-content">
            <?php related_posts(); ?>
        </div>

    <!--SNS-->
    <div id="share">
      <ul>
        <!-- Twitter -->
        <li class="share-twitter">
        <a href="http://twitter.com/home?status=<?php echo urlencode(the_title_attribute('echo=0')); ?>%20<?php the_permalink(); ?>%20by%20" target="_blank">Twitter</a>
        </li>
        <!-- Facebook -->
        <li class="share-facebook">
        <a href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>" target="_blank">Facebook</a>
        </li>
        <!-- Google+ -->
        <li class="share-google">
        <a href="https://plus.google.com/share?url=<?php the_permalink(); ?>" target="_blank">Google+</a>
        </li>
        <!-- はてなブックマーク -->
        <li class="share-hatena">
        <a href="http://b.hatena.ne.jp/add?mode=confirm&url=<?php the_permalink(); ?>&title=<?php the_title();?>" target="_blank">はてブ</a>
        </li>
        <!-- LINE -->
        <li class="share-line">
        <a href="http://line.me/R/msg/text/?<?php the_title(); ?>%0D%0A<?php the_permalink(); ?>">LINE</a>
        </li>
      </ul>
    </div>
  </div>
</div>
<?php get_footer(); ?>
