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
        <img src="<?php echo get_template_directory_uri();?>/img/logo.png" alt="ロゴ" class="logo">
        <p>渋谷　SHIBUYA</p>
      </div>
    </div>
    <div class="header__main-img-sp">
      <section class="count">
        <p>Visitor</p>
        <p class="time">19:00</p>
        <div class="count__box">
          <div class="count__box-counter for-men">
            <img src="<?php echo get_template_directory_uri();?>/img/mens.png" alt="">
            <div class="count__box-counter-item">
              <p class="sex">MEN</p>
              <p class="underline"></p>
              <p class="person">0人</p>
            </div>
          </div>
          <p class="centerline"></p>
          <div class="count__box-counter for-woman">
            <img src="<?php echo get_template_directory_uri();?>/img/woman.png" alt="">
            <div class="count__box-counter-item">
              <p class="sex">WOMAN</p>
              <p class="underline"></p>
              <p class="person">0人</p>
            </div>
          </div>
        </div>
        <div class="count__bottom">
          <div class="count__bottom-item">
            <a href="/">
              <img src="<?php echo get_template_directory_uri();?>/img/call.png" alt="">
              <p>0000-00-000</p>
            </a>
          </div>
          <div class="count__bottom-item">
            <a href="/">
              <img src="<?php echo get_template_directory_uri();?>/img/map.png" alt="">
              <p>アクセス</p>
            </a>
          </div>
        </div>
      </section>
    </div>
  </header>

  <div class="inner">
    <!-- <section class="event">
      <div class="wrap">
        <img src="http://double-the-lounge.local/wp-content/themes/DOUBLETHELOUNGE/img/title-item01.png" alt="">
        <p class="wrap-ttl">EVENT</p>
        <img src="http://double-the-lounge.local/wp-content/themes/DOUBLETHELOUNGE/img/title-item02.png" alt="">
      </div>
      <div class="event__container">
        <img src="http://double-the-lounge.local/wp-content/themes/DOUBLETHELOUNGE/img/blog_img01.png" alt="">
        <div class="event__container-content">
          <p class="s-text">期間 0/00〜0/00</p>
          <p class="event__container-content-title">タイトル○○○○○○○○○</p>
          <div class="event__container-content-text">
            <p>タイトル</p>
            <p>
              ◯◯◯◯◯◯◯◯◯◯◯◯◯◯◯◯◯◯◯◯◯◯◯◯◯◯◯◯◯◯◯◯◯◯◯◯◯◯◯◯◯◯◯◯◯◯◯◯◯◯◯◯◯◯◯◯◯◯◯◯◯◯◯◯◯◯◯◯◯◯◯◯◯◯◯◯◯◯◯◯◯◯◯◯◯◯◯◯◯◯◯◯◯◯◯◯◯◯◯◯◯◯◯◯◯◯◯◯◯◯◯◯◯◯◯◯◯◯◯◯◯◯◯◯◯◯◯◯◯◯◯◯◯◯
            </p>
          </div>
          <div class="btn">
            <p class="btn__text"><a href="/">MORE</a></p>
            <p class="triangle-line"></p>
          </div>
        </div>
    </section> -->
    <a href="<?php echo get_template_directory_uri();?>/store/"></a>

    <!-- system -->
    <section class="system">
      <div class="wrap">
        <img src="<?php echo get_template_directory_uri();?>/img/title-item01.png" alt="">
        <p class="wrap-ttl">SYSTEM</p>
        <img src="<?php echo get_template_directory_uri();?>/img/title-item02.png" alt="">
      </div>
      <div class="system__container">
        <div class="system__container-content">
          <p class="system__container-content-title woman">WOMAN</p>
          <nav class="system__container-content-list">
            <ul>
              <li>チャージ</li>
              <li>0円</li>
            </ul>
            <ul>
              <li>飲み放題</li>
              <li>0円</li>
            </ul>
            <ul>
              <li>フード</li>
              <li>会員登録で2品サービス</li>
            </ul>
          </nav>
        </div>
        <div class="system__container-content">
          <p class="system__container-content-title man">MAN</p>
          <nav class="system__container-content-list">
            <ul style="margin-bottom: 0;">
              <li>チャージ</li>
              <li>500円</li>
            </ul>
            <p style="text-align: end;">＊会員登録で無料</p>
            <p class="system__container-content-list-box black">非相席時</p>
            <ul>
              <li>飲み放題</li>
              <li>200円<span>/10分</span></li>
            </ul>
            <p class="system__container-content-list-box gold">相席時</p>
            <ul>
              <li>飲み放題</li>
              <li>500円<span>/10分</span></li>
            </ul>
            <ul>
              <li>VIP ROOM</li>
              <li>5000円<span>/60分</span></li>
            </ul>
          </nav>
        </div>
      </div>
      <div class="btn">
        <p class="btn__text"><a href="/">システムの詳しいご案内</a></p>
        <p class="triangle-line"></p>
      </div>

      <!-- <div class="system__banner">
        <img src="img/banner-01.png" alt="">
        <img src="img/banner-02.png" alt="">
      </div> -->
    </section>

    <section class="gallery">
      <div class="wrap">
        <img src="<?php echo get_template_directory_uri();?>/img/title-item01.png" alt="">
        <p class="wrap-ttl">GALLEY</p>
        <img src="<?php echo get_template_directory_uri();?>/img/title-item02.png" alt="">
      </div>
      <div class="gallery__container">
        <!-- slider -->
        <div class="sliderArea">
          <ul class="full-screen-o slider">
            <li><img src="<?php echo get_template_directory_uri();?>/img/gallery01.jpg" alt=""></li>
            <li><img src="<?php echo get_template_directory_uri();?>/img/gallery02.jpg" alt=""></li>
            <li><img src="<?php echo get_template_directory_uri();?>/img/gallery03.jpg" alt=""></li>
            <li><img src="<?php echo get_template_directory_uri();?>/img/gallery04.jpg" alt=""></li>
            <li><img src="<?php echo get_template_directory_uri();?>/img/gallery05.jpg" alt=""></li>
            <li><img src="<?php echo get_template_directory_uri();?>/img/gallery06.jpg" alt=""></li>
            <li><img src="<?php echo get_template_directory_uri();?>/img/gallery07.jpg" alt=""></li>
            <li><img src="<?php echo get_template_directory_uri();?>/img/gallery08.jpg" alt=""></li>
            <li><img src="<?php echo get_template_directory_uri();?>/img/gallery09.jpg" alt=""></li>
          </ul>
        </div>
      </div>
    </section>

    <!-- information -->
    <section class="info">
      <div class="info__container">
        <div class="wrap">
          <img src="<?php echo get_template_directory_uri();?>/img/title-item01.png" alt="">
          <p class="wrap-ttl">INFORMATION</p>
          <img src="<?php echo get_template_directory_uri();?>/img/title-item02.png" alt="">
        </div>
        <div class="info__container-box">
          <div class="info__container-box-content">
            <a href="/">
              <img src="<?php echo get_template_directory_uri();?>/img/information-item01.png" alt="">
            </a>
            <p>タイトル○○○○</p>
          </div>
          <div class="info__container-box-content">
            <a href="/">
              <img src="<?php echo get_template_directory_uri();?>/img/information-item02.png" alt="">
            </a>
            <p>タイトル○○○○○</p>
          </div>
        </div>
        <div class="btn">
          <p class="btn__text"><a href="/">MORE</a></p>
          <p class="triangle-line"></p>
        </div>
      </div>
    </section>
    <section class="sns">
      <div class="wrap">
        <img src="<?php echo get_template_directory_uri();?>/img/title-item01.png" alt="">
        <p class="wrap-ttl">SNS</p>
        <img src="<?php echo get_template_directory_uri();?>/img/title-item02.png" alt="">
      </div>
      <div class="sns__container">
        <div class="sns__container-content">
          <a href=""><img src="<?php echo get_template_directory_uri();?>/img/instagram.png" alt="" style="width: 65px; height: 65px;"></a>
          <img src="<?php echo get_template_directory_uri();?>/img/instagram-text.png" alt="">
        </div>
        <div class="sns__container-content">
          <a href=""><img src="<?php echo get_template_directory_uri();?>/img/line.png" alt="" style="width: 67px; height: 67px;"></a>
          <img src="<?php echo get_template_directory_uri();?>/img/line-text.png" alt="" class="line-text">
        </div>
      </div>
    </section>

    <section class="access">
      <div class="wrap">
        <img src="<?php echo get_template_directory_uri();?>/img/title-item01.png" alt="">
        <p class="wrap-ttl">ACCESS</p>
        <img src="<?php echo get_template_directory_uri();?>/img/title-item02.png" alt="">
      </div>
      <div class="access_container">
        <div class="access__container-map">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3241.644529130895!2d139.6985164!3d35.6611287!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188ca9aa6d65ad%3A0xe30891ade18d238a!2z44CSMTUwLTAwNDIg5p2x5Lqs6YO95riL6LC35Yy65a6H55Sw5bed55S677yR77yT4oiS77yYIOOBoeOBqOOBm-S8mumkqCA16ZqO!5e0!3m2!1sja!2sjp!4v1647951482562!5m2!1sja!2sjp" width="440" height="330" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
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


    <!-- series -->
    <section class="series">
      <div class="wrap">
        <img src="<?php echo get_template_directory_uri();?>/img/title-item01.png" alt="">
        <p class="wrap-ttl">相席連盟加盟店</p>
        <img src="<?php echo get_template_directory_uri();?>/img/title-item02.png" alt="">
      </div>
      <div class="series__container">
        <div class="series__container-content">
          <div class="series__container-content-boxes">
            <div class="series__container-content-boxes-shop okayama-shop">
              <div class="series__container-content-boxes-shop-items">
                <div class="shop-ttl">
                  <p>岡山</p>
                  <p>OKAYAMA</p>
                </div>
                <div class="center-line"></div>
                <p>XIX the lounge</p>
              </div>
            </div>
            <div class="btn">
              <p class="btn__text"><a href="https://xix-thelounge.com">詳細について</a></p>
            </div>
          </div>
          <div class="person-counter">
            <div class="person-counter__box">
              <div class="person-counter__box-item for-men">
                <img src="<?php echo get_template_directory_uri();?>/img/mens.png" alt="">
                <div class="person-counter__box-items ">
                  <p class="sex">MEN</p>
                  <p class="underline"></p>
                  <p class="person">0人</p>
                </div>
              </div>
              <p class="centerline"></p>
              <div class="person-counter__box-item for-woman">
                <img src="<?php echo get_template_directory_uri();?>/img/woman.png" alt="">
                <div class="person-counter__box-items">
                  <p class="sex">WOMAN</p>
                  <p class="underline"></p>
                  <p class="person">0人</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="series__container-content">
          <div class="series__container-content-boxes">
            <div class="series__container-content-boxes-shop ayame-shop"></div>
            <div class="btn">
              <p class="btn__text"><a href="https://www.aisekisakaba-ayame.com">詳細について</a></p>
            </div>
          </div>
          <div class="person-counter">
            <div class="person-counter__box">
              <div class="person-counter__box-item for-men">
                <img src="<?php echo get_template_directory_uri();?>/img/mens.png" alt="">
                <div class="person-counter__box-items ">
                  <p class="sex">MEN</p>
                  <p class="underline"></p>
                  <p class="person">0人</p>
                </div>
              </div>
              <p class="centerline"></p>
              <div class="person-counter__box-item for-woman">
                <img src="<?php echo get_template_directory_uri();?>/img/woman.png" alt="">
                <div class="person-counter__box-items">
                  <p class="sex">WOMAN</p>
                  <p class="underline"></p>
                  <p class="person">0人</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <?php get_template_part('includes/footer'); ?>
  </div>

  <?php get_footer(); ?>
</body>

</html>