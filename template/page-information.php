<?php

/**
 * Template Name: インフォメーション
 * @package WordPress
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <?php get_header(); ?>
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/scss/information.css">
</head>

<body>
  <!-- header -->
  <header>
    <?php
    get_template_part('includes/header');
    get_template_part('includes/top-bar');
    ?>
    <img src="<?php echo get_template_directory_uri(); ?>/img/info-main.jpg" alt="" class="header__wrapper-main-img-sp">
  </header>

  <div class="inner">
    <!-- information -->
    <section class="info">
      <div class="info__container">
        <div class="wrap">
          <img src="<?php echo get_template_directory_uri(); ?>/img/title-item01.png" alt="">
          <p class="wrap-ttl">INFORMATION</p>
          <img src="<?php echo get_template_directory_uri(); ?>/img/title-item02.png" alt="">
        </div>
        <div class="info__container-box">
          <?php
          get_template_part('includes/7-campaign');
          get_template_part('includes/6month-campaign');
          get_template_part('includes/no2-info');
          get_template_part('includes/campaign-info');
          get_template_part('includes/no1-info');
          ?>
        </div>
        <div class="btn">
          <p class="btn__text"><a href="/">MORE</a></p>
          <p class="triangle-line"></p>
        </div>
      </div>
    </section>


    <?php
    $args = array('post_type' => '');  // カスタム投稿タイプ Products
    $the_query = new WP_Query($args);
    if ($the_query->have_posts()) :
    ?>
      <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
        <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
          <?php echo get_the_date(); ?>
          <?php the_permalink(); ?>
          <?php echo get_the_title(); ?>
          <?php the_content(); ?>
        </div>
      <?php endwhile; ?>
      <?php wp_reset_postdata(); ?>
    <?php else : ?>
      <!-- 投稿が無い場合の処理 -->
    <?php endif; ?>


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