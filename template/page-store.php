<?php

/**
 * Template Name: 店舗ページ
 * @package WordPress
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <?php get_header(); ?>
  <title>渋谷 SHIBUYA</title>
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/scss/store.css">
</head>

<body id="store_shop">
  <!-- header -->
  <header>
    <?php get_template_part('includes/header'); ?>
    <div class="header">
      <div class="header__wrapper">
        <a href="/front-page/">
          <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="ロゴ" class="logo">
        </a>
        <p>渋谷　SHIBUYA</p>
      </div>
    </div>
    <img src="<?php echo get_template_directory_uri(); ?>/img/shibuya-maintop.png" alt="" class="header__wrapper-main-img-sp">
  </header>

  <div class="inner">
    <section class="count">
      <p>Visitor</p>
      <p class="time">
        <?php
        //タイムゾーン指定
        date_default_timezone_set('Asia/Tokyo');
        echo date('H:i');
        ?>
      </p>
      <!-- Guest Counter (Core) -->
      <?php get_template_part('includes/guest-counter-core'); ?>

      <div class="count__bottom">
        <div class="count__bottom-item">
          <a href="tel:">
            <img src="<?php echo get_template_directory_uri(); ?>/img/call.png" alt="">
            <p>03-6427-0919</p>
          </a>
        </div>
        <div class="count__bottom-item">
          <a href="https://goo.gl/maps/NYHdBaaq8kKctWZD9">
            <img src="<?php echo get_template_directory_uri(); ?>/img/map.png" alt="">
            <p>アクセス</p>
          </a>
        </div>
      </div>
    </section>

    <!-- Charging System -->
    <!-- (Deleted) -->

    <section class="gallery">
      <div class="wrap">
        <img src="<?php echo get_template_directory_uri(); ?>/img/title-item01.png" alt="">
        <p class="wrap-ttl">GALLEY</p>
        <img src="<?php echo get_template_directory_uri(); ?>/img/title-item02.png" alt="">
      </div>
      <div class="gallery__container">
        <!-- slider -->
        <div class="sliderArea">
          <ul class="full-screen-o slider">
            <li><img src="<?php echo get_template_directory_uri(); ?>/img/gallery01.jpg" alt=""></li>
            <li><img src="<?php echo get_template_directory_uri(); ?>/img/gallery02.jpg" alt=""></li>
            <li><img src="<?php echo get_template_directory_uri(); ?>/img/gallery03.jpg" alt=""></li>
            <li><img src="<?php echo get_template_directory_uri(); ?>/img/gallery04.jpg" alt=""></li>
            <li><img src="<?php echo get_template_directory_uri(); ?>/img/gallery05.jpg" alt=""></li>
            <li><img src="<?php echo get_template_directory_uri(); ?>/img/gallery06.jpg" alt=""></li>
            <li><img src="<?php echo get_template_directory_uri(); ?>/img/gallery07.jpg" alt=""></li>
            <li><img src="<?php echo get_template_directory_uri(); ?>/img/gallery08.jpg" alt=""></li>
            <li><img src="<?php echo get_template_directory_uri(); ?>/img/gallery09.jpg" alt=""></li>
          </ul>
        </div>
      </div>
    </section>

    <!-- information -->
    <section class="info">
      <div class="info__container">
        <div class="wrap">
          <img src="<?php echo get_template_directory_uri(); ?>/img/title-item01.png" alt="">
          <p class="wrap-ttl">INFORMATION</p>
          <img src="<?php echo get_template_directory_uri(); ?>/img/title-item02.png" alt="">
        </div>
        <div class="info__container-box">
          <?php get_template_part('includes/7-campaign'); ?>
        </div>
        <div class="btn">
          <p class="btn__text"><a href="/page-information">MORE</a></p>
          <p class="triangle-line"></p>
        </div>
      </div>
    </section>

    <!-- SNS -->
    <section class="sns">
      <div class="wrap">
        <img src="<?php echo get_template_directory_uri(); ?>/img/title-item01.png" alt="">
        <p class="wrap-ttl">SNS</p>
        <img src="<?php echo get_template_directory_uri(); ?>/img/title-item02.png" alt="">
      </div>
      <div class="sns__container">
        <div class="sns__container-content" style="margin: 10px;">
          <a href="https://instagram.com/w_the_lounge?igshid=YmMyMTA2M2Y=">
            <img src="<?php echo get_template_directory_uri(); ?>/img/instagram.png" alt="Instagram" style="width: 65px; height: 65px;">
          </a>
        </div>
        <div class="sns__container-content" style="margin: 10px;">
          <a href="https://lin.ee/aF2rd2f">
            <img src="<?php echo get_template_directory_uri(); ?>/img/line.png" alt="LINE" style="width: 67px; height: 67px;">
          </a>
          <p>男性用</p>
        </div>
        <div class="sns__container-content" style="margin: 10px;">
          <a href="https://lin.ee/G6qSxNU">
            <img src="<?php echo get_template_directory_uri(); ?>/img/line.png" alt="LINE" style="width: 67px; height: 67px;">
          </a>
          <p>女性用</p>
        </div>
      </div>
    </section>

    <section class="access">
      <div class="wrap">
        <img src="<?php echo get_template_directory_uri(); ?>/img/title-item01.png" alt="">
        <p class="wrap-ttl">ACCESS</p>
        <img src="<?php echo get_template_directory_uri(); ?>/img/title-item02.png" alt="">
      </div>
      <div class="access_container">
        <div class="access__container-map">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3241.644352994361!2d139.6963277153815!3d35.661133038681115!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188d552b9a2da5%3A0xbe3790596fcb7300!2sW%20THE%20LOUNGE!5e0!3m2!1sja!2sjp!4v1654858970306!5m2!1sja!2sjp" width="440" height="330" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class="access__container-content">
          <p class="access__container-content-ttl">渋谷店</p>
          <div class="line-item"></div>
          <div class="line-items"></div>
          <div class="access__container-content-text">
            <ul class="flex">
              <li class="about">住所</li>
              <ul>
                <li>〒150-0042</li>
                <li>東京都渋谷区宇田川町13-8 ちとせ会館 5階</li>
              </ul>
            </ul>
            <ul class="flex">
              <li class="about">営業時間</li>
              <ul>
                <li>18:00〜翌日5:00 / 年中無休</li>
              </ul>
            </ul>
            <ul class="flex">
              <li class="about">電話番号</li>
              <ul>
                <li>03-6427-0919</li>
              </ul>
            </ul>
          </div>
        </div>
      </div>
    </section>

    <!-- 相席連盟 -->
    <?php get_template_part('includes/association'); ?>
  </div>

  <?php get_footer(); ?>
</body>

</html>