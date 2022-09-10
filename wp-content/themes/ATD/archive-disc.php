<?php get_header();?>
<?php if(have_posts()) : while(have_posts()): the_post();?>
<section class="section-box section-box--disc">
  <div class="section-box__header js-section-box__header">
    <h2 class="section-box__title"><?php the_title(); ?></h2>
    <i class="section-box__icon js-section-box__icon"></i>
  </div>
  <div class="section-box__content js-section-box__content"><?php the_content(); ?></div>
  <figure class="disc-img"><img src="<?php $disc = SCF::get('img_jacket'); echo esc_url(wp_get_attachment_url($disc));?>" alt="" /></figure>
</section>
<?php endwhile; else :?>
<div class="section-box">
  <div class="section-box__content section-box__content--fix js-section-box__content">
    <p>現在CDリリース情報はありません。<br />情報の更新をお待ちください。</p>
    <div class="c-btn-wrap"><a href="<?php echo esc_url(home_url(''));?>" class="c-btn">トップページへ戻る</a></div>
  </div>
</div>
<?php endif; ?>
<?php include("includes/inc_pager.php");?>
<?php get_footer();?>
