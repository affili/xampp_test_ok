
<!-- Footer -->
    <footer>
      <div id="footer-menu">
        <div class="footer-about">
          <h3>About us</h3>
          <?php wp_nav_menu( array ( 'theme_location' => 'footer_memu' ) ); ?>
        </div>
        <div class="footer-category">
          <h4>商品カテゴリー</h4>
          <?php wp_nav_menu( array ( 'theme_location' => 'footer_memu2' ) ); ?>
        </div>
      </div>
    </footer>

    <script>
  $(function() {
  var getWindowMovieHeight = function() {
    // ここでブラウザの縦横のサイズを取得します。
    var windowSizeHeight = $(window).outerHeight();
    var windowSizeWidth = $(window).outerWidth();

    // メディアの縦横比に合わせて数値は変更して下さい。(メディアのサイズが width < heightの場合で書いています。逆の場合は演算子を逆にしてください。)
    var windowMovieSizeWidth = windowSizeHeight * 1.76388889;
    var windowMovieSizeHeight = windowSizeWidth / 1.76388889;
    var windowMovieSizeWidthLeftMargin = (windowMovieSizeWidth - windowSizeWidth) / 2;

  // 以下画面の可変にも対応できるように。
  $(window).on('load', function(){
    getWindowMovieHeight();
  });

  $(window).on('resize', function(){
    getWindowMovieHeight();
  });
});
});

</script>
</body>
</html>
