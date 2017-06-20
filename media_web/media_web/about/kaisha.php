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
      <!-- 会社概要 -->
      <div class="page-content">
        <h2>会社概要</h2>
        <div class="content">
          <dl class="list-style">
					<dt>社名</dt>
					<dd>株式会社xxx</dd>
					<dt>英文表記</dt>
					<dd>texttext</dd>
					<dt>URL</dt>
					<dd>http://.</dd>
					<dt>設立</dt>
					<dd>20xx年x月xx日</dd>
					<dt>資本金</dt>
					<dd>xxx万円</dd>
					<dt>所在地</dt>
					<dd>
						〒xxx-xxxx 東京都渋谷区<br />
					</dd>
					<dt>事業内容</dt>
					<dd>xxx開発</dd>
					<dt>社員数</dt>
					<dd>xx名（グループ総勢）</dd>
					<dt>役員構成</dt>
					<dd>
            代表取締役CEO xxxxx<br />
						取締役：xxxxx<br />
					</dd>
					<dt>主要取引先</dt>
					<dd>
						xxx株式会社
					</dd>
					<dt>顧問弁護士事務所</dt>
					<dd>xxx法律事務所</dd>
				</dl>
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
    </div>
</body>
</html>
