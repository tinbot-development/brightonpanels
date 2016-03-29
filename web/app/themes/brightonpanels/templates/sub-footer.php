<?php if ( is_page('home')) : ?>
<div class="quality-bg">
  <div class="container">
    <div class="row">
      <div class="col-sm-8">
        <h1>Quality Assurance Guarantee</h1>
      </div>
      <div class="col-sm-4 logo-warranty">
        <img class="img-responsive" src="<?php bloginfo('template_url'); ?>/assets/images/logo.png" alt="banner"/>
      </div>
    </div>
  </div>
</div>
<?php else: ?>
  <div class="quality-bg">
    <div class="container">
      <div class="row">
        <div class="col-sm-8">
          <h1>Quality Assurance Guarantee</h1>
        </div>
        <div class="col-sm-4 logo-warranty">
          <img class="img-responsive" src="<?php bloginfo('template_url'); ?>/assets/images/logo.png" alt="banner"/>
        </div>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row logo-padding">
      <div class="col-xs-12 col-sm-6 col-md-6">
        <img class="img-responsive" src="<?php bloginfo('template_url'); ?>/assets/images/repair-logo.png" alt="logo">
      </div>
      <div class="col-xs-12 col-sm-6 col-md-6 table-padding">
        <table>
          <tr>
            <td>
              <img class="img-responsive" src="<?php bloginfo('template_url'); ?>/assets/images/logo-img1.png" alt="logo">
            </td>
            <td>
              <img class="img-responsive" src="<?php bloginfo('template_url'); ?>/assets/images/logo-img2.png" alt="logo">
            </td>
            <td>
              <img class="img-responsive" src="<?php bloginfo('template_url'); ?>/assets/images/logo-img3.png" alt="logo">
            </td>
            <td>
              <img class="img-responsive" src="<?php bloginfo('template_url'); ?>/assets/images/logo-img4.png" alt="logo">
            </td>
          </tr>
        </table>
        <table>
          <tr>
            <td>
              <img class="img-responsive" src="<?php bloginfo('template_url'); ?>/assets/images/logo-img5.png" alt="logo">
            </td>
            <td>
              <img class="img-responsive" src="<?php bloginfo('template_url'); ?>/assets/images/logo-img6.png" alt="logo">
            </td>
            <td>
              <img class="img-responsive" src="<?php bloginfo('template_url'); ?>/assets/images/logo-img7.png" alt="logo">
            </td>
            <td>
              <img class="img-responsive" src="<?php bloginfo('template_url'); ?>/assets/images/logo-img8.png" alt="logo">
            </td>
          </tr>
        </table>

      </div>
    </div>
  </div>
<?php endif; ?>
