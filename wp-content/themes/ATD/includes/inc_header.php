<header class="header js-header">
  <div class="header__inner">
    <h1 class="header__logo"><a href="<?php echo esc_url(home_url(''));?>"><figure><img src="<?php $header_logo = SCF::get_option_meta( 'artist-options', 'header_logo'); echo esc_url(wp_get_attachment_url($header_logo));?>" alt="" /></figure></a></h1>
    <div class="header__hamburger js-header__hamburger"><i></i><i></i><i></i></div>
    <div class="header__navigation js-header__navigation">
      <ul class="navigation">
        <li class="navigation__item"><a href="<?php echo esc_url(home_url('disc'));?>">DISC</a></li>
        <li class="navigation__item"><a href="<?php echo esc_url(home_url('video'));?>">VIDEO</a></li>
        <li class="navigation__item"><a href="<?php echo esc_url(home_url('news'));?>">NEWS</a></li>
        <li class="navigation__item"><a href="<?php echo esc_url(home_url('live'));?>">LIVE</a></li>
        <li class="navigation__item"><a href="<?php echo esc_url(home_url('contact'));?>">CONTACT</a></li>
      </ul>
    </div>
  </div>
</header>