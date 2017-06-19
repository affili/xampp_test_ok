
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
</body>
</html>
