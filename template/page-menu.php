<?php

/**
 * Template Name: メニュー
 * @package WordPress
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <?php get_header(); ?>
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/scss/menu.css">
</head>

<body>
  <!-- header -->
  <header>
    <?php
      get_template_part('includes/header');
      get_template_part('includes/top-bar');
    ?>
    <img src="<?php echo get_template_directory_uri(); ?>/img/menu-main.jpg" alt="" class="header__wrapper-main-img-sp">
  </header>

  <div class="inner">

    <section class="food">
      <div class="wrap">
        <img src="<?php echo get_template_directory_uri(); ?>/img/title-item01.png" alt="">
        <p class="wrap-ttl">FOOD</p>
        <img src="<?php echo get_template_directory_uri(); ?>/img/title-item02.png" alt="">
      </div>
      <div class="food__container">
        <!-- スライダーセクション -->
        <div class="sliderArea">
          <ul class="full-screen-o slider">
            <li><img src="<?php echo get_template_directory_uri(); ?>/img/food-slider01.png" alt=""></li>
            <li><img src="<?php echo get_template_directory_uri(); ?>/img/food-slider02.png" alt=""></li>
          </ul>
        </div>
        <p>
          シェフ考案の本格料理が楽しめます。<br class="section">
          女性に人気のメニューから厳選！<br class="section">
          会員登録で女性はお一人2品まで無料♪
        </p>
      </div>
    </section>

    <section class="drink">
      <div class="wrap">
        <img src="<?php echo get_template_directory_uri(); ?>/img/title-item01.png" alt="">
        <p class="wrap-ttl">DRINK</p>
        <img src="<?php echo get_template_directory_uri(); ?>/img/title-item02.png" alt="">
      </div>
      <div class="drink__container">
        <div class="drink__container-content">
          <div class="drink__container-content-box">
            <img src="<?php echo get_template_directory_uri(); ?>/img/kobe-drink01.png" alt="">
            <div class="drink__container-content-box-item">
              <img src="<?php echo get_template_directory_uri(); ?>/img/menu-item02.png" alt="">
              <p class="drink-title">ビール</p>
              <img src="<?php echo get_template_directory_uri(); ?>/img/menu-item02.png" alt="">
            </div>
            <p class="drink-text">ビール瓶からカクテル瓶などを<br class="section">豊富に品揃えしています。<br class="section">瓶ビールだけではなく<br class="section">生ビールもご用意しております。</p>
          </div>
          <div class="drink__container-content-box">
            <img src="<?php echo get_template_directory_uri(); ?>/img/kobe-drink02.png" alt="">
            <div class="drink__container-content-box-item">
              <img src="<?php echo get_template_directory_uri(); ?>/img/menu-item02.png" alt="">
              <p class="drink-title">カクテル</p>
              <img src="<?php echo get_template_directory_uri(); ?>/img/menu-item02.png" alt="">
            </div>
            <p class="drink-text">こだわりのリキュールを使用した<br class="section">カクテルは200種類以上。こだわりのノンアルカクテルもご用意しております。</p>
          </div>
          <div class="drink__container-content-box">
            <img src="<?php echo get_template_directory_uri(); ?>/img/kobe-drink03.png" alt="">
            <div class="drink__container-content-box-item">
              <img src="<?php echo get_template_directory_uri(); ?>/img/menu-item02.png" alt="">
              <p class="drink-title">サワー</p>
              <img src="<?php echo get_template_directory_uri(); ?>/img/menu-item02.png" alt="">
            </div>
            <p class="drink-text">シロップを豊富に揃えて<br class="section">おりますので<br class="section">男性や女性に人気のサワーも<br class="section">たくさん置いております。</p>
          </div>
          <div class="drink__container-content-box">
            <img src="<?php echo get_template_directory_uri(); ?>/img/kobe-drink04.png" alt="">
            <div class="drink__container-content-box-item">
              <img src="<?php echo get_template_directory_uri(); ?>/img/menu-item02.png" alt="">
              <p class="drink-title">ワイン</p>
              <img src="<?php echo get_template_directory_uri(); ?>/img/menu-item02.png" alt="">
            </div>
            <p class="drink-text">ボトルでご注文、<br class="section">グラスのご注文、<br class="section">両方対応できますので、<br class="section">お気軽にお申し付けください。</p>
          </div>
          <div class="drink__container-content-box">
            <img src="<?php echo get_template_directory_uri(); ?>/img/kobe-drink05.png" alt="">
            <div class="drink__container-content-box-item">
              <img src="<?php echo get_template_directory_uri(); ?>/img/menu-item02.png" alt="">
              <p class="drink-title">ショット</p>
              <img src="<?php echo get_template_directory_uri(); ?>/img/menu-item02.png" alt="">
            </div>
            <p class="drink-text">ショットで楽しめるお酒を豊富に<br class="section">ご用意しておりますので、<br class="section">楽しみたいときやゲームをする時に<br class="section">ぴったりです。相席相手と<br class="section">仲良くなれること間違いなし。</p>
          </div>
          <div class="drink__container-content-box">
            <img src="<?php echo get_template_directory_uri(); ?>/img/kobe-drink06.png" alt="">
            <div class="drink__container-content-box-item">
              <img src="<?php echo get_template_directory_uri(); ?>/img/menu-item02.png" alt="">
              <p class="drink-title">シャンパン</p>
              <img src="<?php echo get_template_directory_uri(); ?>/img/menu-item02.png" alt="">
            </div>
            <p class="drink-text">お客様が当店で楽しんで<br class="section">いただくために<br class="section">お手軽なものから<br class="section">豊富に準備しております。</p>
          </div>
        </div>
      </div>
    </section>

    <!-- <section class="other">
      <div class="wrap">
        <img src="<?php echo get_template_directory_uri(); ?>/img/title-item01.png" alt="">
        <p class="wrap-ttl">OTHER</p>
        <img src="<?php echo get_template_directory_uri(); ?>/img/title-item02.png" alt="">
      </div>
      <div class="other__container">
        <div class="other__contaienr-content">
          <img src="" alt="">
          <img src="" alt="">
          <img src="" alt="">
        </div>
        <p>当店では初めてお会いした異性と<br class="section">
          楽しく時間を過ごせるよう<br class="section">
          お助けアイテムを様々ご用意しております。<br class="section">
          もちろん全て無料です！<br class="section">
          ゲームで仲良くなれること間違いなし。</p>
      </div>
    </section> -->

    <section class="store">
      <div class="wrap">
        <img src="<?php echo get_template_directory_uri(); ?>/img/title-item01.png" alt="">
        <p class="wrap-ttl">STORE</p>
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