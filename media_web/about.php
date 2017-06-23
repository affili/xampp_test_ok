<?php
/*
Template Name: 固定ページ(about)
*/
 ?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8" />
  <title>simple media</title>

  <link rel="stylesheet" href="<?php bloginfo('template_directory');?>/css/about.css" media="screen" />
  <!-- <link rel="#" href="#" /> -->
  <link href="http://fonts.googleapis.com/css?family=Josefin+Sans:400,600,700" rel="stylesheet">
  <!--ビューボードの設置-->
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
  <div id="header" class="header">
    <div id="logo">
      <h3 href="#" class="top-name"><span>simple media</span></h3>
    </div>
  </div>
    <div id="container">
      <!-- Left side bar -->
      <div id="leftside">
        <div id="about-category">
          <h3>About</h3>
          <?php wp_nav_menu( array('theme_location' => 'about_menu')); ?>
        </div>
      </div>
      <!-- 会社概要 -->
      <div class="page-content">
        <?php if(have_posts()): while(have_posts()): the_post(); ?>
          <h2><?php the_title(); ?></h2>
          <div class="list-style">
          <?php the_content(); ?>
        <?php endwhile; endif; ?>
        </div>
      </div>
      <?php get_footer(); ?>
