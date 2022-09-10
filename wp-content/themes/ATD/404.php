<?php get_header();?>
<section class="section-box">
  <div class="section-box__content section-box__content--fix js-section-box__content">
    <h2>404 NOT FOUND</h2>
    <p>お探しのページが見つかりませんでした。</p>
    <p>以下のいずれかの理由が考えられます。直接アドレスを入力された場合は、アドレスが正しく入力されているかもう一度ご確認下さい。</p>
    <ul class="c-list c-list--default">
      <li class="c-list-item">ページのURLが間違っている</li>
      <li class="c-list-item">ページのURLが変更されている</li>
      <li class="c-list-item">ページの掲載を終了した</li>
    </ul>
    <p>ブラウザの再読込みを行ってもこのページが表示される場合は、トップページに戻り、目的のページをお探しください。</p>
    <div class="c-btn-wrap"><a href="<?php echo esc_url(home_url(''));?>" class="c-btn">トップページへ戻る</a></div>
  </div>
</section>
<?php get_footer();?>