
<?php
/*
Template Name: Form
*/
 ?>

<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="utf-8" />
  <title>simple media</title>
  <link rel="stylesheet" href="<?php bloginfo('template_directory');?>/css/form.css" media="screen" />
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
  <div class="container">
    <form id="contact" action="" method="post">
      <h3>お問い合わせ</h3>
      <fieldset>
        <input placeholder="お名前*" type="text" tabindex="1" required autofocus>
      </fieldset>
      <fieldset>
        <input placeholder="Emailアドレス*" type="email" tabindex="2" required>
      </fieldset>
      <fieldset>
        <input placeholder="会社名" type="com" tabindex="3" required>
      </fieldset>
      <fieldset>
        <input placeholder="ウェブサイト" type="url" tabindex="4" required>
      </fieldset>
      <fieldset>
        <textarea placeholder="お問い合わせ内容を入力してください..." tabindex="5" required></textarea>
      </fieldset>
      <fieldset>
        <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">送信</button>
      </fieldset>
    </form>
  </div>
</body>

</html>
