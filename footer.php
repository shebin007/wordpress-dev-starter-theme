</main>



<footer>
    <div class="container">
      <div class="footer-container">
          <div class="footer-nav-container">
              
            <h4><?= wp_get_nav_menu_name( 'footer_menu_1' ) ?></h4>
            <?php
                $args = array(
                'container' => 'ul',
                'menu_class' => 'footer-navs',
                'theme_location'  => 'footer_menu_1',
                );
                wp_nav_menu( $args );
            ?>
          
          </div>
          <div class="footer-nav-container">
            <h4><?= wp_get_nav_menu_name( 'footer_menu_2' ) ?></h4>
            <?php
                $args = array(
                'container' => 'ul',
                'menu_class' => 'footer-navs',
                'theme_location'  => 'footer_menu_2',
                );
                wp_nav_menu( $args );
            ?>
       
          </div>
          <div class="footer-nav-container">
            <h4><?= wp_get_nav_menu_name( 'footer_menu_3' ) ?></h4>
            <?php
                $args = array(
                'container' => 'ul',
                'menu_class' => 'footer-navs',
                'theme_location'  => 'footer_menu_3',
                );
                wp_nav_menu( $args );
            ?>
         
          </div>
          <div class="footer-nav-container">
            <h4>NEWSLETTER</h4>
            <form action="" method="POST" class="news-letter">
              <input type="email" name="email" id="email" placeholder="Email address" />
              <button type="submit">Sign Up</button>
            </form>
            
          </div>
          <a  class="scrolltop" href="#">BACK TO TOP</a>
      </div>
     
    </div>
    <div class="footer-copy">
      <div class="container">
        <div class="d-flex justify-content-between flex-wrap">
          <p class="copy-right">
            © <?= date("Y") ?> ALL RIGHTS RESERVED
          </p>
          <?php
                $args = array(
                'container' => 'ul',
                'menu_class' => 'copy-link-section',
                'theme_location'  => 'footer_menu_4',
                );
                wp_nav_menu( $args );
            ?>
       
        </div>
       
      </div>
     
    </div>
  </footer>

<?php wp_footer(); ?>
</body>
</html>
