
      <footer class="content-info">
          <div class="bottom-footer">
        <div class="container">
        <div class="row">
          <div class="col-sm-6">
              <aside>
                  <h3>Services</h3>
                  <p>Brighton Panel Works is a prestige motor vehicle repairer of AUDI, BMW, VOLKSWAGEN, MERCEDES, PORSCHE & JAGUAR and is proud to be a Volvo authorised & recommended crash repairer too.</p>
                  <a href="http://brightonpanels.tinbotdevelopment.com/services/">Learn more</a>
              </aside>
              <?php dynamic_sidebar('sidebar-footer1'); ?>
              <aside class="footer-widget row">
                  <div class="col-md-6">
                      <img class ="img-responsive" src="<?php bloginfo('template_url'); ?>/assets/images/footer-img.png" alt="banner"/>
                  </div>
                  <div class="col-md-6">
                      <img class ="img-responsive" src="<?php bloginfo('template_url'); ?>/assets/images/footer-img1.png" alt="banner"/>
                  </div>
              </aside>
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
                  <ul class="col-sm-6 social-icons mobile-only">
                      <li><a target="_blank" href="<?php the_field('facebook_url', 'option'); ?>" class="hvr-bob"><i class="fa fa-facebook"></i></a></li>
                      <li><a target="_blank" href="<?php the_field('instagram_url', 'option'); ?>" class="hvr-bob"><i class="fa fa-instagram"></i></a></li>
                      <li><a target="_blank" href="<?php the_field('youtube_url', 'option'); ?>" class="hvr-bob"><i class="fa fa-youtube"></i></a></li>
                      <li><a target="_blank" href="<?php the_field('pinterest_url', 'option'); ?>" class="hvr-bob"><i class="fa fa-pinterest"></i></a></li>
                      <li><a target="_blank" href="<?php the_field('twitter_url', 'option'); ?>" class="hvr-bob"><i class="fa fa-twitter"></i></a></li>
                  </ul>
                  <div class="col-sm-6 footer-links clearfix">
                      <ul>
                          <li><a href="http://platformb.com.au/" target="_blank">Site By Platform B</a></li>
                          <li><a href="<?php echo home_url('/web-site-privacy-policy/');?>">Website Privacy Statement</a></li>
                          <li><a href="<?php echo home_url();?>">&copy 2016 BPW</a></li>
                      </ul>
                  </div>

              </div>
            </div>
          </div>
      </footer>
