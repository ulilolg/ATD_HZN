<footer class="footer js-footer">
  <div class="footer__inner">
    <ul class="sns-icons">
      <li class="sns-icons__item"><a href="<?php $twitter = SCF::get_option_meta( 'artist-options', 'link_twitter'); echo esc_url($twitter);?>" target="_blank" rel="noopener noreferrer"><i class="fa-brands fa-twitter"></i></a></li>
      <li class="sns-icons__item"><a href="<?php $instagram = SCF::get_option_meta( 'artist-options', 'link_instagram'); echo esc_url($instagram);?>" target="_blank" rel="noopener noreferrer"><i class="fa-brands fa-instagram"></i></a></li>
      <li class="sns-icons__item"><a href="<?php $youtube = SCF::get_option_meta( 'artist-options', 'link_youtube'); echo esc_url($youtube);?>" target="_blank" rel="noopener noreferrer"><i class="fa-brands fa-youtube"></i></a></li>
    </ul>
    <small class="footer__copy">&copy;<?php $artist = SCF::get_option_meta( 'artist-options', 'name_artist'); echo $artist;?> All Rights Reserved.</small>
  </div>
</footer>
