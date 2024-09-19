<!DOCTYPE html>
<html lang="ja">
<head>
  <title>Cozy Inn</title>
  <meta charset="UTF-8">
  <meta name="description" content="デザイナーズホテルへようこそ!">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/style.css'; ?>"

  <!-- Add the slick-theme.css if you want default styling -->
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
  <!-- Add the slick-theme.css if you want default styling -->
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>
  <?php wp_head(); ?>
</head>
<body>
  <!-- ヘッダー -->
    <header>
      <!-- ロゴ -->
      <a href="index.html">
        <img class="logo" src="<?php echo get_template_directory_uri() . '/images/logo.png'; ?>" alt="トップページに戻る">
      </a>
      
      <!-- ナビゲーション -->
      <nav class="nav">
        <ul class="nav-gap">
          <li><a href="index.html#hotel-intro">ホテル紹介</a></li>
          <li><a href="index.html#recommend">今月のおすすめ</a></li>
          <li><a href="index.html#feature">特集</a></li>
        </ul>
      </nav>

    </header>
  <main>