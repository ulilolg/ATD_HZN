<?php
/* カスタムフィールドの管理
---------------------------------------------------------- */
// 'type'        => 'text', //*タイプ
// 'name'        => 'name', //*名前
// 'label'       => 'label', //ラベル
// 'default'     => 'default', //デフォルト
// 'instruction' => 'instruction', //説明文
// 'notes'       => 'notes', //注記
add_filter( 'smart-cf-register-fields','my_smart_cf_register_fields',10,4);
function my_smart_cf_register_fields($settings, $type, $id, $meta_type) {
  // option カスタムフィールド
  if($type == 'artist-options') {
    $mySettings = SCF::add_setting(
      'artist_field',
      'アーティスト情報の設定項目'
    );
    // アーティスト名
    $mySettings->add_group(
      'name',false,
      array(
        array(
          'type' => 'text',
          'name' => 'name_artist',
          'label' => 'アーティスト名'
        ),
      )
    );
    // Twitter
    $mySettings->add_group(
      'twiter',false,
      array(
        array(
          'type' => 'text',
          'name' => 'link_twitter',
          'label' => 'URL - Twitter',
          'default' => 'https://twitter.com/'
        ),
      )
    );
    // Instagram
    $mySettings->add_group(
      'instagram',false,
      array(
        array(
          'type' => 'text',
          'name' => 'link_instagram',
          'label' => 'URL - Instagram',
          'default' => 'https://instagram.com/'
        ),
      )
    );
    // YouTube
    $mySettings->add_group(
      'youtube',false,
      array(
        array(
          'type' => 'text',
          'name' => 'link_youtube',
          'label' => 'URL - YouTube',
          'default' => 'https://youtube.com/'
        ),
      )
    );
    // ヘッダーロゴ
    $mySettings->add_group(
      'header',false,
      array(
        array(
          'type' => 'image',
          'name' => 'header_logo',
          'label' => 'ヘッダーロゴ',
          'size' => 'full'
        ),
      )
    );
    // ローディングロゴ
    $mySettings->add_group(
      'loading',false,
      array(
        array(
          'type' => 'image',
          'name' => 'loading_logo',
          'label' => 'ローディングロゴ',
          'size' => 'full',
        ),
      )
    );
    // 背景動画
    $mySettings->add_group(
      'bg',false,
      array(
        array(
          'type' => 'text',
          'name' => 'video_bg',
          'label' => '背景動画',
          'default' => '/wp-content/uploads/',
          'notes' => 'yyyy/mm/filename.mp4'
        ),
      )
    );
    // OGP
    $mySettings->add_group(
      'ogp',false,
      array(
        array(
          'type' => 'image',
          'name' => 'img_ogp',
          'label' => 'OGP画像',
          'size' => 'full'
        ),
      )
    );
    // ファビコン
    $mySettings->add_group(
      'favicon',false,
      array(
        array(
          'type' => 'image',
          'name' => 'img_favicon',
          'label' => 'ファビコン画像',
          'size' => 'full',
        ),
      )
    );
    // アイコン
    $mySettings->add_group(
      'icon',false,
      array(
        array(
          'type' => 'image',
          'name' => 'img_icon',
          'label' => 'アイコン画像',
          'size' => 'full'
        ),
      )
    );
    $settings[] = $mySettings;
  }

  // disc カスタムフィールド
  if($type == 'disc') {
    $mySettings = SCF::add_setting(
      'disc_field',
      'ジャケット画像の設定項目'
    );
    // ジャケ写
    $mySettings->add_group(
      'jacket',false,
      array(
        array(
          'type' => 'image',
          'name' => 'img_jacket',
          'label' => 'ジャケット画像の追加',
          'size' => 'full'
        ),
      )
    );
    $settings[] = $mySettings;
  }

  // video カスタムフィールド
  if($type == 'video') {
    $mySettings = SCF::add_setting(
      'video_field',
      'サムネイル画像の設定項目'
    );
    // thumbnail
    $mySettings->add_group(
      'thumbnail',false,
      array(
        array(
          'type' => 'image',
          'name' => 'img_thumbnail',
          'label' => 'サムネイル画像の追加',
          'size' => 'full'
        ),
      )
    );
    $settings[] = $mySettings;
  }

  // live カスタムフィールド
  if($type == 'live') {
    $mySettings = SCF::add_setting(
      'live_field',
      'ライブ情報の設定項目'
    );
    // 開催日
    $mySettings->add_group(
      'date',false,
      array(
        array(
          'type' => 'text',
          'name' => 'date_live_list',
          'label' => '開催日',
          'instruction' => '※必須',
          'notes' => 'yyyy/mm/dd'
        ),
      )
    );
    // 会場
    $mySettings->add_group(
      'place',false,
      array(
        array(
          'type' => 'text',
          'name' => 'place_live_list',
          'label' => '会場'
        ),
      )
    );
    // 開始
    $mySettings->add_group(
      'start',false,
      array(
        array(
          'type' => 'text',
          'name' => 'start_live_list',
          'label' => '開始'
        ),
      )
    );
    // 料金
    $mySettings->add_group(
      'fee',false,
      array(
        array(
          'type' => 'text',
          'name' => 'fee_live_list',
          'label' => '料金'
        ),
      )
    );
    // 出演
    $mySettings->add_group(
      'artist',false,
      array(
        array(
          'type' => 'textarea',
          'name' => 'artist_live_list',
          'label' => '出演',
          'rows' => 6
        ),
      )
    );
    // 備考
    $mySettings->add_group(
      'other',false,
      array(
        array(
          'type' => 'text',
          'name' => 'other_live_list',
          'label' => '備考'
        ),
      )
    );
    // ボタンリンク
    $mySettings->add_group(
      'link_list_btn',true,
      array(
        array(
          'type' => 'text',
          'name' => 'text_link_list_btn',
          'label' => 'リンクボタン - テキスト'
        ),
        array(
          'type' => 'text',
          'name' => 'url_link_list_btn',
          'label' => 'リンクボタン - リンク'
        ),
      )
    );
    // フライヤー
    $mySettings->add_group(
      'flyer',true,
      array(
        array(
          'type' => 'text',
          'name' => 'size_flyer',
          'label' => 'フライヤー - サイズ',
          'notes' => ' "c-img c-img--half" / "c-img"'
        ),
        array(
          'type' => 'image',
          'name' => 'img_flyer',
          'label' => 'フライヤー - 画像',
          'size' => 'full'
        ),
      )
    );
    $settings[] = $mySettings;
  }
  return $settings;
}