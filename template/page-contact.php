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
    <?php
      get_template_part('includes/header');
      get_template_part('includes/top-bar');
    ?>
    <img src="<?php echo get_template_directory_uri(); ?>/img/contact-main.jpg" alt="" class="header__wrapper-main-img-sp">
  </header>

  <div class="inner">
    <section class="contact">
      <div class="wrap">
        <img src="<?php echo get_template_directory_uri(); ?>/img/title-item01.png" alt="">
        <p class="wrap-ttl">CONTACT</p>
        <img src="<?php echo get_template_directory_uri(); ?>/img/title-item02.png" alt="">
      </div>
      <div class="contact__container">
        <form action="" method="get" class="form-example">
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