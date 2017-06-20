<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="utf-8" />
  <title>simple media</title>
  <link rel="stylesheet" href="<?php bloginfo('template_directory');?>media_web/style.css" media="screen" />
  <link rel="stylesheet" href="<?php bloginfo('template_directory');?>media_web/css/about.css" media="screen" />
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
              <h3>About us</h3>
              <?php wp_nav_menu( array('theme_location' => 'header-navi')); ?>
        </div>
      </div>
      <!--利用規約-->
      <div class="page-content">
        <h2>利用規約</h2>
        <div class="content">
          <p>Simple media (株式会社Axis）のサービスをご利用にあたっては本規約をよくご確認の上ご利用ください。</p>
          <h3>第１条</h3>
          <p>弊社は利用希望者が以下に該当する場合、利用を拒否することができるものとします。</p>
          <ol>
            <li>本規約に同意しない場合。</li>
            <li>18歳未満の場合。</li>
            <li>電子メールもしくは電話で常時連絡が取れない場合。</li>
            <li>弊社の運営するサービスに妨害、または支障をきたす恐れがある場合。</li>
            <li>過去に本規約違反等により会員資格を抹消された場合</li>
            <li>その他、弊社が不適当と判断した場合。</li>
          </ol>
          <h3>第2条</h3>
          <p>弊社は利用希望者が以下に該当する場合、利用を拒否することができるものとします。</p>
          <ol>
            <li>本規約に同意しない場合。</li>
            <li>18歳未満の場合。</li>
            <li>電子メールもしくは電話で常時連絡が取れない場合。</li>
            <li>弊社の運営するサービスに妨害、または支障をきたす恐れがある場合。</li>
            <li>過去に本規約違反等により会員資格を抹消された場合</li>
            <li>その他、弊社が不適当と判断した場合。</li>
          </ol>
          <h3>第3条</h3>
          <p>弊社は利用希望者が以下に該当する場合、利用を拒否することができるものとします。</p>
          <ol>
            <li>本規約に同意しない場合。</li>
            <li>18歳未満の場合。</li>
            <li>電子メールもしくは電話で常時連絡が取れない場合。</li>
            <li>弊社の運営するサービスに妨害、または支障をきたす恐れがある場合。</li>
            <li>過去に本規約違反等により会員資格を抹消された場合</li>
            <li>その他、弊社が不適当と判断した場合。</li>
          </ol>
        </div>
      </div>
    </div>
    <footer>
      <div class="footer-content">
        <div class="footer-about">
          <h3>About us</h3>
          <ul>
            <li><a href="about/kaisha.php">会社概要</a></li>
            <li><a href="about/riyou.php">利用規約</a></li>
            <li><a href="about/privacy.php">プライバシーポリシー</a></li>
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
</body>

</html>
