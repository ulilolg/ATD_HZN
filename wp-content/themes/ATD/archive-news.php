<?php get_header();?>
<?php if(have_posts()) : while(have_posts()): the_post();?>
<article class="section-box section-box--news">
  <div class="section-box__header js-section-box__header">
    <h1 class="section-box__article-title"><?php the_title(); ?></h1>
    <p class="section-box__date"><?php the_time('Y/m/d'); ?></p>
    <i class="section-box__icon js-section-box__icon"></i>
  </div>
  <section class="section-box__content js-section-box__content">
    <?php the_content(); ?>
  </section>
</article>
<?php endwhile; else :?>
<div class="section-box">
  <div class="section-box__content section-box__content--fix js-section-box__content">
    <p>現在お知らせ情報はありません。<br />情報の更新をお待ちください。</p>
    <div class="c-btn-wrap"><a href="<?php echo esc_url(home_url(''));?>" class="c-btn">トップページへ戻る</a></div>
  </div>
</div>
<?php endif; ?>
<?php include("includes/inc_pager.php");?>
<?php get_footer();?>
