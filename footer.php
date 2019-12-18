<footer class="footer">
  <div class="columns">
    <div class="column">
       <strong>ygarden</strong>
    </div>

    <div class="column">
      <nav class="nav-list">
        <?php 
          wp_nav_menu(array(
            'theme_location' => 'footerLocationOne'
          ));
        ?>
        </nav>
    </div>

    <div class="column">
      <nav class="nav-list">
          <?php 
            wp_nav_menu(array(
              'theme_location' => 'footerLocationTwo'
            ));
          ?>
        </nav>
    </div>

  </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>