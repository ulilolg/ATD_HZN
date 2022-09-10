<?php get_header();?>
<article class="section-box section-box--news">
  <div class="section-box__header js-section-box__header">
    <h1 class="section-box__article-title"><?php the_title(); ?></h1>
    <p class="section-box__date"><?php the_time('Y/m/d'); ?></p>
  </div>
  <section class="section-box__content section-box__content--fix"><?php the_content(); ?></section>
</article>
<?php get_footer();?>
