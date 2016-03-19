
      <footer class="content-info">
          <div class="bottom-footer">
        <div class="container">
        <div class="row">
          <div class="col-sm-6">
              <table>
                <tr>
                  <td>
                    <h3>Services</h3>
                    <nav>
                    <?php
                    if (has_nav_menu('services_navigation')) :
                    wp_nav_menu(['theme_location' => 'services_navigation', 'menu_class' => 'nav']);
                    endif;
                    ?>
                  </nav>
                  </td>
                  <td>
                    <h3>About Us</h3>
                    <nav>
                      <?php
                      if (has_nav_menu('about_navigation')) :
                      wp_nav_menu(['theme_location' => 'about_navigation', 'menu_class' => 'nav']);
                      endif;
                      ?>
                    </nav>
                  </td>
                </tr>
              </table>
              <table>
                <tr>
                  <td>
                      <?php dynamic_sidebar('sidebar-footer1'); ?>
                  </td>
                </tr>
              </table>
              <table>
                <tr>
                  <td>
                    <img class ="img-responsive" src="<?php bloginfo('template_url'); ?>/assets/images/footer-img.png" alt="banner"/>
                  </td>
                  <td>
                    <img class ="img-responsive" src="<?php bloginfo('template_url'); ?>/assets/images/footer-img1.png" alt="banner"/>
                  </td>
                </tr>
              </table>

          </div>
          <div class="col-sm-6">
              <?php dynamic_sidebar('sidebar-footer2'); ?>
          </div>
        </div>
        </div>
          </div>
          <div class="bottom-bg">
            <div class="container">
              <div class="row">
                  <div class="col-sm-12 footer-nav">
                    <nav>
                      <ul>
                        <li><a href="#">@ 2016 BPW</a></li>
                        <li><a href="#">Website Privacy Statement</a></li>
                        <li><a href="#">Site By PlanB</a></li>
                      </ul>
                    </nav>
                  </div>

              </div>
            </div>
          </div>
      </footer>
