<?php

/**
 * Template Name: システム
 * @package WordPress
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <?php get_header(); ?>
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/scss/system.css">
</head>

<body>
  <!-- header -->
  <header>
    <?php
      get_template_part('includes/header');
      get_template_part('includes/top-bar');
    ?>
    <img src="<?php echo get_template_directory_uri(); ?>/img/section.jpg" alt="" class="header__wrapper-main-img-sp">
  </header>

  <div class="inner">

    <!-- Charging System -->
    <section class="system">
      <div class="wrap">
        <img src="<?php echo get_template_directory_uri(); ?>/img/title-item01.png" alt="">
        <p class="wrap-ttl">SYSTEM</p>
        <img src="<?php echo get_template_directory_uri(); ?>/img/title-item02.png" alt="">
      </div>
      <img src="<?php echo get_template_directory_uri(); ?>/img/system_img.png" alt="">
      <div class="btn">
        <p class="btn__text"><a href="<?php echo get_template_directory_uri(); ?>/img/w-system.png">システムの詳しいご案内</a></p>
        <p class="triangle-line"></p>
      </div>
      <div class="system__banner">
        <a href="/woman-system/">
          <img src="<?php echo get_template_directory_uri(); ?>/img/woman-banner.jpg" alt="">
        </a>
      </div>
    </section>

    <section class="step">
      <div class="wrap">
        <img src="<?php echo get_template_directory_uri(); ?>/img/title-item01.png" alt="">
        <p class="wrap-ttl">STEP</p>
        <img src="<?php echo get_template_directory_uri(); ?>/img/title-item02.png" alt="">
      </div>
      <div class="step__container">
        <div class="step__container-content">
          <p class="step__container-content-item">1</p>
          <p class="step__container-content-text">
            女性は有料Food、Drink、チャージ以外<br class="section">
            全て無料<br class="section">
            男性は10分毎の課金となり、<br class="section">
            お客様自身で滞在時間を調整できます。<br class="section">
            チャージは男女とも会員登録で無料となります。<br class="section">
            お席までご案内し、システムの説明を致します。
          </p>
          <div class="line"></div>
        </div>
        <div class="step__container-content">
          <p class="step__container-content-item">2</p>
          <p class="step__container-content-text">
            入店・着席後、ご注文が終わりましたら、<br class="section">
            相席する異性の方をご案内致します。<br class="section">
            ※混雑状況によっては<br class="section">
            入店時に直接相席となる場合がございます。
          </p>
          <div class="line"></div>
        </div>
        <div class="step__container-content">
          <p class="step__container-content-item">3</p>
          <p class="step__container-content-text">
            相席が始まり次第、<br class="section">
            相席料金が自動的スタートします。<br class="section">
            相席を心ゆくまでお楽しみ下さい。
          </p>
          <div class="line"></div>
        </div>
        <div class="step__container-content">
          <p class="step__container-content-item">4</p>
          <p class="step__container-content-text">
            連絡先の交換等はお客様の自由となります。<br class="section">
            新しい出会いに満足頂けましたら、<br class="section">
            最後にお会計をお願い致します。
          </p>
        </div>
      </div>
    </section>

    <section class="question">
      <div class="wrap">
        <img src="<?php echo get_template_directory_uri(); ?>/img/title-item01.png" alt="">
        <p class="wrap-ttl">Q&A</p>
        <img src="<?php echo get_template_directory_uri(); ?>/img/title-item02.png" alt="">
      </div>
      <div class="accordion_area gutter">
        <div class="accordion_one">
          <div class="ac_header">
            <div class="p-faq__headinner">
              <p class="p-faq__q-txt">ひとりでも入店できますか？</p>
            </div>
            <div class="i_box"></div>
          </div>
          <div class="ac_inner">
            <div class="p-faq__bodyinner">
              <p class="p-faq__a-txt">当店では2名様以上での入店をお願いしております。</p>
            </div>
          </div>
        </div>
        <div class="accordion_one">
          <div class="ac_header">
            <div class="p-faq__headinner">
              <p class="p-faq__q-txt">IDチェックはありますか？</p>
            </div>
            <div class="i_box"></div>
          </div>
          <div class="ac_inner">
            <div class="p-faq__bodyinner">
              <p class="p-faq__a-txt">当店では20歳未満の方の御入店はお断りしています。入店時に皆様の身分証明書のご提示をお願いしていますので、お忘れなくお越しください。</p>
            </div>
          </div>
        </div>
        <div class="accordion_one">
          <div class="ac_header">
            <div class="p-faq__headinner">
              <p class="p-faq__q-txt">服装に制限はありますか？</p>
            </div>
            <div class="i_box"></div>
          </div>
          <div class="ac_inner">
            <div class="p-faq__bodyinner">
              <p class="p-faq__a-txt">当店ではドレスコードを設けさせていただいております。サンダルやクロックス、ジャージでのご入店は一切お断りさせていただいております。</p>
            </div>
          </div>
        </div>
        <div class="accordion_one">
          <div class="ac_header">
            <div class="p-faq__headinner">
              <p class="p-faq__q-txt">予約はできますか？</p>
            </div>
            <div class="i_box"></div>
          </div>
          <div class="ac_inner">
            <div class="p-faq__bodyinner">
              <p class="p-faq__a-txt">当店では予約を受け付けておりません。お席には限りがございますのでお早めにご来店ください。</p>
            </div>
          </div>
        </div>
      </div>
      <p class="question__men">FOR MEN</p>
      <div class="accordion_area gutter">
        <div class="accordion_one">
          <div class="ac_header">
            <div class="p-faq__headinner">
              <p class="p-faq__q-txt">相席相手の指名はできますか？</p>
            </div>
            <div class="i_box"></div>
          </div>
          <div class="ac_inner">
            <div class="p-faq__bodyinner">
              <p class="p-faq__a-txt">なるべくご希望に添えられるよう努めてまいりますが、皆様に相席を楽しんでいただくために指名制度は設けておりません。</p>
            </div>
          </div>
        </div>
        <div class="accordion_one">
          <div class="ac_header">
            <div class="p-faq__headinner">
              <p class="p-faq__q-txt">男性に向けた特典はありますか？</p>
            </div>
            <div class="i_box"></div>
          </div>
          <div class="ac_inner">
            <div class="p-faq__bodyinner">
              <p class="p-faq__a-txt">当店の公式LINEの登録でチャージ料金が無料になるほか、カラオケ付きVIPルームの完備や有料ドリンクの無料キャンペーンなど快適に過ごしていただくサービス提供をしております。</p>
            </div>
          </div>
        </div>
      </div>
      <p class="question__woman">FOR WOMEN</p>
      <div class="accordion_area gutter">
        <div class="accordion_one">
          <div class="ac_header">
            <div class="p-faq__headinner">
              <p class="p-faq__q-txt">女性からでも相席の変更が可能ですか？</p>
            </div>
            <div class="i_box"></div>
          </div>
          <div class="ac_inner">
            <div class="p-faq__bodyinner">
              <p class="p-faq__a-txt">当店では男性女性共に相席の変更が可能です。スタッフにお気軽にお申し付け下さい。</p>
            </div>
          </div>
        </div>
        <div class="accordion_one">
          <div class="ac_header">
            <div class="p-faq__headinner">
              <p class="p-faq__q-txt">日によってイベントや特典はありますか？</p>
            </div>
            <div class="i_box"></div>
          </div>
          <div class="ac_inner">
            <div class="p-faq__bodyinner">
              <p class="p-faq__a-txt">当店ではポイントによって交換できる景品の他に、ケーキイベントや抽選会などのイベントを実施しております。SNSや来店時でのお声がけで告知していきます。</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- store -->
    <section class="store">
      <div class="wrap">
        <img src="<?php echo get_template_directory_uri(); ?>/img/title-item01.png" alt="">
        <p class="wrap-ttl">店舗</p>
        <img src="<?php echo get_template_directory_uri(); ?>/img/title-item02.png" alt="">
      </div>
      <div class="store__container">
        <div class="store__container-shop">
          <div class="store__container-shop-items">
            <p>渋谷</p>
            <div class="center-line"></div>
            <p class="store__container-shop-items-txts">SHIBUYA</p>
          </div>
        </div>
        <div class="btn">
          <p class="btn__text"><a href="/page-store/">店舗詳細</a></p>
          <p class="triangle-line"></p>
        </div>
      </div>
    </section>

    <!-- Guest Counter -->
    <?php get_template_part('includes/guest-counter'); ?>

    <!-- 相席連盟 -->
    <?php get_template_part('includes/association'); ?>

  </div>
  <?php get_footer(); ?>
</body>

</html>