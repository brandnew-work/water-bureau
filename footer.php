    <footer class="footer">
      <div class="inner">
        <div class="footer__logo">
          <a href="<?= home_url() ?>">
            <img src="<?= get_theme_file_uri('assets/') ?>" alt="{sitename}" class="footer__logo-img" width="" height="">
          </a>
        </div>
        <?php wp_nav_menu(
          [
            'menu'            => 'footer-nav',
            'container'       => 'nav',
            'container_class' => 'footer-nav',
            'menu_class'      => 'footer-nav__list',
          ]);
        ?>
        <div class="footer__copy">
          <small class="footer__copy-text">Copyright © {sitename} All Rights Reserved.</small>
        </div>
      </div>
    </footer>
    <?php wp_footer(); ?>
  </body>
</html>