<?php get_header();?>
<?php if(have_posts()) : while(have_posts()): the_post();?>
<article class="section-box section-box--live">
  <div class="section-box__header js-section-box__header">
    <h1 class="section-box__article-title"><?php the_title(); ?></h1>
    <p class="section-box__date"><?php $date = SCF::get('date_live_list'); echo $date?></p>
    <i class="section-box__icon js-section-box__icon"></i>
  </div>
  <div class="section-box__content js-section-box__content">
    <ul class="live-list">
      <li class="live-list-item live-list-item--date"><?php echo $date?></li>
      <?php $place = SCF::get('place_live_list'); if(!empty($place)) { ?><li class="live-list-item live-list-item--place"><?php echo $place?></li><?php }?>
      <?php $start = SCF::get('start_live_list'); if(!empty($start)) { ?><li class="live-list-item live-list-item--start"><?php echo $start?></li><?php }?>
      <?php $fee = SCF::get('fee_live_list'); if(!empty($fee)) { ?><li class="live-list-item live-list-item--fee"><?php echo $fee?></li><?php }?>
      <?php $artist = SCF::get('artist_live_list'); if(!empty($artist)) { ?><li class="live-list-item live-list-item--artist"><?php echo $artist?></li><?php }?>
      <?php $other = SCF::get('other_live_list'); if(!empty($other)) { ?><li class="live-list-item live-list-item--other"><?php echo $other?></li><?php }?>
    </ul>
    <?php $flyer_group = SCF::get('flyer'); $flyer_img = ('img_flyer'); $flyer_size = ('size_flyer'); if(!empty( $flyer_group[0][$flyer_img])) { foreach ($flyer_group as $fields) {?>
    <figure class="<?php echo esc_attr($fields[$flyer_size]);?>"><img src="<?php echo esc_url(wp_get_attachment_url($fields[$flyer_img])); ?>" alt="" /></figure>
    <?php }} ?>
    <?php $btn_group= SCF::get('link_list_btn'); $btn_text = 'text_link_list_btn'; $btn_url = 'url_link_list_btn'; if(!empty( $btn_group[0][$btn_text])) {?>
    <ul class="c-btn-list">
      <?php foreach ($btn_group as $fields) {?>
        <li class="c-btn-list-item"><a href="<?php echo esc_url($fields[$btn_url]);?>" class="c-btn" target="_blank" rel="noopener noreferrer"><?php echo $fields[$btn_text];?></a></li>
      <?php }?>
    </ul>
    <?php }?>
  </div>
</article>
<?php endwhile; else :?>
<div class="section-box">
  <div class="section-box__content section-box__content--fix js-section-box__content">
    <p>現在ライブ情報はありません。<br />情報の更新をお待ちください。</p>
    <div class="c-btn-wrap"><a href="<?php echo esc_url(home_url(''));?>" class="c-btn">トップページへ戻る</a></div>
  </div>
</div>
<?php endif; ?>
<?php include("includes/inc_pager.php");?>
<?php get_footer();?>
