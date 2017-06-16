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
          <ul>
            <li class="about-top">
              <h3>About us</h3></li>
            <li class="about-nav"><a href="kaisha.html">会社概要</a></li>
            <li class="about-nav"><a href="riyou.html">利用規約</a></li>
            <li class="about-nav"><a href="privacy.html">プライバシー規約</a></li>
          </ul>
        </div>
      </div>
      <!-- 会社概要 -->
      <div class="page-content">
        <h2><?php the_title(); ?></h2>
        <?php the_content();?>
      </div>
      <footer>
        <div class="footer-content">
          <div class="footer-about">
            <h3>About us</h3>
            <ul>
              <li><a href="kaisha.html">会社概要</a></li>
              <li><a href="riyou.html">利用規約</a></li>
              <li><a href="privacy.html">プライバシーポリシー</a></li>
            </ul>
          </div>
          <div class="footer-category">
            <h4>商品カテゴリー</h4>
            <ul>
              <li><a href="#">ガジェット</a></li>
              <li><a href="#">おもちゃ</a></li>
              <li><a href="#">ゲーム</a></li>
              <li><a href="#">趣味</a></li>
              <li><a href="#">ライフスタイル</a></li>
              <li><a href="#">ワークスペース</a></li>
            </ul>
          </div>
        </div>
      </footer>
    </div>
</body>
</html>
