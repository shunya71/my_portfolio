<?php

/**
 * Template Name: お問い合わせ
 * @package WordPress
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <?php get_header(); ?>
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/scss/contact.css">
</head>

<body>
  <!-- header -->
  <header>
    <?php get_template_part('includes/header'); ?>
    <div class="header">
      <div class="header__wrapper">
        <img src="<?php echo get_template_directory_uri();?>/img/logo.png" alt="ロゴ" class="logo">
        <p>Double THE LOUNGE</p>
      </div>
    </div>
    <div class="header__main-img-sp"></div>
  </header>
  <div class="inner">


    <section class="contact">
      <div class="wrap">
        <img src="<?php echo get_template_directory_uri();?>/img/title-item01.png" alt="">
        <p class="wrap-ttl">CONTACT</p>
        <img src="<?php echo get_template_directory_uri();?>/img/title-item02.png" alt="">
      </div>
      <div class="contact__container">
        <form action="" method="get" class="form-example">
          <div class="form-example">
            <label for="about">お問い合わせ項目<span>必須</span></label>
            <input type="text" name="about" id="about" class="about" required>
          </div>
          <div class="form-example">
            <label for="name">お名前<span>必須</span></label>
            <input type="text" name="name" id="name" class="name" require>
          </div>
          <div class="form-example">
            <label for="email">メールアドレス<span>必須</span></label>
            <input type="email" name="email" id="email" class="email" required>
          </div>
          <div class="form-example">
            <label for="tell">電話番号</label>
            <input type="tel" name="tel" id="tel" class="tel">
          </div>
          <div class="form-example">
            <label for="text">お問い合わせ内容</label>
            <textarea name="message" id="message" class="message" cols="30" rows="8"></textarea>
          </div>
          <div class="form-example btn-submit">
            <input type="submit" value="送信" class="submit">
          </div>
        </form>
      </div>
    </section>

    <!-- store -->
    <section class="store">
      <div class="wrap">
        <img src="<?php echo get_template_directory_uri();?>/img/title-item01.png" alt="">
        <p class="wrap-ttl">STORE</p>
        <img src="<?php echo get_template_directory_uri();?>/img/title-item02.png" alt="">
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
          <p class="btn__text"><a href="/store/">店舗詳細</a></p>
          <p class="triangle-line"></p>
        </div>
      </div>
    </section>

    <section class="count">
      <div class="count__box">
        <div class="count__box-counter for-men">
          <img src="<?php echo get_template_directory_uri();?>/img/mens.png" alt="" style="width: 35px; height: 109px;">
          <div class="count__box-counter-item">
            <p class="sex">MEN</p>
            <p class="underline"></p>
            <p class="person">0人</p>
          </div>
        </div>
        <p class="centerline"></p>
        <div class="count__box-counter for-woman">
          <img src="<?php echo get_template_directory_uri();?>/img/woman.png" alt="" style="width: 35px; height: 109px;">
          <div class="count__box-counter-item">
            <p class="sex">WOMAN</p>
            <p class="underline"></p>
            <p class="person">0人</p>
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