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
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/single.css" type="text/css" />
<!-- <link rel="#" href="#" /> -->
<link href="http://fonts.googleapis.com/css?family=Josefin+Sans:400,600,700" rel="stylesheet">
<!--ビューボードの設置-->
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<div id="single-continer">
    <!-- Header -->
    <div id="header-single" class="header-single">
      <div id="logo-single">
        <h3 href="#" class="top-name-single"><span>simple media</span></h3>
      </div>
    </div>

    <div id="single-wap">
      <div class="top-category">
        <h3><a href="#">トップ</a>/<a href="#">カテゴリー</a></h3>
      </div>
      <div id="single-area">
        <h2><?php the_title(); ?></h2>
        <p class="single-category">カテゴリ：カテゴリーの種類</p>
        <p class="single-day"><?php the_time("Y/n/j"); ?></p>
        <article>
          <img src="image/drone40.jpg" alt="drone" class="single-img">
          <p>
            <?php
            $this_content= wpautop($post->post_content);
            echo $this_content;
            ?>
          </p>
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
              <!-- Pocket -->
              <li class="share-pocket">
              <a href="http://getpocket.com/edit?url=<?php the_permalink(); ?>" target="_blank">Pocket</a>
              </li>
              <!-- LINE -->
              <li class="share-line">
              <a href="http://line.me/R/msg/text/?<?php the_title(); ?>%0D%0A<?php the_permalink(); ?>">LINE</a>
              </li>
            </ul>
          </div><!--id=share-->

            <div class="back-url">
              <p><a href="#">＜＜次の記事</a>　<a href="#">前の記事＞＞</a></p>
            </div>
        </article>

        <div class="ad-wid">
          <img src="image/ad-wid.png" alt="ad-wid" class="ad-wid-img" />
          <img src="image/ad-wid.png" alt="ad-wid" class="ad-wid-img" />
        </div>

        <div id="new-contents">
          <section class="card">
            <img class="card-img" src="image/newyork.jpg" alt="">
            <div class="card-content">
              <h1 class="card-title">New Content</h1>
              <p class="card-text">ガジェット最新情報</p>
            </div>
            <div class="card-link">
              <a href="#">もっとみる</a>
            </div>
          </section>

          <section class="card">
            <img class="card-img" src="image/newyork.jpg" alt="">
            <div class="card-content">
              <h1 class="card-title">New Content</h1>
              <p class="card-text">ガジェット最新情報</p>
            </div>
            <div class="card-link">
              <a href="#">もっとみる</a>
            </div>
          </section>

          <section class="card">
            <img class="card-img" src="image/newyork.jpg" alt="">
            <div class="card-content">
              <h1 class="card-title">New Content</h1>
              <p class="card-text">ガジェット最新情報</p>
            </div>
            <div class="card-link">
              <a href="#">もっとみる</a>
            </div>
          </section>

          <section class="card">
            <img class="card-img" src="image/newyork.jpg" alt="">
            <div class="card-content">
              <h1 class="card-title">New Content</h1>
              <p class="card-text">ガジェット最新情報</p>
            </div>
            <div class="card-link">
              <a href="#">もっとみる</a>
            </div>
          </section>

          <section class="card">
            <img class="card-img" src="image/newyork.jpg" alt="">
            <div class="card-content">
              <h1 class="card-title">New Content</h1>
              <p class="card-text">ガジェット最新情報</p>
            </div>
            <div class="card-link">
              <a href="#">もっとみる</a>
            </div>
          </section>

          <section class="card">
            <img class="card-img" src="image/newyork.jpg" alt="">
            <div class="card-content">
              <h1 class="card-title">New Content</h1>
              <p class="card-text">ガジェット最新情報</p>
            </div>
            <div class="card-link">
              <a href="#">もっとみる</a>
            </div>
          </section>
        </div><!--new-contents-->
      </div>


      <div id="single-right">
        <ul>
        <li class="saide-ranking-li"><a href="#">
          <img src="image/cube.jpg" alt="drone" class="saide-ranking-img" />
          <p class="date">2017.05.05</p>
          <p class="ranking-title"> 新しくダイソンが出たそうなので旧型と比較した</p>
        </a>
        </li>
        <li class="saide-ranking-li"><a href="#">
          <img src="image/cube.jpg" alt="drone" class="saide-ranking-img" />
          <p class="date">2017.05.05</p>
          <p class="ranking-title">新しくダイソンが出たそうなので旧型と比較した</p>
        </a>
      </li>
        <li class="saide-ranking-li"><a href="#">
          <img src="image/cube.jpg" alt="drone" class="saide-ranking-img" />
          <p class="date">2017.05.05</p>
          <p class="ranking-title"> 新しくダイソンが出たそうなので旧型と比較した</p>
        </a>
        </li>
        <li class="saide-ranking-li"><a href="#">
          <img src="image/cube.jpg" alt="drone" class="saide-ranking-img" />
          <p class="date">2017.05.05</p>
          <p class="ranking-title">  新しくダイソンが出たそうなので旧型と比較した</p>
        </a>
        </li>
        <li class="saide-ranking-bottom"><a href="#">
          <img src="image/cube.jpg" alt="drone" class="saide-ranking-img" />
          <p class="date">2017.05.05</p>
          <p class="ranking-title">新しくダイソンが出たそうなので旧型と比較した</p>
        </a>
        </li>
      </ul>

      <div class="right-ad">
        <img src="image/said-ad.png" alt="drone" class="saide-ad" />
      </div>
    </div><!--single-right-->
</div><!--single-continer-->

  <footer class="footer-single">
    <h3>sample footer</h3>
      <p>Copyright © 2014-2015 Syncer All Rights Reserved.</p>
  </footer>


</body>
</html>
